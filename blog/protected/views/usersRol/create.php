<?php
/* @var $this UsersRolController */
/* @var $model UsersRol */

$this->breadcrumbs=array(
	'Users Rols'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista UsersRol', 'url'=>array('index')),
	array('label'=>'Administrador UsersRol', 'url'=>array('admin')),
);
?>

<h1>Crear UsersRol</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>