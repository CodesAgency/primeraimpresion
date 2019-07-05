<?php
/* @var $this CotizacionVentasController */
/* @var $model CotizacionVentas */

$this->breadcrumbs=array(
	'Cotizacion Ventases'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista CotizacionVentas', 'url'=>array('index')),
	array('label'=>'Administrador CotizacionVentas', 'url'=>array('admin')),
);
?>

<h1>Crear CotizacionVentas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>