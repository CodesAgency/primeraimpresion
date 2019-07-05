<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista Post', 'url'=>array('index')),
	array('label'=>'Crear Post', 'url'=>array('create')),
	array('label'=>'VerPost', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrador Post', 'url'=>array('admin')),
);
?>

<h1>Actualizar Post <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>