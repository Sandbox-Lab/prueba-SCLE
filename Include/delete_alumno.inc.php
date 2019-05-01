<?php

if(isset($_GET['id'])){
		
	$id = $_GET['id'];

	$delete = "DELETE FROM alumno WHERE NumeroControl = '$id'";
	$result = $mysqli->query($delete);
	
	if($result){
		include 'successAlert.inc.php';
		$msg = 'El alumno con el No. Control: '. $id .' ha sido eliminado exitosamente.';
		header('location: alumnos.php');	
	}
}