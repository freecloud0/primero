<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

  <title>Vitis|Para el mundo</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
{{-- 
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet" type="text/css" /> --}}
    <link href="{{ asset('/css/mdb.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
   
    <!-----Modificaciones iportantes------>
    <link rel="stylesheet" href="{{ asset('css/util.css') }}">
    <!-----Efecto carrusel modificados------>
    <link rel="stylesheet" href="{{ asset('css/efe-carosuel.css') }}">
    <link href="8/ninja-slider.css" rel="stylesheet" type="text/css" />
    <!-----icons------>
    <link href="8/ninja-slider.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    
    <link rel="stylesheet" href="css/main.css">
   <!-----------



  <link rel="stylesheet" href="fonts/themify/themify-icons.css">
  
  <link rel="stylesheet" href="fonts/elegant-font/html-css/style.css">
  <link rel="stylesheet" href="css/animate.css">  
 
  <link rel="stylesheet" href="css/animsition.min.css">
  <link rel="stylesheet" href="css/select2.min.css">
  <link rel="stylesheet" href="css/daterangepicker.css">
  <link rel="stylesheet" href="css/slick.css">

  <link rel="stylesheet" href="css/lightbox.min.css">
 
     ------------>   
    <link rel="stylesheet" href="css/hamburgers.min.css">
  
  <link href="css/style.css" rel="stylesheet">
  
</head>
<body class="animsition about">
  <!-- header fixed -->
  <div class="wrap_header fixed-header2 trans-0-4">
  
    <!-- Logo -->
    <a href="{{ url('/') }}" class="logo align-self-center">
      <img src="images/logo.svg" width="200" alt="Logo VITIS">
    </a>
    <!-- Menu -->
    <div class="wrap_menu">
      <nav class="menu">
        <ul class="main_menu">
          <li>
            <a id="ap01" href="{{ url('/') }}">Inicio</a>
          </li>
          <li>
            <a id="ap03" href="#">Entretenimiento</a>
            <ul class="sub_menu">
              <li>
                <a href="{{ url('hospedaje') }}">Hospedaje</a>
              </li>
              <li>
                <a href="{{ url('comida') }}">Comida</a>
              </li>
              <li>
                <a href="{{ url('compras') }}">Compras</a>
              </li>
              <li>
                <a href="{{ url('lugares') }}">Sitios de interes</a>
              </li>
            </ul>
          </li>
          <li>
            <a id="ap04" href="#">Historia</a>
            <ul class="sub_menu">
              <li>
                <a href="{{ url('costumbre') }}">Costumbres</a>
              </li>
            </ul>
          </li>
          <li>
            <a id="ap05" href="{{ url('mapa') }}">Mapas</a>
          </li>
          <li>
            <a id="ap06" href="#">Galeria</a>
            <ul class="sub_menu">
              <li>
                <a href="{{ url('galeria') }}">Fotos</a>
              </li>
              <li>
                <a href="{{ url('galeria') }}">Videos</a>
              </li>
            </ul>
          </li>
          <li>
            <a id="ap07" href="#">Blog</a>
            <ul class="sub_menu">
              <li>
                <a href="{{ url('blog') }}">Noticas</a>
              </li>
              <li>
                <a href="{{ url('blog') }}">Tips</a>
              </li>
            </ul>
          </li>
          <li>
            <a id="ap08" href="{{ url('FAQS') }}">FAQs</a>
          </li>
        </ul>
      </nav>
    </div>
    <style>
      .posit{
        position: absolute;
        right: 5px;
        top: 25px;
      }
    </style>

    <!-- Header Icon -->
    <div class="header-icons posit" style="">
      <a href="#" class="header-wrapicon1 dis-block">
        <button type="button" class="btn btn-verde btn-sm ">Registar</button>
      </a>
      <div class="header-wrapicon2">
        <button type="button" class="btn btn-verde btn-sm" data-toggle="modal" data-target="#modalLoginForm">Login</button>
      </div>

      


    </div>
  </div>
  {{-- modal --}}
  <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header text-center">
                  
                  
                  
                  <div class="view">
                      <img class="rows-01" src="{{ asset('image/login/login.png') }}" alt="Second slide">
                      <div class="mask ">
                          <a href="">
                              <div class="boton-l" data-dismiss="modal" aria-label="Close">
                                <span class="white-text">x</span>
                              </div>
                            </a>
                            
                            <div class="mt-c-1 ">
                                <div id="triangle-box-log" class="d-flex flex-row">
                                  <div id="triangle-t-log"></div>
                                  <div id="triangle2-t-log"></div>
                                </div>
                                <div class="conta-r white-text">
                                  LOGIN
                                </div>
                            </div>
                      </div>
                  </div>
                  
              </div>
              <div class="modal-body mx-3">
                
                  <div class="md-form mb-5">
                      <i class="fa fa-envelope prefix grey-text"></i>
                      <input type="email" id="defaultForm-email" class="form-control validate">
                      <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                  </div>

                  <div class="md-form mb-4">
                      <i class="fa fa-lock prefix grey-text"></i>
                      <input type="password" id="defaultForm-pass" class="form-control validate">
                      <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                  </div>

              </div>
              <div class="modal-footer d-flex justify-content-center">
                  <button class="btn btn-verde btn-sm">Acceder</button>
              </div>
          </div>
      </div>
  </div>


  <!-- top menu -->    
    <nav id="menuActi" class="navbar-expand-md navbar-dark bg0 d-none d-sm-block" style="width: 100%; height: 4%;">
      <div id="menuS" class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mx-auto align-baseline">
          <li class="col nav-item active">
            <a class="text-white historia" href="{{ url('historia') }}">Historias</a>
          </li>
          <li class="col nav-item active  ">
            <a class="text-white mapa" href="{{ url('mapa') }}">Mapas</a>
          </li>
          <li class="col nav-item active  ">
            <a class="text-white blog"  href="{{ url('blog') }}">Noticas</a>
          </li>
          <li class="col nav-item active  ">
            <a class="text-white galeria"  href="{{ url('galeria') }}">Galería</a>
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
        <a href="{{ url('/') }}" class="logo2">
          <img src="images/logo.svg" width="260" alt="Logo VITIS">
        </a>
        <div class="topbar-child2">
          <!--  -->
          <button type="button" class="btn btn-verde btn-sm">Registar</button>
          <span class="linedivide1"></span>
          <button type="button" class="btn btn-verde btn-sm" data-toggle="modal" data-target="#modalLoginForm" >Login</button>
          <!-- Header cart noti -->
        </div>
      </div>
      <div class="wrap_header p-t-10">
        <!-- Menu -->
        <div class="wrap_menu">
          <nav class="menu p-t-10">
            <ul class="main_menu">
              <li>
                <a id="ap01" href="{{ url('/') }}">Inicio</a>
              </li>
              <li>
                <a id="ap02" href="{{ url('gestion') }}">Gestión</a>
              </li>
              <li >
                <a id="ap03" href="#">Entretenimiento</a>
                <ul class="sub_menu">
                  <li>
                    <a  href="{{ url('hospedaje') }}">Hospedaje</a>
                  </li>
                  <li>
                    <a href="{{ url('comida') }}">Comida</a>
                  </li>
                  <li>
                    <a href="{{ url('productos') }}">Compras</a>
                  </li>
                  <li>
                    <a href="{{ url('lugares') }}">Sitios de interes</a>
                  </li>
                </ul>
              </li>

              <li>
                <a id="ap04" href="{{ url('historia') }}">Historia</a>
                
              </li>

              <li>
                <a id="ap05" href="{{ url('mapa') }}">Mapas</a>
              </li>

              <li>
                <a id="ap06" href="#">Galería</a>
                <ul class="sub_menu">
                  <li>
                    <a href="{{ url('galeria') }}">Fotos</a>
                  </li>
                  <li>
                    <a href="{{ url('galeria') }}">Videos</a>
                  </li>
                </ul>
              </li>

              <li>
                <a id="ap07" href="#">Blog</a>
                <ul class="sub_menu">
                  <li>
                    <a href="{{ url('blog') }}">Noticias</a>
                  </li>
                  <li>
                    <a href="{{ url('blog') }}">Tips</a>
                  </li>
                </ul>
              </li>
              <li>
                <a id="ap08" href="{{ url('FAQS') }}">FAQs</a>
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
        <img src="images/logo.svg" width="200" alt="Logo VITIS">
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
              <a  href="{{ url('/') }}">Inicio</a>
            </li>

            <li class="item-menu-mobile">
              <a href="{{ url('gestion') }}">Gestión</a>
            </li>

            <li class="item-menu-mobile">
              <a href="#">Entretenimiento</a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('hospedaje') }}">Hospedaje</a>
                </li>
                <li>
                  <a href="{{ url('comida') }}">Comida</a>
                </li>
                <li>
                  <a href="{{ url('productos') }}">Compras</a>
                </li>
                <li>
                  <a href="{{ url('lugares') }}">Sitios de interes</a>
                </li>
              </ul>
              <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
            </li>

            <li class="item-menu-mobile">
              <a href="{{ url('historia') }}">Historia</a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('costumbre') }}">Costumbres</a>
                </li>
              </ul>
              <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
            </li>

            <li class="item-menu-mobile">
              <a href="{{ url('mapa') }}">Mapas</a>
            </li>

            <li class="item-menu-mobile">
              <a href="">Galería</a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('galeria') }}">Fotos</a>
                </li>
                <li>
                  <a href="{{ url('galeria') }}">Videos</a>
                </li>
              </ul>
              <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
            </li>

            <li class="item-menu-mobile">
              <a href="#">Blog</a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('blog') }}">Noticas</a>
                </li>
                <li>
                  <a href="{{ url('blog') }}">Videos</a>
                </li>
              </ul>
              <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
            </li>

            <li class="item-menu-mobile">
              <a href="{{ url('FAQS') }}">FAQs</a>
            </li>
          </ul>
        </nav>
      </div>
  </header>




