<?php
	
	require 'conexion.php';
	
	$id_employee = ($_GET['id_employee']);
	
	
	$sql = "DELETE FROM employee WHERE id_employee=$id_employee";
	//$sql = "UPDATE employee SET activo=0 WHERE id=$id";
	$resultado = $mysqli->query($sql);
	
	if($resultado>0){
		echo 'REGISTRO ELIMINADO';
		} else {
		echo 'ERROR AL ELIMINAR REGISTRO';
	}
	
	echo "<br/><a href='empleados.php' class='btn btn-primary' >Regresar</a>";
	
?>