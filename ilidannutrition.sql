-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2019 a las 18:14:36
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
(1, 'NUTRICIONISTAS', 'nutricionistas', '0000-00-00 00:00:00'),
(2, 'NUTRICION', 'nutricion', '0000-00-00 00:00:00'),
(3, 'DIETETICA', 'dietetica', '0000-00-00 00:00:00'),
(4, 'FITNESS', 'fitness', '0000-00-00 00:00:00');

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
  `id` int(11) NOT NULL,
  `subcategoria` text COLLATE utf8_spanish_ci NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `subcategoria`, `id_categoria`, `ruta`, `fecha`) VALUES
(1, 'Alimentación vegana / vegetariana', 1, 'alimentacion-vegana-vegetariana', '2019-06-29 16:01:10'),
(2, 'Nutrición en salud publica o comunitaria', 1, 'nutricion-en-salud-publica-o-comunitaria', '2019-06-29 16:01:16'),
(3, 'Dietetica hospitalaria', 1, 'dietetica-hospitalaria', '0000-00-00 00:00:00'),
(4, 'Nutrición en el embarazo', 1, 'nutricion-en-el-embarazo', '2019-06-29 16:01:23'),
(5, 'Nutrición pediatrica', 1, 'nutricion-pediatrica', '2019-06-29 16:01:29'),
(6, 'Nutrición gerontologica', 1, 'nutricion-gerontologica', '2019-06-29 16:01:33'),
(7, 'Nutrición deportiva', 1, 'nutricion-deportiva', '2019-06-29 16:01:39'),
(8, 'Salud', 2, 'salud', '0000-00-00 00:00:00'),
(9, 'Comida vegana', 2, 'comida-vegana', '0000-00-00 00:00:00'),
(10, 'Organización de comidas', 2, 'organizacion-de-comidas', '2019-06-29 15:59:21'),
(11, 'Herbologia', 2, 'herbologia', '0000-00-00 00:00:00'),
(12, 'Dieta cetogenica', 3, 'dieta-cetogenica', '0000-00-00 00:00:00'),
(13, 'Perdida de peso', 3, 'perdida-de-peso', '0000-00-00 00:00:00'),
(14, 'Cetosis', 3, 'cetosis', '0000-00-00 00:00:00'),
(15, 'Ayuno', 3, 'ayuno', '0000-00-00 00:00:00'),
(16, 'Dietas', 4, 'dietas', '0000-00-00 00:00:00'),
(17, 'Recetas', 4, 'recetas', '0000-00-00 00:00:00'),
(18, 'Aumento de peso', 4, 'aumento-de-peso', '0000-00-00 00:00:00'),
(19, 'Batidos', 4, 'Batidos', '0000-00-00 00:00:00'),
(20, 'Control de peso', 4, 'control-de-peso', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plantilla`
--
ALTER TABLE `plantilla`
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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
