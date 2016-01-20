<?php
/* @var $this PedidocompraController */
/* @var $model Pedidocompra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'pedidocompra-form',
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

	<table  STYLE="table-layout: fixed; width:100%;">
		<!-- RENGLON 1 -->
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'proveedor_id'); ?>
					<?php echo $form->dropDownList($model,'proveedor_id',$model->getMenuProveedores(),array("empty"=>"Seleccione")); ?>
					<?php echo $form->error($model,'proveedor_id'); ?>
					</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'pago_id'); ?>
					<?php echo $form->dropDownList($model,'pago_id',$model->getMenuPagos(),array("empty"=>"Seleccione")); ?>
					<?php echo $form->error($model,'pago_id'); ?>
				</div>
			</td>
		</tr>
		<!-- RENGLON 2 -->
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'fechapedido'); ?>
					<?php echo $form->textField($model,'fechapedido'); ?>
					<?php echo $form->error($model,'fechapedido'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'fechadeentrega'); ?>
					<?php echo $form->textField($model,'fechadeentrega'); ?>
					<?php echo $form->error($model,'fechadeentrega'); ?>
				</div>
			</td>
		</tr>
		<!-- RENGLON 3 -->
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'numerodefactura'); ?>
					<?php echo $form->textField($model,'numerodefactura',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'numerodefactura'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'numeroremito'); ?>
					<?php echo $form->textField($model,'numeroremito',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'numeroremito'); ?>
				</div>
			</td>
		</tr>
		<!-- RENGLON 4 -->
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'iva'); ?>
					<?php echo $form->dropDownList($model,'iva',$model->getMenuIva(),array("empty"=>"Seleccione")); ?>
					<?php echo $form->error($model,'iva'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'formadepago_id'); ?>
					<?php echo $form->dropDownList($model,'formadepago_id',$model->getMenuFormaDePago(),array("empty"=>"Seleccione")); ?>
					<?php echo $form->error($model,'formadepago_id'); ?>
				</div>
			</td>
		</tr>
		<!-- RENGLON 5 -->
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'subtotal'); ?>
					<?php echo $form->textField($model,'subtotal',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'subtotal'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'total'); ?>
					<?php echo $form->textField($model,'total',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'total'); ?>
				</div>
			</td>
		</tr>
		<!-- RENGLON 6 -->
		<!-- RENGLON 7 -->
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
		<!-- RENGLON 8 -->
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


	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar',array('class'=>'btn btn-primary btn-large')); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
<!-- form -->