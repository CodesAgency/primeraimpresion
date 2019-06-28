<?php
/* @var $this StockSucursalController */
/* @var $model StockSucursal */

$this->breadcrumbs=array(
	'Stock Sucursals'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Lista StockSucursal', 'url'=>array('index')),
	array('label'=>'Crear StockSucursal', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#stock-sucursal-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>AdministradorStock Sucursals</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stock-sucursal-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_stock_sucursal',
		'id_producto',
		'id_sucursal',
		'fecha_ingreso',
		'precio_neto',
		'precio_concostos',
		/*
		'precio_venta1',
		'precio_venta2',
		'precio_venta3',
		'precio_venta4',
		'fecha_caducidad',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
