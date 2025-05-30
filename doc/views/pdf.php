<?//PDF
    require '../../fpdf/fpdf.php';
    require '../../conexion.php';
    require '../../connection.php';

    if (isset($_POST['id_employee'])) {
        $Id = $_POST['id_employee'];
    } else {
        // Manejo de error si no se proporciona el id_employee
        // Puedes redirigir a una página de error o mostrar un mensaje apropiado.
        exit("Error: id_employee no proporcionado.");
    }

    $query2 = mysqli_query(Connection(), "SELECT nombre FROM WhoopIT.employee as e left join WhoopIT.material as m on e.id_employee = m.id_employee WHERE e.id_employee = $Id;"); 
    $row2 = mysqli_fetch_assoc($query2);

    $query = mysqli_query(Connection(), "SELECT marca, equipo, modelo, serie FROM WhoopIT.employee as e left join WhoopIT.material as m on e.id_employee = m.id_employee WHERE e.id_employee = $Id order by nombre asc;"); 
    
    class PDF extends FPDF
{
// Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../../images/whoop.png',10,8,33);
        // Arial bold 15
        $this->SetFont('Arial','B',24);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30,30,utf8_decode('WHOOP MX'), 0, 1,'C');       
        // Subtitulo
        $this->SetFont('Arial','B',12);
        $this->Cell(190,15,utf8_decode('CARTA RESPONSIVA DE EQUIPO DE IT / IT RESPONSIVE LETTER'), 0, 1,'C');
        // Salto de línea
        $this->Ln(1);
    }

// Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetXY(-155,-50);
        // Arial italic 8
        $this->Cell(100, 5, utf8_decode(' Atentamente: '), 0, 1, 'C');
        $this->SetXY(-155,-50);
        $this->Cell(100, 30, utf8_decode('____________________________________'), 1, 1, 'C');
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}
    $pdf = new PDF('P','mm','A4');
    //paginacion en pie de pagina
    $pdf -> AliasNbPages();
    //agregar la hoja pdf 
    $pdf -> AddPage();
    //fuente
    $pdf -> SetFont('Arial','',14);

    //fecha
    $pdf->SetFont('Arial', '', 11);
    $fechaActual = date('d/m/Y');

    //texto
    $pdf->Cell(170, 10, utf8_decode('Tijuana, B.C. a '.$fechaActual), 0, 1, 'R');
    $pdf->Cell(170, 5, utf8_decode('Por medio de la presente, hago constar que yo:  " '. $row2['nombre'].' "'), 0, 1, 'L'); 
    $pdf->Cell(170, 5, utf8_decode('con número de empleado: _______'.' recibi de Whoop MX el equipo de IT con un valor de $ ________'), 0, 1, 'L');
    $pdf->Cell(170, 5, utf8_decode('El cual me comprometo a cuidar, mantener en buen estado y utilizarla única y exclusivamente para'), 0, 1, 'L');
    $pdf->Cell(170, 5, utf8_decode('asuntos relacionados con mi actividad laboral.'), 0, 1, 'L');
    $pdf->Cell(30, 5, utf8_decode(''), 0, 1, 'L');

    //datos
    $pdf->Cell(30, 5, utf8_decode('Departemento:'), 0, 0, 'L'); $pdf->Cell(10, 5, utf8_decode('_____________'), 0, 1, 'L');
    $pdf->Cell(30, 5, utf8_decode('Area:'), 0, 0, 'L'); $pdf->Cell(10, 5, utf8_decode('_____________'), 0, 1, 'L');
    $pdf->Cell(30, 5, utf8_decode('Supervisor:'), 0, 0, 'L'); $pdf->Cell(10, 5, utf8_decode('_____________'), 0, 1, 'L');
    $pdf->Cell(30, 5, utf8_decode('Nota:'), 0, 0, 'L'); $pdf->Cell(10, 5, utf8_decode('_____________'), 0, 1, 'L');
    $pdf->Cell(30, 5, utf8_decode(''), 0, 1, 'L');

    //tabla
    $pdf->Cell(30, 10, utf8_decode('Descripcion de equipo'), 0, 1, 'L');
    
    $pdf->SetFillColor(232,232,232);
    $pdf->Cell(35, 8, utf8_decode('Equipo'), 1, 0, 'C',1); 
    $pdf->Cell(35, 8, utf8_decode('Marca'), 1, 0, 'C',1); 
    $pdf->Cell(45, 8, utf8_decode('Modelo'), 1, 0, 'C',1); 
    $pdf->Cell(75, 8, utf8_decode('No. de Serie'), 1, 1, 'C',1); 

    while($row = $query->fetch_assoc())
    {
        $pdf -> Cell(35,5,$row['equipo'],1,0,'C');
        $pdf -> Cell(35,5,$row['marca'],1,0,'C');
        $pdf -> Cell(45,5,$row['modelo'],1,0,'C');
        $pdf -> Cell(75,5,$row['serie'],1,1,'C');
    }


$pdf->Output();
?>