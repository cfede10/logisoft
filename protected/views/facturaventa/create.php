<?php
/* @var $this FacturaventaController */
/* @var $model Facturaventa */
$this->breadcrumbs = array (
		'Facturaventas' => array (
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

<h1>Crear Factura de venta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>