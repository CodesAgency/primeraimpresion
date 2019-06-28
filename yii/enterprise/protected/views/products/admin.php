<?php
/* @var $this ProductsController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Lista Products', 'url'=>array('index')),
	array('label'=>'Crear Products', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#products-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>AdministradorProducts</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'products-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_producto',
		'codigo_producto',
		'nombre_producto',
		'nombre_comercial',
		'fabricante',
		'aplicacion',
		/*
		'unidad',
		'piezas',
		'calidad',
		'codigo_qr',
		'producto_alterno',
		'tiempo_garantia',
		'tipo',
		'productsPeso',
		'products_dimenciones',
		'status_producto',
		'date_added',
		'precio_producto',
		'id_categoria',
		'stock',
		'condiciones_especiales',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
