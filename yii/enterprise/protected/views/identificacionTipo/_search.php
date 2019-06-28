<?php
/* @var $this IdentificacionTipoController */
/* @var $model IdentificacionTipo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_identificacion'); ?>
		<?php echo $form->textField($model,'id_identificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_identificacion'); ?>
		<?php echo $form->textField($model,'tipo_identificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->