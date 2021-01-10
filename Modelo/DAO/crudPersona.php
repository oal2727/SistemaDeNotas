<?php 	
		interface crudPersona{
			function Create(Persona $p);
			function Read($id);
			function Update(Persona $p);
			function Delete($id);
		}

 ?>