<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
$this->breadcrumbs = array (
		'Proveedors' => array (
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

<h1>Vista de Proveedor <?php echo $model->id; ?></h1>

<?php

$this->widget ( 'zii.widgets.CDetailView', array (
		'data' => $model,
		'htmlOptions' => array (
				'class' => 'table table-striped' 
		),
		'attributes' => array (
				'id',
				'razonsocial',
				'cuit',
				'domiciliolegal',
				'domiciliodeposito',
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
				'emailempresarial1',
				'emailempresarial2',
				// 'iva_id',
				array (
						'name' => 'iva_id',
						'value' => $model->iva->porcentaje 
				),
				'telfijo',
				'banco',
				'sucursul',
				// 'tipodecuenta_id',
				array (
						'name' => 'tipodecuenta_id',
						'value' => $model->tipodecuenta->descripcion 
				),
				'numcuenta',
				'cbu',
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
