<?php
/* @var $this ClientesTipoController */
/* @var $model ClientesTipo */

$this->breadcrumbs=array(
	'Clientes Tipos'=>array('index'),
	$model->id_clientes_tipo=>array('view','id'=>$model->id_clientes_tipo),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista ClientesTipo', 'url'=>array('index')),
	array('label'=>'Crear ClientesTipo', 'url'=>array('create')),
	array('label'=>'VerClientesTipo', 'url'=>array('view', 'id'=>$model->id_clientes_tipo)),
	array('label'=>'Administrador ClientesTipo', 'url'=>array('admin')),
);
?>

<h1>Actualizar ClientesTipo <?php echo $model->id_clientes_tipo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>