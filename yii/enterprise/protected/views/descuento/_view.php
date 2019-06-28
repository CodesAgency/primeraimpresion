<?php
/* @var $this DescuentoController */
/* @var $data Descuento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_descuento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_descuento), array('view', 'id'=>$data->id_descuento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_descuento')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_descuento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_cliente); ?>
	<br />


</div>