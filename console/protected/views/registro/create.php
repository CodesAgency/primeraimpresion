<?php
/* @var $this RegistroController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Users', 'url'=>array('index')),
	array('label'=>'Administrador Users', 'url'=>array('admin')),
);
?>

<h1>Crear Users</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>