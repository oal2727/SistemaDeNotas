<?php 
	require_once('../../Modelo/AdministrarModelo.php');
	$st = new AdministradorModelo();
	$sql="SELECT * FROM cursos";
	$re = $st->consultar("SELECT * FROM vmatriculados where promedio<0.5");


 ?>
<table class="table table-border">
		<thead>
			<td>Id:</td>
			<td>Nombre de la persona</td>
			<td>Curso</td>
			<td></td>
		</thead>
		<?php while($row = $re->fetch(PDO::FETCH_ASSOC)){ 
			?>
			<tbody>
			<td><?php echo $row['idm']; ?></td>
			<td><?php echo $row['persona'] ?></td>
			<td><?php echo $row['curso']; ?></td>
			<td><a href="#" class="add_nota" id="<?php echo $row['idm'];  ?>">Ingresar Nota</a></td>
		</tbody>
		<?php } ?>
</table>