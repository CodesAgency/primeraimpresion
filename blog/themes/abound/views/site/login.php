<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="page-header" align="center">
	<h1>Ingrese a su cuenta</h1>
</div>
<div class="row-fluid">
	
    <div class="span6 offset3" align="center">
        <P align="center">
<?php
	$this->beginWidget('zii.widgets.CPortlet', array(
		'title'=>"Acceso Privado",
	));
	
?>

</P>

    <p align="center">Por favor llene el siguiente formulario con sus credenciales de inicio de sesión:</p>
    <p align="center">Si se Registro por Primera vez Agregue su cedula como Usuario y Contraseña:</p>
    
    <div class="form" align="center">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>
    
        
        <div class="row">
            <?php echo $form->labelEx($model,'Usuario'); ?>
            <?php echo $form->textField($model,'username'); ?>
            <?php echo $form->error($model,'username'); ?>
        </div>
    
        <div class="row">
            <?php echo $form->labelEx($model,'password'); ?>
            <?php echo $form->passwordField($model,'password'); ?>
            <?php echo $form->error($model,'password'); ?>
            
        </div>
    
        
    
        <div class="row buttons">
            <?php echo CHtml::submitButton('Iniciar',array('class'=>'btn btn btn-primary')); ?>
        </div>
    
    <?php $this->endWidget(); ?>
    </div><!-- form -->

<?php $this->endWidget();?>

    </div>

</div>