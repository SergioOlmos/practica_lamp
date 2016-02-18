-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2016 a las 13:03:21
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aficiones`
--

CREATE TABLE IF NOT EXISTS `aficiones` (
  `IDAF` int(11) NOT NULL,
  `NOMBREAFICION` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `iddep` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`iddep`, `nombre`) VALUES
(1, 'Ventas'),
(2, 'Márketing'),
(3, 'RRHH'),
(4, 'Finanzas'),
(5, 'Desfalcos'),
(6, 'Urdangarinadas'),
(7, 'Cosas feas'),
(8, 'departamento nuevo sergio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `idemp` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `fnac` date NOT NULL,
  `iddep` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `IDPER` int(11) NOT NULL,
  `NOMBREPERSONA` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_aficiones`
--

CREATE TABLE IF NOT EXISTS `personas_aficiones` (
  `IDPER` int(11) NOT NULL,
  `IDAF` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_menus`
--

CREATE TABLE IF NOT EXISTS `_menus` (
  `id` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `accion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `_menus`
--

INSERT INTO `_menus` (`id`, `idp`, `nombre`, `accion`) VALUES
(1, 0, 'Afición', ''),
(2, 0, 'Persona', ''),
(3, 1, 'Listar', 'aficion/listar'),
(4, 1, 'Crear', 'aficion/crear'),
(5, 2, 'Listar', 'persona/listar'),
(6, 2, 'Crear', 'persona/crear');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aficiones`
--
ALTER TABLE `aficiones`
  ADD PRIMARY KEY (`IDAF`),
  ADD UNIQUE KEY `IDAF` (`IDAF`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`iddep`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idemp`),
  ADD KEY `iddep` (`iddep`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`IDPER`);

--
-- Indices de la tabla `personas_aficiones`
--
ALTER TABLE `personas_aficiones`
  ADD KEY `FK_IDPER_Personas` (`IDPER`),
  ADD KEY `FK_IDAF_aficiones` (`IDAF`);

--
-- Indices de la tabla `_menus`
--
ALTER TABLE `_menus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aficiones`
--
ALTER TABLE `aficiones`
  MODIFY `IDAF` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `iddep` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `idemp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `IDPER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `FK_EMP_DEP` FOREIGN KEY (`iddep`) REFERENCES `departamentos` (`iddep`);

--
-- Filtros para la tabla `personas_aficiones`
--
ALTER TABLE `personas_aficiones`
  ADD CONSTRAINT `FK_IDAF_aficiones` FOREIGN KEY (`IDAF`) REFERENCES `aficiones` (`IDAF`),
  ADD CONSTRAINT `FK_IDPER_Personas` FOREIGN KEY (`IDPER`) REFERENCES `personas` (`IDPER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
