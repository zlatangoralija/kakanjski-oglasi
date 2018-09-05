<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = [
        'title', 'short_description', 'body', 'price', 'condition', 'user_id', 'photo_id', 'category_id',
        ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function photo(){
        return $this->belongsTo('App\Photo', 'photo_id');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
