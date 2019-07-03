<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Post', 'url'=>array('index')),
	array('label'=>'Administrador Post', 'url'=>array('admin')),
);
?>

<h1>Crear Post</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>