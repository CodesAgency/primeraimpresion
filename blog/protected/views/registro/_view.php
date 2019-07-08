<?php
/* @var $this RegistroController */
/* @var $data Users */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password2')); ?>:</b>
	<?php echo CHtml::encode($data->password2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
	<?php echo CHtml::encode($data->cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel')); ?>:</b>
	<?php echo CHtml::encode($data->nivel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta_seguridad')); ?>:</b>
	<?php echo CHtml::encode($data->pregunta_seguridad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('respuesta_seguridad')); ?>:</b>
	<?php echo CHtml::encode($data->respuesta_seguridad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaActualiza')); ?>:</b>
	<?php echo CHtml::encode($data->fechaActualiza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paralelo')); ?>:</b>
	<?php echo CHtml::encode($data->paralelo); ?>
	<br />

	*/ ?>

</div>