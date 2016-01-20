<div id="mainmenu">
	<?php
	
$this->widget ( 'zii.widgets.CMenu', array (
			'activeCssClass' => 'active',
			'activateParents' => true,
			'items' => array (
					array (
							'label' => 'Usuarios',
							'url' => array (
									'#' 
							),
							'items' => array (
									array (
											'label' => 'ABM Usuarios',
											'url' => array (
													'usuario/index' 
											) 
									),
									array (
											'label' => 'ABM Tipo de Usuario',
											'url' => array (
													'tipousuario/index' 
											) 
									) 
							),
							'htmlOptions' => array (
									'class' => 'submenu' 
							) 
					),
					array (
							'label' => 'Empleados',
							'url' => array (
									'#' 
							),
							'items' => array (
									array (
											'label' => 'ABM Empleados',
											'url' => array (
													'usuario/index' 
											) 
									),
									array (
											'label' => 'ABM Cargos',
											'url' => array (
													'cargo/index' 
											) 
									) 
							),
							'htmlOptions' => array (
									'class' => 'submenu' 
							) 
					),
					array (
							'label' => 'Clientes',
							'url' => array (
									'#' 
							),
							'items' => array (
									array (
											'label' => 'ABM Clientes',
											'url' => array (
													'cliente/index' 
											) 
									),
									array (
											'label' => 'ABM Contactos',
											'url' => array (
													'contactocliente/index' 
											) 
									),
									array (
											'label' => 'ABM Descuentos a Clientes',
											'url' => array (
													'descuento/index' 
											) 
									) 
							),
							'htmlOptions' => array (
									'class' => 'submenu' 
							) 
					),
					array (
							'label' => 'Proveedores',
							'url' => array (
									'#' 
							),
							'items' => array (
									array (
											'label' => 'ABM Proveedores',
											'url' => array (
													'proveedor/index' 
											) 
									),
									array (
											'label' => 'ABM Contactos',
											'url' => array (
													'contactoproveedor/index' 
											) 
									) 
							),
							'htmlOptions' => array (
									'class' => 'submenu' 
							) 
					),
					array (
							'label' => 'Productos',
							'url' => array (
									'#' 
							),
							'items' => array (
									array (
											'label' => 'ABM Productos',
											'url' => array (
													'producto/index' 
											) 
									),
									array (
											'label' => 'ABM Tipos de Producto',
											'url' => array (
													'tipoproducto/index' 
											) 
									),
									array (
											'label' => 'ABM stock',
											'url' => array (
													'stock/index' 
											) 
									) 
							),
							'htmlOptions' => array (
									'class' => 'submenu' 
							) 
					),
					array (
							'label' => 'Tablas',
							'url' => array (
									'#' 
							),
							'items' => array (
									array (
											'label' => 'ABM Vehiculos',
											'url' => array (
													'vehiculo/index' 
											) 
									),
									array (
											'label' => 'ABM Provincias',
											'url' => array (
													'provincia/index' 
											) 
									),
									array (
											'label' => 'ABM Localidades',
											'url' => array (
													'localidad/index' 
											) 
									),
									array (
											'label' => 'ABM IVAs',
											'url' => array (
													'iva/index' 
											) 
									),
									array (
											'label' => 'ABM Formas de Pago',
											'url' => array (
													'formadepago/index' 
											) 
									),
									array (
											'label' => 'ABM Pack de unidades',
											'url' => array (
													'packunidades/index' 
											) 
									),
									array (
											'label' => 'ABM Pago',
											'url' => array (
													'pago/index' 
											) 
									),
									array (
											'label' => 'ABM Situacion Impositiva',
											'url' => array (
													'situacionimpositiva/index' 
											) 
									),
									array (
											'label' => 'ABM Tipo de Cuentas',
											'url' => array (
													'tipocuenta/index' 
											) 
									) 
							),
							'htmlOptions' => array (
									'class' => 'submenu' 
							) 
					),
					array (
							'label' => 'Compras',
							'url' => array (
									'#' 
							),
							'items' => array (
									array (
											'label' => 'ABM Detalle Pedido de Compras',
											'url' => array (
													'detallepedidocompra/index' 
											) 
									) 
							),
							'htmlOptions' => array (
									'class' => 'submenu' 
							) 
					),
					array (
							'label' => 'Ventas',
							'url' => array (
									'#' 
							),
							'items' => array (
									array (
											'label' => 'ABM Detalle Pedido de Ventas',
											'url' => array (
													'detallepedidoventa/index' 
											) 
									),
									array (
											'label' => 'ABM Facturas de Venta',
											'url' => array (
													'facturaventa/index' 
											) 
									),
									array (
											'label' => 'ABM Remitos de Venta',
											'url' => array (
													'remitoventa/index' 
											) 
									) 
							),
							'htmlOptions' => array (
									'class' => 'submenu' 
							) 
					),
					array (
							'label' => 'Pedidos',
							'url' => array (
									'#' 
							),
							'items' => array (
									array (
											'label' => 'ABM Pedido de Compra',
											'url' => array (
													'pedidocompra/index' 
											) 
									),
									array (
											'label' => 'ABM Pedido de Venta',
											'url' => array (
													'pedidoventa/index' 
											) 
									) 
							),
							'htmlOptions' => array (
									'class' => 'submenu' 
							) 
					) 
			),
			'htmlOptions' => array (
					'class' => 'menu customMenu' 
			) 
	) );
	?>	
</div>
<!-- mainmenu -->
<div class='container'></div>