<?php
/* @var $this ProductsController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->id_producto,
);

$this->menu=array(
	array('label'=>'Lista Products', 'url'=>array('index')),
	array('label'=>'Crear Products', 'url'=>array('create')),
	array('label'=>'Actualizar Products', 'url'=>array('update', 'id'=>$model->id_producto)),
	array('label'=>'Eliminar Products', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_producto),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador Products', 'url'=>array('admin')),
);
?>

<h1>Ver Products #<?php echo $model->id_producto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_producto',
		'codigo_producto',
		'nombre_producto',
		'nombre_comercial',
		'fabricante',
		'aplicacion',
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
	),
)); ?>
