@extends('layouts.app')

@section('content')
<script>
	window.onload = function(){
    document.getElementById("ap03").classList.add("acerr"); 
	}
</script>
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
                <img class="d-block w-100" src="image/hospedaje01.jpg" alt="First slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view container07">
                <img class="d-block w-100" src="image/hospedaje01.jpg" alt="Second slide">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
               
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view container07" >
                <img class="d-block w-100" src="image/hospedaje01.jpg" alt="Third slide">
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
    <p class="m-text12 align-self-center text-center">
        Vitis, tiene hermosos lugares par el descanso de todos sus visitantes, para descansar o para vacacionar  en contacto con la naturaleza. Se ofrece variedad de ofertas para todo el público, que le permitirá seleccionar la mejor opción para los suyos.
    </p>
    <br>
    <p class="m-text12 align-self-center text-center">
            Hotel, casas rurales, ajustadas a los bolsillos pero con algo en común: LA BELLEZA PAISAJÍSTICA, vistas hermosas, aire puro y mucho contacto directo con la naturaleza. 
            ¡ Le invitamos a visitar VIITS ! y si puede, pase las mejores vacaciones con nosotros.
            Vivirás una inigualable sensación con la puesta y salida del sol
            ¡ VIVE UNA EXPERIENCIA ÚNICA !
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3674.4488502682766!2d-75.25356818047356!3d-12.044431718313927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses!2spe!4v1538517675070" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


</div>
<!--/.Mapa de google maps-->
<br>
<br>


<!--Table-->
<div class="container">
   <p class="m-text22 align-self-center text-center"><span class="m-textplus7m">LISTA DE ALOJAMIENTO RURALES</span></p>
  <br>
  <br>
  <div class="table-responsive ">
    <table class="table table-striped">

        <!--Table head-->
        <thead >
            <tr>
                <th>#</th>
                <th>RAZON SOCIAL </th>
                <th>Responsable</th>
                <th>Habitaciones</th>
                <th class="text-center">Móvil</th>
            </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Hospedaje MARÍA</td>
                <td>Admes Cangalaya Vilchez</td>
                <td>
                    <div class="row">
                        <div class="col-md-2">
                                5 <i class=" fa  fa-suitcase orange-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-2">
                                4 <i class=" fa fa-bed" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-2">
                            2 <i class="fa fa-bath" aria-hidden="true"></i>
                            {{-- <i class="fa fa-taxi" aria-hidden="true"></i> --}}
                            
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-mobile mr-2 text-20-sise" aria-hidden="true"></i> 966372942
                </td>
            
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Hospedaje YAVELY</td>
                <td>Celestina Hinostroza Collachagua</td>
                <td>
                    <div class="row">
                        <div class="col-md-2">
                                4 <i class=" fa  fa-suitcase orange-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-2">
                                2 <i class=" fa fa-bed" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-2">
                            1 <i class="fa fa-bath" aria-hidden="true"></i>
                            {{-- <i class="fa fa-taxi" aria-hidden="true"></i> --}}
                            
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-mobile mr-2 text-20-sise" aria-hidden="true"></i> 968694143
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>Rubén Flores Zenteno</td>
                <td>
                    <div class="row">
                        <div class="col-md-2">
                                4 <i class=" fa  fa-suitcase orange-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-2">
                                4 <i class=" fa fa-bed" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-2">
                            1 <i class="fa fa-bath" aria-hidden="true"></i>
                            {{-- <i class="fa fa-taxi" aria-hidden="true"></i> --}}
                            
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-mobile mr-2 text-20-sise" aria-hidden="true"></i> 972286805
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td> Hospedaje MILY</td>
                <td>Liz Hoces</td>
                <td>
                    <div class="row">
                        <div class="col-md-2">
                                3 <i class=" fa  fa-suitcase orange-text" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-2">
                                2 <i class=" fa fa-bed" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-2">
                            1 <i class="fa fa-bath" aria-hidden="true"></i>
                            {{-- <i class="fa fa-taxi" aria-hidden="true"></i> --}}
                            
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <i class="fa fa-mobile mr-2 text-20-sise" aria-hidden="true"></i> 950140584
                </td>
            </tr>
        </tbody>
        <!--Table body-->

    </table>
  </div>
<!--Table-->
</div>

<br>
<br>
    

<br>
<br>
    
@endsection
