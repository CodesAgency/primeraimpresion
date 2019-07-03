<?php
/* @var $this ComentariosController */
/* @var $model Comentarios */

$this->breadcrumbs=array(
	'Comentarioses'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Comentarios', 'url'=>array('index')),
	array('label'=>'Administrador Comentarios', 'url'=>array('admin')),
);
?>

<h1>Crear Comentarios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>