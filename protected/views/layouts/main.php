<?php /* @var $this Controller */ ?>

<?php 
// definicion de variables de sesion
$nivel = yii::app()->user->getState("nivel");
$paralelo = yii::app()->user->getState("paralelo");
yii::app()->user->getState("cedula");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
    <h1 class="title"><a href="index.html"><img width="100%" height="150" src="banner.jpg"></a></h1>

	<div id="mainmenu">
		<?php 
                
                
                    //menu por nivel de Usuario
                
        //Nivel uduario Alumno
        if ($nivel==0){
           
        $this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('label'=>'Inicio', 'url'=>array('/site/index')),
			array('label'=>'Ayuda', 'url'=>array('/site/page', 'view'=>'about')),
			array('label'=>'Contacto', 'url'=>array('/site/contact')),
			array('label'=>'iniciar sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Cerrar sesión ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
		),
	));
                
        } 
        elseif($nivel==1)
            {
            
            
        $this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('label'=>'Inicio', 'url'=>array('/site/index')),
			array('label'=>'Usuarios', 'url'=>array('/users/admin')),
                        array('label'=>'iniciar sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Cerrar sesión ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
		),
	));
        
            }
            
            elseif($nivel==2)
            {
            
            
        $this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('label'=>'Inicio', 'url'=>array('/site/index')),			
		        array('label'=>'Asignatura', 'url'=>array('/asignatura/admin')),
		        array('label'=>'Cuestionario', 'url'=>array('/cuestionario/create')),                    
		        array('label'=>'Paralelo', 'url'=>array('/paralelo/admin')),
                        array('label'=>'iniciar sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Cerrar sesión ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
		),
	));
        
            }
    

            
            
            
            
            
            
                ?>
	</div><!-- mainmenu -->
        
        
	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		
		Todos los Derechos Reservados.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
