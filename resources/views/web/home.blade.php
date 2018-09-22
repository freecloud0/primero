@extends('layouts.app')

@section('content')

<!--Carousel Wrapper-->
      <br>

      <div id="carousel01" class="carousel slide carousel-fade" data-ride="carousel">
          <!--Indicators-->
          
          <!--/.Indicators-->
          <!--Slides-->
          <div class="carousel-inner " role="listbox">
              <!--First slide-->
              <div class="carousel-item active ">
                  
                  <img class="image03 d-block " src="{{ asset('images/galeria/paralax01.jpg') }}" alt="First slide">
                  <div class="mask rgba-teal-strong"> </div>
                      
                  <div class="carousel-caption">
                      <h1 class="m-textplus11 animated fadeInDown" >Bienvenido a: VITIS</h1>
              
                    <h2 class="m-textplus11m animated fadeInUp">“Hermosa tierra de los AYLLUS”</h2>


                    <button type="button" class="boton btn-outline-slider">
                      <i class="fa fa-briefcase fa-2x" aria-hidden="true"></i>
                    </button>

                    <button type="button" class="boton btn-outline-slider">
                      <i class="fa fa-cutlery fa-2x" aria-hidden="true"></i>
                    </button>

                    <button type="button" class="boton btn-outline-slider">
                      <i class="fa fa-bed fa-2x" aria-hidden="true"></i>
                    </button>

                    <button type="button" class="boton btn-outline-slider">
                      <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
                    </button>
                  </div>
              </div>
              <!--Second slide-->
              <div class="carousel-item">
                
                  <img class="image03 d-block " src="{{ asset('images/galeria/paralax02.jpg') }}" alt="Second slide">
                  <div class="mask rgba-teal-strong"> </div>
                  
                <div class="carousel-caption">
                    
                      <h1 class="m-textplus11 animated fadeInDown" >HERMOSO LUGARES</h1>
                  
                    <h2 class="m-textplus11m animated fadeInUp">Turisticos</h2>

                    <button type="button" class="boton btn-outline-slider">
                      <i class="fa fa-briefcase fa-2x" aria-hidden="true"></i>
                    </button>

                    <button type="button" class="boton btn-outline-slider">
                      <i class="fa fa-cutlery fa-2x" aria-hidden="true"></i>
                    </button>

                    <button type="button" class="boton btn-outline-slider">
                      <i class="fa fa-bed fa-2x" aria-hidden="true"></i>
                    </button>

                    <button type="button" class="boton btn-outline-slider">
                      <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
                    </button>
                </div>
                  
              </div>
              <!--/Second slide-->
              <!--Third slide-->
              <div class="carousel-item ">
                
                  <img class="image03 d-block" src="{{ asset('images/galeria/paralax03.jpg') }}" alt="Third slide">
                  <div class="mask rgba-black-slight"></div>
                
                <div class="carousel-caption">
                    
                      <h1 class="m-textplus11 animated fadeInDown" >DELICIOSOS PLATOS</h1>
                    
                    <h2 class="m-textplus11m animated fadeInUp">Tipicos</h2>

                    <button type="button" class="boton btn-outline-slider">
                      <i class="fa fa-briefcase fa-2x" aria-hidden="true"></i>
                    </button>

                    <button type="button" class="boton btn-outline-slider">
                      <i class="fa fa-cutlery fa-2x" aria-hidden="true"></i>
                    </button>

                    <button type="button" class="boton btn-outline-slider">
                      <i class="fa fa-bed fa-2x" aria-hidden="true"></i>
                    </button>

                    <button type="button" class="boton btn-outline-slider">
                      <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
                    </button>
                </div>
                  
              </div>
              <!--/Third slide-->
          </div>

          <!--/.Slides-->
          <!--Controls-->
          <a class="carousel-control-prev" href="#carousel01" role="button" data-slide="prev">
            <i class="fa fa-chevron-circle-left fa-3x grey-text" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel01" role="button" data-slide="next">
            <i class="fa fa-chevron-circle-right fa-3x grey-text" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->

      </div>
    <!--/.footer azul -->
    <div class="visible01">
      <ul class="nav justify-content-center bg9 ">
          <li class="nav-item subnav">
            <a class="nav-link text-white" href="#!">
              <i class="fa fa-users " aria-hidden="true"></i> &#32;  7,765 habitantes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#!">
              <i class="fa fa-map-o" aria-hidden="true"></i>&#32;37,89 Km<sup>2</sup> de superficies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#!">
              <i class="fa fa-area-chart" aria-hidden="true"></i>&#32;850 mts. s.n.m</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#!">
              <i class="fa fa-thermometer-full" aria-hidden="true">&#32;</i>&#32;20º temperatura media</a>
          </li>
        </ul>
    </div>

    <div class="visible">
      <div class="container bg9 d-block">
        <div class="row vdivide pl-1 m-textplus14">
          <div class="col-6 pt-2">
            <i class="fa fa-users " aria-hidden="true"></i>
            <spam href="">7,765 habitantes </spam>
          </div>
          <div class="col-6">
            <i class="fa fa-users " aria-hidden="true"></i>
            <spam  href="">37,89 Km<sup>2</sup> de superficies</spam >
          </div>
          <div class="col-6 pt-2">
            <i class="fa fa-users " aria-hidden="true"></i>
            <spam href="">850 mts. s.n.m</spam >
          </div>
          <div class="col-6">
            <i class="fa fa-users " aria-hidden="true"></i>
            <spam  href="">20º temperatura media</spam >
          </div>
        </div>
      </div>
    </div>
      





        
        <!--/.footer azul -->
    <br>
      <!--/.Carousel Wrapper-->

  
  
  <section class="shipping bgwhite p-t-0 p-b-0">
    <div class=" flex-w p-l-15 p-r-15">
      <div class="visible01 flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
        <h4 class="m-text12 t-center">
          Free Delivery Worldwide
        </h4>

        <a href="#" class="s-text11 t-center">
          Click here for more info
        </a>
      </div>

      <div class="visible01 flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
        <span class="m-text22 t-center">
          Conoce las maravillas de
        </span>
        <p class="m-text64 t-center pnega-4">
          VITIS
        </p>

        <span class="s-text11 t-center">
          <a href="#" </a>
            <button type="button" class=" hov1 trans-0-4 btn btn-verde  bt-large01">Aquí</button>
          </a>

        </span>
      </div>

      <div class="visible01 flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
        <h4 class="m-text12 t-center">
          Store Opening
        </h4>

        <span class="s-text11 t-center">
          flora y fauna
        </span>
      </div>
    </div>
  </section>

  <!-- section responsive -->  
  <section class="container">
    <div class="visible row vdivide">
            <div class="col-8">
              <p href="#" class="footer04">Conoces las maravillas de </p>
              <p href="#" class="align-self-center text-center footer04m">VITIS</p>
                
               

            </div>

            <div class="col-4">
              <span class="s-text11 t-center">
             
                  <button type="button" class="mt-4 t-center flex-c-m btn-sm hov1 trans-0-4 btn btn-verde redondear">Aquí</button>


              </span>
            </div>
       </div>
  </section>
    <!-- section responsive -->  
