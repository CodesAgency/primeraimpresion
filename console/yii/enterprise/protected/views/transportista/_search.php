<?php
/* @var $this TransportistaController */
/* @var $model Transportista */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_transportista'); ?>
		<?php echo $form->textField($model,'id_transportista'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_transportista'); ?>
		<?php echo $form->textField($model,'nombre_transportista',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_identificacion'); ?>
		<?php echo $form->textField($model,'tipo_identificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'identificacion_transportista'); ?>
		<?php echo $form->textField($model,'identificacion_transportista',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vehiculo'); ?>
		<?php echo $form->textField($model,'vehiculo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'placa'); ?>
		<?php echo $form->textField($model,'placa',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correo'); ?>
		<?php echo $form->textField($model,'correo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->