@yield('content')




  <!-- corbata verde  -->

   <div class="containe02 bg500 text-light text-center visible">

    <div class="container">
      
        <div class="row vdivide">
          <div class="col text-center">
            <br>
            <div class="textoiz">
              <h2 class="m-textplus6">Blog</h2>
              <div class="row">
                <div class="col-3"></div>
                <div class="col-sm-6 ">
                  <p class="m-textplus3m redu01">Tips de turismo y algo más</p>
                </div>
              </div>
              
             
            </div>
            <div class="visible">
              <i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>
            </div>
          </div>
          <div class="col text-center">
            <br>
            <div class="textode">
              <h2 class="m-textplus6">FAQs</h2>
              <div class="row">
                <div class="col-3"></div>
                <div class="col-sm-6">
                  <p class="m-textplus3m redu01">Algunas preguntas que nos hacemos</p>
                </div>
              </div>
              
          
            </div>
            <div class="visible">
              <i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>
            </div>
            
          </div>
        </div>   
    </div> 
  </div>
 <!-- corbata verde  -->
 
  <div class="visible01">
      <div id='container-tri '>
          <div id="triangle-box" class="d-flex flex-row">
            <div id="triangle-t"></div>
            <div id="triangle2-t"></div>
          </div>
      </div>
      
      <div class="corbata">
          
              <div class="row ">
                <div class="col-5 text-center">
                  
                  <div class="textoiz">
                    <h2 class="m-textplus6">Blog</h2>
                      <p class="m-textplus3m d-flexs">Tips de turismo</p>
                      <p class="m-textplus3m">y algo más</p>
                  </div>

                  <div class="visible">
                     <i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>
                  </div>

                </div>
                <div class="col-2">
                    <div class="d-flex justify-content-center"> 
                        <div class="linea-cor"></div>
                    </div>
                </div>
                <div class="col-5 text-center">
         
                  <div class="textode">
                    <h2 class="m-textplus6">FAQs</h2>
                      <p class="m-textplus3m">Algunas preguntas </p>
                      <p class="m-textplus3m">que nos hacemos</p>
                  </div>

                  <div class="visible">
                    <i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>
                  </div>
                  
                </div>
              </div>  
              
      </div>
  
      <div id='container-tri '>
          <div id="triangle-box" class="d-flex flex-row">
            <div id="triangle"></div>
            <div id="triangle2"></div>
          </div>
      </div>
  </div>
  <!-- corbata verde  -->


  <!-- Carrusel Experiencias -->
