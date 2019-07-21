-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2019 a las 09:25:07
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ilidannutrition`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `img` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo1` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo2` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo3` text COLLATE utf8_spanish_ci NOT NULL,
  `estilo` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `ruta`, `img`, `titulo1`, `titulo2`, `titulo3`, `estilo`, `fecha`) VALUES
(1, 'sin-categoria', 'vistas/img/banner/default.jpg', '{\"texto\":\"OFERTAS ESPECIALES\", \"color\": \"#fff\"}', '{\"texto\":\"off\", \"color\": \"#fff\"}', '{\"texto\":\"Termina el 31 de octubre\", \"color\": \"#fff\"}', 'textoDer', '2019-07-03 06:32:31'),
(2, 'articulos-gratis', 'vistas/img/banner/default.jpg', '{\"texto\":\"OFERTAS ESPECIALES\", \"color\": \"#fff\"}', '{\"texto\":\"off\", \"color\": \"#fff\"}', '{\"texto\":\"Termina el 31 de octubre\", \"color\": \"#fff\"}', 'textoDer', '2019-07-03 06:19:57'),
(3, 'desarrollo-web', 'vistas/img/banner/default.jpg', '{\"texto\":\"OFERTAS ESPECIALES\", \"color\": \"#fff\"}', '{\"texto\":\"off\", \"color\": \"#fff\"}', '{\"texto\":\"Termina el 31 de octubre\", \"color\": \"#fff\"}', 'textoDer', '2019-07-03 06:19:57'),
(4, 'ropa-para-hombre', 'vistas/img/banner/default.jpg', '{\"texto\":\"OFERTAS ESPECIALES\", \"color\": \"#fff\"}', '{\"texto\":\"off\", \"color\": \"#fff\"}', '{\"texto\":\"Termina el 31 de octubre\", \"color\": \"#fff\"}', 'textoDer', '2019-07-03 06:19:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `ruta`, `fecha`) VALUES
(1, 'CLINICA', 'clinica', '2019-07-20 21:05:43'),
(2, 'SALUD PUBLICA', 'salud-publica', '2019-07-20 21:05:53'),
(3, 'ALIMENTACIÓN', 'alimentacion', '2019-07-20 21:20:19'),
(4, 'DEPORTIVA', 'deportiva', '2019-07-20 21:06:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `calificacion` float NOT NULL,
  `comentario` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_usuario`, `id_producto`, `calificacion`, `comentario`, `fecha`) VALUES
(1, 8, 120, 4, 'espectacular', '2019-07-15 17:35:05'),
(2, 8, 147, 5, 'expectacular', '2019-07-15 17:34:17'),
(4, 9, 147, 3, 'muy buena profesional', '2019-07-15 21:59:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deseos`
--

CREATE TABLE `deseos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `deseos`
--

INSERT INTO `deseos` (`id`, `id_usuario`, `id_producto`, `fecha`) VALUES
(11, 8, 227, '2019-07-15 18:56:25'),
(12, 8, 226, '2019-07-15 18:56:26'),
(13, 8, 225, '2019-07-15 18:56:27'),
(14, 8, 228, '2019-07-15 18:56:28'),
(22, 9, 3, '2019-07-15 21:58:37'),
(23, 9, 4, '2019-07-15 21:58:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido_paterno` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido_materno` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `genero` text COLLATE utf8_spanish_ci NOT NULL,
  `celular` text COLLATE utf8_spanish_ci NOT NULL,
  `modo` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `verificacion` int(11) NOT NULL,
  `emailEncriptado` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `password`, `email`, `genero`, `celular`, `modo`, `foto`, `verificacion`, `emailEncriptado`, `fecha`) VALUES
(1, 'neil cesar', 'lizama', 'diaz', '$2a$07$asxx54ahjppf45sd87a5audSLCI1xPBRwIJ7bAiobI/5yAsEJSHgi', 'nclz@gmail.com', 'Masculino', '123456789', 'directo', '', 0, '599f1714c1befffd596a2fe3deff7efb', '2019-07-21 07:21:09'),
(2, 'TEST', 'SAAA', 'GAAA', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', 'TEST2@gmail.com', 'Masculino', '412312321', 'directo', '', 0, '31ba998bdd47c21b0cc820e82630cc97', '2019-07-21 06:56:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantilla`
--

CREATE TABLE `plantilla` (
  `id` int(11) NOT NULL,
  `barraSuperior` text COLLATE utf8_spanish_ci NOT NULL,
  `textoSuperior` text COLLATE utf8_spanish_ci NOT NULL,
  `colorFondo` text COLLATE utf8_spanish_ci NOT NULL,
  `colorTexto` text COLLATE utf8_spanish_ci NOT NULL,
  `logo` text COLLATE utf8_spanish_ci NOT NULL,
  `icono` text COLLATE utf8_spanish_ci NOT NULL,
  `redesSociales` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `plantilla`
--

INSERT INTO `plantilla` (`id`, `barraSuperior`, `textoSuperior`, `colorFondo`, `colorTexto`, `logo`, `icono`, `redesSociales`, `fecha`) VALUES
(1, '#000000', '#ffffff', '#900048', '#ffffff', 'vistas/img/plantilla/logo.png', 'vistas/img/plantilla/icono.png', '[\r\n    {\"red\":\"fa-facebook\",\"estilo\":\"facebookBlanco\",\"url\":\"http://facebook.com/\"},\r\n    {\"red\":\"fa-youtube\",\"estilo\":\"youtubeBlanco\",\"url\":\"http://youtube.com/\"},\r\n    {\"red\":\"fa-twitter\",\"estilo\":\"twitterBlanco\",\"url\":\"http://twitter.com/\"},\r\n    {\"red\":\"fa-google-plus\",\"estilo\":\"googleBlanco\",\"url\":\"http://google.com/\"},\r\n    {\"red\":\"fa-instagram\",\"estilo\":\"instagramBlanco\",\"url\":\"http://instagram.com/\"}\r\n\r\n]', '2019-06-10 16:10:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_subcategoria` int(11) NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `titular` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `multimedia` text COLLATE utf8_spanish_ci NOT NULL,
  `detalles` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `portada` text COLLATE utf8_spanish_ci NOT NULL,
  `vistas` int(11) NOT NULL,
  `ventas` int(11) NOT NULL,
  `vistasGratis` int(11) NOT NULL,
  `ventasGratis` int(11) NOT NULL,
  `ofertadoPorCategoria` int(11) NOT NULL,
  `ofertadoPorSubcategoria` int(11) NOT NULL,
  `oferta` int(11) NOT NULL,
  `precioOferta` float NOT NULL,
  `descuentoOferta` int(11) NOT NULL,
  `imgOferta` text COLLATE utf8_spanish_ci NOT NULL,
  `finOferta` datetime NOT NULL,
  `nuevo` int(11) NOT NULL,
  `peso` float NOT NULL,
  `entrega` float NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `imgFondo` text COLLATE utf8_spanish_ci NOT NULL,
  `tipoSlide` text COLLATE utf8_spanish_ci NOT NULL,
  `imgProducto` text COLLATE utf8_spanish_ci NOT NULL,
  `estiloImgProducto` text COLLATE utf8_spanish_ci NOT NULL,
  `estiloTextoSlide` text COLLATE utf8_spanish_ci NOT NULL,
  `Titulo1` text COLLATE utf8_spanish_ci NOT NULL,
  `Titulo2` text COLLATE utf8_spanish_ci NOT NULL,
  `Titulo3` text COLLATE utf8_spanish_ci NOT NULL,
  `boton` text COLLATE utf8_spanish_ci NOT NULL,
  `url` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `slide`
--

INSERT INTO `slide` (`id`, `imgFondo`, `tipoSlide`, `imgProducto`, `estiloImgProducto`, `estiloTextoSlide`, `Titulo1`, `Titulo2`, `Titulo3`, `boton`, `url`, `fecha`) VALUES
(1, 'vistas/img/slide/default/back_default.jpg', 'slideOpcion1', 'vistas/img/slide/slide1/nutricion.png', '{\"top\":\"15%\",\"right\":\"10%\",\"width\":\"45%\",\"left\":\"\"}', '{\"top\":\"20%\", \"right\": \"\",  \"width\": \"40%\", \"left\": \"10%\"}', '{\"texto\": \"Alimentación\", \"color\": \"#333\"}', '{\"texto\": \"Nutricionistas especializados\", \"color\": \"#777\"}', '{\"texto\": \"Inscribete y obten descuentos\", \"color\": \"#888\"}', '<button class=\"btn btn-default backColor text-uppercase\">									\r\n										VER NUTRICIONISTA<span class=\"fa fa-chevron-right \"></span>\r\n																			</button>', '#', '2019-06-30 09:55:16'),
(2, 'vistas/img/slide/default/back_default.jpg', 'slideOpcion2', 'vistas/img/slide/slide2/nutricionista.png', '{\"top\":\"5%\",\"right\":\"\",\"width\":\"25%\",\"left\":\"15%\"}', '{\"width\": \"40%\", \"top\":\"20%\",\"left\":\"\",\"right\":\"10%\"}', '{\"texto\": \"Maria Gutierrez\", \"color\": \"#333\"}', '{\"texto\": \"Profesional capacitada\", \"color\": \"#777\"}', '{\"texto\": \"Obten asesoria especializada\", \"color\": \"#888\"}', '<button class=\"btn btn-default backColor text-uppercase\">\r\n							\r\n							VER NUTRICIONISTA <span class=\"fa fa-chevron-right \"></span>\r\n							\r\n							</button>', '#', '2019-06-30 09:52:53'),
(3, 'vistas/img/slide/default/back_default.jpg', 'slideOpcion2', 'vistas/img/slide/slide3/nutricionista.png', '{\"top\":\"5%\",\"right\":\"\",\"width\": \"32%\", \"left\":\"15%\"}', '{\"width\": \"40%\", \"top\":\"15%\",\"left\":\"\",\"right\": \"15%\"}', '{\"texto\": \"Francisco Maldonado\", \"color\": \"#333\"}', '{\"texto\": \"Obten su asesoria\", \"color\": \"#ccc\"}', '{\"texto\": \"Nutricionista especializado\", \"color\": \"#aaa\"}', '<button class=\"btn btn-default backColor text-uppercase\">\r\n							\r\n							VER NUTRICIONISTA<span class=\"fa fa-chevron-right \"></span>\r\n							\r\n							</button>', '#', '2019-06-30 15:32:38'),
(4, 'vistas/img/slide/slide4/fondo3.jpg', 'slideOpcion1', '', '', '{\"top\":\"20%\", \"right\": \"\",  \"width\": \"40%\", \"left\": \"10%\"}', '{\"texto\": \"Sofía Montalvo\", \"color\": \"#333\"}', '{\"texto\": \"Obten Asesoría\", \"color\": \"#777\"}', '{\"texto\": \"Nutricionista con años de experiencia\", \"color\": \"#888\"}', '<button class=\"btn btn-default backColor text-uppercase\">\r\n							\r\n							VER NUTRICIONISTA<span class=\"fa fa-chevron-right \"></span>\r\n							\r\n							</button>', '#', '2019-06-30 15:38:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `idsubcategoria` int(11) NOT NULL,
  `subcategoria` text COLLATE utf8_spanish_ci NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`idsubcategoria`, `subcategoria`, `id_categoria`, `ruta`, `fecha`) VALUES
(1, 'Alimentacion vegana  vegetariana', 3, 'alimentacion-vegana-vegetariana\r\n', '2019-07-20 21:13:36'),
(2, 'Nutricion en salud publica o comunitaria\r\n', 2, 'nutricion-en-salud-publica-o-comunitaria\r\n', '2019-07-20 21:07:56'),
(3, 'Dietetica hospitalaria\r\n', 1, 'dietetica-hospitalaria\r\n', '2019-07-20 21:19:34'),
(4, 'Nutricion en el embarazo\r\n', 1, 'nutricion-en-el-embarazo\r\n', '2019-07-20 21:10:07'),
(5, 'Nutricion pediatrica\r\n', 1, 'nutricion-pediatrica', '2019-07-20 21:12:04'),
(6, 'Nutricion gerontologica\r\n', 1, 'nutricion-gerontologica\r\n', '2019-07-20 21:13:01'),
(7, 'Nutricion deportiva\r\n', 4, 'nutricion-deportiva\r\n', '2019-07-20 21:16:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripcion`
--

CREATE TABLE `suscripcion` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `envio` int(11) NOT NULL,
  `metodo` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `suscripcion`
--

INSERT INTO `suscripcion` (`id`, `id_usuario`, `id_producto`, `envio`, `metodo`, `direccion`, `pais`, `fecha`) VALUES
(1, 8, 120, 0, 'paypal', 'lambayeque', 'peru', '2019-07-15 16:10:59'),
(2, 8, 147, 0, 'paypal', 'Chiclayo', 'peru', '2019-07-15 16:10:59'),
(4, 9, 147, 0, 'paypal', 'Chiclayo', 'peru', '2019-07-15 05:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido_paterno` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido_materno` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `genero` text COLLATE utf8_spanish_ci NOT NULL,
  `celular` text COLLATE utf8_spanish_ci NOT NULL,
  `localTrabajo` text COLLATE utf8_spanish_ci NOT NULL,
  `codigoCnp` text COLLATE utf8_spanish_ci NOT NULL,
  `especialidad` int(11) NOT NULL,
  `modo` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `verificacion` int(11) NOT NULL,
  `emailEncriptado` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `password`, `email`, `genero`, `celular`, `localTrabajo`, `codigoCnp`, `especialidad`, `modo`, `foto`, `verificacion`, `emailEncriptado`, `fecha`) VALUES
(1, 'Cesar david', 'majuan', 'pintado', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', 'test1@gmail.com', 'Masculino', '946582315', 'Derrama', '123456', 6, 'directo', 'vistas/img/usuarios/1/594.jpg', 0, '245cf079454dc9a3374a7c076de247cc', '2019-07-21 03:14:18'),
(2, 'neil cesar', 'lizama', 'diaz', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', 'neilcesarlizamadiaz@gmail.com', 'Masculino', '929293939', 'UNPRG', '421312', 4, 'directo', 'vistas/img/usuarios/2/443.jpg', 0, 'c803f577c9d59c44954883e66f0a02ee', '2019-07-21 02:46:04'),
(3, 'Prueba', 'TEST', 'EXAM', '$2a$07$asxx54ahjppf45sd87a5auFgQHVJQ0O3ZuCPpBhHa/K6QXNjjFTae', 'test2@gmail.com', 'Masculino', '123456789', 'Derrama', '123456', 4, 'directo', '', 1, '3c4f419e8cd958690d0d14b3b89380d3', '2019-07-21 06:32:31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `deseos`
--
ALTER TABLE `deseos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`idsubcategoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsubcategoria` (`especialidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `deseos`
--
ALTER TABLE `deseos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `idsubcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD CONSTRAINT `subcategorias_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
