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
<table class="table" width="100%"  border="0">
    <tbody>
  <tr>
    <td  width="20%"> <div class="span3">
		<div class="sidebar-nav">
                    <img src="banner.png" width="100%" height="60">
		  <?php
                 // include 'submenu.php';
                  session_start();
                  $_SESSION['cedula']=yii::app()->user->getState("cedula"); 
                  ?>
                    <?PHP
                   // echo '<h3>Fecha de Publicación</h3>'; 
                    
                    $this->widget('zii.widgets.CMenu', array(
			/*'type'=>'list',*/
			'encodeLabel'=>false,
			'items'=>array(
                                
				array('label'=>'aaaaa', 'url'=>array('/categorias/hoy'),'itemOptions'=>array('class'=>'')),
				array('label'=>'bbb', 'url'=>array('/categorias/tresultimosdias'),'itemOptions'=>array('class'=>'')),
				array('label'=>'ccc', 'url'=>array('/categorias/semana'),'itemOptions'=>array('class'=>'')),
				array('label'=>'ddd', 'url'=>array('/categorias/quincedias'),'itemOptions'=>array('class'=>'')),
				array('label'=>'eeee', 'url'=>array('/categorias/mes'),'itemOptions'=>array('class'=>'')),
				
                            
                            
			),
			));
                    
                    
                    ?>
		</div>
        <br>
        
		
		
    </div></td>
    <td><table width="100%"  border="0">
            <tr>
                <td>
                    
                    <iframe src="fondo.html" width="100%" height="800" frameborder="0" style="border:0" allowfullscreen></iframe></td>
          
            </tr>
             
          
</table>
</table>
<blockquote>&nbsp;</blockquote>
</body>
</html>
