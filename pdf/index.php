<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{

    // Arial bold 15
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'REGISTRO VEHICULAR ',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(50,10,'Placa',1,0,'C',0);
	$this->Cell(40,10,'Fecha',1,0,'C',0);
  $this->Cell(20,10,'Minutos',1,0,'C',0);
	$this->Cell(20,10,'Importe',1,1,'C',0);
  


}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
}
}

require ("con.php");
$consulta = "SELECT * FROM fechas";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);

while ($row=$resultado->fetch_assoc()) {
	$pdf->Cell(50,10,$row['placa'],1,0,'C',0);
	$pdf->Cell(40,10,$row['fecha_uno'],1,0,'C',0);
  $pdf->Cell(20,10,$row['resultado'],1,0,'C',0);
	$pdf->Cell(20,10,$row['importe'],1,1,'C',0);

}


	$pdf->Output();
?>
