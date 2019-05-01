<div class="row">
	<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">

		<h1 class="text-center">Sistema de Coordinación de la Lengua Extranjera</h1>
		<br><br>
		
		<?php (!empty($msg) && isset($msg)) ? require 'alert-danger.php': null; ?>
		<br>

		<div class="login-panel panel panel-default">
			<div class="panel-heading text-center">Iniciar Sesión</div>
			<div class="panel-body">
				<form role="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<fieldset>
						<div class="form-group">
							<input class="form-control" placeholder="Usuario" name="user" autofocus="user" required>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Contraseña" name="pass" type="password" required>
						</div>
						<input type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Entrar">
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<!-- /.col-->
</div>
<!-- /.row -->
