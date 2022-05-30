<?php


$mysqli = new mysqli('localhost', 'root', 'admin.20', 'personal');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}


?>