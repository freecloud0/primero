@extends('layouts.app')

@section('content')
<!--Vista 02 ...........................................................................................-->
 <br>
 <br>
  
<!--Carousel Wrapper-->
<div id="ambientes-01" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#ambientes-01" data-slide-to="0" class="active"></li>
        <li data-target="#ambientes-01" data-slide-to="1"></li>
        <li data-target="#ambientes-01" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view container07">
                <img class="d-block w-100" src="image/comida01.jpg" alt="First slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view container07">
                <img class="d-block w-100" src="image/comida01.jpg" alt="Second slide">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
               
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view container07" >
                <img class="d-block w-100" src="image/comida01.jpg" alt="Third slide">
                <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
                
            </div>
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#ambientes-01" role="button" data-slide="prev">
      <i class="fa fa-chevron-circle-left fa-3x grey-text" aria-hidden="true"></i>
      <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#ambientes-01" role="button" data-slide="next">
      <i class="fa fa-chevron-circle-right fa-3x grey-text" aria-hidden="true"></i>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<br>
<br>
<!--/.cuadro de leyendas--> 
<div class="container10">
  <h4 class="m-text22 align-self-center text-center"><span class="m-textplus7m">"SITIOS RURALES, LLENOS DE ENCANTO"</span> </h4>
  <br>
    <p class="m-text12 align-self-center text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  ¡VIVE UNA EXPERIENCIA UNICA!.
    </p>
    <br>
    <p class="m-text12 align-self-center text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ¡VIVE UNA EXPERIENCIA UNICA!.
    </p>
</div>
                   
<br>
<br>

<!--/.cuadro de leyendas-->               
<br>
<br>
<!--/.Mapa de google maps-->
<h4 class="m-text22 align-self-center text-center"> <span class="m-textplus7m">HOTEL Y CASAS RURALES EN VITIS</span> </h4>
<br>
<div class="container">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15607.21699285121!2d-75.2156672!3d-12.056985599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1524698596607" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>
<!--/.Mapa de google maps-->
<br>
<br>


<!--Table-->
<div class="container">
   <p class="m-text22 align-self-center text-center"><span class="m-textplus7m">LISTA DE ALOJAMIENTO RURALES</span></p>
  <br>
  <br>
  <table class="table table-striped">

    <!--Table head-->
    <thead>
        <tr>
            <th>#</th>
            <th>Alojamiento</th>
            <th>Responsable</th>
            <th>Móvil</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>9999999</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>9999999</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>9999999</td>
        </tr>
    </tbody>
    <!--Table body-->

  </table>
<!--Table-->
</div>

<br>
<br>
    

<br>
<br>
    
@endsection
