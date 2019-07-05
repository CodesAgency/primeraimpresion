<?php
$lugar=$_REQUEST['lugar'];
$fecha=$_REQUEST['fecha'];
$fecha1=$_REQUEST['fecha'].' 00:00:00';
$fecha2=$_REQUEST['fecha'].' 23:00:00';
include 'plantilla4.php';
require '../conexion3.php';

$registros=mysqli_query($conexion,"select * from novedades ") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros))
{
  $fecha=$reg['fecha'];
}





$pdf= new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(230,230,230);
$pdf->SetFont('Arial', '', '12');

$pdf->Cell(190,6, 'Lugar:  '.utf8_decode($lugar),0,1,'c',0);
$pdf->Cell(190,6, 'Fecha:  '.utf8_decode($fecha),0,1,'c',0);

$registros2=mysqli_query($conexion,"select * from novedades ") or
  die("Problemas en el select:".mysqli_error($conexion));

while ($reg2=mysqli_fetch_array($registros2))
{
$pdf->MultiCell(190,6, 'Turno:  '.utf8_decode($reg2['turno']),0,1,'c',0);
$pdf->MultiCell(190,6, 'Agente:  '.utf8_decode($reg2['agente']),0,1,'c',0);
$pdf->MultiCell(190,6, 'Novedades:  '.utf8_decode($reg2['novedades']),0,1,'c',0);
$pdf->Cell(190,6, '',0,1,'c',0);
  
    
}


$pdf->Output('D','asistencia.pdf');

?>

