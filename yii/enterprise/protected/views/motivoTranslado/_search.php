<?php
/* @var $this MotivoTransladoController */
/* @var $model MotivoTranslado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_motivo_translado'); ?>
		<?php echo $form->textField($model,'id_motivo_translado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion_motivo'); ?>
		<?php echo $form->textField($model,'descripcion_motivo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->