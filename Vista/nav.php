<head>
  <?php  const SERVERURL="http://localhost:8083/Proyecto_UNI/"; ?>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Form</title>
  <script type="text/javascript" src="<?php echo SERVERURL ?>Vista/scripts/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="<?php echo SERVERURL ?>Modelo/ap.js"></script>

  <link rel="stylesheet" type="text/css" href="<?php echo SERVERURL ?>Vista/estilos/estilo.css">
  <script type="text/javascript" src="<?php echo SERVERURL ?>Modelo/persona.js"></script>
  <script type="text/javascript" src="<?php echo SERVERURL ?>Modelo/matricula.js"></script>
  <script type="text/javascript" src="<?php echo SERVERURL ?>Modelo/reporte.js"></script>
   <script type="text/javascript" src="<?php echo SERVERURL ?>Modelo/sweetalert.js"></script>



  <script src="https://kit.fontawesome.com/649d61341c.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

   


<?php
  
  session_start();
  $contenido=$_SESSION['contenido'];
  if(!isset($_SESSION['usuario'])){
      header("location:login.php");
  }
 ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">UNI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="<?php echo SERVERURL; ?>Vista/personas/index_personas.php">Registros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo SERVERURL; ?>Vista/matricula/index_matricula.php">Matricula</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo SERVERURL; ?>Vista/cursos/index_curso.php">Cursos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo SERVERURL; ?>Vista/reportes/index_reporte.php">Reportes</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo SERVERURL; ?>Vista/reportes/reporte_curso.php">Notas de Curso</a>
      </li>
          <li class="nav-item">
        <a class="nav-link text text-warning"  href="#" id="delete_login">Eliminar Cuenta</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="<?php echo SERVERURL; ?>Vista/login.php" id="logout">Cerrar Session</a>
      </li>
   
    </ul>
    <div class="form-inline my-2 my-lg-0">
      <h2 class="text text-warning col px-md-3"><?php echo $_SESSION['usuario'];  ?></h2>
  </div>
  <style type="text/css">
    nav{
      height: 100px;
    }
    
  </style>
</nav>
