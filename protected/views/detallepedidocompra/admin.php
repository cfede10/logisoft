<?php
/* @var $this DetallepedidocompraController */
/* @var $model Detallepedidocompra */
$this->breadcrumbs = array (
		'Detallepedidocompras' => array (
				'index' 
		),
		'Administrar' 
);

$this->menu = array (
		// array('label'=>'Listar', 'url'=>array('index')),
		array (
				'label' => 'Crear',
				'url' => array (
						'create' 
				) 
		) 
)
// array('label'=>'MENU', 'url'=>array('Menup/index')),
;

Yii::app ()->clientScript->registerScript ( 'search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#detallepedidocompra-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
" );
?>

<h1>Administrar Detalle pedido de compras</h1>

<?php

$this->widget ( 'zii.widgets.grid.CGridView', array (
		'id' => 'detallepedidocompra-grid',
		'itemsCssClass' => 'table table-striped',
		'pager' => array (
				'htmlOptions' => array (
						'class' => 'pagination' 
				) 
		),
		'dataProvider' => $model->search (),
		'filter' => $model,
		'columns' => array (
				'id',
				'producto_id',
				'cantidad',
		/*
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
