  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Form</title>
  <link rel="stylesheet" type="text/css" href="estilos/estilo.css">
    <script type="text/javascript" src="scripts/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../modelo/ap.js"></script>

  <link rel="stylesheet" type="text/css" href="estilos/estilo.css">
</head>

  <form class="w-50 form_user" method="post" id="registrar">
    <p class="h4 mb-4 text text-center">Registrate</p>
      <input type="text" id="user_sign" name="usuario" class="form-control mb-4" placeholder="Ingrese su usuario" >
      <input type="password" id="password_sign" name="password" class="form-control" placeholder="Ingrese su contraseña" aria-describedby="defaultRegisterFormPasswordHelpBlock" >
      <br>
      <input type="file" name="image" id="image" class="form-control">
      <div class="text-danger" id="message-user"></div>
      <br>
      <button class="btn btn-info my-4 btn-block" id="sign_buton"  type="submit">Registrar</button>
      
      <div style="text-align: center;">
        <div id="message_sign"></div>
        <br>
      <a href="login.php" class="log">Log In</a>
      </div>
  </form>