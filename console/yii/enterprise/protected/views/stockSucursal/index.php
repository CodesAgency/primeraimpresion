<?php
/* @var $this StockSucursalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stock Sucursals',
);

$this->menu=array(
	array('label'=>'Crear StockSucursal', 'url'=>array('create')),
	array('label'=>'Administrar StockSucursal', 'url'=>array('admin')),
);
?>

<h1>Stock Sucursals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
