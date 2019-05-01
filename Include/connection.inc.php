<?php
$mysqli = new mysqli('localhost' , 'root', '', 'bd_prueba');

if ($mysqli->connect_errno) {
	die('"Fallo al conectar la Base de Datos: '. $mysqli->connect_error);
}