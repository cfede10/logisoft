<?php
/* @var $this DetallepedidocompraController */
/* @var $model Detallepedidocompra */
$this->breadcrumbs = array (
		'Detallepedidocompras' => array (
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

<h1>Crear Detalle pedido de compra</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>