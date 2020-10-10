-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 08:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campeonato`
--

-- --------------------------------------------------------

--
-- Table structure for table `arbitros`
--

CREATE TABLE `arbitros` (
  `idArbitro` bigint(20) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arbitros`
--

INSERT INTO `arbitros` (`idArbitro`, `nombre`) VALUES
(1, 'Antonio Mateu Lahoz'),
(2, 'Néstor Pitana'),
(3, 'Pierluigi Collina'),
(4, 'José María Sánchez Martínez'),
(5, 'Markus Merk');

-- --------------------------------------------------------

--
-- Table structure for table `equipos`
--

CREATE TABLE `equipos` (
  `idEquipo` bigint(20) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipos`
--

INSERT INTO `equipos` (`idEquipo`, `nombre`) VALUES
(1, 'Rico Pollo'),
(3, 'Sacachispas'),
(4, 'Carabobo');

-- --------------------------------------------------------

--
-- Table structure for table `jugadores`
--

CREATE TABLE `jugadores` (
  `idJugador` bigint(20) NOT NULL,
  `idEquipo` bigint(20) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jugadores`
--

INSERT INTO `jugadores` (`idJugador`, `idEquipo`, `nombre`, `apellido`, `edad`) VALUES
(1, 4, 'Alexander', 'Duarte', 20),
(2, 4, 'Alvaro', 'Calderon', 33),
(3, 4, 'Camilo Alexander', 'Bolivar', 23),
(4, 4, 'Cesar Augusto', 'Ramirez Laverde', 31),
(5, 4, 'Diego Andres', 'Calero Garay', 31),
(6, 4, 'Elkin Ronald', 'Puche Vega', 31),
(7, 4, 'Erley', 'Camacho Mendoza', 29),
(8, 4, 'Fabian', 'Rico Rodriguez', 35),
(9, 4, 'Fermin', 'Ariza Iglesias', 27),
(10, 4, 'France Juranni', 'Cendales Ladino', 26),
(11, 4, 'Gaby Elenith', 'Manzano Uribe', 33),
(12, 1, 'Gustavo Alberto', 'Mendoza Lopez', 33),
(13, 1, 'Gustavo Adolfo', 'Diaz Vera', 18),
(14, 1, 'Hermes Jacobo', 'Garcia Guacaneme', 26),
(15, 1, 'Javier Orlando', 'Corredor Garcia', 34),
(16, 1, 'Jesus Alveiro', 'Vergel Greco', 21),
(17, 1, 'Jorge Hernando', 'Dueñas Gomez', 31),
(18, 1, 'Jorge Humberto', 'Reina Rueda', 33),
(19, 1, 'Juan de Jesus', 'Valencia Arevalo', 27),
(20, 1, 'Leonardo', 'Garzon Ramirez', 26),
(21, 1, 'Luis Alejandro', 'Vanegas Vasquez', 28),
(22, 1, 'Luis Fernando', 'Torrado Lemus', 28),
(23, 3, 'Luis Felipe', 'Reinosa Lopez', 33),
(24, 3, 'Madian', 'Bolivar Sastoque', 29),
(25, 3, 'Miguel Angel', 'Chaparro Becerra', 24),
(26, 3, 'Miguel Eduardo', 'Perez Mendez', 26),
(27, 3, 'Michael Alexander', 'Murcia Leguizamon', 34),
(28, 3, 'Milton Jose', 'Perilla Bernal', 23),
(29, 3, 'Nestor Elias', ' Sabogal Diaz', 35),
(30, 3, 'Nestor Leonardo', 'Patiño Neira', 18),
(31, 3, 'Nestor Ivan', 'Barrios Jaramillo', 19),
(32, 3, 'Reinaldo', 'Valbuena Carrero', 18),
(33, 3, 'Wilder Javier', 'Rincon', 20);

-- --------------------------------------------------------

--
-- Table structure for table `partiarbitros`
--

CREATE TABLE `partiarbitros` (
  `idPartArbitro` bigint(20) NOT NULL,
  `idPartido` bigint(20) DEFAULT NULL,
  `idEquipo` bigint(20) DEFAULT NULL,
  `idArbitro` bigint(20) DEFAULT NULL,
  `idPosicionArbitro` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partiarbitros`
--

INSERT INTO `partiarbitros` (`idPartArbitro`, `idPartido`, `idEquipo`, `idArbitro`, `idPosicionArbitro`) VALUES
(1, 1, NULL, 1, 1),
(2, 1, NULL, 4, 3),
(3, 1, NULL, 5, 2),
(4, 1, NULL, 3, 1),
(5, 2, NULL, 2, 3),
(6, 2, NULL, 5, 2),
(7, 3, NULL, 5, 1),
(8, 3, NULL, 3, 3),
(9, 3, NULL, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `partidos`
--

CREATE TABLE `partidos` (
  `idPartido` bigint(20) NOT NULL,
  `idEquipo1` bigint(20) DEFAULT NULL,
  `idEquipo2` bigint(20) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partidos`
--

INSERT INTO `partidos` (`idPartido`, `idEquipo1`, `idEquipo2`, `fecha`) VALUES
(1, 4, 1, '2020-10-01 12:47:59'),
(2, 1, 3, '2020-09-05 12:48:11'),
(3, 3, 4, '2020-11-20 12:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `partijugadores`
--

CREATE TABLE `partijugadores` (
  `idPartJugador` bigint(20) NOT NULL,
  `idPartido` bigint(20) DEFAULT NULL,
  `idEquipo` bigint(20) DEFAULT NULL,
  `idJugador` bigint(20) DEFAULT NULL,
  `idPosicionJugador` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partijugadores`
--

INSERT INTO `partijugadores` (`idPartJugador`, `idPartido`, `idEquipo`, `idJugador`, `idPosicionJugador`) VALUES
(1, 1, 4, 1, 1),
(2, 1, 4, 2, 2),
(3, 1, 4, 3, 3),
(4, 1, 4, 4, 12),
(5, 1, 4, 5, 3),
(6, 1, 4, 6, 6),
(7, 1, 4, 7, 8),
(8, 1, 4, 8, 9),
(9, 1, 4, 9, 11),
(10, 1, 4, 10, 12),
(11, 1, 4, 11, 10),
(12, 1, 1, 12, 2),
(13, 1, 1, 13, 3),
(14, 1, 1, 14, 2),
(15, 1, 1, 15, 4),
(16, 1, 1, 16, 1),
(17, 1, 1, 17, 12),
(18, 1, 1, 18, 10),
(19, 1, 1, 19, 12),
(20, 1, 1, 20, 8),
(21, 1, 1, 21, 7),
(22, 1, 1, 23, 5),
(23, 2, 1, 1, 1),
(24, 2, 1, 2, 2),
(25, 2, 1, 3, 3),
(26, 2, 1, 4, 3),
(27, 2, 1, 5, 10),
(28, 2, 1, 6, 10),
(29, 2, 1, 6, 10),
(30, 2, 1, 8, 6),
(31, 2, 1, 9, 7),
(32, 2, 1, 10, 9),
(33, 2, 1, 11, 8),
(34, 2, 3, 23, 2),
(35, 2, 3, 22, 3),
(36, 2, 3, 25, 3),
(37, 2, 3, 27, 1),
(38, 2, 3, 28, 12),
(39, 2, 3, 29, 10),
(40, 2, 3, 31, 8),
(41, 2, 3, 32, 9),
(42, 2, 3, 33, 5),
(43, 3, 3, 12, 8),
(44, 3, 3, 13, 9),
(45, 3, 3, 14, 9),
(46, 3, 3, 15, 2),
(47, 3, 3, 16, 1),
(48, 3, 3, 17, 3),
(49, 3, 3, 18, 3),
(50, 3, 3, 19, 2),
(51, 3, 3, 20, 12),
(52, 3, 3, 21, 10),
(53, 3, 3, 22, 11),
(54, 3, 4, 23, 8),
(55, 3, 4, 24, 9),
(56, 3, 4, 25, 5),
(57, 3, 4, 26, 11),
(58, 3, 4, 27, 1),
(59, 3, 4, 28, 10),
(60, 3, 4, 29, 2),
(61, 3, 4, 30, 10),
(62, 3, 4, 32, 3),
(63, 3, 4, 33, 4);

-- --------------------------------------------------------

--
-- Table structure for table `posicionesarbitros`
--

CREATE TABLE `posicionesarbitros` (
  `idPosicionArbitro` bigint(20) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posicionesarbitros`
--

INSERT INTO `posicionesarbitros` (`idPosicionArbitro`, `nombre`) VALUES
(1, 'Arbitro Central'),
(2, 'Juez de linea izquierda'),
(3, 'Juez de linea derecha');

-- --------------------------------------------------------

--
-- Table structure for table `posicionesjugadores`
--

CREATE TABLE `posicionesjugadores` (
  `idPosicionJugador` bigint(20) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posicionesjugadores`
--

INSERT INTO `posicionesjugadores` (`idPosicionJugador`, `nombre`) VALUES
(1, 'Portero'),
(2, 'Defensa Central'),
(3, 'Defensa lateral'),
(4, 'Carrilero'),
(5, 'Mediocentro'),
(6, 'Centrocampista'),
(7, 'Interior'),
(8, 'Media Punta'),
(9, 'Mediocampista externo'),
(10, 'Delantero Extremo'),
(11, 'Segundo delantero'),
(12, 'Delantero Centro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arbitros`
--
ALTER TABLE `arbitros`
  ADD PRIMARY KEY (`idArbitro`);

--
-- Indexes for table `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`idEquipo`);

--
-- Indexes for table `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`idJugador`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `idEquipo` (`idEquipo`);

--
-- Indexes for table `partiarbitros`
--
ALTER TABLE `partiarbitros`
  ADD PRIMARY KEY (`idPartArbitro`),
  ADD KEY `idPartido` (`idPartido`),
  ADD KEY `idEquipo` (`idEquipo`),
  ADD KEY `idArbitro` (`idArbitro`),
  ADD KEY `idPosicionArbitro` (`idPosicionArbitro`);

--
-- Indexes for table `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`idPartido`),
  ADD KEY `idEquipo1` (`idEquipo1`),
  ADD KEY `idEquipo2` (`idEquipo2`);

--
-- Indexes for table `partijugadores`
--
ALTER TABLE `partijugadores`
  ADD PRIMARY KEY (`idPartJugador`),
  ADD KEY `idPartido` (`idPartido`),
  ADD KEY `idEquipo` (`idEquipo`),
  ADD KEY `idJugador` (`idJugador`),
  ADD KEY `idPosicionJugador` (`idPosicionJugador`);

--
-- Indexes for table `posicionesarbitros`
--
ALTER TABLE `posicionesarbitros`
  ADD PRIMARY KEY (`idPosicionArbitro`);

--
-- Indexes for table `posicionesjugadores`
--
ALTER TABLE `posicionesjugadores`
  ADD PRIMARY KEY (`idPosicionJugador`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arbitros`
--
ALTER TABLE `arbitros`
  MODIFY `idArbitro` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `equipos`
--
ALTER TABLE `equipos`
  MODIFY `idEquipo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `idJugador` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `partiarbitros`
--
ALTER TABLE `partiarbitros`
  MODIFY `idPartArbitro` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `partidos`
--
ALTER TABLE `partidos`
  MODIFY `idPartido` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `partijugadores`
--
ALTER TABLE `partijugadores`
  MODIFY `idPartJugador` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `posicionesarbitros`
--
ALTER TABLE `posicionesarbitros`
  MODIFY `idPosicionArbitro` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posicionesjugadores`
--
ALTER TABLE `posicionesjugadores`
  MODIFY `idPosicionJugador` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `jugadores_ibfk_1` FOREIGN KEY (`idEquipo`) REFERENCES `equipos` (`idEquipo`);

--
-- Constraints for table `partiarbitros`
--
ALTER TABLE `partiarbitros`
  ADD CONSTRAINT `partiarbitros_ibfk_1` FOREIGN KEY (`idPartido`) REFERENCES `partidos` (`idPartido`),
  ADD CONSTRAINT `partiarbitros_ibfk_2` FOREIGN KEY (`idEquipo`) REFERENCES `equipos` (`idEquipo`),
  ADD CONSTRAINT `partiarbitros_ibfk_3` FOREIGN KEY (`idArbitro`) REFERENCES `arbitros` (`idArbitro`),
  ADD CONSTRAINT `partiarbitros_ibfk_4` FOREIGN KEY (`idPosicionArbitro`) REFERENCES `posicionesarbitros` (`idPosicionArbitro`);

--
-- Constraints for table `partidos`
--
ALTER TABLE `partidos`
  ADD CONSTRAINT `partidos_ibfk_1` FOREIGN KEY (`idEquipo1`) REFERENCES `equipos` (`idEquipo`),
  ADD CONSTRAINT `partidos_ibfk_2` FOREIGN KEY (`idEquipo2`) REFERENCES `equipos` (`idEquipo`);

--
-- Constraints for table `partijugadores`
--
ALTER TABLE `partijugadores`
  ADD CONSTRAINT `partijugadores_ibfk_1` FOREIGN KEY (`idPartido`) REFERENCES `partidos` (`idPartido`),
  ADD CONSTRAINT `partijugadores_ibfk_2` FOREIGN KEY (`idEquipo`) REFERENCES `equipos` (`idEquipo`),
  ADD CONSTRAINT `partijugadores_ibfk_3` FOREIGN KEY (`idJugador`) REFERENCES `jugadores` (`idJugador`),
  ADD CONSTRAINT `partijugadores_ibfk_4` FOREIGN KEY (`idPosicionJugador`) REFERENCES `posicionesjugadores` (`idPosicionJugador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
