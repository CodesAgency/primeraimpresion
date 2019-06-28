<?php
/* @var $this SucursalController */
/* @var $model Sucursal */

$this->breadcrumbs=array(
	'Sucursals'=>array('index'),
	$model->id_sucursal,
);

$this->menu=array(
	array('label'=>'Lista Sucursal', 'url'=>array('index')),
	array('label'=>'Crear Sucursal', 'url'=>array('create')),
	array('label'=>'Actualizar Sucursal', 'url'=>array('update', 'id'=>$model->id_sucursal)),
	array('label'=>'Eliminar Sucursal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_sucursal),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador Sucursal', 'url'=>array('admin')),
);
?>

<h1>Ver Sucursal #<?php echo $model->id_sucursal; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_sucursal',
		'nombre_sucursal',
		'id_responsable',
		'telefono_sucursal',
		'direccion_sucursal',
	),
)); ?>
