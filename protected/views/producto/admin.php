<?php
/* @var $this ProductoController */
/* @var $model Producto */
$this->breadcrumbs = array (
		'Productos' => array (
				'index' 
		),
		'Administrar' 
);

$this->menu = array (
		array (
				'label' => 'Crear',
				'url' => array (
						'create' 
				) 
		)
);

Yii::app ()->clientScript->registerScript ( 'search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#producto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
" );
?>

<h1>Administrar Productos</h1>

<?php

$this->widget ( 'zii.widgets.grid.CGridView', array (
		'id' => 'producto-grid',
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
								'width' => '30' 
						) 
				),
				'nombre',
				// 'descripcion',
				array (
						'name' => 'descripcion',
						'htmlOptions' => array (
								'width' => '120' 
						) 
				),
				// 'tipoproducto_id',
				array (
						'name' => 'tipoproducto_id',
						'value' => '$data->tipoproducto->descripcion',
						'header' => 'Tipo de producto',
						'htmlOptions' => array (
								'width' => '150' 
						),
						'filter' => CHtml::listData ( Tipoproducto::model ()->findAll (), 'id', 'descripcion' ) 
				),
				// 'preciounitario',
				// 'packunidades_id',
				array (
						'name' => 'stockminimo',
						'htmlOptions' => array (
								'width' => '40' 
						) 
				),
				array (
						'name' => 'stockmaximo',
						'htmlOptions' => array (
								'width' => '40' 
						) 
				),
				// 'proveedor_id',
				array (
						'name' => 'proveedor_id',
						'value' => '$data->proveedor->razonsocial',
						'header' => 'Proveedor',
						'htmlOptions' => array (
								'width' => '150' 
						),
						'filter' => CHtml::listData ( Proveedor::model ()->findAll (), 'id', 'razonsocial' ) 
				),
		/*
		array(
                'name'=>'fechacreacion',
                //'type'=>'date',
                'value'=>'date_format(new DateTime($data->fechacreacion),"d/m/Y")'),
		array(
                'name'=>'fechamodificacion',
                'value'=>'date_format(new DateTime($data->fechamodificacion),"d/m/Y")'),	
		'creadopor',
		'modificadopor',
		*/
		array (
						'class' => 'CButtonColumn' 
				) 
		) 
) );
?>
