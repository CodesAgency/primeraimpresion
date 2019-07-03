<?php
$fecha1=$_REQUEST['fecha1'];
$fecha2=$_REQUEST['fecha2'];
include 'plantilla.php';

$pdf=new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(230,230,230);
$pdf->SetFont('Arial', 'B', '10');
$pdf->Cell(215,6, utf8_decode('Orde de Trabajo'),1,0,'c',0);$pdf->Cell(60,6, 'Inicio:'.$fecha1.' Final:'.$fecha2,1,1,'c',0);
$pdf->Cell(40,6, utf8_decode('Fecha'),1,0,'c',0);
$pdf->Cell(55,6, utf8_decode('Activo'),1,0,'c',0);
$pdf->Cell(180,6, utf8_decode('Actividad'),1,1,'c',0);

require '../conexion3.php';
$registros2=mysqli_query($conexion,"SELECT * FROM fechas_rev WHERE fecha >='".$fecha1."' and fecha <='".$fecha2."'") or
  die("Problemas en el select:".mysqli_error($conexion));

while ($reg2=mysqli_fetch_array($registros2))
{

$fecha=$reg2['fecha'];
$pdf->Cell(40,6, utf8_decode($fecha),1,0,'c',0);

$registros3=mysqli_query($conexion,"SELECT * FROM revision WHERE id_revision_general='$reg2[id_recision]'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg3=mysqli_fetch_array($registros3)){
    $equipo=$reg3['id_activo'];
    $actividad=$reg3['actividad'];
    
    $registros4=mysqli_query($conexion,"SELECT * FROM activo WHERE id_activo='$equipo'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg4=mysqli_fetch_array($registros4)){
    $equipo2=$reg4['equipo'];
    $nactivo=$reg4['id_activo'];
$pdf->Cell(55,6, utf8_decode('Activo Nº').$nactivo.''.utf8_decode($equipo2),1,0,'c',0);


}
    
$actividad=$reg3['actividad'];
$registros5=mysqli_query($conexion,"SELECT * FROM actividades WHERE id_actividad='$reg3[actividad]'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg5=mysqli_fetch_array($registros5)){
    $actividadx=$reg5['actividad'];
    
$pdf->Cell(180,6, utf8_decode('Actividad:'). html_entity_decode($actividadx),1,1,'c',0);

}



}

  
}

mysqli_close($conexion);


$pdf->Output('D','activo.pdf');

?>

