<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'cliente-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false 
) );
?>
	
	<p class="note">
		Los campos marcados con <span class="required">*</span> son
		requeridos.
	</p>

	<div class="">
		<?php echo $form->labelEx($model,'nombrecomercial'); ?>
		<?php echo $form->textField($model,'nombrecomercial',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombrecomercial'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'razonsocial'); ?>
		<?php echo $form->textField($model,'razonsocial',array('size'=>60,'maxlength'=>90)); ?>
		<?php echo $form->error($model,'razonsocial'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'cuit'); ?>
		<?php echo $form->textField($model,'cuit',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cuit'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'llbb'); ?>
		<?php echo $form->textField($model,'llbb',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'llbb'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'situacionimpositiva_id'); ?>
		<?php echo $form->dropDownList($model,'situacionimpositiva_id',$model->getMenuSituacionesImpositivas(),array("empty"=>"Seleccione")); ?>
		<?php echo $form->error($model,'situacionimpositiva_id'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'domiciliolegal'); ?>
		<?php echo $form->textField($model,'domiciliolegal',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'domiciliolegal'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'domiciodeposito'); ?>
		<?php echo $form->textField($model,'domiciodeposito',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'domiciodeposito'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'emailempresarial1'); ?>
		<?php echo $form->textField($model,'emailempresarial1',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'emailempresarial1'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'emailempresarial2'); ?>
		<?php echo $form->textField($model,'emailempresarial2',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'emailempresarial2'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'provincia_id'); ?>
		<?php echo $form->dropDownList($model,'provincia_id',$model->getMenuProvincias(),array("empty"=>"Seleccione")); ?>
		<?php echo $form->error($model,'provincia_id'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'localidad_id'); ?>
		<?php echo $form->dropDownList($model,'localidad_id',$model->getMenuLocalidades(),array("empty"=>"Seleccione")); ?>
		<?php echo $form->error($model,'localidad_id'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'iva_id'); ?>
		<?php echo $form->dropDownList($model,'iva_id',$model->getMenuIvas(),array("empty"=>"Seleccione")); ?>
		<?php echo $form->error($model,'iva_id'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'descuento_id'); ?>
		<?php echo $form->dropDownList($model,'descuento_id',$model->getMenuDescuentos(),array("empty"=>"Seleccione")); ?>
		<?php echo $form->error($model,'descuento_id'); ?>
	</div>
	<?php
	/*
	 * <div class="">
	 * <?php echo $form->labelEx($model,'fechacreacion'); ?>
	 * <?php echo $form->textField($model,'fechacreacion'); ?>
	 * <?php echo $form->error($model,'fechacreacion'); ?>
	 * </div>
	 *
	 * <div class="">
	 * <?php echo $form->labelEx($model,'fechamodificacion'); ?>
	 * <?php echo $form->textField($model,'fechamodificacion'); ?>
	 * <?php echo $form->error($model,'fechamodificacion'); ?>
	 * </div>
	 *
	 * <div class="">
	 * <?php echo $form->labelEx($model,'creadopor'); ?>
	 * <?php echo $form->textField($model,'creadopor',array('size'=>45,'maxlength'=>45)); ?>
	 * <?php echo $form->error($model,'creadopor'); ?>
	 * </div>
	 *
	 * <div class="">
	 * <?php echo $form->labelEx($model,'modificadopor'); ?>
	 * <?php echo $form->textField($model,'modificadopor',array('size'=>45,'maxlength'=>45)); ?>
	 * <?php echo $form->error($model,'modificadopor'); ?>
	 * </div>
	 */
	?>
	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar',array('class'=>'btn btn-primary btn-large')); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
<!-- form -->