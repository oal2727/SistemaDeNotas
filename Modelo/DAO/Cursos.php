<?php 

	class Curso{

		public $id;
		public $descripcion;
		public $siglas;
		public $estado;
		function __construct($id,$descripcion,$siglas,$estado){
			$this->id=$id;
			$this->descripcion=$descripcion;
			$this->siglas=$siglas;
			$this->estado=$estado;
		}



	}



 ?>