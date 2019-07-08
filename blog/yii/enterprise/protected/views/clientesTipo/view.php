<?php
/* @var $this ClientesTipoController */
/* @var $model ClientesTipo */

$this->breadcrumbs=array(
	'Clientes Tipos'=>array('index'),
	$model->id_clientes_tipo,
);

$this->menu=array(
	array('label'=>'Lista ClientesTipo', 'url'=>array('index')),
	array('label'=>'Crear ClientesTipo', 'url'=>array('create')),
	array('label'=>'Actualizar ClientesTipo', 'url'=>array('update', 'id'=>$model->id_clientes_tipo)),
	array('label'=>'Eliminar ClientesTipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_clientes_tipo),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador ClientesTipo', 'url'=>array('admin')),
);
?>

<h1>Ver ClientesTipo #<?php echo $model->id_clientes_tipo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_clientes_tipo',
		'nombre_tipo',
		'descripcion',
	),
)); ?>
