<?php
/* @var $this ProveedoresController */
/* @var $data Proveedores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proveedor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_proveedor), array('view', 'id'=>$data->id_proveedor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razon_social')); ?>:</b>
	<?php echo CHtml::encode($data->razon_social); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruc')); ?>:</b>
	<?php echo CHtml::encode($data->ruc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_contacto')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_contacto')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_contacto); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('banco_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->banco_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_cuenta')); ?>:</b>
	<?php echo CHtml::encode($data->n_cuenta); ?>
	<br />

	*/ ?>

</div>