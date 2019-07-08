<?php
/* @var $this TransportistaController */
/* @var $model Transportista */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transportista-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los Campos con  <span class="required">*</span> Son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_transportista'); ?>
		<?php echo $form->textField($model,'nombre_transportista',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre_transportista'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_identificacion'); ?>
		<?php echo $form->textField($model,'tipo_identificacion'); ?>
		<?php echo $form->error($model,'tipo_identificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identificacion_transportista'); ?>
		<?php echo $form->textField($model,'identificacion_transportista',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'identificacion_transportista'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vehiculo'); ?>
		<?php echo $form->textField($model,'vehiculo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'vehiculo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'placa'); ?>
		<?php echo $form->textField($model,'placa',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'placa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo'); ?>
		<?php echo $form->textField($model,'correo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->