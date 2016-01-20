<?php
/* @var $this DetallepedidocompraController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs = array (
		'Detallepedidocompras' 
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

<h1>Detalle pedido compras</h1>

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
