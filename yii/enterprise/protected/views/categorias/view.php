<?php
/* @var $this CategoriasController */
/* @var $model Categorias */

$this->breadcrumbs=array(
	'Categoriases'=>array('index'),
	$model->id_categoria,
);

$this->menu=array(
	array('label'=>'Lista Categorias', 'url'=>array('index')),
	array('label'=>'Crear Categorias', 'url'=>array('create')),
	array('label'=>'Actualizar Categorias', 'url'=>array('update', 'id'=>$model->id_categoria)),
	array('label'=>'Eliminar Categorias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_categoria),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador Categorias', 'url'=>array('admin')),
);
?>

<h1>Ver Categorias #<?php echo $model->id_categoria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_categoria',
		'nombre_categoria',
		'descripcion_categoria',
		'date_added',
	),
)); ?>
