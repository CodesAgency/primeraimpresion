<?php
/* @var $this RegistroController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista Users', 'url'=>array('index')),
	array('label'=>'Crear Users', 'url'=>array('create')),
	array('label'=>'Actualizar Users', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Users', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador Users', 'url'=>array('admin')),
);
?>

<h1>Ver Users #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'password2',
		'cedula',
		'nombre',
		'apellido',
		'email',
		'nivel',
		'pregunta_seguridad',
		'respuesta_seguridad',
		'fechaActualiza',
		'paralelo',
	),
)); ?>
