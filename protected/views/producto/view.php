<?php
/* @var $this ProductoController */
/* @var $model Producto */
$this->breadcrumbs = array (
		'Productos' => array (
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

<h1>Vista de Producto <?php echo $model->id; ?></h1>

<?php

$this->widget ( 'zii.widgets.CDetailView', array (
		'data' => $model,
		'htmlOptions' => array (
				'class' => 'table table-striped' 
		),
		'attributes' => array (
				'id',
				'nombre',
				'descripcion',
				// 'tipoproducto_id',
				array (
						'name' => 'tipoproducto_id',
						'value' => $model->tipoproducto->descripcion 
				),
				'preciounitario',
				// 'packunidades_id',
				array (
						'name' => 'packunidades_id',
						'value' => $model->packunidades->unidad 
				),
				'stockminimo',
				'stockmaximo',
				// 'proveedor_id',
				array (
						'name' => 'proveedor_id',
						'value' => $model->proveedor->razonsocial 
				),
				'fechacreacion',
				'fechamodificacion',
				'creadopor',
				'modificadopor' 
		) 
) );
?>
