<?php 
	require_once("AdministrarModelo.php");
	class AdministrarMatricula extends AdministradorModelo{

		function Create(Matricula $m){
			$sql = "INSERT INTO matricula(persona_id,curso_id,n1,n2,n3,n4,enviado) VALUES(?,?,?,?,?,?,?)";
			$data=$this->getConexion()->prepare($sql);
			$data->bindParam(1,$m->persona_id);
			$data->bindParam(2,$m->curso_id);
			$data->bindParam(3,$m->n1);
			$data->bindParam(4,$m->n2);
			$data->bindParam(5,$m->n3);
			$data->bindParam(6,$m->n4);
			$data->bindParam(7,$m->enviado);
			$data->execute();
			return $m;
		}
		function Consulta_Id($documento){
			$sql="SELECT id FROM personas where docu_numero=?";
			$data=$this->getConexion()->prepare($sql);
			$data->bindParam(1,$documento);
			$data->execute();
			return $data;
		}

		function Update_Notas($n1,$n2,$n3,$n4,$id){
			$sql="UPDATE matricula set n1=?,n2=?,n3=?,n4=? WHERE id=?";
			$data = $this->getConexion()->prepare($sql);
			$data->bindParam(1,$n1);
			$data->bindParam(2,$n2);
			$data->bindParam(3,$n3);
			$data->bindParam(4,$n4);
			$data->bindParam(5,$id);
			$data->execute();
			return $data;
		}
		 function Read_Matricula($id){
			$sql="SELECT * FROM matricula where id=:id";
			$data = $this->getConexion()->prepare($sql);
			$data->bindParam(":id",$id);
			$data->execute();
			$result = $data->fetch(PDO::FETCH_ASSOC);
			return $result;	
		}

	}



 ?>