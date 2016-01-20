<?php
/* @var $this TipoproductoController */
/* @var $model Tipoproducto */
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
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>45,'maxlength'=>45)); ?>
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