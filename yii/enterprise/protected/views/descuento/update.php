<?php
/* @var $this DescuentoController */
/* @var $model Descuento */

$this->breadcrumbs=array(
	'Descuentos'=>array('index'),
	$model->id_descuento=>array('view','id'=>$model->id_descuento),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista Descuento', 'url'=>array('index')),
	array('label'=>'Crear Descuento', 'url'=>array('create')),
	array('label'=>'VerDescuento', 'url'=>array('view', 'id'=>$model->id_descuento)),
	array('label'=>'Administrador Descuento', 'url'=>array('admin')),
);
?>

<h1>Actualizar Descuento <?php echo $model->id_descuento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>