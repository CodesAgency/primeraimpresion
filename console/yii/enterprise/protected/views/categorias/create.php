<?php
/* @var $this CategoriasController */
/* @var $model Categorias */

$this->breadcrumbs=array(
	'Categoriases'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Categorias', 'url'=>array('index')),
	array('label'=>'Administrador Categorias', 'url'=>array('admin')),
);
?>

<h1>Crear Categorias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>