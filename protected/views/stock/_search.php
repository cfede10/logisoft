<?php
/* @var $this StockController */
/* @var $model Stock */
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
		<?php echo $form->label($model,'unidades'); ?>
		<?php echo $form->textField($model,'unidades',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'preciounidad'); ?>
		<?php echo $form->textField($model,'preciounidad',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'producto_id'); ?>
		<?php echo $form->textField($model,'producto_id'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'stockcol'); ?>
		<?php echo $form->textField($model,'stockcol',array('size'=>45,'maxlength'=>45)); ?>
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