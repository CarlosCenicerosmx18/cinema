<?php

namespace App\Http\Controllers;

//use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\HttpCache\Store;
use Illuminate\Support\Facades\File;
use Illuminate\http\Response;
use App\Models\Movie;
use App\Models\Actores;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Movie_actors;

class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  //


  public function config()
  {
    return view('user.config');
  }
  // public function movie(){
  //    $movies=Movie::orderBy('id','desc')->get();
  //       return view('dashboard',[
  //           'movies'=>$movies
  //       ]);
  // }
  // public function movie($filename){
  //   $file= Storage::disk('images')->get($filename);
  //   return new Response($file,200);
  // }
  
  public function update(Request $request)
  {
    //conseguir al usuario identificado
    $user = \Auth::user();
    $id = \Auth::user()->id;
    //validacion del form
    $validate = $this->validate($request, [
      'name' => ['required', 'string', 'max:255'],
      'surname' => ['required', 'string', 'max:255'],
      'nick' => ['required', 'string', 'max:255', 'unique:users,nick,' . $id],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
    ]);
    //recoger los datos del form
    $name = $request->input('name');
    $surname = $request->input('surname');
    $nick = $request->input('nick');
    $email = $request->input('email');
    //actualizar los datos del objeto user
    $user->name = $name;
    $user->surname = $surname;
    $user->nick = $nick;
    $user->email = $email;

    //subir la imagen
    $image_path = $request->file('image_path');

    if ($image_path != null) {
      $image_path_name = time() . $image_path->getClientOriginalName();
      Storage::disk('users')->put($image_path_name, File::get($image_path));

      $user->image = $image_path_name;
    }

    //update de la bd
    $user->update();
    return redirect()->route('config')
      ->with(['message' => 'Usuario actualizado correctamente']);
  }
  public function getImage($filename){
    $file= Storage::disk('users')->get($filename);
    return new Response($file,200);
  }

  //subir datos de la pelicula
  public function addMovie(Request $request){

//validacion


    $titulo=$request->input('titulo');
    $description=$request->input('sinopsis');
    $year=$request->input('year');
    $idioma=$request->input('idioma');
    $genero=$request->input('genero');

    $image_path= $request->file('image_path');
    $movie_path= $request->file('movie_path');
    //asignar modelos
    $user= \Auth::user()->id;
    $movie= new Movie();
    
    
    $movie->year=$year;
    $movie->language=$idioma;
    $movie->genero=$genero;
    
    if($titulo){
      $movie->name=$titulo;
    }else{
      return redirect()->route('administrarp')->with([
        'message2'=>'Necesitas ponerle un titulo a la pelicula 🙋‍♂️'
         ]);
    }
    if($description){
      $movie->description=$description;
        }else{
      return redirect()->route('administrarp')->with([
        'message2'=>'Olvidaste poner una Sinopsis  🔊'
         ]);
    }
    
    //subir fichero
  if($image_path){
    $image_path_name=time().$image_path->getClientOriginalName();
    Storage::disk('images')->put($image_path_name,File::get($image_path));
    $movie->image_path=$image_path_name;

  }else{
    return redirect()->route('administrarp')->with([
      'message2'=>'No agregaste una imagen de portada 😒'
       ]);
  }
  if($movie_path){
    $movie_path_name=$movie_path->getClientOriginalName();
    Storage::disk('images')->put($movie_path_name,File::get($movie_path));
    $movie->movie_path=$movie_path_name;

  }else{
    return redirect()->route('administrarp')->with([
      'message2'=>'No agregaste un archivo de video 😒'
       ]);
  }
  $movie->user_id=$user;
  $movie->save();

  return redirect()->route('administrarp')->with([
     'message'=>'la pelicula ha sido subida correctamente ❤'
      ]);
    
  }
  //fin datos de pelicula

  //actors
  public function addActor(Request $request){
    $nombre=$request->input('nombre_actor');
    $apellido=$request->input('apellido_actor');
    $image_path= $request->file('image_path');
    $actor = new Actores();

    if($nombre){
      $actor->nombre=$nombre;
    }else{
      return redirect()->route('administrarp')->with([
        'message2'=>'Olvidaste ponerle un nombre al actor 😟'
         ]);
    }
    if($apellido){
      $actor->apellido=$apellido;
    }else{
      return redirect()->route('administrarp')->with([
        'message2'=>'El actor que intentaste agregar debe de tener algun apellido 😶'
         ]);
    }
    if($image_path){
      $image_path_name=$image_path->getClientOriginalName();
      Storage::disk('public')->put($image_path_name,File::get($image_path));
      $actor->image_path=$image_path_name;
  
    }else{
      return redirect()->route('administrarp')->with([
        'message2'=>'Olvidaste agregar una foto del actor 🥺'
         ]);
    }
    $actor->save();

    return redirect()->route('administrarp')->with([
      'message'=>'Actor agregado de forma correcta 🥳'
       ]);
     
   


  }
  public function relacion(Request $request){
    $pelicula=$request->input('pelicula-p');
    $actor=$request->input('pelicula-a');
    $movie_actors= new Movie_actors();

    $movie_actors->id_actores=$actor;
    $movie_actors->id_movies=$pelicula;
    $movie_actors->save();
    return redirect()->route('administrarp')->with([
      'message'=>'relacion completada de forma correcta'
       ]);
  }


  //actualizar informaciond de la pelicula
  public function updateMovie(Request $request)
  {
    //id de la pelicula
    $id_movie=$request->input('id_movie');
   
    //recoger los datos del form
    $name = $request->input('name');
    $description = $request->input('description');
    $year = $request->input('year');
    $language = $request->input('language');
    $image_path= $request->file('image_path');

    
  
    //subir la imagen
    $movie = Movie::find($id_movie);
      $movie->name=$name;
      $movie->description=$description;
      $movie->year=$year;
      $movie->language=$language;
    
    if ($image_path != null) {
      $image_path_name = time() . $image_path->getClientOriginalName();
      Storage::disk('images')->put($image_path_name, File::get($image_path));

      
      $movie->image_path=$image_path_name;

    }

    //update de la bd
    $movie->update();
    return redirect()->route('adminpaf',['id'=>$id_movie])
      ->with(['message' => 'Pelicula actualizada correctamente']);
   }

   //nuevo comentario

   public function addComent(Request $request){
    $user = \Auth::user();
    $id = \Auth::user()->id;
    $comentario=$request->input('coment');
    $id_movie=$request->input('id_movie');
    
    $com = new Comment();

    $com->user_id=$id;
    $com->id_movie=$id_movie;

    if($comentario){
      $com->content=$comentario;
    }else{
      return redirect()->route('administrarp')->with([
        'message2'=>'Olvidaste escribir el comentario 😟'
         ]);
    }
    
    $com->save();

    return redirect()->route('movie',['id'=>$id_movie])->with([
      'message'=>'Gracias por comentar 🥳'
       ]);
     
   


  }
  public function deleteComent(Request $request){
    
    $id_coment=$request->input('id_comentario');
    $id_movie=$request->input('id_movie');
    $action=$request->input('borrar');
   
      $com=Comment::where('id', '=', $id_coment)->delete();

      return redirect()->route('movie',['id'=>$id_movie])->with([
        'message'=>'Comentario Borrado 😈'
         ]);
   

  }
  public function updateComent(Request $request){
    
    $id_coment=$request->input('id_comentario');
    $id_movie=$request->input('id_movie');
    $text=$request->input('act');
   
    $com = Comment::find($id_coment);
      $com->content=$text;
      $com->save();

      return redirect()->route('movie',['id'=>$id_movie])->with([
        'message'=>'Comentario actualizado 😄'
         ]);
   

  }

  public function deleteMovie(Request $request){
    
    $id_eliminar=$request->input('id_movie');
   $movie_delete_id=Movie::find($id_eliminar);
      $movie_delete_id->delete();


      return redirect()->route('administrarpa')->with([
        'message'=>'Pelicula eliminada de forma correcta'
         ]);
   

  }
  
  


}

