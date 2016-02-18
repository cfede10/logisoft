<?php
/* @var $this TipousuarioController */
/* @var $model Tipousuario */
$this->breadcrumbs = array (
		'Tipousuarios' => array (
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
	$('#tipousuario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
" );
?>

<h1>Administrar Tipos de usuarios</h1>

<?php

$this->widget ( 'zii.widgets.grid.CGridView', array (
		'id' => 'tipousuario-grid',
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
				array (
						'name' => 'descripcion',
						'htmlOptions' => array (
								'width' => '350' 
						) 
				),
				array (
						'name' => 'fechacreacion',
						// 'type'=>'date',
						'header' => 'Fecha de creacion',
						'value' => 'date_format(new DateTime($data->fechacreacion),"d/m/Y")' 
				),
				array (
						'name' => 'fechamodificacion',
						'header' => 'Fecha de modificacion',
						'value' => 'date_format(new DateTime($data->fechacreacion),"d/m/Y")' 
				),
		/*
		'creadopor',
		'modificadopor',
		*/
		array (
						'class' => 'CButtonColumn' 
				) 
		) 
) );
?>
