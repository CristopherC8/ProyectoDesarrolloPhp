-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-07-2021 a las 02:37:45
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aeropuerto`
--

CREATE TABLE `aeropuerto` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aeropuerto`
--

INSERT INTO `aeropuerto` (`codigo`, `nombre`, `ciudad`, `pais`) VALUES
(1, 'Mariano Escobedo', 'Monterrey', 'Mexico'),
(2, 'Internacional', 'Cancun', 'Mexico'),
(3, 'Benito Juarez', 'Ciudad de mexico', 'Mexico'),
(4, 'John F Kennedy', 'Nueva York', 'Estados unidos'),
(5, 'Barajas', 'Madrid', 'España');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aeropuerto_programa`
--

CREATE TABLE `aeropuerto_programa` (
  `id_aeropuerto_programa` int(11) NOT NULL,
  `aterrizaje` tinyint(1) DEFAULT NULL,
  `despegue` tinyint(1) DEFAULT NULL,
  `escala` varchar(45) NOT NULL,
  `codigo` int(11) NOT NULL,
  `no_programa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aeropuerto_programa`
--

INSERT INTO `aeropuerto_programa` (`id_aeropuerto_programa`, `aterrizaje`, `despegue`, `escala`, `codigo`, `no_programa`) VALUES
(1, 1, 0, 'No hay escala', 1, 1),
(2, 1, 1, 'Si hay escala', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avion`
--

CREATE TABLE `avion` (
  `id_avion` int(11) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `avion`
--

INSERT INTO `avion` (`id_avion`, `modelo`, `capacidad`, `codigo`) VALUES
(1, '1', 80, 1),
(2, '2', 100, 2),
(3, '2', 150, 2),
(4, '3', 180, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_vuelo`
--

CREATE TABLE `programa_vuelo` (
  `no_programa` int(11) NOT NULL,
  `linea` varchar(45) NOT NULL,
  `dias` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programa_vuelo`
--

INSERT INTO `programa_vuelo` (`no_programa`, `linea`, `dias`) VALUES
(1, 'Viva aerobus', 'Lunes a Viernes'),
(2, 'Aeromexico', 'Martes a Sabado'),
(3, 'Volaris', 'Miercoles a Domingo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelos`
--

CREATE TABLE `vuelos` (
  `no_vuelo` int(11) NOT NULL,
  `plazas` varchar(45) NOT NULL,
  `fecha` date NOT NULL,
  `id_avion` int(11) NOT NULL,
  `no_programa` int(11) NOT NULL,
  `destino` varchar(45) NOT NULL,
  `origen` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vuelos`
--

INSERT INTO `vuelos` (`no_vuelo`, `plazas`, `fecha`, `id_avion`, `no_programa`, `destino`, `origen`) VALUES
(1, 'A01', '2021-07-15', 1, 1, 'Nueva York', 'Monterrey'),
(2, 'A02', '2021-07-15', 1, 1, 'Nueva York', 'Monterrey'),
(3, 'A15', '2021-07-17', 2, 2, 'Cancun', 'Monterrey');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aeropuerto`
--
ALTER TABLE `aeropuerto`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `aeropuerto_programa`
--
ALTER TABLE `aeropuerto_programa`
  ADD PRIMARY KEY (`id_aeropuerto_programa`),
  ADD KEY `fk_aeropuerto_programa1` (`codigo`),
  ADD KEY `fk_aeropuerto_programa2` (`no_programa`);

--
-- Indices de la tabla `avion`
--
ALTER TABLE `avion`
  ADD PRIMARY KEY (`id_avion`),
  ADD KEY `fk_avion_aeropuerto` (`codigo`);

--
-- Indices de la tabla `programa_vuelo`
--
ALTER TABLE `programa_vuelo`
  ADD PRIMARY KEY (`no_programa`);

--
-- Indices de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  ADD PRIMARY KEY (`no_vuelo`),
  ADD KEY `fk_vuelo_avion` (`id_avion`),
  ADD KEY `fk_vuelo_programa` (`no_programa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aeropuerto`
--
ALTER TABLE `aeropuerto`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `aeropuerto_programa`
--
ALTER TABLE `aeropuerto_programa`
  MODIFY `id_aeropuerto_programa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `avion`
--
ALTER TABLE `avion`
  MODIFY `id_avion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `programa_vuelo`
--
ALTER TABLE `programa_vuelo`
  MODIFY `no_programa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  MODIFY `no_vuelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aeropuerto_programa`
--
ALTER TABLE `aeropuerto_programa`
  ADD CONSTRAINT `fk_aeropuerto_programa1` FOREIGN KEY (`codigo`) REFERENCES `aeropuerto` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_aeropuerto_programa2` FOREIGN KEY (`no_programa`) REFERENCES `programa_vuelo` (`no_programa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `avion`
--
ALTER TABLE `avion`
  ADD CONSTRAINT `fk_avion_aeropuerto` FOREIGN KEY (`codigo`) REFERENCES `aeropuerto` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vuelos`
--
ALTER TABLE `vuelos`
  ADD CONSTRAINT `fk_vuelo_avion` FOREIGN KEY (`id_avion`) REFERENCES `avion` (`id_avion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_vuelo_programa` FOREIGN KEY (`no_programa`) REFERENCES `programa_vuelo` (`no_programa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
