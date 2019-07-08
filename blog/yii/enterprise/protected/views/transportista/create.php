<?php
/* @var $this TransportistaController */
/* @var $model Transportista */

$this->breadcrumbs=array(
	'Transportistas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Transportista', 'url'=>array('index')),
	array('label'=>'Administrador Transportista', 'url'=>array('admin')),
);
?>

<h1>Crear Transportista</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>