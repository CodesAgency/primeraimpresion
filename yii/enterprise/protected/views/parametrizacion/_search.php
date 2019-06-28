<?php
/* @var $this ParametrizacionController */
/* @var $model Parametrizacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_parametrizacion'); ?>
		<?php echo $form->textField($model,'id_parametrizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion_variable'); ?>
		<?php echo $form->textField($model,'descripcion_variable',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tabla_fuente'); ?>
		<?php echo $form->textField($model,'tabla_fuente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'variable'); ?>
		<?php echo $form->textField($model,'variable',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->