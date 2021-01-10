<?php
require('../fpdf.php');
require_once("../../Modelo/AdministrarModelo.php");
$ad = new AdministradorModelo();
$id = $_POST['tipo_curso'];
$sql = "SELECT persona,n1,n2,n3,n4,promedio FROM vmatriculados WHERE idc='$id'";
$re=$ad->consultar($sql);

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Reporte',1,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Cell(65,10,'Persona',1,0,'C',0);
    $this->Cell(25,10,'Nota 1',1,0,'C',0);
    $this->Cell(25,10,'Nota 2',1,0,'C',0);
    $this->Cell(25,10,'Nota 3',1,0,'C',0);
    $this->Cell(25,10,'Nota 4',1,0,'C',0);
    $this->Cell(30,10,'Promedio',1,1,'C',0);

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);





while($row = $re->fetch(PDO::FETCH_ASSOC)){
    $pdf->Cell(65,10,utf8_decode($row['persona']),1,0,'C',0);
    $pdf->Cell(25,10,$row['n1'],1,0,'C',0);
    $pdf->Cell(25,10,$row['n2'],1,0,'C',0);
    $pdf->Cell(25,10,$row['n3'],1,0,'C',0);
    $pdf->Cell(25,10,$row['n4'],1,0,'C',0);
    $pdf->Cell(30,10,ceil($row['promedio']),1,1,'C',0);
}
// Creación del objeto de la clase heredada
//$pdf->Output();
$pdf->Output();
?>