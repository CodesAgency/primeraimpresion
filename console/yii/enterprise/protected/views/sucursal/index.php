<?php
/* @var $this SucursalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sucursals',
);

$this->menu=array(
	array('label'=>'Crear Sucursal', 'url'=>array('create')),
	array('label'=>'Administrar Sucursal', 'url'=>array('admin')),
);
?>

<h1>Sucursals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
