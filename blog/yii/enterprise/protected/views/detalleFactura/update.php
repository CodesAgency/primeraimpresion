<?php
/* @var $this DetalleFacturaController */
/* @var $model DetalleFactura */

$this->breadcrumbs=array(
	'Detalle Facturas'=>array('index'),
	$model->id_detalle=>array('view','id'=>$model->id_detalle),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista DetalleFactura', 'url'=>array('index')),
	array('label'=>'Crear DetalleFactura', 'url'=>array('create')),
	array('label'=>'VerDetalleFactura', 'url'=>array('view', 'id'=>$model->id_detalle)),
	array('label'=>'Administrador DetalleFactura', 'url'=>array('admin')),
);
?>

<h1>Actualizar DetalleFactura <?php echo $model->id_detalle; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>