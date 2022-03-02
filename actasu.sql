-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2022 a las 20:31:33
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `actasu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta`
--

CREATE TABLE `acta` (
  `cod_acta` int(100) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `desc_acta` varchar(2000) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `participantes` varchar(2000) NOT NULL,
  `responsabilidades` varchar(2000) NOT NULL,
  `programa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acta`
--

INSERT INTO `acta` (`cod_acta`, `usuario`, `desc_acta`, `fecha`, `estado`, `participantes`, `responsabilidades`, `programa`) VALUES
(1, 'admin', 't1', '2022-02-21', 'Activa', 'p1\r\np2', 'r1', 'ing sistemas'),
(2, 'admin', 'tr', '2022-02-22', 'Activa', 'tr', 'tr', 'tr');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compromisos`
--

CREATE TABLE `compromisos` (
  `consecutivo` int(11) NOT NULL,
  `cod_acta` int(20) NOT NULL,
  `desc_compromiso` varchar(1000) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compromisos`
--

INSERT INTO `compromisos` (`consecutivo`, `cod_acta`, `desc_compromiso`, `estado`, `fecha`) VALUES
(1, 1, 'wwwwwwwww', 'pendiente', '2022-01-17'),
(2, 1, 'ww', 'cumplido', '2022-01-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(20) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `nombre`, `tipo`, `estado`, `clave`) VALUES
('admin', 'esteban', 'Administrador', 'Activo', '111'),
('doc', 'daniel atencia', 'docente', 'Activo', '222');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acta`
--
ALTER TABLE `acta`
  ADD PRIMARY KEY (`cod_acta`),
  ADD KEY `codigo` (`usuario`);

--
-- Indices de la tabla `compromisos`
--
ALTER TABLE `compromisos`
  ADD PRIMARY KEY (`consecutivo`),
  ADD KEY `cod_acta` (`cod_acta`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acta`
--
ALTER TABLE `acta`
  MODIFY `cod_acta` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `compromisos`
--
ALTER TABLE `compromisos`
  MODIFY `consecutivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
