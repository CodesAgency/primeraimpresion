<?php
/* @var $this TransportistaController */
/* @var $model Transportista */

$this->breadcrumbs=array(
	'Transportistas'=>array('index'),
	$model->id_transportista=>array('view','id'=>$model->id_transportista),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista Transportista', 'url'=>array('index')),
	array('label'=>'Crear Transportista', 'url'=>array('create')),
	array('label'=>'VerTransportista', 'url'=>array('view', 'id'=>$model->id_transportista)),
	array('label'=>'Administrador Transportista', 'url'=>array('admin')),
);
?>

<h1>Actualizar Transportista <?php echo $model->id_transportista; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>