<br>
<div class="texttitulo align-self-center text-center"> Experiencias
</div>
<div class="linea">

</div>
<br>
<br>

<!--Carousel Wrapper-->
<div class="carousel01">
  <div id="empleados" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#empleados" data-slide-to="0" class="active"></li>
      <li data-target="#empleados" data-slide-to="1"></li>
      <li data-target="#empleados" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view container07 mt-2">
          <div class="col-6 float-left align-self-center">
            <div class="row ">
              <div class="col-md-3 align-self-center">
                <img src="image/person1.jpg" class="w-100 redondear">
              </div>
              <div class="col-md-8">
                <div class="card-block">
                  <h4 class="card-title">Lorem ipsum</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                    dolore magna
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 float-left align-self-center">
            <div class="row ">
              <div class="col-md-3 align-self-center">
                <img src="image/person1.jpg" class="w-100 redondear">
              </div>
              <div class="col-md-8">
                <div class="card-block">
                  <h4 class="card-title">Lorem ipsum</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                    dolore magna
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view container07 mt-2">
          <div class="col-6 float-left align-self-center ">
            <div class="row ">
              <div class="col-md-3 align-self-center">
                <img src="image/person1.jpg" class="w-100 redondear">
              </div>
              <div class="col-md-8">
                <div class="card-block">
                  <h4 class="card-title">Lorem ipsum 01</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                    dolore magna
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 float-left align-self-center">
            <div class="row ">
              <div class="col-md-3 align-self-center">
                <img src="image/person1.jpg" class="w-100 redondear">
              </div>
              <div class="col-md-8">
                <div class="card-block">
                  <h4 class="card-title">Lorem ipsum 01</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                    dolore magna
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view container07 mt-2">
          <div class="col-6 float-left align-self-center">
            <div class="row ">
              <div class="col-md-3 align-self-center">
                <img src="image/person1.jpg" class="w-100 redondear">
              </div>
              <div class="col-md-8">
                <div class="card-block">
                  <h4 class="card-title">Lorem ipsum 02</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                    dolore magna
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 float-left align-self-center">
            <div class="row ">
              <div class="col-md-3 align-self-center">
                <img src="image/person1.jpg" class="w-100 redondear">
              </div>
              <div class="col-md-8">
                <div class="card-block">
                  <h4 class="card-title">Lorem ipsum 02</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                    dolore magna
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#empleados" role="button" data-slide="prev">
      <i class="fa fa-chevron-circle-left fa-3x grey-text" aria-hidden="true"></i>
      <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#empleados" role="button" data-slide="next">
      <i class="fa fa-chevron-circle-right fa-3x grey-text" aria-hidden="true"></i>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
