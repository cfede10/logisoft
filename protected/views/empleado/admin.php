<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */
$this->breadcrumbs = array (
		'Empleados' => array (
				'index' 
		),
		'Administrar' 
);

$this->menu = array (
		array (
				'label' => 'Listar',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Crear',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'MENU',
				'url' => array (
						'Menup/index' 
				) 
		) 
);

Yii::app ()->clientScript->registerScript ( 'search', "
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
" );
?>

<h1>Administrar Empleados</h1>

<?php

$this->widget ( 'zii.widgets.grid.CGridView', array (
		'id' => 'empleado-grid',
		'itemsCssClass' => 'table table-striped',
		'pager' => array (
				'htmlOptions' => array (
						'class' => 'pagination' 
				) 
		),
		'dataProvider' => $model->search (),
		'filter' => $model,
		'columns' => array (
				array (
						'name' => 'id',
						'htmlOptions' => array (
								'width' => '30' 
						) 
				),
				array (
						'name' => 'nombre',
						'htmlOptions' => array (
								'width' => '120' 
						) 
				),
				array (
						'name' => 'apellido',
						'htmlOptions' => array (
								'width' => '120' 
						) 
				),
				// 'nrodoc',
				array (
						'name' => 'nrodoc',
						'htmlOptions' => array (
								'width' => '80' 
						) 
				),
				// 'fechanacimiento',
				// 'cuil',
				'domicilio',
				// 'altura',
				array (
						'name' => 'altura',
						'htmlOptions' => array (
								'width' => '50' 
						) 
				),
		/*
		'piso',
		'depto',
		'fechaingreso', 
		'cargo_id',
		*/
		array (
						'name' => 'cargo_id',
						'value' => '$data->cargo->descripcion',
						// 'header'=>'Cargo',
						'filter' => CHtml::listData ( Cargo::model ()->findAll (), 'id', 'descripcion' ) 
				),			
		/*
		'legajo',
		'mail',
		'telfijo',
		'telmovil',
		'provincia_id',
		'localidad_id',
		'fechacreacion',
		'fechamodificacion',
		'creadopor',
		'modificadopor',
		*/
		array (
						'class' => 'CButtonColumn' 
				) 
		) 
) );
?>
