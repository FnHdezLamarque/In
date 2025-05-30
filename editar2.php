<?php
	
	require 'conexion.php';
	
	$id_employee = ($_POST['id_employee']);
	$nombre = ($_POST['nombre']);
	$telefono = ($_POST['telefono']);
	$correo = ($_POST['correo']);
	$depto = ($_POST['depto']);
	
	$sql = "UPDATE employee SET nombre='$nombre',telefono='$telefono',correo='$correo',depto='$depto' WHERE id_employee=$id_employee ";
	$resultado = $mysqli->query($sql);
	
	if($resultado>0){
		echo 'REGISTRO MODIFICADO';
		} else {
		echo 'ERROR AL MODIFICAR REGISTRO';
	}
	
	echo "<br/><a href='empleados.php' class='btn btn-primary' >Regresar</a>";
?>