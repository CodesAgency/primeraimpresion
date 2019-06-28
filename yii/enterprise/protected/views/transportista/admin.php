<?php
/* @var $this TransportistaController */
/* @var $model Transportista */

$this->breadcrumbs=array(
	'Transportistas'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Lista Transportista', 'url'=>array('index')),
	array('label'=>'Crear Transportista', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#transportista-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>AdministradorTransportistas</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'transportista-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_transportista',
		'nombre_transportista',
		'tipo_identificacion',
		'identificacion_transportista',
		'vehiculo',
		'placa',
		/*
		'correo',
		'telefono',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
