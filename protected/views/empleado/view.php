<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */
$this->breadcrumbs = array (
		'Empleados' => array (
				'index' 
		),
		$model->id 
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
				'label' => 'Actualizar',
				'url' => array (
						'update',
						'id' => $model->id 
				) 
		),
		array (
				'label' => 'Eliminar',
				'url' => '#',
				'linkOptions' => array (
						'submit' => array (
								'delete',
								'id' => $model->id 
						),
						'confirm' => '¿Está seguro que desea eliminar este registro?' 
				) 
		),
		array (
				'label' => 'Administrar',
				'url' => array (
						'admin' 
				) 
		),
		array (
				'label' => 'MENU',
				'url' => array (
						'Menup/index' 
				) 
		) 
);
?>

<h1>Vista de Empleado <?php echo $model->id; ?></h1>

<?php

$this->widget ( 'zii.widgets.CDetailView', array (
		'data' => $model,
		'htmlOptions' => array (
				'class' => 'table table-striped' 
		),
		'attributes' => array (
				'id',
				'nombre',
				'apellido',
				'tipodoc',
				'nrodoc',
				// 'fechanacimiento',
				array (
						'name' => 'fechanacimiento',
						'value' => date_format ( new DateTime ( $model->fechanacimiento ), "d/m/Y" ) 
				),
				'cuil',
				'domicilio',
				'altura',
				'piso',
				'depto',
				// 'fechaingreso',
				array (
						'name' => 'fechaingreso',
						'value' => date_format ( new DateTime ( $model->fechaingreso ), "d/m/Y" ) 
				),
				// 'cargo_id',
				array (
						'name' => 'cargo_id',
						'value' => $model->cargo->descripcion 
				),
				'legajo',
				'mail',
				'telfijo',
				'telmovil',
				// 'provincia_id',
				array (
						'name' => 'provincia_id',
						'value' => $model->provincia->nombre 
				),
				// 'localidad_id',
				array (
						'name' => 'localidad_id',
						'value' => $model->localidad->nombre 
				),
				array (
						'name' => 'fechacreacion',
						'value' => date_format ( new DateTime ( $model->fechacreacion ), "d/m/Y" ) 
				),
				array (
						'name' => 'fechamodificacion',
						'value' => date_format ( new DateTime ( $model->fechamodificacion ), "d/m/Y" ) 
				),
				'creadopor',
				'modificadopor' 
		) 
) );
?>
