<?php 
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	switch($action){
		case "Documentos":
			Documentos();
			break;
		case "Siglas":
			Siglas();
			break;
		case "Agregar":
			Agregar();
			break;
		case "Read":
			Read();
			break;
		case "Update":
			Update();
			break;
		case "Delete":
			Delete();
			break;
		default:
			echo 'error de seleccion';
			break;

	}


	function Documentos(){
		require_once("../Modelo/AdministrarModelo.php");
		$re = new AdministradorModelo();
		$row=$re->consultar("SELECT id,descripcion FROM documentos");
		$lista="<option>Seleccione documento</option>";
		while($fila = $row->fetch(PDO::FETCH_ASSOC)){
			$lista .="<option value='$fila[id]'>$fila[descripcion]</option>";
		}
		echo $lista;
	}
	function Siglas(){
		require_once("../Modelo/AdministrarModelo.php");
		$re = new AdministradorModelo();
		$id=$_POST['id'];
		$sql="SELECT sg FROM documentos where id='$id'";
		$sig="";
		$row=$re->consultar($sql);
		while($fila=$row->fetch(PDO::FETCH_ASSOC)){
			$sig=$fila['sg'];
		}
		echo $sig;
	}
	function Agregar(){
		require_once("../Modelo/AdministrarPersona.php");
		require_once("../Modelo/DAO/Persona.php");
		$re = new AdministrarPersona();
		$id="";
		$paterno = $_POST['paterno'];
		$materno = $_POST['materno'];
		$nombre= $_POST['nombre'];
		$documento=$_POST['documento'];
		$num_doc=$_POST['num_doc'];
		$genero=$_POST['genero'];
		$correo = $_POST['correo'];
		if(empty($paterno) || empty($materno) || empty($nombre) || empty($documento) || empty($num_doc) || empty($genero) || empty($correo)){
			echo '*Obligatorio completar todos los campos';
		}else{
			$p = new Persona($id,$paterno,$materno,$nombre,$documento,$num_doc,$genero,$correo);
			$out=$re->Create($p);
			if(!$out){
				echo 'error al registrar';
			}else{
				$explode=explode("@",$correo);
				if($explode[1] == "gmail.com"){
					$hh = $re->Enviar($nombre,$paterno,$materno);
				}else{
					echo 'ingresar correo gmail';
				}
				
				

			}

		}
	}
	function Read(){
		require_once("../Modelo/AdministrarPersona.php");
		$ad = new AdministrarPersona();
		$id = $_POST['id'];
		$row=$ad->Read($id);
		echo json_encode($row);
	}
	function Delete(){
		require_once("../Modelo/AdministrarPersona.php");
		$re = new AdministrarPersona();
		$id = $_POST['id'];
		$re->Delete($id);
		echo !$re ? "error al borrar" : "nice";

	}
	function Update(){
		require_once("../Modelo/AdministrarPersona.php");
		require_once("../Modelo/DAO/Persona.php");
		$re = new AdministrarPersona();
		$id = $_POST['id'];
		$paterno = $_POST['paterno'];
		$materno = $_POST['materno'];
		$nombre= $_POST['nombre'];
		$documento=$_POST['documento'];
		$num_doc=$_POST['num_doc'];
		$genero=$_POST['genero'];
		$correo = $_POST['correo'];
		if(empty($paterno) || empty($materno) || empty($nombre) || empty($documento) || empty($num_doc) || empty($genero) || empty($correo)){
			echo '*Obligatorio completar todos los campos';
		}else{
				$p = new Persona($id,$paterno,$materno,$nombre,$documento,$num_doc,$genero,$correo);
				$out=$re->Update($p);
				echo !$out ? "error al actualizar" : "1";
		}		

	}




 ?>