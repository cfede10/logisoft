<?php
/* @var $this IvaController */
/* @var $model Iva */
$this->breadcrumbs = array (
		'Ivas' => array (
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
	$('#iva-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
" );
?>

<h1>Administrar Ivas</h1>

<?php

$this->widget ( 'zii.widgets.grid.CGridView', array (
		'id' => 'iva-grid',
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
				'porcentaje',
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
