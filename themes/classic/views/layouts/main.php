<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $this->pageTitle;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/style2.css"
	rel="stylesheet">
<link
	href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css"
	rel="stylesheet">
<!-- href le decis donde va a ir a buscar los css y demas osea en classic -->
<link
	href="<?php echo Yii::app()->theme->baseUrl;?>/css/responsive.min.css"
	rel="stylesheet">


<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed"
	href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon"
	href="<?php echo Yii::app()->theme->baseUrl;?>/ico/favicon.png">
</head>
<body>

	<div class="navbar navbar-static-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse"> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span>
				</a> <a class="brand" href="#">L O G I S O F T</a>
				<div class="pull-right"> 
        <?php
								
$this->widget ( 'zii.widgets.CMenu', array (
										'htmlOptions' => array (
												"class" => "nav" 
										),
										'items' => array (
												array (
														'label' => 'Menu',
														'itemOptions' => array (
																'id' => 'menu' 
														),
														'visible' => ! Yii::app ()->user->isGuest 
												),
												array (
														'label' => 'Home',
														'url' => array (
																'/site/index' 
														) 
												),
												array (
														'label' => 'Login',
														'url' => array (
																'/site/login' 
														),
														'visible' => Yii::app ()->user->isGuest 
												),
												array (
														'label' => 'Logout (' . Yii::app ()->user->name . ')',
														'url' => array (
																'/site/logout' 
														),
														'visible' => ! Yii::app ()->user->isGuest 
												) 
										) 
								) );
								?>

      </div>
				<!--/.nav-collapse -->

			</div>
		</div>
	</div>
	<div id="mainmenu" style="display: none">
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
														'empleado/index' 
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

<?php if(!empty($this->breadcrumbs)):?>
  <div class="container" style="padding: 0">
		<div class="row-fluid">
			<div class="span12">
      <?php
	
$this->widget ( 'zii.widgets.CBreadcrumbs', array (
			'htmlOptions' => array (
					"style" => "margin: 10px 0;" 
			),
			'links' => $this->breadcrumbs 
	) );
	?>
				<!-- breadcrumbs -->
			</div>
		</div>
	</div>
<?php endif?>

<?php if(($msgs=Yii::app()->user->getFlashes())!==null and $msgs!==array()):?>
  <div class="container" style="padding-top: 0">
		<div class="row-fluid">
			<div class="span12">
        <?php foreach($msgs as $type => $message):?>
          <div class="alert alert-<?php echo $type?>">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<h4><?php echo ucfirst($type)?>!</h4>
            <?php echo $message?>
          </div>
        <?php endforeach;?>
      </div>
		</div>
	</div>
<?php endif;?> 


<?php echo $content;?>
  
<footer class="footer bg-ft clearfix pd4">
		<div class="container">
			<!--footer container-->
			<div class="row-fluid">
				<div class="span3">
					<section>
						<h4>
							<span>Contacto</span>
						</h4>
						<p>
							Logisoft Corporation<br> Rosario Argentina<br> <strong>Telefono:
								123456789</strong><br> <strong>Fax: 123456789 </strong><br> <span
								class="overflow"><strong>email: logisoft@gmail.com</strong></span>
						</p>
					</section>
					<!--close section-->

					<section>
						<h4>
							<span>SEGUINOS</span>
						</h4>
						<div class="social">
							<a href="https://www.facebook.com/guillermo.raffin"
								TARGET="_BLANK"><i class="icon-facebook facebook"></i></a> <a
								href="https://twitter.com/Guille_jei" TARGET="_BLANK"><i
								class="icon-twitter twitter"></i></a> <a
								href="https://www.linkedin.com" TARGET="_BLANK"><i
								class="icon-linkedin linkedin"></i></a>

						</div>
					</section>
					<!--close section-->
				</div>
				<!-- close .span3 -->

				<!--section containing newsletter signup and recent images-->
				<div class="span5">
					<section>
						<h4>
							<span>SOPORTE TÉCNICO</span>
						</h4>
						<p>0341 - 4210125 / int. 143</p>
						<p>No dude en contactarse con nosotros</p>
						<p>Solucionaremos sus problemas a la brevedad</p>
					</section>
					<!--close section-->
				</div>
				<!-- close .span5 -->

				<!--section containing blog posts-->
				<div class="span4">
					<section>
						<h4>
							<span>¿Quiénes somos?</span>
						</h4>
						<p>La empresa líder en sistemas ERP para la logistica.</p>
					</section>
				</div>
				<!-- close .span4 -->
			</div>
			<!-- close .row-fluid-->
		</div>
		<!-- close footer .container-->
	</footer>


	<section class="footer-credits">
		<div class="container">
			<ul class="clearfix">
				<li>© 2013 Logisoft. Todos los derechos reservados</li>
			</ul>
		</div>
		<!--close footer-credits container-->
	</section>

	<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/menu.js"></script>
	<script
		src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap.min.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.ba-bbq.js"></script>
</body>
</html>
