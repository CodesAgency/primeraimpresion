<?php
/* @var $this ClientesTipoController */
/* @var $data ClientesTipo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_clientes_tipo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_clientes_tipo), array('view', 'id'=>$data->id_clientes_tipo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>