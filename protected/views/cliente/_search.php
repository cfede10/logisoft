<?php
/* @var $this ClienteController */
/* @var $model Cliente */
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
		<?php echo $form->label($model,'nombrecomercial'); ?>
		<?php echo $form->textField($model,'nombrecomercial',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'razonsocial'); ?>
		<?php echo $form->textField($model,'razonsocial',array('size'=>60,'maxlength'=>90)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'cuit'); ?>
		<?php echo $form->textField($model,'cuit',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'llbb'); ?>
		<?php echo $form->textField($model,'llbb',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'situacionimpositiva_id'); ?>
		<?php echo $form->textField($model,'situacionimpositiva_id'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'domiciliolegal'); ?>
		<?php echo $form->textField($model,'domiciliolegal',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'domiciodeposito'); ?>
		<?php echo $form->textField($model,'domiciodeposito',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'emailempresarial1'); ?>
		<?php echo $form->textField($model,'emailempresarial1',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'emailempresarial2'); ?>
		<?php echo $form->textField($model,'emailempresarial2',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'localidad_id'); ?>
		<?php echo $form->textField($model,'localidad_id'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'provincia_id'); ?>
		<?php echo $form->textField($model,'provincia_id'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'iva_id'); ?>
		<?php echo $form->textField($model,'iva_id'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'descuento_id'); ?>
		<?php echo $form->textField($model,'descuento_id'); ?>
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