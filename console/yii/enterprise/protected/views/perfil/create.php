<?php
/* @var $this PerfilController */
/* @var $model Perfil */

$this->breadcrumbs=array(
	'Perfils'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Perfil', 'url'=>array('index')),
	array('label'=>'Administrador Perfil', 'url'=>array('admin')),
);
?>

<h1>Crear Perfil</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>