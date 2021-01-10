<?php 

	require_once("../Modelo/AdministrarModelo.php");
		use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/Exception.php';
	require 'PHPMailer/PHPMailer.php';
	require 'PHPMailer/SMTP.php';
	class AdministrarReportes extends AdministradorModelo{

		function View_reportes($sql,$id_curso){	
			$data=$this->getConexion()->prepare($sql);
			$data->bindParam(1,$id_curso);
			$data->execute();
			$fila = $data->fetch(PDO::FETCH_ASSOC);
			return $fila;

		}
		function Print_Reporte($id_curso){
		$sql="SELECT persona,n1,n2,n3,n4,promedio FROM vmatriculados WHERE idc=?";	
		$data=$this->getConexion()->prepare($sql);
		$data->bindParam(1,$id_curso);
		$data->execute();
		return $data;

	}
		function View_Notas($id){	
			$sql="SELECT * FROM vmatriculados where idm=?";
			$data=$this->getConexion()->prepare($sql);
			$data->bindParam(1,$id);
			$data->execute();
			return $data;

		}

	 function Enviar($id){
			// Instantiation and passing `true` enables exceptions
		    $out=$this->View_Notas($id);
		        while($row = $out->fetch(PDO::FETCH_ASSOC)){
		        	$nombre=$row['persona'];
		        	$curso=$row['curso'];
		        	$nota1=$row['n1'];
		        	$nota2=$row['n2'];
		        	$nota3=$row['n3'];
		        	$nota4=$row['n4'];
		        	$promedio=$row['promedio'];
		        	$condicion=$row['condicion'];
		        }
		      $sql="UPDATE matricula set enviado=1 where id=?";
		      $this->View_reportes($sql,$id);


		    $mail = new PHPMailer(true);
		        //Server settings
		        $mail->SMTPDebug = 0;                      // Enable verbose debug output
		        $mail->isSMTP();                                            // Send using SMTP
		        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
		        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		        //$correo='correo de la persona que enviara';
		        //$password='password de la persona'
		        $mail->Username   = '';                     // SMTP username
		        $mail->Password   = '';                               // SMTP password
		        $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
		        //Recipients
		        //quien lo envia
		        $mail->setFrom('', 'Uni');
		        //a quien se le envia
		        $mail->addAddress('joseluis15523@gmail.com',$nombre);     // Add a recipient
		        // Attachments
		       //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		        // Content
		    
		        $mail->isHTML(true);                                  // Set email format to HTML
		        $mail->Subject = 'Sistema web';
		        $mail->Body    = '<html>
		                <body>
		                <h4 class="text text-danger">Alumno : ' .$nombre .'</h4>
		                 <h2>Notas del Curso de : ' .$curso .' </h2>
		                <table border="2">
		                <thead>
		                <td>Nota 1</td>
		                <td>Nota 2</td>
		                <td>Nota 3</td>
		                 <td>Nota 4</td>
		                 <td>Promedio</td>
		                </thead>

		                <tbody>
		                <td>'.$nota1.'</td>
		                <td>'.$nota2.'</td>
		                <td>'.$nota3.'</td>
		                <td>'.$nota4.'</td>
		                <td>'.$promedio.'</td>
		                </tbody>
		                </table>
		                <h3>Promedio Final: '. $promedio.'</h3>
		                <h3>Condicion de Curso: '. $condicion.'</h3>
		                 </body>
		                 </html>';
		        $mail->send();
		      
		    }


	}


 ?>

