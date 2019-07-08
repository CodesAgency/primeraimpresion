<?php
/* @var $this CategoriasController */
/* @var $data Categorias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_categoria), array('view', 'id'=>$data->id_categoria)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_categoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_categoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_added')); ?>:</b>
	<?php echo CHtml::encode($data->date_added); ?>
	<br />


</div>