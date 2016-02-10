<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empleado-form',
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
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>43,'maxlength'=>43)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'tipodoc'); ?>
		<?php echo $form->textField($model,'tipodoc',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipodoc'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'nrodoc'); ?>
		<?php echo $form->textField($model,'nrodoc'); ?>
		<?php echo $form->error($model,'nrodoc'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'fechanacimiento'); ?>
		<?php echo $form->textField($model,'fechanacimiento'); ?>
		<?php echo $form->error($model,'fechanacimiento'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'cuil'); ?>
		<?php echo $form->textField($model,'cuil',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cuil'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'domicilio'); ?>
		<?php echo $form->textField($model,'domicilio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'domicilio'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'altura'); ?>
		<?php echo $form->textField($model,'altura'); ?>
		<?php echo $form->error($model,'altura'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'piso'); ?>
		<?php echo $form->textField($model,'piso'); ?>
		<?php echo $form->error($model,'piso'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'depto'); ?>
		<?php echo $form->textField($model,'depto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'depto'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'fechaingreso'); ?>
		<?php echo $form->textField($model,'fechaingreso'); ?>
		<?php echo $form->error($model,'fechaingreso'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'cargo_id'); ?>
		<?php echo $form->textField($model,'cargo_id'); ?>
		<?php echo $form->error($model,'cargo_id'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'legajo'); ?>
		<?php echo $form->textField($model,'legajo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'legajo'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'mail'); ?>
		<?php echo $form->textField($model,'mail',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mail'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'telfijo'); ?>
		<?php echo $form->textField($model,'telfijo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telfijo'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'telmovil'); ?>
		<?php echo $form->textField($model,'telmovil',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telmovil'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'provincia_id'); ?>
		<?php echo $form->textField($model,'provincia_id'); ?>
		<?php echo $form->error($model,'provincia_id'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'localidad_id'); ?>
		<?php echo $form->textField($model,'localidad_id'); ?>
		<?php echo $form->error($model,'localidad_id'); ?>
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