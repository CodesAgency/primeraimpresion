<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Lista Clientes', 'url'=>array('index')),
	array('label'=>'Crear Clientes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#clientes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>AdministradorClientes</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'clientes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_cliente',
		'nombre_cliente',
		'tipo_cliente',
		'identificacio1',
		'identificacion',
		'telefono_cliente',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
