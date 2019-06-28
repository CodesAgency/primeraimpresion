<?php
/* @var $this ProveedoresController */
/* @var $model Proveedores */

$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Lista Proveedores', 'url'=>array('index')),
	array('label'=>'Crear Proveedores', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#proveedores-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>AdministradorProveedores</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proveedores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_proveedor',
		'razon_social',
		'ruc',
		'direccion',
		'telefono',
		'nombre_contacto',
		/*
		'telefono_contacto',
		'banco_nombre',
		'n_cuenta',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
