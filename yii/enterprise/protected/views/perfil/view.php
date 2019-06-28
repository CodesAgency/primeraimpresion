<?php
/* @var $this PerfilController */
/* @var $model Perfil */

$this->breadcrumbs=array(
	'Perfils'=>array('index'),
	$model->id_perfil,
);

$this->menu=array(
	array('label'=>'Lista Perfil', 'url'=>array('index')),
	array('label'=>'Crear Perfil', 'url'=>array('create')),
	array('label'=>'Actualizar Perfil', 'url'=>array('update', 'id'=>$model->id_perfil)),
	array('label'=>'Eliminar Perfil', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_perfil),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador Perfil', 'url'=>array('admin')),
);
?>

<h1>Ver Perfil #<?php echo $model->id_perfil; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_perfil',
		'nombre_empresa',
		'sucursal',
		'direccion',
		'ciudad',
		'codigo_postal',
		'estado',
		'telefono',
		'email',
		'impuesto',
		'moneda',
		'logo_url',
	),
)); ?>
