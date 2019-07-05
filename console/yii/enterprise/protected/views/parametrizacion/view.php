<?php
/* @var $this ParametrizacionController */
/* @var $model Parametrizacion */

$this->breadcrumbs=array(
	'Parametrizacions'=>array('index'),
	$model->id_parametrizacion,
);

$this->menu=array(
	array('label'=>'Lista Parametrizacion', 'url'=>array('index')),
	array('label'=>'Crear Parametrizacion', 'url'=>array('create')),
	array('label'=>'Actualizar Parametrizacion', 'url'=>array('update', 'id'=>$model->id_parametrizacion)),
	array('label'=>'Eliminar Parametrizacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_parametrizacion),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador Parametrizacion', 'url'=>array('admin')),
);
?>

<h1>Ver Parametrizacion #<?php echo $model->id_parametrizacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_parametrizacion',
		'descripcion_variable',
		'tabla_fuente',
		'variable',
	),
)); ?>
