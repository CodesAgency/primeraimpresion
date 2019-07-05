<?php
/* @var $this DescuentoController */
/* @var $model Descuento */

$this->breadcrumbs=array(
	'Descuentos'=>array('index'),
	$model->id_descuento,
);

$this->menu=array(
	array('label'=>'Lista Descuento', 'url'=>array('index')),
	array('label'=>'Crear Descuento', 'url'=>array('create')),
	array('label'=>'Actualizar Descuento', 'url'=>array('update', 'id'=>$model->id_descuento)),
	array('label'=>'Eliminar Descuento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_descuento),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador Descuento', 'url'=>array('admin')),
);
?>

<h1>Ver Descuento #<?php echo $model->id_descuento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_descuento',
		'nombre_descuento',
		'descripcion',
		'tipo_cliente',
	),
)); ?>
