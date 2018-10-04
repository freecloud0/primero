@extends('layouts.app')

@section('content')

<?php
	$tablas[0]="DEPARTAMENTO";
	$tablas[1]="PROVINCIA";
	$tablas[2]="DISTRITO";
	$tablas[3]="OPERADOR";
	$tablas[4]="TODO";

	$tips[0]="DEPARTAMENTO";
	$tips[1]="PROVINCIA";
	$tips[2]="DISTRITO";
	$tips[3]="OPERADOR";
	$tips[4]="TODO";
?>



<br>
<div class="container04 text-center visible">
			<button class="btn btn-verde btn-sm" data-filter="all" id="departamento">Todo</button>
            <button class="btn btn-verde btn-sm" data-filter="hdpe">Noticias</button>
            <button class="btn btn-verde btn-sm" data-filter="sprinkle">Tip</button>
</div>
			
<div class="container08">
<div class="container04 visible01">
			<button class="btn btn-verde btn-sm" id="todoC" data-filter="all">Todo</button>
            <button class="btn btn-verde btn-sm" id="noti" data-filter="hdpe">Noticias</button>
            <button class="btn btn-verde btn-sm" id="tipC" data-filter="sprinkle">Tip</button>
</div>
		
	
<div class="ui-widget container">
		<label class="white-text" >Busqueda </label>
		<input  class="form-control w-100 redondear" id="filtrar"  placeholder="Escribe">
</div>

	<div class="row mt-4 " id="buscar">
			@foreach ( $tablas as $tabla )
				<div class="col-sm-4 mb-4" id="busca-tra">
					<div class="card">
					  <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Card image cap">
					  <div class="card-body ">
						<div class="row">
							<div class="col-7">
								<h4 class="card-title"><a>Noticias</a></h4>
							</div>
							<div class="col-5 m-t-8">
								<p class="m-textplus-24">02/02/2018</p>
							</div>
						</div>
						<h6 class="text-center b-01" id="myTable">{{$tabla}}</h6>
						<p class="card-text ">Es indudable que Vitis fue poblada por tribus pequeñas de raza aymara, cuya identidad fue difícil de determinar; pero que los restos dejados por estos habitantes y las ruinas existentes hasta la actualidad...</p>
							<div class="row">
								<div class="col-6">
									<a href="{{ asset('blog-vista') }}" class="btn btn-verde btn-sm redondear mt-4 align-self-center ">Seguir</a>
								</div>
		
								<div class="col-6 m-t-30 ">
									<ul class="list-unstyled list-inline font-small">
										<li class="list-inline-item pr-2 esp-02"><a href=""><i class=" fa fa-thumbs-up" aria-hidden="true"></i></a>15</li>
										<li class="list-inline-item pr-2"><a href=""><i class=" fa fa-comments-o" aria-hidden="true"></i></a>12</li>
									</ul>
								</div>
							</div>
					  </div>
					</div>
				</div>
			@endforeach

			@foreach ( $tips as $tip )
				<div class="col-sm-4 mb-4" id="busca-tra">
					<div class="card">
					  <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Card image cap">
					  <div class="card-body ">
						<div class="row">
							<div class="col-7">
								<h4 class="card-title"><a>Tips</a></h4>
							</div>
							<div class="col-5 m-t-8">
								<p class="m-textplus-24">02/02/2018</p>
							</div>
						</div>
						<h6 class="text-center b-01" id="myTable">{{$tip}}</h6>
						<p class="card-text ">Es indudable que Vitis fue poblada por tribus pequeñas de raza aymara, cuya identidad fue difícil de determinar; pero que los restos dejados por estos habitantes y las ruinas existentes hasta la actualidad...</p>
							<div class="row">
								<div class="col-6">
									<a href="{{ asset('blog-vista') }}" class="btn btn-verde btn-sm redondear mt-4 align-self-center ">Seguir</a>
								</div>
		
								<div class="col-6 m-t-30 ">
									<ul class="list-unstyled list-inline font-small">
										<li class="list-inline-item pr-2 esp-02"><a href=""><i class=" fa fa-thumbs-up" aria-hidden="true"></i></a>15</li>
										<li class="list-inline-item pr-2"><a href=""><i class=" fa fa-comments-o" aria-hidden="true"></i></a>12</li>
									</ul>
								</div>
							</div>
					  </div>
					</div>
				</div>
			@endforeach

	
		
		{{-- <div class="col-sm-4 mb-4">
			<!-- Card -->
			<div class="card">

			  <!-- Card image -->
			  <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Card image cap">

			  <!-- Card content -->
			  <div class="card-body ">

			    <!-- Title -->
				<div class="row">
					<div class="col-7">
						<h4 class="card-title"><a>Época Pre Inca</a></h4>
					</div>
					<div class="col-5 m-t-8">
						<p class="m-textplus-24">02/02/2018</p>
					</div>
				</div>
			    			
			    <!-- Text -->
			    <p class="card-text">Es indudable que Vitis fue poblada por tribus pequeñas de raza aymara, cuya identidad fue difícil de determinar; pero que los restos dejados por estos habitantes y las ruinas existentes hasta la actualidad...</p>
			    <!-- Button -->
			    	<div class="row">
			    		<div class="col-6"><a href="{{ asset('blog-vista') }}" class="btn btn-verde btn-sm redondear mt-4 align-self-center ">Seguir</a></div>

			    		<div class="col-6 m-t-30 ">
			    			<ul class="list-unstyled list-inline font-small">
					    		<li class="list-inline-item pr-2 esp-02"><a href=""><i class=" fa fa-thumbs-up" aria-hidden="true"></i></a>15</li>

					    		<li class="list-inline-item pr-2"><a href=""><i class=" fa fa-comments-o" aria-hidden="true"></i></a>12</li>
					    	</ul>
			    		</div>
			    	</div>
			    	
			  </div>
			  

			</div>
			<!-- Card -->
		</div> --}}
		
	</div>
</div>

	<div class="container text-center">
	
	<a href="#" class="btn btn-verde btn-sm redondear mt-4 ">Buscar mas Resultados</a>
	</div>




@endsection

