<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

  <title>Vitis|Para el mundo</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/favicon.png" />

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">  
  <link rel="stylesheet" href="fonts/themify/themify-icons.css">
  <link rel="stylesheet" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link rel="stylesheet" href="fonts/elegant-font/html-css/style.css">
  <link rel="stylesheet" href="css/animate.css">  
  <link rel="stylesheet" href="css/hamburgers.min.css">
  <link rel="stylesheet" href="css/animsition.min.css">
  <link rel="stylesheet" href="css/select2.min.css">
  <link rel="stylesheet" href="css/daterangepicker.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/lightbox.min.css">
  <link rel="stylesheet" href="{{ asset('css/util.css') }}">
  <link rel="stylesheet" href="css/main.css">
  
  <link href="css/style.css" rel="stylesheet">
</head>
<body class="animsition">
  <!-- header fixed -->
  <div class="wrap_header fixed-header2 trans-0-4">
  
    <!-- Logo -->
    <a href="#" class="logo align-self-center">
      <img src="images/logo.svg" width="200" alt="Logo VITIS">
    </a>
    <!-- Menu -->
    <div class="wrap_menu">
      <nav class="menu">
        <ul class="main_menu">
          <li>
            <a href="#">Inicio</a>
          </li>
          <li>
            <a href="#">Entretenimiento</a>
            <ul class="sub_menu">
              <li>
                <a href="#">Hospedaje</a>
              </li>
              <li>
                <a href="#">Comida</a>
              </li>
              <li>
                <a href="#">Compras</a>
              </li>
              <li>
                <a href="#">Sitios de interes</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Historia</a>
            <ul class="sub_menu">
              <li>
                <a href="#">Costumbres</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="blog.html">Mapas</a>
          </li>
          <li>
            <a href="#">Galeria</a>
            <ul class="sub_menu">
              <li>
                <a href="#">Fotos</a>
              </li>
              <li>
                <a href="#">Videos</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Blog</a>
            <ul class="sub_menu">
              <li>
                <a href="#">Noticas</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">FAQs</a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- Header Icon -->
    <div class="header-icons align-self-center">
      <a href="#" class="header-wrapicon1 dis-block">
        <button type="button" class="btn btn-verde btn-sm ">Registar</button>
      </a>
      <div class="header-wrapicon2">
        <button type="button" class="btn btn-verde btn-sm">Login</button>
      </div>
    </div>
  </div>
  <!-- top menu -->    
    <nav class="navbar-expand-md navbar-dark bg0 d-none d-sm-block" style="width: 100%; height: 4%;">
      <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mx-auto align-baseline">
          <li class="col nav-item active">
            <a class="text-white" href="#">Historias</a>
          </li>
          <li class="col nav-item active  ">
            <a class="text-white" href="#">Mapas</a>
          </li>
          <li class="col nav-item active  ">
            <a class="text-white" href="#">Noticas</a>
          </li>
          <li class="col nav-item active  ">
            <a class="text-white" href="#">Galería</a>
          </li>
        </ul>
      </div>
    </nav>

  <!-- Header 2-->
  <header class="header2">
    <!-- Header desktop -->
    <div class="container-menu-header-v2 p-t-10">
    
      <div class="topbar2">
        <div class="topbar-social">
          <a href="#" class="topbar-social-item fa fa-facebook"></a>
          <a href="#" class="topbar-social-item fa fa-youtube-play"></a>

        </div>
         
        <!-- Logo2 -->
        <a href="#" class="logo2">
          <img src="images/logo.svg" width="300" alt="Logo VITIS">
        </a>
        <div class="topbar-child2">
          <!--  -->
          <button type="button" class="btn btn-verde btn-sm">Registar</button>
          <span class="linedivide1"></span>
          <button type="button" class="btn btn-verde btn-sm">Login</button>
          <!-- Header cart noti -->
        </div>
      </div>
      <div class="wrap_header p-t-10">
        <!-- Menu -->
        <div class="wrap_menu">
          <nav class="menu p-t-10">
            <ul class="main_menu">
              <li>
                <a href="#">Inicio</a>
              </li>
              <li>
                <a href="#">Gestión</a>
              </li>
              <li class="sale-noti">
                <a href="#">Entretenimiento</a>
                <ul class="sub_menu">
                  <li>
                    <a href="#">Hospedaje</a>
                  </li>
                  <li>
                    <a href="#">Comida</a>
                  </li>
                  <li>
                    <a href="#">Compras</a>
                  </li>
                  <li>
                    <a href="#">Sitios de interes</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="#">Historia</a>
                <ul class="sub_menu">
                  <li>
                    <a href="#">Costumbres</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="about.html">Mapas</a>
              </li>

              <li>
                <a href="#">Galería</a>
                <ul class="sub_menu">
                  <li>
                    <a href="#">Fotos</a>
                  </li>
                  <li>
                    <a href="home-#">Videos</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="#">Blog</a>
                <ul class="sub_menu">
                  <li>
                    <a href="#">Noticias</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">FAQs</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
      <!-- Logo moblie -->
      <a href="#" class="logo-mobile">
        <img src="images/logo.svg" width="100" alt="Logo VITIS">
      </a>
      <!-- Button show menu -->
      <div class="btn-show-menu">
        <!-- Header Icon mobile -->
        <div class="header-icons-mobile">
          <span class="linedivide2"></span>
          <!-- Header cart noti -->
          <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </div>
        </div>
      </div>

      <!-- Menu Mobile -->
      <div class="wrap-side-menu">
        <nav class="side-menu">
          <ul class="main-menu">
            <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
              <button type="button" class="btn btn-verde">Registar</button>
              <button type="button" class="btn btn-verde">Login</button>
            </li>


            <li class="item-topbar-mobile p-l-10">
              <div class="topbar-social-mobile">
                <a href="#" class="topbar-social-item fa fa-facebook"></a>
                <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
              </div>
            </li>

            <li class="item-menu-mobile">
              <a href="#">Inicio</a>
            </li>

            <li class="item-menu-mobile">
              <a href="#">Gestión</a>
            </li>

            <li class="item-menu-mobile">
              <a href="#">Entretenimiento</a>
              <ul class="sub-menu">
                <li>
                  <a href="#">Hospedaje</a>
                </li>
                <li>
                  <a href="#">Comida</a>
                </li>
                <li>
                  <a href="#">Compras</a>
                </li>
                <li>
                  <a href="#">Sitios de interes</a>
                </li>
              </ul>
              <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
            </li>

            <li class="item-menu-mobile">
              <a href="#">Historia</a>
              <ul class="sub-menu">
                <li>
                  <a href="#">Costumbres</a>
                </li>
              </ul>
              <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
            </li>

            <li class="item-menu-mobile">
              <a href="#">Mapas</a>
            </li>

            <li class="item-menu-mobile">
              <a href="#">Galería</a>
              <ul class="sub-menu">
                <li>
                  <a href="#">Fotos</a>
                </li>
                <li>
                  <a href="#">Videos</a>
                </li>
              </ul>
              <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
            </li>

            <li class="item-menu-mobile">
              <a href="#">Blog</a>
              <ul class="sub-menu">
                <li>
                  <a href="#">Noticas</a>
                </li>
                <li>
                  <a href="#">Videos</a>
                </li>
              </ul>
              <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
            </li>

            <li class="item-menu-mobile">
              <a href="#">FAQs</a>
            </li>
          </ul>
        </nav>
      </div>
  </header>
   <!-- Fin Header 2-->
    <!-- Slide1 -->    
