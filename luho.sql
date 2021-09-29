-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2021 a las 19:58:42
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `luho`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `CategoriaPorGenero` (`genero` VARCHAR(50))  SELECT Categoria, Genero FROM
categoria
WHERE categoria.Genero = genero$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ProductosPorTalla` (`talla` VARCHAR(50))  SELECT talla.Talla, Nombre, Costo FROM
talla, producto
WHERE producto.IdTalla = talla.IdTalla
AND talla.IdTalla=talla$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UsuariosPorTipo` (`tipo` INT)  SELECT Nombre, Usuario, Direccion, tipousuario.Tipo
FROM tipousuario, usuario
WHERE usuario.TipoUsuario= tipousuario.IdTipo
AND usuario.IdUsuario=tipo$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `IdCargo` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `IdCategoria` int(11) NOT NULL,
  `Categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Genero` varchar(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`IdCategoria`, `Categoria`, `Genero`) VALUES
(2, 'Anillo', 'F'),
(4, 'Reloj', 'M'),
(5, 'Pulsera', 'F'),
(7, '54454', 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `IdCliente` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Contrasena` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`IdCliente`, `Nombre`, `Apellido`, `Usuario`, `Contrasena`, `Correo`, `Direccion`, `Estado`) VALUES
(1, 'jfndg', 'hbhbhbh', 'hbhbh', '$2y$10$L6oweig4YXlEsJcI6JP4g.sCKPSe5/7DfW53jPjMhiZ', 'huuhu@hotmal.com', 'dsgdg', 1),
(2, 'estefany', 'Aguirre', 'estefany', '$2y$10$EFdclJfz8/4LG.AZrQG3M.PJPIwPVtODCn/YLVr8lqn', 'este@jf.c', 'ff', 0),
(3, 'eee', 'njnjnj', 'ee', '$2y$10$i78TMCeICnun4Av2abfvXe5H7DwdEKnho3w8hiEcqILLV4qMUph4O', 'jjnjn@hotmial.com', 'fger', 1),
(4, 'ggg', 'hbhbh', 'uur', '$2y$10$6OA75W3UGwueKXQvlsvWKeLisDq/3kjOlww28xQjB6lrbg/qqjvpG', 'huuhu@hotmal.com', 'fgegff', 1),
(5, 'rodruh', 'candray', 'candy', '$2y$10$ygjgNjbXRu9hJZS9O7Yno.0KAWP76kB6moT0svnnM6u6WWd0t4NL.', 'rodri@hotmail.com', 'una', 0),
(6, 'jnkjnj', 'njnjnj', 'ii', '$2y$10$iyr2ykEhVusHQI8KV2gtKOq5goZ4GcoM1CePfaploDLSAR8UuwSaK', 'jj@tfd.vo', 'gyh', 1),
(7, 'ebhbhb', 'hbhbh', 'Estefany', '$2y$10$aByj8CeAGouSBb4EyUq5S.FADzkYY61jBRxNeq.rjVFMkeFcVzwh6', 'es@ho.com', 'fermg', 1),
(8, 'elizabeth', 'aguirre', 'elizabeth', '$2y$10$Bsjsb8ojQvMr52Dj3x2FM.pEdSczcy/arPP3cn1KplGMKllmtm2FG', 'est@h.co', 'fefe', 1),
(9, 'uuhu', 'uhuhu', 'uuuu', '$2y$10$WtrZGuREcehkYoJHV8tpeeiJ8oPpRL7UHnWalyVRKlKWQ3IcINU8m', 'es@hhh.com', 'mkem', 1),
(10, 'Carlos', 'Campos', 'carlitos', '$2y$10$aoTgA7oF5EkUE.0CPUVKFuMKqVyEeexhJMWGG0E/a4LWmD.Gy2kH6', 'carlitos@gmail.com', 'vfv', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `IdComentario` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `IdCliente` int(11) NOT NULL,
  `Comentario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `IdCompra` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `Fecha` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `EstadoCompra` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`IdCompra`, `IdUsuario`, `Fecha`, `EstadoCompra`) VALUES
