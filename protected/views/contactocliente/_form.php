<?php
/* @var $this ContactoclienteController */
/* @var $model Contactocliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'contactocliente-form',
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

	<!-- RENGLON 1 -->
	<table STYLE="table-layout: fixed; width:100%">
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'nombre'); ?>
					<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'nombre'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'apellido'); ?>
					<?php echo $form->textField($model,'apellido',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'apellido'); ?>
				</div>
			</td>
		</tr>
		<!-- RENGLON 2 -->
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'Tipo de documento'); ?>
					<?php echo CHtml::dropDownList('tipoDoc', 'DNI', 
              			array('DNI' => 'DNI', 'LU' => 'Libreta Unica', 'PA' => 'Pasaporte'));
					?>
					<?php echo $form->error($model,'tipodoc'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'nrodoc'); ?>
					<?php echo $form->textField($model,'nrodoc',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'nrodoc'); ?>
				</div>
			</td>
		</tr>
		<!-- RENGLON 3 -->
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'telefono'); ?>
					<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'telefono'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'celular'); ?>
					<?php echo $form->textField($model,'celular',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'celular'); ?>
				</div>
			</td>
		</tr>
		<!-- RENGLON 4 -->
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'email'); ?>
					<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'email'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'cliente_id'); ?>
					<?php echo $form->dropDownList($model,'cliente_id',$model->getMenuClientes(),array("empty"=>"Seleccione")); ?>
					<?php echo $form->error($model,'cliente_id'); ?>
				</div>
			</td>
		</tr>
	</table>

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