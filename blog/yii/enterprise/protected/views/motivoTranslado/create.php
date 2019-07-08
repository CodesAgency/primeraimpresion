<?php
/* @var $this MotivoTransladoController */
/* @var $model MotivoTranslado */

$this->breadcrumbs=array(
	'Motivo Translados'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista MotivoTranslado', 'url'=>array('index')),
	array('label'=>'Administrador MotivoTranslado', 'url'=>array('admin')),
);
?>

<h1>Crear MotivoTranslado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>