<?php
/* @var $this ComentariosController */
/* @var $model Comentarios */

$this->breadcrumbs=array(
	'Comentarioses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista Comentarios', 'url'=>array('index')),
	array('label'=>'Crear Comentarios', 'url'=>array('create')),
	array('label'=>'Actualizar Comentarios', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Comentarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador Comentarios', 'url'=>array('admin')),
);
?>

<h1>Ver Comentarios #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'comentario',
		'email',
		'post_id',
		'creado',
		'status',
		'user_id',
		'user_img',
	),
)); ?>
