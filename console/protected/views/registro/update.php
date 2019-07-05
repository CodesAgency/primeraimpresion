<?php
/* @var $this RegistroController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista Users', 'url'=>array('index')),
	array('label'=>'Crear Users', 'url'=>array('create')),
	array('label'=>'VerUsers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrador Users', 'url'=>array('admin')),
);
?>

<h1>Actualizar Users <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>