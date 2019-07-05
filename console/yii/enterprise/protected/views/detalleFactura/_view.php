<?php
/* @var $this DetalleFacturaController */
/* @var $data DetalleFactura */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_detalle')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_detalle), array('view', 'id'=>$data->id_detalle)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_factura')); ?>:</b>
	<?php echo CHtml::encode($data->numero_factura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_producto')); ?>:</b>
	<?php echo CHtml::encode($data->id_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_venta')); ?>:</b>
	<?php echo CHtml::encode($data->precio_venta); ?>
	<br />


</div>