<?php 

	class Persona{
		var $id;
		var $paterno;
		var $materno;
		var $nombre;
		var $docu_id;
		var $doc_num;
		var $genero;
		var $correo;
		function __construct($id,$paterno,$materno,$nombre,$docu_id,$doc_num,$genero,$correo){
			$this->id=$id;
			$this->paterno=$paterno;
			$this->materno=$materno;
			$this->nombre=$nombre;
			$this->docu_id=$docu_id;
			$this->doc_num=$doc_num;
			$this->genero=$genero;
			$this->correo=$correo;
		}
	}


 ?>