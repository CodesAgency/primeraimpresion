<?php
/* @var $this CotizacionVentasController */
/* @var $model CotizacionVentas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_cotizacion_compras'); ?>
		<?php echo $form->textField($model,'id_cotizacion_compras'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_cotizacion'); ?>
		<?php echo $form->textField($model,'fecha_cotizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_usuario_cotizante'); ?>
		<?php echo $form->textField($model,'id_usuario_cotizante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_sucursal'); ?>
		<?php echo $form->textField($model,'id_sucursal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->