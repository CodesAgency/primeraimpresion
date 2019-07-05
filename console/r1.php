<?php
session_start();
$estado=$_GET['estado'];
//header ("Location: index.php");
$paralelo=$_GET['paralelo'];
$cedula=$_SESSION['cedula'];
$fecha=$_GET['fecha'];
$codigo=$_GET['codigo'];

$_SESSION['paralelo']=$paralelo;
$_SESSION['codigo']=$codigo;
echo $codigo;


//consultar existencia de evaluaciones ya realizada
include 'conexion3.php';

$registros=mysqli_query($conexion,"select *
                        from evaluacion where cedula='$cedula' and codigo='$codigo' and estado=3") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros))
{
  echo "ya existe:".$reg['codigo']."<br>";
  header("Location:index.php?r=evaluacion/evaluacion");
}
else
{
 
    //consulta estado 2 activo
    
    include 'conexion3.php';

$registros2=mysqli_query($conexion,"select *
                        from evaluacion where cedula='$cedula' and codigo='$codigo' and estado=2") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg2=mysqli_fetch_array($registros2))
{
  echo "ya existe:".$reg2['codigo']."<br>";
  header("Location:index.php?r=evaluacion/index");
}
else
{
//inserta si no existe ninguno de los estados   
include("conexion.php");
 $query = "INSERT INTO evaluacion(paralelo,estado,cedula,fecha_prueba,codigo) VALUES
		                 ('$paralelo','$estado','$cedula','$fecha','$codigo')";
    $resultado = $conexion->query($query);
    
    if($resultado){
        header("Location:index.php?r=evaluacion/index");
    }
    else {
    
    echo 'No se Inserto la informacion';    
    
    
    }
 
}
    
    
    
    //cierra consulta de estado 2
    
    

    
 
}
mysqli_close($conexion);





?>


