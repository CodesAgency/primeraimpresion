<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Clientes', 'url'=>array('index')),
	array('label'=>'Administrador Clientes', 'url'=>array('admin')),
);
?>

<h1>Crear Clientes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>