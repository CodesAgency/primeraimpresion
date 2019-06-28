<?php
/* @var $this MotivoTransladoController */
/* @var $model MotivoTranslado */

$this->breadcrumbs=array(
	'Motivo Translados'=>array('index'),
	$model->id_motivo_translado,
);

$this->menu=array(
	array('label'=>'Lista MotivoTranslado', 'url'=>array('index')),
	array('label'=>'Crear MotivoTranslado', 'url'=>array('create')),
	array('label'=>'Actualizar MotivoTranslado', 'url'=>array('update', 'id'=>$model->id_motivo_translado)),
	array('label'=>'Eliminar MotivoTranslado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_motivo_translado),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador MotivoTranslado', 'url'=>array('admin')),
);
?>

<h1>Ver MotivoTranslado #<?php echo $model->id_motivo_translado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_motivo_translado',
		'descripcion_motivo',
	),
)); ?>
