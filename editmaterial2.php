<?php
	
	require 'conexion.php';
	
	$id_material = ($_POST['nombre_id']);
	$equipo = ($_POST['equipo']);
	$marca = ($_POST['marca']);
	$modelo = ($_POST['modelo']);
	$serie = ($_POST['serie']);
	$nombre_pc = ($_POST['nombre_pc']);
	$area = ($_POST['area']);
    $id_employee = ($_POST['id_employee']);
	$fecha = ($_POST['fecha']);
	$asset = ($_POST['asset']);
	$ubicacion = ($_POST['ubicacion']);
	$nota = ($_POST['nota']);
	
	$sentencia = "UPDATE material SET equipo='$equipo',marca='$marca',modelo='$modelo',serie='$serie', nombre_pc='$nombre_pc', area='$area', id_employee='$id_employee', fecha='$fecha', asset='$asset', ubicacion='$ubicacion', nota='$nota' WHERE id_material=$id_material ";
	$material = $mysqli->query($sentencia);
	//echo $sentencia
	if($material>0){
		echo 'REGISTRO MODIFICADO';
		} else {
		echo 'ERROR AL MODIFICAR REGISTRO';
	}
	
	echo "<br/><a href='vistamaterial.php' class='btn btn-primary' >Regresar</a>";
?>