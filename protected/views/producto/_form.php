<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'producto-form',
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
					<?php echo $form->labelEx($model,'descripcion'); ?>
					<?php echo $form->textField($model,'descripcion',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'descripcion'); ?>
				</div>
			</td>
		</tr>
		<!-- RENGLON 2 -->
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'tipoproducto_id'); ?>
					<?php echo $form->dropDownList($model,'tipoproducto_id',$model->getMenuTipoDeProductos(),array("empty"=>"Seleccione")); ?>
					<?php echo $form->error($model,'tipoproducto_id'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'proveedor_id'); ?>
					<?php echo $form->dropDownList($model,'proveedor_id',$model->getMenuProveedores(),array("empty"=>"Seleccione")); ?>
					<?php echo $form->error($model,'proveedor_id'); ?>
				</div>
			</td>
		</tr>
		<!-- RENGLON 3 -->
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'preciounitario'); ?>
					<?php echo $form->textField($model,'preciounitario',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'preciounitario'); ?>
				</div>
			</td>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'packunidades_id'); ?>
					<?php echo $form->dropDownList($model,'packunidades_id',$model->getMenuPackDeUnidades(),array("empty"=>"Seleccione")); ?>
					<?php echo $form->error($model,'packunidades_id'); ?>
				</div>
			</td>
		</tr>
		<!-- RENGLON 4 -->
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'stockminimo'); ?>
					<?php echo $form->textField($model,'stockminimo',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'stockminimo'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'stockmaximo'); ?>
					<?php echo $form->textField($model,'stockmaximo',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'stockmaximo'); ?>
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