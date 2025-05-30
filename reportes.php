<?
include ('conexion.php');

$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];
//reporte de todo los materiales
if(isset($_POST['reporte']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reporte=$conex->query("SELECT id_material, equipo, marca, modelo, serie, nombre_pc, area, nombre, fecha, asset FROM WhoopIT.material as m INNER JOIN WhoopIT.employee as e ON m.id_employee = e.id_employee where fecha BETWEEN '$fecha1' AND '$fecha2'");
    while ($filar= $reporte->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


//reporte del area de TQI
if(isset($_POST['reportetqi']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 3) = 'TQI'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


// reporte del area de assembly
if(isset($_POST['reporteass']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 8) = 'Assembly'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


// reporte del area de SMT
if(isset($_POST['reportesmt']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 3) = 'SMT'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


// reporte del area warehouse
if(isset($_POST['reportewar']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 9) = 'Warehouse'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


// reporte del area mezzanine
if(isset($_POST['reportemez']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 9) = 'Mezzanine'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


// reporte del area administrative
if(isset($_POST['reporteadm']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 14) = 'Administrative'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


// reporte del area IQC
if(isset($_POST['reporteiqc']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 3) = 'IQC'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


// reporte del area packing
if(isset($_POST['reportepac']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 7) = 'Packing'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


// reporte del area recharge
if(isset($_POST['reporterec']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 8) = 'Recharge'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


// reporte del area aisle
if(isset($_POST['reporteais']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 5) = 'Aisle'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


// reporte de PC
if(isset($_POST['reportepc']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 3) = 'TQI'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


// reporte de Laptops
if(isset($_POST['reportelap']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 3) = 'TQI'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


// reporte de displays 
if(isset($_POST['reportedis']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 3) = 'TQI'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


// reporte de mouses
if(isset($_POST['reportemou']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 3) = 'TQI'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


// reporte de keyboards
if(isset($_POST['reportekey']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 3) = 'TQI'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


// reporte de printers
if(isset($_POST['reportepri']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 3) = 'TQI'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


// reporte de scanners
if(isset($_POST['reportesca']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 3) = 'TQI'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


// reporte de devices
if(isset($_POST['reportedev']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 3) = 'TQI'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}


// reporte de other
if(isset($_POST['reporteoth']))
{
    //Nombre del archivo y charset
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition attachment; filename"reporte.csv"');

    //Salida del archivo
    $salida=fopen('php://output', 'w');
    //Datos que queremos en el reporte
    fputcsv($salida, array ('id_material', 'equipo', 'marca', 'modelo', 'serie', 'nombre_pc', 'area', 'nombre', 'fecha', 'asset' ));
    //Query del reporte
    $reportetqi=$conex->query("SELECT 
                                id_material,
                                equipo,
                                marca,
                                modelo,
                                serie,
                                nombre_pc,
                                area,
                                nombre,
                                fecha,
                                asset
                            FROM
                                WhoopIT.material AS m
                                    INNER JOIN
                                WhoopIT.employee AS e ON m.id_employee = e.id_employee
                            WHERE
                                SUBSTR(area, 1, 3) = 'TQI'
                                    AND fecha BETWEEN '$fecha1' AND '$fecha2'
                            ORDER BY area ASC;");
    while ($filar= $reportetqi->fetch_assoc())
        fputcsv($salida, array($filar['id_material'],
                                $filar['equipo'],
                                $filar['marca'],
                                $filar['modelo'],
                                $filar['serie'],
                                $filar['nombre_pc'],
                                $filar['area'],
                                $filar['nombre'],
                                $filar['fecha'],
                                $filar['asset'],
));
}
?>
