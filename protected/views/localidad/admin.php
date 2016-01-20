<?php
/* @var $this LocalidadController */
/* @var $model Localidad */
$this->breadcrumbs = array (
		'Localidads' => array (
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
	$('#localidad-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
" );
?>

<h1>Administrar Localidades</h1>
<!--
<p>
<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación. 
</p>
-->
<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display: none">
<?php

$this->renderPartial ( '_search', array (
		'model' => $model 
) );
?>
</div>
<!-- search-form -->

<?php

$this->widget ( 'zii.widgets.grid.CGridView', array (
		'id' => 'localidad-grid',
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
				array (
						'name' => 'cp',
						'htmlOptions' => array (
								'width' => '100' 
						) 
				),
				array (
						'name' => 'provincia_id',
						'value' => '$data->provincia->nombre',
						'header' => 'Provincia',
						'filter' => CHtml::listData ( Provincia::model ()->findAll (), 'id', 'nombre' ) 
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
