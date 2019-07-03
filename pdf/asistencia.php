<?php
$supervisor=$_REQUEST['supervisor'];
$fecha=$_REQUEST['fecha'];
$fecha1=$_REQUEST['fecha'].' 00:00:00';
$fecha2=$_REQUEST['fecha'].' 23:00:00';
include 'plantilla2.php';
require '../conexion3.php';

$registros=mysqli_query($conexion,"select * from users where id='$supervisor' ") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros))
{
  $supervisor_nombre=$reg['nombre'];
  $supervisor_apellido=$reg['apellido'];
}





$pdf= new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(230,230,230);
$pdf->SetFont('Arial', '', '12');
$pdf->Cell(90,6, 'Supervisor:  '.utf8_decode($supervisor_nombre).'  '.utf8_decode($supervisor_apellido),0,0,'c',0);
$pdf->Cell(90,6, 'Firma: ______________________________ ',0,1,'c',0);
$pdf->Cell(90,6, 'Fecha:  '.utf8_decode($fecha),0,1,'c',0);

$pdf->Cell(20,6, 'Llegada',1,0,'c',0);
$pdf->Cell(20,6, 'Codigo',1,0,'c',0);
$pdf->Cell(50,6, 'Nombre Agente',1,0,'c',0);
$pdf->Cell(20,6, 'Firma',1,0,'c',0);
$pdf->Cell(20,6, 'Salida',1,0,'c',0);
$pdf->Cell(50,6, 'Observaciones',1,1,'c',0);


$registros2=mysqli_query($conexion,"select * from asistencia where supervisor=1 and fecha_asistencia>='$fecha1' and fecha_asistencia<='$fecha2'") or
  die("Problemas en el select:".mysqli_error($conexion));

while ($reg2=mysqli_fetch_array($registros2))
{
    

$pdf->Cell(20,6, html_entity_decode($reg2['llegada']),1,0,'c',0);
$pdf->Cell(20,6, html_entity_decode($reg2['codigo']),1,0,'c',0);
$pdf->Cell(50,6, html_entity_decode($reg2['nombre_agente']),1,0,'c',0);
$pdf->Cell(20,6, '',1,0,'c',0);
$pdf->Cell(20,6, html_entity_decode($reg2['salida']),1,0,'c',0);
$pdf->Cell(50,6, html_entity_decode($reg2['observaciones']),1,1,'c',0);


}
$pdf->MultiCell(180,6, 'Novedades:________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,0,'c',0);
$pdf->Output('D','asistencia.pdf');

?>

