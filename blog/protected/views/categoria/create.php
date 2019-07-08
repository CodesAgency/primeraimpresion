<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Categoria', 'url'=>array('index')),
	array('label'=>'Administrador Categoria', 'url'=>array('admin')),
);
?>

<h1>Crear Categoria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>