<?php 

	$name_imagen = $_FILES['file']['name'];
	$size_imagen = $_FILES['file']['size'];
	$type_imagen = $_FILES['file']['type'];
	$user = $_POST['usuario'];
	$pass = $_POST['password'];
	$estado=0;
	$types=array("image/jpeg","image/png");
	 $imagen=addslashes(file_get_contents($_FILES['file']['tmp_name']));
	 if(empty($type_imagen || empty($user) || empty($pass))){
	 	echo 'Completar campos obligatorio';
	 }else{
	 	if(in_array($type_imagen,$types)){
		if($size_imagen < 666560){
			require_once("../Modelo/AdministrarUsuario.php");
			require_once("../Modelo/DAO/Usuario.php");
			$re = new AdministrarUsuario();
			$u = new Usuario($user,$pass,$imagen,$type_imagen,$estado);
			$out= $re->Crear_Usuario($u);
			if(!$out){
				echo 'error al guardar';
			}else{
				echo '1';
			}
		}else{
			echo 'El archivo pesa mucho';
		}
	}else{
		echo "Solo se permite tipo de imagen jpeg o png";
	}

	 }
	

 ?>