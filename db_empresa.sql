-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-03-2014 a las 03:55:04
-- Versión del servidor: 5.5.35-0ubuntu0.13.10.2
-- Versión de PHP: 5.5.3-1ubuntu2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_empresa`
--
CREATE DATABASE IF NOT EXISTS `db_empresa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_empresa`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licor`
--

CREATE TABLE IF NOT EXISTS `licor` (
  `cod_licor` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fabricante` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `presentacion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `existencias` int(11) NOT NULL,
  `anejamiento` int(11) NOT NULL,
  `nacionalidad` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `grados_alcohol` int(11) NOT NULL,
  `imagen` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`cod_licor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `licor`
--

INSERT INTO `licor` (`cod_licor`, `nombre`, `fabricante`, `precio`, `presentacion`, `existencias`, `anejamiento`, `nacionalidad`, `grados_alcohol`, `imagen`) VALUES
('albaCream', 'Crema de Alba', 'Williams & Humbert', 40000, '750ml', 200, 0, 'España', 17, 'img/alba_crema.jpg'),
('cabernetHarlan', 'Harlan Cabernet Sauvignon', 'Harlan State ', 6000000, '1500ml', 20, 12, 'Estados Unidos', 15, 'img/sauvignon_harlan.jpg'),
('cerPeroni', 'Peroni', 'BAVARIA', 15000, '250ml', 1000000, 0, 'Colombia', 5, 'img/peroni.jpg'),
('cervClub', 'Club Colombia', 'BAVARIA', 15000, '250ml', 1000000, 0, 'Colombia', 5, 'img/club_colombia.jpg'),
('cervCorona', 'Corona Extra', 'Grupo modelo', 1500, '250ml', 1000000, 0, 'España', 5, 'img/corona.jpg'),
('cervHeineken', 'Heineken', 'Heineken International', 1500, '250 ml', 1000000, 0, 'Holanda', 5, 'img/heineken.jpg'),
('cervMiller', 'Miller Genuine Daft', 'SABMiller', 1600, '250ml', 1000000, 0, 'Estados Unidos', 5, 'img/miller.jpg'),
('creamBaileys', 'Baileys Irihs Cream', 'R.A. Bailey & CO', 45000, '750ml', 200, 0, 'Irlanda', 17, 'img/baileys_cream.jpg'),
('cuervoEspecial', 'Jose Cuervo Especial', 'Jose Cuervo', 25000, '750ml', 200, 0, 'Mexico', 40, 'img/jose_cuervo.jpg'),
('diabloCabernet', 'Casillero del Diablo Cabernet Sauvignon', 'Concha y Toro', 15000, '750ml', 250, 2, 'Chile', 13, 'img/diablo_cabernet.jpg'),
('jodhGinebra', 'Ginebra Jodhpur', 'Beveland', 55000, '700ml', 200, 0, 'Inglaterra', 43, 'img/ginebra_jodphur.jpg'),
('labelBlack', 'Black Label', 'Johnnie Walker & Sons Distillery', 80000, '750ml', 200, 12, 'Inglaterra', 43, 'img/black_label.jpg'),
('merlotGato', 'Gato Negro Cabernet Merlot', 'Vina San Pedro', 15000, '750ml', 200, 2, 'Chile', 13, 'img/cabernet_merlot.jpg'),
('oldNo7', 'Jack Daniel''s Old Time Old No.7 ', 'Jack Daniel''s', 45000, '750ml', 200, 0, 'Estados Unidos', 40, 'img/jack_daniels.jpg'),
('pearsVodk', 'Vodka Absolut Pears', 'Vin & Sprit', 22000, '750ml', 200, 0, 'Suiza', 40, 'img/absolut_pears.jpg'),
('regalChivas12', 'Chivas Regal', 'Pernod Ricard Colombia', 65000, '750ml', 200, 12, 'Colombia', 40, 'img/chivas_regal.jpg'),
('unicoVega', 'Vega Sicilia Unico Reserva Especial', 'Ribera de Duero', 7000000, '750ml', 10, 38, 'España', 19, 'img/vega_unico.jpg'),
('zacaRon', 'Ron Zacapa XO', 'Industrias Licoreras de Guatemala', 90000, '750ml', 100, 3, 'Guatemala', 40, 'img/ron_zacapa.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `tipo_id` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `num_id` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `rol` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `direccion` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(16) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`tipo_id`,`num_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`tipo_id`, `num_id`, `nombre`, `apellido`, `usuario`, `contrasena`, `rol`, `fecha_nacimiento`, `direccion`, `telefono`) VALUES
('CC', '1034264512', 'Jose', 'Cardenas', 'jcardenas', '2222', 'empl', '1986-01-01', 'cra 2 #22 22', '2513695'),
('CC', '1035916860', 'Rafael', 'Patiño Grisales', 'admin', 'que marikada', 'admin', NULL, NULL, NULL),
('CC', '1036647030', 'Camilo', 'Rivera', 'rivkmilo', '0000', 'admin', '1996-06-06', 'cra 6 #06-06', '111111111111'),
('CC', '12345', 'Pepe', 'Perez', 'pepe.perez', '12345', 'empl', NULL, NULL, NULL),
('CE', '1035214152', 'Andres', 'Vergara', 'avergara', '1111', 'clien', '1990-12-24', 'Cra 1 #11 11', '74125893'),
('CE', '5025', 'Halab', 'Yahab', 'hahab', '10154', 'clien', '1990-09-06', 'calle 10 #50-50', '3285623'),
('Ced', '10151424', 'Alejandro', 'Yerenis', 'yerenis', '98765', 'clien', '1880-03-18', 'calle calle', '00000'),
('Ced', '7777777', 'Carlos', 'Gomez', 'cgomez', '3333', 'clien', '2014-03-12', 'adsfsfd', '7542');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
