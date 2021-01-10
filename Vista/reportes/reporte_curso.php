<?php 
	include("../nav.php");

 ?>
<div class="container p-5">
	<h3>Notas de los Estudiantes</h3>
	<h5 class="m-10 text text-danger">Nota Seleccionar curso para Mostrar</h5>
	<div class="text text-center">
	<h2>Curso: </h2><h4 class="text text-primary" id="curso_tabla"></h4>
	</div>
	<div class="p-3">
	 			<label>Elegir Curso</label>
	 			<select class="item_reporte_cursos" id="id_curso"></select>
	 		</div>
	 <h4 class="text text-danger">Notas Enviadas por correo</h4><h5 id="total_enviado"></h5>
	 <div id="report_list"></div>
</div>
 