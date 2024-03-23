-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2024 a las 07:29:53
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `genotipo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id_Articulo` int(100) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_Articulo`, `imagen`, `titulo`, `descripcion`) VALUES
(1, 'articulos/card1.png', 'Servicios de Transporte Terrestre', 'Ofrecemos transporte de carga terrestre eficiente y seguro, adaptándonos a las necesidades específicas de cada cliente.'),
(2, 'articulos/card2.png', 'Servicios de Almacenaje', 'Nos especializamos en ofrecer soluciones de almacenaje a medida, espacios de almacenamiento seguro y centros de distribución de alta tecnología para satisfacer las necesidades de tu negocio.'),
(3, 'articulos/card3.png', 'Servicios de Logística', 'Transformamos las cadenas de suministro tradicionales en redes logísticas inteligentes que impulsan la eficiencia y la rentabilidad.'),
(4, 'articulos/logo16.png', 'Diana Itzel Cruz Martínez', 'Egresada de Ingeniería en Sistemas Computacionales, con conocimientos\r\nen Desarrollo Web. Con capacidades para analizar y resolver problemas o\r\nnecesidades de los usuarios. '),
(5, 'articulos/logo2.png', 'Objetivo principal', 'Diseñar productos online que resuelvan las principales\r\nnecesidades de los usuarios, aportando una experiencia emocional en cada\r\ninteracción visual a través de interfaces útiles, accesibles y agradables.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_Articulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id_Articulo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
