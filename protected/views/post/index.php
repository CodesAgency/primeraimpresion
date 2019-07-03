<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posts',
);

$this->menu=array(
	array('label'=>'Crear Post', 'url'=>array('create')),
	array('label'=>'Administrar Post', 'url'=>array('admin')),
);
?>

<h1>Posts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
