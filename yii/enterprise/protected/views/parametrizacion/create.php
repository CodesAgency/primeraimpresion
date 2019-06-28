<?php
/* @var $this ParametrizacionController */
/* @var $model Parametrizacion */

$this->breadcrumbs=array(
	'Parametrizacions'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Parametrizacion', 'url'=>array('index')),
	array('label'=>'Administrador Parametrizacion', 'url'=>array('admin')),
);
?>

<h1>Crear Parametrizacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>