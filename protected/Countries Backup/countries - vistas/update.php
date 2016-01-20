<h1>Actualizando el country #<?php echo $model->id?></h1>
<!-- $model->id  -->


<?php $form=$this->beginWidget("CActiveForm");?>
<!-- usamos un widget que trae el framework, que es para crear formularios, 
												una variable form que accedo a this, this en las vistas es al controlador, (en este caso es el controlador Countries) 
												accedes al nombre de la clase del widget (CActiveForm)  -->

<b>Nombre</b>
<br>
<?php echo $form->textField($model,"name");?>
<!-- Creo el campo TextFiel, este recibe el modelo (model) y el nombre del campo (name)-->
<?php echo $form->error($model,"name");?>
<!-- etiqueta error, para que me muestre los errores, se envia el modelo y el nombre del campo -->
<br>
<!-- salto de linea -->


<b>Status</b>
<br>
<?php echo $form->textField($model,"status");?>
<!-- -->
<?php echo $form->error($model,"status");?>
<!-- -->
<br>
<!-- salto de linea -->



<?php echo CHtml::submitButton("Actualizar",array("class"=>"btn btn-primary btn-large"));?>
<!-- Boton con nombre "Actualizar" -->

<?php $this->endWidget();?>
<!-- cierro el Widget (siempre que el Widget empieze con begin debe cerrarse) -->
