<?php
include 'plantilla3.php';
require '../conexion3.php';




$pdf= new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(230,230,230);
$pdf->SetFont('Arial', '', '12');

$pdf->Cell(80,6, 'Nombre',1,0,'c',0);
$pdf->Cell(25,6, 'Cedula',1,0,'c',0);
$pdf->Cell(25,6, 'telefono',1,0,'c',0);
$pdf->Cell(60,6, 'Email',1,1,'c',0);


$registros2=mysqli_query($conexion,"select * from aspirante") or
  die("Problemas en el select:".mysqli_error($conexion));

while ($reg2=mysqli_fetch_array($registros2))
{
    

$pdf->Cell(80,6, html_entity_decode($reg2['nombre'].' '.$reg2['apellido']),1,0,'c',0);
$pdf->Cell(25,6, html_entity_decode($reg2['cedula_ciudadania']),1,0,'c',0);
$pdf->Cell(25,6, html_entity_decode($reg2['telefono']),1,0,'c',0);
$pdf->Cell(60,6, html_entity_decode($reg2['correo_electronico']),1,1,'c',0);

}
$pdf->Output('D','clientes.pdf');

?>

