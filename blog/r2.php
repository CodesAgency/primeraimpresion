<?php
session_start();
$estado=$_GET['estado'];
$cedula=$cedula=$_SESSION['cedula'];
//header ("Location: index.php");
$paralelo=$_SESSION['paralelo'];
$cedula=$_GET['cedula'];
$codigo=$_SESSION['codigo'];
echo $codigo;

//consultar existencia de evaluaciones ya realizada
include 'conexion3.php';

$registros=mysqli_query($conexion,"select *
                        from evaluacion where cedula='$cedula' and codigo='$codigo'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros))
{
  echo "ya existe:".$reg['codigo']."<br>";
  
  
}
else
{
  echo "No existe .";

include("conexion3.php");
 
$registros=mysqli_query($conexion,"update evaluacion
                          set estado=
                        where codigo='$codigo' and cedula='$cedula'") or
  die("Problemas en el select:".mysqli_error($conexion));
  echo "El curso fue modificado con exito";

 
}
mysqli_close($conexion);





?>


