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

$Id_users = $_POST['Id_usuario'];
$id = $_POST['Id_Material'];
$date = date('Y-m-d');
$newdate = date('Y-m-d', strtotime('+15 days', strtotime($date)));

// Actualizar el registro más reciente
$updateQuery = "UPDATE maintenance SET State = CASE 
                    WHEN State IS NULL THEN 0 
                    WHEN State = 0 THEN 1 
                    ELSE State 
                END
                WHERE Id_material = '$id' 
                ORDER BY Next_Date DESC LIMIT 1";
$updated = $mysqli->query($updateQuery);

// Insertar el nuevo registro
$insertQuery = "INSERT INTO maintenance (Id_Usuario, Id_Material, State, Date, Next_Date) 
                VALUES ('$Id_users', '$id', 0, '$date', '$newdate')";
$inserted = $mysqli->query($insertQuery);

// Obtener el ID del nuevo registro insertado
$newId = $mysqli->insert_id;

// Actualizar el registro anterior al nuevo insertado
$updatePreviousQuery = "UPDATE maintenance SET State = 1 
                        WHERE Id_Material = '$id' AND Id <> $newId";
$updatedPrevious = $mysqli->query($updatePreviousQuery);

if ($updated && $inserted && $updatedPrevious) {
    echo 'REGISTRO MODIFICADO E INSERTADO EXITOSAMENTE';
} else {
    echo 'ERROR AL MODIFICAR E INSERTAR REGISTRO';
}

echo "<br/><a href='xpress.php' class='boton' >Regresar</a>";


?>