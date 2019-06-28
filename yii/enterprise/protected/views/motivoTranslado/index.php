<?php
/* @var $this MotivoTransladoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Motivo Translados',
);

$this->menu=array(
	array('label'=>'Crear MotivoTranslado', 'url'=>array('create')),
	array('label'=>'Administrar MotivoTranslado', 'url'=>array('admin')),
);
?>

<h1>Motivo Translados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
