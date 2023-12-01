-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2023 a las 00:38:33
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
-- Base de datos: `mi_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(5) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `cedula` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `cedula`) VALUES
(1, 'carlos', 'sanchez', 123456),
(2, 'maria', 'sanchez', 7890123),
(3, 'DIEGO', 'RODRIGUEZ', 10523),
(4, 'JORGE', 'MIRANDA', 458756),
(5, 'ANA', 'MORALES', 4578542),
(7, 'DIANA', 'ESTUPIÑAN', 45287),
(8, 'DANIEL', 'MORALES', 2336994),
(9, 'MILENA', 'SERRATO', 754896),
(10, 'MARIO', 'RINCON', 42158),
(11, 'JUAN', 'LOZANO', 754896),
(12, 'CLAUDIA', 'PEDRAZA', 254123),
(13, 'JUAN', 'MENDEZ', 578831),
(14, 'MIGUEL', 'TOSCANO', 326945),
(15, 'GUILLERMO', 'SANTANDER', 874526),
(16, 'GILMA', 'PEREZ', 785426),
(17, 'MARIA', 'LOZANO', 412556),
(18, 'CAMILA', 'PUERTA', 74536),
(19, 'JUAN', 'PIÑEROS', 3652312),
(20, 'PABLO', 'LLERAS', 236521),
(21, 'PAOLA', 'MILLAN', 1254236),
(22, 'ALIRIO', 'MORA', 12336524);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
