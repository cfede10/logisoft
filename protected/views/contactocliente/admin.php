<?php
/* @var $this ContactoclienteController */
/* @var $model Contactocliente */
$this->breadcrumbs = array (
		'Contactoclientes' => array (
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
	$('#contactocliente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
" );
?>

<h1>Administrar Contactos de Clientes</h1>

<?php

$this->widget ( 'zii.widgets.grid.CGridView', array (
		'id' => 'contactocliente-grid',
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
				'email',
				array (
						'name' => 'cliente_id',
						'value' => '$data->cliente->razonsocial',
						// 'header'=>'Cliente',
						'filter' => CHtml::listData ( Cliente::model ()->findAll (), 'id', 'razonsocial' ) 
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
