-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-11-2022 a las 23:18:00
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nuevousuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(80) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `apellidos`, `correo`, `password`) VALUES
(1, 'juan', 'hernandez', 'h@hottm', '12345678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `correo` (`email`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`) VALUES
(1, '', '', 'Daniel.mxg', 'Papasito_1'),
(2, 'Heriberto', 'De Coss', 'h@gmail.com', '12345678'),
(3, 'Rigoberto', 'Perez', 'rigoberto@gmail.com', '123456789');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
