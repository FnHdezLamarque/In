<?php
include "db.php";
// Obtener el ID del archivo desde la URL
$id = $_GET['id'];

// Buscar el archivo en la base de datos
$sql = "SELECT * FROM repositorio WHERE id = '$id'";
$resultado = mysqli_query(Connection(), $sql);

if (mysqli_num_rows($resultado) == 1) {
    $fila = mysqli_fetch_assoc($resultado);
    $archivo_ruta = $fila['archivo'];

    // Verificar que el archivo exista en la ruta
    if (file_exists($archivo_ruta)) {
        // Obtener el nombre del archivo desde la ruta
        $nombre_archivo = basename($archivo_ruta);
        
        // Enviar el archivo al navegador
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $nombre_archivo . '"');
        readfile($archivo_ruta);
    } else {
        echo "El archivo no existe en el servidor.";
    }
} else {
    echo "El archivo no se encontró en la base de datos.";
}
?>
