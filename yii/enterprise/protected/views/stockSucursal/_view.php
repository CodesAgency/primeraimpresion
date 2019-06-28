<?php
/* @var $this StockSucursalController */
/* @var $data StockSucursal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_stock_sucursal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_stock_sucursal), array('view', 'id'=>$data->id_stock_sucursal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_producto')); ?>:</b>
	<?php echo CHtml::encode($data->id_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sucursal')); ?>:</b>
	<?php echo CHtml::encode($data->id_sucursal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_neto')); ?>:</b>
	<?php echo CHtml::encode($data->precio_neto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_concostos')); ?>:</b>
	<?php echo CHtml::encode($data->precio_concostos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_venta1')); ?>:</b>
	<?php echo CHtml::encode($data->precio_venta1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_venta2')); ?>:</b>
	<?php echo CHtml::encode($data->precio_venta2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_venta3')); ?>:</b>
	<?php echo CHtml::encode($data->precio_venta3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_venta4')); ?>:</b>
	<?php echo CHtml::encode($data->precio_venta4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_caducidad')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_caducidad); ?>
	<br />

	*/ ?>

</div>