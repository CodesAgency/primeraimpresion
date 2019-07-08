<?php
/* @var $this ProductsController */
/* @var $data Products */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_producto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_producto), array('view', 'id'=>$data->id_producto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_producto')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_producto')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_comercial')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_comercial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fabricante')); ?>:</b>
	<?php echo CHtml::encode($data->fabricante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aplicacion')); ?>:</b>
	<?php echo CHtml::encode($data->aplicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unidad')); ?>:</b>
	<?php echo CHtml::encode($data->unidad); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('piezas')); ?>:</b>
	<?php echo CHtml::encode($data->piezas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calidad')); ?>:</b>
	<?php echo CHtml::encode($data->calidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_qr')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_qr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('producto_alterno')); ?>:</b>
	<?php echo CHtml::encode($data->producto_alterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiempo_garantia')); ?>:</b>
	<?php echo CHtml::encode($data->tiempo_garantia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productsPeso')); ?>:</b>
	<?php echo CHtml::encode($data->productsPeso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('products_dimenciones')); ?>:</b>
	<?php echo CHtml::encode($data->products_dimenciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_producto')); ?>:</b>
	<?php echo CHtml::encode($data->status_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_added')); ?>:</b>
	<?php echo CHtml::encode($data->date_added); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_producto')); ?>:</b>
	<?php echo CHtml::encode($data->precio_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->id_categoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock')); ?>:</b>
	<?php echo CHtml::encode($data->stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('condiciones_especiales')); ?>:</b>
	<?php echo CHtml::encode($data->condiciones_especiales); ?>
	<br />

	*/ ?>

</div>