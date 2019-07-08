<?php
/* @var $this StockSucursalController */
/* @var $model StockSucursal */

$this->breadcrumbs=array(
	'Stock Sucursals'=>array('index'),
	$model->id_stock_sucursal=>array('view','id'=>$model->id_stock_sucursal),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista StockSucursal', 'url'=>array('index')),
	array('label'=>'Crear StockSucursal', 'url'=>array('create')),
	array('label'=>'VerStockSucursal', 'url'=>array('view', 'id'=>$model->id_stock_sucursal)),
	array('label'=>'Administrador StockSucursal', 'url'=>array('admin')),
);
?>

<h1>Actualizar StockSucursal <?php echo $model->id_stock_sucursal; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>