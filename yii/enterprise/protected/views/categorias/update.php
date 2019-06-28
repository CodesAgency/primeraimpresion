<?php
/* @var $this CategoriasController */
/* @var $model Categorias */

$this->breadcrumbs=array(
	'Categoriases'=>array('index'),
	$model->id_categoria=>array('view','id'=>$model->id_categoria),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista Categorias', 'url'=>array('index')),
	array('label'=>'Crear Categorias', 'url'=>array('create')),
	array('label'=>'VerCategorias', 'url'=>array('view', 'id'=>$model->id_categoria)),
	array('label'=>'Administrador Categorias', 'url'=>array('admin')),
);
?>

<h1>Actualizar Categorias <?php echo $model->id_categoria; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>