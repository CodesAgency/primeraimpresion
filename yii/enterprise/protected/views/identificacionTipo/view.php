<?php
/* @var $this IdentificacionTipoController */
/* @var $model IdentificacionTipo */

$this->breadcrumbs=array(
	'Identificacion Tipos'=>array('index'),
	$model->id_identificacion,
);

$this->menu=array(
	array('label'=>'Lista IdentificacionTipo', 'url'=>array('index')),
	array('label'=>'Crear IdentificacionTipo', 'url'=>array('create')),
	array('label'=>'Actualizar IdentificacionTipo', 'url'=>array('update', 'id'=>$model->id_identificacion)),
	array('label'=>'Eliminar IdentificacionTipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_identificacion),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador IdentificacionTipo', 'url'=>array('admin')),
);
?>

<h1>Ver IdentificacionTipo #<?php echo $model->id_identificacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_identificacion',
		'tipo_identificacion',
		'descripcion',
	),
)); ?>
