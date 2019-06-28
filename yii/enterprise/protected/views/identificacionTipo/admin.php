<?php
/* @var $this IdentificacionTipoController */
/* @var $model IdentificacionTipo */

$this->breadcrumbs=array(
	'Identificacion Tipos'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Lista IdentificacionTipo', 'url'=>array('index')),
	array('label'=>'Crear IdentificacionTipo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#identificacion-tipo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>AdministradorIdentificacion Tipos</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'identificacion-tipo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_identificacion',
		'tipo_identificacion',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
