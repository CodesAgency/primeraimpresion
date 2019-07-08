<?php
/* @var $this PerfilController */
/* @var $model Perfil */

$this->breadcrumbs=array(
	'Perfils'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Lista Perfil', 'url'=>array('index')),
	array('label'=>'Crear Perfil', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#perfil-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>AdministradorPerfils</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'perfil-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_perfil',
		'nombre_empresa',
		'sucursal',
		'direccion',
		'ciudad',
		'codigo_postal',
		/*
		'estado',
		'telefono',
		'email',
		'impuesto',
		'moneda',
		'logo_url',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
