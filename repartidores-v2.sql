-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2021 a las 09:19:01
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `repartidores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `couriers`
--

CREATE TABLE `couriers` (
  `id_courier` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `couriers`
--

INSERT INTO `couriers` (`id_courier`, `name`, `timestamp`) VALUES
(1, 'FEDEX', '2020-07-02 04:45:42'),
(2, 'DHL', '2021-06-04 04:45:42'),
(3, 'ESTAFETA', '2021-06-16 04:46:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_product`, `name`, `timestamp`) VALUES
(1, 'Televisor', '2021-07-01 04:44:17'),
(2, 'Celular', '2021-06-09 04:44:17'),
(3, 'Radio', '2021-06-10 04:45:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shipment`
--

CREATE TABLE `shipment` (
  `id_shipment` int(11) NOT NULL,
  `id_courier` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `shipment`
--

INSERT INTO `shipment` (`id_shipment`, `id_courier`, `id_product`, `id_status`, `timestamp`) VALUES
(1, 2, 1, 1, '2021-07-08 04:49:52'),
(2, 1, 2, 2, '2021-07-16 04:50:49'),
(3, 3, 3, 2, '2021-07-17 04:52:06'),
(4, 2, 3, 1, '2021-07-23 04:52:06'),
(5, 1, 2, 1, '2021-07-16 07:10:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id_status`, `name`, `timestamp`) VALUES
(1, 'Entregado a mensajeria', '2021-07-02 04:42:55'),
(2, 'Entregado al cliente', '2021-07-03 04:42:55');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`id_courier`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indices de la tabla `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id_shipment`),
  ADD KEY `id_courier` (`id_courier`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_status` (`id_status`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id_shipment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `shipment`
--
ALTER TABLE `shipment`
  ADD CONSTRAINT `shipment_ibfk_1` FOREIGN KEY (`id_courier`) REFERENCES `couriers` (`id_courier`),
  ADD CONSTRAINT `shipment_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`),
  ADD CONSTRAINT `shipment_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
