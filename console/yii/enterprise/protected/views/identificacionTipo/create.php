<?php
/* @var $this IdentificacionTipoController */
/* @var $model IdentificacionTipo */

$this->breadcrumbs=array(
	'Identificacion Tipos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista IdentificacionTipo', 'url'=>array('index')),
	array('label'=>'Administrador IdentificacionTipo', 'url'=>array('admin')),
);
?>

<h1>Crear IdentificacionTipo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>