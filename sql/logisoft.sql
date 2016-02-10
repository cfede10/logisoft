-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-02-2016 a las 03:59:44
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `logisoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `descripcion`, `fechacreacion`, `fechamodificacion`, `creadopor`, `modificadopor`) VALUES
(1, 'Transportista', '2015-02-27', '2015-02-27', 'superadmin', 'superadmin'),
(2, 'Encargado de Facturacion', '2015-05-30', '2015-05-30', 'superadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombrecomercial` varchar(45) DEFAULT NULL,
  `razonsocial` varchar(90) NOT NULL,
  `cuit` varchar(45) DEFAULT NULL,
  `llbb` varchar(45) DEFAULT NULL,
  `situacionimpositiva_id` int(11) NOT NULL,
  `domiciliolegal` varchar(45) DEFAULT NULL,
  `domiciodeposito` varchar(45) DEFAULT NULL,
  `telefono` int(11) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `emailempresarial1` varchar(45) DEFAULT NULL,
  `emailempresarial2` varchar(45) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `localidad_id` int(11) NOT NULL,
  `provincia_id` int(11) NOT NULL,
  `iva_id` int(11) NOT NULL,
  `descuento_id` int(11) NOT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cliente_localidad1_idx` (`localidad_id`),
  KEY `fk_cliente_provincia1_idx` (`provincia_id`),
  KEY `fk_cliente_iva1_idx` (`iva_id`),
  KEY `fk_cliente_descuento1_idx` (`descuento_id`),
  KEY `fk_cliente_situacionimpositiva1_idx` (`situacionimpositiva_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactocliente`
--

CREATE TABLE IF NOT EXISTS `contactocliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `tipodoc` varchar(45) NOT NULL,
  `nrodoc` varchar(45) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `cliente_id` int(11) NOT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contactocliente_cliente1_idx` (`cliente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactoproveedor`
--

CREATE TABLE IF NOT EXISTS `contactoproveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `tipodoc` varchar(45) NOT NULL,
  `nrodoc` varchar(45) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `proveedor_id` int(11) NOT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contactoproveedor_proveedor1_idx` (`proveedor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuento`
--

CREATE TABLE IF NOT EXISTS `descuento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `porcentaje` varchar(45) NOT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `descuento`
--