</div>

  <!--Carousel Responsive 02-->
<div class="carousel02">
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
        <div class="container07">
          <div class="col ">
            <div class="row ">
              <div class="col-md-3">
                <img src="image/person1.jpg" class=" redondear image04">
                <span class="m-textplus2m2">Lorem ipsum</span>
              </div>
              <div class="col-md-8">
                <div class="card-block">

                  <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                    dolore magna
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/First slide-->
      <!--Second slide-->
      <div class="carousel-item">
        <div class="container07">
          <div class="col float-left align-self-center">
            <div class="row ">
              <div class="col-md-3 align-self-center">
                <img src="image/person1.jpg" class=" redondear image04">
                <span class="m-textplus2m2">Lorem ipsum 01</span>
              </div>
              <div class="col-md-8">
                <div class="card-block">

                  <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                    dolore magna
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/Second slide-->
      <!--Third slide-->
      <div class="carousel-item">
        <div class="container07">
          <div class="col float-left align-self-center">
            <div class="row ">
              <div class="col-md-3 align-self-center">
                <img src="image/person1.jpg" class="redondear image04">
                <span class="m-textplus2m2">Lorem ipsum 02</span>
              </div>
              <div class="col-md-8">
                <div class="card-block">

                  <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                    dolore magna
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/Third slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <i class="fa fa-chevron-circle-left fa-3x grey-text" aria-hidden="true"></i>

      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <i class="fa fa-chevron-circle-right fa-3x grey-text" aria-hidden="true"></i>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
</div>
<!--/.Carousel Wrapper-->



<!--/.Carousel Wrapper-->
<div class="visible01">
  <br>
