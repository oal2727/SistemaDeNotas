<?php 
	include("../nav.php");

 ?>
 <div class="container">

 	<div class="m-5">
 	<button type="button" class="btn btn-primary" id="addPerson" data-toggle="modal" data-target="#addPersona">
    Agregar Persona
  </button>
  </div>

 	<div id="list_personas"></div>

 </div>


 
 <?php include("add_personas.php"); ?>
 <?php include("edit_persona.php"); ?>
