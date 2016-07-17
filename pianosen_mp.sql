-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-07-2016 a las 03:27:40
-- Versión del servidor: 5.6.30
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pianosen_mp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE IF NOT EXISTS `catalogo` (
  `id` varchar(30) NOT NULL,
  `contacto` varchar(60) NOT NULL DEFAULT 'musicalpianoforte@hotmail.com',
  `costo` decimal(10,2) NOT NULL,
  `tipo` varchar(9) NOT NULL,
  `descripcion` text NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id`, `contacto`, `costo`, `tipo`, `descripcion`, `ruta`, `nombre`, `fecha`, `status`) VALUES
('ABR-3672', 'musicalpianoforte@hotmail.com', '150000.00', 'cola', 'Piano en venta<br />\\r\\nSquare Piano<br />\\r\\n2.10 m<br />\\r\\nFino piano de la coleccion STEINWAY & SONS<br />\\r\\nExcelente sonido<br />\\r\\nTeclado de marfíl<br />\\r\\nIdeal para conocedores<br />\\r\\nNo. Serie 25409<br />\\r\\nFabricado en 1872<br />\\r\\nExcelente estado<br />\\r\\nSe realizan envíos económicos a toda la república ', 'catalogo_img/IMG_3672.JPG', 'IMG_3672.JPG', '2016-05-05 23:30:24', 1),
('ACROSONIC BALDWIN / $16,000', 'musicalpianoforte@hotmail.com', '16000.00', 'vertical', 'Venta de piano vertical<br />\\r\\nPiano de la reconocida marca ACROSONIC BALDWIN<br />\\r\\nNumero de serie 602063<br />\\r\\nMaquinaria seminueva<br />\\r\\nExcelente sonido<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nGarantia en cabezal y tabla armónica<br />\\r\\nEnvíos a toda la república a un costo muy bajo', 'catalogo_img/IMG_3779.jpg', 'IMG_3779.jpg', '2016-05-04 00:48:46', 1),
('BALDWIN / $15,000', 'musicalpianoforte@hotmail.com', '15000.00', 'vertical', 'Venta de piano marca BALDWIN<br />\\r\\nPiano con maquinaria seminueva<br />\\r\\nExcelente sonido<br />\\r\\nCuenta con afinación a tono 440 hz<br />\\r\\nGarantizado en cabezal y tabla armónica<br />\\r\\nNúmero de serie 812390<br />\\r\\nSe realizan envíos a toda la republica a un costo muy económico ', 'catalogo_img/IMG_3772.jpg', 'IMG_3772.jpg', '2016-05-04 00:03:16', 1),
('Brambach / $50,000.', 'musicalpianoforte@hotmail.com', '50000.00', 'cola', 'Precioso piano de cola en venta<br />\\r\\n1/4 de cola de la reconocida marca BRAMBACH<br />\\r\\nCuenta con dos años de garantía en cabezal y tabla armónica<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nExcelente sonido de concierto<br />\\r\\nIdeal para concertistas<br />\\r\\nFabricado con finos cedros<br />\\r\\nSe envía a cualquier lugar de la república a un costo muy bajo', 'catalogo_img/IMG_3682.JPG', 'IMG_3682.JPG', '2016-05-04 02:06:31', 1),
('CABLE NELSON / $12,000', 'musicalpianoforte@hotmail.com', '12000.00', 'vertical', 'Piano en venta marca CABLE NELSON<br />\\r\\nBaiz original<br />\\r\\nCuenta con afinacion a tono 440 hz<br />\\r\\nExcelente sonido<br />\\r\\nLa maquinaria es seminueva<br />\\r\\nNúmero de serie 213305<br />\\r\\nSe envía a cualquier parte de la república a un costo muy bajo<br />\\r\\nGarantizado en cabezal y tabla armónica', 'catalogo_img/IMG_3783.jpg', 'IMG_3783.jpg', '2016-05-04 01:00:49', 1),
('CHIKERING / $55,000', 'musicalpianoforte@hotmail.com', '55000.00', 'cola', 'Piano en venta 1/4 de cola de la marca CHIKERING<br />\\r\\nImpecable<br />\\r\\nExcelente sonido<br />\\r\\nCuenta con afinación a tono 440 hz<br />\\r\\nGarantizado en cabezal y tabla armónica<br />\\r\\nSu maquinaria es seminueva<br />\\r\\nIdeal para concertistas<br />\\r\\nSe realizan envíos económicos a todo México<br />\\r\\n', 'catalogo_img/IMG_3707.JPG', 'IMG_3707.JPG', '2016-05-05 23:11:29', 1),
('DUO ART PLAY / $20,000', 'musicalpianoforte@hotmail.com', '20000.00', 'vertical', 'Piano en venta de marca DUO ART PLAY<br />\\r\\nMaquinaria seminueva<br />\\r\\nExcelente sonido<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nFabricado con madera de cedro fina<br />\\r\\nGarantia en cabezal y tabla armónica<br />\\r\\nPara gustos exigentes<br />\\r\\nEnvíos a toda la república a un costo muy bajo<br />\\r\\n', 'catalogo_img/IMG_3751.jpg', 'IMG_3751.jpg', '2016-05-03 23:28:21', 1),
('GULBRANSEN / $13,000', 'musicalpianoforte@hotmail.com', '13000.00', 'vertical', 'Venta de piano vertical<br />\\r\\nDe la reconocida marca GULBRANSEN<br />\\r\\nNumero de serie 386398<br />\\r\\nMaquinaria seminueva<br />\\r\\nExcelente sonido<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nGarantia en cabezal y tabla armónica<br />\\r\\nFabricado de finos cedros <br />\\r\\nEnvíos a toda la república a un costo muy bajo', 'catalogo_img/IMG_3753.jpg', 'IMG_3753.jpg', '2016-05-03 23:34:47', 1),
('GULBRANSEN / $16,000', 'musicalpianoforte@hotmail.com', '16000.00', 'vertical', 'Piano en venta marca GULBRANSEN<br />\\r\\nMaquinaria seminueva<br />\\r\\nFabricado con fina madera de cedro<br />\\r\\nExcelente sonido<br />\\r\\nBaiz original<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nGarantía en cabezal y tabla armónica<br />\\r\\nEnvíos a toda la república a un costo muy bajo<br />\\r\\nNúmero de serie 439030', 'catalogo_img/IMG_3778.jpg', 'IMG_3778.jpg', '2016-05-04 00:42:07', 1),
('HALLET DAVIS / $15,000', 'musicalpianoforte@hotmail.com', '15000.00', 'vertical', 'Venta de piano marca HALLET AND DAVIS<br />\\r\\nExcelente piano fabricado con fina madera de nogal<br />\\r\\nBaiz original<br />\\r\\nPerfecto estado de maquinaria<br />\\r\\nMuy buen sonido<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nSe realizan envíos a cualquier parte de México aun costo muy económico<br />\\r\\nNúmero de serie 160706<br />\\r\\n', 'catalogo_img/IMG_3782.jpg', 'IMG_3782.jpg', '2016-05-04 00:57:09', 1),
('HALLET DAVIS / $16,000', 'musicalpianoforte@hotmail.com', '16000.00', 'vertical', 'Venta de piano marca HALLET AND DAVIS<br />\\r\\nMaquinaria seminueva<br />\\r\\nCuenta con afinación a tono 440 hz<br />\\r\\nSu baiz es original<br />\\r\\nEl sonido es excelente<br />\\r\\nGarantizado en cabezal y tabla armónica<br />\\r\\nNúmero de serie 284904<br />\\r\\nHacemos envíos económicos a cualquier parte de la república', 'catalogo_img/IMG_3792.jpg', 'IMG_3792.jpg', '2016-05-04 01:39:56', 1),
('HANES / $16,000', 'musicalpianoforte@hotmail.com', '16000.00', 'vertical', 'Piano en venta de marca HANES<br />\\r\\nNúmero de serie 236330<br />\\r\\nFabricado con madera de nogal<br />\\r\\nExcelente sonido<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nMaquinaria seminueva<br />\\r\\nCuenta con baiz original<br />\\r\\nGarantía en cabezal y tabla armónica<br />\\r\\nSe realizan envíos a toda la república a un costo muy bajo<br />\\r\\n', 'catalogo_img/IMG_3777.jpg', 'IMG_3777.jpg', '2016-05-04 00:28:24', 1),
('HARDMAN / $20,000', 'musicalpianoforte@hotmail.com', '20000.00', 'vertical', 'Piano en venta marca HARDMAN<br />\\r\\nMaquinaria seminueva<br />\\r\\nBaiz original<br />\\r\\nExcelente sonido<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nGarantia en cabezal y tabla armónica<br />\\r\\nPara conocedores<br />\\r\\nEnvíos a toda la república a un costo muy bajo<br />\\r\\n', 'catalogo_img/IMG_3754.jpg', 'IMG_3754.jpg', '2016-05-03 23:57:30', 1),
('HARDMAN / $35,000.', 'musicalpianoforte@hotmail.com', '35000.00', 'cola', 'Piano en venta<br />\\r\\nPrecioso piano de 1/4 de cola de la reconocida marca HARDMAN<br />\\r\\nCuenta con dos años de garantia en cabezal y tabla armónica<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nExcelente sonido de concierto<br />\\r\\nIdeal para concertistas<br />\\r\\nElegante color blanco<br />\\r\\nPerfecto para conservatorios<br />\\r\\nSe envía a cualquier lugar de la república a un costo muy bajo<br />\\r\\n ', 'catalogo_img/IMG_3721.JPG', 'IMG_3721.JPG', '2016-05-04 02:30:00', 1),
('KAWAI / $200,000.', 'musicalpianoforte@hotmail.com', '200000.00', 'cola', 'Piano de cola en venta marca KAWAI<br />\\r\\nNo. Serie 2184910<br />\\r\\n1.55 Metros de cola<br />\\r\\nImpecable, practicamente nuevo<br />\\r\\nExcelente sonido<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nMaquinaria seminueva<br />\\r\\nColor negro brillante<br />\\r\\nGarantizado dos años en cabezal y tabla armónica<br />\\r\\nIdeal para concertistas<br />\\r\\nSe realizan envíos a toda la república a un costo muy económico', 'catalogo_img/KW03.jpg', 'KW03.jpg', '2016-05-12 21:51:18', 1),
('Kawai / $250,000.', 'musicalpianoforte@hotmail.com', '250000.00', 'cola', 'Piano de cola en venta<br />\\r\\nPrecioso piano de 1/4 de cola de la reconocida marca KAWAI<br />\\r\\nCuenta con dos años de garantía en cabezal y tabla armónica<br />\\r\\nHermoso color negro brillante<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nExcelente sonido de concierto<br />\\r\\nIdeal para concertistas<br />\\r\\nCuenta con sistema disk funcionando excelente, el cual permite reproducir canciones de manera autonoma<br />\\r\\nSe envía a cualquier lugar de la república a un costo muy bajo', 'catalogo_img/IMG_3678.JPG', 'IMG_3678.JPG', '2016-05-04 02:15:18', 1),
('KIMBALL / $20,000', 'musicalpianoforte@hotmail.com', '20000.00', 'vertical', 'Piano en venta marca KIMBALL<br />\\r\\nExcelente piano vertical<br />\\r\\nMuy buen sonido<br />\\r\\nMaquinaria seminueva<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nGarantizado en cabezal y tabla armónica<br />\\r\\nSe envia a cualquier lugar de la república a un costo muy accesible<br />\\r\\nNúmero de serie<br />\\r\\n', 'catalogo_img/IMG_3780.jpg', 'IMG_3780.jpg', '2016-05-04 00:51:37', 1),
('KIMBALL / $50,000.', 'musicalpianoforte@hotmail.com', '50000.00', 'cola', 'Piano 1/4 de cola en venta<br />\\r\\nMarca KIMBALL<br />\\r\\nSu sonido es excelente<br />\\r\\nHa sido afinado a tono 440 hz<br />\\r\\nPerfectas condiciones<br />\\r\\nLa maquinaria es seminueva<br />\\r\\nIdeal para conservatorios y escuelas<br />\\r\\nEsta garantizado en cabezal y tabla armónica<br />\\r\\nRealizamos envíos a toda la república a un costo muy accesible', 'catalogo_img/IMG_3702.JPG', 'IMG_3702.JPG', '2016-05-05 23:04:03', 1),
('KNABE / $17,000', 'musicalpianoforte@hotmail.com', '17000.00', 'vertical', 'Venta de piano marca KNABE<br />\\r\\nMaquinaria seminueva<br />\\r\\nExcelente sonido<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nGarantia en cabezal y tabla armónica<br />\\r\\nHecho con finos cedros<br />\\r\\nEnvíos a toda la república a un costo muy bajo<br />\\r\\n', 'catalogo_img/IMG_3752.jpg', 'IMG_3752.jpg', '2016-05-03 23:30:40', 1),
('KOHLER & CAMPBELL / $16,000', 'musicalpianoforte@hotmail.com', '16000.00', 'vertical', 'Venta de piano marca KOHLER & CAMPBELL<br />\\r\\nNúmero de serie 678371<br />\\r\\nExcelente sonido<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nCuenta con maquinaria seminueva<br />\\r\\nBaiz original<br />\\r\\nGarantizado en cabezal y tabla armónica<br />\\r\\nSe realizan envíos a todo México a un costo muy bajo<br />\\r\\n', 'catalogo_img/IMG_3773.jpg', 'IMG_3773.jpg', '2016-05-04 00:09:00', 1),
('LINDEMAN / $45,000.', 'musicalpianoforte@hotmail.com', '45000.00', 'cola', 'Piano en venta<br />\\r\\nPrecioso piano marca LINDEMAN<br />\\r\\nReconocida marca a nivel mundial<br />\\r\\nMaquinaria seminueva<br />\\r\\nExcelente sonido<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nGarantia en cabezal y tabla armónica<br />\\r\\nPara gustos exigentes<br />\\r\\nColor negro brillante<br />\\r\\nEnvíos a toda la república a un costo muy bajo', 'catalogo_img/IMG_3736.JPG', 'IMG_3736.JPG', '2016-05-04 02:34:04', 1),
('Mason & Hamlin / $180,000.', 'musicalpianoforte@hotmail.com', '180000.00', 'cola', 'Excelente piano de cola en venta<br />\\r\\nDe la reconocida marca MASON & HAMLIN<br />\\r\\nIncreible sonido<br />\\r\\nHa sido afinado a tono 440 hz<br />\\r\\nSu maquinaria es seminueva, practicamente nuevo<br />\\r\\nIdeal para conservatorios y auditorios<br />\\r\\nNúmero de serie 41334<br />\\r\\nCuenta con garantía de dos años en cabezal y tabla armónica<br />\\r\\nSe realizan envíos a toda la república a un costo muy bajo', 'catalogo_img/MH07.JPG', 'MH07.JPG', '2016-05-12 22:01:20', 1),
('MILTON / $15,000', 'musicalpianoforte@hotmail.com', '15000.00', 'vertical', 'Piano en venta marca MILTON<br />\\r\\nNúmero de serie 575716<br />\\r\\nCuenta con afinación a tono 440 hz<br />\\r\\nExcelente sonido<br />\\r\\nGarantizado en cabezal y tabla armónica<br />\\r\\nMaquinaria seminueva<br />\\r\\nBaiz original<br />\\r\\nFabricado con finos cedros <br />\\r\\nRealizamos envíos a toda la república a un costo muy económico<br />\\r\\n', 'catalogo_img/IMG_3775.jpg', 'IMG_3775.jpg', '2016-05-04 00:13:55', 1),
('NN / $14,000', 'musicalpianoforte@hotmail.com', '14000.00', 'vertical', 'Precioso piano en venta<br />\\r\\nFabricado con fino cedro<br />\\r\\nSe desconoce la marca del piano<br />\\r\\nCuenta con maquinaria seminueva<br />\\r\\nBaiz original<br />\\r\\nHa sido afinado a tono 440 hz<br />\\r\\nExcelente sonido<br />\\r\\nNúmero de serie 213194<br />\\r\\nGarantizado en cabezal y tabla armónica<br />\\r\\nSe realizan envíos económicos a cualquier parte de México', 'catalogo_img/IMG_3786.jpg', 'IMG_3786.jpg', '2016-05-04 01:45:02', 1),
('OLV-16/3789', 'musicalpianoforte@hotmail.com', '15000.00', 'vertical', 'Piano en venta marca HALLET AND DAVIS<br />\\r\\nExcelente maquinaria<br />\\r\\nBarniz original<br />\\r\\nMuy buen sonido<br />\\r\\nHa sido afinado a tono 440 hz<br />\\r\\nNúmero de serie 44240<br />\\r\\nSe realizan envíos a cualquier parte de México a un costo muy accesible<br />\\r\\nCuenta con garantía en cabezal y tabla armónica', 'catalogo_img/IMG_3789.jpg', 'IMG_3789.jpg', '2016-05-04 01:36:43', 1),
('OLV3785 / MILTON / $15,000', 'musicalpianoforte@hotmail.com', '15000.00', 'vertical', 'Piano en venta marca MILTON<br />\\r\\nMuy buen sonido<br />\\r\\nCuenta con afinación a tono 440 hz<br />\\r\\nSu maquinaria es seminueva<br />\\r\\nBaiz original<br />\\r\\nGarantizado en cabezal y tabla armónica<br />\\r\\nNúmero de serie 647505<br />\\r\\nSe hacen envíos a todo México a costos muy económicos<br />\\r\\n', 'catalogo_img/IMG_3785.jpg', 'IMG_3785.jpg', '2016-05-04 01:14:31', 1),
('OLV3787 / BALDWIN / $15,000', 'musicalpianoforte@hotmail.com', '15000.00', 'vertical', 'Venta de piano marca BALDWIN <br />\\r\\nPiano con maquinaria seminueva <br />\\r\\nEl baiz es original<br />\\r\\nExcelente sonido <br />\\r\\nCuenta con afinación a tono 440 hz <br />\\r\\nGarantizado en cabezal y tabla armónica <br />\\r\\nNúmero de serie 317569<br />\\r\\nSe realizan envíos a toda la republica a un costo muy económico ', 'catalogo_img/IMG_3787.jpg', 'IMG_3787.jpg', '2016-05-04 01:33:51', 1),
('Schafer & Sons / $85,000.', 'musicalpianoforte@hotmail.com', '85000.00', 'cola', 'Precioso piano de cola en venta<br />\\r\\nDe la reconocida marca SCHAFER & SONS<br />\\r\\nCon un valor de $85,000<br />\\r\\nPracticamente nuevo<br />\\r\\nCuenta con dos años de garantia en cabezal y tabla armónica<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nExcelente sonido de concierto<br />\\r\\nIdeal para concertistas<br />\\r\\nImpecable<br />\\r\\nFino poliester', 'catalogo_img/SSG7.JPG', 'SSG7.JPG', '2016-05-12 22:59:50', 1),
('Schafer & Sons / $95,000.', 'musicalpianoforte@hotmail.com', '95.00', 'cola', 'Precioso piano de la reconocida marca SCHAFER & SONS<br />\\r\\n1.75 metros de cola<br />\\r\\nMaquinaria seminueva<br />\\r\\nPracticamente nuevo<br />\\r\\nCuenta con dos años de garantia en cabezal y tabla armónica<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nExcelente sonido de concierto<br />\\r\\nIdeal para concertistas<br />\\r\\nSe envía a cualquier lugar de la república a un costo muy bajo<br />\\r\\nNo. Serie HHGG0276', 'catalogo_img/SSB6.JPG', 'SSB6.JPG', '2016-05-12 22:56:20', 1),
('SOHMER / $50,000.', 'musicalpianoforte@hotmail.com', '50000.00', 'cola', 'Piano de cola en venta<br />\\r\\nDe la reconocida marca SOHMER<br />\\r\\nExcelente sonido<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nEsta garantizado en cabezal y tabla armónica<br />\\r\\nIdeal para conocedores y coleccionistas<br />\\r\\nSe realizan envíos a toda la república a un costo muy económico<br />\\r\\nFabricado de finos cedros', 'catalogo_img/IMG_3718.JPG', 'IMG_3718.JPG', '2016-05-05 22:59:07', 1),
('STEINWAY & SONS / $380,000.', 'musicalpianoforte@hotmail.com', '380000.00', 'cola', 'Piano de cola en venta<br />\\r\\nPrecioso piano de 1/4 de cola de la reconocida marca STEINWAY & SONS modelo M<br />\\r\\nImpecable<br />\\r\\nCuenta con dos años de garantia en cabezal y tabla armónica<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nExcelente sonido de concierto<br />\\r\\nIdeal para concertistas<br />\\r\\nSe envía a cualquier lugar de la república a un costo muy bajo<br />\\r\\nImpecable', 'catalogo_img/IMG_3724.JPG', 'IMG_3724.JPG', '2016-05-05 23:15:42', 1),
('Steinway & Sons / $400,000.', 'musicalpianoforte@hotmail.com', '400000.00', 'cola', 'VENTA DE PIANO STEINWAY AND SONS<br />\\r\\nLA MEJOR MARCA DEL MUNDO AL MEJOR PRECIO.<br />\\r\\nSISTEMA DISK INCLUIDO<br />\\r\\nIMPECABLE Y 100% ORIGINAL<br />\\r\\nAFINADO A TONO 440 HZ.<br />\\r\\nEXCELENTE SONIDO DE CONCIERTO<br />\\r\\nPARA GUSTOS EXIGENES<br />\\r\\nIDEAL PARA CONSERVATORIOS,  AUDITORIOS Y SALAS DE MUSICA<br />\\r\\nSERIE 22106<br />\\r\\nMIDE 6 PIES 2 PULGADAS DE LARGO<br />\\r\\nGARANTIZADO 5 AÑOS EN CABEZAL Y CLAVIJAS.<br />\\r\\nMAQUINARIA IMPECABLE,  PRACTICAMENTE NO FUE USADO<br />\\r\\n', 'catalogo_img/IMG_3662.JPG', 'IMG_3662.JPG', '2016-05-05 23:27:36', 1),
('WEBER / $200,000.', 'musicalpianoforte@hotmail.com', '200000.00', 'cola', 'Piano de cola en venta<br />\\r\\nPrecioso piano de 1/4 de cola de la reconocida marca WEBER<br />\\r\\nCuenta con dos años de garantia en cabezal y tabla armónica<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nExcelente sonido de concierto<br />\\r\\nIdeal para concertistas<br />\\r\\nImpecable<br />\\r\\nFino poliester<br />\\r\\nElegante color hueso<br />\\r\\nCuenta con sistema Disk funcionando excelente<br />\\r\\nSe envía a cualquier lugar de la república a un costo muy bajo', 'catalogo_img/HHQN0xdR.jpg', 'HHQN0xdR.jpg', '2016-05-06 00:17:22', 1),
('WHITNEY / $15,000', 'musicalpianoforte@hotmail.com', '15000.00', 'vertical', 'Venta de piano marca WHITNEY<br />\\r\\nMaquinaria seminueva<br />\\r\\nHa sido afinado a tono 440 hz<br />\\r\\nCuenta con su baiz original<br />\\r\\nEl sonido es excelente<br />\\r\\nGarantía en cabezal y tabla armónica<br />\\r\\nNúmero de serie 607173<br />\\r\\nRealizamos envíos a toda la república a un costo muy accesible<br />\\r\\n<br />\\r\\n', 'catalogo_img/IMG_3784.jpg', 'IMG_3784.jpg', '2016-05-04 01:05:07', 1),
('WINTER / $16,000', 'musicalpianoforte@hotmail.com', '16000.00', 'vertical', 'Venta de piano marca WINTER<br />\\r\\nMaquinaria seminueva<br />\\r\\nFabricado con fina madera de nogal<br />\\r\\nExcelente sonido<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nGarantia en cabezal y tabla armónica<br />\\r\\nEnvíos a toda la república a un costo muy bajo', 'catalogo_img/IMG_3747 copy.jpg', 'IMG_3747 copy.jpg', '2016-05-03 23:20:24', 1),
('Yamaha / $220,000.', 'musicalpianoforte@hotmail.com', '220000.00', 'cola', 'Precioso piano de la marca YAMAHA en venta<br />\\r\\n1.80 Metros de cola<br />\\r\\nCon un valor de $220,000.<br />\\r\\nCuenta con dos años de garantia en cabezal y tabla armónica<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nExcelente sonido de concierto<br />\\r\\nIdeal para concertistas<br />\\r\\nSe envía a cualquier lugar de la república a un costo muy bajo<br />\\r\\nImpecable<br />\\r\\nPracticamente nuevo', 'catalogo_img/YH06.JPG', 'YH06.JPG', '2016-05-12 23:01:14', 1),
('Young Chang / $120,000.', 'musicalpianoforte@hotmail.com', '220000.00', 'cola', 'Venta de piano de cola<br />\\r\\n1.60 Metros de cola<br />\\r\\nHermoso piano marca YOUNG CHANG<br />\\r\\nExcelente sonido<br />\\r\\nAfinado a tono 440 hz<br />\\r\\nMaquinaria seminueva, practicamente nuevos<br />\\r\\nElegante color blanco brillante<br />\\r\\nImpecable<br />\\r\\nGarantizado dos años en cabezal y tabla armónica<br />\\r\\nIdeal para concertistas<br />\\r\\nSe realizan envíos a toda la república a un costo muy económico', 'catalogo_img/YC02.JPG', 'YC02.JPG', '2016-05-12 23:02:16', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipo` int(2) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `password`, `tipo`) VALUES
(1, 'admin', '$P$BSxYn3vyGm9GFIvQyJp/ScDDxLMIWb/', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
