<?php
/* @var $this CotizacionVentasController */
/* @var $model CotizacionVentas */

$this->breadcrumbs=array(
	'Cotizacion Ventases'=>array('index'),
	$model->id_cotizacion_compras=>array('view','id'=>$model->id_cotizacion_compras),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista CotizacionVentas', 'url'=>array('index')),
	array('label'=>'Crear CotizacionVentas', 'url'=>array('create')),
	array('label'=>'VerCotizacionVentas', 'url'=>array('view', 'id'=>$model->id_cotizacion_compras)),
	array('label'=>'Administrador CotizacionVentas', 'url'=>array('admin')),
);
?>

<h1>Actualizar CotizacionVentas <?php echo $model->id_cotizacion_compras; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>