<?php
/* @var $this PedidocompraController */
/* @var $model Pedidocompra */
$this->breadcrumbs = array (
		'Pedidocompras' => array (
				'index' 
		),
		'Administrar' 
);

$this->menu = array (
		array (
				'label' => 'Listar',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Crear',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'MENU',
				'url' => array (
						'Menup/index' 
				) 
		) 
);

Yii::app ()->clientScript->registerScript ( 'search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pedidocompra-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
" );
?>

<h1>Administrar Pedidos de compras</h1>

<?php

$this->widget ( 'zii.widgets.grid.CGridView', array (
		'id' => 'pedidocompra-grid',
		'itemsCssClass' => 'table table-striped',
		'pager' => array (
				'htmlOptions' => array (
						'class' => 'pagination' 
				) 
		),
		'dataProvider' => $model->search (),
		'filter' => $model,
		'columns' => array (
				array (
						'name' => 'id',
						'htmlOptions' => array (
								'width' => '10' 
						) 
				),
				// 'proveedor_id',
				array (
						'name' => 'proveedor_id',
						'value' => '$data->proveedor->razonsocial',
						// 'header'=>'Cliente',
						'htmlOptions' => array (
								'width' => '120' 
						),
						'filter' => CHtml::listData ( proveedor::model ()->findAll (), 'id', 'razonsocial' ) 
				),
				// 'pago_id',
				array (
						'name' => 'pago_id',
						'value' => '$data->pago->descripcion',
						// 'header'=>'Cliente',
						'filter' => CHtml::listData ( proveedor::model ()->findAll (), 'id', 'descripcion' ) 
				),
				// 'fechapedido',
				array (
						'name' => 'fechapedido',
						'htmlOptions' => array (
								'width' => '120' 
						) 
				),
				// 'fechadeentrega',
				array (
						'name' => 'fechadeentrega',
						'htmlOptions' => array (
								'width' => '120' 
						) 
				),
				// 'detallepedidocompra_id',
				array (
						'name' => 'detallepedidocompra_id',
						'htmlOptions' => array (
								'width' => '10' 
						) 
				),
		/*
		'numerodefactura',
		'numeroremito',
		'iva',
		'subtotal',
		'total',
		'formadepago_id',
		'fechacreacion',
		'fechamodificacion',
		'creadopor',
		'modificadopor',
		*/
		array (
						'class' => 'CButtonColumn' 
				) 
		) 
) );
?>
