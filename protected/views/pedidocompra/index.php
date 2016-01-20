<?php
/* @var $this PedidoCompraController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs = array (
		'Pedido Compras'
);

$this->menu = array (
		array (
				'label' => 'Crear',
				'url' => array (
						'create'
				)
		),
		array (
				'label' => 'Administrar',
				'url' => array (
						'admin'
				)
		)
);
?>

<h1>Pedido de Compras</h1>

<?php

$this->widget ( 'zii.widgets.CListView', array (
		'dataProvider' => $dataProvider,
		'itemView' => '_view',
		'pager' => array (
				'htmlOptions' => array (
						'class' => 'pagination' 
				) 
		) 
) );
?>
