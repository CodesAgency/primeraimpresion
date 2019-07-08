<?php
/* @var $this SiteController */

$this->breadcrumbs=array(
	'Site'=>array('/site'),
	'Mision',
);
?>
<?php
if (isset($_REQUEST['pos']))
  $inicio=$_REQUEST['pos'];
else
  $inicio=0;
?>

<?php
if (isset($_REQUEST['id']))
  $id=$_REQUEST['id'];
else
  $id=0;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
           
<body>

    <h3><p align="center">Visión</p></h3>
    <table class="table" width="100%"  border="0">
    <tbody>
  <tr>
    <td  width="20%"> <div class="span3">
		<div class="sidebar-nav">
                    <img src="banner.png" width="100%" height="60">
		  <?php
                  include 'submenu.php';
                  ?>
                    <?PHP
                    echo '<h3>Fecha de Publicación</h3>'; 
                    
                    $this->widget('zii.widgets.CMenu', array(
			/*'type'=>'list',*/
			'encodeLabel'=>false,
			'items'=>array(
                                
				array('label'=>'Hoy', 'url'=>array('/categorias/hoy'),'itemOptions'=>array('class'=>'')),
				array('label'=>'Ultimos 3 Dias', 'url'=>array('/categorias/tresultimosdias'),'itemOptions'=>array('class'=>'')),
				array('label'=>'Ultima Semana', 'url'=>array('/categorias/semana'),'itemOptions'=>array('class'=>'')),
				array('label'=>'Ultimos 15 Dias', 'url'=>array('/categorias/quincedias'),'itemOptions'=>array('class'=>'')),
				array('label'=>'Ultimo Mes', 'url'=>array('/categorias/mes'),'itemOptions'=>array('class'=>'')),
				
                            
                            
			),
			));
                    
                    
                    ?>
		</div>
        <br>
        
		
		
    </div></td>
    <td>
        <h4><P aling="justify   ">Ser una empresa LIDER, que le permita competir en el mercado con productos y servicios de calidad que superen las expectativas de los clientes..</P>

</h4>
        <table width="100%"  border="0">
      <tr>
        <td><table width="100%">
          <tr>
            <h3>
                
              <P align="center">Trabajos Vacantes</p>
              <br>
            </h3>
          </tr>
          <?php
   ini_set('date.timezone','America/Bogota'); 

  $dia = date('d');
        $mes = date('m');
        $ano = date('Y');
        $fecha = "$ano-$mes-$dia";
?>
          
          <h1><p align="center"><?php echo 'Categoria de Empleos Vacantes Publicados recientemente '; ?></p></h1>
          
          <br>
          <tr>
          
            <td><h4><P align="center">Fecha de Publicaci&oacute;n</P></h4></td>
            <td><h4><P align="center">Cargo Vacante</P></h4></td>
            <td><h4><P align="center">Descripci&oacute;n del Cargo</P></h4></td>
            <td><h4><P align="center">Funciones a Desempe&ntilde;ar</P></h4></td>
            <td><h4><P align="center">Fecha de Inicio de Vacante</P></h4></td>
            <td><h4><P align="center">Fecha Final</P></td>
          
          </tr>
          <?php 
$fecha = date('Y-m-j');
$nuevafecha = strtotime ( '-0 day' , strtotime ( $fecha ) ) ;
$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
 




include 'conexion3.php';
$registros=mysqli_query($conexion,"select * from cargos_vacantes WHERE estado=1 limit $inicio,2") or
 die("Problemas en el select:".mysqli_error($conexion));

while ($reg=mysqli_fetch_array($registros))
{
    $registros2=mysqli_query($conexion,"select * from cargos WHERE id_cargos='$reg[cargos_id_cargos]'") or
                 die("Problemas en el select:".mysqli_error($conexion));
                
                    if ($reg2=mysqli_fetch_array($registros2))
                    {
                    echo '<tr><td width="10%"><P align="center">'.$reg['fecha'].'</p></td><td><br><P align="center">'.$reg2['nombre_cargo'].' </p><br></td><td><br><P align="center">'.$reg2['descripcion_cargo'].' </p><br></td><td><br><P align="center">'.$reg2['funciones_cargo'].' </p><br></td><td><br><P align="center" width="10%">'.$reg['tiempo_vacante'].' </p><br></td><td><br><P align="center" width="10%">'.$reg['tiempo_vacante2'].' </p><br></td></tr>';    
                    }
    
 
}
if ($inicio==0)
  echo "anteriores ";
else
{
  $anterior=$inicio-2;
  echo "<a href=\"index.php?pos=$anterior\">Anteriores </a>";
}
if ($impresos==2)
{
  $proximo=$inicio+2;
  echo "<a href=\"index.php?pos=$proximo\">Siguientes</a>";
}
else
  echo "siguientes";
mysqli_close($conexion);

?>     </tbody>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<blockquote>&nbsp;</blockquote>
</body>
</html>
