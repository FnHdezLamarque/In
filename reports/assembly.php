<?

    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=assembly.xls");
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
        include ('../conexion.php');
        $sql="SELECT * FROM
        WhoopIT.employee AS e
            INNER JOIN
        WhoopIT.material AS m ON m.id_employee = e.id_employee WHERE SUBSTR(area, 1, 8) = 'Assembly'
        ORDER BY id_material ASC;";
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
        <td><?php echo $fila['asset']; ?></td>
        <td><?php echo $fila['ubicacion']; ?></td>
        <td><?php echo $fila['nota']; ?></td>
    </tr>
    <?php } ?>

</table>