-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-11-2016 a las 21:34:33
-- Versión del servidor: 5.6.33
-- Versión de PHP: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `Ventas`
--
CREATE DATABASE IF NOT EXISTS `Ventas` DEFAULT CHARACTER SET armscii8 COLLATE armscii8_general_ci;
USE `Ventas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Autos`
--

CREATE TABLE `Autos` (
  `id_Auto` text NOT NULL,
  `Nombre` text NOT NULL,
  `tipo` text NOT NULL,
  `Puntos` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Vendedor`
--

CREATE TABLE `Vendedor` (
  `id_Vendedor` int(11) NOT NULL,
  `Nombres` text NOT NULL,
  `Apellidos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ventas`
--

CREATE TABLE `Ventas` (
  `id_Vendedor` int(11) NOT NULL,
  `Marca` text NOT NULL,
  `Cliente` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Autos`
--
ALTER TABLE `Autos`
  ADD PRIMARY KEY (`Nombre`(100),`id_Auto`(50));

--
-- Indices de la tabla `Vendedor`
--
ALTER TABLE `Vendedor`
  ADD PRIMARY KEY (`id_Vendedor`);

--
-- Indices de la tabla `Ventas`
--
ALTER TABLE `Ventas`
  ADD PRIMARY KEY (`id_Vendedor`);