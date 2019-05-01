<?php

if(isset($_POST['registrar'])){
	
	$num_control = $_POST['num_control'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$direccion = $_POST['direccion'];
	$email = $_POST['email'];
	$carrera = $_POST['carrera'];
	$tel = $_POST['tel'];
	$genero = $_POST['genero'];
	$campus = $_POST['campus'];
	$semestre = $_POST['semestre'];
	$modulo = $_POST['modulo'];
	$nivel = $_POST['nivel'];
	
	$insert = "INSERT INTO alumno VALUES(
				'$email',
				'$num_control',
				'$direccion',
				'$nombre',
				'$apellido',
				'$campus',
				'$modulo',
				'$tel',
				'$genero',
				'$nivel',
				'$semestre',
				'$carrera')";
	
	$result = $mysqli->query($insert);
	
	if($result){
		$msg = 'Los datos de <strong>'.$nombre.'</strong> han sido guardados con exito.';
	}	
}