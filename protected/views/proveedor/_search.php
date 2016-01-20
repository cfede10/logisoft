<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
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
		<?php echo $form->label($model,'razonsocial'); ?>
		<?php echo $form->textField($model,'razonsocial',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'cuit'); ?>
		<?php echo $form->textField($model,'cuit',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'domiciliolegal'); ?>
		<?php echo $form->textField($model,'domiciliolegal',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'domiciliodeposito'); ?>
		<?php echo $form->textField($model,'domiciliodeposito',array('size'=>45,'maxlength'=>45)); ?>
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
		<?php echo $form->label($model,'emailempresarial1'); ?>
		<?php echo $form->textField($model,'emailempresarial1',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'emailempresarial2'); ?>
		<?php echo $form->textField($model,'emailempresarial2',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'iva_id'); ?>
		<?php echo $form->textField($model,'iva_id'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'telfijo'); ?>
		<?php echo $form->textField($model,'telfijo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'banco'); ?>
		<?php echo $form->textField($model,'banco',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'sucursul'); ?>
		<?php echo $form->textField($model,'sucursul',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'tipodecuenta_id'); ?>
		<?php echo $form->textField($model,'tipodecuenta_id'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'numcuenta'); ?>
		<?php echo $form->textField($model,'numcuenta',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'cbu'); ?>
		<?php echo $form->textField($model,'cbu',array('size'=>45,'maxlength'=>45)); ?>
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