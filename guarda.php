<?php
 
 require 'conexion.php';

 $nombre =($_POST['nombre']);
 $telefono =($_POST['telefono']);
 $correo =($_POST['correo']);
 $depto =($_POST['depto']);

 $sql= "INSERT INTO employee (nombre, telefono, correo, depto) VALUES ('$nombre', '$telefono', '$correo', '$depto')";
 //echo $sql;
 $resultado = $mysqli->query($sql);

 if($resultado>0){
    echo 'REGISTRO AGREGADO';
    } 
    else 
    {
    echo 'ERROR AL AGREGAR REGISTRO';}

    echo "<br/><a href='empleados.php' class='btn btn-primary' >Regresar</a>";
?>
