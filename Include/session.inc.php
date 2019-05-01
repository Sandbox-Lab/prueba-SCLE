<?php
include 'login.inc.php';

if(!isset($_SESSION['user'])){
			
	header('location: ../Pruebas');	
}