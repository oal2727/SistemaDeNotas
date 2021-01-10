<?php 
	include("../nav.php");

 ?>

 <div class="container">
 	<br>
	 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCursoModal">
    Agregar
  </button>
	<br>
	<br>
	<h2 class="text text-center">Registros de Cursos</h2>
	<div id="list"></div>
 </div>

<?php include("add_curso.php"); ?> 
<?php include("edit_curso.php"); ?>
