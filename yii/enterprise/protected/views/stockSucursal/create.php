<?php
/* @var $this StockSucursalController */
/* @var $model StockSucursal */

$this->breadcrumbs=array(
	'Stock Sucursals'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista StockSucursal', 'url'=>array('index')),
	array('label'=>'Administrador StockSucursal', 'url'=>array('admin')),
);
?>

<h1>Crear StockSucursal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>