-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-07-2022 a las 12:12:49
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hackaton`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosinternet`
--

CREATE TABLE `datosinternet` (
  `IdDatosInternet` int(11) NOT NULL,
  `NombreTitulo` varchar(200) DEFAULT NULL,
  `Url1` varchar(500) DEFAULT NULL,
  `Url2` varchar(500) DEFAULT NULL,
  `FechaRegistro` datetime DEFAULT NULL,
  `Pais` varchar(100) DEFAULT NULL,
  `TipoEstudio` varchar(200) DEFAULT NULL,
  `EstudioDesignado` varchar(200) DEFAULT NULL,
  `PrimerNombre` varchar(100) DEFAULT NULL,
  `SegundoNombre` varchar(100) DEFAULT NULL,
  `DireccionContacto` varchar(100) DEFAULT NULL,
  `EmailContacto` varchar(100) DEFAULT NULL,
  `CriterioInclusion` varchar(500) DEFAULT NULL,
  `CriterioExclusion` varchar(500) DEFAULT NULL,
  `Tstamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosinternet`
--

INSERT INTO `datosinternet` (`IdDatosInternet`, `NombreTitulo`, `Url1`, `Url2`, `FechaRegistro`, `Pais`, `TipoEstudio`, `EstudioDesignado`, `PrimerNombre`, `SegundoNombre`, `DireccionContacto`, `EmailContacto`, `CriterioInclusion`, `CriterioExclusion`, `Tstamp`) VALUES
(0, 'Induction of Cytokines in Human Monocytes by SARS-CoV in Adults and Children', 'http://clinicaltrials.gov/show/NCT00173563', NULL, '2022-07-12 03:37:39', 'Taiwan', 'Observational', 'Time Perspective: Prospective', 'Luan Ying', 'Chang', 'MD, PhD', 'Ly7077@tpts6.seed.net.tw', 'Criterio de inclusion', 'criterioexclusion', '2022-07-23 09:09:16'),
(1, 'Induction of Cytokines in Human Monocytes by SARS-CoV in Adults and Children', 'http://clinicaltrials.gov/show/NCT00173563', NULL, '2022-07-12 03:37:39', 'Taiwan', 'Observational', 'Time Perspective: Prospective', 'Luan Ying', 'Chang', 'MD, PhD', 'Ly7077@tpts6.seed.net.tw', 'Criterio de inclusion', 'criterioexclusion', '2022-07-23 09:09:28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosinternet`
--
ALTER TABLE `datosinternet`
  ADD PRIMARY KEY (`IdDatosInternet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
