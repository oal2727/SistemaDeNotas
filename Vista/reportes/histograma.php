<?php 
	require_once("../../Modelo/AdministrarModelo.php");
	if(isset($_GET['id'])){
			$re = new AdministradorModelo();
	$id=$_GET['id'];
	$sql1 = "SELECT persona FROM vmatriculados where idc='$id'";
	$sql2= "SELECT promedio from vmatriculados where idc='$id'";
	$hh1=$re->consultar($sql1);
	$hh2=$re->consultar($sql2);
	}else{
		header("location:index_reporte.php");
	}
	

 ?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <script src="https://kit.fontawesome.com/649d61341c.js" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
		<div class="m-2">
			<a href="../reportes/index_reporte.php"><i class="fas fa-chevron-left"></i> Retroceder</a>
		</div>
		<canvas id="popChart" width="400" height="200"></canvas>
			<script type="text/javascript">
		let popCanvas = document.getElementById('popChart').getContext('2d');
		//global opciones
		Chart.defaults.global.defaultFontFamily = "Lato";
		Chart.defaults.global.defaultFontSize = 18;
		Chart.defaults.global.defaultFontColor = 'blue';
		//->>>>>>>>>
		var barChart = new Chart(popCanvas, {
  type: 'bar',
  data: {
    	labels: [
    	<?php
    		while($row1 = $hh1->fetch(PDO::FETCH_ASSOC)){
			?>
				'<?php echo $row1['persona']; ?>',
			<?php
			}
			?>
		],
    		datasets: [{
     	 label: 'Population',
     	 data: [
    	<?php
    		while($row2 = $hh2->fetch(PDO::FETCH_ASSOC)){
			?>
				'<?php echo $row2['promedio']; ?>',
			<?php
			}
			?>
		],
	      backgroundColor: [
	        'rgba(255, 99, 132, 0.6)',
	        'rgba(54, 162, 235, 0.6)',
	        'rgba(255, 206, 86, 0.6)',
	        'rgba(75, 192, 192, 0.6)',
	        'rgba(153, 102, 255, 0.6)',
	        'rgba(255, 159, 64, 0.6)',
	        'rgba(255, 99, 132, 0.6)',
	        'rgba(54, 162, 235, 0.6)',
	        'rgba(255, 206, 86, 0.6)',
	        'rgba(75, 192, 192, 0.6)',
	        'rgba(153, 102, 255, 0.6)'
	      ]
	    }]
  },
  options:{
  		title:{
  			display:true,
  			text:'Promedio de Alumnos',
  			fontSize:25
  		},//fin de editar titulo
  	}//fin de opciones
 


});
	</script>
</body>
</html>