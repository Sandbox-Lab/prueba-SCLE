<?php
	$sql = "SELECT * FROM docente";
	$result = $mysqli->query($sql);
?>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Lista de Docentes</div>
			<div class="panel-body">
			<br>
			<div class="fixed-table-toolbar">
				<div class="pull-right search">
					<form action="">
						<input class="form-control" type="text" placeholder="Buscar...">
					</form>
				</div>
				<a href="registro-docente.php" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Agregar Registro</a> 
			</div>
			<br><br>
				<table data-toggle="table" class="table table-hover" border="1">
					<thead>
						<tr>
							<th>No. Empleado</th>
							<th>Nombre(s)</th>
							<th>Apellido(s)</th>
							<th>Dirección</th>
							<th><center>Acciones</center></th>
						</tr>
					</thead>
					<tbody>
						<?php while($row = $result->fetch_array()){?> 
						<tr>
							<td><?php echo $row['NumeroPersonal']; ?></td>
							<td><?php echo $row['Nombre']; ?></td>
							<td><?php echo $row['Apellidos']; ?></td>
							<td><?php echo $row['Direccion']; ?></td>
							<td>
								<center>
									<div class="btn-group" role="group" aria-label="true">
										<a href="#" class="btn btn-primary" title="Mostrar Perfil">
											<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
										</a>
										<a href="#" class="btn btn-warning" title="Editar">
											<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
										</a>
										<a href="docentes.php?id=<?php echo $row['NumeroPersonal']; ?>" class="btn btn-danger" title="Eliminar">
											<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
										</a>
									</div>
								</center>
							</td>
						</tr>
						<?php } ?>
						<?php $mysqli->close(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div><!--/.row-->
