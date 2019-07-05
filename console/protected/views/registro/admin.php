<?php
/* @var $this RegistroController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Lista Users', 'url'=>array('index')),
	array('label'=>'Crear Users', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>AdministradorUsers</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'password',
		'password2',
		'cedula',
		'nombre',
		/*
		'apellido',
		'email',
		'nivel',
		'pregunta_seguridad',
		'respuesta_seguridad',
		'fechaActualiza',
		'paralelo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
