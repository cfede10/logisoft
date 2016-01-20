<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'proveedor-form',
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
	<table WIDTH="150%">
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'razonsocial'); ?>
					<?php echo $form->textField($model,'razonsocial',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'razonsocial'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'cuit'); ?>
					<?php echo $form->textField($model,'cuit',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'cuit'); ?>
				</div>
			</td>
		</tr>
	</table>

	<!-- RENGLON 2 -->
	<table WIDTH="150%">
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'domiciliolegal'); ?>
					<?php echo $form->textField($model,'domiciliolegal',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'domiciliolegal'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'domiciliodeposito'); ?>
					<?php echo $form->textField($model,'domiciliodeposito',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'domiciliodeposito'); ?>
				</div>
			</td>
		</tr>
	</table>

	<!-- RENGLON 3 -->
	<table WIDTH="150%">
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'provincia_id'); ?>
					<?php echo $form->dropDownList($model,'provincia_id',$model->getMenuProvincias(),array("empty"=>"Seleccione")); ?>
					<?php echo $form->error($model,'provincia_id'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'localidad_id'); ?>
					<?php echo $form->dropDownList($model,'localidad_id',$model->getMenuLocalidades(),array("empty"=>"Seleccione")); ?>
					<?php echo $form->error($model,'localidad_id'); ?>
				</div>
			</td>
		</tr>
	</table>

	<!-- RENGLON 4 -->
	<table WIDTH="150%">
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'emailempresarial1'); ?>
					<?php echo $form->textField($model,'emailempresarial1',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'emailempresarial1'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'emailempresarial2'); ?>
					<?php echo $form->textField($model,'emailempresarial2',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'emailempresarial2'); ?>
				</div>
			</td>
		</tr>
	</table>

	<!-- RENGLON 5 -->
	<table WIDTH="150%">
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'telfijo'); ?>
					<?php echo $form->textField($model,'telfijo',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'telfijo'); ?>
				</div>
			</td>

			<td></td>
		</tr>
	</table>

	<!-- RENGLON 6 -->
	<table WIDTH="150%">
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'banco'); ?>
					<?php echo $form->textField($model,'banco',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'banco'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'sucursul'); ?>
					<?php echo $form->textField($model,'sucursul',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'sucursul'); ?>
				</div>
			</td>
		</tr>
	</table>

	<!-- RENGLON 7 -->
	<table WIDTH="150%">
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'tipodecuenta_id'); ?>
					<?php echo $form->dropDownList($model,'tipodecuenta_id',$model->getMenuTiposDeCuentas(),array("empty"=>"Seleccione")); ?>
					<?php echo $form->error($model,'tipodecuenta_id'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'numcuenta'); ?>
					<?php echo $form->textField($model,'numcuenta',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'numcuenta'); ?>
				</div>

			</td>
		</tr>
	</table>

	<!-- RENGLON 8 -->
	<table WIDTH="150%">
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'cbu'); ?>
					<?php echo $form->textField($model,'cbu',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'cbu'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'iva_id'); ?>
					<?php echo $form->dropDownList($model,'iva_id',$model->getMenuIvas(),array("empty"=>"Seleccione")); ?>
					<?php echo $form->error($model,'iva_id'); ?>
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