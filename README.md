# PROYECTO UNI - SISTEMA DE NOTAS 
 Aplicativo Desarollado con Jquery , Ajax , Php , Chartjs


# Objetivo:
- CRUD de Alumnos y correo de bienvenida al registrar
- Colocar las notas a los alumnos
- Histograma de los alumnos que se visualizen sus promedio de cada alumno
- Envio de Notas hacia los alumnos segun su correo indicado

# Script del Proyecto:
 Downlaod File:
 DRIVE : https://drive.google.com/file/d/1bzaXFaqv8PgJYihPpiJ5r7MxTxYJGX_T/view?usp=sharing

# Configuracion del Proyecto:

- Configuracion de las credenciales de la base de datoscore/core.php
- Configuracion del puerto del usuario : Vista/nav.php
```
  <?php  const SERVERURL="http://localhost:8083/Proyecto_UNI/"; ?>
```

# Configuracion de correo electronico , solo funciona para "gmail.com"
 Modelo/AdministrarReportes.php

 ```
    		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		    $correo=*******@gmail.com;
		   $password=*******

 ```
 IMAGENES DEL PROYECTO:
login:
 ![login](https://user-images.githubusercontent.com/41652885/104130799-cf8bf380-5340-11eb-9a7b-b64d98814df8.JPG)
-register:
 ![register](https://user-images.githubusercontent.com/41652885/104130808-d7e42e80-5340-11eb-83b2-2410bf503489.JPG)
-dashboard:
 ![dashboard](https://user-images.githubusercontent.com/41652885/104130818-df0b3c80-5340-11eb-8d27-8db8c0aa3db6.JPG)
-registro correcto:
 ![registro_correcto](https://user-images.githubusercontent.com/41652885/104130842-fc400b00-5340-11eb-926e-84323f395a54.JPG)
-registro de cursos:
 ![registro_cursos](https://user-images.githubusercontent.com/41652885/104130858-111c9e80-5341-11eb-88fc-831977e2ecf3.JPG)
-registro de notas:
 ![matriculas](https://user-images.githubusercontent.com/41652885/104130869-1ed22400-5341-11eb-844c-3e92577024c7.JPG)
-reportes:
 ![histograma](https://user-images.githubusercontent.com/41652885/104130875-298cb900-5341-11eb-90b6-c4b5472b123e.JPG)
-reporte en pdf:
 ![Pdf](https://user-images.githubusercontent.com/41652885/104130880-30b3c700-5341-11eb-97fe-2891c9f691eb.JPG)
-reporte en histograma:
 ![promedio](https://user-images.githubusercontent.com/41652885/104130889-3d381f80-5341-11eb-8053-f16b7d7ff9c3.JPG)
-envio de notas:
 ![ENVIAR_NOTAS](https://user-images.githubusercontent.com/41652885/104130909-5f31a200-5341-11eb-89dc-6c974fbfe26f.JPG)
-NOTAS RECIBIDAS:
 ![condicion_curso](https://user-images.githubusercontent.com/41652885/104130925-753f6280-5341-11eb-9ce6-a5832cc65a25.JPG)

