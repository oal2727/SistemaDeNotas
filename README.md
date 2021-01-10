# PROYECTO UNI - SISTEMA DE NOTAS 
 Aplicativo Desarollado con Jquery , Ajax , Php , Chartjs


# Objetivo:
# 1. CRUD de Alumnos y correo de bienvenida al registrar
# 2. Colocar las notas a los alumnos
# 3. Histograma de los alumnos que se visualizen sus promedio de cada alumno
# 4. Envio de Notas hacia los alumnos segun su correo indicado

# Script del Proyecto:
 Downlaod File:
 DRIVE : https://drive.google.com/file/d/1bzaXFaqv8PgJYihPpiJ5r7MxTxYJGX_T/view?usp=sharing

# Configuracion del Proyecto:

# 1. Configuracion de las credenciales de la base de datoscore/core.php
# 2. Configuracion del puerto del usuario : Vista/nav.php
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