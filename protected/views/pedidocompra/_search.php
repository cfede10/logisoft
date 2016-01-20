<?php
/* @var $this PedidocompraController */
/* @var $model Pedidocompra */
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
		<?php echo $form->label($model,'proveedor_id'); ?>
		<?php echo $form->textField($model,'proveedor_id'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'pago_id'); ?>
		<?php echo $form->textField($model,'pago_id'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'detallepedidocompra_id'); ?>
		<?php echo $form->textField($model,'detallepedidocompra_id'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'fechapedido'); ?>
		<?php echo $form->textField($model,'fechapedido'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'fechadeentrega'); ?>
		<?php echo $form->textField($model,'fechadeentrega'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'numerodefactura'); ?>
		<?php echo $form->textField($model,'numerodefactura',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'numeroremito'); ?>
		<?php echo $form->textField($model,'numeroremito',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'iva'); ?>
		<?php echo $form->textField($model,'iva',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'subtotal'); ?>
		<?php echo $form->textField($model,'subtotal',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'total'); ?>
		<?php echo $form->textField($model,'total',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'formadepago_id'); ?>
		<?php echo $form->textField($model,'formadepago_id'); ?>
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