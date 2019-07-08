<?php
/* @var $this ComentariosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comentarioses',
);

$this->menu=array(
	array('label'=>'Crear Comentarios', 'url'=>array('create')),
	array('label'=>'Administrar Comentarios', 'url'=>array('admin')),
);
?>

<h1>Comentarioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
