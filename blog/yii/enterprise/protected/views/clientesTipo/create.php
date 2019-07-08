<?php
/* @var $this ClientesTipoController */
/* @var $model ClientesTipo */

$this->breadcrumbs=array(
	'Clientes Tipos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista ClientesTipo', 'url'=>array('index')),
	array('label'=>'Administrador ClientesTipo', 'url'=>array('admin')),
);
?>

<h1>Crear ClientesTipo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>