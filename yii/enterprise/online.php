<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <script type="text/javascript" src="jquery.js"></script>

  <script type="text/javascript">
$(document).ready(function() {
    $('input[type=checkbox]').live('click', function(){
        var parent = $(this).parent().attr('id');
        $('#'+parent+' input[type=checkbox]').removeAttr('checked');
        $(this).attr('checked', 'checked');
    });
});
</script> 
</head>

<body>
<?php
session_start();
$cedula2=$_SESSION['cedula2'];
$cedula=$_SESSION['cedula'];

if (isset($_REQUEST['puntos']))
  $puntos=$_REQUEST['puntos'];
else
  $puntos=0;

if (isset($_REQUEST['id_proceso']))
  $id_proceso2=$_REQUEST['id_proceso'];
else
  $id_proceso2=0;

if (isset($_REQUEST['id_cuestionario']))
  $id_cuestionario2=$_REQUEST['id_cuestionario'];
else
  $id_cuestionario2=0;


if($puntos!=0){
$conexion=mysqli_connect("localhost","root","","mydb") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into acum_puntos(punto,cedula,id_proceso_acum,cedula_entrevistador,id_cuestionario_acum) values 
                       ('$puntos','$cedula2','$id_proceso2','$cedula','$id_cuestionario2')")
  or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

}



if (isset($_REQUEST['pos']))
  $inicio=$_REQUEST['pos'];
else
  $inicio=0;
?>
    
    
    
<?php

if (isset($_GET['accion'] )){
    $accion = $_GET['accion'];
} else {
    $accion=0;
       }
       
       //consulta existencia de puntos
       
  include 'conexion3.php';
  $registros4 = mysqli_query($conexion,"select * from acum_puntos WHERE cedula='$cedula2'") or
  die("Problemas en el select:".mysqli_error($conexion));
 if ($reg=mysqli_fetch_array($registros4))
{
     
 }     
       
       
  include 'conexion3.php';
  $registros = mysqli_query($conexion,"select * from proceso WHERE cedula='$cedula2'") or
  die("Problemas en el select:".mysqli_error($conexion));
 if ($reg=mysqli_fetch_array($registros))
{
    $cargo=$reg['cargos_bacante_id_cargo_b'];
    $id_proceso=$reg['id_proceso'];
}
 else {
echo 'No existe entrevista Asignada';    
}
?>

<?php
//limita la paginacion
$registros3 = mysqli_query($conexion,"select * from cuestionario WHERE cargos_id_cargos='$cargo' limit $inicio,2") or
  die("Problemas en el select:".mysqli_error($conexion));   
$impresos=0;
while ($reg3=mysqli_fetch_array($registros3))
{
$impresos++;  
  $pregunta=$reg3['pregunta'];
  
  echo '<h1>Pregunta:</h1><h2><P ALIGN=center>'.utf8_encode($pregunta).'</p></h2>';
 ?>   
    <form action="online.php?modifica=1&pagina=<?php echo $pagina;?>" method="post">
        
          Puntaje:
<select name="puntos">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
        <input type="hidden" name="id_cuestionario" value="<?php echo $reg2['id_cuestionario']; ?>">
        <input type="hidden" name="id_proceso" value="<?php echo $id_proceso; ?>">
        
        <input type="submit" value="Salvar">
        
    </div>    
        
        
    <form>
      <?php

//cerramos carga de cuestionario
  
  
  echo "<hr>";
}
//}
if ($inicio==0)
  echo "Anteriores ";
else
{
  $anterior=$inicio-2;
  
  echo "<a href=\"online.php?pos=$anterior\">Anteriores </a>";
}
if ($impresos==2)
{
  $proximo=$inicio+2;
  echo "<a href=\"online.php?pos=$proximo\">Siguientes</a>";
}
else
  echo "Siguientes";
  
mysqli_close($conexion);
  




    ?>
        <table>
            
</table>

</body>
</html>