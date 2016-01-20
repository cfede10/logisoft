<?php
/* @var $this DetallepedidoventaController */
/* @var $model Detallepedidoventa */
$this->breadcrumbs = array (
		'Detallepedidoventas' => array (
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

<h1>Crear Detalle pedido de venta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>