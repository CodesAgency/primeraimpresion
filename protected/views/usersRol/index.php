<?php
/* @var $this UsersRolController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users Rols',
);

$this->menu=array(
	array('label'=>'Crear UsersRol', 'url'=>array('create')),
	array('label'=>'Administrar UsersRol', 'url'=>array('admin')),
);
?>

<h1>Users Rols</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
