<?php
/* @var $this UsersRolController */
/* @var $model UsersRol */

$this->breadcrumbs=array(
	'Users Rols'=>array('index'),
	$model->id_users_rol=>array('view','id'=>$model->id_users_rol),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista UsersRol', 'url'=>array('index')),
	array('label'=>'Crear UsersRol', 'url'=>array('create')),
	array('label'=>'VerUsersRol', 'url'=>array('view', 'id'=>$model->id_users_rol)),
	array('label'=>'Administrador UsersRol', 'url'=>array('admin')),
);
?>

<h1>Actualizar UsersRol <?php echo $model->id_users_rol; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>