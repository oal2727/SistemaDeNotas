<?php 
		
	require_once('../../Modelo/AdministrarModelo.php');
	//require_once("../../Modelo/DAO/Matricula.php");
	//$ma = new Matricula();
	$id = $_POST['id_curso'];
	$sql="SELECT * FROM vmatriculados where idc='$id' && enviado=0";
	$st = new AdministradorModelo();
	$re = $st->consultar($sql);


 ?>

<table class="table table-bordered text text-center">
		<thead>
			<td>Idm</td>
			<td>Nombre de la persona</td>
			<td>n1</td>
			<td>n2</td>
			<td>n3</td>
			<td>n4</td>
			<td>promedio</td>
			<td></td>
		</thead>
		<?php while($row=$re->fetch(PDO::FETCH_ASSOC)){ ?>
			<tbody>
			<td><?php echo $row['idm']; ?></td>
			<td><?php echo $row['persona']; ?></td>
			<td><?php echo $row['n1']; ?></td>
			<td><?php echo $row['n2']; ?></td>
			<td><?php echo $row['n3']; ?></td>
			<td><?php echo $row['n4']; ?></td>
			<td><?php echo $row['promedio']; ?></td>
			<td><a href="#" class="send_nota" id="<?php echo $row['idm'] ?>">Enviar Notas</a></td>

		</tbody>
	<?php } ?>
</table>