<!--Carousel Wrapper-->
<!--/.Carousel Wrapper-->                  
    <!-- Sliders -->




<!--                            Aqui fin Content miguel               -->

<!--/.Carousel Wrapper-->
  <div class="footer02">
      <section class="containe02 bg501">
        
          <div class="row">
            <div class="col-sm-2  text-center">
              <br>
              <ul class="footer01">
                <li class="p-b-9">
                  <a href="#" class="footer01">Inicio</a>
                </li>
                <li class="p-b-9">
                  <a href="#" class="footer01">Hospedaje</a>
                </li>
                <li class="p-b-9">
                  <a href="#" class="footer01">Comida</a>
                </li>
                <li class="p-b-9">
                  <a href="#" class="footer01">Compras</a>
                </li>
                <li class="p-b-9">
                  <a href="#" class="footer01">Sitios de interes</a>
                </li>
                <li class="p-b-9">
                  <a href="#" class="footer01">Como llegar</a>
                </li>
              </ul>

            </div>
            <div class="col-sm-2 align-self-center text-center">
              <ul>
                <li class="p-b-9">
                  <a href="#" class="footer01">Historia</a>
                </li>
                <li class="p-b-9">
                  <a href="#" class="footer01">Mapas</a>
                </li>
                <li class="p-b-9">
                  <a href="#" class="footer01">Noticias</a>
                </li>
                <li class="p-b-9">
                  <a href="#" class="footer01">Galería y Fotos</a>
                </li>
              </ul>
            </div>
            <div class="col-sm-2 align-self-center">
              <div class="text-right">
                <a href="#" class="text-white fa fa-facebook-square fa-4x"></a>
              </div>
            </div>

            <div class="col-sm-2 align-self-center">
              <div class="text-left">
                <a href="#" class="text-white fa fa-youtube fa-4x"></a>
              </div>
            </div>

            <div class="col-sm-2 align-self-center">
              <div class="text-left">
                <a href="#" class="text-white fa fa-instagram fa-4x"></a>
              </div>
            </div>


            <div class="col-sm-2 align-self-center text-center">
              <p class="footer01m">
                Al suscribirte recibirás las últimas noticias y promociones para la visita turística del Distrito de Vitis
              </p>
            </div>
            <div class="col-sm-2 align-self-center text-center">
              <!-- Button -->
              
                <a href="" class="btn light-blue accent-4 btn-rounded" data-toggle="modal" data-target="#orangeModalSubscription">REGÍSTRATE</a>
              
            </div>
          </div>
        
      </section>
  </div>

  <div class="footer03">
    <div class="container bg502a">
        <div class="row vdivide">
         <div class="col-6 align-self-center text-center">
                <p class="footer01m1">
                  Al suscribirte recibirás las últimas noticias y promociones para la visita turística del Distrito de Vitis.
                </p>
          </div>
          <div class="col-4 align-self-center text-center">
                
                   <button type="button" class="btn btn-verde btn-sm ">Suscribete</button>

                
          </div>
        </div>
    </div>
  </div>

  
