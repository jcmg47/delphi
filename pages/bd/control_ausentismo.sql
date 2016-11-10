-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2016 a las 06:30:20
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control_ausentismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacion`
--

CREATE TABLE `estacion` (
  `id_estacion` int(11) NOT NULL,
  `id_linea` int(11) NOT NULL,
  `nombre_es` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `estacion`
--

INSERT INTO `estacion` (`id_estacion`, `id_linea`, `nombre_es`) VALUES
(1, 4, 'ES-01'),
(7, 4, 'ES-02'),
(8, 4, 'ES-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacion_personal`
--

CREATE TABLE `estacion_personal` (
  `id_espersonal` int(11) NOT NULL,
  `id_estacion` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `prioridad` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `estacion_personal`
--

INSERT INTO `estacion_personal` (`id_espersonal`, `id_estacion`, `id_personal`, `prioridad`) VALUES
(1, 1, 1, '1'),
(2, 7, 1, '2'),
(3, 7, 8, '1'),
(4, 8, 1, '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencia`
--

CREATE TABLE `incidencia` (
  `id_incidencia` int(11) NOT NULL,
  `disponibilidad` tinyint(1) NOT NULL,
  `fecha` date NOT NULL,
  `id_personal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `incidencia`
--

INSERT INTO `incidencia` (`id_incidencia`, `disponibilidad`, `fecha`, `id_personal`) VALUES
(1, 1, '2016-11-01', 1),
(2, 1, '2016-10-10', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea`
--

CREATE TABLE `linea` (
  `id_linea` int(11) NOT NULL,
  `nombre_linea` varchar(10) COLLATE utf8_bin NOT NULL,
  `desc_linea` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `linea`
--

INSERT INTO `linea` (`id_linea`, `nombre_linea`, `desc_linea`) VALUES
(4, 'RU DP037', 'Linea Chrysler');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `id_turno` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `num_personal` int(20) NOT NULL,
  `nombre_personal` varchar(45) COLLATE utf8_bin NOT NULL,
  `apaterno_personal` varchar(45) COLLATE utf8_bin NOT NULL,
  `amaterno_personal` varchar(45) COLLATE utf8_bin NOT NULL,
  `correo_personal` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_personal`, `id_turno`, `id_tipo`, `num_personal`, `nombre_personal`, `apaterno_personal`, `amaterno_personal`, `correo_personal`) VALUES
(1, 1, 1, 458, 'Daniela', 'Flores', 'Hernandez', 'danyflores.15@gmail.com'),
(8, 2, 2, 369, 'Jose Cruz', 'Moreira', 'Hernandez', 'jmoreira@utzac.edu.mx'),
(9, 1, 1, 1212, 'sdsfr', 'dfreferf', 'gomez', 'floooo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subestacion`
--

CREATE TABLE `subestacion` (
  `id_subestacion` int(11) NOT NULL,
  `nombre_sub` varchar(20) COLLATE utf8_bin NOT NULL,
  `id_estacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `subestacion`
--

INSERT INTO `subestacion` (`id_subestacion`, `nombre_sub`, `id_estacion`) VALUES
(1, 'sub-1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `nombre_tipo` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `nombre_tipo`) VALUES
(1, 'Operario'),
(2, 'Soporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id_turno` int(11) NOT NULL,
  `nombre_turno` varchar(20) COLLATE utf8_bin NOT NULL,
  `descripcion_turno` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`id_turno`, `nombre_turno`, `descripcion_turno`) VALUES
(1, 'A', 'Matutino'),
(2, 'B', 'Vespertino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(20) COLLATE utf8_bin NOT NULL,
  `pass_usuario` varchar(20) COLLATE utf8_bin NOT NULL,
  `correo_usuario` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estacion`
--
ALTER TABLE `estacion`
  ADD PRIMARY KEY (`id_estacion`),
  ADD KEY `estacion_ibfk_1` (`id_linea`);

--
-- Indices de la tabla `estacion_personal`
--
ALTER TABLE `estacion_personal`
  ADD PRIMARY KEY (`id_espersonal`),
  ADD KEY `espersonal_ibfk_1` (`id_estacion`),
  ADD KEY `espersonal_ibfk_2` (`id_personal`);

--
-- Indices de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD PRIMARY KEY (`id_incidencia`),
  ADD KEY `personal_ibfk_1` (`id_personal`);

--
-- Indices de la tabla `linea`
--
ALTER TABLE `linea`
  ADD PRIMARY KEY (`id_linea`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`),
  ADD KEY `personal_ibfk_2` (`id_turno`),
  ADD KEY `personal_ibfk_3` (`id_tipo`);

--
-- Indices de la tabla `subestacion`
--
ALTER TABLE `subestacion`
  ADD PRIMARY KEY (`id_subestacion`),
  ADD KEY `subestacion_ibfk_1` (`id_estacion`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id_turno`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estacion`
--
ALTER TABLE `estacion`
  MODIFY `id_estacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `estacion_personal`
--
ALTER TABLE `estacion_personal`
  MODIFY `id_espersonal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  MODIFY `id_incidencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `linea`
--
ALTER TABLE `linea`
  MODIFY `id_linea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `subestacion`
--
ALTER TABLE `subestacion`
  MODIFY `id_subestacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id_turno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estacion`
--
ALTER TABLE `estacion`
  ADD CONSTRAINT `estacion_ibfk_1` FOREIGN KEY (`id_linea`) REFERENCES `linea` (`id_linea`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estacion_personal`
--
ALTER TABLE `estacion_personal`
  ADD CONSTRAINT `espersonal_ibfk_1` FOREIGN KEY (`id_estacion`) REFERENCES `estacion` (`id_estacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `espersonal_ibfk_2` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_2` FOREIGN KEY (`id_turno`) REFERENCES `turno` (`id_turno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personal_ibfk_3` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `subestacion`
--
ALTER TABLE `subestacion`
  ADD CONSTRAINT `subestacion_ibfk_1` FOREIGN KEY (`id_estacion`) REFERENCES `estacion` (`id_estacion`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
