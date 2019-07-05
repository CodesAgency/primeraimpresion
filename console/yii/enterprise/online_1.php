<?php
session_start();

$codigo=$_SESSION['codigo'];
$respuesta=$_REQUEST['respuesta'];
$paralelo=$_SESSION['paralelo'];
$ci=$_SESSION['ci'];
$id_cuestionario=$_REQUEST['id_cuestionario'];
    echo '<br>';
    echo 'el id del cuestionario es:'.$id_cuestionario;
include('conexion.php');
$registros2=mysqli_query($conexion,"select * from cuestionario where id_cuestionario='$id_cuestionario'") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg2=mysqli_fetch_array($registros2))
{
echo '<br>';
$respuesta_correpta=$reg2['respuesta_correcta'];
echo $reg2['respuesta_correcta'];
echo 'Respuesta correpta es:'.$respuesta_correpta;
echo "Insertar.";
}
 else {
echo 'no consulta revisar';    
}

if($respuesta_correpta==$respuesta)
{
    $punto=1;

}
else
{
    $punto=0;
}
echo 'Punto es igual a:'.$punto;
 


if (isset($_GET['pagina'] )){
    $pagina = $_GET['pagina'];
} else {
    $pagina=1;
       }
 echo '<br>';      
echo 'Pagina es:'.$pagina;  
echo '<br>';
echo 'codigo de prueba es:'.$codigo; 
echo '<br>';
echo 'Respuesta fue la Numero'.$respuesta;
echo '<br>';
echo 'id del cuestionario es:'.$id_cuestionario;
//consulta respuesta correpta en el cuestionario


//consulta si existe ya la respuesta 

include('conexion.php');
$registros=mysqli_query($conexion,"select * from acum_nota where codigo='$codigo' and paralelo='$paralelo' and ci='$ci' and id_cuestionario='$id_cuestionario'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros))
{
echo '<br>';
echo "modificar";

header ("Location: online.php?accion=1&pagina=$pagina");

        mysqli_query($conexion, "update acum_nota
                          set respuesta='$respuesta', punto='$punto'  
                        where codigo='$codigo' and paralelo='$paralelo' and ci='$ci' and id_cuestionario='$id_cuestionario'") or
  die("Problemas en el select:".mysqli_error($conexion));
  echo "El mail fue modificado con exito";

}
else
{
    echo '<br>';
echo "insertar";
   //insertar respuesta
 header ("Location: online.php?accion=1&pagina=$pagina");
$asignatura1 = utf8_decode($_REQUEST[asignatura]);

  mysqli_query($conexion,"insert into acum_nota(id_cuestionario,respuesta,respuesta_correpta,codigo,paralelo,ci,punto, n_pregunta, asignatura) values 
                       ('$id_cuestionario','$respuesta','$respuesta_correpta','$codigo','$paralelo','$ci','$punto', '$_REQUEST[n_pregunta]', '$asignatura1')")
  or die("Problemas en el select".mysqli_error($conexion));

}
mysqli_close($conexion);

//cierra consulta de existencia de respuesta
?>
<html>
<head>

</head>
<body>

</body>
</html>