<?php
/* @var $this PedidodeventaController */
/* @var $model Pedidodeventa */
$this->breadcrumbs = array (
		'Pedidodeventas' => array (
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

<h1>Crear Pedidos de venta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>