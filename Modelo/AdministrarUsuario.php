<?php 
	require_once"AdministrarModelo.php";
	class AdministrarUsuario extends AdministradorModelo{

		function Acceder($datos){
			$sql="SELECT * FROM usuarios where usuario=? and clave=?";
			$data=$this->getConexion()->prepare($sql);
			$data->bindParam(1,$datos['usuario']);
			$data->bindParam(2,$datos['password']);
			$data->execute();
			//$this->disconect();
			return $data;
		}
		//funcion de consulta simple
		function Update_Estado($estado,$id){
			$sql="UPDATE usuarios set estado=? where id=?";
			$data=$this->getConexion()->prepare($sql);
			$data->bindParam(1,$estado);
			$data->bindParam(2,$id); 
			$data->execute();
			return $data;
		}
		function Crear_Usuario(Usuario $u){
			$sql="INSERT INTO usuarios(usuario,clave,foto_img,foto_nom,estado) VALUES(?,?,?,?,?)";
			$data=$this->getConexion()->prepare($sql);
			$data->bindParam(1,$u->usuario);
			$data->bindParam(2,$u->clave);
			$data->bindParam(3,$u->foto_img);
			$data->bindParam(4,$u->foto_nom);
			$data->bindParam(5,$u->estado);
			$data->execute();
			return $data;

		}
		function Delete_Usuario($id){
			$sql="DELETE FROM usuarios WHERE id=:id";
			$data=$this->getConexion()->prepare($sql);
			$data->bindParam(":id",$id);
			$data->execute();
			return $data;
		}


	}







 ?>