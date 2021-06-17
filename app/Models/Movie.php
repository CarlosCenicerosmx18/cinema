<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movies';
    protected $primaryKey = 'id_movie';
    //relacion many to one
    public function image(){
        return $this->belongsTo('App\Models\Image','image_id');
    }

    public function actores(){
        return $this->belongsToMany('App\Models\Actores');
    }
    public function comments(){
        return $this->hasMany('App\Models\Comment');
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
