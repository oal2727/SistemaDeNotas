<?php 

	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	switch($action){
		case "Agregar":
			Agregar();
			break;
		case "Read":
			Read_Matricula();
			break;
		case "Update":
			Update_Notas();
			break;
		default:
			echo 'error de seleccion';
			break;
	}
	function Agregar(){
		require_once("../Modelo/AdministrarMatricula.php");
		require_once("../Modelo/DAO/Matricula.php");
		$documento=$_POST['n_doc'];
		$curso=$_POST['curso_id'];
		if(empty($documento)){
			echo '*Datos obligatorios';
		}else{
		$ms = new AdministrarMatricula();
		$re=$ms->Consulta_Id($documento);
		$op=$re->rowCount();
		if($op > 0){
			$id_persona="";
			$n1=0;
			$n2=0;
			$n3=0;
			$n4=0;
			$enviado=0;
			while($row = $re->fetch(PDO::FETCH_ASSOC)){
				$id_persona=$row['id'];
			}
			$ma=new Matricula($id_persona,$curso,$n1,$n2,$n3,$n4,$enviado);
			$output=$ms->Create($ma);
			echo "1";
		}else{
			echo "*Documento ingresado no existe";
		}
		}
	}



	function Read_Matricula(){
		require_once("../Modelo/AdministrarMatricula.php");
		$ma = new AdministrarMatricula();
		$id=$_POST['id'];
		$row = $ma->Read_Matricula($id);
		echo json_encode($row);

	}


	function Update_Notas(){
		$id=$_POST['id'];
		$n1=$_POST['nota1'];
		$n2=$_POST['nota2'];
		$n3=$_POST['nota3'];
		$n4=$_POST['nota4'];
		if($n1 == "0.00" || $n2 == "0.00" || $n3 == "0.00" || $n4=="0.00"){
			echo 'Ingrese la notas para actualizar';
		}else{
		if(0 <= $n1 && $n1 <= 20 && 0 <= $n2 && $n2 <= 20 && 0 <= $n3 && $n3 <= 20 && 0 <= $n4 && $n4 <= 20){
			require_once("../Modelo/AdministrarMatricula.php");
			$ad = new AdministrarMatricula();
			$out=$ad->Update_Notas($n1,$n2,$n3,$n4,$id);
			echo !$out ? "error al agregar" : '1';
		}else{
			echo 'Las notas deben estar entre 0 a 20';
		}
		}
	}
	


 ?>