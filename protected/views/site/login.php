<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
$this->pageTitle = Yii::app ()->name . ' - Login';
$this->breadcrumbs = array (
		'Login' 
);
?>

<h1>Login</h1>

<p>Por favor complete sus datos para acceder al sistema:</p>

<div class="form">
<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'login-form',
		'enableClientValidation' => true,
		'clientOptions' => array (
				'validateOnSubmit' => true 
		) 
) );
?>

	<p class="note">
		La informacion marcada con <span class="required red">*</span> es
		requerida.
	</p>

	<div>
		<?php echo $form->labelEx($model,'Nombre de usuario'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'Contrasena'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>

	</div>

	<div class=" rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'Recordarme'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class=" buttons">
		<?php echo CHtml::submitButton('Login',array("class"=>"btn btn-primary btn-large")); ?>		
	</div>

<?php $this->endWidget(); ?>
</div>
<!-- form -->
