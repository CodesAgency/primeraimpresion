<?php
/* @var $this ListaPreciosController */
/* @var $data ListaPrecios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_lista_precios')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_lista_precios), array('view', 'id'=>$data->id_lista_precios)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('variable')); ?>:</b>
	<?php echo CHtml::encode($data->variable); ?>
	<br />


</div>