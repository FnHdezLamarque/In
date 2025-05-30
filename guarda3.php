<?php

require 'conexion.php';
$id_material =($_POST['nombre_id']);
$id_maintenance =($_POST['id_maintenance']);

$sentencia= "UPDATE WhoopIT.material SET id_maintenance='$id_maintenance' WHERE id_material=$id_material;";
//echo $sentencia;
$material = $mysqli->query($sentencia);

if($material>0){
   echo 'REGISTRO AGREGADO';
   } 
   else 
   {
   echo 'ERROR AL AGREGAR REGISTRO';}

   echo "<br/><a href='maintenance.php' class='btn btn-primary' >Regresar</a>";