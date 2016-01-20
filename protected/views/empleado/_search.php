<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'action' => Yii::app ()->createUrl ( $this->route ),
		'method' => 'get' 
) );
?>

	<div class="">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>43,'maxlength'=>43)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'tipodoc'); ?>
		<?php echo $form->textField($model,'tipodoc',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'nrodoc'); ?>
		<?php echo $form->textField($model,'nrodoc'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'fechanacimiento'); ?>
		<?php echo $form->textField($model,'fechanacimiento'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'cuil'); ?>
		<?php echo $form->textField($model,'cuil',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'domicilio'); ?>
		<?php echo $form->textField($model,'domicilio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'altura'); ?>
		<?php echo $form->textField($model,'altura'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'piso'); ?>
		<?php echo $form->textField($model,'piso'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'depto'); ?>
		<?php echo $form->textField($model,'depto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'fechaingreso'); ?>
		<?php echo $form->textField($model,'fechaingreso'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'cargo_id'); ?>
		<?php echo $form->textField($model,'cargo_id'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'legajo'); ?>
		<?php echo $form->textField($model,'legajo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'mail'); ?>
		<?php echo $form->textField($model,'mail',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'telfijo'); ?>
		<?php echo $form->textField($model,'telfijo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'telmovil'); ?>
		<?php echo $form->textField($model,'telmovil',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'provincia_id'); ?>
		<?php echo $form->textField($model,'provincia_id'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'localidad_id'); ?>
		<?php echo $form->textField($model,'localidad_id'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'fechacreacion'); ?>
		<?php echo $form->textField($model,'fechacreacion'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'fechamodificacion'); ?>
		<?php echo $form->textField($model,'fechamodificacion'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'creadopor'); ?>
		<?php echo $form->textField($model,'creadopor',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'modificadopor'); ?>
		<?php echo $form->textField($model,'modificadopor',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar',array('class'=>'btn btn-primary btn-large')); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
<!-- search-form -->