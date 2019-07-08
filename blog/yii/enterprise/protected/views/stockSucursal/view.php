<?php
/* @var $this StockSucursalController */
/* @var $model StockSucursal */

$this->breadcrumbs=array(
	'Stock Sucursals'=>array('index'),
	$model->id_stock_sucursal,
);

$this->menu=array(
	array('label'=>'Lista StockSucursal', 'url'=>array('index')),
	array('label'=>'Crear StockSucursal', 'url'=>array('create')),
	array('label'=>'Actualizar StockSucursal', 'url'=>array('update', 'id'=>$model->id_stock_sucursal)),
	array('label'=>'Eliminar StockSucursal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_stock_sucursal),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador StockSucursal', 'url'=>array('admin')),
);
?>

<h1>Ver StockSucursal #<?php echo $model->id_stock_sucursal; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_stock_sucursal',
		'id_producto',
		'id_sucursal',
		'fecha_ingreso',
		'precio_neto',
		'precio_concostos',
		'precio_venta1',
		'precio_venta2',
		'precio_venta3',
		'precio_venta4',
		'fecha_caducidad',
	),
)); ?>
