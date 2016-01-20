<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
$this->breadcrumbs = array (
		'Proveedors' => array (
				'index' 
		),
		'Crear' 
);

$this->menu = array (
		array (
				'label' => 'Listar',
				'url' => array (
						'index' 
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

<h1>Crear Proveedor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>