<?php
/* @var $this ListaPreciosController */
/* @var $model ListaPrecios */

$this->breadcrumbs=array(
	'Lista Precioses'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista ListaPrecios', 'url'=>array('index')),
	array('label'=>'Administrador ListaPrecios', 'url'=>array('admin')),
);
?>

<h1>Crear ListaPrecios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>