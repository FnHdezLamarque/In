<?php
	
	require 'conexion.php';
	
	$ubicacion = ($_POST['ubicacion']);
	$nota = ($_POST['nota']);
	
	$sentencia = "UPDATE material SET ubicacion='$ubicacion', nota='$nota'";
	$material = $mysqli->query($sentencia);
	//echo $sentencia
	if($material>0){
		echo 'REGISTRO MODIFICADO';
		} else {
		echo 'ERROR AL MODIFICAR REGISTRO';
	}
	
	echo "<br/><a href='vistamaterial.php' class='btn btn-primary' >Regresar</a>";
?>
