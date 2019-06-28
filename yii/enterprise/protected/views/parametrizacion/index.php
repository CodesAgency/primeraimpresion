<?php
/* @var $this ParametrizacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Parametrizacions',
);

$this->menu=array(
	array('label'=>'Crear Parametrizacion', 'url'=>array('create')),
	array('label'=>'Administrar Parametrizacion', 'url'=>array('admin')),
);
?>

<h1>Parametrizacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
