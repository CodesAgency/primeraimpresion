<?php
/* @var $this ClientesTipoController */
/* @var $model ClientesTipo */

$this->breadcrumbs=array(
	'Clientes Tipos'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Lista ClientesTipo', 'url'=>array('index')),
	array('label'=>'Crear ClientesTipo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#clientes-tipo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>AdministradorClientes Tipos</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'clientes-tipo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_clientes_tipo',
		'nombre_tipo',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
