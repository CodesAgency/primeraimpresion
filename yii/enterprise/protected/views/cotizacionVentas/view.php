<?php
/* @var $this CotizacionVentasController */
/* @var $model CotizacionVentas */

$this->breadcrumbs=array(
	'Cotizacion Ventases'=>array('index'),
	$model->id_cotizacion_compras,
);

$this->menu=array(
	array('label'=>'Lista CotizacionVentas', 'url'=>array('index')),
	array('label'=>'Crear CotizacionVentas', 'url'=>array('create')),
	array('label'=>'Actualizar CotizacionVentas', 'url'=>array('update', 'id'=>$model->id_cotizacion_compras)),
	array('label'=>'Eliminar CotizacionVentas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cotizacion_compras),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador CotizacionVentas', 'url'=>array('admin')),
);
?>

<h1>Ver CotizacionVentas #<?php echo $model->id_cotizacion_compras; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cotizacion_compras',
		'fecha_cotizacion',
		'id_usuario_cotizante',
		'id_sucursal',
	),
)); ?>
