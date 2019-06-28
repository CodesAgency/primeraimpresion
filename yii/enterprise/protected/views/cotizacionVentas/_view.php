<?php
/* @var $this CotizacionVentasController */
/* @var $data CotizacionVentas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cotizacion_compras')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cotizacion_compras), array('view', 'id'=>$data->id_cotizacion_compras)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_cotizacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_cotizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario_cotizante')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario_cotizante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sucursal')); ?>:</b>
	<?php echo CHtml::encode($data->id_sucursal); ?>
	<br />


</div>