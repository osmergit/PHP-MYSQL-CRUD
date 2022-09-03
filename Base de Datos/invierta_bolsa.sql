-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-09-2018 a las 08:26:45
-- Versión del servidor: 5.7.23
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `invierta_bolsa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capital`
--

CREATE TABLE `capital` (
  `cod_capital` int(12) NOT NULL,
  `ced_inver` int(12) NOT NULL,
  `cod_oper` int(12) NOT NULL,
  `fecha_inver` date DEFAULT NULL,
  `valor_inver` int(12) DEFAULT NULL,
  `fecha_retiro` date DEFAULT NULL,
  `valor_retiro` int(12) DEFAULT NULL,
  `Valor_actual` int(12) DEFAULT NULL,
  `valor_pl` int(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `capital`
--

INSERT INTO `capital` (`cod_capital`, `ced_inver`, `cod_oper`, `fecha_inver`, `valor_inver`, `fecha_retiro`, `valor_retiro`, `Valor_actual`, `valor_pl`) VALUES
(15, 91488607, 121, NULL, NULL, NULL, NULL, NULL, 200),
(37, 37750671, 777, '2017-10-09', NULL, NULL, NULL, NULL, 300),
(17, 91488607, 121, '2017-03-31', NULL, NULL, NULL, NULL, 91488607),
(18, 91488607, 121, '2017-03-31', NULL, NULL, NULL, NULL, 91488607),
(19, 91488607, 121, '2017-03-31', NULL, NULL, NULL, NULL, 91488607),
(20, 91488607, 121, '2017-04-01', NULL, NULL, NULL, NULL, 91488607),
(21, 91488607, 121, '2017-03-30', NULL, NULL, NULL, NULL, 91488607),
(59, 91236352, 987, '2018-04-06', NULL, NULL, NULL, NULL, 126),
(44, 0, 0, '2018-01-24', NULL, NULL, NULL, NULL, 0),
(24, 91488607, 121, '2017-03-30', NULL, NULL, NULL, NULL, 91488607),
(38, 0, 0, '2017-10-09', NULL, NULL, NULL, NULL, 0),
(26, 91488607, 388, '2017-03-28', NULL, NULL, NULL, NULL, 91488607),
(27, 91488607, 384, '2017-03-31', NULL, NULL, NULL, NULL, 91488607),
(28, 123456789, 390, '2017-10-02', NULL, NULL, NULL, NULL, 123456789),
(29, 123456789, 392, '2017-10-03', NULL, NULL, NULL, NULL, 123456789),
(39, 37750671, 100, '0000-00-00', NULL, NULL, NULL, NULL, 1800),
(31, 456789, 0, '0000-00-00', NULL, NULL, NULL, NULL, 1000),
(32, 456789, 0, '2017-10-04', NULL, NULL, NULL, NULL, 100),
(33, 456789, 123, '2017-10-05', NULL, NULL, NULL, NULL, 2000),
(42, 79677707, 456, '2018-01-08', NULL, NULL, NULL, NULL, 300),
(41, 0, 0, '2017-10-05', NULL, NULL, NULL, NULL, 0),
(40, 0, 0, '2017-10-08', NULL, NULL, NULL, NULL, 0),
(45, 5638291, 123, '2018-02-14', NULL, NULL, NULL, NULL, 200),
(46, 0, 0, '2018-02-14', NULL, NULL, NULL, NULL, 0),
(47, 5638291, 456, '2018-02-14', NULL, NULL, NULL, NULL, 200),
(48, 0, 0, '2018-02-14', NULL, NULL, NULL, NULL, 0),
(49, 1005161201, 456, '2018-02-14', NULL, NULL, NULL, NULL, 500),
(50, 0, 0, '2018-02-14', NULL, NULL, NULL, NULL, 0),
(51, 1005161201, 568, '2018-02-14', NULL, NULL, NULL, NULL, 1000),
(52, 0, 0, '2018-02-14', NULL, NULL, NULL, NULL, 0),
(53, 0, 0, '2018-02-14', NULL, NULL, NULL, NULL, 0),
(54, 1005161201, 123, '2018-03-08', NULL, NULL, NULL, NULL, 300),
(55, 0, 0, '2018-03-08', NULL, NULL, NULL, NULL, 0),
(56, 11201277, 123, '2018-03-30', NULL, NULL, NULL, NULL, 123),
(57, 0, 0, '2018-03-30', NULL, NULL, NULL, NULL, 0),
(58, 91236352, 456, '2018-04-05', NULL, NULL, NULL, NULL, 271),
(60, 0, 0, '2018-04-05', NULL, NULL, NULL, NULL, 0),
(61, 0, 0, '2018-04-06', NULL, NULL, NULL, NULL, 0),
(62, 91236352, 354, '2018-04-06', NULL, NULL, NULL, NULL, 483),
(63, 0, 0, '2018-04-06', NULL, NULL, NULL, NULL, 0),
(64, 0, 0, '2018-04-06', NULL, NULL, NULL, NULL, 0),
(65, 0, 0, '2018-04-05', NULL, NULL, NULL, NULL, 0),
(66, 0, 0, '2018-04-06', NULL, NULL, NULL, NULL, 0),
(67, 0, 0, '2018-04-06', NULL, NULL, NULL, NULL, 0),
(68, 0, 0, '2018-04-05', NULL, NULL, NULL, NULL, 0),
(69, 0, 0, '2018-04-06', NULL, NULL, NULL, NULL, 0),
(70, 0, 0, '2018-04-05', NULL, NULL, NULL, NULL, 0),
(71, 0, 0, '2018-04-06', NULL, NULL, NULL, NULL, 0),
(72, 91236352, 569, '2018-04-09', NULL, NULL, NULL, NULL, 102),
(73, 0, 0, '2018-04-09', NULL, NULL, NULL, NULL, 0),
(74, 91236352, 856, '2018-04-10', NULL, NULL, NULL, NULL, 103),
(75, 0, 0, '2018-04-10', NULL, NULL, NULL, NULL, 0),
(76, 91236352, 357, '2018-04-12', NULL, NULL, NULL, NULL, 123),
(77, 0, 0, '2018-04-12', NULL, NULL, NULL, NULL, 0),
(78, 91236352, 654, '2018-04-13', NULL, NULL, NULL, NULL, 120),
(79, 0, 0, '2018-04-13', NULL, NULL, NULL, NULL, 0),
(80, 91236352, 322, '2018-04-16', NULL, NULL, NULL, NULL, 2025),
(81, 91236352, 954, '2018-04-19', NULL, NULL, NULL, NULL, 63),
(82, 0, 0, '2018-04-19', NULL, NULL, NULL, NULL, 0),
(83, 91236352, 684, '2018-04-20', NULL, NULL, NULL, NULL, 233),
(84, 0, 0, '2018-04-20', NULL, NULL, NULL, NULL, 0),
(85, 91236352, 9874, '2018-04-24', NULL, NULL, NULL, NULL, 249),
(86, 91236352, 6854, '2018-04-24', NULL, NULL, NULL, NULL, 453),
(87, 0, 0, '2018-04-24', NULL, NULL, NULL, NULL, 0),
(88, 0, 0, '2018-04-16', NULL, NULL, NULL, NULL, 0),
(89, 91236352, 9875, '2018-04-26', NULL, NULL, NULL, NULL, 1593),
(90, 91236352, 856, '2018-04-26', NULL, NULL, NULL, NULL, 351),
(91, 91236352, 951, '2018-04-24', NULL, NULL, NULL, NULL, 98),
(92, 0, 0, '2018-04-24', NULL, NULL, NULL, NULL, 0),
(93, 914886076, 859, '2018-04-25', NULL, NULL, NULL, NULL, 400),
(94, 0, 0, '2018-04-25', NULL, NULL, NULL, NULL, 0),
(95, 0, 0, '2018-04-25', NULL, NULL, NULL, NULL, 0),
(96, 0, 0, '2018-04-26', NULL, NULL, NULL, NULL, 0),
(97, 0, 0, '2018-04-26', NULL, NULL, NULL, NULL, 0),
(98, 0, 0, '2018-04-24', NULL, NULL, NULL, NULL, 0),
(99, 0, 0, '2018-04-25', NULL, NULL, NULL, NULL, 0),
(100, 0, 0, '2018-04-09', NULL, NULL, NULL, NULL, 0),
(101, 0, 0, '2018-04-19', NULL, NULL, NULL, NULL, 0),
(102, 0, 0, '2018-04-20', NULL, NULL, NULL, NULL, 0),
(103, 0, 0, '2018-04-24', NULL, NULL, NULL, NULL, 0),
(104, 0, 0, '2018-04-24', NULL, NULL, NULL, NULL, 0),
(105, 0, 0, '2018-04-26', NULL, NULL, NULL, NULL, 0),
(106, 0, 0, '2018-04-26', NULL, NULL, NULL, NULL, 0),
(107, 91236352, 658, '2018-04-25', NULL, NULL, NULL, NULL, 425),
(108, 0, 0, '2018-04-25', NULL, NULL, NULL, NULL, 0),
(109, 91236352, 951, '2018-04-30', NULL, NULL, NULL, NULL, 1285),
(110, 0, 0, '2018-04-30', NULL, NULL, NULL, NULL, 0),
(111, 91236352, 786, '2018-05-01', NULL, NULL, NULL, NULL, 665),
(112, 0, 0, '2018-05-01', NULL, NULL, NULL, NULL, 0),
(113, 91236352, 369, '2018-04-30', NULL, NULL, NULL, NULL, 1260),
(114, 0, 0, '2018-04-30', NULL, NULL, NULL, NULL, 0),
(115, 91236352, 456, '2018-05-01', NULL, NULL, NULL, NULL, 1240),
(116, 0, 0, '2018-05-01', NULL, NULL, NULL, NULL, 0),
(117, 91236352, 789, '2018-05-01', NULL, NULL, NULL, NULL, 35),
(118, 0, 0, '2018-05-01', NULL, NULL, NULL, NULL, 0),
(119, 91236352, 231, '2018-05-02', NULL, NULL, NULL, NULL, 163),
(120, 0, 0, '2018-05-02', NULL, NULL, NULL, NULL, 0),
(121, 91236352, 687, '2018-05-02', NULL, NULL, NULL, NULL, 1510),
(122, 0, 0, '2018-05-02', NULL, NULL, NULL, NULL, 0),
(123, 91236352, 354, '2018-05-02', NULL, NULL, NULL, NULL, 3160),
(124, 0, 0, '2018-05-02', NULL, NULL, NULL, NULL, 0),
(125, 91236352, 987, '2018-05-03', NULL, NULL, NULL, NULL, 230),
(126, 0, 0, '2018-05-03', NULL, NULL, NULL, NULL, 0),
(127, 91236352, 987, '2018-05-07', NULL, NULL, NULL, NULL, 254),
(128, 0, 0, '2018-05-07', NULL, NULL, NULL, NULL, 0),
(129, 91236352, 951, '2018-05-07', NULL, NULL, NULL, NULL, 1250),
(130, 0, 0, '2018-05-07', NULL, NULL, NULL, NULL, 0),
(131, 91236352, 543, '2018-05-08', NULL, NULL, NULL, NULL, 1555),
(132, 0, 0, '2018-05-08', NULL, NULL, NULL, NULL, 0),
(133, 91236352, 854, '2018-05-09', NULL, NULL, NULL, NULL, 2840),
(134, 0, 0, '2018-05-09', NULL, NULL, NULL, NULL, 0),
(135, 91236352, 120, '2018-05-09', NULL, NULL, NULL, NULL, 3080),
(136, 0, 0, '2018-05-09', NULL, NULL, NULL, NULL, 0),
(137, 91236352, 658, '2018-05-09', NULL, NULL, NULL, NULL, 273),
(138, 0, 0, '2018-05-09', NULL, NULL, NULL, NULL, 0),
(139, 91236352, 789, '2018-05-11', NULL, NULL, NULL, NULL, 2200),
(140, 0, 0, '2018-05-11', NULL, NULL, NULL, NULL, 0),
(141, 91236352, 682, '2018-05-16', NULL, NULL, NULL, NULL, 247),
(142, 0, 0, '2018-05-16', NULL, NULL, NULL, NULL, 0),
(143, 91236352, 6985, '2018-05-16', NULL, NULL, NULL, NULL, 351),
(144, 0, 0, '2018-05-16', NULL, NULL, NULL, NULL, 0),
(145, 91236352, 951, '2018-05-16', NULL, NULL, NULL, NULL, 765),
(146, 0, 0, '2018-05-16', NULL, NULL, NULL, NULL, 0),
(147, 91236352, 864, '2018-05-16', NULL, NULL, NULL, NULL, 2270),
(148, 0, 0, '2018-05-16', NULL, NULL, NULL, NULL, 0),
(149, 91236352, 381, '2018-05-18', NULL, NULL, NULL, NULL, 2500),
(150, 0, 0, '2018-05-18', NULL, NULL, NULL, NULL, 0),
(151, 91236352, 4462, '2018-05-21', NULL, NULL, NULL, NULL, 220),
(152, 0, 0, '2018-05-21', NULL, NULL, NULL, NULL, 0),
(153, 91236352, 918, '2018-05-22', NULL, NULL, NULL, NULL, 271),
(154, 0, 0, '2018-05-22', NULL, NULL, NULL, NULL, 0),
(155, 91236352, 357, '2018-05-23', NULL, NULL, NULL, NULL, 150),
(156, 0, 0, '2018-05-23', NULL, NULL, NULL, NULL, 0),
(157, 91236352, 956, '2018-05-24', NULL, NULL, NULL, NULL, 102),
(158, 0, 0, '2018-05-24', NULL, NULL, NULL, NULL, 0),
(159, 91236352, 357, '2018-05-25', NULL, NULL, NULL, NULL, 145),
(160, 0, 0, '2018-05-25', NULL, NULL, NULL, NULL, 0),
(161, 91236352, 759, '2018-05-25', NULL, NULL, NULL, NULL, 2410),
(162, 0, 0, '2018-05-25', NULL, NULL, NULL, NULL, 0),
(163, 91236352, 423, '2018-05-25', NULL, NULL, NULL, NULL, 120),
(164, 1005161201, 789, '2018-05-29', NULL, NULL, NULL, NULL, 1000),
(165, 0, 0, '2018-05-29', NULL, NULL, NULL, NULL, 0),
(166, 1005161201, 753, '2018-05-29', NULL, NULL, NULL, NULL, 3000),
(167, 80371684, 968, '2018-07-11', NULL, NULL, NULL, NULL, 505),
(168, 0, 0, '2018-07-11', NULL, NULL, NULL, NULL, 0),
(169, 80371684, 358, '2018-07-12', NULL, NULL, NULL, NULL, 346),
(170, 0, 0, '2018-07-12', NULL, NULL, NULL, NULL, 0),
(171, 80371684, 65874, '2018-07-13', NULL, NULL, NULL, NULL, 114),
(172, 80371684, 684, '2018-07-13', NULL, NULL, NULL, NULL, 97),
(173, 80371684, 153, '2018-07-13', NULL, NULL, NULL, NULL, 254),
(174, 0, 0, '2018-07-13', NULL, NULL, NULL, NULL, 0),
(175, 0, 0, '2018-07-13', NULL, NULL, NULL, NULL, 0),
(176, 0, 0, '2018-07-13', NULL, NULL, NULL, NULL, 0),
(177, 80371684, 852, '2018-07-16', NULL, NULL, NULL, NULL, 35),
(178, 0, 0, '2018-07-16', NULL, NULL, NULL, NULL, 0),
(179, 80371684, 159, '2018-07-17', NULL, NULL, NULL, NULL, 258),
(180, 0, 0, '2018-07-17', NULL, NULL, NULL, NULL, 0),
(181, 80371684, 583, '2018-07-17', NULL, NULL, NULL, NULL, 133),
(182, 80371684, 9856, '2018-07-17', NULL, NULL, NULL, NULL, 89),
(183, 0, 0, '2018-07-17', NULL, NULL, NULL, NULL, 0),
(184, 80371684, 852, '2018-07-23', NULL, NULL, NULL, NULL, 96),
(185, 80371684, 856, '2018-07-25', NULL, NULL, NULL, NULL, 74),
(186, 80371684, 358, '2018-07-31', NULL, NULL, NULL, NULL, 350),
(187, 0, 0, '2018-07-23', NULL, NULL, NULL, NULL, 0),
(188, 0, 0, '2018-07-25', NULL, NULL, NULL, NULL, 0),
(189, 0, 0, '2018-07-31', NULL, NULL, NULL, NULL, 0),
(190, 80371684, 965489, '2018-08-06', NULL, NULL, NULL, NULL, 400),
(191, 0, 0, '2018-08-06', NULL, NULL, NULL, NULL, 0),
(192, 80371684, 4654, '2018-08-08', NULL, NULL, NULL, NULL, 220),
(193, 0, 0, '2018-08-08', NULL, NULL, NULL, NULL, 0),
(194, 80371684, 798, '2018-08-09', NULL, NULL, NULL, NULL, 150),
(195, 0, 0, '2018-08-09', NULL, NULL, NULL, NULL, 0),
(196, 80371684, 256, '2018-08-13', NULL, NULL, NULL, NULL, 60),
(197, 0, 0, '2018-08-13', NULL, NULL, NULL, NULL, 0),
(198, 80371684, 158, '2018-08-15', NULL, NULL, NULL, NULL, 60),
(199, 0, 0, '2018-08-15', NULL, NULL, NULL, NULL, 0),
(200, 80371684, 589, '2018-08-15', NULL, NULL, NULL, NULL, 115),
(201, 0, 0, '2018-08-15', NULL, NULL, NULL, NULL, 0),
(202, 80371684, 145674, '2018-08-16', NULL, NULL, NULL, NULL, 160),
(203, 0, 0, '2018-08-16', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inversionista`
--

CREATE TABLE `inversionista` (
  `ced_inver` int(12) NOT NULL,
  `nom_inv` varchar(20) NOT NULL,
  `ape_inv` varchar(20) NOT NULL,
  `cel_inv` varchar(20) NOT NULL,
  `email_inv` varchar(30) NOT NULL,
  `clave_inv` varchar(70) NOT NULL,
  `tel_inv` varchar(10) NOT NULL,
  `dir_inv` varchar(60) NOT NULL,
  `barrio_inv` varchar(20) NOT NULL,
  `ciudad_inv` varchar(20) NOT NULL,
  `dep_inv` varchar(20) NOT NULL,
  `pais_inv` varchar(20) NOT NULL,
  `inv_inicial` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inversionista`
--

INSERT INTO `inversionista` (`ced_inver`, `nom_inv`, `ape_inv`, `cel_inv`, `email_inv`, `clave_inv`, `tel_inv`, `dir_inv`, `barrio_inv`, `ciudad_inv`, `dep_inv`, `pais_inv`, `inv_inicial`) VALUES
(91488607, 'Osmer Eduardo', 'Ruiz Mateus', '3173488808', 'osmer15@yahoo.es', '$2y$10$LeGtCcJSKcj3yWvnW9UdkupL9UItDtPDH63QCgiR6YVWg0tSdXfmm', '6942471', 'Calle 93 N 29-57 Torre 5 Apto 201 Torres de alejandria', 'Torres de Alejandria', 'Bucaramanga', 'Santander', 'Colombia', 23000),
(1234560, 'Rogerio', 'Mateus', '312456564', 'royer@hotmail.com', '$2y$10$gfaBhlIPUPplTNiIkxO49eSHZprisRdJnNRGocnSjQNTjnK9clxqq', '6987878', 'Bogota', 'Prado', 'Bogota', 'Cundinamarca', 'Colombia', 500),
(37750671, 'Mayela ', 'Ramos Herrera', '3203178764', 'ramosmaye@hotmail.com', '$2y$10$9PS7pEz1ZVGQhed8Z8p3vedzGGrImqujpFvx5F.sYvxUypW//.hUi', '6945384', 'Calle 93 N 29-57 Torre 5 Apto 201 Torres de Alejandria', 'Torres de Alejandria', 'Bucaramanga', 'Santander', 'Colombia', 2000),
(11201277, 'Robert Clifton', 'Borja Herrera', '3124883527', 'romaclin@hotmail.com', '$2y$10$Jqd6jyDmylDv7eWlTvWN8uR.o/WTZyAWU.zJTPxAqOg7wEBXOTwcO', '555', '555', '555', '555', '555', '555', 359),
(87654321, 'Jhan Nicolas', 'Ruiz Niño', '3173488808', 'oruizmateus@gmail.com', '$2y$10$zdw83f7PzOtrPKP7sM8x2e/ybFNVAIbI1kw77oO4wxTb.0SPYLxii', '555', '555', '555', '555', '555', '555', 15000),
(10879285, 'Jorge ', 'Cali', '3152614394', 'jorgeamb2010@gmail.com', '$2y$10$q3SCXfweqq5nLvBijjkQ/uiYKPsw3Ty6ev.jFEROHooU.Qo6MOdcm', '3152614394', 'Calle 45 con 1', 'Campo Hermoso', 'Bucaramanga', 'Santander', 'Colombia', 2000),
(1005161201, 'Valentina', 'Ruiz Ramos', '3203178764', 'ruizramosvale@hotmail.com', '$2y$10$KX0NNNDrobswEou8KIKvd.SGctw0BEwblWXrRCt3l.CEh3RLqWePy', '', 'Calle 93 N 29-57 Torre 5 Apto 201 Torres de alejandria', 'torres de alejandria', 'Bucaramanga', 'Santander', 'Colombia', 10000),
(7654321, 'Sara Isabel', 'Ruiz Ramos', '3173488808', 'ruizramossara@gmail.com', '$2y$10$xc..Lddq1c02gFxiHEejG.kuNXPnxvb/s7cXjRoj6NFGqnGUYBxr.', '6945370', 'Calle 93 N 29-57 Torre 5 Apto 201 Torres de alejandria', 'Torres de Alejandria', 'Bucaramanga', 'Santander', 'Colombia', 2000),
(914886076, 'Osmer Eduardo', 'Ruiz Mateus', '3173488808', 'osmer15@yahoo.es', '$2y$10$qV08rI0ig0QcOj4a3tAaKOp4kcL4xiDZbRKGTpR4XjZkMPRrzEXDK', '6945384', 'Calle 93 N 29-57 Torre 5 Apto 201', 'Torres de Alejandria', 'Bucaramanga', 'Santander', 'Colombia', 20000),
(80371684, 'Nelson ', 'Garcia Rubiano', '3212781718', 'garnel1970@gmail.com', '$2y$10$drJ.z8lIKnc6bgzOyQhvtOviDto3mabDDMa4gqPno/lHiSy5jewr2', '555', '555', '555', '555', '555', '555', 506),
(79677707, 'Edgar', 'Castilla Bohorquez', '3166589291', 'edcastilla14@gmail.com', '$2y$10$pBpHVqPdncQ2VH0QVvcYRO8G/ua.2A7CVVSduLx4.F8ZSRB2jRldu', '', 'Corviani 2 Torre 1 Apto 504', 'Real de minas ', 'Bucaramanga', 'Santander', 'Colombia', 1000),
(91236352, 'Luis Gabriel', 'Rodriguez Parra', '3102017489', 'multicreditoslr@hotmail.com', '$2y$10$PocRZHWNncqVMyrCZSYsX.nYSUrDricbvXJMyM.22of.huP/ArM1q', '', 'Calle 12 N35-115', 'Los Pinos', 'Bucaramanga', 'Santander', 'Colombia', 3370),
(5638291, 'Gustavo', 'Rodriguez', '3003241503', 'gusrope@yahoo.com', '$2y$10$G5Kwf4X65pvlaWhwCW9HXuHJzutkf5/xDp55jYNw64PI2qqjaIyrW', '', 'Florida', 'Florida', 'Bucaramqnga', 'Santander', 'Colombia', 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operaciones`
--

CREATE TABLE `operaciones` (
  `cod_oper` int(20) NOT NULL,
  `ced_inver` int(12) NOT NULL,
  `cod_capital` int(12) NOT NULL,
  `nom_oper` varchar(20) NOT NULL,
  `tipo_oper` varchar(20) NOT NULL,
  `fecha_open` date NOT NULL,
  `fecha_close` date DEFAULT NULL,
  `hora_open` time NOT NULL,
  `hora_close` time DEFAULT NULL,
  `valor_accion` double DEFAULT NULL,
  `vlr_oper` int(10) NOT NULL,
  `cant_oper` int(20) NOT NULL,
  `com_oper` int(20) NOT NULL,
  `vlrop_oper` int(20) NOT NULL,
  `pl` double DEFAULT NULL,
  `pldia` double DEFAULT NULL,
  `estado_oper` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `operaciones`
--

INSERT INTO `operaciones` (`cod_oper`, `ced_inver`, `cod_capital`, `nom_oper`, `tipo_oper`, `fecha_open`, `fecha_close`, `hora_open`, `hora_close`, `valor_accion`, `vlr_oper`, `cant_oper`, `com_oper`, `vlrop_oper`, `pl`, `pldia`, `estado_oper`) VALUES
(448, 91236352, 4462, 'CAT', 'VERTICAL ALCISTA', '2018-05-21', '2018-05-22', '10:00:00', '09:00:00', 160, 220, 2, 10, 2, -32.14, 0, 'cerrada'),
(434, 91236352, 354, 'SPY', 'SINGLE BAJISTA', '2018-05-02', '2018-05-03', '11:02:00', '10:00:00', 264, 3160, 10, 25, 2, 904.57, 0, 'cerrada'),
(435, 91236352, 987, 'GOOGL', 'VERTICAL BAJISTA', '2018-05-03', '2018-05-07', '09:50:00', '10:00:00', 1024.3, 230, 1, 5, 12, -110.17, 0, 'cerrada'),
(436, 91236352, 987, 'NVDA', 'VERTICAL ALCISTA', '2018-05-07', '2018-05-11', '08:40:00', '10:00:00', 249, 254, 2, 10, 11, 65.79, 0, 'cerrada'),
(437, 91236352, 951, 'AAPL', 'VERTICAL ALCISTA', '2018-05-07', '2018-05-07', '08:40:00', '02:00:00', 187, 1250, 5, 25, 1, -230.43, 0, 'cerrada'),
(438, 91236352, 543, 'SPY', 'SINGLE BAJISTA', '2018-05-08', '2018-05-08', '08:50:00', '12:00:00', 266, 1555, 5, 13, 1, -257.69, 0, 'cerrada'),
(439, 91236352, 854, 'NVDA', 'SINGLE ALCISTA', '2018-05-09', '2018-05-09', '08:40:00', '12:00:00', 251, 2840, 2, 5, 1, 186.87, 0, 'cerrada'),
(440, 91236352, 120, 'NVDA', 'SINGLE ALCISTA', '2018-05-09', '2018-05-11', '13:00:00', '10:00:00', 250, 3080, 2, 5, 5, -585.12, 0, 'cerrada'),
(441, 91236352, 658, 'XOM', 'VERTICAL ALCISTA', '2018-05-09', '2018-05-11', '10:00:00', '09:20:00', 79, 273, 3, 15, 10, 113.77, 0, 'cerrada'),
(426, 91236352, 658, 'SPX500', 'SINGLE ALCISTA', '2018-04-25', '2018-04-26', '02:00:00', '09:17:00', 2638, 425, 1, 3, 2, 207.46, 0, 'cerrada'),
(427, 91236352, 951, 'AAPL', 'VERTICAL ALCISTA', '2018-04-30', '2018-05-01', '02:15:00', '08:38:00', 165.43, 1285, 10, 50, 11, -45, 0, 'cerrada'),
(428, 91236352, 786, 'SPY', 'SINGLE BAJISTA', '2018-05-01', '2018-05-01', '09:12:00', '12:07:00', 264, 665, 20, 50, 1, 250, 0, 'cerrada'),
(443, 91236352, 682, 'SPY', 'SINGLE ALCISTA', '2018-05-16', '2018-05-16', '08:40:00', '12:00:00', 271, 247, 1, 3, 1, 4.44, 0, 'cerrada'),
(444, 91236352, 6985, 'NKE', 'VERTICAL ALCISTA', '2018-05-16', '2018-05-18', '08:40:00', '10:00:00', 70, 351, 3, 15, 10, -32.28, 0, 'cerrada'),
(445, 91236352, 951, 'TSLA', 'VERTICAL ALCISTA', '2018-05-16', '2018-05-16', '08:55:00', '14:00:00', 285, 765, 3, 15, 1, -99.41, 0, 'cerrada'),
(446, 91236352, 864, 'TSLA', 'VERTICAL BAJISTA', '2018-05-16', '2018-05-17', '02:00:00', '10:00:00', 285, 2270, 10, 50, 2, -228.31, 0, 'cerrada'),
(447, 91236352, 381, 'BA', 'SINGLE ALCISTA', '2018-05-18', '2018-05-21', '10:00:00', '11:00:00', 350, 2500, 2, 5, 10, 1759.89, 0, 'cerrada'),
(411, 91236352, 987, 'NFLX', 'VERTICAL ALCISTA', '2018-04-06', '2018-04-06', '09:00:00', '09:50:00', 298.51, 126, 1, 5, 15, -16.15, 0, 'cerrada'),
(442, 91236352, 789, 'NVDA', 'SINGLE BAJISTA', '2018-05-11', '2018-05-11', '08:40:00', '12:00:00', 247, 2200, 1, 3, 1, -211.54, 0, 'cerrada'),
(433, 91236352, 687, 'SPY', 'SINGLE ALCISTA', '2018-05-02', '2018-05-02', '08:40:00', '11:00:00', 264.36, 1510, 10, 25, 1, -715.36, 0, 'cerrada'),
(432, 91236352, 231, 'AAPL', 'SINGLE ALCISTA', '2018-05-02', '2018-05-02', '08:40:00', '12:00:00', 164.15, 163, 10, 25, 1, -135.3427, 0, 'cerrada'),
(429, 91236352, 369, 'AAPL', 'VERTICAL ALCISTA', '2018-04-30', '2018-05-01', '09:00:00', '10:00:00', 164.15, 1260, 10, 50, 11, -80.87, 0, 'cerrada'),
(430, 91236352, 456, 'SPY', 'SINGLE BAJISTA', '2018-05-01', '2018-05-01', '08:40:00', '12:00:00', 265, 1240, 20, 50, 1, 249.31, 0, 'cerrada'),
(431, 91236352, 789, 'AAPL', 'SINGLE ALCISTA', '2018-05-01', '2018-05-02', '08:40:00', '12:00:00', 167.06, 35, 1, 3, 1, -4.537, 0, 'cerrada'),
(410, 91236352, 456, 'AAPL', 'VERTICAL ALCISTA', '2018-04-05', '2018-04-06', '11:53:00', '09:51:00', 173.96, 271, 2, 10, 16, -86.14, 0, 'cerrada'),
(412, 91236352, 354, 'SPY', 'SINGLE BAJISTA', '2018-04-06', '2018-04-06', '01:09:00', '01:50:00', 259, 483, 10, 25, 1, 224.64, 0, 'cerrada'),
(413, 91236352, 569, 'JPM', 'VERTICAL ALCISTA', '2018-04-09', '2018-04-09', '09:51:00', '12:58:00', 111.34, 102, 1, 5, 10, 17.91, 0, 'cerrada'),
(414, 91236352, 856, 'JPM', 'VERTICAL ALCISTA', '2018-04-10', '2018-04-11', '09:29:00', '09:00:00', 112.29, 103, 1, 5, 10, -24.08, 0, 'cerrada'),
(415, 91236352, 357, 'TSLA', 'VERTICAL BAJISTA', '2018-04-12', '2018-04-13', '08:39:00', '12:00:00', 299.78, 123, 1, 5, 15, -16.13, 0, 'cerrada'),
(416, 91236352, 654, 'SPY', 'SINGLE BAJISTA', '2018-04-13', '2018-04-13', '09:00:00', '13:47:00', 264.85, 120, 2, 10, 1, -103.06, 0, 'cerrada'),
(417, 91236352, 322, 'SPX500', 'IRON CONDOR', '2018-04-16', '2018-04-25', '10:04:00', '10:00:00', 2673, 2025, 3, 30, 18, -45.4, 0, 'cerrada'),
(418, 91236352, 954, 'SPY', 'SINGLE BAJISTA', '2018-04-19', '2018-04-19', '08:43:00', '12:15:00', 269.17, 63, 1, 5, 1, 41.46, 0, 'cerrada'),
(419, 91236352, 684, 'SPY', 'SINGLE BAJISTA', '2018-04-20', '2018-04-20', '09:09:00', '09:52:00', 268.33, 233, 2, 5, 1, 82.93, 0, 'cerrada'),
(420, 91236352, 9874, 'GOOGL', 'VERTICAL BAJISTA', '2018-04-24', '2018-04-24', '08:35:00', '10:11:00', 1045.57, 249, 1, 5, 24, 73.76, 0, 'cerrada'),
(421, 91236352, 6854, 'AAPL', 'IRON CONDOR BAJISTA', '2018-04-24', '2018-04-27', '08:56:00', '08:40:00', 165.25, 453, 3, 30, 24, -33.43, 0, 'cerrada'),
(422, 91236352, 9875, 'AMZN', 'VERTICAL ALCISTA', '2018-04-26', '2018-04-27', '10:27:00', '08:42:00', 1499, 1593, 6, 30, 0, 903.02, 0, 'cerrada'),
(423, 91236352, 856, 'MSFT', 'VERTICAL ALCISTA', '2018-04-26', '2018-04-27', '09:32:00', '08:40:00', 94.25, 351, 3, 15, 22, 86.75, 0, 'cerrada'),
(424, 91236352, 951, 'SPY', 'ALCISTA', '2018-04-24', '2018-04-25', '02:40:00', '10:00:00', 263, 98, 1, 5, 1, -58.54, 0, 'cerrada'),
(425, 914886076, 859, 'SPX', 'SINGLE ALCISTA', '2018-04-25', '2018-04-26', '02:00:00', '09:17:00', 2639, 400, 1, 5, 2, 207.46, 0, 'cerrada'),
(449, 91236352, 918, 'NFLX', 'VERTICAL ALCISTA', '2018-05-22', '2018-05-23', '10:00:00', '09:00:00', 335, 271, 3, 15, 2, -141.29, 0, 'cerrada'),
(450, 91236352, 357, 'NFLX', 'VERTICAL BAJISTA', '2018-05-23', '2018-05-24', '14:00:00', '09:00:00', 337.5, 150, 1, 5, 2, -18.1, 0, 'cerrada'),
(451, 91236352, 956, 'SPY', 'SINGLE BAJISTA', '2018-05-24', '2018-05-24', '08:50:00', '10:00:00', 271, 102, 2, 5, 1, 68.94, 0, 'cerrada'),
(452, 91236352, 357, 'SPY', 'SINGLE BAJISTA', '2018-05-25', '2018-05-25', '08:40:00', '12:00:00', 272, 145, 1, 3, 1, -35.54, 0, 'cerrada'),
(453, 91236352, 759, 'QQQ', 'VERTICAL ALCISTA', '2018-05-25', '2018-05-25', '08:50:00', '12:00:00', 170, 2410, 10, 25, 1, -265.39, 0, 'cerrada'),
(454, 91236352, 423, 'NFLX', 'VERTICAL ALCISTA', '2018-05-25', '0000-00-00', '09:00:00', '00:00:00', 337.5, 120, 1, 5, 5, NULL, NULL, 'abierta'),
(455, 1005161201, 789, 'AAPL', 'VERTICAL ALCISTA', '2018-05-29', '0000-00-00', '09:00:00', '00:00:00', 180, 1000, 5, 20, 20, 100, 0, 'cerrada'),
(456, 1005161201, 753, 'GOOGL', 'VERTICAL BAJISTA', '2018-05-29', '0000-00-00', '09:00:00', '00:00:00', 1070, 3000, 2, 20, 20, NULL, NULL, 'abierta'),
(457, 80371684, 968, 'NFLX', 'VERTICAL ALCISTA', '2018-07-11', '0000-00-00', '09:31:00', '09:01:00', 418.8, 505, 2, 10, 37, -33, 0, 'cerrada'),
(458, 80371684, 358, 'AAPL', 'SINGLE ALCISTA', '2018-07-12', '2018-07-13', '11:18:00', '09:15:00', 191.06, 346, 1, 5, 15, 27, 0, 'cerrada'),
(459, 80371684, 65874, 'BA', 'VERTICAL ALCISTA', '2018-07-13', '2018-07-16', '09:19:00', '08:46:00', 349.83, 114, 1, 5, 7, 17.5, 0, 'cerrada'),
(460, 80371684, 684, 'CAT', 'VERTICAL ALCISTA', '2018-07-13', '2018-07-16', '10:00:00', '08:36:00', 140.7, 97, 1, 5, 7, -13.5, 0, 'cerrada'),
(461, 80371684, 153, 'FDX', 'SINGLE ALCISTA', '2018-07-13', '2018-07-13', '09:50:00', '10:59:00', 234.64, 254, 1, 3, 7, -68, 0, 'cerrada'),
(462, 80371684, 852, 'SPY', 'SINGLE BAJISTA', '2018-07-16', '2018-07-16', '09:47:00', '02:00:00', 279.17, 35, 1, 3, 1, -10, 0, 'cerrada'),
(463, 80371684, 159, 'NFLX', 'VERTICAL ALCISTA', '2018-07-17', '2018-07-17', '09:20:00', '10:51:00', 362, 258, 1, 5, 0, 36, 0, 'cerrada'),
(464, 80371684, 583, 'SPY', 'SINGLE ALCISTA', '2018-07-17', '2018-07-18', '09:58:00', '10:16:00', 279.2, 133, 1, 3, 7, 10, 0, 'cerrada'),
(465, 80371684, 9856, 'NFLX', 'BUTERFLY ALCISTA', '2018-07-17', '0000-00-00', '11:22:00', '00:00:00', 379.5, 89, 4, 10, 31, NULL, NULL, 'abierta'),
(466, 80371684, 852, 'AAPL', 'BUTERFLY ALCISTA', '2018-07-23', '2018-07-27', '13:06:00', '00:00:00', 191.62, 96, 4, 10, 25, -13, 0, 'cerrada'),
(467, 80371684, 856, 'TSLA', 'BUTERFLY ALCISTA', '2018-07-25', '2018-07-02', '09:35:00', '10:00:00', 301.4, 74, 6, 20, 9, 45, 0, 'cerrada'),
(468, 80371684, 358, 'SPY', 'SINGLE ALCISTA', '2018-07-31', '2018-08-01', '09:15:00', '11:53:00', 280.39, 350, 2, 5, 17, -43.06, 0, 'cerrada'),
(469, 80371684, 965489, 'TLT', 'SINGLE ALCISTA', '2018-08-06', '2018-08-07', '08:59:00', '12:00:00', 119.76, 400, 4, 10, 11, -220, 0, 'cerrada'),
(470, 80371684, 4654, 'SPY', 'SINGLE BAJISTA', '2018-08-08', '2018-08-08', '08:35:00', '02:30:00', 285.2, 220, 3, 8, 0, -109.58, 0, 'cerrada'),
(471, 80371684, 798, 'AAPL', 'SINGLE ALCISTA', '2018-08-09', '2018-08-10', '08:51:00', '09:30:00', 208.5, 150, 1, 5, 2, -52, 0, 'cerrada'),
(472, 80371684, 256, 'NVDA', 'SINGLE ALCISTA', '2018-08-13', '2018-08-14', '10:14:00', '13:09:00', 261, 60, 1, 3, 4, -11.52, 0, 'cerrada'),
(473, 80371684, 158, 'SPY', 'SINGLE BAJISTA', '2018-08-15', '2018-08-15', '08:30:00', '10:00:00', 281, 60, 1, 3, 1, 65, 0, 'cerrada'),
(474, 80371684, 589, 'SPY', 'SINGLE ALCISTA', '2018-08-15', '2018-08-16', '11:27:00', '10:00:00', 280, 115, 1, 5, 2, 127, 0, 'cerrada'),
(475, 80371684, 145674, 'WMT', 'SINGLE ALCISTA', '2018-08-16', '2018-08-16', '11:00:00', '09:00:00', 99.1, 160, 1, 5, 36, -50, 0, 'cerrada');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capital`
--
ALTER TABLE `capital`
  ADD PRIMARY KEY (`cod_capital`,`ced_inver`,`cod_oper`);

--
-- Indices de la tabla `inversionista`
--
ALTER TABLE `inversionista`
  ADD PRIMARY KEY (`ced_inver`);

--
-- Indices de la tabla `operaciones`
--
ALTER TABLE `operaciones`
  ADD PRIMARY KEY (`cod_oper`,`ced_inver`,`cod_capital`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capital`
--
ALTER TABLE `capital`
  MODIFY `cod_capital` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT de la tabla `operaciones`
--
ALTER TABLE `operaciones`
  MODIFY `cod_oper` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=476;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
