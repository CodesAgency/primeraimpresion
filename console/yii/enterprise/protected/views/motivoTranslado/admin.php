<?php
/* @var $this MotivoTransladoController */
/* @var $model MotivoTranslado */

$this->breadcrumbs=array(
	'Motivo Translados'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Lista MotivoTranslado', 'url'=>array('index')),
	array('label'=>'Crear MotivoTranslado', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#motivo-translado-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>AdministradorMotivo Translados</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'motivo-translado-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_motivo_translado',
		'descripcion_motivo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
