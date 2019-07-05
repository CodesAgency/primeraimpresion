<?php
/* @var $this ProveedoresController */
/* @var $model Proveedores */

$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	$model->id_proveedor=>array('view','id'=>$model->id_proveedor),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista Proveedores', 'url'=>array('index')),
	array('label'=>'Crear Proveedores', 'url'=>array('create')),
	array('label'=>'VerProveedores', 'url'=>array('view', 'id'=>$model->id_proveedor)),
	array('label'=>'Administrador Proveedores', 'url'=>array('admin')),
);
?>

<h1>Actualizar Proveedores <?php echo $model->id_proveedor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>