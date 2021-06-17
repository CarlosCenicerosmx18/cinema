<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';
    //relacion one to many
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
    public function movies(){
        return $this->hasMany('App\Models\Movie');
    }
    //relacion one to many
    public function likes(){
        return $this->hasMany('App\Models\Like');
    }
    //relacion many to one
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }

    
}
