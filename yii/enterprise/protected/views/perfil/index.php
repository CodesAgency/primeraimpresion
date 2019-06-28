<?php
/* @var $this PerfilController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perfils',
);

$this->menu=array(
	array('label'=>'Crear Perfil', 'url'=>array('create')),
	array('label'=>'Administrar Perfil', 'url'=>array('admin')),
);
?>

<h1>Perfils</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
