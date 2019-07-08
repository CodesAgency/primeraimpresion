<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id_cliente=>array('view','id'=>$model->id_cliente),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista Clientes', 'url'=>array('index')),
	array('label'=>'Crear Clientes', 'url'=>array('create')),
	array('label'=>'VerClientes', 'url'=>array('view', 'id'=>$model->id_cliente)),
	array('label'=>'Administrador Clientes', 'url'=>array('admin')),
);
?>

<h1>Actualizar Clientes <?php echo $model->id_cliente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>