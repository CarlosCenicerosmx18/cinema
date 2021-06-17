<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie_actors extends Model
{
    use HasFactory;
    protected $table = 'actores_movies';
    public function actor(){
        return $this->belongsTo('App\Models\Actores','id');
    }
    public function movies(){
        return $this->belongsTo('App\Models\Movie','id_movie');
    }

}
