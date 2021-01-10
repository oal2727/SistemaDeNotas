<?php 
	include("../nav.php");
	$pepe = "123";
 ?>
  <div class="container mx-auto p-5 w-100">
 <div class="d-flex bd-highlight mb-3">
	 <div class="mr-auto p-4 bd-highlight border">	



	 		<h2>Reporte Por Curso</h2>
	 		<form method="post" action="print_reporte.php">
	 		<div class="p-3">
	 			<label>Elegir Curso</label>
	 			<select class="item_reporte_cursos" id="id_cur" name="tipo_curso"></select>
	 		</div>
	 		<br>
	 		
	 		<button class="btn btn-primary m-2" id="imprimir_reporte" name="imprimir">Imprimir Reporte</button>
	 		</form>
	 		<div class="m-2" id="message_reporte">Mensaje Reporte</div>
	 	<div class="d-flex bd-highlight text text-danger m-3">
	  	<div class="p-2 flex-fill bd-highlight">Total alumnos     :</div>
	  	<h5 class="p-2 flex-fill bd-highlight" id="total_alumno"></h5>
	 	 </div>

		<div class="d-flex bd-highlight text text-danger m-3">
	  	<div class="p-2 flex-fill bd-highlight">Alumnos Aprobados  :</div>
	  	<h5 class="p-2 flex-fill bd-highlight" id="aprobado_alumno"></h5>
	  	 </div>

	  	 <div class="d-flex bd-highlight text text-danger m-3">
	  	<div class="p-2 flex-fill bd-highlight">Alumnos Desaprobados:</div>
	  	<h5 class="p-2 flex-fill bd-highlight" id="desaprobado_alumno"></h5>
	  	 </div>
		
	  	<div id="report"></div>
	 </div>


	 <div class="p-4 bd-highlight border">
	 	<h2>Generar Histograma por Curso</h2>
	 	<div class="text text-center box_reportes">
	 		<p>Generar</p>


	 		<a href=""><i id="icon_reporte" class="fas fa-chart-bar imprimir_reporte"></i></a>
	 		<h2 class="p-5">Curso: </h2>
	 		<div id="curso_reporte"></div>
	 		<br>
	 		<div id="seleccione_curso"></div>
	 	</div>
	 </div>
</div>
	
</div>

