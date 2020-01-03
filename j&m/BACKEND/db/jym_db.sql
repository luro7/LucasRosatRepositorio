-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2019 a las 03:01:28
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jym_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bultos`
--

CREATE TABLE `bultos` (
  `id_bulto` int(11) NOT NULL,
  `bulto_cantidad` varchar(1000) NOT NULL,
  `bulto_tipo` varchar(1000) NOT NULL,
  `id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bultos`
--

INSERT INTO `bultos` (`id_bulto`, `bulto_cantidad`, `bulto_tipo`, `id_pedido`) VALUES
(63, '[\"1\",\"2\",\"3\"]', '[\"chico\",\"mediano\",\"grande\"]', 50),
(64, '[\"1\",\"2\",\"3\"]', '[\"chico\",\"mediano\",\"grande\"]', 51),
(65, '[\"1\",\"2\",\"3\"]', '[\"chico\",\"mediano\",\"grande\"]', 52),
(66, '[\"1\",\"2\",\"3\"]', '[\"chico\",\"mediano\",\"grande\"]', 53),
(67, '[\"1\",\"2\",\"3\"]', '[\"chico\",\"mediano\",\"grande\"]', 54),
(68, '[\"1\",\"2\",\"3\"]', '[\"chico\",\"mediano\",\"grande\"]', 55),
(69, '[\"1\",\"2\",\"3\"]', '[\"chico\",\"mediano\",\"grande\"]', 56);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_bulto`
--

CREATE TABLE `categoria_bulto` (
  `id` int(11) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `id_medidas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_bulto`
--

INSERT INTO `categoria_bulto` (`id`, `categoria`, `id_medidas`) VALUES
(1, 'Chico', 1),
(2, 'Mediano', 2),
(3, 'Grande', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `cli_nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `id_domicilio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `cli_nombre`, `apellido`, `dni`, `telefono`, `id_domicilio`) VALUES
(34, 'Cliente', 'Apellido', '36932446', '2923421134', 1),
(38, 'Federico', 'Osovnikar', '36390858', '2920214553', 32),
(45, 'Francisco2', 'Lopez2', '3523454', '324234', 32),
(46, 'lucas', 'rosat', '36777874', '654', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

CREATE TABLE `domicilio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `latitud` varchar(50) NOT NULL,
  `longitud` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `domicilio`
--

INSERT INTO `domicilio` (`id`, `nombre`, `latitud`, `longitud`) VALUES
(1, 'mitre', '1346', '7B'),
(32, 'Estomba 264', '5.345345', '11.234535');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `estado`) VALUES
(1, 'Confirmado'),
(2, 'Cancelado'),
(3, 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finanzas`
--

CREATE TABLE `finanzas` (
  `id` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_servicios` int(11) NOT NULL,
  `id_localidad` int(11) NOT NULL,
  `fecha_ini` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `cant_km` int(11) NOT NULL,
  `id_domicilio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id`, `nombre`, `cant_km`, `id_domicilio`) VALUES
(1, 'Bahia Blanca', 0, 1),
(2, 'Monte Hermoso', 105, 1),
(3, 'Pehuen-co', 84, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medidas`
--

CREATE TABLE `medidas` (
  `id` int(11) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medidas`
--

INSERT INTO `medidas` (`id`, `valor`) VALUES
(1, 15.68),
(2, 67.99),
(3, 132.62);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_localidad` int(11) NOT NULL,
  `id_localidad_hasta` int(11) NOT NULL,
  `domicilio_desde` varchar(20) NOT NULL,
  `domicilio_hasta` varchar(20) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora_ini` varchar(11) NOT NULL,
  `hora_fin` varchar(11) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `id_servicio`, `id_usuario`, `id_localidad`, `id_localidad_hasta`, `domicilio_desde`, `domicilio_hasta`, `id_estado`, `fecha`, `hora_ini`, `hora_fin`, `valor`) VALUES
(50, 1, 19, 1, 2, '', '', 1, '2019-12-17', '1', '1', 10),
(51, 1, 19, 1, 2, '', '', 2, '2019-12-17', '1', '1', 10),
(52, 1, 19, 1, 2, '', '', 1, '2019-12-17', '1', '1', 549.52),
(53, 1, 20, 1, 2, '', '', 1, '2019-12-17', '1', '1', 549.52),
(54, 1, 20, 1, 2, '', '', 1, '2019-12-17', '1', '1', 549.52),
(55, 1, 20, 1, 2, '', '', 1, '2019-12-17', '1', '1', 1),
(56, 1, 20, 1, 2, 'as', 'as', 1, '2019-12-17', '1', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `descrip` varchar(25) NOT NULL,
  `importe` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `descrip`, `importe`) VALUES
(1, 'servicio', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario_nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(22) NOT NULL,
  `id_domicilio` int(11) NOT NULL,
  `password` varchar(60) NOT NULL,
  `es_admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario_nombre`, `apellido`, `dni`, `telefono`, `email`, `id_domicilio`, `password`, `es_admin`) VALUES
(19, 'lucas', 'rosat', '36777874', '2920475794', 'lucas@gmail', 1, '321', 0),
(20, 'pepe', 'pepinez', '111', '321', '321@a', 2, '321', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bultos`
--
ALTER TABLE `bultos`
  ADD PRIMARY KEY (`id_bulto`);

--
-- Indices de la tabla `categoria_bulto`
--
ALTER TABLE `categoria_bulto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `finanzas`
--
ALTER TABLE `finanzas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medidas`
--
ALTER TABLE `medidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bultos`
--
ALTER TABLE `bultos`
  MODIFY `id_bulto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `categoria_bulto`
--
ALTER TABLE `categoria_bulto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `finanzas`
--
ALTER TABLE `finanzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `medidas`
--
ALTER TABLE `medidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
