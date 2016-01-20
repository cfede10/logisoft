<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'empleado-form',
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
	<table WIDTH="100%" STYLE="table-layout: fixed">
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'nombre'); ?>
					<?php echo $form->textField($model,'nombre',array('size'=>43,'maxlength'=>43)); ?>
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
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'tipo de documento'); ?>
					<?php echo $form->textField($model,'tipodoc',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'tipodoc'); ?>
				</div>
			</td>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'nro de documento'); ?>
					<?php echo $form->textField($model,'nrodoc'); ?>
					<?php echo $form->error($model,'nrodoc'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'fecha de nacimiento'); ?>
					<?php
					$this->widget ( 'zii.widgets.jui.CJuiDatePicker', array (
							
							'attribute' => 'fechanacimiento',
							'model' => $model,
							'value' => $model->fechanacimiento,
							'language' => 'es',
							'options' => array (
									'dateFormat' => 'dd-mm-yy',
									'showButtonPanel' => true,
									'changeYear' => true,
									'yearRange' => '-80:-0',
									'minDate' => '-80Y', // fecha minima
									'maxDate' => '-0Y' 
							) // fecha maxima
 
					) );
					?>
					<?php echo $form->error($model,'fechanacimiento'); ?>
				</div>
			</td>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'cuil'); ?>
					<?php echo $form->textField($model,'cuil',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'cuil'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'domicilio'); ?>
					<?php echo $form->textField($model,'domicilio',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'domicilio'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'altura'); ?>
					<?php echo $form->textField($model,'altura'); ?>
					<?php echo $form->error($model,'altura'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'piso'); ?>
					<?php echo $form->textField($model,'piso'); ?>
					<?php echo $form->error($model,'piso'); ?>
				</div>
			</td>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'departamento'); ?>
					<?php echo $form->textField($model,'depto',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'depto'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'fecha de ingreso'); ?>
					<?php
					$this->widget ( 'zii.widgets.jui.CJuiDatePicker', array (
							'attribute' => 'fechaingreso',
							'model' => $model,
							'value' => $model->fechaingreso,
							'language' => 'es',
							'options' => array (
									'dateFormat' => 'dd-mm-yy',
									'showButtonPanel' => true,
									'changeYear' => true,
									'yearRange' => '-80:-0',
									'minDate' => '-80Y', // fecha minima
									'maxDate' => '-0Y' 
							) // fecha maxima
 
					) );
					?>
					<?php echo $form->error($model,'fechaingreso'); ?>
				</div>
			</td>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'cargo'); ?>
					<?php echo $form->dropDownList($model,'cargo_id',$model->getMenuCargos(),array("empty"=>"Seleccione")); ?>
					<?php echo $form->error($model,'cargo_id'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'mail'); ?>
					<?php echo $form->textField($model,'mail',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'mail'); ?>
				</div>
			</td>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'legajo'); ?>
					<?php echo $form->textField($model,'legajo',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'legajo'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="">
					<?php echo $form->labelEx($model,'telefono fijo'); ?>
					<?php echo $form->textField($model,'telfijo',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'telfijo'); ?>
				</div>
			</td>

			<td>
				<div class="">
					<?php echo $form->labelEx($model,'telefono movil'); ?>
					<?php echo $form->textField($model,'telmovil',array('size'=>45,'maxlength'=>45)); ?>
					<?php echo $form->error($model,'telmovil'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="">		
					<?php
					$htmlOptions = array (
							"ajax" => array (
									"url" => $this->createUrl ( "CiudadesProvincias" ),
									"type" => "POST",
									"update" => "#Empleado_localidad_id" 
							) 
					);
					?>
					<?php echo $form->labelEx($model,'provincia'); ?>
					<?php echo $form->dropDownList($model,'provincia_id',$model->getMenuProvincias(),$htmlOptions); ?>
					<?php echo $form->error($model,'provincia_id'); ?>
				</div>
			</td>

			<td>
				<div class="">			
					<?php echo $form->labelEx($model,'localidad'); ?>
					<?php echo $form->dropDownList($model,'localidad_id',$model->getMenuLocalidades()); ?>
					<?php echo $form->error($model,'localidad_id'); ?>
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