<?php
include 'connection.inc.php';

session_start();

$msg = '';
	
//Valida si el boton es presionado
if(isset($_POST['submit'])){
	
	if(!empty($_POST['user']) && !empty($_POST['pass'])){
		
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		
		$sql = "SELECT * FROM coordinador WHERE Usuario = '$user' AND Contrasena = '$pass' ";
		$result = $mysqli->query($sql);
		
		if($result){
			
			while($row = $result->fetch_array())
			{
				$userok = $row['Usuario'];
				$name = $row['Nombre'];
			}
			
			$result->free();
		}
		
		if(isset($userok)){
				
			$_SESSION['user'] = $userok;
			$_SESSION['name'] = $name;
			
			header('location: inicio.php');
			
		}else{
			$msg = 'EL usuario o la contraseña son incorrectos.';
		}	
		
	}else{
		$msg = 'Todos los campos  son requeridos.';
	}

	$mysqli->close();
}