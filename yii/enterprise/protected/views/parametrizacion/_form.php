<?php
/* @var $this ParametrizacionController */
/* @var $model Parametrizacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'parametrizacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los Campos con  <span class="required">*</span> Son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion_variable'); ?>
		<?php echo $form->textField($model,'descripcion_variable',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion_variable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tabla_fuente'); ?>
		<?php echo $form->textField($model,'tabla_fuente'); ?>
		<?php echo $form->error($model,'tabla_fuente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'variable'); ?>
		<?php echo $form->textField($model,'variable',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'variable'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->