<?Php
include 'config.php';
require('fpdf.php');

$pdf = new FPDF(); 
$pdf->AddPage();
$pdf->Image('images/tikacard.png',5,10,200,180,'PNG');

$pdf->Output();
?>