<br>


<!-- Fin Bloque de imagenes -->
<div class="container-fluid">
  <div class="row">

    <div class="visible01 col-sm-4 p-0">    
      <div class="view overlay">
        <img src="images/galeria/imagen1.png" class="container04 " alt="">
        <div class="mask rgba-gal">        
          <div class="gal-center t-center">
            <h3 class="h2-responsive  ">HOSPEDAJE </h3>  
            <h5 class="h5-responsive">para darse un relax</h5>
            <a href="#"><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></a>            
            </div>
        </div>
      </div>
    </div>
    <div class="visible01 col-sm-4 p-0">  
      <div class="view overlay">
        <img src="images/galeria/imagen2.png" class="container04 " alt="">
        <div class="mask rgba-gal">  
          <div class="gal-center t-center">
            <h3 class="h2-responsive  ">GASTRONOMÍA</h3>
            <h5 class="h5-responsive">la mejor del lugar</h5>
            <a href="#"><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></a>  
          </div>
        </div>
      </div>
    </div>
    <div class="visible01 col-sm-4 p-0">    
      <div class="view overlay">
        <img src="images/galeria/imagen3.png" class="container04  " alt="">
        <div class="mask rgba-gal">
    
          <div class="gal-center t-center">
            <h3 class="h2-responsive  ">COMPRAS</h3>
            <h5 class="h5-responsive">que llevar a casa</h5>
            <a href="#">
              <i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>
            </a>
    
          </div>
        </div>
      </div>
    </div>

    <div class="visible01 col-sm-4 p-0">    
      <div class="view overlay">
        <img src="images/galeria/imagen4.png" class="container04 " alt="">
        <div class="mask rgba-gal">
    
          <div class="gal-center t-center">
            <h3 class="h2-responsive  ">GALERÍA</h3>
            <h5 class="h5-responsive">tus mejores recuerdos</h5>
            <a href="#">
              <i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>
            </a>
    
          </div>
        </div>
      </div>
    </div>

    <div class="visible01 col-sm-4 p-0">    
      <div class="view overlay">
        <img src="images/galeria/imagen5.png" class="container04  " alt="">
        <div class="mask rgba-gal">    
          <div class="gal-center t-center">
            <h3 class="h2-responsive  ">SITIOS DE INTERÉS</h3>
            <h5 class="h5-responsive">donde ir</h5>
            <a href="#">
              <i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>
            </a>
    
          </div>
        </div>
      </div>
    </div>

    <div class="visible01 col-sm-4 p-0">    
      <div class="view overlay">
        <img src="images/galeria/imagen6.png" class="container04 " alt="">
        <div class="mask rgba-gal">
    
          <div class="gal-center t-center">
            <h3 class="h2-responsive  ">COSTUMBRES</h3>
            <h5 class="h5-responsive">Fiestas y Tradiciones</h5>
            <a href="#">
              <i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>
            </a>
    
          </div>
        </div>
      </div>
    </div>

  </div>
