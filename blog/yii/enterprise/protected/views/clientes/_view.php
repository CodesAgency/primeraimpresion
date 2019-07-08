<?php
/* @var $this ClientesController */
/* @var $data Clientes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cliente), array('view', 'id'=>$data->id_cliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificacio1')); ?>:</b>
	<?php echo CHtml::encode($data->identificacio1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificacion')); ?>:</b>
	<?php echo CHtml::encode($data->identificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_cliente2')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_cliente2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('email_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->email_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->status_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_lista_precio')); ?>:</b>
	<?php echo CHtml::encode($data->id_lista_precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_added')); ?>:</b>
	<?php echo CHtml::encode($data->date_added); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_contacto')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_contacto')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regimen_tributario')); ?>:</b>
	<?php echo CHtml::encode($data->regimen_tributario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forma_pago')); ?>:</b>
	<?php echo CHtml::encode($data->forma_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dias_credito')); ?>:</b>
	<?php echo CHtml::encode($data->dias_credito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_descuento')); ?>:</b>
	<?php echo CHtml::encode($data->id_descuento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parametrizacion')); ?>:</b>
	<?php echo CHtml::encode($data->parametrizacion); ?>
	<br />

	*/ ?>

</div>