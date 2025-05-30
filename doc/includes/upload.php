<?php

if (isset($_FILES['archivo'])) {
    extract($_POST);
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $carpeta_destino = "files/";
    
    $nombre_archivo = basename($_FILES["archivo"]["name"]);
    $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));

    if ($extension == "pdf" || $extension == "doc" || $extension == "docx") {
        if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $carpeta_destino . $nombre_archivo)) {
            $archivo_ruta = $carpeta_destino . $nombre_archivo; // Obtenemos la ruta completa del archivo
            
            include "db.php";
            $sql = "INSERT INTO `WhoopIT`.`repositorio` (`nombre`, `descripcion`, `archivo` ) VALUES ('$nombre', '$descripcion','$archivo_ruta')";
            $resultado = mysqli_query(Connection(), $sql);
            if ($resultado) {
                echo "<script language='JavaScript'>
                alert('Archivo Subido');
                location.assign('../views/index.php');
                </script>";
            } else {
                echo "<script language='JavaScript'>
                alert('Error al subir el archivo: ');
                location.assign('../views/index.php');
                </script>";
            }
        } else {
            echo "<script language='JavaScript'>
            alert('Error al subir el archivo. ');
            location.assign('../views/index.php');
            </script>";
        }
    } else {
        echo "<script language='JavaScript'>
        alert('Solo se permiten archivos PDF, DOC y DOCX.');
        location.assign('../views/index.php');
        </script>";
    }   
}
?>


