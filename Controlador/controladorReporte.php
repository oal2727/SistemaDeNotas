<?php 

$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	switch($action){
		case "Info":
			InfoData();
			break;
		case "Send_Nota":
			Send_Nota();
			break;
		case "Aprobado":
			Aprobados();
			break;
		case "Desaprobado":
			Desaprobados();
			break;
		case "Info_Curso":
			Curso();
			break;
		case "Info_enviado":
			Enviados();
			break;
		case "Histograma":
			Mostrar_Histograma();
			break;
		default:
			echo 'error de seleccion';
			break;


	}
		function InfoData(){
		require_once("../Modelo/AdministrarReportes.php");
		$po = new AdministrarReportes();
		$id_curso=$_POST['id_curso'];
		$sql="SELECT count(idc) as total,curso FROM vmatriculados WHERE idc=?";
		$row=$po->View_reportes($sql,$id_curso);
		$tempo = json_encode($row);
		echo $tempo;
	}
	function Send_Nota(){
		require_once("../Modelo/AdministrarReportes.php");
		$po = new AdministrarReportes();
		$id=$_POST['id'];
		$re=$po->Enviar($id);
		echo '1';
	}
	function Aprobados(){
		require_once("../Modelo/AdministrarReportes.php");
		$po = new AdministrarReportes();
		$id_curso=$_POST['id_curso'];
		$sql="SELECT count(idc) as aprobado FROM vmatriculados where idc=? and condicion='APROBADO'";
		$row2=$po->View_reportes($sql,$id_curso);
		$tempo2=json_encode($row2);
		echo $tempo2;
	}
	function Desaprobados(){
		require_once("../Modelo/AdministrarReportes.php");
		$po = new AdministrarReportes();
		$id_curso=$_POST['id_curso'];
		$sql="SELECT count(idc) as desaprobado FROM vmatriculados where idc=? and condicion='DESAPROBADO'";
		$row3=$po->View_reportes($sql,$id_curso);
		$tempo3=json_encode($row3);
		echo $tempo3;
	}
	function Curso(){
		require_once("../Modelo/AdministrarReportes.php");
		$po = new AdministrarReportes();
		$id_curso=$_POST['id_curso'];
		$sql="SELECT curso FROM vmatriculados WHERE idc=?";
		$row4=$po->View_reportes($sql,$id_curso);
		$tempo4= json_encode($row4);
		echo $tempo4;
	}
	function Enviados(){
		require_once("../Modelo/AdministrarReportes.php");
		$po = new AdministrarReportes();
		$id_curso=$_POST['id_curso'];
		$sql="SELECT count(idc) as total_enviado FROM vmatriculados WHERE idc=? and enviado='1'";
		$row5=$po->View_reportes($sql,$id_curso);
		$tempo5= json_encode($row5);
		echo $tempo5;
	}
	function Mostrar_Histograma(){
		$id=$_POST['id_curso'];
		if($id == "Seleccione curso"){
			echo 'seleccionar un boton';
		}else{
			echo '1';
		}
	}


	
 ?>