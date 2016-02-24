-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2016 a las 20:47:58
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dwes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `password` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `conexion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `password`, `conexion`) VALUES
('nombre1', 'a58d88b80d1a222b7dd13f6029b7faf7', 0),
('nombre10', 'eae22d57e2d532d89ea09c21b2cca3a9', 0),
('nombre2', 'fd87bf1913f2fa29320bb8433938611b', 0),
('nombre3', '50131b34ed963ec04194a6b286170a96', 0),
('nombre4', 'd5e127ebc0ddcb1e56d98de6ac2864fb', 0),
('nombre5', '9500702dd0b8528d15051be6d3d750ba', 0),
('nombre6', 'a55015dbcc4d9af33b5a72a32bdec3a2', 0),
('nombre7', 'c35ee7836c36528a4ad6ded34d6796c5', 0),
('nombre8', 'c79021069e1ddbc612f781c102b44563', 0),
('nombre9', '274267f0603b8a4ea6abc7a1b1ecc399', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
