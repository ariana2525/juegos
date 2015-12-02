-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2015 a las 13:11:06
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto`
--
CREATE DATABASE IF NOT EXISTS `proyecto` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `proyecto`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE IF NOT EXISTS `carreras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_carrera` varchar(140) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `nombre_carrera`) VALUES
(1, 'Computacíon e informatica'),
(2, 'Contabilidad'),
(3, 'Mecánica automotriz'),
(4, 'Electrónica industrial'),
(5, 'Secretariado ejecutivo'),
(6, 'Diseño publicitario'),
(7, 'Diseño técnico (arquitectónico)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `carrera` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `curso_libre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellidos`, `email`, `telefono`, `carrera`, `curso_libre`) VALUES
(1, 'jhon antony', 'manrique ramos', 'antony476@gmail.com', 982447472, '1', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computacion_libre`
--

CREATE TABLE IF NOT EXISTS `computacion_libre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(122) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `computacion_libre`
--

INSERT INTO `computacion_libre` (`id`, `nombre`) VALUES
(3, 'Ensamblaje de Pc'),
(4, 'Soporte Técnico'),
(5, 'Redes y conectividad'),
(6, 'Desarrollo de aplicaciones web'),
(8, 'Desarrollo de aplicaciones Android'),
(9, 'Ofimatica Empresarial'),
(10, 'Autocad'),
(11, 'Proyect 2010'),
(12, 'Informática para adultos mayores'),
(13, 'Diseño y desarrollo web'),
(14, 'Reoaracuón de laptop'),
(15, 'curso php básico y mysql');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contabilidad_libre`
--

CREATE TABLE IF NOT EXISTS `contabilidad_libre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `contabilidad_libre`
--

INSERT INTO `contabilidad_libre` (`id`, `nombre`) VALUES
(1, 'Paquete contable'),
(2, 'Tributación para contadores y no contadores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disenio_publicitario_libre`
--

CREATE TABLE IF NOT EXISTS `disenio_publicitario_libre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `disenio_publicitario_libre`
--

INSERT INTO `disenio_publicitario_libre` (`id`, `nombre`) VALUES
(1, 'Fotografia Digital'),
(2, 'Diseño Multimedia'),
(3, 'Edicion y Postproduccion de video'),
(4, 'diseño grafico digital'),
(5, 'Aerosolgrafia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diseño_tecnico_libre`
--

CREATE TABLE IF NOT EXISTS `diseño_tecnico_libre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `diseño_tecnico_libre`
--

INSERT INTO `diseño_tecnico_libre` (`id`, `nombre`) VALUES
(1, 'Dibujo Técnico Básico'),
(2, 'Diseño de Interiores en 3D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `electronica_libre`
--

CREATE TABLE IF NOT EXISTS `electronica_libre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `electronica_libre`
--

INSERT INTO `electronica_libre` (`id`, `nombre`) VALUES
(4, 'instalacion Video vigilancia'),
(5, 'reparacion de Celulares Tablets Smartphone'),
(6, 'Electrónica básica'),
(7, 'Instalaciones Eléctricas Domiciliarias'),
(8, 'Electronica Avanzada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanica_automotriz_libre`
--

CREATE TABLE IF NOT EXISTS `mecanica_automotriz_libre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `mecanica_automotriz_libre`
--

INSERT INTO `mecanica_automotriz_libre` (`id`, `nombre`) VALUES
(1, 'reparacion de motos linea y bajaj'),
(2, 'mécanica básica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretariado_libre`
--

CREATE TABLE IF NOT EXISTS `secretariado_libre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `secretariado_libre`
--

INSERT INTO `secretariado_libre` (`id`, `nombre`) VALUES
(1, 'Secretaria Recepcionista'),
(2, 'Asistente de Gerencia'),
(3, 'Ortografia y Redaccion'),
(4, 'Oratoria'),
(5, 'Ssistente Administrativa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
