<?php
/* @var $this UsersRolController */
/* @var $model UsersRol */

$this->breadcrumbs=array(
	'Users Rols'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Lista UsersRol', 'url'=>array('index')),
	array('label'=>'Crear UsersRol', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#users-rol-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>AdministradorUsers Rols</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-rol-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_users_rol',
		'rol',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
