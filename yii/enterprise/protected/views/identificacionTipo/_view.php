<?php
/* @var $this IdentificacionTipoController */
/* @var $data IdentificacionTipo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_identificacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_identificacion), array('view', 'id'=>$data->id_identificacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_identificacion')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_identificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>