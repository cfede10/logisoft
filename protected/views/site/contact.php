<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */
$this->pageTitle = Yii::app ()->name . ' - Contact Us';
$this->breadcrumbs = array (
		'Contact' 
);
?>

<h1>Contactenos</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>Si tiene consultas comerciales u otras preguntas, por favor complete
	el siguiente formulario para contactarnos. Gracias.</p>

<div class="form">

<?php
	
$form = $this->beginWidget ( 'CActiveForm', array (
			'id' => 'contact-form',
			'enableClientValidation' => true,
			'clientOptions' => array (
					'validateOnSubmit' => true 
			) 
	) );
	?>

	<p class="note">
		La informacion marcada con <span class="required">*</span> son
		requeridos.
	</p>

	<?php #echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'asunto'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'mensaje'); ?>
		<?php echo $form->textArea($model,'body',array('s'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div>
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">
			Por favor ingrese las letras tal como se muestran en la imagen de
			arriba. <br />Las letras no distinguen entre mayusculas y minusculas.
		</div>
		<br /> <br /> <br /> <br />
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class=" buttons">
		<?php echo CHtml::submitButton('Enviar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
<!-- form -->

<?php endif; ?>