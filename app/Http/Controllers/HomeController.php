<?php

namespace App\Http\Controllers;

use App\Models\Actores;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Movie;
use App\Models\Movie_actors;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        // $movies=Movie::orderBy('id','desc')->get();
        // return view('home',[
        //     'movies'=>$movies
        // ]);
    }
    public function home(){
        // return view('dashboard');
        $movies=Movie::orderBy('id_movie','desc')->get();
        $accion=Movie::where('genero', 'Accion')->get();
        $terror=Movie::where('genero', 'Terror')->get();
        $infantil=Movie::where('genero', 'Infantil')->get();
        $comedia=Movie::where('genero', 'Comedia')->get();
        $suspenso=Movie::where('genero', 'Suspenso')->get();
        $romance=Movie::where('genero', 'Romance')->get();

        return view('dashboard',[
            'movies'=>$movies,
            'accion'=>$accion,
            'terror'=>$terror,
            'infantil'=>$infantil,
            'comedia'=>$comedia,
            'suspenso'=>$suspenso,
            'romance'=>$romance,
        ]);
    }
    
    public function getImage($filename){
        $file= Storage::disk('images')->get($filename);
        return new Response($file,200);
      }
     
      public function getActor($filename){  
        $file= Storage::disk('public')->get($filename);
        return new Response($file,200);
      }

      public function admin(){
        // return view('dashboard');
        $actor=Actores::orderBy('nombre','desc')->get();
        $actores=Actores::orderBy('id','desc')->get();
        $movie=Movie::orderBy('name','desc')->get();
        return view('admin',[
            'actor'=>$actor
        ],[
            'movie'=>$movie
        ]);
    }

    public function getMovies(){
        $movie=Movie::orderBy('nombre','desc')->get();
        return view('admin',[
            'movie'=>$movie
        ]);
    }

    // public function movie($id){
    //     // $movie=Movie::where('id_movie', $id);
    //     // // $movie=Movie::orderBy('id_movie','desc')->get();
    //     // return view('user.movie',[
    //     //     'movie'=>$movie
    //     // ]);
    //     $actor=Actores::orderBy('id','desc')->get();
    //     $movie=Movie::where('id_movie', $id)->get();
    //     return view('user.movie',
    //     [
    //         'movie'=>$movie
    //     ],[
    //         'actor'=>$actor
    //     ]);
    // }
    public function movie($id){
        // $movie=Movie::where('id_movie', $id);
        // // $movie=Movie::orderBy('id_movie','desc')->get();
        // return view('user.movie',[
        //     'movie'=>$movie
        // ]);
        $actor=Actores::orderBy('id','asc')->get();
        $movie=Movie::where('id_movie', $id)->get();
        $personajes=Movie_actors::orderBy('id_ma','desc')->get();
        $act=Actores::where('id', $id)->get();
        $comentarios=Comment::where('id_movie', $id)->get();
        $users=User::orderBy('id','asc')->get();
        $movies=Movie::where('id_movie', $id)->get();


        // $actores=Movie_actors::where('id_actores', $id)->get();
        return view('user.movie',
        [
            'movie'=>$movie],
        // ],[
        //     'actores'=>$actores
        // ],
        [
            'actor'=>$actor,
            'personajes'=>$personajes,
            'act'=>$act,
            'comentarios'=>$comentarios,
            'users'=>$users,
            'movies'=>$movies
        ]);
    }
    // public function getActores($id){
    //  $actores=Movie_actors::orderBy('id','desc')->get();
     
    //  return [
    //     'actores'=>$actores
    //  ];

    // }

    public function administrar(){
     
        return view('administrar');
    }
    public function administrarp(){
        $movie=Movie::orderBy('id_movie','asc')->get();
        $movie2=Movie::orderBy('id_movie','asc')->get();

        $actor=Actores::orderBy('id','asc')->get();
        $actor2=Actores::orderBy('id','asc')->get();


        return view('adminpeliculas',[
            'movie'=>$movie,
            'movie2'=>$movie2,
            'actor'=>$actor,
            'actor2'=>$actor2


        ]);
    }
    public function administrarpa(){
        $movie=Movie::orderBy('id_movie','asc')->get();
        $actor=Actores::orderBy('id','asc')->get();
        return view('adminpa',[
            'movie'=>$movie,
            'actor'=>$actor
        ]);
    }
    public function adminpaf($id){
        $actor=Actores::orderBy('id','asc')->get();
        $movie=Movie::where('id_movie', $id)->get();
        $movie2=Movie::orderBy('id_movie','asc')->get();
        $personajes=Movie_actors::orderBy('id_ma','desc')->get();
        $act=Actores::where('id', $id)->get();
        
        return view('adminpaf',
        [
            'movie'=>$movie,
            'movie2'=>$movie2,
            'actor'=>$actor,
            'personajes'=>$personajes,
            'act'=>$act
        ]
        );
    }
    public function usuarios(){
     
        return view('usuarios');
    }
    public function vistalogin(){
     
        return view('adminlogin');
    }
    public function vistarecomendacion(){
     
        return view('recomendacion');
    }
    public function datos(){
        $movie=Movie::orderBy('id_movie','asc')->get();
        $actor=Actores::orderBy('id','asc')->get();
        return view('datos',[
            'movie'=>$movie,
            'actor'=>$actor
        ]);
    }
}
