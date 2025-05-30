<?php
    require 'conexion.php';
    
    $id_material = ($_GET['id_material']);
    
    // Verificar el valor actual del campo "disable"
    $consulta = "SELECT disable FROM material WHERE id_material = $id_material";
    $resultado = $mysqli->query($consulta);
    
    if ($resultado && $resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $valorActual = $fila['disable'];
        
        // Actualizar el campo "disable" según su valor actual
        if ($valorActual === NULL) {
            $nuevoValor = 1;
        } else {
            $nuevoValor = NULL;
        }
        
        $sentencia = "UPDATE material SET disable = ? WHERE id_material = ?";
        $stmt = $mysqli->prepare($sentencia);
        $stmt->bind_param("ii", $nuevoValor, $id_material);
        
        if ($stmt->execute()) {
            echo 'REGISTRO ACTUALIZADO';
        } else {
            echo 'ERROR AL ACTUALIZAR REGISTRO';
        }
    } else {
        echo 'REGISTRO NO ENCONTRADO';
    }
    
    echo "<br/><a href='vistamaterial.php' class='btn btn-primary'>Regresar</a>";
?>
