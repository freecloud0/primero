@extends('layouts.app')

@section('content')
<script>
	window.onload = function(){
    document.getElementById("ap04").classList.add("acerr"); 
	}
</script>

<!--- contenido-->

<div class="container12">
	
	{{-- <img class="image05 d-block " src="{{ asset('images/galeria/parallax2.jpg') }}" alt="Second slide"> --}}
	<div class="ptol-8">
			<img class="img-fluid d-block w-100" src="{{ asset('image/his-01.png') }}" alt="Second slide">
	</div>
	
</div>
<div class="container-8po">
	<div class="texttitulo-b align-self-center text-center"> Historia
	</div>
	<div class="linea03">

	</div>

	<div class="texttitulo-g align-self-center m-t-10"> ETIMOLOGIA
	</div>

	<p class="lead  m-textplus">A la palabra VITIS, se le asigna varios orígenes siendo:</p>
	<ul>
		<li class="lead  m-textplus m-l-30">+ Vocablo Quechua: WEKTE que significa “legaña”.</li>
		<li class="lead  m-textplus m-l-30">+ Vocablo Quechua: WEKTE que significa “legaña”.</li>
		<li class="lead  m-textplus m-l-30">+ Vocablo Quechua: WEKTE que significa “legaña”.</li>
	</ul>
	<p class="lead  m-textplus">Quienes aseguran que el origen es quechua, se basan en que la mayoría de los habitantes padecen del enroecimiento y lagrimeo de los ojos a consecuencia de los vientos que reina en el pueblo, debido a su ubicación geográfica.<br />
	Los que fundamentan elorigen del jakaro, se basan en que el pueblo estuvo poblado por gente de fuera o sea de WITIS.
	Según manifestaba el padre redentorista Carmelo en su visita pastoral al pueblo de Vitis, en el año 1947, la palabra VITIS tiene origen latín VID osea VIDA, por su gente buena que da vida, tal como él observó la vez que estuvo en el pueblo: hospitalario y que da vida.</p>
	
	<p class="lead  m-textplus">Quienes aseguran que el origen es quechua, se basan en que la mayoría de los habitantes padecen del enroecimiento y lagrimeo de los ojos a consecuencia de los vientos que reina en el pueblo, debido a su ubicación geográfica.<br />
	Los que fundamentan elorigen del jakaro, se basan en que el pueblo estuvo poblado por gente de fuera o sea de WITIS.
	Según manifestaba el padre redentorista Carmelo en su visita pastoral al pueblo de Vitis, en el año 1947, la palabra VITIS tiene origen latín VID osea VIDA, por su gente buena que da vida, tal como él observó la vez que estuvo en el pueblo: hospitalario y que da vida.</p>
	<p class="lead  m-textplus">Quienes aseguran que el origen es quechua, se basan en que la mayoría de los habitantes padecen del enroecimiento y lagrimeo de los ojos a consecuencia de los vientos que reina en el pueblo, debido a su ubicación geográfica.<br />
	Los que fundamentan elorigen del jakaro, se basan en que el pueblo estuvo poblado por gente de fuera o sea de WITIS.
	Según manifestaba el padre redentorista Carmelo en su visita pastoral al pueblo de Vitis, en el año 1947, la palabra VITIS tiene origen latín VID osea VIDA, por su gente buena que da vida, tal como él observó la vez que estuvo en el pueblo: hospitalario y que da vida.</p>




</div>
<br><br>

<!-- Parallax 1 -->
<section class="parallax0 parallax100" style="background-image: url(images/galeria/parallax1.jpg);">
  <div class="overlay0 p-t-190 p-b-200">
    <div class="flex-col-c-m p-l-15 p-r-15">
      <div class="visible01 container08">
        <p class="l-text1-b">
        	"
          		Es la historia el más grande ejemplo de la vida humana,
				que se instituye con la experiencia
				y se corrige con el ejemplo.  - J.B.B. - "                   
        </p>
      </div>
      <div class="visible l-text1 fs-20-sm">
        ¡ visita VITIS!
      </div>
      
      
    </div>
  </div>
