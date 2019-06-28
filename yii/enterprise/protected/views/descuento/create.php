<?php
/* @var $this DescuentoController */
/* @var $model Descuento */

$this->breadcrumbs=array(
	'Descuentos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Descuento', 'url'=>array('index')),
	array('label'=>'Administrador Descuento', 'url'=>array('admin')),
);
?>

<h1>Crear Descuento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>