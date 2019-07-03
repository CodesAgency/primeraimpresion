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

    <h3><p align="center">Misión</p></h3>
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
                                /*
				array('label'=>'Hoy', 'url'=>array('/categorias/hoy'),'itemOptions'=>array('class'=>'')),
				array('label'=>'Ultimos 3 Dias', 'url'=>array('/categorias/tresultimosdias'),'itemOptions'=>array('class'=>'')),
				array('label'=>'Ultima Semana', 'url'=>array('/categorias/semana'),'itemOptions'=>array('class'=>'')),
				array('label'=>'Ultimos 15 Dias', 'url'=>array('/categorias/quincedias'),'itemOptions'=>array('class'=>'')),
				array('label'=>'Ultimo Mes', 'url'=>array('/categorias/mes'),'itemOptions'=>array('class'=>'')),
				*/
                            
                            
			),
			));
                    
                    
                    ?>
		</div>
        <br>
        
		
		
    </div></td>
    <td>
        <h4><P aling="justify   ">Mision Aqui.</P>
</h4>
        
          
</body>
</html>
