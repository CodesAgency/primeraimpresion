<?php
$id=$_REQUEST['id'];
include 'plantilla.php';
require '../conexion3.php';

$registros2=mysqli_query($conexion,"select * from aspirante where id_e='$id'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg2=mysqli_fetch_array($registros2))
{
  $nombre=$reg2['nombre'];
  $apellido=$reg2['apellido'];
  $cedula=$reg2['cedula_ciudadania'];
  $nacionalidad=$reg2['nacionalidad'];
  $libreta_militar=$reg2['libreta_militar'];
  $fecha_nacimiento=$reg2['fecha_nacimiento'];
  $tipo_sangre=$reg2['tipo_sangre'];
  $estado_civil=$reg2['estado_civil'];
  $cargas_familiares=$reg2['cargas_familiares'];
  $direccion=$reg2['direccion'];
  $telefono=$reg2['telefono'];
  $licencia_conducir=$reg2['licencia_conducir'];
  $lic_caduca=$reg2['lic_caduca'];
  $estatura=$reg2['estatura'];
  $peso=$reg2['peso'];
  $correo_electronico=$reg2['correo_electronico'];
  $contac_emergencia=$reg2['contac_emergencia'];
  $contac_emergencia_parentesco=$reg2['contac_emergencia_parentesco'];
  $contac_emergencia_telefono=$reg2['contac_emergencia_telefono'];
}





$pdf= new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(230,230,230);
$pdf->SetFont('Arial', '', '12');
$pdf->Cell(90,6, 'Nombre y Apellido:'.utf8_decode($nombre).'  '.utf8_decode($apellido),1,0,'c',0);
$pdf->Cell(90,6, 'Cedula:'.utf8_decode($cedula),1,1,'c',0);
$pdf->Cell(90,6, 'Nacionalidad:'.utf8_decode($nacionalidad),1,0,'c',0);
$pdf->Cell(90,6, 'Libreta Militar:'.utf8_decode($libreta_militar),1,1,'c',0);
$pdf->Cell(90,6, 'Fecha de Nacimiento:'.utf8_decode($fecha_nacimiento),1,0,'c',0);
$pdf->Cell(90,6, 'Tipo de Sangre:'.utf8_decode($tipo_sangre),1,1,'c',0);
$pdf->Cell(90,6, 'Estado Civil:'.utf8_decode($estado_civil),1,0,'c',0);
$pdf->Cell(90,6, 'Numero de Cargas familiares:'.utf8_decode($cargas_familiares),1,1,'c',0);
$pdf->Cell(90,6, 'Direccion:'.utf8_decode($direccion),1,0,'c',0);
$pdf->Cell(90,6, 'Telefono:'.utf8_decode($telefono),1,1,'c',0);
$pdf->Cell(90,6, 'Licencia:'.utf8_decode($licencia_conducir),1,0,'c',0);
$pdf->Cell(90,6, 'Caduca:'.utf8_decode($lic_caduca),1,1,'c',0);
$pdf->Cell(90,6, 'Estatura:'.utf8_decode($estatura),1,0,'c',0);
$pdf->Cell(90,6, 'peso:'.utf8_decode($peso),1,1,'c',0);
$pdf->Cell(90,6, 'Correo:'.utf8_decode($correo_electronico),1,0,'c',0);
$pdf->Cell(90,6, 'Contacto de Emergencia:'.utf8_decode($contac_emergencia),1,1,'c',0);
$pdf->Cell(90,6, 'Parentesco:'.utf8_decode($contac_emergencia_parentesco),1,0,'c',0);
$pdf->Cell(90,6, 'Telefono:'.utf8_decode($contac_emergencia_telefono),1,1,'c',0);

$pdf->Cell(180,8,'                                                     Datos Academicos',1,1,'c',0);
$pdf->Cell(40,6, 'Nivel de Estudio',1,0,'c',0);
$pdf->Cell(60,6, utf8_decode('Institución'),1,0,'c',0);
$pdf->Cell(12,6, utf8_decode('Año'),1,0,'c',0);
$pdf->Cell(68,6, 'Titulo',1,1,'c',0);


$registros3=mysqli_query($conexion,"select * from estudios where ASPIRANTE_id_e=6") or
  die("Problemas en el select:".mysqli_error($conexion));

while ($reg3=mysqli_fetch_array($registros3))
{
$pdf->Cell(40,6, utf8_decode($reg3['nivel_estudio']),1,0,'c',0);
$pdf->Cell(60,6, utf8_decode($reg3['institucion']),1,0,'c',0);   
$pdf->Cell(12,6, utf8_decode($reg3['ano_culminacion']),1,0,'c',0);
$pdf->Cell(68,6, utf8_decode($reg3['titulo']),1,1,'c',0);
}

$pdf->Cell(180,8,'                                                     Datos de experiencia laboral',1,1,'c',0);

$registros3=mysqli_query($conexion,"select * from experiencia_laboral where aspirante_id_e=6") or
  die("Problemas en el select:".mysqli_error($conexion));

while ($reg3=mysqli_fetch_array($registros3))
{

$pdf->Cell(180,6, 'Empresa:  '.utf8_decode($reg3['empresa']),1,1,'c',0);
$pdf->Cell(90,6, 'Motivo:  '.utf8_decode($reg3['motivo_salida']),1,0,'c',0);   
$pdf->Cell(90,6, utf8_decode('Año:').utf8_decode($reg3['ano_culminacion']),1,1,'c',0);
}
$pdf->Cell(180,8,'                                                     Referencias Personal',1,1,'c',0);

$registros4=mysqli_query($conexion,"select * from referencias_personales where aspirante_id_e=6") or
  die("Problemas en el select:".mysqli_error($conexion));

while ($reg4=mysqli_fetch_array($registros4))
{

$pdf->Cell(100,6, 'Nombre:  '.utf8_decode($reg4['nombre_referencia']),1,0,'c',0);
$pdf->Cell(80,6, 'Telefono:  '.utf8_decode($reg4['telefono_referencia']),1,0,'c',0);
}

$pdf->Output('D','empleado.pdf');

?>

