<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<script src="{{asset('js/jquery.js')}}"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('administrar')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">Cinema Administrador</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('administrar')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Peliculas</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">OPCIONES:</h6>
                    <a class="collapse-item active"  href="{{route('administrarp')}}">Agregar</a>
                    <a class="collapse-item" href="{{route('administrarpa')}}">Modificar</a>
                </div>
            </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Usuarios</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Informacion de usuarios:</h6>
                        <a class="collapse-item" href="{{route('usuarios')}}">Datos</a>
                       
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="{{route('vista-login')}}">Login</a>
                        <a class="collapse-item" href="{{route('vista-recomendacion')}}">Recomendacion</a>
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
          

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('datos')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Datos</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="{{route('config')}}" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}} {{Auth::user()->surname}}</span>
                                 @if(Auth::user()->image)
                                <img style="width: 50px; height: 50px; object-fit: cover; border-radius: 100%;" src="{{ route('user.avatar',['filename'=>Auth::user()->image])}}" alt="User"></a>
                                @else
                                <img src="{{asset('images/covers/user.png')}}" alt="User"></a>
                                @endif
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{route('config')}}">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuracion
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('logout')}}" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Peliculas</h1>

                    <div class="row">

                        <div class="col-lg-6">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Agrega una nueva historia</h6>
                                </div>
                                <div class="card-body">
                                    @if(session('message'))
                                    <div class="alert alert-success">
                                        <script>
                                          swal("Accion completada!", "Preciona ok!", "success");
                                        </script>
                                        {{session('message')}}
                                    </div>
                                @endif
                                @if(session('message2'))
                                <div class="alert alert-danger">
                                    <script>
                                      swal("Ocurrio un error!", "Preciona ok!", "error");
                                    </script>
                                    {{session('message2')}}
                                </div>
                            @endif
                            

                               
                                <form  name="formulario_subir_pelicula" action="{{route('addMovie')}}" method="POST" enctype="multipart/form-data">

                        
                                    @csrf
                                    <label for="titulo">Titulo</label>
                                    <input type="text"  class="form-control" name="titulo" id="titulo" required>
                                    <label for="sinopsis">Sinopsis</label>
                                    <textarea class="form-control"  required id="sinopsis" name="sinopsis" rows="5"></textarea>
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
                                    <select name="idioma"  class="form-control" id="idioma">
                                        <option value="Español">Español</option>
                                        <option value="Ingles">Ingles</option>
                                        <option value="otro">Otro</option>
                                    </select>

                                    <label>Genero</label>  
                                    <select name="genero"  class="form-control" id="idioma">
                                        <option value="Accion">Accion</option>
                                        <option value="Drama">Drama</option>
                                        <option value="Suspenso">Suspenso</option>
                                        <option value="Terror">Terror</option>
                                        <option value="Romance">Romance</option>
                                        <option value="Comedia">Comedia</option>
                                        <option value="Infantil">Infantil</option>
                                    </select>

                                    <label>Portada</label>  
                                    <input name="image_path" class="form-control" id="image_path" type="file" required> 
            
                                    @if($errors->has('image_path'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$errors->first('image_path')}}</strong>
                                        </span>
            
                                    @endif
                                    <label>Archivo de video</label>  
                                    <input name="movie_path"  id="movie_path" class="form-control" type="file" required>   
            
                                    @if($errors->has('movie_path'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$errors->first('movie_path')}}</strong>
                                        </span>
            
                                    @endif
            
                                    <input type="submit" id="boton_add_pelicula" onclick="enviar()" class="btn btn-primary mt-2"   value="Subir pelicula">
                                    
                                   
                                </form>
                                
                                </div>
                            </div>

                            <!-- Brand Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Agregar actores</h6>
                                </div>
                                <div class="card-body">

                                    <h5  class="btn-danger p-1">Verifica si existe antes de agregar</h5>
                                    <select name="pelicula-a" class="form-control" id="buscador">
                                        @foreach ($actor as $actor)
                                        <option value="{{$actor->id}}">{{$actor->nombre.' '.$actor->apellido}}</option>
                                        
                                    @endforeach 
                                    </select>
                                    <script>
                                        $(document).ready(function() {
                                          $('#buscador').select2();
                                             });
                                     </script>

                                    <h5  class="btn-info p-1 mt-2" >Si no se encuentra en la base de datos agregalo</h5>
                                    
                                    <form action="{{route('addActor')}}" name="formulario_subir_actor" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label  for="nombre_actor">Nombre</label>
                                            <input class="form-control"  type="text" name="nombre_actor" id="nombre_actor" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="apellido_actor">Primer Apellido</label>
                                             <input  class="form-control" type="text" name="apellido_actor" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="foto_actor">Foto</label>
                                            <input name="image_path" class="form-control" type="file" required> 
                                             @if($errors->has('image_path'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('image_path')}}</strong>
                                </span>
    
                            @endif
                                          </div>
                                          <button type="submit"  onclick="addActor()" class="btn btn-primary">Agregar</button>

                                    
                                  </form>
                                  
                               
                                
                                
    
                           
                             
                                

                                </div>
                            </div>
                        
                            </div>
                             {{-- Relacion actores --}}

                             <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Relacionar actores</h6>
                                </div>
                                <div class="card-body">

                                
                                    <form action="{{route('add')}}" name="formulario_relacionar" method="POST">
                                        @csrf
                
                                        <label for="banner">Pelicula</label>
                                        <select name="pelicula-p" class="form-control" id="buscador-actor">
                                         @foreach ($movie2 as $movie2)
                                                <option value="{{$movie2->id_movie}}">{{$movie2->name}}</option>
                                        @endforeach 
                                        </select>
                
                                        <label for="banner">Actor</label>
                                        <select name="pelicula-a" class="form-control" id="buscador-actor2">
                                            @foreach ($actor2 as $actor2)
                                            <option value="{{$actor2->id}}">{{$actor2->nombre.' '.$actor2->apellido}}</option>
                                            
                                        @endforeach 
                                        </select>
                                        <input type="submit"  class="btn btn-primary mt-2" onclick="relacion()" value="Relacionar">
                                    </form>                      
                             
                                    <script>
                                        $(document).ready(function() {
                                          $('#buscador-actor').select2();
                                             });
                                             $(document).ready(function() {
                                          $('#buscador-actor2').select2();
                                             });
                                     </script>

                                </div>
                            </div>
                            
                        </div>

                        <div class="col-lg-6">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Visualizar informacion de la ultima pelicula agregada</h6>
                                </div>
                                <div class="card-body">
                                    <p>En este apartado podras vizualizar los datos correspondientes a la ultima pelicula agregada</p>
                                   
                                    <div class="mb-4">
                                        @foreach ($movie as $movie)
                                        
                                          @endforeach
                                          <a href="{{route('movie',['id'=>$movie->id_movie])}}"><img width="140px" class="movie-select" src="{{route('image.file',['filename'=>$movie->image_path])}}" alt="Matrix"></a>

                                        <h6 class="mt-1">Idioma: {{$movie->language}}</h6>
                                        <h6>Genero: {{$movie->genero}}</h6>
                                    </div>
                                    
                                    <div class="my-2">

                                        <h3>Sinopsis</h3>
                                        <p>
                                            {{$movie->description}}
                                        </p>

                                        <a href="{{route('movie',['id'=>$movie->id_movie])}}"><button class="btn btn-primary">Ver</button></a>

                                        


                                    </div>
                                    
                                </div>
                                
                            </div>
                            

                        </div>


                        {{-- relacion --}}
                        
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deseas desconectarte?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecciona si para cerrar sesion</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                    <a class="btn btn-primary" href="{{route('logout')}}">Si</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    {{-- Buscador en select| --}}
    

    {{-- sweetalert --}}

    <script src="{{asset('js/alert.js')}}"></script>
    

</body>

</html>