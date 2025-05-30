<?
require 'connection.php';
require 'conexion.php';
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=archivo.xls");
?>

<table>
    <tr>
        <th>Equipment</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Serie</th>
        <th>Device Name</th>
        <th>Tech</th>
        <th>Date</th>
        <th>Next Maintenance</th>
    </tr>

    <?
        $sql="SELECT
        M.id_material,
        equipo,
        marca,
        modelo,
        nombre_pc,
        serie,
        Date,
        Next_Date,
        state,
        usuario
    FROM
        WhoopIT.SAVE_MAINTENANCE AS SM
        LEFT JOIN WhoopIT.usuarios AS U ON SM.Id_usuario = U.id_users
        RIGHT JOIN WhoopIT.material AS M ON SM.Id_material = M.Id_material
    WHERE
        equipo IN ('Laptop', 'PC', 'Printer', 'Device')
    AND (state IS NULL OR state = 0)
    AND (Date IS NULL OR Date > DATE_SUB(CURDATE(), INTERVAL 6 MONTH))
    GROUP BY serie
    ORDER BY Date ASC;";

        $ejecutar=mysqli_query($conex, $sql);
        while ($fila=mysqli_fetch_assoc($ejecutar)){


    ?>
        
    <tr>
        <td><?php echo $fila['equipo']; ?></td>
        <td><?php echo $fila['marca']; ?></td>
        <td><?php echo $fila['modelo']; ?></td>
        <td><?php echo $fila['serie']; ?></td>
        <td><?php echo $fila['nombre_pc']; ?></td>
        <td><?php echo $fila['usuario']; ?></td>
        <td><?php echo $fila['Date']; ?></td>
        <td><?php echo $fila['Next_Date']; ?></td>
    </tr>
    <?php } ?>

</table>