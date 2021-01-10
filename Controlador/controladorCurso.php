<?php 

			$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
			switch ($action) {
				case "Create":
					Create();
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
				case "Mostrar":
					Mostrar();
					break;
				default:
					echo 'error de seleccion';
					break;
			}

			function Create(){
				require_once("../Modelo/AdministrarCurso.php");
				require_once("../Modelo/DAO/Cursos.php");
				$descripcion = $_POST['descripcion'];
				$siglas = $_POST['siglas'];
				$id="";
				$estado=0;
				if(empty($descripcion) || empty($siglas)){
					echo '*Completar Campos obligatorios';
				}else{
								$curso = new Curso($id,$descripcion,$siglas,$estado);
				$re = new AdministrarCurso();
				$bolsa = $re->Create($curso);
				echo !$bolsa ? "Problema al registrar" : "1";
				}
			}
			function Read(){
				require_once("../modelo/AdministrarCurso.php");
				$ad = new AdministrarCurso();
				//if(isset($_POST['id'])){
				$id=$_POST['id'];
				//echo $id;
				$row = $ad->Read($id);
				echo json_encode($row);
				//}
			}
			function Update(){
				require_once("../Modelo/AdministrarCurso.php");
				require_once("../Modelo/DAO/Cursos.php");
				$id=$_POST['id'];
				$descripcion = $_POST['descripcion'];
				$siglas = $_POST['siglas'];
				$estado = $_POST['estado'];

				if(empty($descripcion) || empty($siglas)){
					echo '*Completar Campos obligatorios';
				}else{
					$curso = new Curso($id,$descripcion,$siglas,$estado);
					$re = new AdministrarCurso();
					$bolsa = $re->Update($curso);
					echo !$bolsa ? "Problema al actualizar" : "1";

				}

			}
			function Delete(){
				require_once("../Modelo/AdministrarCurso.php");
				$re = new AdministrarCurso();
				$id = $_POST['id'];	
				 $re->Delete($id);

			}
			function Mostrar(){
			require_once("../Modelo/AdministrarModelo.php");
			$re = new AdministradorModelo();
			$row=$re->consultar("SELECT id,descripcion FROM cursos");
			$lista="<option>Seleccione curso</option>";
			while($fila = $row->fetch(PDO::FETCH_ASSOC)){
			$lista .="<option value='$fila[id]'>$fila[descripcion]</option>";
			}
			echo $lista;
			}


 ?>