<?php
$codigo= $_REQUEST['codigo'];
include 'plantilla.php';
require '../conexion3.php';

$registros2=mysqli_query($conexion,"select * from orden_ejecucion_mantenimiento where codigo_orden='$codigo'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg2=mysqli_fetch_array($registros2))
{
  $id=$reg2['id_o_e_mantenimiento']; 
  $fecha=$reg2['fecha'];
  $revisado=$reg2['revisado'];
  $aprobado=$reg2['aprobado'];
  $maquina=$reg2['maquina'];
  $autorizado=$reg2['autorizado'];
  $horometro=$reg2['horometro'];
  $n_orden=$reg2['n_orden'];
  $n_registro=$reg2['n_registro'];
  $mecanico=$reg2['mecanico'];
  $director_obras_publicas=$reg2['director_obras_publicas'];
  $observaciones=$reg2['observaciones'];

  $registros3=mysqli_query($conexion,"select * from activo where id_activo='$maquina'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg3=mysqli_fetch_array($registros3))
{
    $equipo=$reg3['equipo'];
}

}
 else {
echo 'no';    
}
$pdf= new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(230,230,230);
$pdf->SetFont('Arial', 'B', '12');
$pdf->Cell(180,6, utf8_decode('                                             Orden de Ejecución de Mntenimiento:').utf8_decode('   Orden Nº').utf8_decode($id),1,1,'c',0);

$pdf->Cell(90,6, utf8_decode('Revisado: ').utf8_decode($revisado),1,0,'c',0);
$pdf->Cell(90,6, utf8_decode('Fecha: ').utf8_decode($fecha),1,1,'c',0);

$pdf->Cell(90,6, utf8_decode('Aprobado: ').utf8_decode($aprobado),1,0,'c',0);
$pdf->Cell(90,6, utf8_decode('Maquina: ').utf8_decode($equipo),1,1,'c',0);

$pdf->Cell(90,6, utf8_decode('Autorizado: ').utf8_decode($autorizado),1,0,'c',0);
$pdf->Cell(90,6, utf8_decode('Horómetro: ').utf8_decode($horometro),1,1,'c',0);

$pdf->Cell(90,6, utf8_decode('Nº de Orden: ').utf8_decode($n_orden),1,0,'c',0);
$pdf->Cell(90,6, utf8_decode('Nº Registro: ').utf8_decode($n_registro),1,1,'c',0);

$pdf->Cell(60,6, utf8_decode('Fecha de Inicio '),1,0,'c',0);
$pdf->Cell(60,6, utf8_decode('Fecha de Culminación '),1,0,'c',0);
$pdf->Cell(60,6, utf8_decode('Tipo de Mantenimiento  '),1,1,'c',0);

$registros=mysqli_query($conexion,"select * from orden_e_m_tipomantenimiento WHERE codigo='$codigo'") or
  die("Problemas en el select:".mysqli_error($conexion));

while ($reg=mysqli_fetch_array($registros))
{
  $pdf->Cell(60,6, utf8_decode($reg['fecha_inicio']),1,0,'c',0);
  $pdf->Cell(60,6, utf8_decode($reg['fecha_culminacion']),1,0,'c',0);
  $pdf->Cell(60,6, utf8_decode($reg['tipo_mantenimiento']),1,1,'c',0);
  
}

mysqli_close($conexion);
require '../conexion3.php';

$pdf->Cell(180,6, utf8_decode('Repuestos a Utilizar'),1,1,'c',0);
$pdf->Cell(20,6, utf8_decode('id'),1,0,'c',0);
$pdf->Cell(80,6, utf8_decode('Nombre'),1,0,'c',0);
$pdf->Cell(80,6, utf8_decode('Cantidad'),1,1,'c',0);

$registros4=mysqli_query($conexion,"select * from orden_repuesto_utilizar WHERE codigo=121312312312312213123123213207025822") or
  die("Problemas en el select:".mysqli_error($conexion));

while ($reg4=mysqli_fetch_array($registros4))
{
  $pdf->Cell(20,6, utf8_decode($reg4['id_repuesto']),1,0,'c',0);
 
  $registros5=mysqli_query($conexion,"select * from products where id_producto='$reg4[id_repuesto]'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg5=mysqli_fetch_array($registros5))
{
  $pdf->Cell(80,6, utf8_decode($reg5['nombre_producto']),1,0,'c',0);  
}
  
  $pdf->Cell(80,6, utf8_decode($reg4['id_repuesto']),1,1,'c',0);
  
  
}

mysqli_close($conexion);
$pdf->SetFont('Arial', 'B', '12');
$pdf->Cell(90,10, utf8_decode('                    ___________________'),0,0,'c',0);
$pdf->Cell(90,10, utf8_decode('                    ___________________'),0,1,'c',0);
require '../conexion3.php';
$registros6=mysqli_query($conexion,"select * from users where id='$mecanico'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg6=mysqli_fetch_array($registros6))
{
  $pdf->Cell(90,10, utf8_decode('                      '.$reg6['nombre'].'  '.$reg6['apellido']),0,0,'c',0);  
}


$pdf->Cell(90,10, utf8_decode('                         '.$director_obras_publicas),0,1,'c',0);
$pdf->Cell(90,6, utf8_decode('                         '.'Mecánico'),0,0,'c',0);
$pdf->Cell(90,6, utf8_decode('              '.'Director de Obras Publicas'),0,1,'c',0);

$pdf->Output('D','informe.pdf');

?>

