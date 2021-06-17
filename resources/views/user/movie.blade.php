<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelicula</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="style/normalize.css">
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            <link rel="stylesheet" href="{{ asset('css/movie.css') }}">
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
    
    <div class="content">
        <!DOCTYPE html>
        <html lang="en">
        
       
        
        <body>
                <header class="header">
                    <div class="logo">
                        <a href="{{route('login')}}"><img src="{{asset('images/icons/cinema.png')}}" alt="Logo"></a>
                    </div>
                    <div class="banner">
                        <nav class="nav">
                            <ul>
                                <li><a href="#">Series</a></li>
                                <li><a href="#">Peliculas</a></li>
                                <li><a href="#">Mi lista</a></li>
                            </ul>
                        </nav>
                      
                      @foreach ($movie as $movie)
                      <span class="title"><h2>{{$movie->name}}</h2></span>
                        <video src="{{route('image.file',['filename'=>$movie->movie_path])}}" controls>
                            <source src="{{route('movie',['id'=>$movie->movie_path])}}" type="video/mp4">
                            tu navegador no soporta videos actualiza.
                        </video>
                       

                        
 
                </header>
                <section class="description"> 
                    
                  
                
               <a href="{{route('movie',['id'=>$movie->id_movie])}}"><img width="140px" class="movie-select" src="{{route('image.file',['filename'=>$movie->image_path])}}" alt="Matrix"></a>
               <h2 style="margin-bottom: 10px"> {{$movie->name}}</h2>
               <span>Genero: {{$movie->genero}}</span> <br>
               <span>Idioma: {{$movie->language}}</span> 
           
                    <h3>Sinopsis</h3>
                    <p>
                        {{$movie->description}}
                        
                    </p>
                </section>
                @endforeach
                <span class="txt"><h3>Actores</h3></span>
                    <div class="actors">
                        
                        <?php
                        $info = [0=>0];
                        $foto=[0=>'null'];
                        $nombre=[0=>'null'];
                        $apellido=[0=>'null'];
                        
                    
                        ?>
                        @foreach ($actor as $actor)
    
           
                        <?php
                        // $info=[$i+1=>$actor->id];
                        array_push($info, $actor->id);
                        $orden = Arr::sort($info);
                        array_push($foto, $actor->image_path);
                        array_push($nombre, $actor->nombre);
                        array_push($apellido, $actor->apellido);
                        
                       
                        $final=$actor->id;
                        ?>
                      
                
                     @endforeach
                     @foreach ($personajes as $personajes)
                        
                   
                     @if ($personajes->id_movies==$movie->id_movie)
                     <div class="section-actors" style="margin: 10px; text-align: center">
                     <?php
                   $prota=$personajes->id_actores;
                     ?>
                        {{-- @if ($personajes->id_ma < $final) --}}
                        
                            <span class="name-actors">{{$nombre[$prota]}} {{$apellido[$prota]}}</span> <br>
                            <img class="movie-select" style="width: 130px; height: 180px; overflow: hidden;" src="{{route('image.actor',['filename'=>$foto[$orden[$prota]]])}}" alt="Actor">  
                           </div>
                       
                          
                     

                     @endif
                    
                     @endforeach

           
                     
           

                    </div>
                    <div class="comments">
                        <h2>Comentarios</h2> 
                        
                        <div class="new-coment">
                            <h3>Dejar un comentario</h3>
                            @if(session('message'))
                            
                                {{session('message')}}
                                @endif
                             <form action="{{route('addComent')}}" class="form-group" method="POST">
                                @csrf

                                <input type="hidden" name="id_movie" value="{{$movie->id_movie}}">

                                 <textarea class="form-control" name="coment" id="coment" cols="30" rows="10"></textarea>
                                 <input type="submit" value="Listo" class="btn btn-primary mt-3">
                             </form>
                        </div>
                        <div class="allcomments">
                            <?php
                        $info = [0=>0];
                        $image_u=[0=>'null'];
                        $nick=[0=>'null'];
                       

                    
                        ?>
                        @foreach ($users as $u)
    
           
                        <?php
                        // $info=[$i+1=>$actor->id];
                        array_push($info, $u->id);
                        $orden = Arr::sort($info);
                        array_push($image_u, $u->image);
                        array_push($nick, $u->nick);
                        // array_push($apellido, $u->apellido);

                        $final=$u->id;
                        ?>
                
                     @endforeach
                     <?php
                     $pelicula = [0=>0];
                   
                     
                 
                     ?>
                     @foreach ($movies as $m)
           
                     <?php
                     // $info=[$i+1=>$actor->id];
                     array_push($pelicula, $m->id_movie);
                     $pelis = Arr::sort($pelicula);
                     
                    
                     ?>
                   
             
                  @endforeach
                            @foreach ($comentarios as $com)
                            
                        @if ($pelis[1]==$movie->id_movie)
                          <div class="comentario-u">
                             
                            <div class="user">
                               
                                @if($orden[$com->user_id])
                                    @if($image_u[$com->user_id])
                                        <img src="{{ route('user.avatar',['filename'=>$image_u[$com->user_id]])}}" alt="User"></a>
                                    @else
                                         <img src="{{asset('images/covers/user.png')}}" alt="User"></a>
                                    @endif
                                @endif
    
                              <p> @-{{$nick[$com->user_id]}}</p>
                               
    
                               </div>
                               <div class="content">
                                @if(Auth::user()->id==$orden[$com->user_id])
                                <form action="{{route('updateComment')}}" method="POST">
                                    @csrf   
                                    <input type="hidden" name="id_movie" value="{{$movie->id_movie}}">
                                    <input type="hidden" name="id_comentario" value="{{$com->id}}">

                                    <textarea class="act-text" name="act" id="action" rows="5">{{$com->content}}
                                    </textarea>
                                    <input type="submit" value="Actualizar" name="actualizar" class="btn btn-primary">

                                </form>
                                <div class="delete">
                                    @if(Auth::user()->id==$orden[$com->user_id])
                                        <form action="{{route('deleteComent')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_comentario" value="{{$com->id}}">
                                            <input type="hidden" name="id_movie" value="{{$movie->id_movie}}">
                                            <input type="hidden" name="action" value="b">
                                            
                                            <input type="submit" value="Borrar" name="borrar" class="btn btn-danger">
                                        </form>
                                      
                                    @endif
                                    
                                  
                                </div>
                                @else
                                {{$com->content}}  
                                @endif 
                              
                               </div>
                               <div class="date">
                                   Creado el:
                                   {{$com->created_at}}
                               </div>
                            @endif
                           
                          </div>
                           @endforeach
                        </div>
                        
                     </div>
           
                  
                   
                <div class="navbar">
                    <div class="navbar--opt navbar--active">
                        <img src=" {{ asset('images/icons/home.svg') }}" alt="home">
                        <p>Inicio</p>
                    </div>
        
                    <div class="navbar--opt">
                        <img src="{{ asset('images/icons/cinema.svg') }}" alt="home">
                        <p>Proximamente</p>
                    </div>
        
                    <div class="navbar--opt">
                        <img src="{{ asset('images/icons/search.svg') }}" alt="home">
                        <p>Buscar</p>
                    </div>
        
                    <div class="navbar--opt">
                        <img src="{{ asset('images/icons/download.svg') }}" alt="home">
                        <p>Descargas</p>
                    </div>
        
                </div>
        
        </div>
      
    </body>
        
    <script src="{{asset('js/alert.js')}}"></script>

</body>
</html>