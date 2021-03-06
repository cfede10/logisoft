<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#empleado-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Empleados</h1>

<p>
	También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>,
	<b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b> o <b>=</b>) al principio de
	cada uno de los valores de búsqueda para especificar cómo se debe
	hacer la comparación.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display: none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>
<!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'empleado-grid',
	'itemsCssClass'=>'table table-striped', 
	'pager'=>array('htmlOptions'=>array('class'=>'pagination')), 	
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'apellido',
		'tipodoc',
		'nrodoc',
		'fechanacimiento',
		/*
		'cuil',
		'domicilio',
		'altura',
		'piso',
		'depto',
		'fechaingreso',
		'cargo_id',
		'legajo',
		'mail',
		'telfijo',
		'telmovil',
		'status',
		'provincia_id',
		'localidad_id',
		'fechacreacion',
		'fechamodificacion',
		'creadopor',
		'modificadopor',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
