<?php
/* @var $this TransportistaController */
/* @var $model Transportista */

$this->breadcrumbs=array(
	'Transportistas'=>array('index'),
	$model->id_transportista,
);

$this->menu=array(
	array('label'=>'Lista Transportista', 'url'=>array('index')),
	array('label'=>'Crear Transportista', 'url'=>array('create')),
	array('label'=>'Actualizar Transportista', 'url'=>array('update', 'id'=>$model->id_transportista)),
	array('label'=>'Eliminar Transportista', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_transportista),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador Transportista', 'url'=>array('admin')),
);
?>

<h1>Ver Transportista #<?php echo $model->id_transportista; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_transportista',
		'nombre_transportista',
		'tipo_identificacion',
		'identificacion_transportista',
		'vehiculo',
		'placa',
		'correo',
		'telefono',
	),
)); ?>
