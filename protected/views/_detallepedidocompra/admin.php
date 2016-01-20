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
	$('#detallepedidocompra-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
" );
?>

<h1>Administrar Detalle pedido compras</h1>
<?php
/*
 * <p>
 * También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
 * o <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
 * </p>
 *
 * <?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
 * <div class="search-form" style="display:none">
 * <?php $this->renderPartial('_search',array(
 * 'model'=>$model,
 * )); ?>
 * </div><!-- search-form -->
 */
?>

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
				// 'producto_id',
				array (
						'name' => 'producto_id',
						'value' => '$data->tipoproducto->descripcion',
						'header' => 'Tipo de producto',
						'filter' => CHtml::listData ( Tipoproducto::model ()->findAll (), 'id', 'descripcion' ) 
				),
				'cantidad',
				// 'fechacreacion',
				// 'fechamodificacion',
				array (
						'name' => 'fechacreacion',
						// 'type'=>'date',
						'value' => 'date_format(new DateTime($data->fechacreacion),"d/m/Y")' 
				),
				array (
						'name' => 'fechamodificacion',
						'value' => 'date_format(new DateTime($data->fechamodificacion),"d/m/Y")' 
				),
				// 'creadopor',
				// 'modificadopor',
				array (
						'class' => 'CButtonColumn' 
				) 
		) 
) );
?>
