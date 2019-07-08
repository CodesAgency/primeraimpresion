<?php
/* @var $this CotizacionVentasController */
/* @var $model CotizacionVentas */

$this->breadcrumbs=array(
	'Cotizacion Ventases'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Lista CotizacionVentas', 'url'=>array('index')),
	array('label'=>'Crear CotizacionVentas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cotizacion-ventas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>AdministradorCotizacion Ventases</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cotizacion-ventas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_cotizacion_compras',
		'fecha_cotizacion',
		'id_usuario_cotizante',
		'id_sucursal',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
