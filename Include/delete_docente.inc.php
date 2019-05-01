<?php

if(isset($_GET['id'])){
		
	$id = $_GET['id'];

	$delete = "DELETE FROM docente WHERE NumeroPersonal = '$id'";
	$result = $mysqli->query($delete);
	
	if($result){
		include 'successAlert.inc.php';
		$msg = 'El docente con el No. Empleado: '. $id .' ha sido eliminado exitosamente.';
		header('location: docentes.php');	
	}
}