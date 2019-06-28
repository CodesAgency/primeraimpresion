<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clientes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los Campos con  <span class="required">*</span> Son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_cliente'); ?>
		<?php echo $form->textField($model,'nombre_cliente',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_cliente'); ?>
		<?php echo $form->dropDownList($model,'tipo_cliente',CHtml::listData(ClientesTipo::model()->findAll(),"id_clientes_tipo","nombre_tipo")); ?>
		<?php echo $form->error($model,'tipo_cliente'); ?>
	</div>
        <div class="row">
		
		
	
		<?php echo $form->labelEx($model,'identificacion'); ?>
		<?php echo $form->dropDownList($model,'identificacio1',CHtml::listData(IdentificacionTipo::model()->findAll(),"id_identificacion","tipo_identificacion")); ?>
		<?php echo $form->textField($model,'identificacion',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'identificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_cliente'); ?>
		<?php echo $form->textField($model,'telefono_cliente',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'telefono_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_cliente2'); ?>
		<?php echo $form->textField($model,'telefono_cliente2',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'telefono_cliente2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_cliente'); ?>
		<?php echo $form->textField($model,'email_cliente',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'email_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_cliente'); ?>
		
                <?php
                 $this->widget('ext.widgets.xheditor.XHeditor',array(
                  'model'=>$model,
                  'modelAttribute'=>'direccion_cliente',
                  'language'=>'en',
                  'config'=>array(
                   'id'=>'xheditor_1',
                   'tools'=>'mfull', // mini, simple, mfull, full 
                   'skin'=>'default', // default, nostyle, o2007blue, o2007silver, vista
                   'width'=>'700px',
                   'height'=>'50px',
                    ),
                    )); 
                ?>

		<?php echo $form->error($model,'direccion_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_cliente'); ?>
		<?php echo $form->dropDownList($model, 'status_cliente', array('1'=>'Activo', '0'=>'Inactivo')); ?>
		<?php echo $form->error($model,'status_cliente'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'id_lista_precio'); ?>
                <?php echo $form->dropDownList($model,'id_lista_precio',CHtml::listData(IdentificacionTipo::model()->findAll(),"id_identificacion","tipo_identificacion")); ?>
		
		<?php echo $form->error($model,'id_lista_precio'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'date_added'); ?>
		<?php echo $form->textField($model,'date_added'); ?>
		<?php echo $form->error($model,'date_added'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
		<?php echo $form->textField($model,'fecha_nacimiento'); ?>
		<?php echo $form->error($model,'fecha_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_contacto'); ?>
		<?php echo $form->textField($model,'nombre_contacto',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre_contacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_contacto'); ?>
		<?php echo $form->textField($model,'telefono_contacto',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'telefono_contacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'regimen_tributario'); ?>
		<?php echo $form->textField($model,'regimen_tributario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'regimen_tributario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forma_pago'); ?>
		<?php echo $form->textField($model,'forma_pago',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'forma_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dias_credito'); ?>
		<?php echo $form->textField($model,'dias_credito',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dias_credito'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_descuento'); ?>
		<?php echo $form->textField($model,'id_descuento'); ?>
		<?php echo $form->error($model,'id_descuento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parametrizacion'); ?>
		<?php echo $form->textField($model,'parametrizacion'); ?>
		<?php echo $form->error($model,'parametrizacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->