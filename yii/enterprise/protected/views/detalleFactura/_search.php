<?php
/* @var $this DetalleFacturaController */
/* @var $model DetalleFactura */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_detalle'); ?>
		<?php echo $form->textField($model,'id_detalle'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_factura'); ?>
		<?php echo $form->textField($model,'numero_factura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_producto'); ?>
		<?php echo $form->textField($model,'id_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_venta'); ?>
		<?php echo $form->textField($model,'precio_venta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->