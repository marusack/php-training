-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2014 a las 22:53:46
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `users_tasks`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `taskid` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `estimated_time` int(11) NOT NULL,
  `status` bit(1) NOT NULL,
  PRIMARY KEY (`taskid`),
  KEY `Ref11` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `tasks`
--

INSERT INTO `tasks` (`taskid`, `user_id`, `name`, `estimated_time`, `status`) VALUES
(1, 1, 'do the resume', 4, '1'),
(2, 1, 'play soccer', 2, '1'),
(3, 1, 'play the bajo', 5, '1'),
(4, 1, 'coding the matrix', 200, '1'),
(5, 4, 'tomar cafe', 1, '1'),
(6, 4, 'boludeo', 2, '1'),
(7, 1, 'hacer algo', 3, '1'),
(8, 4, 'hacer una cancion', 34, '1'),
(10, 8, 'enseÃ±ar php', 40, '1'),
(11, 8, 'enseÃ±ar java', 30, '1'),
(12, 8, 'enseÃ±ar jquery', 1, '1'),
(13, 8, 'enseÃ±ar .net', 1, '1'),
(14, 8, 'hola', 1, '1'),
(15, 1, 'jugar lol', 1, '1'),
(16, 5, 'Do the homework', 1, '1'),
(17, 12, 'prueba 1', 1, '1'),
(18, 12, 'prueba 1', 1, '1'),
(19, 12, 'hola', 1, '1'),
(20, 14, 'newtask', 1, '1'),
(21, 15, 'newtasking', 1, '1'),
(22, 15, 'nuevoooo', 1, '1'),
(23, 16, 'PHP', 1, '1'),
(24, 16, 'Java', 1, '1'),
(25, 16, '.Net', 1, '1'),
(29, 17, 'que se yo', 1, '1'),
(30, 17, 'dasdsa', 1, '1'),
(34, 17, 'hola', 1, '1'),
(36, 19, 'otro', 1, '1'),
(37, 20, 'asd', 1, '1'),
(38, 20, '222', 1, '1'),
(40, 16, 'SQL', 1, '1'),
(41, 21, 'hello', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `name`, `password`, `lastname`) VALUES
(1, 'alex', '', 'googler'),
(2, 'alex', '', 'glober'),
(3, 'alex', '', 'dedek'),
(4, 'luigi', '', 'globero'),
(5, 'usuario', '', 'lastname'),
(6, 'luis', '', 'porti'),
(7, 'Indio', '', 'Solari'),
(8, 'gustavo', '', 'chango'),
(9, 'Lionel', '', 'Messi'),
(10, 'hito', '4d186321c1a7f0f354b297e8914ab240', 'info'),
(11, 'infoinfo', '7815696ecbf1c96e6894b779456d330e', 'info'),
(12, 'add', '202cb962ac59075b964b07152d234b70', 'info'),
(13, 'add', '202cb962ac59075b964b07152d234b70', 'info'),
(14, 'nuevo', '4297f44b13955235245b2497399d7a93', 'info'),
(15, 'newuser', '202cb962ac59075b964b07152d234b70', 'info'),
(16, 'Informatorio', 'cee8d6b7ce52554fd70354e37bbf44a2', 'info'),
(17, 'guri', '202cb962ac59075b964b07152d234b70', 'info'),
(18, 'USER', '6512bd43d9caa6e02c990b0a82652dca', 'info'),
(19, 'holamundo', '4d186321c1a7f0f354b297e8914ab240', 'info'),
(20, 'asd', '7815696ecbf1c96e6894b779456d330e', 'info'),
(21, 'PASS', '2e40ad879e955201df4dedbf8d479a12', 'info');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `Refusers1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
