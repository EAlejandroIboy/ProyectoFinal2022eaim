-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2022 a las 06:08:55
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pcc2022_evalfinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `nomensaje` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `telefono` int(8) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `mensaje` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`nomensaje`, `nombre`, `telefono`, `correo`, `mensaje`) VALUES
(2, 'Alejandro', 95863256, 'alej.pro@gmail.com', 'Prueba 2, para verificar la conexión y funcionamiento del autonumerico.'),
(3, 'Elder Alejandro', 36790066, 'liceocanadiense@s', 'Me gustaría comprobar el estado y funcionamiento de mi pagina'),
(4, 'Santos', 894561, 'iboy@gmail.com', 'Me gustaria comprobar el estado y funcionamiento de mi pagina'),
(5, 'Carolina', 59846285, 'carol@gmail.com', 'Prueba para ver como se ve el pie de pagina sobre la tabla'),
(6, 'Anduan', 96857432, 'anduan@gmail.com|', 'Prueba para el tamaño ajustable de la tabla'),
(7, 'Fabian', 12546985, 'fabi@hotmail.com', 'Tamaño ajustable'),
(8, 'Rache', 96745231, 'rachel@gmail.com', 'tamaño ajustable, prueba de funcionamiento'),
(9, 'Chanel', 25165489, 'chani@gmail.com', 'Probar que siga funcionando a pesar de los cambios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(22) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `contraseña` varchar(45) NOT NULL,
  `id_perfil` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `usuario`, `contraseña`, `id_perfil`) VALUES
(1, 'Elder Alejandro', 'Iboy Montenegro', 'Programador', '', 0),
(2, 'Tester', 'Master', 'LCP', '', 0),
(3, 'Elder Alejandro', 'Martinez', 'LCP', '123', 0),
(4, 'Maria', 'Bolaños', 'MariBolaños', 'merli', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`nomensaje`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `nomensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
