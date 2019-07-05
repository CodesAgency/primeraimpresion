<?php
/* @var $this IdentificacionTipoController */
/* @var $model IdentificacionTipo */

$this->breadcrumbs=array(
	'Identificacion Tipos'=>array('index'),
	$model->id_identificacion=>array('view','id'=>$model->id_identificacion),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista IdentificacionTipo', 'url'=>array('index')),
	array('label'=>'Crear IdentificacionTipo', 'url'=>array('create')),
	array('label'=>'VerIdentificacionTipo', 'url'=>array('view', 'id'=>$model->id_identificacion)),
	array('label'=>'Administrador IdentificacionTipo', 'url'=>array('admin')),
);
?>

<h1>Actualizar IdentificacionTipo <?php echo $model->id_identificacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>