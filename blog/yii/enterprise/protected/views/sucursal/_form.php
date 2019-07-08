<?php
/* @var $this SucursalController */
/* @var $model Sucursal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sucursal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los Campos con  <span class="required">*</span> Son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_sucursal'); ?>
		<?php echo $form->textField($model,'id_sucursal'); ?>
		<?php echo $form->error($model,'id_sucursal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_sucursal'); ?>
		<?php echo $form->textField($model,'nombre_sucursal',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre_sucursal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_responsable'); ?>
		<?php echo $form->textField($model,'id_responsable'); ?>
		<?php echo $form->error($model,'id_responsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_sucursal'); ?>
		<?php echo $form->textField($model,'telefono_sucursal'); ?>
		<?php echo $form->error($model,'telefono_sucursal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_sucursal'); ?>
		<?php echo $form->textField($model,'direccion_sucursal'); ?>
		<?php echo $form->error($model,'direccion_sucursal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->