<?php

namespace App\Http\Controllers;

use App\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Photo;

use App\Http\Requests;
use Intervention\Image\Facades\Image;

class UserAdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::all();
        $numberOfAds = count($ads);
        return view('welcome', compact('ads', 'numberOfAds'));
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

            // // create instance of Intervention Image
            $img = Image::make('images/'.$name);
            $img->save(public_path().'/images/'.$name);
            $thumbnailImage = Image::make($img);
            $thumbnailImage->fit(800, 400); //od orginalne slike praviimo thumbnail koji ce imati velicinu 800x400
            $thumbnailImage->save(public_path().'/thumbnails/'.$name);

        }

        $user->ads()->create($input);
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad::findOrFail($id);
        return view('frontend.user.ad_edit', compact('ad'));
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
        $ad = Ad::findOrFail($id);
        $input = $request->all();

        if ($file = $request->file('photo_id')){
            //Brisanje vec postojece slike
            $adsImage = public_path("/images/{$ad->photo->path}"); //prethodna userova slika
            if(file_exists($adsImage)){ //ako postoji userova slika, ta se brise a poslije te se dodaje nova
                unlink($adsImage);
            }
            $name = time().$file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['path'=>$name]);

            $input['photo_id']= $photo->id;
        }

        $ad->update($input);
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ad::destroy($id);
        return redirect()->back();
    }
}
