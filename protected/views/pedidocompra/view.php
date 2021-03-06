<?php
/* @var $this PedidocompraController */
/* @var $model Pedidocompra */
$this->breadcrumbs = array (
		'Pedidocompras' => array (
				'index' 
		),
		$model->id 
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
				'label' => 'Actualizar',
				'url' => array (
						'update',
						'id' => $model->id 
				) 
		),
		array (
				'label' => 'Eliminar',
				'url' => '#',
				'linkOptions' => array (
						'submit' => array (
								'delete',
								'id' => $model->id 
						),
						'confirm' => '¿Está seguro que desea eliminar este registro?' 
				) 
		),
		array (
				'label' => 'Administrar',
				'url' => array (
						'admin' 
				) 
		),
		array (
				'label' => 'MENU',
				'url' => array (
						'Menup/index' 
				) 
		) 
);
?>

<h1>Vista de Pedidocompra <?php echo $model->id; ?></h1>

<?php

$this->widget ( 'zii.widgets.CDetailView', array (
		'data' => $model,
		'htmlOptions' => array (
				'class' => 'table table-striped' 
		),
		'attributes' => array (
				'id',
				'proveedor_id',
				'pago_id',
				'detallepedidocompra_id',
				'fechapedido',
				'fechadeentrega',
				'numerodefactura',
				'numeroremito',
				'iva',
				'subtotal',
				'total',
				'formadepago_id',
				'fechacreacion',
				'fechamodificacion',
				'creadopor',
				'modificadopor' 
		) 
) );
?>
