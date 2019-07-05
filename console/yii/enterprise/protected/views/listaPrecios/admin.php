<?php
/* @var $this ListaPreciosController */
/* @var $model ListaPrecios */

$this->breadcrumbs=array(
	'Lista Precioses'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Lista ListaPrecios', 'url'=>array('index')),
	array('label'=>'Crear ListaPrecios', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lista-precios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>AdministradorLista Precioses</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'lista-precios-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_lista_precios',
		'descripcion',
		'variable',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
