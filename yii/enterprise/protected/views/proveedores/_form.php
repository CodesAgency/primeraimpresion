<?php
/* @var $this ProveedoresController */
/* @var $model Proveedores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proveedores-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los Campos con  <span class="required">*</span> Son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'razon_social'); ?>
		<?php echo $form->textField($model,'razon_social',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'razon_social'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ruc'); ?>
		<?php echo $form->textField($model,'ruc',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'ruc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>155)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_contacto'); ?>
		<?php echo $form->textField($model,'nombre_contacto',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre_contacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_contacto'); ?>
		<?php echo $form->textField($model,'telefono_contacto',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'telefono_contacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'banco_nombre'); ?>
		<?php echo $form->textField($model,'banco_nombre',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'banco_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'n_cuenta'); ?>
		<?php echo $form->textField($model,'n_cuenta',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'n_cuenta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->