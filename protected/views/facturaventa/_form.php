<?php
/* @var $this FacturaventaController */
/* @var $model Facturaventa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'facturaventa-form',
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


	<table STYLE="table-layout: fixed; width=100%">
		<!-- RENGLON 1 -->
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'numero'); ?>
					<?php echo $form->textField($model,'numero',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'numero'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'pedidodeventa_id'); ?>
					<?php echo $form->textField($model,'pedidodeventa_id'); ?>
					<?php echo $form->error($model,'pedidodeventa_id'); ?>
				</div>
			</td>
		</tr>
		<!-- RENGLON 2 -->
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'remitoventa_id'); ?>
					<?php echo $form->textField($model,'remitoventa_id'); ?>
					<?php echo $form->error($model,'remitoventa_id'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'fecha'); ?>
					<?php echo $form->textField($model,'fecha'); ?>
					<?php echo $form->error($model,'fecha'); ?>
				</div>
			</td>
		</tr>
		<!-- RENGLON 3 -->
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'iva'); ?>
					<?php echo $form->textField($model,'iva',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'iva'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'subtotal'); ?>
					<?php echo $form->textField($model,'subtotal',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'subtotal'); ?>
				</div>
			</td>
		</tr>
		<!-- RENGLON 4 -->
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'total'); ?>
					<?php echo $form->textField($model,'total',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'total'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'descuento'); ?>
					<?php echo $form->textField($model,'descuento',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'descuento'); ?>
				</div>
			</td>
		</tr>
	</table>

	<!--
	
	<table WIDTH="150%">
		<tr>
			<td> 
				<div class="">
					<?php echo $form->labelEx($model,'fechacreacion'); ?>
					<?php echo $form->textField($model,'fechacreacion'); ?>
					<?php echo $form->error($model,'fechacreacion'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'fechamodificacion'); ?>
					<?php echo $form->textField($model,'fechamodificacion'); ?>
					<?php echo $form->error($model,'fechamodificacion'); ?>
				</div>
			</td>
		</tr>		
	</table>
	
	
	<table WIDTH="150%">
		<tr>
			<td> 
				<div class="">
					<?php echo $form->labelEx($model,'creadopor'); ?>
					<?php echo $form->textField($model,'creadopor',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'creadopor'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'modificadopor'); ?>
					<?php echo $form->textField($model,'modificadopor',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'modificadopor'); ?>
				</div>
			</td>
		</tr>		
	</table>
	-->

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar',array('class'=>'btn btn-primary btn-large')); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
<!-- form -->