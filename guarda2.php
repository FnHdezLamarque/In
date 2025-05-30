<?php

require 'conexion.php';
require 'connection.php';

$equipo =($_POST['equipo']);
$marca =($_POST['marca']);
$modelo =($_POST['modelo']);
$serie =($_POST['serie']);
$nombre_pc =($_POST['nombre_pc']);
$area =($_POST['area']);
$id_employee =($_POST['id_employee']);
$fecha =($_POST['fecha']);
$ubicacion =($_POST['ubicacion']);
$nota =($_POST['nota']);

$query = "SELECT MAX(asset) AS newasset FROM material";
$resultado = $conex->query($query);
$ultimoConsecutivo = $resultado->fetch_assoc()['newasset'];
$nuevoConsecutivo = $ultimoConsecutivo + 1;

$sentencia= "INSERT INTO material (equipo, marca, modelo, serie, nombre_pc, area, id_employee, fecha, asset, ubicacion, nota) VALUES ('$equipo', '$marca', '$modelo', '$serie', '$nombre_pc', '$area', '$id_employee', '$fecha',  $nuevoConsecutivo, '$ubicacion', '$nota')";
 //echo $sentencia;
$material = $mysqli->query($sentencia);

if($material>0){
    echo 'REGISTRO AGREGADO';
    } 
    else 
    {
    echo 'ERROR AL AGREGAR REGISTRO';}

    echo "<br/><a href='vistamaterial.php' class='btn btn-primary' >Regresar</a>";
    
?>
