<?php
/* @var $this ListaPreciosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lista Precioses',
);

$this->menu=array(
	array('label'=>'Crear ListaPrecios', 'url'=>array('create')),
	array('label'=>'Administrar ListaPrecios', 'url'=>array('admin')),
);
?>

<h1>Lista Precioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
