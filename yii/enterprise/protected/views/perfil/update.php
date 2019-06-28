<?php
/* @var $this PerfilController */
/* @var $model Perfil */

$this->breadcrumbs=array(
	'Perfils'=>array('index'),
	$model->id_perfil=>array('view','id'=>$model->id_perfil),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista Perfil', 'url'=>array('index')),
	array('label'=>'Crear Perfil', 'url'=>array('create')),
	array('label'=>'VerPerfil', 'url'=>array('view', 'id'=>$model->id_perfil)),
	array('label'=>'Administrador Perfil', 'url'=>array('admin')),
);
?>

<h1>Actualizar Perfil <?php echo $model->id_perfil; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>