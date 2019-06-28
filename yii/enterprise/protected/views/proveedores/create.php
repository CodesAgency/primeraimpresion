<?php
/* @var $this ProveedoresController */
/* @var $model Proveedores */

$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Proveedores', 'url'=>array('index')),
	array('label'=>'Administrador Proveedores', 'url'=>array('admin')),
);
?>

<h1>Crear Proveedores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>