<div class="modal fade" id="orangeModalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-warning" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header text-center">
        <h4 class="modal-title white-text w-100 font-weight-bold py-2">Registro</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        

        <div class="md-form">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="email" id="form1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form1">Nombres</label>
        </div>        

        <div class="md-form">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="email" id="form2" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form2">Apellidos</label>
        </div>

        <div class="md-form">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="email" id="form3" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form3">E-mail</label>
        </div>

        <div class="md-form">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="email" id="form4" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form4">Ocupación</label>
        </div>

        <div class="md-form">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="email" id="form5" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form5">Dirección</label>
        </div>

        <div class="md-form">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="email" id="form6" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form6">Fecha de Nacimiento</label>
        </div>

        <div class="md-form">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="email" id="form7" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form7">Ciudad</label>
        </div>

        <div class="md-form">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="email" id="form8" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form8">Teléfono Móvil</label>
        </div>
        
        <div class="md-form">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="email" id="form9" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form9">Comentario</label>
        </div>

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <a type="button" class="btn btn-outline-warning waves-effect">Enviar
          <i class="fa fa-paper-plane-o ml-1"></i>
        </a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>


  <div class="container bg502 ">
   <div class="footer03 ">
    <div class="row vdivide">
            <div class="col">
              <div class="text-right">
                <a href="#" class="footer01">Mapa de Sitio</a>
              </div>
            </div>

            <div class="col">
              <div class="text-right">
                <a href="#" class="text-white fa fa-facebook-square fa-2x"></a>
              </div>
            </div>

            <div class="col">
              <div class="text-center">
                <a href="#" class="text-white fa fa-youtube fa-2x"></a>
              </div>
            </div>

           
       </div>
   </div>
  </div>
<!--Footer-->
<footer>

  <!--Footer Links-->
  <div class="container-fluid py-3 text-center text-md-left bg-white">
    <div class="row vdivide">

      <!--First column-->
      
      <div class="col t-center">
        <h4 class="text-dark t-center">
          MUNICIPALIDAD DISTRITAL
        </h4>
        <h4 class="text-dark t-center">
          DE VITIS
        </h4>
        <p>Yauyos - Lima</p>
      </div>
      <!--/.First column-->
    </div>
  </div>
  <!--/.Footer Links-->
  <!--Copyright-->
  <div class="py-2 px-3 lead t-center grey lighten-3 s-text8">
    <div class=" mx-auto" style="width: 65%;">
      
      VITIS PARA EL MUNDO, es una iniciativa de la Municipalidad para la promoción turística del Distrito. Todos los Derechos
     Reservados © 2018. Diseño Web MA Design Studio - Fotografía: Manuel Hinostroza
     por <a class="cyan-text" href="https://facebook.com/freecloud.pe/" target="_blank"> <i class="red-text fa fa-heart-o" aria-hidden="true"></i> FreeCloud</a>   
    </div>
  </div>
  <!--/.Copyright-->
</footer>
<!--/.Footer-->
                      






  <!-- Back to top -->
  <div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="symbol-btn-back-to-top">
      <i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
    </span>
  </div>
    
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  
  <script type="text/javascript" src="js/animsition.min.js"></script>
  
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/mdb.min.js"></script>  
  <script type="text/javascript" src="js/select2.min.js"></script>

  <script type="text/javascript" src="js/slick.min.js"></script>
  <script type="text/javascript" src="js/slick-custom.js"></script>
  <script type="text/javascript" src="js/countdowntime.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/sweetalert.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>


























































<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>