<?php
/* @var $this TransportistaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transportistas',
);

$this->menu=array(
	array('label'=>'Crear Transportista', 'url'=>array('create')),
	array('label'=>'Administrar Transportista', 'url'=>array('admin')),
);
?>

<h1>Transportistas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