(3, 6, '12/06/18', 0),
(4, 6, '12/06/18', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `IdCuenta` int(11) NOT NULL,
  `EstadoCompra` int(11) NOT NULL,
  `IdCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`IdCuenta`, `EstadoCompra`, `IdCliente`) VALUES
(0, 1, 1),
(2, 1, 7),
(3, 1, 7),
(4, 1, 7),
(5, 1, 7),
(6, 1, 7),
(7, 1, 7),
(8, 0, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecompra`
--

CREATE TABLE `detallecompra` (
  `IdDetalle` int(11) NOT NULL,
  `IdCompra` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `IdMarca` int(11) NOT NULL,
  `Marca` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`IdMarca`, `Marca`) VALUES
(1, 'Pandora'),
(2, 'Rollex');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `IdMaterial` int(11) NOT NULL,
  `Material` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`IdMaterial`, `Material`) VALUES
(1, 'Plata'),
(2, 'acero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocasion`
--

CREATE TABLE `ocasion` (
  `IdOcasion` int(11) NOT NULL,
  `Ocasion` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ocasion`
--

INSERT INTO `ocasion` (`IdOcasion`, `Ocasion`) VALUES
(1, 'San Valentin'),
(2, 'boda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE `oferta` (
  `IdOferta` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `Descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Descuento` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `IdProducto` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Modelo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Costo` double NOT NULL,
  `Img` varchar(600) COLLATE utf8_spanish_ci NOT NULL,
  `IdCategoria` int(11) NOT NULL,
  `IdMarca` int(11) NOT NULL,
  `IdOcasion` int(11) NOT NULL,
  `IdMaterial` int(11) NOT NULL,
  `IdTalla` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `valoracion` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`IdProducto`, `Nombre`, `Descripcion`, `Modelo`, `Costo`, `Img`, `IdCategoria`, `IdMarca`, `IdOcasion`, `IdMaterial`, `IdTalla`, `Cantidad`, `valoracion`) VALUES
(1, 'Anillo princesa', 'Anillo de oro', '223', 150, 'jfrjsfw', 2, 1, 1, 1, 2, 15, '2.83');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla`
--

CREATE TABLE `talla` (
  `IdTalla` int(11) NOT NULL,
  `Talla` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `talla`
--

INSERT INTO `talla` (`IdTalla`, `Talla`) VALUES
(1, '17'),
(2, '18'),
(3, 'ggy'),
(4, 'uhiuh'),
(5, 'dsmdk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoenvio`
--

CREATE TABLE `tipoenvio` (
  `IdTipoEnvio` int(11) NOT NULL,
  `TipoEnvio` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `IdTipo` int(11) NOT NULL,
  `Tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`IdTipo`, `Tipo`) VALUES
(1, 'Administrador'),
(2, 'Administrador Productos'),
(3, 'Administrador Usuarios'),
(4, 'Administrador Catalogos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Contrasena` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `TipoUsuario` int(11) NOT NULL,
  `Fecha` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Nombre`, `Apellido`, `Usuario`, `Contrasena`, `Correo`, `Direccion`, `TipoUsuario`, `Fecha`) VALUES
(1, 'Estefany', 'Aguirre', 'Estefany', '$2y$10$N6higwtOds8dnCAJy3Eolu1gXDhtdDviYlOMO6qjlFwmcfZQqY71u', 'estefanyaguirre1200@gmail.com', 'Los girasoles', 1, '2021/09/28'),
(2, 'Carmen', 'Lopez', 'Carmen', '$2y$10$hp2TqI3b8xrN1IBIS9aKj.Y93dWp9jLB8XWF1wi0JwV1HPCO.Ii4a', 'carmen@gmail.com', 'Los girasoles', 2, '2021/09/29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoraciones`
--

CREATE TABLE `valoraciones` (
  `IdValoracion` int(11) NOT NULL,
  `IdCliente` int(11) NOT NULL,
  `valoracion` int(1) NOT NULL,
  `IdProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Disparadores `valoraciones`
--
DELIMITER $$
CREATE TRIGGER `valoracion` AFTER INSERT ON `valoraciones` FOR EACH ROW UPDATE producto p SET p.valoracion = (SELECT avg(v.valoracion) FROM valoraciones v WHERE v.IdProducto = NEW.IdProducto) WHERE p.IdProducto = NEW.IdProducto
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`IdCargo`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`IdCategoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IdCliente`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`IdComentario`),
  ADD KEY `IdProducto` (`IdProducto`),
  ADD KEY `IdCliente` (`IdCliente`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`IdCompra`),
  ADD KEY `idusuario` (`IdUsuario`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`IdCuenta`),
  ADD KEY `IdCliente` (`IdCliente`);

--
-- Indices de la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD PRIMARY KEY (`IdDetalle`),
  ADD KEY `IdCompra` (`IdCompra`),
  ADD KEY `IdProducto` (`IdProducto`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`IdMarca`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`IdMaterial`);

--
-- Indices de la tabla `ocasion`
--
ALTER TABLE `ocasion`
  ADD PRIMARY KEY (`IdOcasion`);

--
-- Indices de la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`IdOferta`),
  ADD KEY `IdProducto` (`IdProducto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`IdProducto`),
  ADD KEY `IdCategoria` (`IdCategoria`),
  ADD KEY `IdMarca` (`IdMarca`),
  ADD KEY `IdOcasion` (`IdOcasion`),
  ADD KEY `IdMaterial` (`IdMaterial`),
  ADD KEY `IdTalla` (`IdTalla`);

--
-- Indices de la tabla `talla`
--
ALTER TABLE `talla`
  ADD PRIMARY KEY (`IdTalla`);

--
-- Indices de la tabla `tipoenvio`
--
ALTER TABLE `tipoenvio`
  ADD PRIMARY KEY (`IdTipoEnvio`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`IdTipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD KEY `TipoUsuario` (`TipoUsuario`);

--
-- Indices de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD PRIMARY KEY (`IdValoracion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `IdCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `IdCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `IdComentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `IdCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `IdCuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  MODIFY `IdDetalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `IdMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `IdMaterial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ocasion`
--
ALTER TABLE `ocasion`
  MODIFY `IdOcasion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `oferta`
--
ALTER TABLE `oferta`
  MODIFY `IdOferta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `IdProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `talla`
--
ALTER TABLE `talla`
  MODIFY `IdTalla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipoenvio`
--
ALTER TABLE `tipoenvio`
  MODIFY `IdTipoEnvio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `IdTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  MODIFY `IdValoracion` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`IdProducto`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`);

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `cliente` (`IdCliente`);

--
-- Filtros para la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD CONSTRAINT `cuenta_ibfk_1` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`);

--
-- Filtros para la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD CONSTRAINT `detallecompra_ibfk_2` FOREIGN KEY (`IdCompra`) REFERENCES `compra` (`IdCompra`),
  ADD CONSTRAINT `detallecompra_ibfk_3` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`IdProducto`);

--
-- Filtros para la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD CONSTRAINT `oferta_ibfk_1` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`IdProducto`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`IdCategoria`) REFERENCES `categoria` (`IdCategoria`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`IdMarca`) REFERENCES `marca` (`IdMarca`),
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`IdMaterial`) REFERENCES `material` (`IdMaterial`),
  ADD CONSTRAINT `producto_ibfk_4` FOREIGN KEY (`IdOcasion`) REFERENCES `ocasion` (`IdOcasion`),
  ADD CONSTRAINT `producto_ibfk_6` FOREIGN KEY (`IdTalla`) REFERENCES `talla` (`IdTalla`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`TipoUsuario`) REFERENCES `tipousuario` (`IdTipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
