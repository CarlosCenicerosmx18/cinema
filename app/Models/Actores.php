<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actores extends Model
{
    use HasFactory;
    protected $table = 'actores';
    public function movies(){
        return $this->belongsTo('App\Models\Movies_actors');
    }

}
