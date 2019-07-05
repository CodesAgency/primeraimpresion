<?php
/* @var $this ProductsController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Products', 'url'=>array('index')),
	array('label'=>'Administrador Products', 'url'=>array('admin')),
);
?>

<h1>Crear Products</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>