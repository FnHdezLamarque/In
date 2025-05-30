<?
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=archivo.xls");
?>

<table>
    <tr>
        <th>ID</th>
        <th>Equipment</th>
        <th>Branch</th>
        <th>Model</th>
        <th>Serial Number</th>
        <th>Name</th>
        <th>Area</th>
        <th>Assignment</th>
        <th>Date</th>
        <th>Asset</th>
        <th>Ubication</th>
        <th>Note</th>
    </tr>
    <?
        include ('conexion.php');
        $sql="SELECT * FROM WhoopIT.employee as e INNER JOIN WhoopIT.material as m ON m.id_employee = e.id_employee;";
        $ejecutar=mysqli_query($conex, $sql);
        while ($fila=mysqli_fetch_assoc($ejecutar)){


    ?>
    <tr>
        <td><?php echo $fila['id_material']; ?></td>
        <td><?php echo $fila['equipo']; ?></td>
        <td><?php echo $fila['marca']; ?></td>
        <td><?php echo $fila['modelo']; ?></td>
        <td><?php echo $fila['serie']; ?></td>
        <td><?php echo $fila['nombre_pc']; ?></td>
        <td><?php echo $fila['area']; ?></td>
        <td><?php echo $fila['nombre']; ?></td>
        <td><?php echo $fila['fecha']; ?></td>
        <td>
            <?php
                $longitud = 5; // La longitud total que deseas que tenga el número, incluyendo los ceros

                $numeroConCeros = str_pad($fila['asset'], $longitud, '0', STR_PAD_LEFT);
                //echo $numeroConCeros; // Imprime "00042"
            ?>
            <?php echo "WMA". $numeroConCeros ?>
        </td>
        <td><?php echo $fila['ubicacion']; ?></td>
        <td><?php echo $fila['nota']; ?></td>
    </tr>
    <?php } ?>

</table>