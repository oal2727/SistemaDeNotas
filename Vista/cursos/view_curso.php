<?php 
	
	require_once('../../Modelo/AdministrarModelo.php');
	$st = new AdministradorModelo();
	$sql="SELECT * FROM cursos";
	$re = $st->consultar($sql);

 ?>
<table class="table table-bordered">
		<thead class="table-primary">
			<td>Id:</td>
			<td>Descripcion</td>
			<td>Siglas</td>
			<td></td>
		
		</thead>
	<?php while($row = $re->fetch(PDO::FETCH_ASSOC)){ ?>
		<tbody>
			<td class="table-success"><?php echo $row['id']; ?></td>
			<td class="table-success"><?php echo $row['descripcion']; ?></td>
			<td class="table-success"><?php echo $row['siglas']; ?></td>

			<td class="table-success"><a href=""><i id="<?php echo $row['id']; ?>" class="fas fa-edit edit_curso"></i></a></td>
	
		</tbody>
		<?php } ?>
</table>