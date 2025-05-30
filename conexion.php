<?php
//conexion con base de datos en phpmyadmin
	$mysqli = new mysqli("127.0.0.1:3306", "root", "", "whoopit");
	if ($mysqli->connect_errno) 
    {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }	
	

	$conex = mysqli_connect("127.0.0.1:3306", "root", "", "whoopit");

?>
