<?php
/* @var $this StockSucursalController */
/* @var $model StockSucursal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stock-sucursal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los Campos con  <span class="required">*</span> Son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

        <?php 
        $sucursal=Yii::app()->user->sucursal;
        if($sucursal==1){
            
         ;?>
	<div class="row">
		<?php echo $form->labelEx($model,'id_sucursal'); ?>
            <?php echo $form->dropDownList($model,'id_sucursal',CHtml::listData(Sucursal::model()->findAll(),"id_sucursal","nombre_sucursal")); ?>
		
		<?php echo $form->error($model,'id_sucursal'); ?>
	</div>
        <?php 
        }
        else
        {
          ?>
        <div class="row">
		<?php echo $form->labelEx($model,'id_sucursal'); ?>
		<?php echo $form->textField($model,'id_sucursal'); ?>
		<?php echo $form->error($model,'id_sucursal'); ?>
	</div>
     <?php  
        }
        ?>
        <div class="row">
		<?php echo $form->labelEx($model,'id_producto'); ?>
                <?php echo $form->dropDownList($model,'id_producto',CHtml::listData(Products::model()->findAll(),"id_producto","nombre_producto")); ?>
                    <?php echo $form->error($model,'id_producto'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'precio_neto'); ?>
		<?php echo $form->textField($model,'precio_neto'); ?>
		<?php echo $form->error($model,'precio_neto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_concostos'); ?>
		<?php echo $form->textField($model,'precio_concostos'); ?>
		<?php echo $form->error($model,'precio_concostos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_venta1'); ?>
		<?php echo $form->textField($model,'precio_venta1'); ?>
		<?php echo $form->error($model,'precio_venta1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_venta2'); ?>
		<?php echo $form->textField($model,'precio_venta2'); ?>
		<?php echo $form->error($model,'precio_venta2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_venta3'); ?>
		<?php echo $form->textField($model,'precio_venta3'); ?>
		<?php echo $form->error($model,'precio_venta3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_venta4'); ?>
		<?php echo $form->textField($model,'precio_venta4'); ?>
		<?php echo $form->error($model,'precio_venta4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_caducidad'); ?>
            
            <?php 
                $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                    "attribute"=>"fecha_caducidad",
                    "model"=>$model,
                    "language"=>'es',
                    "options" => array(
                        "dateFormat" =>"yy-mm-dd"
                        
                        )
            ));
            ?>
            
		<?php echo $form->error($model,'fecha_caducidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->