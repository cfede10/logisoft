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
				'label' => 'Administrar',
				'url' => array (
						'admin' 
				) 
		)
);
?>

<h1>Crear Proveedor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>