<?php 
	include("../nav.php");


 ?>
<div class="container">

	<div class="float-left m-3">

	 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMatricula">
    Agregar Matricula
  	</button>
	</div>

	<br>
	<br>
	<br>
	<h2 class="text text-center">Registros que faltan Notas</h2>
	<br>
	<div id="list_matricula"></div>
</div>
<?php include("add_matriculado.php"); ?>
<?php include("add_nota.php"); ?>