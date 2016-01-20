<?php
/* @var $this ContactoproveedorController */
/* @var $model Contactoproveedor */
$this->breadcrumbs = array (
		'Contactoproveedors' => array (
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

<h1>Crear Contacto de proveedor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>