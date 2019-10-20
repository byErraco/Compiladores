-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2019 a las 01:29:32
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `compiler`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `characters`
--

CREATE TABLE `characters` (
  `id` int(10) NOT NULL,
  `ascii_id` int(10) NOT NULL,
  `symbols` varchar(1) CHARACTER SET utf8 NOT NULL,
  `type` enum('letter','number','operator','separator','especial','error') NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `characters`
--

INSERT INTO `characters` (`id`, `ascii_id`, `symbols`, `type`, `desc`) VALUES
(1, 1, '☺', 'error', ''),
(2, 2, '☻', 'error', ''),
(3, 3, '♥', 'error', ''),
(4, 4, '♦', 'error', ''),
(5, 5, '♣', 'error', ''),
(6, 6, '♠', 'error', ''),
(7, 7, '•', 'error', ''),
(8, 8, '◘', 'error', ''),
(9, 9, '○', 'error', ''),
(10, 10, '◙', 'error', ''),
(11, 11, '♂', 'error', ''),
(12, 12, '♀', 'error', ''),
(13, 13, '♪', 'error', ''),
(14, 14, '♫', 'error', ''),
(15, 15, '☼', 'error', ''),
(16, 16, '►', 'error', ''),
(17, 17, '◄', 'error', ''),
(18, 18, '↕', 'error', ''),
(19, 19, '‼', 'error', ''),
(20, 20, '¶', 'error', ''),
(21, 21, '§', 'error', ''),
(22, 22, '▬', 'error', ''),
(23, 23, '↨', 'error', ''),
(24, 24, '↑', 'error', ''),
(25, 25, '↓', 'error', ''),
(26, 26, '→', 'error', ''),
(27, 27, '←', 'error', ''),
(28, 28, '∟', 'error', ''),
(29, 29, '↔', 'error', ''),
(30, 30, '▲', 'error', ''),
(31, 31, '▼', 'error', ''),
(32, 32, ' ', 'separator', 'Espacio'),
(33, 33, '!', 'especial', ''),
(34, 34, '"', 'especial', ''),
(35, 35, '#', 'especial', ''),
(36, 36, '$', 'especial', ''),
(37, 37, '%', 'operator', ''),
(38, 38, '&', 'especial', ''),
(39, 39, '''', 'especial', ''),
(40, 40, '(', 'separator', ''),
(41, 41, ')', 'separator', ''),
(42, 42, '*', 'operator', ''),
(43, 43, '+', 'operator', ''),
(44, 44, ',', 'separator', 'coma'),
(45, 45, '-', 'operator', ''),
(46, 46, '.', 'separator', 'punto'),
(47, 47, '/', 'operator', ''),
(48, 48, '0', 'number', ''),
(49, 49, '1', 'number', ''),
(50, 50, '2', 'number', ''),
(51, 51, '3', 'number', ''),
(52, 52, '4', 'number', ''),
(53, 53, '5', 'number', ''),
(54, 54, '6', 'number', ''),
(55, 55, '7', 'number', ''),
(56, 56, '8', 'number', ''),
(57, 57, '9', 'number', ''),
(58, 58, ':', 'separator', 'dos puntos'),
(59, 59, ';', 'separator', 'punto y coma'),
(60, 60, '<', 'operator', ''),
(61, 61, '=', 'operator', ''),
(62, 62, '>', 'operator', ''),
(63, 63, '?', 'especial', ''),
(64, 64, '@', 'especial', ''),
(65, 65, 'A', 'letter', ''),
(66, 66, 'B', 'letter', ''),
(67, 67, 'C', 'letter', ''),
(68, 68, 'D', 'letter', ''),
(69, 69, 'E', 'letter', ''),
(70, 70, 'F', 'letter', ''),
(71, 71, 'G', 'letter', ''),
(72, 72, 'H', 'letter', ''),
(73, 73, 'I', 'letter', ''),
(74, 74, 'J', 'letter', ''),
(75, 75, 'K', 'letter', ''),
(76, 76, 'L', 'letter', ''),
(77, 77, 'M', 'letter', ''),
(78, 78, 'N', 'letter', ''),
(79, 79, 'O', 'letter', ''),
(80, 80, 'P', 'letter', ''),
(81, 81, 'Q', 'letter', ''),
(82, 82, 'R', 'letter', ''),
(83, 83, 'S', 'letter', ''),
(84, 84, 'T', 'letter', ''),
(85, 85, 'U', 'letter', ''),
(86, 86, 'V', 'letter', ''),
(87, 87, 'W', 'letter', ''),
(88, 88, 'X', 'letter', ''),
(89, 89, 'Y', 'letter', ''),
(90, 90, 'Z', 'letter', ''),
(91, 91, '[', 'separator', ''),
(92, 92, '\\', 'especial', 'barra invertida'),
(93, 93, ']', 'separator', ''),
(94, 94, '^', 'error', ''),
(95, 95, '_', 'especial', ''),
(96, 96, '`', 'especial', ''),
(97, 97, 'a', 'letter', ''),
(98, 98, 'b', 'letter', ''),
(99, 99, 'c', 'letter', ''),
(100, 100, 'd', 'letter', ''),
(101, 101, 'e', 'letter', ''),
(102, 102, 'f', 'letter', ''),
(103, 103, 'g', 'letter', ''),
(104, 104, 'h', 'letter', ''),
(105, 105, 'i', 'letter', ''),
(106, 106, 'j', 'letter', ''),
(107, 107, 'k', 'letter', ''),
(108, 108, 'l', 'letter', ''),
(109, 109, 'm', 'letter', ''),
(110, 110, 'n', 'letter', ''),
(111, 111, 'o', 'letter', ''),
(112, 112, 'p', 'letter', ''),
(113, 113, 'q', 'letter', ''),
(114, 114, 'r', 'letter', ''),
(115, 115, 's', 'letter', ''),
(116, 116, 't', 'letter', ''),
(117, 117, 'u', 'letter', ''),
(118, 118, 'v', 'letter', ''),
(119, 119, 'w', 'letter', ''),
(120, 120, 'x', 'letter', ''),
(121, 121, 'y', 'letter', ''),
(122, 122, 'z', 'letter', ''),
(123, 123, '{', 'separator', ''),
(124, 124, '|', 'especial', ''),
(125, 125, '}', 'separator', ''),
(126, 126, '~', 'error', ''),
(127, 127, '⌂', 'error', ''),
(128, 128, 'Ç', 'letter', ''),
(129, 129, 'ü', 'letter', ''),
(130, 130, 'é', 'letter', ''),
(131, 131, 'â', 'letter', ''),
(132, 132, 'ä', 'letter', ''),
(133, 133, 'à', 'letter', ''),
(134, 134, 'å', 'letter', ''),
(135, 135, 'ç', 'letter', ''),
(136, 136, 'ê', 'letter', ''),
(137, 137, 'ë', 'letter', ''),
(138, 138, 'è', 'letter', ''),
(139, 139, 'ï', 'letter', ''),
(140, 140, 'î', 'letter', ''),
(141, 141, 'ì', 'letter', ''),
(142, 142, 'Ä', 'letter', ''),
(143, 143, 'Å', 'letter', ''),
(144, 144, 'É', 'letter', ''),
(145, 145, 'æ', 'error', ''),
(146, 146, 'Æ', 'error', ''),
(147, 147, 'ô', 'letter', ''),
(148, 148, 'ö', 'letter', ''),
(149, 149, 'ò', 'letter', ''),
(150, 150, 'û', 'letter', ''),
(151, 151, 'ù', 'letter', ''),
(152, 152, 'ÿ', 'letter', ''),
(153, 153, 'Ö', 'letter', ''),
(154, 154, 'Ü', 'letter', ''),
(155, 155, 'ø', 'error', ''),
(156, 156, '£', 'especial', ''),
(157, 157, 'Ø', 'error', ''),
(158, 158, '×', 'error', ''),
(159, 159, 'ƒ', 'especial', ''),
(160, 160, 'á', 'letter', ''),
(161, 161, 'í', 'letter', ''),
(162, 162, 'ó', 'letter', ''),
(163, 163, 'ú', 'letter', ''),
(164, 164, 'ñ', 'letter', ''),
(165, 165, 'Ñ', 'letter', ''),
(166, 166, 'ª', 'especial', ''),
(167, 167, 'º', 'especial', ''),
(168, 168, '¿', 'especial', ''),
(169, 169, '®', 'error', ''),
(170, 170, '¬', 'error', ''),
(171, 171, '½', 'error', ''),
(172, 172, '¼', 'error', ''),
(173, 173, '¡', 'especial', ''),
(174, 174, '«', 'especial', ''),
(175, 175, '»', 'especial', ''),
(176, 176, '░', 'error', ''),
(177, 177, '▒', 'error', ''),
(178, 178, '▓', 'error', ''),
(179, 179, '│', 'error', ''),
(180, 180, '┤', 'error', ''),
(181, 181, 'Á', 'letter', ''),
(182, 182, 'Â', 'letter', ''),
(183, 183, 'À', 'letter', ''),
(184, 184, '©', 'error', ''),
(185, 185, '╣', 'error', ''),
(186, 186, '║', 'error', ''),
(187, 187, '╗', 'error', ''),
(188, 188, '╝', 'error', ''),
(189, 189, '¢', 'especial', ''),
(190, 190, '¥', 'especial', ''),
(191, 191, '┐', 'error', ''),
(192, 192, '└', 'error', ''),
(193, 193, '┴', 'error', ''),
(194, 194, '┬', 'error', ''),
(195, 195, '├', 'error', ''),
(196, 196, '─', 'error', ''),
(197, 197, '┼', 'error', ''),
(198, 198, 'ã', 'letter', ''),
(199, 199, 'Ã', 'letter', ''),
(200, 200, '╚', 'error', ''),
(201, 201, '╔', 'error', ''),
(202, 202, '╩', 'error', ''),
(203, 203, '╦', 'error', ''),
(204, 204, '╠', 'error', ''),
(205, 205, '═', 'error', ''),
(206, 206, '╬', 'error', ''),
(207, 207, '¤', 'error', ''),
(208, 208, 'ð', 'error', ''),
(209, 209, 'Ð', 'error', ''),
(210, 210, 'Ê', 'letter', ''),
(211, 211, 'Ë', 'letter', ''),
(212, 212, 'È', 'letter', ''),
(213, 213, 'ı', 'letter', ''),
(214, 214, 'Í', 'letter', ''),
(215, 215, 'Î', 'letter', ''),
(216, 216, 'Ï', 'letter', ''),
(217, 217, '┘', 'error', ''),
(218, 218, '┌', 'error', ''),
(219, 219, '█', 'error', ''),
(220, 220, '▄', 'error', ''),
(221, 221, '¦', 'error', ''),
(222, 222, 'Ì', 'letter', ''),
(223, 223, '▀', 'error', ''),
(224, 224, 'Ó', 'letter', ''),
(225, 225, 'ß', 'error', ''),
(226, 226, 'Ô', 'letter', ''),
(227, 227, 'Ò', 'letter', ''),
(228, 228, 'õ', 'letter', ''),
(229, 229, 'Õ', 'letter', ''),
(230, 230, 'µ', 'error', ''),
(231, 231, 'þ', 'error', ''),
(232, 232, 'Þ', 'error', ''),
(233, 233, 'Ú', 'letter', ''),
(234, 234, 'Û', 'letter', ''),
(235, 235, 'Ù', 'letter', ''),
(236, 236, 'ý', 'letter', ''),
(237, 237, 'Ý', 'letter', ''),
(238, 238, '¯', 'error', ''),
(239, 239, '´', 'especial', ''),
(240, 240, '≡', 'error', ''),
(241, 241, '±', 'especial', ''),
(242, 242, '‗', 'error', ''),
(243, 243, '¾', 'error', ''),
(244, 244, '¶', 'error', ''),
(245, 245, '§', 'error', ''),
(246, 246, '÷', 'error', ''),
(247, 247, '¸', 'error', ''),
(248, 248, '°', 'especial', ''),
(249, 249, '¨', 'error', ''),
(250, 250, '·', 'error', ''),
(251, 251, '¹', 'especial', ''),
(252, 252, '³', 'especial', ''),
(253, 253, '²', 'especial', ''),
(254, 254, '■', 'error', ''),
(255, 255, ' ', 'separator', 'nbsp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `words`
--

CREATE TABLE `words` (
  `id` int(10) NOT NULL,
  `word` text NOT NULL,
  `type` enum('simple','compuesta') NOT NULL,
  `operator` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `words`
--

INSERT INTO `words` (`id`, `word`, `type`, `operator`) VALUES
(1, 'programa', 'simple', '0'),
(2, 'inicio', 'simple', '0'),
(3, 'fin', 'simple', '0'),
(4, 'var', 'simple', '0'),
(5, 'float', 'simple', '0'),
(6, 'boolean', 'simple', '0'),
(7, 'integer', 'simple', '0'),
(8, 'double', 'simple', '0'),
(9, 'if', 'simple', '0'),
(10, 'endif', 'compuesta', '0'),
(11, 'do', 'simple', '0'),
(12, 'enddo', 'compuesta', '0'),
(13, 'while', 'simple', '0'),
(14, 'endwhile', 'compuesta', '0'),
(15, 'switch', 'simple', '0'),
(16, 'endswitch', 'compuesta', '0'),
(17, 'else', 'simple', '0'),
(18, 'elseif', 'simple', '0'),
(19, 'for', 'simple', '0'),
(20, 'endfor', 'compuesta', '0'),
(21, 'as', 'simple', '0'),
(22, 'string', 'simple', '0'),
(23, 'and', 'simple', '0'),
(24, '&&', 'compuesta', '1'),
(25, 'or', 'simple', '0'),
(26, '||', 'compuesta', '0'),
(27, 'case', 'simple', '0'),
(28, 'true', 'simple', '0'),
(29, 'false', 'simple', '0'),
(30, 'then', 'simple', '0'),
(32, ':=', 'compuesta', '1'),
(33, '/*', 'compuesta', '1'),
(34, '*/', 'compuesta', '1'),
(35, '<=', 'compuesta', '1'),
(36, '>=', 'compuesta', '1'),
(37, '+=', 'compuesta', '1'),
(38, '==', 'compuesta', '1'),
(39, 'enmat', 'compuesta', '0'),
(40, 'intmat', 'compuesta', '0'),
(41, '++', 'compuesta', '1'),
(42, '--', 'compuesta', '1'),
(43, '!=', 'compuesta', '1'),
(44, ';', 'simple', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;
--
-- AUTO_INCREMENT de la tabla `words`
--
ALTER TABLE `words`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
