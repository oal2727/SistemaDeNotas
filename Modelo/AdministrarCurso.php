<?php 
	require_once("AdministrarModelo.php");
	require_once("DAO/crudCurso.php");
	require_once("DAO/Cursos.php");
	class AdministrarCurso extends AdministradorModelo implements CrudCurso{

	public function Create(Curso $c){	
			$sql="INSERT INTO cursos(descripcion,siglas,estado) VALUES(:descripcion,:siglas,:estado)";
			$sql1=$this->getConexion()->prepare($sql);
			$sql1->bindParam(":descripcion",$c->descripcion,PDO::PARAM_STR);
			$sql1->bindParam(":siglas",$c->siglas,PDO::PARAM_STR);
			$sql1->bindParam(":estado",$c->estado,PDO::PARAM_INT);
			$sql1->execute();
			return $c;

		}
		public function Read($id){
			$sql="SELECT * FROM cursos where id=:id";
			$data = $this->getConexion()->prepare($sql);
			$data->bindParam(":id",$id);
			$data->execute();
			$result = $data->fetch(PDO::FETCH_ASSOC);
			return $result;	
		}
		public function Update(Curso $c){
			$sql="UPDATE cursos set descripcion=:descripcion,siglas=:siglas,estado=:estado WHERE id=:id";
			$sql1 = $this->getConexion()->prepare($sql);
			//$sql1->bindValue(":codigo",$c->codigo);
		$sql1->bindParam(":descripcion",$c->descripcion,PDO::PARAM_STR);
			$sql1->bindParam(":siglas",$c->siglas,PDO::PARAM_STR);
			$sql1->bindParam(":estado",$c->estado,PDO::PARAM_INT);
			$sql1->bindParam(":id",$c->id,PDO::PARAM_INT);
			$sql1->execute();
			return $c;
		}
		public function Delete($id){
			$sql = "DELETE FROM cursos where id=:id";
			$data = $this->getConexion()->prepare($sql);
			$data->bindParam(":id",$id);
			$data->execute();
			return $data;
		}
	

	}
 ?>