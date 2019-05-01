<div class="panel panel-default">
	<div class="panel-heading">Regisrto de Doscente</div>
	<div class="panel-body">
	<form role="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
		<div class="row">
			<div class="col-lg-12">
			
			<?php (!empty($msg) && isset($msg)) ? require 'alert-success.php': null; ?>
			
				<div class="col-lg-12">
					<div class="input-group">
						<span class="input-group-addon">#</span>
						<input type="text" class="form-control" name="num_empleado" placeholder="No. Empleado" required>
					</div>
				</div>
				<br><br><br>
				<div class="col-lg-6">
					<div class="input-group">
						<span class="input-group-addon">Nombre(s)</span>
						<input type="text" class="form-control" name="nombre" required>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="input-group">
						<span class="input-group-addon">Apellidos</span>
						<input type="text" class="form-control" name="apellido" required>
					</div>
				</div>
				<br><br><br>
				<div class="col-lg-12">
					<div class="input-group">
						<span class="input-group-addon">Dirección</span>
						<input type="text" class="form-control" name="direccion" required>
					</div>
				</div>
				<br><br><br>
				<div class="col-lg-12">
					<div class="input-group">
						<span class="input-group-addon">@</span>
						<input type="text" class="form-control" name="email" placeholder="E-mail">
					</div>
				</div>
				<br><br><br>
				<div class="col-lg-6">
					<div class="input-group">
						<span class="input-group-addon">Telefono</span>
						<input type="text" class="form-control" name="tel">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<select name="genero" id="genero" class="form-control" required>
							<option value="">.:: SELECCIONE UN <strong>GENERO</strong> ::.</option>
							<option value="Masculino">Masculino</option>
							<option value="Femenino">Femenino</option>
						</select>
					</div>
				</div>
				<br><br><br>
				<center>
					<a href="docentes.php" class="btn btn-default">Cancelar</a>
					<input type="submit" name="registrar" value="Registrar" class="btn btn-primary">
				</center>
			</div>
		</div><!-- /.row -->
	</form>
	</div>
</div>