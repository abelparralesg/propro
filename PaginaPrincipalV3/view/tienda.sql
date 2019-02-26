-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2019 a las 06:36:42
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldetalleventa`
--

CREATE TABLE `tbldetalleventa` (
  `ID` int(11) NOT NULL,
  `IDVENTA` int(11) NOT NULL,
  `IDPRODUCTO` int(11) NOT NULL,
  `PRECIOUNITARIO` decimal(20,2) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `DESCARGADO` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbldetalleventa`
--

INSERT INTO `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) VALUES
(87, 67, 3, '300.00', 1, 0),
(88, 68, 2, '2200.00', 1, 0),
(89, 68, 3, '300.00', 1, 0),
(90, 69, 2, '2200.00', 1, 0),
(91, 69, 3, '300.00', 1, 0),
(92, 69, 1, '300.00', 1, 0),
(93, 70, 2, '2200.00', 1, 0),
(94, 70, 3, '300.00', 1, 0),
(95, 70, 1, '300.00', 1, 0),
(96, 71, 2, '2200.00', 1, 0),
(97, 71, 3, '300.00', 1, 0),
(98, 71, 1, '300.00', 1, 0),
(99, 72, 2, '2200.00', 1, 0),
(100, 72, 3, '300.00', 1, 0),
(101, 72, 1, '300.00', 1, 0),
(102, 73, 2, '2200.00', 1, 0),
(103, 73, 3, '300.00', 1, 0),
(104, 73, 1, '300.00', 1, 0),
(105, 74, 2, '2200.00', 1, 0),
(106, 74, 3, '300.00', 1, 0),
(107, 74, 1, '300.00', 1, 0),
(108, 75, 2, '2200.00', 1, 0),
(109, 75, 3, '300.00', 1, 0),
(110, 75, 1, '300.00', 1, 0),
(111, 76, 2, '2200.00', 1, 0),
(112, 76, 3, '300.00', 1, 0),
(113, 76, 1, '300.00', 1, 0),
(114, 77, 2, '2200.00', 1, 0),
(115, 77, 3, '300.00', 1, 0),
(116, 77, 1, '300.00', 1, 0),
(117, 78, 2, '2200.00', 1, 0),
(118, 78, 3, '300.00', 1, 0),
(119, 78, 1, '300.00', 1, 0),
(120, 79, 2, '2200.00', 1, 0),
(121, 79, 3, '300.00', 1, 0),
(122, 79, 1, '300.00', 1, 0),
(123, 80, 2, '2200.00', 1, 0),
(124, 80, 3, '300.00', 1, 0),
(125, 80, 1, '300.00', 1, 0),
(126, 81, 2, '2200.00', 1, 0),
(127, 81, 3, '300.00', 1, 0),
(128, 81, 1, '300.00', 1, 0),
(129, 82, 2, '2200.00', 1, 0),
(130, 82, 3, '300.00', 1, 0),
(131, 82, 1, '300.00', 1, 0),
(132, 83, 2, '2200.00', 1, 0),
(133, 83, 3, '300.00', 1, 0),
(134, 83, 1, '300.00', 1, 0),
(135, 84, 2, '2200.00', 1, 0),
(136, 84, 3, '300.00', 1, 0),
(137, 84, 1, '300.00', 1, 0),
(138, 85, 2, '2200.00', 1, 0),
(139, 85, 3, '300.00', 1, 0),
(140, 85, 1, '300.00', 1, 0),
(141, 86, 2, '2200.00', 1, 0),
(142, 86, 3, '300.00', 1, 0),
(143, 86, 1, '300.00', 1, 0),
(144, 87, 2, '2200.00', 1, 0),
(145, 87, 3, '300.00', 1, 0),
(146, 87, 1, '300.00', 1, 0),
(147, 88, 2, '2200.00', 1, 0),
(148, 88, 3, '300.00', 1, 0),
(149, 88, 1, '300.00', 1, 0),
(150, 89, 2, '2200.00', 1, 0),
(151, 89, 3, '300.00', 1, 0),
(152, 89, 1, '300.00', 1, 0),
(153, 90, 2, '2200.00', 1, 0),
(154, 90, 3, '300.00', 1, 0),
(155, 90, 1, '300.00', 1, 0),
(156, 91, 2, '2200.00', 1, 0),
(157, 91, 3, '300.00', 1, 0),
(158, 91, 1, '300.00', 1, 0),
(159, 92, 2, '2200.00', 1, 0),
(160, 92, 3, '300.00', 1, 0),
(161, 92, 1, '300.00', 1, 0),
(162, 93, 2, '2200.00', 1, 0),
(163, 93, 3, '300.00', 1, 0),
(164, 93, 1, '300.00', 1, 0),
(165, 94, 2, '2200.00', 1, 0),
(166, 94, 3, '300.00', 1, 0),
(167, 94, 1, '300.00', 1, 0),
(168, 95, 2, '2200.00', 1, 0),
(169, 95, 3, '300.00', 1, 0),
(170, 95, 1, '300.00', 1, 0),
(171, 96, 2, '2200.00', 1, 0),
(172, 96, 3, '300.00', 1, 0),
(173, 96, 1, '300.00', 1, 0),
(174, 97, 2, '2200.00', 1, 0),
(175, 97, 3, '300.00', 1, 0),
(176, 97, 1, '300.00', 1, 0),
(177, 98, 2, '2200.00', 1, 0),
(178, 98, 3, '300.00', 1, 0),
(179, 98, 1, '300.00', 1, 0),
(180, 99, 2, '2200.00', 1, 0),
(181, 99, 3, '300.00', 1, 0),
(182, 99, 1, '300.00', 1, 0),
(183, 100, 3, '300.00', 1, 0),
(184, 100, 1, '300.00', 1, 0),
(185, 101, 3, '300.00', 1, 0),
(186, 101, 1, '300.00', 1, 0),
(187, 102, 3, '300.00', 1, 0),
(188, 102, 1, '300.00', 1, 0),
(189, 103, 1, '300.00', 1, 0),
(190, 104, 1, '300.00', 1, 0),
(191, 105, 1, '300.00', 1, 0),
(192, 106, 1, '300.00', 1, 0),
(193, 107, 1, '300.00', 1, 0),
(194, 108, 2, '2200.00', 1, 0),
(195, 110, 2, '2200.00', 1, 0),
(196, 111, 2, '2200.00', 1, 0),
(197, 112, 1, '300.00', 1, 0),
(198, 112, 2, '2200.00', 1, 0),
(199, 112, 3, '300.00', 1, 0),
(200, 113, 1, '300.00', 1, 0),
(201, 113, 2, '2200.00', 1, 0),
(202, 113, 3, '300.00', 1, 0),
(203, 114, 1, '300.00', 1, 0),
(204, 114, 2, '2200.00', 1, 0),
(205, 114, 3, '300.00', 1, 0),
(206, 115, 1, '300.00', 1, 0),
(207, 115, 2, '2200.00', 1, 0),
(208, 115, 3, '300.00', 1, 0),
(209, 115, 4, '300.00', 1, 0),
(210, 116, 3, '60.00', 1, 0),
(211, 117, 1, '25.00', 1, 0),
(212, 117, 2, '50.00', 1, 0),
(213, 118, 1, '25.00', 1, 0),
(214, 118, 2, '50.00', 1, 0),
(215, 123, 1, '25.00', 1, 0),
(216, 123, 2, '50.00', 1, 0),
(217, 123, 4, '65.00', 1, 0),
(218, 124, 1, '25.00', 1, 0),
(219, 125, 1, '25.00', 1, 0),
(220, 125, 4, '65.00', 1, 0),
(221, 126, 1, '25.00', 1, 0),
(222, 127, 1, '25.00', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproductos`
--

