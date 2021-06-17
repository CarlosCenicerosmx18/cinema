<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administracion</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

    {{-- select2 --}}
    <script src="{{asset('js/jquery.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                <div class="sidebar-brand-text mx-3">Cinema administrador</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
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
                    <a class="collapse-item"  href="{{route('administrarp')}}">Agregar</a>
                    <a class="collapse-item active" href="{{route('administrarpa')}}">Modificar</a>
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Modificar Archivos</h1>
                    </div>

                    <div class="row">

                      <div class="form-group">
                        
                       
            
                            @foreach ($movie as $movie)

                             @endforeach
                          
                      </div>
                      

                    <div class="row">

                        <div class="col-lg-6">
                            <form name="prueba" action="#" method="post">
                                <select id="cambiar" name="cambiar"
                                onchange='document.location.href=document.prueba.cambiar.options[document.prueba.cambiar.selectedIndex].value;
                                return false;'>
                                <option value="" selected="selected">Buscar</option>
                                
                                @foreach ($movie2 as $movie2)
                               <option value="{{route('adminpaf',['id'=>$movie2->id_movie])}}"> <a href="{{route('admin')}}">{{$movie2->name}}</a></option>
                                @endforeach
                             
                                </select>
                                
                                </form>
                                
                                <script>
                                    $(document).ready(function() {
                                      $('#cambiar').select2();
                                         });
                                 </script>


                            <!-- Default Card Example -->
                            <div class="card mb-4">
                                @if(session('message'))
                                <div class="alert alert-success">
                                    <script>
                                      swal("Accion completada!", "Preciona ok!", "success");
                                    </script>
                                    {{session('message')}}
                                </div>
                            @endif
                                <div class="card-header">
                                    Informacion Actual
                                </div>
                                <div class="card-body">
                                  
                                   <form action="{{route('movie.update')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id_movie" value="{{$movie->id_movie}}">
                                    <div class="mb-4">

                                        <label for="">Nombre</label>
                                        <input type="text" name="name" class="form-control" value="{{$movie->name}}">
                                        <label class="mt-3" for="">Portada</label><br>
                                        <a href="{{route('movie',['id'=>$movie->id_movie])}}"><img width="160px" class="movie-select mt-1" src="{{route('image.file',['filename'=>$movie->image_path])}}" alt="Matrix"></a>
                                        <div class="input-group-prepend">
                                            <span class="">Actualizar imagen</span>
                                          </div>
                                          <div class="custom-file mb-2 mt-2">
                                            <input type="file" name="image_path" class="form-control">
                                            
                                          </div>
                                        <div class="form-group">
                                        <h6>Idioma:</h6>
                                        
                                        <select class="form-control" name="language" id="langueage">
                                                <option value="{{$movie->language}}">Actual: {{$movie->language}}</option>
                                                <option value="Español">Español</option>
                                                <option value="Ingles">Ingles</option>
                                                <option value="Otro">Otro</option>
                                        </select>
                                        </div>
                                       
                                        <div class="form-group">
                                            <h6>Año:</h6>
                                            <select class="form-control" name="year" id="year">
                                                <?php
                                                    $cont = date('Y');
                                                ?>

                                                <option value="{{$movie->year}}">Actual: {{$movie->year}}</option>
                                                <?php while ($cont >= 1950) { ?>
                                                    <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>
                                                <?php $cont = ($cont-1); } ?>
                                            </select>
                                            <script>
                                                $(document).ready(function() {
                                                  $('#year').select2();
                                                     });
                                             </script>
                                            </div>
                                       

                                    </div>
                                    
                                    <div class="my-2">

                                        <h3>Sinopsis</h3>
                                        
                                        <div class="form-group">
                                            <textarea class="form-control"" name="description" id="" cols="30" rows="5">{{$movie->description}}
                                            </textarea>
                                        </div>
                                        <input type="submit" class="btn btn-primary" value="Actualizar">
                                    </form>
                                    <div class="my-3">
                                        <span class="btn-info d-block p-2">En este apartado unicamente podras eliminar los actores</span>
                                    </div>

                                        <h3>Actores</h3>
                                        

                                        <div class="mb-1">
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
                                         <div class="section-actors">
                                         <?php
                                       $prota=$personajes->id_actores;
                                         echo($prota);
                                         ?>
                                            {{-- @if ($personajes->id_ma < $final) --}}
                                            
                                                <span class="name-actors">{{$nombre[$prota]}} {{$apellido[$prota]}}</span>
                                                <img class="movie-select" src="{{route('image.actor',['filename'=>$foto[$orden[$prota]]])}}" alt="Actor">  
                                                <button class="btn btn-danger">Borrar</button>
                                               </div>
                                           
                                              
                                         

                                         @endif
                                        
                                         @endforeach
                    
                                        </div>
                                        <style>
                                            .movie-select{
                                                width: 160px !important;
                                                height: 240px;
                                                object-fit: cover;
                                            }
                                            .section-actors{
                                                border: 1px solid rgb(190, 188, 188);
                                                display: flex;
                                                flex-direction: column;
                                                justify-content: center;
                                            }
                                            .section-actors img{
                                                margin: 0 auto;
                                            }
                                            .section-actors button{
                                                width: 160px;
                                                height: 40px;
                                                margin: 0 auto;
                                                border-radius: 0;
                                                margin-bottom: 5px

                                            }
                                            .section-actors .name-actors{
                                                text-align: center;
                                                font-size: 20px
                                            }
                                        </style>

                                    
                                    </div>
                                    
                                </div>
                            </div>


                        </div>

                        <div class="col-lg-6">

                            <!-- Dropdown Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Borrar pelicula</h6>
                                    <div class="dropdown no-arrow">
                                   
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                   
                                    <form action="{{route('deleteMovie')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id_movie" value="{{$movie->id_movie}}">
                                        <button class="btn btn-danger">
                                            Borrar
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" >
                                    <div class="card-body">
                                        Datos adicionales sobre la pelicula que no se pueden modificar de forma grafica, si deceas modificarlo
                                        consulta al administrador de la base de datos.
                                        <p>Fecha de subida</p>
                                        <p>Fecha de la ultima modificacion</p>
                                        <p>Administrador que la subio</p>
                                        <p>likes</p>
                                    </div>
                                </div>
                            </div>

                        </div>

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

 

</body>

</html>