-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2024 a las 00:45:34
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusel`
--

CREATE TABLE `carrusel` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `urlfoto` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrusel`
--

INSERT INTO `carrusel` (`id`, `descripcion`, `urlfoto`, `link`, `orden`) VALUES
(1, 'Gomitas', 'producto1.jpg', 'http://store.com', 1),
(10, 'Chocolate Negro', 'producto3.jpg', 'http://local.com', 2),
(11, 'Gomitas Azucaradas', 'producto2.jpg', 'http://local.com', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `urlfoto` varchar(100) NOT NULL,
  `orden` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `slug`, `nombre`, `descripcion`, `urlfoto`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'CHOCOLATE NEGRO', 'CHOCOLATE NEGRO', 'los mejores chocolates negros.', 'chocolate3.jpg', 1, '2024-07-30 17:03:21', '0000-00-00 00:00:00'),
(3, 'GOMITAS', 'GOMITAS AZUCARADAS', 'las gomitas mas sabrosas y ricas.', 'prueba.jpg', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'CHOCOLATE BLANCO', 'CHOCOLATE BLANCO', 'blanco', 'chocolate4.jpg', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'ALFAJORES', 'ALFAJORES', 'alfajores', 'alfajor3.jpg', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'CARAMELOS', 'CARAMELOS', 'caramelos', 'caramelo7.jpg', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'BOMBONES', 'BOMBONES', 'bombonazos', 'bombon2.jpg', 5, '2024-08-08 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `email`, `asunto`, `mensaje`, `fecha`) VALUES
(10, 'Leo Mauro', 'laionelasd@gmail.com', 'Compra', 'Hola, quiero realizar una compra, donde queda el local?', '2024-08-07 22:38:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `usuario`, `email`, `password`, `rol`) VALUES
(2, 'admin', 'admin@gmail.com', '0a922f69a3c10df1fe330f75fcf778e3', 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(10) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `urlfoto` varchar(100) NOT NULL,
  `orden` int(11) NOT NULL,
  `visitas` int(11) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `precio_old` decimal(8,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `slug`, `nombre`, `descripcion`, `urlfoto`, `orden`, `visitas`, `precio`, `precio_old`, `created_at`, `updated_at`, `categoria_id`) VALUES
(1, 'nigga', 'CHOCOLATE', 'bombonazos nigga', 'chocolate2.jpg', 1, 0, 200.00, 100.00, '0000-00-00 00:00:00', '2024-08-07 00:00:00', 1),
(3, 'gomitas', 'AZUCARADAS', 'las gomitas mas sabrosas y ricassss.', 'gomita8.jpg', 1, 0, 300.00, 100.00, '2024-08-01 00:00:00', '2024-08-01 00:00:00', 3),
(4, 'CHOCOLATE 70% CACAO', 'CHOCOLATE 70% CACAO', 'CHOCOLATE SIN AZUCAR', 'chocolate9.jpg', 1, 0, 200.00, 50.00, '2024-08-01 00:00:00', '2024-08-07 00:00:00', 1),
(5, 'CHOCOLATE BLOCK', 'CHOCOLATE BLOCK', 'CHOCOLATE BLOCK', 'chocolate6.jpg', 1, 0, 150.00, 100.00, '2024-08-01 00:00:00', '2024-08-07 00:00:00', 1),
(6, 'CADBURY', 'CADBURY', 'CADBURY', 'chocolate8.jpg', 1, 0, 200.00, 100.00, '2024-08-01 00:00:00', '2024-08-01 00:00:00', 1),
(7, 'GOMITAS', 'GOMITAS', 'GOMITAS', 'gomita2.jpg', 2, 0, 50.00, 20.00, '2024-08-01 00:00:00', '2024-08-01 00:00:00', 3),
(8, 'SANDIAS', 'SANDIAS', 'SANDIAS', 'gomita7.jpg', 2, 0, 60.00, 10.00, '2024-08-01 00:00:00', '2024-08-01 00:00:00', 3),
(9, 'CHOCOLATE', 'CHOCOLATE', 'CHOCOLATE', 'pexels-anna-belousova-10189132.jpg', 3, 0, 160.00, 100.00, '2024-08-01 00:00:00', '2024-08-01 00:00:00', 4),
(10, 'BLOCK', 'BLOCK', 'BLOCK', 'alfajor1.jpg', 4, 0, 100.00, 20.00, '2024-08-01 00:00:00', '2024-08-01 00:00:00', 5),
(11, 'MAICENA', 'MAICENA', 'MAICENA', 'alfajor5.jpg', 4, 0, 80.00, 30.00, '2024-08-01 00:00:00', '2024-08-01 00:00:00', 5),
(12, 'ESPACIO', 'ESPACIO', 'ESPACIO', 'alfajor7.jpg', 4, 0, 100.00, 40.00, '2024-08-01 00:00:00', '2024-08-01 00:00:00', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `productos_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
