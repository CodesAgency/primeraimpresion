<?php
/* @var $this IdentificacionTipoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Identificacion Tipos',
);

$this->menu=array(
	array('label'=>'Crear IdentificacionTipo', 'url'=>array('create')),
	array('label'=>'Administrar IdentificacionTipo', 'url'=>array('admin')),
);
?>

<h1>Identificacion Tipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
