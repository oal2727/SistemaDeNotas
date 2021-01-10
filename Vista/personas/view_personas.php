<?php 
	require_once('../../Modelo/AdministrarModelo.php');
	$st = new AdministradorModelo();
	$sql="SELECT * FROM vpersonas order by idp";
	$re = $st->consultar($sql);


 ?>
<table class="table table-bordered">
		<thead>
			<td>Id</td>
			<td>Nombre de la persona</td>
			<td>Tipo Documento</td>
			<td>N° Documento</td>
			<td>Genero</td>
			<td></td>
			<td></td>
		</thead>
		<?php while($row = $re->fetch(PDO::FETCH_ASSOC)){ 
			?>
			<tbody>
			<td><?php echo $row['idp']; ?></td>
			<td><?php echo $row['persona'] ?></td>
			<td><?php echo $row['docu_sg']; ?></td>
			<td><?php echo $row['docu_numero']; ?></td>
			<td><?php echo $row['gen_sg']; ?></td>
			<td><a href="#"><i class="fas fa-edit edit_persona" id="<?php echo $row['idp']; ?>"></i></a></td>
			<td><a href="#"><i data-toggle="modal" data-target="#delete" id="<?php echo $row['idp']; ?>" class="fas fa-trash-alt delete_persona"></i></a></td>
		</tbody>
		<?php } ?>
</table>