<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">
		Los campos marcados con <span class="required">*</span> son
		requeridos.
	</p>

	<div class="">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'tipousuario_id'); ?>
		<?php echo $form->textField($model,'tipousuario_id'); ?>
		<?php echo $form->error($model,'tipousuario_id'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'fechacreacion'); ?>
		<?php echo $form->textField($model,'fechacreacion'); ?>
		<?php echo $form->error($model,'fechacreacion'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'fechamodificacion'); ?>
		<?php echo $form->textField($model,'fechamodificacion'); ?>
		<?php echo $form->error($model,'fechamodificacion'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'creadopor'); ?>
		<?php echo $form->textField($model,'creadopor',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'creadopor'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'modificadopor'); ?>
		<?php echo $form->textField($model,'modificadopor',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'modificadopor'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar',array('class'=>'btn btn-primary btn-large')); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
<!-- form -->