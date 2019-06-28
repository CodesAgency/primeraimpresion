<?php
/* @var $this DetalleFacturaController */
/* @var $model DetalleFactura */

$this->breadcrumbs=array(
	'Detalle Facturas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista DetalleFactura', 'url'=>array('index')),
	array('label'=>'Administrador DetalleFactura', 'url'=>array('admin')),
);
?>

<h1>Crear DetalleFactura</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>