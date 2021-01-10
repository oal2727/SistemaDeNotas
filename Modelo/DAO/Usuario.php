<?php 
	
	class Usuario{

		var $usuario;
		var $clave;
		var $foto_img;
		var $foto_nom;
		var $estado;
		function __construct($usuario,$clave,$foto_img,$foto_nom,$estado){
			$this->usuario=$usuario;
			$this->clave=$clave;
			$this->foto_img=$foto_img;
			$this->foto_nom=$foto_nom;
			$this->estado=$estado;
		}

	}



 ?>