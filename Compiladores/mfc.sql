-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2019 a las 19:44:34
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mfc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `keyw`
--

CREATE TABLE `keyw` (
  `Id` int(11) NOT NULL,
  `Palabra` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Tipo` enum('Simple','Compuesta') CHARACTER SET latin1 NOT NULL,
  `operador` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `keyw`
--

INSERT INTO `keyw` (`Id`, `Palabra`, `Tipo`, `operador`) VALUES
(1, 'Inicio', 'Simple', 'no'),
(2, 'Fin', 'Simple', 'no'),
(3, 'Programa', 'Simple', 'no'),
(4, 'Var', 'Simple', 'no'),
(5, 'Integer', 'Simple', 'no'),
(6, 'Float', 'Simple', 'no'),
(7, 'Double', 'Simple', 'no'),
(8, 'Boolean', 'Simple', 'no'),
(9, 'if', 'Simple', 'no'),
(10, 'for', 'Simple', 'no'),
(11, 'while', 'Simple', 'no'),
(12, 'endif', 'Compuesta', 'no'),
(13, 'elseif', 'Compuesta', 'no'),
(14, 'else', 'Simple', 'no'),
(15, 'endfor', 'Compuesta', 'no'),
(16, 'endwhile', 'Compuesta', 'no'),
(17, 'then', 'Simple', 'no'),
(18, 'and', 'Simple', 'no'),
(19, '&&', 'Compuesta', 'no'),
(20, 'or', 'Simple', 'no'),
(21, '||', 'Compuesta', 'no'),
(22, '<=', 'Compuesta', 'yes'),
(23, '>=', 'Compuesta', 'yes'),
(24, '+=', 'Compuesta', 'yes'),
(25, '==', 'Compuesta', 'yes'),
(26, 'as', 'Simple', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tascii`
--

CREATE TABLE `tascii` (
  `Id` int(11) NOT NULL,
  `Caracter` varchar(10) NOT NULL,
  `Tipo` enum('N','L','O','S','E','R') CHARACTER SET latin1 NOT NULL,
  `Descrip` varchar(40) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tascii`
--

INSERT INTO `tascii` (`Id`, `Caracter`, `Tipo`, `Descrip`) VALUES
(1, '☺', 'R', 'SOH'),
(2, '☻', 'R', 'STX'),
(3, '♥', 'R', 'ETX'),
(4, '♦', 'R', 'EOT'),
(5, '♣', 'R', 'ENQ'),
(6, '♠', 'R', 'ACK'),
(7, '•', 'R', 'BEL'),
(8, '◘', 'R', 'BS'),
(9, '○', 'R', 'HT'),
(10, '◙', 'R', 'LF'),
(11, '♂', 'R', 'VT'),
(12, '♀', 'R', 'FF'),
(13, '♪', 'R', 'CR'),
(14, '♫', 'R', 'SO'),
(15, '☼', 'R', 'SI'),
(16, '►', 'R', 'DLE'),
(17, '◄', 'R', 'DC1'),
(18, '↕', 'R', 'DC2'),
(19, '‼', 'R', 'DC3'),
(20, '¶', 'R', 'DC4'),
(21, '§', 'R', 'NAK'),
(22, '▬', 'R', 'SYN'),
(23, '↨', 'R', 'ETB'),
(24, '↑', 'R', 'CAN'),
(25, '↓', 'R', 'EM'),
(26, '→', 'R', 'SUB'),
(27, '←', 'R', 'ESC'),
(28, '∟', 'R', 'FS'),
(29, '↔', 'R', 'GS'),
(30, '▲', 'R', 'RS'),
(31, '▼', 'R', 'US'),
(32, ' ', 'S', 'Espacio'),
(33, '!', 'E', 'Signo de admiración'),
(34, '\"', 'E', 'Comillas dobles'),
(35, '#', 'E', 'numeral'),
(36, '$', 'E', 'Dolar'),
(37, '%', 'O', 'Porcentaje'),
(38, '&', 'E', 'ampersand'),
(39, '\'', 'E', 'comillas simples'),
(40, '(', 'S', 'abre paréntesis '),
(41, ')', 'S', 'cierra paréntesis'),
(42, '*', 'O', 'asterisco'),
(43, '+', 'O', 'Signo mas'),
(44, ',', 'S', 'Coma'),
(45, '-', 'O', 'Signo menos'),
(46, '.', 'S', 'Punto'),
(47, '/', 'O', 'Slash'),
(48, '0', 'N', 'Numero 0'),
(49, '1', 'N', 'Numero 1'),
(50, '2', 'N', 'Numero 2'),
(51, '3', 'N', 'Numero 3'),
(52, '4', 'N', 'Numero 4'),
(53, '5', 'N', 'Numero 5'),
(54, '6', 'N', 'Numero 6'),
(55, '7', 'N', 'Numero 7'),
(56, '8', 'N', 'Numero 8'),
(57, '9', 'N', 'Numero 9'),
(58, ':', 'S', 'Dos puntos'),
(59, ';', 'S', 'punto y coma'),
(60, '<', 'O', 'menor que '),
(61, '=', 'O', 'igual'),
(62, '>', 'O', 'mayor que'),
(63, '?', 'E', 'cierra interrogación'),
(64, '@', 'E', 'arroba '),
(65, 'A', 'L', 'letra A'),
(66, 'B', 'L', 'Letra B'),
(67, 'C', 'L', 'Letra C'),
(68, 'D', 'L', 'Letra D'),
(69, 'E', 'L', 'Letra E'),
(70, 'F', 'L', 'Letra F'),
(71, 'G', 'L', 'Letra G'),
(72, 'H', 'L', 'Letra H'),
(73, 'I', 'L', 'Letra I'),
(74, 'J', 'L', 'Letra J'),
(75, 'K', 'L', 'Letra K'),
(76, 'L', 'L', 'Letra L'),
(77, 'M', 'L', 'Letra M'),
(78, 'N', 'L', 'Letra N'),
(79, 'O', 'L', 'Letra O'),
(80, 'P', 'L', 'letra P'),
(81, 'Q', 'L', 'Letra Q'),
(82, 'R', 'L', 'Letra R'),
(83, 'S', 'L', 'Letra S'),
(84, 'T', 'L', 'Letra T'),
(85, 'U', 'L', 'Letra U'),
(86, 'V', 'L', 'Letra V'),
(87, 'W', 'L', 'Letra W'),
(88, 'X', 'L', 'Letra X'),
(89, 'Y', 'L', 'Letra Y'),
(90, 'Z', 'L', 'letra Z'),
(91, '[', 'S', 'abre corchetes'),
(92, '\\', 'E', 'barra invertida'),
(93, ']', 'S', 'cierra corchetes'),
(94, '^', 'O', 'acento circunflejo'),
(95, '_', 'E', 'guión bajo'),
(96, '`', 'E', 'acento grave'),
(97, 'a', 'L', 'Letra a'),
(98, 'b', 'L', 'Letra b'),
(99, 'c', 'L', 'Letra c'),
(100, 'd', 'L', 'Letra d'),
(101, 'e', 'L', 'Letra e'),
(102, 'f', 'L', 'Letra f'),
(103, 'g', 'L', 'Letra g'),
(104, 'h', 'L', 'Letra h'),
(105, 'i', 'L', 'Letra i'),
(106, 'j', 'L', 'letra j'),
(107, 'k', 'L', 'letra k'),
(108, 'l', 'L', 'Letra l'),
(109, 'm', 'L', 'Letra m'),
(110, 'n', 'L', 'Letra n'),
(111, 'o', 'L', 'Letra o'),
(112, 'p', 'L', 'Letra p'),
(113, 'q', 'L', 'Letra q'),
(114, 'r', 'L', 'Letra r'),
(115, 's', 'L', 'Letra s'),
(116, 't', 'L', 'Letra t'),
(117, 'u', 'L', 'Letra u'),
(118, 'v', 'L', 'Letra v'),
(119, 'w', 'L', 'Letra w'),
(120, 'x', 'L', 'letra x'),
(121, 'y', 'L', 'Letra y'),
(122, 'z', 'L', 'Letra z'),
(123, '{', 'S', 'abre llaves'),
(124, '|', 'E', 'barra vertical'),
(125, '}', 'S', 'cierra llaves'),
(126, '~', 'R', 'tilde'),
(127, '⌂', 'R', 'DEL'),
(128, 'Ç', 'R', 'Cedilla mayúscula'),
(129, 'ü', 'R', 'ü'),
(130, 'é', 'R', 'é'),
(131, 'â', 'R', 'â'),
(132, 'ä', 'R', 'ä'),
(133, 'à', 'R', 'à'),
(134, 'å', 'R', 'å'),
(135, 'ç', 'R', 'cedilla minúscula'),
(136, 'ê', 'R', 'ê'),
(137, 'ë', 'R', 'ë'),
(138, 'è', 'R', 'è'),
(139, 'ï', 'R', 'ï'),
(140, 'î', 'R', 'î'),
(141, 'ì', 'R', 'ì'),
(142, 'Ä', 'R', 'Ä'),
(143, 'Å', 'R', 'Å'),
(144, 'É', 'R', 'É'),
(145, 'æ', 'R', 'diptongo latino ae'),
(146, 'Æ', 'R', 'diptongo latino AE'),
(147, 'ô', 'R', 'ô'),
(148, 'ö', 'R', 'ö'),
(149, 'ò', 'R', 'ò'),
(150, 'û', 'R', 'û'),
(151, 'ù', 'R', 'ù'),
(152, 'ÿ', 'R', 'ÿ'),
(153, 'Ö', 'R', 'Ö'),
(154, 'Ü', 'R', 'Ü'),
(155, 'ø', 'R', 'ø'),
(156, '£', 'E', 'libra'),
(157, 'Ø', 'R', 'Ø'),
(158, '×', 'O', 'multiplicacion'),
(159, 'ƒ', 'E', 'funcion'),
(160, 'á', 'R', 'á'),
(161, 'í', 'R', 'í'),
(162, 'ó', 'R', 'ó'),
(163, 'ú', 'R', 'ú'),
(164, 'ñ', 'R', 'ñ'),
(165, 'Ñ', 'R', 'Ñ'),
(166, 'ª', 'E', 'ordinal femenino'),
(167, 'º', 'E', 'ordinal'),
(168, '¿', 'E', 'cierra interrogación'),
(169, '®', 'R', 'marca registrada'),
(170, '¬', 'R', NULL),
(171, '½', 'R', 'un medio'),
(172, '¼', 'R', 'un cuarto'),
(173, '¡', 'E', 'abre exclamación'),
(174, '«', 'E', 'abre comillas bajas'),
(175, '»', 'E', 'cierra comillas bajas'),
(176, '░', 'R', NULL),
(177, '▒', 'R', NULL),
(178, '▓', 'R', NULL),
(179, '│', 'R', NULL),
(180, '┤', 'R', NULL),
(181, 'Á', 'R', 'Á'),
(182, 'Â', 'R', 'Â'),
(183, 'À', 'R', 'À'),
(184, '©', 'R', 'copyright'),
(185, '╣', 'R', NULL),
(186, '║', 'R', NULL),
(187, '╗', 'R', NULL),
(188, '╝', 'R', NULL),
(189, '¢', 'E', ''),
(190, '¥', 'E', 'yen'),
(191, '┐', 'R', NULL),
(192, '└', 'R', NULL),
(193, '┴', 'R', NULL),
(194, '┬', 'R', NULL),
(195, '├', 'R', NULL),
(196, '─', 'R', NULL),
(197, '┼', 'R', NULL),
(198, 'ã', 'R', 'ã'),
(199, 'Ã', 'R', 'Ã'),
(200, '╚', 'R', NULL),
(201, '╔', 'R', NULL),
(202, '╩', 'R', NULL),
(203, '╦', 'R', NULL),
(204, '╠', 'R', NULL),
(205, '═', 'R', NULL),
(206, '╬', 'R', NULL),
(207, '¤', 'R', NULL),
(208, 'ð', 'R', 'ð'),
(209, 'Ð', 'R', 'Ð'),
(210, 'Ê', 'R', 'Ê'),
(211, 'Ë', 'R', NULL),
(212, 'È', 'R', 'È'),
(213, 'ı', 'R', NULL),
(214, 'Í', 'R', 'Í'),
(215, 'Î', 'R', 'Î'),
(216, 'Ï', 'R', 'Ï'),
(217, '┘', 'R', NULL),
(218, '┌', 'R', NULL),
(219, '█', 'R', NULL),
(220, '▄', 'R', NULL),
(221, '¦', 'R', NULL),
(222, 'Ì', 'R', 'Ì'),
(223, '▀', 'R', NULL),
(224, 'Ó', 'R', 'Ó'),
(225, 'ß', 'R', NULL),
(226, 'Ô', 'R', 'Ô'),
(227, 'Ò', 'R', 'Ò'),
(228, 'õ', 'R', 'õ'),
(229, 'Õ', 'R', 'Õ'),
(230, 'µ', 'R', NULL),
(231, 'þ', 'R', NULL),
(232, 'Þ', 'R', NULL),
(233, 'Ú', 'R', 'Ú'),
(234, 'Û', 'R', 'Û'),
(235, 'Ù', 'R', 'Ù'),
(236, 'ý', 'R', 'ý'),
(237, 'Ý', 'R', 'Ý'),
(238, '¯', 'R', NULL),
(239, '´', 'E', 'acento agudo'),
(240, '­≡', 'R', NULL),
(241, '±', 'E', 'mas menos'),
(242, '‗', 'R', NULL),
(243, '¾', 'R', 'tres cuartos'),
(244, '¶', 'R', NULL),
(245, '§', 'R', NULL),
(246, '÷', 'O', 'division'),
(247, '¸', 'R', NULL),
(248, '°', 'E', 'signo de grado'),
(249, '¨', 'R', NULL),
(250, '·', 'R', NULL),
(251, '¹', 'E', 'superindice 1'),
(252, '³', 'E', 'superindice 3'),
(253, '²', 'E', 'superindice 2'),
(254, '■', 'R', NULL),
(255, ' ', 'S', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `keyw`
--
ALTER TABLE `keyw`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tascii`
--
ALTER TABLE `tascii`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `keyw`
--
ALTER TABLE `keyw`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
