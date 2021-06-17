<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <!-- styles -->
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/select2.js')}}"></script>
</head>

<body>
        <header class="header">
           
            <div class="top-nav">
                <div class="logo">
               <a  href="{{route('login')}}"> <img src="{{asset('images/icons/cinema.png')}}" alt="Logo"></a>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="#">Series</a></li>
                    <li><a href="#">Peliculas</a></li>
                    <li><a href="#">Mi lista</a></li>
                    <li><input type="search" name="buscar" id="buscar"></li>
                    <li><a href="{{route('logout')}}">cerrar sesion</a>
                     </a></li>
                   
                </ul>
            </nav>
            <div class="user">
                @if(Auth::user()->role=='admin')
                admin
                @else
                acceso denegado
                <?php ?>
                @endif

               
            </div>
            </div>        

        </div>
        </header>
        <div class="admin">
            <h2 class="banner_admin">Subir una nueva historia</h2>
    
           
    
    
            <div class="opt-nav">
                <ul>
                    <li id="opt1" class="alert alert-success"><label  for="paso1">Paso 1</label><input type="radio" onclick="menu()" name="paso" id="paso1"></li>
                    <li id="opt2" class="alert alert-secondary"><label  for="paso2">Paso 2</label><input onclick="menu()" type="radio" name="paso" id="paso2"></li>
                    <li id="opt3" class="alert alert-secondary"><label for="paso3">Paso 3</label><input  onclick="menu()"type="radio" name="paso" id="paso3"></li>
                </ul>
            </div>
    
    
          
    
            
    
                <div class="movie-info">
                    <div class="info-movie">
                        <h2>Informacion de la pelicula</h2>
                        <img class="loading" id="loading" src="{{asset('images/icons/cargando.png')}}" alt="">

                        <style>
                            .loading{
                                display: none;
                                width: 200px;
                                position: absolute;
                                top: 45%;
                                left: 41%;
                                animation-name: rot;
                                animation-duration: 10s;
                            
                            }
                            @keyframes rot{
                                0%{
                                    transform: rotate(0deg);
                                }
                                50%{
                                    transform: rotate(50deg);
                                }
                                %100{
                                    transform: rotate(100deg);
                                }
                            }

                        </style>
                        

                        @if(session('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif

                    <form action="{{route('addMovie')}}" method="POST" enctype="multipart/form-data">

                        
                        @csrf
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" required>
                        <label for="sinopsis">Sinopsis</label>
                        <textarea class="form-control" required id="exampleFormControlTextarea1" name="sinopsis" rows="4"></textarea>
                        <label for="year">Año</label>
                             <?php
                            $cont = date('Y');
                            ?>
                            <select class="form-control" name="year" id="year" required>
                            <?php while ($cont >= 1950) { ?>
                            <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>
                            <?php $cont = ($cont-1); } ?>
                            </select>
                        
                        <label>Idioma</label>  
                        <input class="form-control" name="idioma" type="text" required>
                        <label>Portada</label>  
                        <input name="image_path" class="form-control" type="file" required> 

                        @if($errors->has('image_path'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$errors->first('image_path')}}</strong>
                            </span>

                        @endif
                        <label>Archivo de video</label>  
                        <input name="movie_path" class="form-control" type="file" required>   

                        @if($errors->has('movie_path'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$errors->first('movie_path')}}</strong>
                            </span>

                        @endif

                        <input type="submit" onclick="loading()" value="Subir pelicula">
                        <script>
                            function loading(){
                                var btn=document.querySelector('#loading');
                                btn.style.display='block';
                            }
                        </script>
                    </form>
                    </div>
                    
                    {{-- <div class="ok">
                        <img src="{{asset('images/icons/ok.png')}}" id="ok" alt="ok">
                    </div> --}}
                </div>
    
                <div class="actors-info">
                    @if(session('message2'))
                    <div class="alert alert-success">
                        {{session('message2')}}
                    </div>
                @endif
                        <div class="add-actors">
                            <h2>Informacion de los actores</h2>
                            {{-- <h3>Verificar si existe el actor</h3>
                            <select class="form-control" name="verificar" id="verificar">
                                
                           
                              
                            </select> --}}
                            <form action="{{route('addActor')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <h3>Si no esta en la base de datos agregalo</h3>
                            <label  for="nombre_actor">Nombre</label>
                            <input class="form-control"  type="text" name="nombre_actor" id="nombre_actor" required>
                            <label for="apellido_actor">Primer Apellido</label>
                            <input  class="form-control" type="text" name="apellido_actor" required>
                            <label for="foto_actor">Foto</label>
                            <input name="image_path" class="form-control" type="file" required> 

                        @if($errors->has('image_path'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$errors->first('image_path')}}</strong>
                            </span>

                        @endif
                            <input type="submit"  value="Agregar">
                            </form>
                        </div>
                    
                     
                  
                </div>
                <div class="media-info">
                    <h2>Relaciona Actores y peliculas</h2>
                    <form action="{{route('add')}}" method="POST">
                        @csrf

                        <label for="banner">Pelicula</label>
                        <select name="pelicula-p" class="form-control" id="buscador">
                         @foreach ($movie as $movie)
                                <option value="{{$movie->id_movie}}">{{$movie->name}}</option>
                        @endforeach 
                        </select>

                        <label for="banner">Actor</label>
                        <select name="pelicula-a" class="form-control" id="buscador2">
                            @foreach ($actor as $actor)
                            <option value="{{$actor->id}}">{{$actor->nombre.' '.$actor->apellido}}</option>
                            
                        @endforeach 
                        </select>
                        <input type="submit" value="Relacionar">
                    </form>
                </div>
                <style>
                    select{
                        width: 600px !important;
                        display: block;
                    }
                </style>
    
            
        </div>
        <script src="{{ asset('js/admin-opt.js') }}"></script>
        <script src="{{ asset('js/ok.js') }}"></script>

        <script>
           $(document).ready(function() {
             $('#buscador').select2();
                });
        </script>
        <script>
            $(document).ready(function() {
              $('#buscador2').select2();
                 });
         </script>
</body>

</html>