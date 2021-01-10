<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="estilos/estilo.css">
	<script type="text/javascript" src="scripts/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../modelo/ap.js"></script>
  <link rel="stylesheet" type="text/css" href="estilos/estilo.css">
</head>
<body>

	<!-- Default form login -->
	<div class="form p-5 w-50 form_user">
    <div id="log_in">
      <form class="text-center border border-light">
        <p class="h4 mb-4">Log In</p>
        <input type="text" id="user" class="form-control mb-4" placeholder="Ingrese su Usuario">
        <input type="password" id="password" class="form-control mb-4" placeholder="Ingrese su contraseña">
       <div class="float-left text text-danger" id="info_form"></div>
         <div id="message_form" class="text text-danger"></div>
       <br>
        <button id="acceder" class="btn btn-info btn-block my-4" >Sign in</button>
        <p>Not a member?
            <a class="register" href="sign.php">Register</a>
        </p>
    </form>
    </div>
  


</div>



	
</body>
</html>
