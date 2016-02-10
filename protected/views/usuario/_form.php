<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'usuario-form',
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
	<table STYLE="table-layout: fixed; width: 100%">
		<!-- RENGLON 1 -->
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'username'); ?>
					<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'username'); ?>
				</div>
			</td>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'password'); ?>
					<?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'password'); ?>
				</div>
			</td>
		</tr>
		<!-- RENGLON 2 -->
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'tipo de usuario'); ?>
					<?php echo $form->dropDownList($model,'tipousuario_id',$model->getMenuTipodeusuarios(),array("empty"=>"Seleccione")); ?>
					<?php echo $form->error($model,'tipousuario_id'); ?>
				</div>
			</td>
		</tr>
	</table>
	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar',array('class'=>'btn btn-primary btn-large')); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
<!-- form -->