<?
    require '../fpdf/fpdf.php';

    class PDF extends FPDF
    {
        function Header()
        {
            $this->Image('../images/whoop.png', 5, 5, 20);
            $this->SetFont('Arial', 'B', 15);
            $this->Cell(30);
            $this->Cell(210, 10, 'Reporte IT', 0, 0, 'C');

            $this->Ln(20);
        }

        function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
        }
    }
?>