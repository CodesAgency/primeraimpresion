<?php
$id_informe=$_GET['id'];
include 'plantilla.php';
require '../conexion3.php';

$registros2=mysqli_query($conexion,"select * from informe_diario_actividades where id_informe_d_a='$id_informe'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg2=mysqli_fetch_array($registros2))
{
  $n_informe=$reg2['id_informe_d_a'];
  $nombre=$reg2['nombre'];
  $fecha=$reg2['fecha'];
  $cargo=$reg2['cargo'];
  $maquina=$reg2['maquina'];
  $combustible=$reg2['combustible'];
  $horometro=$reg2['horometro'];
  $n_ficha=$reg2['n_ficha'];
  $registro=$reg2['n_registro'];
  $trabajos_realizados=$reg2['trabajos_realizados'];
  $novedades=$reg2['novedades'];
  $chofer=$reg2['chofer'];
  $director_obras_publica=$reg2['director_obras_publica'];
    
  
}

$pdf= new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(230,230,230);
$pdf->SetFont('Arial', 'B', '12');
$pdf->Cell(180,6, utf8_decode('                                             Informe de los Daños de los Bienes:').utf8_decode('   Informe Nº').utf8_decode($id_informe),1,1,'c',0);
$pdf->SetFont('Arial', 'B', '12');

$pdf->Cell(90,6, 'Nombre:'. html_entity_decode($nombre),1,0,'c',0);
$pdf->Cell(90,6, utf8_decode('Fecha:').html_entity_decode($fecha),1,1,'c',0);

$pdf->Cell(90,6, 'Cargo:'.html_entity_decode($cargo),1,0,'c',0);
$pdf->Cell(90,6, utf8_decode('Maquina:').html_entity_decode($maquina),1,1,'c',0);


$pdf->Cell(90,6, 'Combustible:'.html_entity_decode($combustible),1,0,'c',0);
$pdf->Cell(90,6, utf8_decode('Horómetro:').html_entity_decode($horometro),1,1,'c',0);


$pdf->Cell(90,6, 'Nº de Ficha:'.utf8_decode($n_ficha),1,0,'c',0);
$pdf->Cell(90,6, utf8_decode('Nº de Registro:').html_entity_decode($registro),1,1,'c',0);

$pdf->Cell(180,6, utf8_decode('Trabajos Realizados:'),1,1,'c',0);
$pdf->MultiCell(180,6,html_entity_decode($trabajos_realizados) ,1,'c',0);

$pdf->Cell(180,6, utf8_decode('Novedades:'),1,1,'c',0);
$pdf->MultiCell(180,6,html_entity_decode($novedades) ,1,'c',0);


$pdf->Cell(90,24, utf8_decode('                   __________________________'),0,0,'c',0);
$pdf->Cell(90,24, utf8_decode('                   __________________________'),0,1,'c',0);
$pdf->Cell(90,6, utf8_decode('                       Chofer:').$chofer,0,0,'c',0);
$pdf->Cell(90,6, utf8_decode('           Director de Obras').$director_obras_publica,0,1,'c',0);




$pdf->Output('D','informe.pdf');

?>

