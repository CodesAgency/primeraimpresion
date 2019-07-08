<?php
/* @var $this DescuentoController */
/* @var $model Descuento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_descuento'); ?>
		<?php echo $form->textField($model,'id_descuento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_descuento'); ?>
		<?php echo $form->textField($model,'nombre_descuento',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_cliente'); ?>
		<?php echo $form->textField($model,'tipo_cliente'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->