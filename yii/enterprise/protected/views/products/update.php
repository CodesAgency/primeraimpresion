<?php
/* @var $this ProductsController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->id_producto=>array('view','id'=>$model->id_producto),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista Products', 'url'=>array('index')),
	array('label'=>'Crear Products', 'url'=>array('create')),
	array('label'=>'VerProducts', 'url'=>array('view', 'id'=>$model->id_producto)),
	array('label'=>'Administrador Products', 'url'=>array('admin')),
);
?>

<h1>Actualizar Products <?php echo $model->id_producto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>