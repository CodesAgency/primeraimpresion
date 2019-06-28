<?php
/* @var $this ParametrizacionController */
/* @var $model Parametrizacion */

$this->breadcrumbs=array(
	'Parametrizacions'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Lista Parametrizacion', 'url'=>array('index')),
	array('label'=>'Crear Parametrizacion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#parametrizacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>AdministradorParametrizacions</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'parametrizacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_parametrizacion',
		'descripcion_variable',
		'tabla_fuente',
		'variable',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
