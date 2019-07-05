<?php
/* @var $this SucursalController */
/* @var $model Sucursal */

$this->breadcrumbs=array(
	'Sucursals'=>array('index'),
	$model->id_sucursal=>array('view','id'=>$model->id_sucursal),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista Sucursal', 'url'=>array('index')),
	array('label'=>'Crear Sucursal', 'url'=>array('create')),
	array('label'=>'VerSucursal', 'url'=>array('view', 'id'=>$model->id_sucursal)),
	array('label'=>'Administrador Sucursal', 'url'=>array('admin')),
);
?>

<h1>Actualizar Sucursal <?php echo $model->id_sucursal; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>