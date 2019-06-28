<?php
/* @var $this UsersRolController */
/* @var $model UsersRol */

$this->breadcrumbs=array(
	'Users Rols'=>array('index'),
	$model->id_users_rol,
);

$this->menu=array(
	array('label'=>'Lista UsersRol', 'url'=>array('index')),
	array('label'=>'Crear UsersRol', 'url'=>array('create')),
	array('label'=>'Actualizar UsersRol', 'url'=>array('update', 'id'=>$model->id_users_rol)),
	array('label'=>'Eliminar UsersRol', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_users_rol),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador UsersRol', 'url'=>array('admin')),
);
?>

<h1>Ver UsersRol #<?php echo $model->id_users_rol; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_users_rol',
		'rol',
	),
)); ?>
