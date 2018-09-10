<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'name', 'email', 'password', 'region', 'city', 'post_number', 'address', 'birthday', 'phone_number', 'photo_id', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function ads(){
        return $this->hasMany('App\Ad');
    }

    public function photo(){
        return $this->belongsTo('App\Photo', 'photo_id');
    }

    //provjeravamo da li je user subsrciber kako bi to mogli koristiti za middleware
    public function isSubscriber(){
        if($this->role->name == "subscriber"){
            return true;
        }
        return false;
    }
}
