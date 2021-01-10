<?php 

	class Matricula{
		//FIX MATRICULA POR AGREGAR ATNETO!!
		
		var $persona_id;
		var $curso_id;
		var $n1;
		var $n2;
		var $n3;
		var $n4;
		var $enviado;
		function __construct($persona_id,$curso_id,$n1,$n2,$n3,$n4,$enviado){
	
			$this->persona_id=$persona_id;
			$this->curso_id=$curso_id;
			$this->n1=$n1;
			$this->n2=$n2;
			$this->n3=$n3;
			$this->n4=$n4;
			$this->enviado=$enviado;

		}




	}


 ?>