CREATE TABLE `tblproductos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `Imagen` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblproductos`
--

INSERT INTO `tblproductos` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'PAQUETE BASICO', '25.00', 'Disfruta de 60 canales con deportes\r\npelículas, programas infantiles y series\r\nIncluye todos tus canales locales.\r\n1 Dominio\r\nIlimitado Ancho de Banda\r\nEl nuevo canal deportivo aficionados', 'http://www.dishpaquetes.com.mx/imagenes/canales%20del%20paquete%20dish%20basico%201.jpg'),
(2, 'PAQUETE PREMIUM', '50.00', 'Porque es mejor en TV War, contrátalo\r\nLa mejor selección de contenido exclusivo\r\nLa mejor selección deproducciones originales\r\nMiralos a través de tus dispositivos.\r\nDisfruta todos los partidos del Campeonato Nacional\r\nAudio y subtítulos en tu idioma', 'http://www.tvcablesa.com/images/sliderver.jpg'),
(3, 'PAQUETE FAMILYHD', '60.00', 'Acceso a 96 canales\r\nBúsqueda de programación\r\nGuía de programación en pantalla\r\nIncluye Campeonato Ecuatoriano de Fútbol\r\nControl parental\r\nLibre de cuentas', 'http://4.bp.blogspot.com/-dDwhgvg1x_4/Vcq3LGhJIXI/AAAAAAAADQ8/eLV4DHIUiUQ/s1600/CAnalesTV.jpg\r\n'),
(4, 'PAQUETE BRONCE PACKAGEHD', '65.00', 'Acceso a 107 canales\r\n60 Canales Internacionales\r\n11 Canales Nacionales\r\nGuía de programación en pantalla\r\nLibre de cuentas\r\nCanales Premium', 'http://www.ecoustics.com/electronics/forum/home-video/354600.jpg'),
(5, 'PAQUETE PLATA PACKAGEHD ', '70.00', 'Acceso a 150 canales\r\n43 Canales HD\r\n60 Canales Internacionales\r\nAudio y subtítulos en tu idioma\r\nLibre de cuentas\r\nAcceso a TV War Play\r\n\r\n\r\n\r\n', 'https://3.bp.blogspot.com/-UWWi0cOQYFg/VELPEsTdH9I/AAAAAAAAAe0/enrQwasCojw/s1600/grade-familia.jpg'),
(6, 'PAQUETE PLATINO PACKAGEHD', '90.00', 'Acceso a 128 canales\r\nLibre de cuentas\r\nIncluye Campeonato Ecuatoriano de Fútbol\r\nBúsqueda de programación\r\nNotificado mediante DLR.- 682\r\nCanales Premium', 'https://http2.mlstatic.com/cs-claro-tv-sky-e-vivo-hd-longuin-triplo-o-melhor-do-brasil-D_NQ_NP_981225-MLB25398367914_022017-F.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblventas`
--

CREATE TABLE `tblventas` (
  `ID` int(11) NOT NULL,
  `ClaveTransaccion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `PaypalDatos` text COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `Total` decimal(60,2) NOT NULL,
  `status` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblventas`
--

INSERT INTO `tblventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) VALUES
(33, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 22:20:34', 'abelparralesgarcia123@gmail.com', '2500.00', 'pendiente'),
(34, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 22:20:43', 'abelparralesgarcia123@gmail.com', '2500.00', 'pendiente'),
(35, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 22:20:45', 'abelparralesgarcia123@gmail.com', '2500.00', 'pendiente'),
(36, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 22:21:10', 'abelparralesgarcia123@gmail.com', '2500.00', 'pendiente'),
(37, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 22:21:20', 'abelparralesgarcia123@gmail.com', '2500.00', 'pendiente'),
(38, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 22:21:42', 'abelparralesgarcia123@gmail.com', '2500.00', 'pendiente'),
(39, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 22:23:01', 'abelparralesgarcia123@gmail.com', '2500.00', 'pendiente'),
(40, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 22:25:23', 'abelparralesgarcia123@gmail.com', '2500.00', 'pendiente'),
(41, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 22:27:32', 'abelparralesgarcia123@gmail.com', '2500.00', 'pendiente'),
(42, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 22:28:32', 'abelparralesgarcia123@gmail.com', '2500.00', 'pendiente'),
(43, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 22:28:44', 'abelparralesgarcia123@gmail.com', '2500.00', 'pendiente'),
(44, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 23:06:29', 'abelparralesgarcia123@gmail.com', '2500.00', 'pendiente'),
(45, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 23:22:31', 'abelparralesgarcia123@gmail.com', '2500.00', 'pendiente'),
(46, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 23:22:36', 'abelparralesgarcia123@gmail.com', '2500.00', 'pendiente'),
(47, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 23:23:09', 'abelparralesgarcia123@gmail.com', '2500.00', 'pendiente'),
(48, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 23:23:57', 'keyla.cedenoh@ug.edu.ec', '2500.00', 'pendiente'),
(49, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 23:24:24', 'melissass501@hotmail.com', '2500.00', 'pendiente'),
(50, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 23:24:33', 'melissass501@hotmail.com', '2500.00', 'pendiente'),
(51, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 23:24:37', 'melissass501@hotmail.com', '2500.00', 'pendiente'),
(52, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 23:25:08', 'melissass501@hotmail.com', '2500.00', 'pendiente'),
(53, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 23:25:26', 'melissass501@hotmail.com', '2500.00', 'pendiente'),
(54, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 23:28:11', 'abelparralesgarcia123@gmail.com', '2500.00', 'pendiente'),
(55, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 23:28:14', 'abelparralesgarcia123@gmail.com', '2500.00', 'pendiente'),
(56, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 23:28:25', 'abelparralesgarcia123@gmail.com', '2500.00', 'pendiente'),
(57, 'klfdsibmchesece2vvqgmauts5', '', '2019-02-23 23:30:02', 'melissass501@hotmail.com', '2500.00', 'pendiente'),
(58, '7fosnnifbej3a5o8rr82ph67vp', '', '2019-02-23 23:30:59', 'key_ce97@hotmail.com', '300.00', 'pendiente'),
(59, '7fosnnifbej3a5o8rr82ph67vp', '', '2019-02-23 23:31:42', 'key_ce97@hotmail.com', '300.00', 'pendiente'),
(60, '7fosnnifbej3a5o8rr82ph67vp', '', '2019-02-23 23:31:50', 'key_ce97@hotmail.com', '300.00', 'pendiente'),
(61, '7fosnnifbej3a5o8rr82ph67vp', '', '2019-02-23 23:34:46', 'key_ce97@hotmail.com', '300.00', 'pendiente'),
(62, '7fosnnifbej3a5o8rr82ph67vp', '', '2019-02-23 23:34:49', 'key_ce97@hotmail.com', '300.00', 'pendiente'),
(63, '7fosnnifbej3a5o8rr82ph67vp', '', '2019-02-23 23:35:05', 'melissass501@hotmail.com', '2500.00', 'pendiente'),
(64, '7fosnnifbej3a5o8rr82ph67vp', '', '2019-02-23 23:36:50', 'melissass501@hotmail.com', '2500.00', 'pendiente'),
(65, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 09:55:43', 'melissass501@hotmail.com', '2500.00', 'pendiente'),
(66, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 09:58:26', 'melissass501@hotmail.com', '2500.00', 'pendiente'),
(67, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:04:21', 'melissass501@hotmail.com', '2500.00', 'pendiente'),
(68, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:04:25', 'melissass501@hotmail.com', '2500.00', 'pendiente'),
(69, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:04:47', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(70, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:04:48', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(71, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:05:37', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(72, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:05:40', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(73, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:06:22', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(74, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:11:25', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(75, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:12:01', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(76, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:14:28', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(77, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:14:59', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(78, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:15:38', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(79, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:19:08', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(80, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:19:11', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(81, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:20:14', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(82, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:22:13', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(83, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:28:09', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(84, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:33:23', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(85, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:33:33', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(86, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:35:03', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(87, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:42:54', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(88, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 10:44:48', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(89, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 11:23:21', 'key_ce97@hotmail.com', '2800.00', 'pendiente'),
(90, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 11:55:03', 'key_ce97@hotmail.com', '2800.00', 'pendiente'),
(91, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 12:22:55', 'key_ce97@hotmail.com', '2800.00', 'pendiente'),
(92, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 12:58:49', 'key_ce97@hotmail.com', '2800.00', 'pendiente'),
(93, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 13:12:20', 'key_ce97@hotmail.com', '2800.00', 'pendiente'),
(94, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 13:47:26', 'key_ce97@hotmail.com', '2800.00', 'pendiente'),
(95, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 14:10:55', 'key_ce97@hotmail.com', '2800.00', 'pendiente'),
(96, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 14:18:05', 'key_ce97@hotmail.com', '2800.00', 'pendiente'),
(97, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 14:39:28', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(98, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 14:43:06', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(99, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 14:45:07', 'melissass501@hotmail.com', '2800.00', 'pendiente'),
(100, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 14:48:06', 'chino241112@outlook.com', '600.00', 'pendiente'),
(101, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 15:02:13', 'chino241112@outlook.com', '600.00', 'pendiente'),
(102, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 15:36:35', 'chino241112@outlook.com', '600.00', 'pendiente'),
(103, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 15:45:58', 'key_ce97@hotmail.com', '300.00', 'pendiente'),
(104, '5u0ccijnjefeg96bo5qekobp3p', '', '2019-02-24 16:16:39', 'key_ce97@hotmail.com', '300.00', 'pendiente'),
(105, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 17:26:53', 'key_ce97@hotmail.com', '300.00', 'pendiente'),
(106, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 18:00:34', 'key_ce97@hotmail.com', '300.00', 'pendiente'),
(107, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 18:12:21', 'key_ce97@hotmail.com', '300.00', 'pendiente'),
(108, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 18:16:01', 'kim_hsm_7@hotmail.com', '2200.00', 'pendiente'),
(109, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 19:38:26', 'kim_hsm_7@hotmail.com', '0.00', 'pendiente'),
(110, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 19:38:44', 'key_ce97@hotmail.com', '2200.00', 'pendiente'),
(111, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 20:21:01', 'key_ce97@hotmail.com', '2200.00', 'pendiente'),
(112, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 20:21:17', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(113, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 20:49:45', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(114, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 21:09:10', 'keyla.cedenoh@ug.edu.ec', '2800.00', 'pendiente'),
(115, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 21:09:22', 'kim_hsm_7@hotmail.com', '3100.00', 'pendiente'),
(116, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 22:47:27', 'key_ce97@hotmail.com', '60.00', 'pendiente'),
(117, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 23:16:13', 'chino241112@outlook.com', '75.00', 'pendiente'),
(118, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 23:18:18', 'chino241112@outlook.com', '75.00', 'pendiente'),
(119, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 23:24:59', 'chino241112@outlook.com', '75.00', 'pendiente'),
(120, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 23:25:13', 'chino241112@outlook.com', '75.00', 'pendiente'),
(121, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 23:25:16', 'chino241112@outlook.com', '75.00', 'pendiente'),
(122, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 23:29:26', 'abelparralesgarcia123@gmail.com', '140.00', 'pendiente'),
(123, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 23:33:12', 'abelparralesgarcia123@gmail.com', '140.00', 'pendiente'),
(124, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 23:38:05', 'key_ce97@hotmail.com', '25.00', 'pendiente'),
(125, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 23:44:59', 'kim_hsm_7@hotmail.com', '90.00', 'pendiente'),
(126, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-24 23:57:04', 'key_ce97@hotmail.com', '25.00', 'pendiente'),
(127, 'nta7c7jhjou4g8tbtojvkbaf1o', '', '2019-02-25 00:07:54', 'key_ce97@hotmail.com', '25.00', 'pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDVENTA` (`IDVENTA`),
  ADD KEY `IDPRODUCTO` (`IDPRODUCTO`);

--
-- Indices de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD CONSTRAINT `tbldetalleventa_ibfk_1` FOREIGN KEY (`IDVENTA`) REFERENCES `tblventas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbldetalleventa_ibfk_2` FOREIGN KEY (`IDPRODUCTO`) REFERENCES `tblproductos` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
