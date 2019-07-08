<?php
/* @var $this ProveedoresController */
/* @var $model Proveedores */

$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	$model->id_proveedor,
);

$this->menu=array(
	array('label'=>'Lista Proveedores', 'url'=>array('index')),
	array('label'=>'Crear Proveedores', 'url'=>array('create')),
	array('label'=>'Actualizar Proveedores', 'url'=>array('update', 'id'=>$model->id_proveedor)),
	array('label'=>'Eliminar Proveedores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_proveedor),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador Proveedores', 'url'=>array('admin')),
);
?>

<h1>Ver Proveedores #<?php echo $model->id_proveedor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_proveedor',
		'razon_social',
		'ruc',
		'direccion',
		'telefono',
		'nombre_contacto',
		'telefono_contacto',
		'banco_nombre',
		'n_cuenta',
	),
)); ?>
