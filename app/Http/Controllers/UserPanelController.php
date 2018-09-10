<?php

namespace App\Http\Controllers;

use App\Category;
use App\Photo;
use App\User;
use Faker\Provider\File;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class UserPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
        $user = Auth::user();
        $ads = Auth::user()->ads->all();
        return view('frontend.user.index', compact('user', 'ads'));
        }
        return view('auth.login');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ads = Auth::user()->ads->all();
        $user = Auth::user();
        $categories = Category::lists('name', 'id')->all();
        return view('frontend.user.create', compact('categories', 'user', 'ads'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Spremanje oglasa za odredjenog usera
        $user = Auth::user();
        $input = $request->all();

        //provjerava se da li postoji fajl u formi, ako postoji daje mu se ime, prebacuje se u direktorij "images" i sprema se u bazu podataka
        if ($file = $request->file('photo_id')){
            $name = time().$file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['path'=>$name]);
            $input['photo_id'] = $photo->id;
        }

        $user->ads()->create($input);
        return redirect('/userPanel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('frontend.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        //Provjeravanje da li ima passworda, ako ga ima zanemaruje se i unose se ostali podaci u bazu podataka
        if (trim($request->password) == ''){
            $input = $request->except('password');
        } else {
            $input = $request->all();
        }

        if ($file = $request->file('photo_id')){
            //Brisanje vec postojece slike
            $usersImage = public_path("/images/{$user->photo->path}"); //prethodna userova slika
            if(file_exists($usersImage)){ //ako postoji userova slika, ta se brise a poslije te se dodaje nova
                unlink($usersImage);
            }
            $name = time().$file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['path'=>$name]);

            $input['photo_id']= $photo->id;
        }
        $user->update($input);
        return redirect('/userPanel');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
