<?php
/* @var $this ParametrizacionController */
/* @var $data Parametrizacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_parametrizacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_parametrizacion), array('view', 'id'=>$data->id_parametrizacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_variable')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_variable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tabla_fuente')); ?>:</b>
	<?php echo CHtml::encode($data->tabla_fuente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('variable')); ?>:</b>
	<?php echo CHtml::encode($data->variable); ?>
	<br />


</div>