<br>
</div>


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
            <div class="col-sm-2 align-self-center text-center m-t-10">
              <ul class="footer01">
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

            
           
            <div class="col-sm-4 align-self-center ">
              <div class="row ">
                <div class="col-2 m-l-34"></div>

                <div class="col-2 ">
                  <a href="#" class="text-white fa fa-facebook-square fa-2x"></a>
                </div>
                <div class="col-2 ">
                  <a href="#" class="text-white fa fa-youtube fa-2x"></a>
                </div>
                <div class="col-2 ">
                  <a href="#" class="text-white fa fa-instagram fa-2x"></a>
                </div>

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
  <div class="container bg502">
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




        <br>
        <div class="visible01 row vdivide">
            <div class="col-md-5"></div>
            <div class="pt-1">
              <img src="images/galeria/logo-01.png" class="image06 ">
            </div>
            
            <div class="col-md-5">
                <div class="col-6 pt-3 ">
                  <h4 class="m-textplus12m text-dark text-center">
                      MUNICIPALIDAD DISTRITAL
                  </h4>
                  <h4 class="m-textplus12m text-dark text-center">
                      DE VITIS
                  </h4>
                  <p class="text-center">Yauyos - Lima</p>
                </div>
            </div>  
        </div>

        <div class=" container visible row vdivide">
            <div class="col-2"></div>
            <div class="pt-1">
              <img src="images/galeria/logo-01.png" class="image07 ">
            </div>
            <div class="col">
                <div class="col pt-3 ">
                  <h4 class="m-textplus12ms text-dark text-center">
                      MUNICIPALIDAD DISTRITAL
                  </h4>
                  <h4 class="m-textplus12ms text-dark text-center">
                      DE VITIS
                  </h4>
                  <p class="m-textplus12ms1 text-center">Yauyos - Lima</p>
                </div>
            </div>  
        </div>
        <br>

  <!--/.Footer Links-->
  <!--Copyright-->
  <div class="py-2 px-3 lead t-center grey lighten-3 s-text8">
    <div class=" mx-auto" style="width: 65%;">
      
      VITIS PARA EL MUNDO, es una iniciativa de la Municipalidad para la promoción turística del Distrito. Todos los Derechos
     Reservados © 2018. Diseño Web  Design Studio - Fotografía: Manuel Hinostroza
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

  <script type="text/javascript" src="MDB/dist/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="MDB/dist/js/bootstrap.js"></script>
  <script type="text/javascript" src="MDB/dist/js/mdb.js"></script>
  <script type="text/javascript" src="MDB/dist/js/popper.min.js"></script>
  {{-- <script type="text/javascript" src="/js/pagination.js"></script> --}}



{{-- 
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>  --}}

  <script type="text/javascript" src="js/general.js"></script> 

  <script type="text/javascript" src="js/animsition.min.js"></script>
<!--- cslider con fondo-->
    <script>
        function lightbox(idx) {
            //show the slider's wrapper: this is required when the transitionType has been set to "slide" in the ninja-slider.js
            var ninjaSldr = document.getElementById("ninja-slider");
            ninjaSldr.parentNode.style.display = "block";

            nslider.init(idx);

            var fsBtn = document.getElementById("fsBtn");
            fsBtn.click();
        }

        function fsIconClick(isFullscreen, ninjaSldr) { //fsIconClick is the default event handler of the fullscreen button
            if (isFullscreen) {
                ninjaSldr.parentNode.style.display = "none";
            }
        }
    </script>

    <script>
        /*script de busqueda escribiendo*/
            // $(document).ready(function () {
            //     (function ($) {
            //         $('#filtrar').keyup(function () {

            //               var rex = new RegExp($(this).val(), 'i');
            //               $('#buscar #busca-tra').hide();
            //               $('#buscar #busca-tra ').filter(function () {
            //                   return rex.test($(this).text());
            //               }).show();

            //         })
            //     }(jQuery));
            // });

    </script>
{{-- gestion años --}}



  <script>
    // hide años gestion

  $(document).ready(function(){
      $("#rot16").hide();
      $("#rot17").hide();
      $("#rot18").hide();
    
      
      $("#show-2015").click(function(){
          $("#rot15").show();
          $("#rot16,#rot17,#rot18").hide();
      });
      $("#show-2016").click(function(){
          $("#rot16").show();
          $("#rot15,#rot17,#rot18").hide();
      });
      $("#show-2017").click(function(){
          $("#rot17").show();
          $("#rot15,#rot16,#rot18").hide();
      });
      $("#show-2018").click(function(){
          $("#rot18").show();
          $("#rot15,#rot16,#rot17").hide();
      });
      
  });
  </script>

    <script>
      (function ($) {
      $(document).ready(function(){
        $('#search').keyup(function(){
            var valThis = $(this).val().toLowerCase();
              $('.checkGrupo').each(function(){
                var text = $("label[for='"+$(this).attr('id')+"']").text().toLowerCase();
                  (text.indexOf(valThis) == 0) ? $(this).parent().show() : $(this).parent().hide();
                });
            });
      
      });
      })(jQuery);
    </script>





  <!--efecto slider-->
  <script src="8/ninja-slider.js" type="text/javascript"></script>


  <script src="js/main.js"></script>

</body>
</html>
