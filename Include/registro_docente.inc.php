<?php

if(isset($_POST['registrar'])){
	
	$num_empleado = $_POST['num_empleado'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$direccion = $_POST['direccion'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$genero = $_POST['genero'];
	
	$insert = "INSERT INTO docente VALUES(
				'$tel',
				'$nombre',
				'$apellido',
				'$genero',
				'$direccion',
				'$email',
				'$num_empleado')";
	
	$result = $mysqli->query($insert);
	
	if($result){
		$msg = 'Los datos de <strong>'.$nombre.'</strong> han sido guardados con exito.';
	}	
}