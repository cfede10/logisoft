<?php
/* @var $this FormadepagoController */
/* @var $model Formadepago */
$this->breadcrumbs = array (
		'Formadepagos' => array (
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

<h1>Vista de Formadepago <?php echo $model->id; ?></h1>

<?php

$this->widget ( 'zii.widgets.CDetailView', array (
		'data' => $model,
		'htmlOptions' => array (
				'class' => 'table table-striped' 
		),
		'attributes' => array (
				'id',
				'descripcion',
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
