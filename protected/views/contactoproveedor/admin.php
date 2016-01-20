<?php
/* @var $this ContactoproveedorController */
/* @var $model Contactoproveedor */
$this->breadcrumbs = array (
		'Contactoproveedors' => array (
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
	$('#contactoproveedor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
" );
?>

<h1>Administrar Contactos de proveedores</h1>

<?php

$this->widget ( 'zii.widgets.grid.CGridView', array (
		'id' => 'contactoproveedor-grid',
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
				'apellido',
				// 'tipodoc',
				// 'nrodoc',
				'telefono',
				'celular',
				// 'email',
				array (
						'name' => 'email',
						'htmlOptions' => array (
								'width' => '120' 
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
