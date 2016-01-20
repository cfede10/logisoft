<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
$this->breadcrumbs = array (
		'Proveedors' => array (
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
	$('#proveedor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
" );
?>

<h1>Administrar Proveedores</h1>

<?php

$this->widget ( 'zii.widgets.grid.CGridView', array (
		'id' => 'proveedor-grid',
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
				'razonsocial',
				// 'cuit',
				array (
						'name' => 'cuit',
						'htmlOptions' => array (
								'width' => '120' 
						) 
				),
				'domiciliolegal',
				'domiciliodeposito',
				// 'provincia_id',
				/*
				 * 'emailempresarial1',
				 * 'emailempresarial2',
				 * 'iva_id',
				 */
				// 'telfijo',
				array (
						'name' => 'telfijo',
						'htmlOptions' => array (
								'width' => '130' 
						) 
				),
				// 'localidad_id',
				array (
						'name' => 'localidad_id',
						'value' => '$data->localidad->nombre',
						'header' => 'Localidad',
						'filter' => CHtml::listData ( Localidad::model ()->findAll (), 'id', 'nombre' ) 
				),			
		/*
		'banco',
		'sucursul',
		'tipodecuenta_id',
		'numcuenta',
		'cbu',
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
