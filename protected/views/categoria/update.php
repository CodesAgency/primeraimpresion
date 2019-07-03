<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista Categoria', 'url'=>array('index')),
	array('label'=>'Crear Categoria', 'url'=>array('create')),
	array('label'=>'VerCategoria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrador Categoria', 'url'=>array('admin')),
);
?>

<h1>Actualizar Categoria <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>