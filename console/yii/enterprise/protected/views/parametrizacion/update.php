<?php
/* @var $this ParametrizacionController */
/* @var $model Parametrizacion */

$this->breadcrumbs=array(
	'Parametrizacions'=>array('index'),
	$model->id_parametrizacion=>array('view','id'=>$model->id_parametrizacion),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista Parametrizacion', 'url'=>array('index')),
	array('label'=>'Crear Parametrizacion', 'url'=>array('create')),
	array('label'=>'VerParametrizacion', 'url'=>array('view', 'id'=>$model->id_parametrizacion)),
	array('label'=>'Administrador Parametrizacion', 'url'=>array('admin')),
);
?>

<h1>Actualizar Parametrizacion <?php echo $model->id_parametrizacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>