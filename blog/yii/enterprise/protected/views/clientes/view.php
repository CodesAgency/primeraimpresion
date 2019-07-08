<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id_cliente,
);

$this->menu=array(
	array('label'=>'Lista Clientes', 'url'=>array('index')),
	array('label'=>'Crear Clientes', 'url'=>array('create')),
	array('label'=>'Actualizar Clientes', 'url'=>array('update', 'id'=>$model->id_cliente)),
	array('label'=>'Eliminar Clientes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cliente),'confirm'=>'¿Estás seguro de que quieres eliminar este elemento?')),
	array('label'=>'Administrador Clientes', 'url'=>array('admin')),
);
?>

<h1>Ver Clientes #<?php echo $model->id_cliente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cliente',
		'nombre_cliente',
		'tipo_cliente',
		'identificacio1',
		'identificacion',
		'telefono_cliente',
		'telefono_cliente2',
		'email_cliente',
		'direccion_cliente',
		'status_cliente',
		'id_lista_precio',
		'date_added',
		'fecha_nacimiento',
		'nombre_contacto',
		'telefono_contacto',
		'ciudad',
		'regimen_tributario',
		'forma_pago',
		'dias_credito',
		'id_descuento',
		'parametrizacion',
	),
)); ?>
