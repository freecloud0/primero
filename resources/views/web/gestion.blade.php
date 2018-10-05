@extends('layouts.app')

@section('content')
<!--Vista 02 ...........................................................................................-->
<script>
	window.onload = function(){
    document.getElementById("ap02").classList.add("acerr"); 
	}
</script>

  <br>
  <br>
  <div class="container08 mt-8">
           <div class="row ">
             <div class="col-md-4 align-self-center text-center">
                 <img src="image/gestion/g-alcalde.png" class="image01-b">
             </div>
             <div class="col-md-8">
                 <div class="card-block margen01">
                   <h4 class="m-text22"><span class="m-textplus7m">CONSEJO DISTRITAL DE VITIS</span> </h4>
                   <P class="m-textplus7">GESTIÓN 2015-2018</P>
                   <br>
                   <p class="m-textplus10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                   </p>
                   <br>
                   <p class="m-textplus8">Manuel P. Hinostroza Collachagua</p>
                   <p class="m-textplus9">ALCALDE</p>
                 </div>
             </div>
           </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="gray-01 ">
        <div class="container08 p-4">
                <img src="image/gestion/g-regidor.png" class="w-100">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-center mt-4">
                                <p class="m-text-g">Raúl V. Castro Fernández</p>
                                <p class="m-text-g">REGIDOR</p>
                        </div>
                        <div class="text-center mt-4">
                                <p class="m-text-g">Waldo E.Hilario Bejarano</p>
                                <p class="m-text-g">REGIDOR</p>
                        </div>
                        <div class="text-center mt-4">
                                <p class="m-text-g">Víctor H. Flores Bejarano</p>
                                <p class="m-text-g">REGIDOR</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="text-center mt-4">
                                    <p class="m-text-g">Edith B.Ravichagua Toribio </p>
                                    <p class="m-text-g">REGIDOR</p>
                            </div>
                            <div class="text-center mt-4">
                                    <p class="m-text-g">Cerila A.Juan De Dios Franco</p>
                                    <p class="m-text-g">REGIDOR</p>
                            </div>
                    </div>
                </div>
        </div>
    </div>


<!--Table-->
<br>
<br>

<h4 class="m-text22 align-self-center text-center mt-4"><span class="m-textplus7m">GESTIÓN Y PROYECTO</span></h4>

  

