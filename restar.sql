-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-01-2022 a las 04:10:55
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechas`
--

CREATE TABLE `fechas` (
  `fecha_uno` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_dos` timestamp NOT NULL DEFAULT current_timestamp(),
  `resultado` decimal(7,2) NOT NULL,
  `placa` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `tipoCoche` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `importe` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `fechas`
--

INSERT INTO `fechas` (`fecha_uno`, `fecha_dos`, `resultado`, `placa`, `tipoCoche`, `importe`) VALUES
('2022-01-28 20:47:02', '2022-01-28 20:57:02', '10.20', 'GAU991B', 'RESIDENTE', 10),
('2022-01-28 20:20:02', '2022-01-28 20:57:02', '37.20', 'GAY989A', 'NO RESIDENTE', 112),
('2022-01-28 20:28:02', '2022-01-28 20:57:02', '28.80', 'GOB1919', 'OFICIAL', 0),
('2022-01-28 21:02:09', '2022-01-28 21:09:09', '7.20', 'AAA221', 'RESIDENTE', 7),
('2022-01-28 21:02:09', '2022-01-28 21:09:09', '7.20', 'ABV221', 'NO RESIDENTE', 22),
('2022-01-28 21:03:59', '2022-01-28 21:54:59', '51.00', 'SALU32', 'OFICIAL', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
