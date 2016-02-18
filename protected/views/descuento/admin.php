<?php
/* @var $this DescuentoController */
/* @var $model Descuento */
$this->breadcrumbs = array (
		'Descuentos' => array (
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
	$('#descuento-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
" );
?>

<h1>Administrar Descuentos</h1>

<?php

$this->widget ( 'zii.widgets.grid.CGridView', array (
		'id' => 'descuento-grid',
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
