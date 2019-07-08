<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php

$nivel=yii::app()->user->getState("nivel");

$form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php 
                if ($nivel==1)
                {
                echo $form->textField($model,'username',array('size'=>30,'maxlength'=>30));    
                }
                else 
                {
                echo $form->textField($model,'username',array('size'=>30,'maxlength'=>30,'disabled'=>'true'));    
                }
                 ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula'); ?>
		<?php 
                if ($nivel==1)
                {
                echo $form->textField($model,'cedula',array('size'=>50,'maxlength'=>50)); 
                }
                else
                {
                    echo $form->textField($model,'cedula',array('size'=>50,'maxlength'=>50,'disabled'=>'true')); 
                
                }
                ?>
		<?php echo $form->error($model,'cedula'); ?>
	</div>
    
        <div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
    
        <div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>
    
        <div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php if ($nivel==1){
                    
                 echo $form->labelEx($model,'nivel');} ?>
		<?php
                if ($nivel==1){
                    
                

                echo $form->textField($model,'nivel',array('size'=>1,'maxlength'=>1)); 
                }
                ?>
		<?php echo $form->error($model,'nivel'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Ingresar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->