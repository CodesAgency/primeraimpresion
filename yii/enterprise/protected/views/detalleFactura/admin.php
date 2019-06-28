<?php
/* @var $this DetalleFacturaController */
/* @var $model DetalleFactura */

$this->breadcrumbs=array(
	'Detalle Facturas'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Lista DetalleFactura', 'url'=>array('index')),
	array('label'=>'Crear DetalleFactura', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#detalle-factura-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>AdministradorDetalle Facturas</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'detalle-factura-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_detalle',
		'numero_factura',
		'id_producto',
		'cantidad',
		'precio_venta',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