</div>  
<!-- Fin Bloque de imagenes responsive -->
<div class="container">
  <div class="visible">

    <div class="row vdivide">
        <div class="espaciado">
          <img src="images/galeria/imagen1.png" class="img-fluid" alt="">
        </div>
        
      <div class="col-6 bg507 ">
         <div class=" t-center mt-2">
              <p class="m-textplus13m">HOSPEDAJE </p>  
              <p class="m-textplus13m">para darse un relax</p>
              <a href="#"><i class="fa fa-chevron-circle-right fa-2x pt-2" aria-hidden="true"></i></a>            
          </div>
      </div>

      <div class="col-6 bg507 ">
        <div class=" t-center mt-2">
              <p class="m-textplus13m">GASTRONOMÍA </p>  
              <p class="m-textplus13m">la mejor del lugar</p>
              <a href="#"><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></a>            
          </div>
      </div>
    <div class="espaciado ">
        <img src="images/galeria/imagen2.png"  class="img-fluid" alt="">
    </div>

    <div class="espaciado ">
        <img src="images/galeria/imagen3.png"  class="img-fluid" alt="">
    </div>
        <div class="col-6 bg507 ">
        <div class=" t-center mt-2">
              <p class="m-textplus13m">COMPRAS </p>  
              <p class="m-textplus13m">que llevar a casa</p>
              <a href="#"><i class="fa fa-chevron-circle-right fa-2x pt-2" aria-hidden="true"></i></a>            
          </div>
      </div>
          <div class="col-6 bg507 ">
        <div class=" t-center mt-2">
              <p class="m-textplus13m">GALERIAS </p>  
              <p class="m-textplus13m">tus mejores recuerdos</p>
              <a href="#"><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></a>            
          </div>
      </div>
    <div class="espaciado" >
        <img src="images/galeria/imagen4.png"  class="img-fluid" alt="">
    </div>
    <div class="espaciado">
        <img src="images/galeria/imagen5.png"  class="img-fluid" alt="">
    </div>
        <div class="col-6 bg507 ">
        <div class=" t-center mt-2">
              <p class="m-textplus13m">Sitios de Interés </p>  
              <p class="m-textplus13m">donde ir</p>
              <a href="#"><i class="fa fa-chevron-circle-right fa-2x pt-2" aria-hidden="true"></i></a>            
          </div>
      </div>
        <div class="col-6 bg507">
        <div class=" t-center mt-2">
              <p class="m-textplus13m">COSTUMBRES </p>  
              <p class="m-textplus13m">Fiestas y Tradiciones</p>
              <a href="#"><i class="fa fa-chevron-circle-right fa-2x pt-2" aria-hidden="true"></i></a>            
          </div>
      </div>
    <div class="espaciado">
        <img src="images/galeria/imagen6.png"  class="img-fluid" alt="">
    </div>
  </div>

  </div>
