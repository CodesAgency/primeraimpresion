<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_breve')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_breve); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contenido')); ?>:</b>
	<?php echo CHtml::encode($data->contenido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('localimg')); ?>:</b>
	<?php echo CHtml::encode($data->localimg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('videoUrl')); ?>:</b>
	<?php echo CHtml::encode($data->videoUrl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creado')); ?>:</b>
	<?php echo CHtml::encode($data->creado); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria_id')); ?>:</b>
	<?php echo CHtml::encode($data->categoria_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('users_id')); ?>:</b>
	<?php echo CHtml::encode($data->users_id); ?>
	<br />

	*/ ?>

</div>