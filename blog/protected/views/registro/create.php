<?php
/* @var $this RegistroController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Crear',
);


?>

<h1>Crear Users</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>