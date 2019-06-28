<?php
/* @var $this MotivoTransladoController */
/* @var $data MotivoTranslado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_motivo_translado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_motivo_translado), array('view', 'id'=>$data->id_motivo_translado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_motivo')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_motivo); ?>
	<br />


</div>