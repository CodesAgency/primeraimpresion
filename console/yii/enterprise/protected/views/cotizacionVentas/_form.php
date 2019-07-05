<?php
/* @var $this CotizacionVentasController */
/* @var $model CotizacionVentas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cotizacion-ventas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los Campos con  <span class="required">*</span> Son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_cotizacion'); ?>
		<?php echo $form->textField($model,'fecha_cotizacion'); ?>
		<?php echo $form->error($model,'fecha_cotizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario_cotizante'); ?>
		<?php echo $form->textField($model,'id_usuario_cotizante'); ?>
		<?php echo $form->error($model,'id_usuario_cotizante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_sucursal'); ?>
		<?php echo $form->textField($model,'id_sucursal'); ?>
		<?php echo $form->error($model,'id_sucursal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->