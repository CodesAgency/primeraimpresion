<?php
/* @var $this MotivoTransladoController */
/* @var $model MotivoTranslado */

$this->breadcrumbs=array(
	'Motivo Translados'=>array('index'),
	$model->id_motivo_translado=>array('view','id'=>$model->id_motivo_translado),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista MotivoTranslado', 'url'=>array('index')),
	array('label'=>'Crear MotivoTranslado', 'url'=>array('create')),
	array('label'=>'VerMotivoTranslado', 'url'=>array('view', 'id'=>$model->id_motivo_translado)),
	array('label'=>'Administrador MotivoTranslado', 'url'=>array('admin')),
);
?>

<h1>Actualizar MotivoTranslado <?php echo $model->id_motivo_translado; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>