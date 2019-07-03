<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista Post', 'url'=>array('index')),
	array('label'=>'Crear Post', 'url'=>array('create')),
	array('label'=>'Actualizar Post', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador Post', 'url'=>array('admin')),
);
?>

<h1>Ver Post #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'titulo',
		'descripcion_breve',
		'contenido',
		'localimg',
		'videoUrl',
		'creado',
		'status',
		'categoria_id',
		'users_id',
	),
)); ?>
