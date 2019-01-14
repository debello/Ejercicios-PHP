-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2019 a las 15:37:22
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `uno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artigo`
--

CREATE TABLE `artigo` (
  `id` int(255) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `prezo` int(6) DEFAULT NULL,
  `categoria` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `artigo`
--

INSERT INTO `artigo` (`id`, `nome`, `descripcion`, `prezo`, `categoria`) VALUES
(1, 'Manzana', 'Pieza de fruta verde', 0, 'Alimentos'),
(2, 'Silla', 'Cuatro patas con tabla', 15, 'Muebles'),
(3, 'Manzana', 'Pieza de fruta verde', 0, 'Alimentos'),
(4, 'Mesa', 'Tabla de madera redonda', 26, 'Muebles'),
(5, 'Silla', 'Cuatro patas con tabla', 15, 'Muebles'),
(6, 'Aspiradora', 'Artefacto para limpiar suelos', 11, 'Electrodomésticos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artigo`
--
ALTER TABLE `artigo`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
