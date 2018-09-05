<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'path',
    ];

//    //Kreiranje accessor-a da ne bi rucno pisali soruce = /images/
//    protected $uploads = '/images/';
//
//    public function getFileAttribute($photo){
//        return $this->uploads.$photo;
//    }

}