<div class="container">
            <div class="text-center my-5">
                <button  class="btn btn-verde btn-sm  b-01" id="show-2015">2015</button>
                <button  class="btn btn-verde btn-sm b-01" id="show-2016">2016</button>
                <button  class="btn btn-verde btn-sm b-01"  id="show-2017">2017</button>
                <button  class="btn btn-verde btn-sm b-01"  id="show-2018">2018</button>
            </div>
  <!--Table--> 
    <div class="table-responsive" id="rot15">     
      <table class="table table-striped">
          <thead class="text-center">
              <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Fecha</th>
                  <th>Descargar</th>
              </tr>
          </thead>
            <tbody >
                <tr>
                    <th scope="row">1</th>
                    <td>Estudio de Preinversion y perfil técnico del "Mejoramiento del sistema de agua potable y desagüe en la localidad de Vitis - Distrito de Vitis, Yauyos, Lima.</td>
                    <td>2015</td>
                    <td><button type="button" class="descargas btn-danger btn-sm" href="https://www.google.com/drive/" target="_blank"><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Ampliación de infraestructura turísticas</td>
                    <td>2015</td>
                    <td><button type="button" class="descargas btn-danger btn-sm "><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Construcción de local de serenazgo y caseta de seguridad ciudadana.</td>
                    <td>2015</td>
                    <td><button type="button" class="descargas btn-danger btn-sm "><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Mejoramiento y equipamiento del local de la Municipalidad de Vitis, distrito de Vitis - Yauyos – Lima</td>
                    <td>2015</td>
                    <td><button type="button" class="descargas btn-danger btn-sm "><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Perfil y expediente del "Mejoramiento y ampliación de camino vecinal al centro de producción de Pacaya, distrito de Vitis - Yauyos - Lima</td>
                    <td>2015</td>
                    <td><button type="button" class="descargas btn-danger btn-sm "><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Abastecimiento de agua potable</td>
                    <td>2015</td>
                    <td><button type="button" class="descargas btn-danger btn-sm "><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Implementacion internet municipal</td>
                    <td>2015</td>
                    <td><button type="button" class="descargas btn-danger btn-sm "><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Gerenciar recursos materiales, humanos y financieros</td>
                    <td>2015</td>
                    <td><button type="button" class="descargas btn-danger btn-sm "><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Elaboración de estudios de pre inversión y expedientes técnicos</td>
                    <td>2015</td>
                    <td><button type="button" class="descargas btn-danger btn-sm "><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>Equipamiento audio visual del tv cable- domiciliario 12 canales</td>
                    <td>2015</td>
                    <td><button type="button" class="descargas btn-danger btn-sm "><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>Apoyar a la educación para su adecuada formación académica</td>
                    <td>2015</td>
                    <td><button type="button" class="descargas btn-danger btn-sm "><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>Mejoramiento genético de ganado vacuno en el Centro de Produccion Pacaya, distrito de Vitis - Yauyos - Lima"</td>
                    <td>2015</td>
                    <td><button type="button" class="descargas btn-danger btn-sm "><span class="m-textplus4">PDF</span></button></td>
                </tr>

            </tbody>
            
          <!--Table body-->

      </table>
    </div>
    <div class="table-responsive" id="rot16">
        <table class="table table-striped">
            <thead class="text-center">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Descargar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Implementacion del Puesto de Salud en la localidad y distrito de Vitis - Yauyos – Lima
                    </td>
                    <td>2016</td>
                    <td><button type="button" class="descargas btn-danger btn-sm" href="https://www.google.com/drive/" target="_blank"><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Construcción de servicios higiénicos y hospedaje municipal en el distrito de Vitis – Yauyos – Lima  
                    </td>
                    <td>2016</td>
                    <td><button type="button" class="descargas btn-danger btn-sm" href="https://www.google.com/drive/" target="_blank"><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Mejoramiento de los servicios higiénicos y accesibilidad del cementerio del distrito de  Vitis - Yauyos – Lima
                    </td>
                    <td>2016</td>
                    <td><button type="button" class="descargas btn-danger btn-sm" href="https://www.google.com/drive/" target="_blank"><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Mejoramiento y reflotamiento de piscigranja Marcatupe, distrito de  Vitis - Yauyos – Lima 
                    </td>
                    <td>2016</td>
                    <td><button type="button" class="descargas btn-danger btn-sm" href="https://www.google.com/drive/" target="_blank"><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>CONSTRUCCION DE  SISTEMA DE  RIEGO TECNIFICADO EN EL PARAJE DE 
                    </td>
                    <td>2016</td>
                    <td><button type="button" class="descargas btn-danger btn-sm" href="https://www.google.com/drive/" target="_blank"><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Construcción de sistema de riego tecnificado en el paraje de Chiccha
                    </td>
                    <td>2016</td>
                    <td><button type="button" class="descargas btn-danger btn-sm" href="https://www.google.com/drive/" target="_blank"><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Equipamiento y modernizacion de la Municipalidad
                    </td>
                    <td>2016</td>
                    <td><button type="button" class="descargas btn-danger btn-sm" href="https://www.google.com/drive/" target="_blank"><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Implementación de gabinetes de física y química en la I.E. Integrada Nº 20745, localidad y distrito de Vitis – Yauyos – Lima
                    </td>
                    <td>2016</td>
                    <td><button type="button" class="descargas btn-danger btn-sm" href="https://www.google.com/drive/" target="_blank"><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Expediente del Mejoramiento de agua y desagüe
                    </td>
                    <td>2016</td>
                    <td><button type="button" class="descargas btn-danger btn-sm" href="https://www.google.com/drive/" target="_blank"><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>Elaboración de perfiles de proyectos
                    </td>
                    <td>2016</td>
                    <td><button type="button" class="descargas btn-danger btn-sm" href="https://www.google.com/drive/" target="_blank"><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>Aquisición de equipos informáticos
                    </td>
                    <td>2016</td>
                    <td><button type="button" class="descargas btn-danger btn-sm" href="https://www.google.com/drive/" target="_blank"><span class="m-textplus4">PDF</span></button></td>
                </tr>

            </tbody>
        </table>
    </div>
    <div class="table-responsive" id="rot17">
        <table class="table table-striped">
                <tr>
                    <th scope="row">1</th>
                    <td>Construcción de bebederos en Quichca Banda, Manchán - distrito de Vitis, Yauyos, Lima
                    </td>
                    <td>2017</td>
                    <td><button type="button" class="descargas btn-danger btn-sm" href="https://www.google.com/drive/" target="_blank"><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Construcción de canal de riego en el sector Aucacha - distrito de Vitis, Yauyos, Lima

                    </td>
                    <td>2017</td>
                    <td><button type="button" class="descargas btn-danger btn-sm" href="https://www.google.com/drive/" target="_blank"><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Perfil técnico de la "Construcción de muro de contención de la I.E. Apóstol Santiago, distrito de Vitis - Yauyos – Lima
                    </td>
                    <td>2017</td>
                    <td><button type="button" class="descargas btn-danger btn-sm" href="https://www.google.com/drive/" target="_blank"><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Ampliación del sistema de riego de Marcurán
                    </td>
                    <td>2017</td>
                    <td><button type="button" class="descargas btn-danger btn-sm" href="https://www.google.com/drive/" target="_blank"><span class="m-textplus4">PDF</span></button></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Mejoramiento de canales de riego de Pacaya - Pumaparara- Rangramachay- Potaran- Pila y Curapa
                    </td>
                    <td>2017</td>
                    <td><button type="button" class="descargas btn-danger btn-sm" href="https://www.google.com/drive/" target="_blank"><span class="m-textplus4">PDF</span></button></td>
                </tr>
        </table>
    </div>
    <div class="table-responsive" id="rot18">
        <table class="table table-striped">
        </table>
    </div>
    
 

    
    
   
      <!--Table-->

</div>


<br>

   

   
    




<div class=" container text-center align-self-center">
        <p class="lead">
          <a class="text-center align-self-center" href=" " role="button">
            <i class="fa fa-chevron-circle-down fa-3x" aria-hidden="true"></i>
          </a>
        </p>
</div>
        
<br>

@endsection
