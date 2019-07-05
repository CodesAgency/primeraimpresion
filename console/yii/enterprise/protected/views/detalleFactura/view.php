<?php
/* @var $this DetalleFacturaController */
/* @var $model DetalleFactura */

$this->breadcrumbs=array(
	'Detalle Facturas'=>array('index'),
	$model->id_detalle,
);

$this->menu=array(
	array('label'=>'Lista DetalleFactura', 'url'=>array('index')),
	array('label'=>'Crear DetalleFactura', 'url'=>array('create')),
	array('label'=>'Actualizar DetalleFactura', 'url'=>array('update', 'id'=>$model->id_detalle)),
	array('label'=>'Eliminar DetalleFactura', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_detalle),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador DetalleFactura', 'url'=>array('admin')),
);
?>

<h1>Ver DetalleFactura #<?php echo $model->id_detalle; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_detalle',
		'numero_factura',
		'id_producto',
		'cantidad',
		'precio_venta',
	),
)); ?>