</div>
<br>
  <div class="container">
  
    <div class="conta flex-l-m visible01">    
      <p class="m-text64 text-right">#VITIS
        <p class="m-text44 pl-4">&#32;una experiencia inolvidable.</p>
      </p>
    </div>
  </div>

<!-- responsive -->

  <section class="container">
    <div class="visible row vdivide">
            <div class="col-4">
              <p href="#" class="align-self-center text-center footer04m">VITIS</p>
            </div>
            <div class="col-8">
              <p href="#" class="footer04 mt-3">Una experiencia inolvidable </p>
            </div>
       </div>
  </section>
  
<!-- Fin Bloque de imagenes -->

<!-- #VITIS una experiencia inolvidable -->
</br>
<!-- /#VITIS una experiencia inolvidable -->


<!-- Parallax 1 -->
<section class="parallax0 parallax100" style="background-image: url(images/galeria/parallax1.jpg);">
  <div class="overlay0 p-t-190 p-b-200">
    <div class="flex-col-c-m p-l-15 p-r-15">
      <div class="visible01">
        <h3 class="l-text1 fs-35-sm">
          ¡ visita VITIS !
        </h3>
      </div>
      <div class="visible l-text1 fs-20-sm">
        ¡ visita VITIS!
      </div>
      
      
    </div>
  </div>
</section>
<!-- /Parallax 1 -->
<br>
  <div class="container">
    
      <div class="conta flex-r-m visible01">
        <p class="m-text64 text-right">#VITIS
          <p class="m-text44 pl-4">&#32; descúbrelo y vívelo.</p>
        </p>
      </div>
    
  </div>
  <section class="container">
    <div class="visible row vdivide">
            <div class="col-4">
              <p href="#" class="align-self-center text-center footer04m">VITIS</p>
            </div>
            <div class="col-8">
              <p href="#" class="footer04 mt-3">Decúbrelos y vivelo </p>
            </div>
       </div>
  </section>
</br>
<!-- /#VITIS una experiencia inolvidable -->

<!-- Banner video -->
<section class="parallax0 parallax100" style="background-image: url(images/galeria/parallax2.jpg);">
  <div class="overlay0 p-t-190 p-b-200">
    <div class="flex-col-c-m p-l-15 p-r-15">
      <div class="visible01">
        <h3 class="l-text1 fs-35-sm">
          ¡ disfruta VITIS !
        </h3>
      </div>
        
      <div class="visible l-text1 fs-20-sm">
        ¡ disfruta VITIS!
      </div>
    </div>
  </div>
</section>

<!-- Our product -->
<section class=" mx-auto">
  <div class="container01m p-t-19">
    <h2 class="display-6 m-text40 t-center">¡ Pasa unas vacaciones en Vitis y disfruta de esta hermosa tierra !</h2>
    <p class="lead t-center m-textplus">Llegar a Vitis es como visitar el paraíso, su laguna y ríos color turquesa, paisajes verdes y gran historia, lo hace
      uno de los mejores lugares turísticos y preferidos de la Reserva NorYauYos Cochas. Este lugar está lleno de atracciones
      para todos los gustos, si quieres saber más sobre este hermoso Distrito y lugares que visitar ¡sigue leyendo! y te
      daremos algunas recomendaciones para que vayas planeando tu itinerario.</p>
    <hr class="my-4"></hr>
    <h2 class="m-text60 t-center">VITIS
      <div class="visible01">
        <p class="m-textplus2">¡Tu próxima aventura!</p>
      </div>
      <div class="visible">
        <p class="m-textplus2s">¡Tu próxima aventura!</p>
      </div>
      <p class="lead">

        <a class="" href="#" role="button">
          <i class="fa fa-chevron-circle-right fa-3x" aria-hidden="true"></i>
        </a>
      </p>
    </h2>
  </div>
</section>


@endsection
