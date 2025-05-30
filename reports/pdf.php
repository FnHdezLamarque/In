<?
    require '../conexion.php';
    include '../reports/plantilla.php';

    $query = ("SELECT equipo, marca, modelo, serie, nombre_pc, area, nombre, fecha, asset FROM WhoopIT.material as m INNER JOIN WhoopIT.employee as e ON m.id_employee = e.id_employee WHERE SUBSTR(area, 1, 5) = 'Aisle' ORDER BY area ASC;");
    $resultado = $mysqli->query($query);

    $pdf = new PDF('L'); //Creamos un objeto de la librería
    $pdf->AliasNbPages();
    $pdf->AddPage(); //Agregamos una Pagina

    $pdf->SetFillColor(232,232,232);
    $pdf->SetFont('Arial','B',12); //Establecemos tipo de fuente, negrita y tamaño 16
    //Agregamos texto en una celda de 70px ancho y 6px de alto, Con Borde, Sin salto de linea y Alineada a la derecha
    $pdf->Cell(20,6,'Equipo',1,0,'C');
    $pdf->Cell(20,6,'Marca',1,0,'C');
    $pdf->Cell(35,6,'Modelo',1,0,'C');
    $pdf->Cell(45,6,'Serie',1,0,'C');
    $pdf->Cell(30,6,'Nombre',1,0,'C');
    $pdf->Cell(25,6,'Area',1,0,'C'); 
    $pdf->Cell(40,6,'Asignado',1,0,'C'); 
    $pdf->Cell(30,6,'Fecha',1,0,'C'); 
    $pdf->Cell(30,6,'Asset',1,1,'C'); 

    $pdf->SetFont('Arial','',8);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(20,5,($row['equipo']),1,0,'C');
		$pdf->Cell(20,5,($row['marca']),1,0,'C');
		$pdf->Cell(35,5,($row['modelo']),1,0,'C');
        $pdf->Cell(45,5,($row['serie']),1,0,'C');
		$pdf->Cell(30,5,($row['nombre_pc']),1,0,'C');
		$pdf->Cell(25,5,($row['area']),1,0,'C');
        $pdf->Cell(40,5,($row['nombre']),1,0,'C');
		$pdf->Cell(30,5,($row['fecha']),1,0,'C');
		$pdf->Cell(30,5,($row['asset']),1,1,'C');
	}
    
    $pdf->Output(); //Mostramos el PDF creado