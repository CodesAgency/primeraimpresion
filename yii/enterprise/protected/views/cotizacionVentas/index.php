<?php
/* @var $this CotizacionVentasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cotizacion Ventases',
);

$this->menu=array(
	array('label'=>'Crear CotizacionVentas', 'url'=>array('create')),
	array('label'=>'Administrar CotizacionVentas', 'url'=>array('admin')),
);
?>

<h1>Cotizacion Ventases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
