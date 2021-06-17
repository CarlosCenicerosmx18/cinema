<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <!-- styles -->
{{-- Carrusel --}}


<link rel="stylesheet" href="{{asset('carrusel/dist/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('carrusel/dist/assets/owl.theme.default.min.css')}}">
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('carrusel/src/js/owl.carousel.js')}}"></script>



<link rel="stylesheet" href="{{ asset('css/select2.css') }}">

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    

<script src="{{asset('js/select2.js')}}"></script>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>

<body>
    <div class="container">
        <header class="header">
            <div class="menu_res">
                <label for="btn_menu">
                    <li><img src="{{asset("images/icons/menu1.png")}}" alt=""></li>
                </label>

                    <input type="checkbox" onclick="menu()" name="btn_menu" id="btn_menu">
               </div>
            <div class="top-nav">
                <div class="logo">
               <a href="#"> <img id="logo-img" src="{{asset('images/icons/cinema.png')}}" alt="Logo"></a>
              <script>
                   gsap.set('#logo-img',{
                backgroundColor: 'red',
                            });
                    gsap.to('#logo-img',{
                        duration: 2,
                        x:30,
                        y: -9,
                        borderRadius:'20%',
                        border: '1px solid snow',
                        ease:'bounce'
                    });
              </script>


            </div>
            <nav class="nav" id="menu">
                <ul>
                    
                    <li><a href="#">Series</a></li>
                    <li><a href="#">Peliculas</a></li>
                    <li><a href="#">Mi lista</a></li>
                    @if(Auth::user()->role=="admin")
                    <li><a href="{{route('administrar')}}">Admin</a></a></li>
                    @endif
                   
                      <li>
                          {{-- <select name="buscar" id="buscar">
                            <option value="buscar">Buscar</option>
                           
                            @foreach ($movies as $movie)
                           <option value="{{$movie->id_movie}}"> <a href="{{route('admin')}}">{{$movie->name}}</a></option>
                            @endforeach
                         
                            <option value="a"><a href="#">ks</a></option>
                        </select></li> --}}
                        <form name="prueba" action="#" method="post">

                            <select id="buscar" name="cambiar"
                            onchange='document.location.href=document.prueba.cambiar.options[document.prueba.cambiar.selectedIndex].value;
                            return false;'>
                            <option value="" selected="selected">Buscar</option>
                            
                            @foreach ($movies as $movie)
                           <option value="{{route('movie',['id'=>$movie->id_movie])}}"> <a href="{{route('admin')}}">{{$movie->name}}</a></option>
                            @endforeach
                         
                            </select>
                            
                            </form>
            
                    <li>
                        
                        <a href="{{route('logout')}}">cerrar sesion</a></a></li>
                       
                   <script>
                
                function menu(){
                    var btn_menu=document.querySelector('#btn_menu');
                    var menu=document.querySelector('#menu');

                    if(btn_menu.checked){
                        menu.style.display='block';

                    }else{
                        menu.style.display='none';

                    }
                   
                                }
                </script>
                </ul>
            </nav>
            
            <script>
                $(document).ready(function() {
                  $('#buscar').select2();
                     });
             </script>
            <div class="user">
                @if(Auth::user()->image)
                <a href="{{route('config')}}"><img src="{{ route('user.avatar',['filename'=>Auth::user()->image])}}" alt="User"></a>
                @else
                <a href="{{route('config')}}"><img src="{{asset('images/covers/user.png')}}" alt="User"></a>
                @endif

               
            </div>
            </div>
            <div class="banner">
               

                <video src="images/matrix.mp4" autoplay muted loop>
                    <source src="images/matrix.mp4" type="video/mp4">
                    tu navegador no soporta videos actualiza.
                </video>
                <div class="tags">
                    <ul>
                        <li class="tags-list">Surrealista</li>
                        <li class="tags-list">Distopico<k/li>
                        <li class="tags-list">Habil</li>
                        <li class="tags-list">Emocionante</li>
                    </ul>
                </div>

                <script>
                    
                   let tween=gsap.from('.tags-list',{
                       duration: .3,
                       y: -200,
                       scale: 0,
                       stagger:0.5
                   });  
               </script>

            </div>
            <div class="header--opt">
                <div class="header--opt__icons">
                    <img src="images/icons/plus.svg" alt="More">
                    <p> Mi lista</p>
                </div>
                <div class="header--opt__icons">
                    <a href="{{route('movie',['14'])}}" style="text-decoration: none;">
                   <div class="btn--play">
                   
                    <div class="icon-play">
                        <img src="images/icons/play.svg" class="opt-img" alt="play">
                    </div>
                   
                    <div class="text-play">
                        Reproducir
                    </div>
                   
                   </div>
                    </a>
                </div>
            
                <div class="header--opt__icons">
                    <img src="images/icons/info.svg" alt="Info">
                    <p>Info</p>
                </div>
            </div>
        </header>
        <div class="movies">

           




            <div class="movies--sections">
          
           <h2 class="movie-select">Peliculas recientes</h2>
           <div class="owl-carousel" >
            @foreach ($movies as $movie)
                
              <div> <a href="{{route('movie',['id'=>$movie->id_movie])}}"><img  src="{{route('image.file',['filename'=>$movie->image_path])}}" alt="Matrix"></a></div>
             
               
           @endforeach 
           {{-- <a  class="movie-select" href="catalogo.html"> <div class="more">Ver todo</div></a> --}}
           </div>   



            </div>
            <div class="movies--sections">
          
                <h2 class="movie-select">Peliculas de accion</h2>
                <div class="owl-carousel" >
                 @foreach ($accion as $accion)
                     
                   <div> <a href="{{route('movie',['id'=>$accion->id_movie])}}"><img  src="{{route('image.file',['filename'=>$accion->image_path])}}" alt="Matrix"></a></div>
                  
                    
                @endforeach 
                {{-- <a  class="movie-select" href="catalogo.html"> <div class="more">Ver todo</div></a> --}}
                </div>   
     
     
                
                 </div> <div class="movies--sections">
          
                    <h2 class="movie-select">Peliculas infantiles</h2>
                    <div class="owl-carousel" >
                     @foreach ($infantil as $infantil)
                         
                       <div> <a href="{{route('movie',['id'=>$infantil->id_movie])}}"><img  src="{{route('image.file',['filename'=>$infantil->image_path])}}" alt="Matrix"></a></div>
                      
                        
                    @endforeach 
                    {{-- <a  class="movie-select" href="catalogo.html"> <div class="more">Ver todo</div></a> --}}
                    </div>   
         
         
                    
                     </div>
                     <div class="movies--sections">
          
                        <h2 class="movie-select">Peliculas de Terror</h2>
                        <div class="owl-carousel" >
                         @foreach ($terror as $terror)
                             
                           <div> <a href="{{route('movie',['id'=>$terror->id_movie])}}"><img  src="{{route('image.file',['filename'=>$terror->image_path])}}" alt="Matrix"></a></div>
                          
                            
                        @endforeach 
                        {{-- <a  class="movie-select" href="catalogo.html"> <div class="more">Ver todo</div></a> --}}
                        </div>   
             
             
                        
                         </div>
                         <div class="movies--sections">
          
                            <h2 class="movie-select">Peliculas de Comedia</h2>
                            <div class="owl-carousel" >
                             @foreach ($comedia as $comedia)
                                 
                               <div> <a href="{{route('movie',['id'=>$comedia->id_movie])}}"><img  src="{{route('image.file',['filename'=>$comedia->image_path])}}" alt="Matrix"></a></div>
                              
                                
                            @endforeach 
                            {{-- <a  class="movie-select" href="catalogo.html"> <div class="more">Ver todo</div></a> --}}
                            </div>   
                 
                 
                            
                             </div>
                             <div class="movies--sections">
          
                                <h2 class="movie-select">Peliculas de Romance</h2>
                                <div class="owl-carousel" >
                                 @foreach ($romance as $romance)
                                     
                                   <div> <a href="{{route('movie',['id'=>$romance->id_movie])}}"><img  src="{{route('image.file',['filename'=>$romance->image_path])}}" alt="Matrix"></a></div>
                                  
                                    
                                @endforeach 
                                {{-- <a  class="movie-select" href="catalogo.html"> <div class="more">Ver todo</div></a> --}}
                                </div>   
                     
                     
                                
                                 </div>
                             <div class="movies--sections">
          
                                <h2 class="movie-select">Peliculas de Suspenso</h2>
                                <div class="owl-carousel" >
                                 @foreach ($suspenso as $suspenso)
                                     
                                   <div> <a href="{{route('movie',['id'=>$suspenso->id_movie])}}"><img  src="{{route('image.file',['filename'=>$suspenso->image_path])}}" alt="Matrix"></a></div>
                                  
                                    
                                @endforeach 
                                {{-- <a  class="movie-select" href="catalogo.html"> <div class="more">Ver todo</div></a> --}}
                                </div>   
                     
                     
                                
                                 </div>
                                 
            <script>
                $(document).ready(function(){
                $(".owl-carousel").owlCarousel();
                    });
            </script>
          
        </div>
        {{-- <script>
                    
            let tween2=gsap.from('.movie-select',{
                duration: 0.3,
                x: -200,
                scale: 0,
                stagger:0.5,
               
            });  
            let tween3=gsap.from('.movie-select2',{
                duration: 0.3,
                x: 200,
                scale: 0,
                stagger:0.5,
                
            });  
            let tween4=gsap.from('.movie-select3',{
                duration: 0.3,
                y: -200,
                scale: 0,
                stagger:0.5,
                
            });  
        </script> --}}
        <div class="navbar">
            <div class="navbar--opt navbar--active">
                <img src="images/icons/home.svg" alt="home">
                <p>Inicio</p>
            </div>

            <div class="navbar--opt">
                <img src="images/icons/cinema.svg" alt="home">
                <p>Proximamente</p>
            </div>

            <div class="navbar--opt">
                <img src="images/icons/search.svg" alt="home">
                <p>Buscar</p>
            </div>

            <div class="navbar--opt">
                <img src="images/icons/dowload.svg" alt="home">
                <p>Descargas</p>
            </div>

        </div>
    </div>
</body>


</html>