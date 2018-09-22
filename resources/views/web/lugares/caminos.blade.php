@extends('layouts.app')

@section('content')
<br><br>
<div class="container12">
    
    <br><br>
    <img class="image05 d-block " src="{{ asset('images/galeria/parallax2.jpg') }}" alt="Second slide">
    <br>


</div>

<br><br>
<div class="container09">
  <br>
    <h3 class="align-self-center text-center">Sitios de interés</h3> 
    <div class="linea01"></div>
    <br>
    

<div class="visible01">
  <br><br>
</div>
    


</div>


    <div class="container09">
        <div class="row">
            <div class="col-1 visible01"></div>
            <div class="col-sm-5 p-4">
                <!-- Card -->
                <div class="card border p-2">

                  <!-- Card image -->
                  <div class="view overlay">
                    <div class="container">
                        <img class="card-img-top mt-4" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
                         <a href="#!">
                          <div class="mask rgba-white-slight" onclick="lightbox(0)"></div>
                        </a>
                    </div>

                  </div>

                  <!-- Card content -->
                  <div class="card-body ">
                    <div class="container-01">
                        <p class="text-center lug-01">Paisajes</p>
                    </div>

                    <!-- Button -->
                    

                  </div>

                </div>
                <!-- Card -->
            </div>

            <div class="col-sm-5 p-4">
                <!-- Card -->
                <div class="card border p-2">

                  <!-- Card image -->
                  <div class="view overlay">
                    <div class="container">
                        <img class="card-img-top mt-4" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
                         <a href="#!">
                          <div class="mask rgba-white-slight" onclick="lightbox(2)"></div>
                        </a>
                    </div>

                  </div>

                  <!-- Card content -->
                  <div class="card-body">
                    <div class="container-01">
                        <p class="text-center lug-01">Senderos</p>
                    </div>

                    <!-- Button -->
                    

                  </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col-1 visible01"></div>
        </div>
    </div>
    
    <div class="container09">
        <div class="row">
            <div class="col-1 visible01"></div>
            <div class="col-sm-5 p-4">
                <!-- Card -->
                <div class="card border p-2">

                  <!-- Card image -->
                  <div class="view overlay">
                    <div class="container">
                        <img class="card-img-top mt-4" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg" alt="Card image cap">
                         <a href="#!">
                          <div class="mask rgba-white-slight" onclick="lightbox(0)"></div>
                        </a>
                    </div>

                  </div>

                  <!-- Card content -->
                  <div class="card-body ">
                    <div class="container-01">
                        <p class="text-center lug-01">Vida natural</p>
                    </div>

                    <!-- Button -->
                    

                  </div>

                </div>
                <!-- Card -->
            </div>

            <div class="col-sm-5 p-4">
                <!-- Card -->
                <div class="card border p-2">

                  <!-- Card image -->
                  <div class="view overlay">
                    <div class="container">
                        <img class="card-img-top mt-4" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg" alt="Card image cap">
                         <a href="#!">
                          <div class="mask rgba-white-slight" onclick="lightbox(2)"></div>
                        </a>
                    </div>

                  </div>

                  <!-- Card content -->
                  <div class="card-body">
                    <div class="container-01">
                        <p class="text-center lug-01">Natualeza líquida</p>
                    </div>

                    <!-- Button -->
                    

                  </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col-1 visible01"></div>
        </div>
    </div>





    <!--Galeria de imagenes a mostrar en slider-->
    <div style="display:none;">
        <div id="ninja-slider">
            <div class="slider-inner">
                <ul>
                    <li>
                        <a class="" ><img class="card-img-top mt-4 border-ima" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"></a>
                        <div class="caption-01">
                            <h3>Dummy Caption 1</h3>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan purus.</p>
                        </div>
                    </li>
                    <li>
                        <a class="" ><img class="card-img-top mt-4 border-ima" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap"></a>
                        <div class="caption-01">
                            <h3>Dummy Caption 1</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan purus.</p>
                        </div>
                    </li>
                    <li>
                        <a class="" ><img class="card-img-top mt-4 border-ima" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg" alt="Card image cap"></a>
                        <div class="caption-01">
                            <h3>Dummy Caption 1</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan purus.</p>
                        </div>
                    </li>
                    <li>
                        <a class="" ><img class="card-img-top mt-4 border-ima" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" alt="Card image cap"></a>
                        <div class="caption-01">
                            <h3>Dummy Caption 1</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan purus.</p>
                        </div>
                    </li>
                    <li>
                        <a class="" ><img class="card-img-top mt-4 border-ima" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg" alt="Card image cap"></a>
                        <div class="caption-01">
                            <h3>Dummy Caption 1</h3>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan purus.</p>
                        </div>
                    </li>
                </ul>
                <div id="fsBtn" class="fs-icon" title="CERRAR"></div>
            </div>
        </div>
    </div>
<div class="container text-center">
   <button type="button" class="btn btn-blue-grey mt-4">Contactar para visitar</button>
</div>














<!----------escrip de carosuel----------->

  
























@endsection