</section>
<!-- /Parallax 1 -->
<br><br>
<div class="container-8po">
	<div class="row">

		<div class="col-sm-4 p-4">
			<div class="card ">
					{{-- <div class="rows-01"></div> --}}
			<img class="rows-01" src="{{ asset('image/historia/h-pre-inca.jpg') }}" alt="Second slide">
			  <div class="card-body ">
			    <h4 class="card-title"><a>Época Pre Inca</a></h4>
			    <p class="card-text">Es indudable que Vitis fue poblada por tribus 
					pequeñas de raza aymara, cuya identidad fue difícil de determinar; 
					pero que los restos dejados por estos habitantes y las ruinas 
					existentes  ...</p>
			    <div class="container08 text-center">
			    	<a href="#" class="btn btn-verde btn-sm redondear mt-4" data-toggle="modal" data-target="#his-01">Button</a>
				</div>

					<!-- Modal -->
					<div class="modal fade" id="his-01" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg " role="document">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Época Pre Inca</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-4">
										<img class="w-100" src="{{ asset('image/historia/h-pre-inca.jpg') }}" alt="Second slide">
									</div>
									<div class="col-md-8">
										<p class="text-justify">Es indudable que Vitis fue poblada por tribus pequeñas de raza aymara, cuya identidad fue difícil de determinar; pero que los restos dejados por estos habitantes y las ruinas existentes hasta la actualidad nos dice de su existencia.
											En esta época vivieron bajo el dominio de la tribu de los Yauyos, cuyo jefe principal residía en Ñaupahuasi, por seguridad se organizó el pueblo de Cochashuasi, cuyas ruinas existen hasta la actualidad. Construyeron el sistema de andenería, canales de regadío, represas para el almacenamiento de agua y poder regar sus tierras, además construyeron fortalezas para su defensa como: Chaupihuaranga, Huayllujina y Huanco, siendo barreras de protección contra los Huaquis.
											Del mismo modo represaron las lagunas de Sucuya, Acarcay, Allcacocha, Yanacancha, Carhuacocha y construyeron los canales que aún se siguen utilizando en la actualidad, como los de Cuchicuchi a Vitis, Callanca a Pirca hasta Cochashuasi, Pacaya a Quipichurca, de Puente a Huayamá entre otros
										</p>
									</div>
								</div>
							</div>
							
							</div>
						</div>
					</div>
						
			  </div>
			</div>
		</div>

		<div class="col-sm-4 p-4">
			<div class="card ">
					<img class="rows-01" src="{{ asset('image/historia/h-inca.jpg') }}" alt="Second slide">
				<div class="card-body ">
					<h4 class="card-title"><a>Época Incaica</a></h4>
					<p class="card-text">Los Yauyos fueron hombres valientes y trabajadores, 
						quienes a la llegada del ejército incaico, pusieron tenaz resistencia 
						a su conquista, pero al ser vencidos en el Valle ...</p>
					<div class="container08 text-center">
						<a href="#" class="btn btn-verde btn-sm redondear mt-4" data-toggle="modal" data-target="#his-02">Button</a>
					</div>

					<!-- Modal -->
					<div class="modal fade" id="his-02" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg " role="document">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Época Pre Inca</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-4">
										<img class="w-100" src="{{ asset('image/historia/h-inca.jpg') }}" alt="Second slide">
									</div>
									<div class="col-md-8">
										<p class="text-justify">
												Los Yauyos fueron hombres valientes y trabajadores, quienes a la llegada del ejército incaico, pusieron tenaz resistencia a su conquista, pero al ser vencidos en el Valle de Herwel (Cañete) se retiraron a las cumbres agrestes, de la hoy provincia de Yauyos, para seguir ofreciendo resistencia  a los invasores siendo comandado por el inca Túpac Yupanqui, hermano de Pachacútec. Ante la derrota, los Yauyos fueron incorporados al imperio incaico por común consentimiento de sus pobladores y por las porposiciones ventajosas que les dieron, pero no aceptaron a los mitimaes, ni jefes de la nobleza cusqueña. En esa época de gran esplendor, siguieron construyendo andenes, represas y acequias como lo hicieron anteladamente.
										</p>
									</div>
								</div>
							</div>
							
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="col-sm-4 p-4">
			<div class="card">
					<img class="rows-01" src="{{ asset('image/historia/h-con.jpg') }}" alt="Second slide">
				<div class="card-body ">
					<h4 class="card-title"><a>Época de la Conquista</a></h4>
					<p class="card-text">Los Vitis conjuntamente con la tribu de los Yauyos, ofrecieron tenaz resistencia a los españoles; pero inteligentemente fingieron haber sido sometidos al nuevo régimen... </p>
					<div class="container08 text-center">
						<a href="#" class="btn btn-verde btn-sm redondear mt-4 "  data-toggle="modal" data-target="#his-03">Button</a>
				</div>
				</div>

					<!-- Modal -->
					<div class="modal fade" id="his-03" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg " role="document">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Época Pre Inca</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-4">
										<img class="w-100" src="{{ asset('image/historia/h-con.jpg') }}" alt="Second slide">
									</div>
									<div class="col-md-8">
										<p class="text-justify">
												Los Vitis conjuntamente con la tribu de los Yauyos, ofrecieron tenaz resistencia a los españoles; pero inteligentemente fingieron haber sido sometidos al nuevo régimen, por cuya razón siguieron manteniendo el dominio de sus tierras, existiendo hasta la acutalidad propiedades colectivas, eliminándose de ese modo el latifundismo, que en otros lugares había contribuído el debilitamiento del aborigen.
										</p>
									</div>
								</div>
							</div>
							
							</div>
						</div>
					</div>

			</div>
		</div>

		<div class="col-sm-4 p-4">
			<div class="card">
					<img class="rows-01" src="{{ asset('image/historia/h-virey.jpg') }}" alt="Second slide">
				<div class="card-body ">
					<h4 class="card-title"><a>Época del Virreinato</a></h4>
					<p class="card-text">En el año 1586, don Diego Dávila de Briceño, realizó la demarcación territorial, conformándose tres parroquias con cuatro pueblos cada uno, encomendados a la orden religiosa de los Dominicos,  ....</p>
					<div class="container08 text-center">
						<a href="#" class="btn btn-verde btn-sm redondear mt-4 " data-toggle="modal" data-target="#his-04">Button</a>
				</div>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="his-04" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg " role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Época Pre Inca</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-4">
								<img class="w-100" src="{{ asset('image/historia/h-virey.jpg') }}" alt="Second slide">
							</div>
							<div class="col-md-8">
								<p class="text-justify">
										En el año 1586, don Diego Dávila de Briceño, realizó la demarcación territorial, conformándose tres parroquias con cuatro pueblos cada uno, encomendados a la orden religiosa de los Dominicos, es a´si como se formó la Parroquia de Santo Domingo de Laraos, al que Vitis llegó a pertenecer como Viceparroquia por la importancia que alcanzó en aquel entonces.
								</p>
							</div>
						</div>
					</div>
					
					</div>
				</div>
			</div>

		</div>

		<div class="col-sm-4 p-4">
			<div class="card">
					<img class="rows-01" src="{{ asset('image/historia/h-inde.png') }}" alt="Second slide">
				<div class="card-body ">
					<h4 class="card-title"><a>Época de la Independencia</a></h4>
					<p class="card-text">Cuando estalló la guerra libertaria, Vitis hizo vibrar su volutand de liberarse juntamente con todos los pueblos de la zona Norte de Yauyos y lo manifestaron, especialmente durante ...</p>
					<div class="container08 text-center">
						<a href="#" class="btn btn-verde btn-sm redondear mt-4 " data-toggle="modal" data-target="#his-05">Button</a>
				</div>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="his-05" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg " role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Época Pre Inca</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-4">
										<img class="w-100" src="{{ asset('image/historia/h-inde.png') }}" alt="Second slide">
								</div>
								<div class="col-md-8">
									<p class="text-justify">
											Cuando estalló la guerra libertaria, Vitis hizo vibrar su volutand de liberarse juntamente con todos los pueblos de la zona Norte de Yauyos y lo manifestaron, especialmente durante la retirada del Virrey La Serna a Jauja, cuando el Generalísimo Don José de San Martín ocupó la ciudad de Lima.
									</p>
								</div>
							</div>
						</div>
						
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="col-sm-4 p-4">
			<div class="card">
					<img class="w-100" src="{{ asset('image/historia/h-inde.png') }}" alt="Second slide">
				<div class="card-body ">
					<h4 class="card-title"><a>Época Republicana</a></h4>
					<p class="card-text">En el Reglamento Provisional del General Don José de San Martín del 4 de agosto de 1821, Yauyos fue incluido entre las provincias de Lima con rango político que el General don Simón ...</p>
					<div class="container08 text-center">
						<a href="#" class="btn btn-verde btn-sm redondear mt-4 " data-toggle="modal" data-target="#his-06">Button</a>
				</div>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="his-06" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg " role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Época Pre Inca</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-4">
								<img class="w-100" src="{{ asset('image/historia/h-inde.png') }}" alt="Second slide">

								</div>
								<div class="col-md-8">
									<p class="text-justify">
											En el Reglamento Provisional del General Don José de San Martín del 4 de agosto de 1821, Yauyos fue incluido entre las provincias de Lima con rango político que el General don Simón Bolívar reconoció en su momento.
									</p>
								</div>
							</div>
						</div>
						
						</div>
					</div>
				</div>

			</div>
		</div>



		


	</div>
</div>
<br>
<div class="container text-center">
	<h1 class="m-textplus12">Historia de Vitis</h1>
	<a href="#" class="btn btn-verde btn-sm redondear mt-4 ">Descarga completa</a>
</div>
	
<br><br>
	












@endsection