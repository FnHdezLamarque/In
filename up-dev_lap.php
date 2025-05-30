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
$id = $_POST['Id_material'];
$date = date('Y-m-d');
$newdate = date('Y-m-d', strtotime('+6 months', strtotime($date)));

// Asignar valores predeterminados de 0 si no se han seleccionado las casillas correspondientes
$aspirado = isset($_POST['Aspirado']) ? 1 : 0;
$archivos = isset($_POST['Archivos']) ? 1 : 0;
$actualizaciones = isset($_POST['Actualizaciones']) ? 1 : 0;

// Actualizar el registro más reciente
$updateQuery = "UPDATE SAVE_MAINTENANCE SET state = CASE 
                    WHEN state IS NULL THEN 0 
                    WHEN state = 0 THEN 1 
                    ELSE state 
                END
                WHERE Id_material = '$id' 
                ORDER BY Next_Date DESC LIMIT 1";
$updated = $mysqli->query($updateQuery);

// Insertar el nuevo registro
$insertQuery = "INSERT INTO SAVE_MAINTENANCE (Id_usuario, Id_material, state, Date, Next_Date, Aspirado, Archivos, Actualizaciones, Print) 
                VALUES ('$Id_users', '$id', 0, '$date', '$newdate', '$aspirado', '$archivos', '$actualizaciones', 1)";
$inserted = $mysqli->query($insertQuery);

// Obtener el ID del nuevo registro insertado
$newId = $mysqli->insert_id;

// Actualizar el registro anterior al nuevo insertado
$updatePreviousQuery = "UPDATE SAVE_MAINTENANCE SET state = 1 
                        WHERE Id_material = '$id' AND Id <> $newId";
$updatedPrevious = $mysqli->query($updatePreviousQuery);

if ($updated && $inserted && $updatedPrevious) {
    echo 'REGISTRO MODIFICADO E INSERTADO EXITOSAMENTE';
} else {
    echo 'ERROR AL MODIFICAR E INSERTAR REGISTRO';
}

echo "<br/><a href='main_lap.php' class='boton' >Regresar</a>";


?>