<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Administrador de Usuarios', 'url'=>array('admin')),
);
?>

<h1>Ingresar Usuarios</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>