<?php
/* @var $this DetallepedidocompraController */
/* @var $model Detallepedidocompra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'detallepedidocompra-form',
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
		<?php echo $form->labelEx($model,'producto_id'); ?>
		<?php echo $form->dropDownList($model,'producto_id',$model->getMenuProducto(),array("empty"=>"Seleccione")); ?>
		<?php echo $form->error($model,'producto_id'); ?>
	</div>
</div>

<div class="">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
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