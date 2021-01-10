<?php 
	require_once("DAO/crudPersona.php");
	require_once("AdministrarModelo.php");
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/Exception.php';
	require 'PHPMailer/PHPMailer.php';
	require 'PHPMailer/SMTP.php';

	class AdministrarPersona extends AdministradorModelo implements crudPersona{

		public function Create(Persona $p){
			$sql="INSERT INTO personas(paterno,materno,nombre,docu_id,docu_numero,genero,correo) VALUES(?,?,?,?,?,?,?)";
			$sql1=$this->getConexion()->prepare($sql);
			$sql1->bindParam(1,$p->paterno);
			$sql1->bindParam(2,$p->materno);
			$sql1->bindParam(3,$p->nombre);
			$sql1->bindParam(4,$p->docu_id);
			$sql1->bindParam(5,$p->doc_num);
			$sql1->bindParam(6,$p->genero);
			$sql1->bindParam(7,$p->correo);
			$sql1->execute();
			return $p;
		}
			public function Read($id){
			$sql="SELECT * FROM personas where id=:id";
			$data = $this->getConexion()->prepare($sql);
			$data->bindParam(":id",$id);
			$data->execute();
			$result = $data->fetch(PDO::FETCH_ASSOC);
			return $result;	
		}
		public function Update(Persona $p){
			$sql="UPDATE personas set paterno=:paterno,materno=:materno,nombre=:nombre,docu_id=:docu_id,docu_numero=:doc_num,genero=:genero,correo=:correo WHERE id=:id";
			$sql1 = $this->getConexion()->prepare($sql);
		$sql1->bindParam(":paterno",$p->paterno,PDO::PARAM_STR);
			$sql1->bindParam(":materno",$p->materno,PDO::PARAM_STR);
		$sql1->bindParam(":nombre",$p->nombre,PDO::PARAM_STR);
		$sql1->bindParam(":docu_id",$p->docu_id,PDO::PARAM_INT);
			$sql1->bindParam(":doc_num",$p->doc_num,PDO::PARAM_INT);
			$sql1->bindParam(":genero",$p->genero,PDO::PARAM_INT);
			$sql1->bindParam(":correo",$p->correo,PDO::PARAM_STR);
			$sql1->bindParam(":id",$p->id,PDO::PARAM_INT);
			$sql1->execute();
			return $p;
		}
		public function Delete($id){
			$sql = "DELETE FROM personas where id=:id";
			$data = $this->getConexion()->prepare($sql);
			$data->bindParam(":id",$id);
			$data->execute();
			return $data;
		}
		function Enviar($nombre,$paterno,$materno){
			// Instantiation and passing `true` enables exceptions


		    $mail = new PHPMailer(true);
		        //Server settings
		        $mail->SMTPDebug = 0;                      // Enable verbose debug output
		        $mail->isSMTP();                                            // Send using SMTP
		        //solo envia a correos gmail
		        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
		        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		        //$correo='correo de la persona que enviara';
		        //$password='password de la persona';
		       //$mail->Username   = $correo;                     // SMTP username
		        //$mail->Password   = $password;                               // SMTP password
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
		                <h2>Ha sido Registrado correctamente!</h2>
		                <h3>Bienvenido: '.$nombre .' '. $paterno.' '.$materno.'</h3>
		                 </body>
		                 </html>';
		        if($mail->send()){
		        	echo '1';
		        }else{
		        	echo 'Problema al enviar';
		        }
		      
		    }
		}





 ?>