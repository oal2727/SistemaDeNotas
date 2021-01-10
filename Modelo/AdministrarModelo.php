<?php 

	//require_once("../../Core/core.php");
		
	//require_once("../core/core.php");
	class AdministradorModelo{



		protected function getConexion(){
		
			$dsn="mysql:host=localhost;dbname=php2_2020;port=3306";
			$con = new PDO($dsn,'root','root');
			$con->query("set names utf8");
			return $con;
		}
	
        public function consultar($sql){
          $respuesta=$this->getConexion()->prepare($sql);
           $respuesta->execute();
           return $respuesta;
        }

        


	}






 ?>