<?php 
	session_start();
		$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == "Ingresar"){
		$usuario=$_POST['usuario'];
		$password=$_POST['password'];
		$estado=1;
		$id="";
		if(empty($usuario) || empty($password)){
			echo '*Completar Campos obligatorio';
		}else{
			require_once("../Modelo/AdministrarUsuario.php");
			$ad = new AdministrarUsuario();
			$datos=[
				"usuario"=>$usuario,
				"password"=>$password
			];
			$res=$ad->Acceder($datos);
			while($info=$res->fetch(PDO::FETCH_ASSOC)){
				$id=$info['id'];
				$contenido=$info['foto_img'];
			}

			$row=$res->rowCount();
			
			//$ad->Update_Estado($estado,$id);
			if($row == 1){
				$ad->Update_Estado($estado,$id);
				echo '1';
				$_SESSION['id']=$id;
				$_SESSION['usuario']=$usuario;
				$_SESSION['contenido']=$contenido;
				//header("loation:../Vista/index.php");
			}else{
				echo '*Datos invalidos';
			}
		}
	}
	if($action == "Cerrar"){
		require_once("../Modelo/AdministrarUsuario.php");
		$us = new AdministrarUsuario();
		$id=$_SESSION['id'];
		$estado=0;
		$us->Update_Estado($estado,$id);
		session_destroy();
	}
	if($action == "Delete"){
		require_once("../Modelo/AdministrarUsuario.php");
		$us = new AdministrarUsuario();
		$id=$_SESSION['id'];
		$us->Delete_Usuario($id);
		echo $id;
		session_destroy();
	}




 ?>