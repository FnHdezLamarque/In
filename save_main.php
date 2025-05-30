<style>
    .boton {
			display: inline-block;
			padding: 10px 20px;
			background-color: #3282b8;
			color: white;
			text-decoration: none;
			border-radius: 4px;
			border: none;
			cursor: pointer;
		}
</style>

<?php

require 'conexion.php';

$Id_users = ($_POST['Id_usuario']);
$id = ($_POST['Id_material']);
$date = Date('Y-m-d');
$newdate = date('Y-m-d', strtotime('+6 months', strtotime($date)));


$sentencia= "INSERT INTO SAVE_MAINTENANCE (Id_usuario, Id_material, state, Next_Date) VALUES ('$Id_users', '$id', 0, '$newdate')";
//echo $sentencia;
$material = $mysqli->query($sentencia);

if($material>0){
    echo 'REGISTRO AGREGADO';
    } 
    else 
    {
    echo 'ERROR AL AGREGAR REGISTRO';}

    echo "<br/><a href='vistamaintenance.php' class='boton' >Regresar</a>";
?>