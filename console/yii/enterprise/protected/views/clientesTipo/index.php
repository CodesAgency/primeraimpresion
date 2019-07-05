<?php
/* @var $this ClientesTipoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clientes Tipos',
);

$this->menu=array(
	array('label'=>'Crear ClientesTipo', 'url'=>array('create')),
	array('label'=>'Administrar ClientesTipo', 'url'=>array('admin')),
);
?>

<h1>Clientes Tipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
