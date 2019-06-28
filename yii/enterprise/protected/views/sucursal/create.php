<?php
/* @var $this SucursalController */
/* @var $model Sucursal */

$this->breadcrumbs=array(
	'Sucursals'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Sucursal', 'url'=>array('index')),
	array('label'=>'Administrador Sucursal', 'url'=>array('admin')),
);
?>

<h1>Crear Sucursal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>