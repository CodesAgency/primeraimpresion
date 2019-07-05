<?php
/* @var $this ListaPreciosController */
/* @var $model ListaPrecios */

$this->breadcrumbs=array(
	'Lista Precioses'=>array('index'),
	$model->id_lista_precios,
);

$this->menu=array(
	array('label'=>'Lista ListaPrecios', 'url'=>array('index')),
	array('label'=>'Crear ListaPrecios', 'url'=>array('create')),
	array('label'=>'Actualizar ListaPrecios', 'url'=>array('update', 'id'=>$model->id_lista_precios)),
	array('label'=>'Eliminar ListaPrecios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_lista_precios),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador ListaPrecios', 'url'=>array('admin')),
);
?>

<h1>Ver ListaPrecios #<?php echo $model->id_lista_precios; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_lista_precios',
		'descripcion',
		'variable',
	),
)); ?>
