<?php
/* @var $this PedidocompraController */
/* @var $model Pedidocompra */
$this->breadcrumbs = array (
		'Pedidocompras' => array (
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

<h1>Crear Pedido de compra</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>