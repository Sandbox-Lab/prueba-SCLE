<div class="panel panel-default">
	<div class="panel-heading">Regisrto de Alumnos</div>
	<div class="panel-body">
	<form role="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
		<div class="row">
			<div class="col-lg-12">
			
			<?php (!empty($msg) && isset($msg)) ? require 'alert-success.php': null; ?>
			
				<div class="col-lg-12">
					<div class="input-group">
						<span class="input-group-addon">#</span>
						<input type="text" class="form-control" name="num_control" placeholder="No. Control" required>
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
				<div class="col-lg-12">
					<div class="input-group">
						<span class="input-group-addon">Carrera</span>
						<input type="text" class="form-control" name="carrera" required>
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
				<div class="col-lg-6">
					<div class="form-group">
						<select name="campus" id="campus" class="form-control" required>
							<option value="">.:: SELECCIONE <strong>CAMPUS</strong> ::.</option>
							<option value="Alvarado">Alvarado</option>
							<option value="Tlalixcoyan">Tlalixcoyan</option>
							<option value="Medellín">Medellín</option>
						</select>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<select name="semestre" id="semestre" class="form-control" required>
							<option value="">.:: SELECCIONE UN <strong>SEMESTRE</strong> ::.</option>
							<option value="1">1º</option>
							<option value="2">2º</option>
							<option value="3">3º</option>
							<option value="4">4º</option>
							<option value="5">5º</option>
							<option value="6">6º</option>
							<option value="7">7º</option>
							<option value="8">8º</option>
						</select>
					</div>
				</div>
				<br><br><br>
				<div class="col-lg-6">
					<div class="form-group">
						<select name="modulo" id="modulo" class="form-control" required>
							<option value="">.:: SELECCIONE UN <strong>MODULO</strong> ::.</option>
							<option value="Escolarizado">Escolarizado</option>
							<option value="Semi-escolariazado">Semi-escolariazado</option>
						</select>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<select name="nivel" id="nivel" class="form-control" required>
							<option value="">.:: SELECCIONE UN <strong>NIVEL</strong> ::.</option>
							<option value="A1">A1</option>
							<option value="A2">A2</option>
							<option value="B1">B1</option>
							<option value="B2">B2</option>
							<option value="C1">C1</option>
							<option value="C2">C2</option>
						</select>
					</div>
				</div>
				<center>
					<a href="alumnos.php" class="btn btn-default">Cancelar</a>
					<input type="submit" name="registrar" value="Registrar" class="btn btn-primary">
				</center>
			</div>
		</div><!-- /.row -->
	</form>
	</div>
</div>