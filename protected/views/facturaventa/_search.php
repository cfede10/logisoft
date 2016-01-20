<?php
/* @var $this FacturaventaController */
/* @var $model Facturaventa */
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
		<?php echo $form->label($model,'numero'); ?>
		<?php echo $form->textField($model,'numero',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'pedidodeventa_id'); ?>
		<?php echo $form->textField($model,'pedidodeventa_id'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'remitoventa_id'); ?>
		<?php echo $form->textField($model,'remitoventa_id'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'iva'); ?>
		<?php echo $form->textField($model,'iva',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'subtotal'); ?>
		<?php echo $form->textField($model,'subtotal',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'total'); ?>
		<?php echo $form->textField($model,'total',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'descuento'); ?>
		<?php echo $form->textField($model,'descuento',array('size'=>45,'maxlength'=>45)); ?>
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