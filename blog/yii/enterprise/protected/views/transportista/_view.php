<?php
/* @var $this TransportistaController */
/* @var $data Transportista */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_transportista')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_transportista), array('view', 'id'=>$data->id_transportista)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_transportista')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_transportista); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_identificacion')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_identificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificacion_transportista')); ?>:</b>
	<?php echo CHtml::encode($data->identificacion_transportista); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehiculo')); ?>:</b>
	<?php echo CHtml::encode($data->vehiculo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('placa')); ?>:</b>
	<?php echo CHtml::encode($data->placa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo')); ?>:</b>
	<?php echo CHtml::encode($data->correo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	*/ ?>

</div>