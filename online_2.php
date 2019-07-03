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



if (isset($_GET['accion'] )){
    $accion = $_GET['accion'];
} else {
    $accion=0;
       }

?>
<html>
<head>
<title>Prueba online</title>
</head>
<body>

<?php
$npre=0;
$codigo=$_SESSION['codigo'];
$curso=$_SESSION['curso'];
$ci=$_SESSION['cedula'];
include 'conexion3.php';
//numero de paginacion
$registros = mysqli_query($conexion,"select * from asigna_prueba WHERE codigo='$codigo' ORDER BY asignatura") or
  die("Problemas en el select:".mysqli_error($conexion));
  $row_cnt = $registros->num_rows;
  $total_registrada=$row_cnt;
  $por_pagina=1;

if (isset($_GET['pagina'] )){
    $pagina = $_GET['pagina'];
} else {
    $pagina=1;
       }
//la pagina inicia en 0 y se multiplica $por_pagina
       $empieza = ($pagina-1)* $por_pagina;

       
//limita la paginacion
$registros22 = mysqli_query($conexion,"select * from asigna_prueba WHERE codigo='$codigo' ORDER BY id_asigna_prueba ASC LIMIT $empieza,$por_pagina ") or
  die("Problemas en el select:".mysqli_error($conexion));   
  $row_cnt2 = $registros22->num_rows;




while ($reg22=mysqli_fetch_array($registros22))
{
  
if ($reg22['pregunta']==null){
    
    
}
else
{ 
  
    
    
    
echo '<h1>'.'Pregunta:'.$reg22['pregunta'].'</h1>';
?>    
<form action="online_1.php?modifica=1&pagina=<?php echo $pagina;?>" method="post">
<input type="hidden" name="id_cuestionario" value="<?php echo $reg22['id_cuestionario_pregunta']; ?>">
        <br>
        <textarea name="respuesta" rows="10" cols="40"></textarea>
        <br>
        <input type="hidden" name="page" value="<?php echo $id_cuestionario; ?>">
        <input type="hidden" name="n_pregunta" value="<?php echo $reg22['id_cuestionario_pregunta']; ?>">
        <input type="hidden" name="asignatura" value="<?php echo 'tipo abierta';?>">
        <input type="submit" value="Salvar">
        
</form>    
    
    
<?php
}
    
       
    $numerop=$reg22['id_cuestionario_pregunta'];
    $id_cuestionario=$numerop;
    $asignaasignatura=$reg22['asignatura'];

    //echo 'id de asignaprueba'.$reg22['id_cuestionario_pregunta'];
  
  //revisa existencia de la pregunta...si ya esta respondida regresa opcion contestada de lo contrario  muestra formulario normal       
include('conexion.php');
$registros5=mysqli_query($conexion,"select * from acum_nota where codigo='$codigo' and curso='$curso' and ci='$ci' and asignatura='$asignaasignatura' and n_pregunta='$numerop'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg5=mysqli_fetch_array($registros5))
{

    
$checked=$reg5['respuesta'];

if ($checked==1){
$checked1 = 'checked';
$checked2 = '';
$checked3 = '';
$checked4 = '';
}
elseif($checked==2)
{
$checked1 = '';
$checked2 = 'checked';
$checked3 = '';
$checked4 = '';
}
elseif($checked==3)
{
$checked1 = '';
$checked2 = '';
$checked3 = 'checked';
$checked4 = '';
}
elseif($checked==4)
{
$checked1 = '';
$checked2 = '';
$checked3 = '';
$checked4 = 'checked';
}









}
else
{
$checked1 = 'checked';
$checked2 = '';
$checked3 = '';
$checked4 = '';

}
//cierra existencia de pregunta respondida
  
  
  
  
  
//cargamos cuestionario
include 'conexion3.php';
$registros2=mysqli_query($conexion,"select * from cuestionario where n_pregunta='$numerop' and asignatura='$asignaasignatura' ") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg2=mysqli_fetch_array($registros2))
{
 echo 'Asignatura:'.utf8_encode($reg2['asignatura'].'  ');
 echo 'nº pregunta:'.utf8_encode($reg2['n_pregunta']);
    echo '<h2>'."Pregunta:".utf8_encode($reg2['pregunta'])."</h2><br>";
    ?>
   
    
    <form action="online_1.php?modifica=1&pagina=<?php echo $pagina;?>" method="post">
        <div>
            <div ALIGN="center">
               
              <?php if ($reg2['imagen']!=null){
                              
                  ?>
        <hr>
                <img  width="70%" src="data:image/jpg;base64,<?php echo base64_encode($reg2['imagen']); ?>">
         
                   <?php 
              }
              
                  ?>
            
            </div>
           <hr> 
    <div>
        
             <label for="respuesta1">1)<label><input type="radio" name="respuesta" value="1" id="respuesta1" <?php echo $checked1;?> ></label><?php echo '          '.utf8_encode($reg2['respuesta_1']) ?>
         <br>
        
            <label for="respuesta2">2)<label><input type="radio" name="respuesta" value="2" id="respuesta2" <?php echo $checked2;?>></label><?php echo '          '.utf8_encode($reg2['respuesta_2']) ?>
       <br>
        
            <label><td><label for="respuesta3">3)<label><input type="radio" name="respuesta" value="3" id="respuesta3" <?php echo $checked3;?>></label><?php echo '          '.utf8_encode($reg2['respuesta_3']) ?>
        
        <br>
            <td><label for="respuesta4">4)<label><input type="radio" name="respuesta" value="4" id="respuesta4" <?php echo $checked4;?>></label><?php echo '          '.utf8_encode($reg2['respuesta_4']) ?>
        <br>
        
        <input type="hidden" name="id_cuestionario" value="<?php echo $reg2['id_cuestionario']; ?>">
        <input type="hidden" name="page" value="<?php echo $reg2['id_cuestionario']; ?>">
        <input type="hidden" name="n_pregunta" value="<?php echo $numerop; ?>">
        <input type="hidden" name="asignatura" value="<?php echo utf8_encode($reg2['asignatura']);?>">
        <input type="submit" value="Salvar">
        
    </div>    
        
        
    <form>
      <?php
}
else
{
  
}
mysqli_close($conexion);
  
//cerramos carga de cuestionario
  
  
  echo "<hr>";
}
//}

  
    ?>
        <table>
            <tr font="blue" >
        <center><a href="online.php?pagina=1">Primera<a>
<?php
$total_paginas= ceil($total_registrada / $por_pagina);

for($i=1; $i<=$total_paginas; $i++){
    
    echo "&nbsp;&nbsp;&nbsp;<a href='online.php?pagina=".$i."'>".$i."</a>&nbsp;&nbsp;           ";
}
echo "<a href='online.php?pagina=$total_paginas'>Ultima<a>";
echo '<h1><br>Pagina:'.$pagina.'</h1>';
?>
</tr>
</table>

</body>
</html>