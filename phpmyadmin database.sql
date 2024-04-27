-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2021 a las 18:34:25
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nuevadb`
--
CREATE DATABASE IF NOT EXISTS `nuevadb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nuevadb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `ID-ADMIN` int(11) NOT NULL,
  `USUARIO` varchar(50) NOT NULL,
  `CONTRASENA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`ID-ADMIN`, `USUARIO`, `CONTRASENA`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `DNI` int(9) NOT NULL,
  `NOMBRE` text NOT NULL,
  `TELEFONO` varchar(7) NOT NULL,
  `CELULAR` varchar(20) NOT NULL,
  `MAIL` varchar(70) NOT NULL,
  `DIRECCION` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`DNI`, `NOMBRE`, `TELEFONO`, `CELULAR`, `MAIL`, `DIRECCION`) VALUES
(28512988, 'Carla Fernandez', '0', '3455217895', 'carlafernandez988@outlook.com', 'Buenos Aires 824'),
(38209925, 'Diego Gonzales', '4270522', '0', 'gonzalesdiegoo125@gmail.com', 'Urdinarrain 522'),
(44492581, 'German Recalde', '0', '3454555222', '', 'Sarmiento 272'),
(44701073, 'Agustín Bravo', '4274452', '3454023354', 'agus09032003@gmail.com', 'Moulins 1416');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computadoras`
--

CREATE TABLE `computadoras` (
  `NUMPC` int(11) NOT NULL,
  `MARCA` varchar(100) NOT NULL,
  `PROCESADOR` varchar(100) NOT NULL,
  `MEMORIA` varchar(100) NOT NULL,
  `DISCO` varchar(100) NOT NULL,
  `MOTHERBOARD` varchar(100) NOT NULL,
  `FUENTE` varchar(100) NOT NULL,
  `OBSERVACIONES` text NOT NULL,
  `DNI` int(9) NOT NULL,
  `GRAFICA` varchar(100) NOT NULL,
  `FECHA` text NOT NULL,
  `ESTADO` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `computadoras`
--

INSERT INTO `computadoras` (`NUMPC`, `MARCA`, `PROCESADOR`, `MEMORIA`, `DISCO`, `MOTHERBOARD`, `FUENTE`, `OBSERVACIONES`, `DNI`, `GRAFICA`, `FECHA`, `ESTADO`) VALUES
(1, 'AMD', 'Ryzen 5 5600X', '32GB Crucial Ballistix DDR4 3600MHz', 'SSD CRUCIAL 1TB NVMe PCIe M.2 2400MB/s', 'MSI MPG X570 Gaming Plus', 'EVGA SuperNova 750 G5', 'Sin Sistema Operativo', 44701073, 'MSI RTX 3070 8GB', '2021-10-20', 'Retirada'),
(2, 'INTEL', 'Intel Core I5-11400', '16GB Crucial Ballistix DDR4 3200MHz', 'SSD Crucial 500GB NVMe PCIe M.2', 'ASUS Prime B560M-A', 'Apevia ATX-PR600W Prestige 600W 80+ Gold', 'No hace nada al apretar el botón de encendido', 44492581, 'Zotac GTX 1660 6GB', '2021-10-22', 'Lista para Retirar'),
(3, 'AMD', 'Ryzen 5 2400G', '16GB Oloy Owl Black DDR4 3000MHz (2x8)', 'HDD 1TB Seagate Barracuda + SSD 240GB PNY', 'ASUS Prime A320M-K', 'Redragon RGPS-500W', 'Fuente Quemada', 44701073, 'Vega 11 / Integrada', '2021-10-23', 'Sin Revisar'),
(4, 'AMD', 'Ryzen 5 5600X', '16GB Crucial Ballistix DDR4 3600MHz (2x8)', 'SSD Crucial 600GB NVMe PCIe M.2', 'GIGABYTE B550 Gaming X', 'EVGA SuperNova 650 G5 80+ Gold', 'Motherboard quemada', 38209925, 'PowerColor AMD Radeon RX 6700XT', '2021-10-27', 'Diagnosticada'),
(5, 'INTEL', 'Intel Core I9 10900K', '32GB TridentZ DDR4 3200MHz RGB (4x8)', 'SSD Sabrent Rocket Q 4TB NVMe PCIe M.2', 'ASUS ROG Maximus XII Extreme', 'EVGA SuperNova 1000 G5', 'Mantenimiento Mensual', 28512988, 'RTX 3080Ti 12GB', '2021-11-04', 'Lista para Retirar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnosticos`
--

CREATE TABLE `diagnosticos` (
  `DIAGID` int(11) NOT NULL,
  `INFORME` varchar(255) NOT NULL,
  `NUMPC` int(11) NOT NULL,
  `CREACION` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `diagnosticos`
--

INSERT INTO `diagnosticos` (`DIAGID`, `INFORME`, `NUMPC`, `CREACION`) VALUES
(1, 'https://drive.google.com/file/d/1-YIMykXm4C__MYx47rIDN5qZKu4xXtP1/view?usp=sharing', 1, '2021-10-22'),
(2, 'https://drive.google.com/file/d/1C81c10vmNc7TacSekI5UCWPGO3mONynT/view?usp=sharing', 2, '2021-10-24'),
(3, 'https://drive.google.com/file/d/1ouEkXvhsDfQslqgJAAD6PoFKvPIxg4RY/view?usp=sharing', 3, '2021-10-26'),
(4, 'https://drive.google.com/file/d/1me97v3HO1QefBYDKOAVS2_P9wjbc_BHV/view?usp=sharing', 4, '2021-10-31'),
(5, 'https://drive.google.com/file/d/1ydWOQCzDw9ejQr7A67pGR8rbDcUGLsms/view?usp=sharing', 5, '2021-11-12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID-ADMIN`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `computadoras`
--
ALTER TABLE `computadoras`
  ADD PRIMARY KEY (`NUMPC`),
  ADD KEY `DNI` (`DNI`),
  ADD KEY `ESTADO` (`ESTADO`);

--
-- Indices de la tabla `diagnosticos`
--
ALTER TABLE `diagnosticos`
  ADD PRIMARY KEY (`DIAGID`),
  ADD KEY `ID-PC` (`NUMPC`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `ID-ADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `computadoras`
--
ALTER TABLE `computadoras`
  MODIFY `NUMPC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `diagnosticos`
--
ALTER TABLE `diagnosticos`
  MODIFY `DIAGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `computadoras`
--
ALTER TABLE `computadoras`
  ADD CONSTRAINT `computadoras_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `clientes` (`DNI`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `diagnosticos`
--
ALTER TABLE `diagnosticos`
  ADD CONSTRAINT `diagnosticos_ibfk_1` FOREIGN KEY (`NUMPC`) REFERENCES `computadoras` (`NUMPC`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
