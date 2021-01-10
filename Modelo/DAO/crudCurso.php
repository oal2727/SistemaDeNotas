<?php 

	interface CrudCurso{
		function Create(Curso $c);
		function Read($id);
		function Update(Curso $c);
		function Delete($id);
	}




 ?>