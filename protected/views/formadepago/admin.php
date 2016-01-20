<?php
/* @var $this FormadepagoController */
/* @var $model Formadepago */
$this->breadcrumbs = array (
		'Formadepagos' => array (
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
	$('#formadepago-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
" );
?>

<h1>Administrar Formas de pagos</h1>

<?php

$this->widget ( 'zii.widgets.grid.CGridView', array (
		'id' => 'formadepago-grid',
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
				'descripcion',
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