INSERT INTO `descuento` (`id`, `descripcion`, `porcentaje`, `fechacreacion`, `fechamodificacion`, `creadopor`, `modificadopor`) VALUES
(1, 'Primero', '5', '2015-03-04', '2015-03-04', 'superadmin', 'superadmin'),
(2, 'Segundo', '10', '2015-03-04', '2015-03-04', 'superadmin', 'superadmin'),
(3, 'Tercero', '15', '2015-03-04', '2015-03-04', 'superadmin', 'superadmin'),
(4, 'Cuarto', '20', '2015-03-04', '2015-03-04', 'superadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedidocompra`
--

CREATE TABLE IF NOT EXISTS `detallepedidocompra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pedido_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pedido_id_idx` (`pedido_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedidoventa`
--

CREATE TABLE IF NOT EXISTS `detallepedidoventa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_detallepedidoventa_producto1_idx` (`producto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(43) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `tipodoc` varchar(45) NOT NULL,
  `nrodoc` int(11) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `cuil` varchar(45) NOT NULL,
  `domicilio` varchar(45) NOT NULL,
  `altura` int(11) DEFAULT NULL,
  `piso` int(11) DEFAULT NULL,
  `depto` varchar(45) DEFAULT NULL,
  `fechaingreso` date NOT NULL,
  `cargo_id` int(11) NOT NULL,
  `legajo` varchar(45) NOT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `telfijo` varchar(45) DEFAULT NULL,
  `telmovil` varchar(45) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `provincia_id` int(11) NOT NULL,
  `localidad_id` int(11) NOT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_empleado_cargo1_idx` (`cargo_id`),
  KEY `fk_empleado_provincia1_idx` (`provincia_id`),
  KEY `fk_empleado_localidad1_idx` (`localidad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`, `apellido`, `tipodoc`, `nrodoc`, `fechanacimiento`, `cuil`, `domicilio`, `altura`, `piso`, `depto`, `fechaingreso`, `cargo_id`, `legajo`, `mail`, `telfijo`, `telmovil`, `status`, `provincia_id`, `localidad_id`, `fechacreacion`, `fechamodificacion`, `creadopor`, `modificadopor`) VALUES
(1, 'Edito', 'Rafo', 'DNI', 8106529, '1950-09-08', '20-8106529-7', 'calle 9', 109, NULL, '', '2015-03-02', 1, 'AAA-E529', 'edito_raffin@hotmail.com', '03482-481409', '', 1, 3, 4, '2015-03-02', '2015-03-02', 'superadmin', 'superadmin'),
(2, 'carlos', 'l', 'dni', 1111111, '0000-00-00', '00000000', '1', NULL, NULL, '', '0000-00-00', 1, '04', '', '', '', 1, 3, 3, '2016-01-31', '2016-01-31', 'charly', 'charly');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturaventa`
--

CREATE TABLE IF NOT EXISTS `facturaventa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(45) NOT NULL,
  `pedidodeventa_id` int(11) NOT NULL,
  `remitoventa_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `iva` varchar(45) DEFAULT NULL,
  `subtotal` varchar(45) DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `descuento` varchar(45) DEFAULT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_facturaventa_pedidodeventa1_idx` (`pedidodeventa_id`),
  KEY `fk_facturaventa_remitoventa1_idx` (`remitoventa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formadepago`
--

CREATE TABLE IF NOT EXISTS `formadepago` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `formadepago`
--

INSERT INTO `formadepago` (`id`, `descripcion`, `fechacreacion`, `fechamodificacion`, `creadopor`, `modificadopor`) VALUES
(1, 'Contado', '2015-03-03', '2015-03-03', 'superadmin', 'superadmin'),
(2, 'Débito', '2015-03-03', '2015-03-03', 'superadmin', 'superadmin'),
(3, 'Crédito', '2015-03-03', '2015-03-03', 'superadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iva`
--

CREATE TABLE IF NOT EXISTS `iva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `porcentaje` varchar(45) NOT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `iva`
--

INSERT INTO `iva` (`id`, `descripcion`, `porcentaje`, `fechacreacion`, `fechamodificacion`, `creadopor`, `modificadopor`) VALUES
(1, 'General', '21', '2015-03-03', '2015-03-03', 'superadmin', 'superadmin'),
(2, 'Reducido', '10', '2015-03-03', '2015-03-03', 'superadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE IF NOT EXISTS `localidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `cp` int(11) NOT NULL,
  `provincia_id` int(11) NOT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_localidad_provincia_idx` (`provincia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id`, `nombre`, `cp`, `provincia_id`, `fechacreacion`, `fechamodificacion`, `creadopor`, `modificadopor`) VALUES
(3, 'Rosario', 2000, 3, '2015-02-27', '2015-02-27', 'superadmin', 'superadmin'),
(4, 'Avellaneda', 3561, 3, '2015-02-27', '2015-02-27', 'superadmin', 'superadmin'),
(5, 'Bahía Blanca', 8000, 4, '2015-02-27', '2015-02-27', 'superadmin', 'superadmin'),
(6, 'Granadero Baigorria', 2200, 3, NULL, NULL, NULL, NULL),
(7, 'Capital', 1000, 4, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `packunidades`
--

CREATE TABLE IF NOT EXISTS `packunidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unidad` int(11) NOT NULL,
  `packunidades` varchar(45) DEFAULT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `packunidades`
--

INSERT INTO `packunidades` (`id`, `unidad`, `packunidades`, `fechacreacion`, `fechamodificacion`, `creadopor`, `modificadopor`) VALUES
(1, 1, '1', '2015-03-03', '2015-03-03', 'superadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE IF NOT EXISTS `pago` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id`, `descripcion`, `fechacreacion`, `fechamodificacion`, `creadopor`, `modificadopor`) VALUES
(1, '13212312312', '2015-06-01', '2015-06-01', 'superadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidocompra`
--

CREATE TABLE IF NOT EXISTS `pedidocompra` (
  `pedidoCompra_id` int(11) NOT NULL AUTO_INCREMENT,
  `proveedor_id` int(11) NOT NULL,
  `pago_id` int(11) NOT NULL,
  `fechapedido` date NOT NULL,
  `fechadeentrega` date NOT NULL,
  `numerodefactura` varchar(45) DEFAULT NULL,
  `numeroremito` varchar(45) DEFAULT NULL,
  `iva` varchar(45) DEFAULT NULL,
  `subtotal` varchar(45) DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `formadepago_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`pedidoCompra_id`),
  KEY `fk_pedidocompra_proveedor1_idx` (`proveedor_id`),
  KEY `fk_pedidocompra_formadepago1_idx` (`formadepago_id`),
  KEY `fk_pedidocompra_pago1_idx` (`pago_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidodeventa`
--

CREATE TABLE IF NOT EXISTS `pedidodeventa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) NOT NULL,
  `pago_id` int(11) NOT NULL,
  `detallepedidoventa_id` int(11) NOT NULL,
  `descuento` varchar(45) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pedidodeventa_cliente1_idx` (`cliente_id`),
  KEY `fk_pedidodeventa_detallepedidoventa1_idx` (`detallepedidoventa_id`),
  KEY `fk_pedidodeventa_pago1_idx` (`pago_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `tipoproducto_id` int(11) NOT NULL,
  `preciounitario` varchar(45) DEFAULT NULL,
  `packunidades_id` int(11) NOT NULL,
  `stockminimo` varchar(45) DEFAULT NULL,
  `stockmaximo` varchar(45) DEFAULT NULL,
  `proveedor_id` int(11) NOT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_producto_tipoproducto1_idx` (`tipoproducto_id`),
  KEY `fk_producto_packunidades1_idx` (`packunidades_id`),
  KEY `fk_producto_proveedor1_idx` (`proveedor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `tipoproducto_id`, `preciounitario`, `packunidades_id`, `stockminimo`, `stockmaximo`, `proveedor_id`, `fechacreacion`, `fechamodificacion`, `creadopor`, `modificadopor`) VALUES
(1, 'Brahma 670 cc', 'Nose que Cçcarajo poner', 3, '12,50', 1, '500', '1500', 1, '2015-03-05', '2015-03-05', 'superadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `razonsocial` varchar(45) NOT NULL,
  `cuit` varchar(45) DEFAULT NULL,
  `domiciliolegal` varchar(45) NOT NULL,
  `domiciliodeposito` varchar(45) DEFAULT NULL,
  `provincia_id` int(11) NOT NULL,
  `localidad_id` int(11) NOT NULL,
  `emailempresarial1` varchar(45) DEFAULT NULL,
  `emailempresarial2` varchar(45) DEFAULT NULL,
  `iva_id` int(11) NOT NULL,
  `telfijo` varchar(45) DEFAULT NULL,
  `banco` varchar(45) DEFAULT NULL,
  `sucursul` varchar(45) DEFAULT NULL,
  `tipodecuenta_id` int(11) NOT NULL,
  `numcuenta` varchar(45) DEFAULT NULL,
  `cbu` varchar(45) DEFAULT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_proveedor_iva1_idx` (`iva_id`),
  KEY `fk_proveedor_provincia1_idx` (`provincia_id`),
  KEY `fk_proveedor_localidad1_idx` (`localidad_id`),
  KEY `fk_proveedor_tipodecuenta1_idx` (`tipodecuenta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `razonsocial`, `cuit`, `domiciliolegal`, `domiciliodeposito`, `provincia_id`, `localidad_id`, `emailempresarial1`, `emailempresarial2`, `iva_id`, `telfijo`, `banco`, `sucursul`, `tipodecuenta_id`, `numcuenta`, `cbu`, `fechacreacion`, `fechamodificacion`, `creadopor`, `modificadopor`) VALUES
(1, 'Quilmes', '202020202020', 'Paraguay 777 of 1', 'Cerrito y la Concha de tu hna', 3, 3, 'quilmes@chupamelaverga.com.ar', '', 1, '0341-152526155', 'MACRO', 'PARAGUAY 767', 2, '03252151641564564564564', '5454564564564564564', '2015-03-05', '2015-03-05', 'superadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE IF NOT EXISTS `provincia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id`, `nombre`, `fechacreacion`, `fechamodificacion`, `creadopor`, `modificadopor`) VALUES
(3, 'Santa Fe', '2015-02-27', '2015-02-27', 'superadmin', 'superadmin'),
(4, 'Buenos Aires', '2015-02-27', '2015-02-27', 'superadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remitoventa`
--

CREATE TABLE IF NOT EXISTS `remitoventa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pedidodeventa_id` int(11) NOT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_remitoventa_pedidodeventa1_idx` (`pedidodeventa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situacionimpositiva`
--

CREATE TABLE IF NOT EXISTS `situacionimpositiva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `situacionimpositiva`
--

INSERT INTO `situacionimpositiva` (`id`, `descripcion`, `fechacreacion`, `fechamodificacion`, `creadopor`, `modificadopor`) VALUES
(1, 'Responsable Inscripto', '2015-03-04', '2015-03-04', 'superadmin', 'superadmin'),
(2, 'Monotributista', '2015-03-04', '2015-03-04', 'superadmin', 'superadmin'),
(3, 'Exento', '2015-03-04', '2015-03-04', 'superadmin', 'superadmin'),
(4, 'No Gravado', '2015-03-04', '2015-03-04', 'superadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unidades` varchar(45) NOT NULL,
  `preciounidad` varchar(45) DEFAULT NULL,
  `producto_id` int(11) NOT NULL,
  `stockcol` varchar(45) DEFAULT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_stock_producto1_idx` (`producto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id`, `unidades`, `preciounidad`, `producto_id`, `stockcol`, `fechacreacion`, `fechamodificacion`, `creadopor`, `modificadopor`) VALUES
(1, '800', '10,50', 1, 'NOSE', '2015-03-05', '2015-03-05', 'superadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodecuenta`
--

CREATE TABLE IF NOT EXISTS `tipodecuenta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipodecuenta`
--

INSERT INTO `tipodecuenta` (`id`, `descripcion`, `creadopor`, `modificadopor`, `fechacreacion`, `fechamodificacion`) VALUES
(2, 'NO SÉ que va je', 'superadmin', 'superadmin', '2015-03-04', '2015-03-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproducto`
--

CREATE TABLE IF NOT EXISTS `tipoproducto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tipoproducto`
--

INSERT INTO `tipoproducto` (`id`, `descripcion`, `fechacreacion`, `fechamodificacion`, `creadopor`, `modificadopor`) VALUES
(1, 'Vinos Tintos', '2015-03-05', '2015-03-05', 'superadmin', 'superadmin'),
(2, 'Vinos Blancos', '2015-03-05', '2015-03-05', 'superadmin', 'superadmin'),
(3, 'Cervezas', '2015-03-05', '2015-03-05', 'superadmin', 'superadmin'),
(4, 'Gaseosas', '2015-03-05', '2015-03-05', 'superadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE IF NOT EXISTS `tipousuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`id`, `descripcion`, `fechacreacion`, `fechamodificacion`, `creadopor`, `modificadopor`) VALUES
(1, 'Administrador', '2015-02-13', '2015-05-30', 'Super Administrador', 'Super Administrador'),
(2, 'Encargado de Compras', '2015-05-12', '2015-05-12', 'admin', 'admin'),
(3, 'Encargado de Ventas', '2015-05-12', '2015-05-12', 'admin', 'admin'),
(4, 'Vendedor', '2015-05-12', '2015-05-12', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `tipousuario_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_tipousuario1_idx` (`tipousuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `tipousuario_id`, `status`, `fechacreacion`, `fechamodificacion`, `creadopor`, `modificadopor`) VALUES
(1, 'charly', 'charly', 1, 1, NULL, NULL, NULL, NULL),
(5, 'charly', 'charly', 1, 1, NULL, NULL, NULL, NULL),
(7, 'sarasa', 'sara', 1, 0, NULL, NULL, NULL, NULL),
(8, 'sarasa', 'sara', 1, 0, NULL, NULL, NULL, NULL),
(9, 'sarasa', 'sarasa', 1, 0, '0000-00-00', '2016-02-09', '', 'charly'),
(10, 'charles', 'charles', 1, 1, '2016-02-09', '2016-02-09', 'charly', 'charly');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE IF NOT EXISTS `vehiculo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patente` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `ano` varchar(5) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `fechacreacion` date DEFAULT NULL,
  `fechamodificacion` date DEFAULT NULL,
  `creadopor` varchar(45) DEFAULT NULL,
  `modificadopor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id`, `patente`, `modelo`, `marca`, `ano`, `status`, `fechacreacion`, `fechamodificacion`, `creadopor`, `modificadopor`) VALUES
(3, 'GGA-514', 'Strada Trekking', 'Fiat', '2010', 1, '2015-02-24', '2015-02-24', 'superadmin', 'superadmin');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_cliente_descuento1` FOREIGN KEY (`descuento_id`) REFERENCES `descuento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cliente_iva1` FOREIGN KEY (`iva_id`) REFERENCES `iva` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cliente_localidad1` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cliente_provincia1` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cliente_situacionimpositiva1` FOREIGN KEY (`situacionimpositiva_id`) REFERENCES `situacionimpositiva` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `contactocliente`
--
ALTER TABLE `contactocliente`
  ADD CONSTRAINT `fk_contactocliente_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `contactoproveedor`
--
ALTER TABLE `contactoproveedor`
  ADD CONSTRAINT `fk_contactoproveedor_proveedor1` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detallepedidocompra`
--
ALTER TABLE `detallepedidocompra`
  ADD CONSTRAINT `fk_pedido_id` FOREIGN KEY (`pedido_id`) REFERENCES `pedidocompra` (`pedidoCompra_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detallepedidoventa`
--
ALTER TABLE `detallepedidoventa`
  ADD CONSTRAINT `fk_detallepedidoventa_producto1` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `fk_empleado_cargo1` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empleado_localidad1` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empleado_provincia1` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `facturaventa`
--
ALTER TABLE `facturaventa`
  ADD CONSTRAINT `fk_facturaventa_pedidodeventa1` FOREIGN KEY (`pedidodeventa_id`) REFERENCES `pedidodeventa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_facturaventa_remitoventa1` FOREIGN KEY (`remitoventa_id`) REFERENCES `remitoventa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD CONSTRAINT `fk_localidad_provincia` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedidocompra`
--
ALTER TABLE `pedidocompra`
  ADD CONSTRAINT `fk_pedidocompra_formadepago1` FOREIGN KEY (`formadepago_id`) REFERENCES `formadepago` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedidocompra_pago1` FOREIGN KEY (`pago_id`) REFERENCES `pago` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedidocompra_proveedor1` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedidodeventa`
--
ALTER TABLE `pedidodeventa`
  ADD CONSTRAINT `fk_pedidodeventa_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedidodeventa_detallepedidoventa1` FOREIGN KEY (`detallepedidoventa_id`) REFERENCES `detallepedidoventa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedidodeventa_pago1` FOREIGN KEY (`pago_id`) REFERENCES `pago` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_packunidades1` FOREIGN KEY (`packunidades_id`) REFERENCES `packunidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_producto_proveedor1` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_producto_tipoproducto1` FOREIGN KEY (`tipoproducto_id`) REFERENCES `tipoproducto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `fk_proveedor_iva1` FOREIGN KEY (`iva_id`) REFERENCES `iva` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proveedor_localidad1` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proveedor_provincia1` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proveedor_tipodecuenta1` FOREIGN KEY (`tipodecuenta_id`) REFERENCES `tipodecuenta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `remitoventa`
--
ALTER TABLE `remitoventa`
  ADD CONSTRAINT `fk_remitoventa_pedidodeventa1` FOREIGN KEY (`pedidodeventa_id`) REFERENCES `pedidodeventa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `fk_stock_producto1` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_tipousuario1` FOREIGN KEY (`tipousuario_id`) REFERENCES `tipousuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
