-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2019 a las 18:51:34
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `programacionweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crud`
--

CREATE TABLE `crud` (
  `ID` int(4) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `TipoTarjeta` varchar(50) NOT NULL,
  `Titular` varchar(50) NOT NULL,
  `NumeroTarjeta` varchar(50) NOT NULL,
  `CVV2` varchar(50) NOT NULL,
  `FechaExpedicion` date NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Departamento` varchar(50) NOT NULL,
  `ZIP` varchar(60) NOT NULL,
  `Pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `crud`
--

INSERT INTO `crud` (`ID`, `Nombre`, `Apellido`, `Email`, `TipoTarjeta`, `Titular`, `NumeroTarjeta`, `CVV2`, `FechaExpedicion`, `Direccion`, `Ciudad`, `Telefono`, `Departamento`, `ZIP`, `Pais`) VALUES
(1, 'qrq3r', 'q3r', '3rr3', 'Visa', '', 'wrr', 'wr', '2019-02-01', 'q3rq', '3wr', '4w4t', 'Boyaca', 'w3r3t4', 'Colombia'),
(5, 'Sergio', 'Castillo', 'sergio@', 'Visa', 'sergio', '345', 'rgrth', '2019-02-14', 'cra 45', 'bogota', 'w567676', 'Boyaca', '3435', 'Estados Unidos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `crud`
--
ALTER TABLE `crud`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
