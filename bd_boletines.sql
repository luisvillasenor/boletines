-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2015 at 05:08 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_boletines`
--

-- --------------------------------------------------------

--
-- Table structure for table `alcance`
--

CREATE TABLE IF NOT EXISTS `alcance` (
`id` int(11) NOT NULL,
  `alcance` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alcance`
--

INSERT INTO `alcance` (`id`, `alcance`) VALUES
(1, 'Local'),
(2, 'Nacional');

-- --------------------------------------------------------

--
-- Table structure for table `boletines`
--

CREATE TABLE IF NOT EXISTS `boletines` (
`id` int(11) NOT NULL,
  `numero_boletin` int(11) NOT NULL,
  `titulo_boletin` varchar(254) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boletines`
--

INSERT INTO `boletines` (`id`, `numero_boletin`, `titulo_boletin`) VALUES
(29, 150, 'EL TURISMO JUVENIL SERÁ UN IMPORTANTE MERCADO PARA AGUASCALIENTES DURANTE EL PROGRAMA VACACIONAL 201'),
(32, 528, 'Aeropuerto de Aguascalientes cierra 2014 superando cifras históricas en tráfico de pasajeros'),
(31, 527, 'En marcha la edición 168 de la Feria Regional de Rincón de Romos'),
(24, 149, 'SE REDOBLAN ESFUERZOS POR LOGRAR EL MAYOR NIVEL DE PROFESIONALIZACIÓN DEL SECTOR TURÍSTICO'),
(25, 148, 'A PARTIR DE HOY AMERICAN AIRLINES A TRAVÉS DE SU FILIAL AMERICAN EAGLE  INCREMENTA UNA FRECUENCIA MÁ'),
(30, 526, 'Un viaje de fe y devoción en el recorrido del Señor de las Angustias'),
(33, 529, 'Se inculca orgullo aguascalentense en los niños al conocer principales atractivos turísticos'),
(34, 531, 'Se fortalecerá Aguascalientes como destino cultural'),
(35, 532, 'Se invita a todos los niños para participar en el 12º Concurso Nacional de Cultura Turística Infanti'),
(36, 530, 'Reportaje de Candidatas a Reina de la FNSM'),
(37, 1, 'Reportaje del Sr. de las Angustias'),
(38, 2, 'Reportaje Feria Regional de Rincón de Romos'),
(39, 4, 'Reportaje Museo Posada'),
(40, 5, 'Reportaje La Mestiza'),
(41, 0, 'EJEMPLO DE PRUEBA'),
(42, 3, 'EJEMPLO DE PRUEBA2'),
(43, 11, 'xxxx'),
(44, 25, 'OTRO COMUNICADO DE PREUBA'),
(45, 123, 'Otro Comunicado para Seguimiento');

-- --------------------------------------------------------

--
-- Table structure for table `medios`
--

CREATE TABLE IF NOT EXISTS `medios` (
`id` int(11) NOT NULL COMMENT 'Numero que identifica al medio',
  `nombremedio` varchar(45) NOT NULL COMMENT 'es el nombre de cada medio',
  `tipomedio` int(11) NOT NULL,
  `alcance` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medios`
--

INSERT INTO `medios` (`id`, `nombremedio`, `tipomedio`, `alcance`) VALUES
(1, 'El Heraldo', 1, 1),
(2, 'El Sol Del Centro', 1, 1),
(3, 'Hidrocalido', 1, 1),
(4, 'Pagina 24', 1, 1),
(5, 'La jornada', 1, 1),
(6, 'Aguas', 1, 1),
(7, 'Radio Grupo', 2, 1),
(8, 'Radio Universal', 2, 1),
(9, 'Grupo Rad. ZER', 2, 1),
(10, 'Ags TV', 2, 1),
(11, 'Televisa', 2, 1),
(12, 'Cable Canal', 2, 1),
(13, 'TV Azteca', 2, 1),
(15, 'Ultravision', 2, 1),
(16, 'CV+TV', 2, 1),
(17, 'Gigacable', 2, 1),
(18, 'TV UAA', 2, 1),
(19, 'Sexenio', 1, 1),
(21, 'El Ejemplo Escrito', 1, 2),
(22, 'Otro Medio Escrito Nacional', 1, 2),
(23, 'Otro Medio Electronico Nacional', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `seguimiento_electronicos`
--

CREATE TABLE IF NOT EXISTS `seguimiento_electronicos` (
`id` int(11) NOT NULL,
  `numero_boletin` int(11) NOT NULL,
  `teasser` int(1) NOT NULL,
  `nota` int(1) NOT NULL,
  `capsula` int(1) NOT NULL,
  `corteinfo` int(1) NOT NULL,
  `audio` int(1) NOT NULL,
  `imagen` int(1) NOT NULL,
  `calificacion` int(1) NOT NULL,
  `nombremedio` varchar(25) NOT NULL,
  `comentarios` varchar(150) NOT NULL,
  `fecha` date NOT NULL,
  `Evidencia` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seguimiento_electronicos`
--

INSERT INTO `seguimiento_electronicos` (`id`, `numero_boletin`, `teasser`, `nota`, `capsula`, `corteinfo`, `audio`, `imagen`, `calificacion`, `nombremedio`, `comentarios`, `fecha`, `Evidencia`) VALUES
(25, 0, 1, 0, 0, 0, 0, 1, 0, '7', '', '2015-02-04', ''),
(26, 3, 0, 0, 0, 0, 0, 1, 1, '11', '0', '2015-02-17', '0'),
(24, 0, 1, 0, 0, 0, 0, 1, 1, '8', '      ', '2015-02-04', '0'),
(23, 0, 1, 1, 1, 1, 1, 1, 1, '7', '      ', '2015-02-04', ''),
(22, 532, 0, 1, 0, 0, 0, 0, 0, '18', '    ', '2015-01-28', '0'),
(21, 150, 0, 0, 0, 0, 1, 0, 0, '10', '        ', '2012-06-25', '0'),
(27, 3, 0, 0, 1, 0, 0, 0, 1, '7', '', '2015-03-02', ''),
(28, 3, 1, 1, 0, 0, 0, 0, 1, '7', '0', '2015-03-02', '0');

-- --------------------------------------------------------

--
-- Table structure for table `seguimiento_heraldo`
--

CREATE TABLE IF NOT EXISTS `seguimiento_heraldo` (
`id` int(11) NOT NULL,
  `numero_boletin` int(11) NOT NULL,
  `pp` int(11) NOT NULL,
  `interiores` int(11) NOT NULL,
  `columna` int(11) NOT NULL,
  `foto` int(11) NOT NULL,
  `texto` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `nombremedio` varchar(25) NOT NULL,
  `comentarios` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `Evidencia` varchar(100) NOT NULL,
  `publicado` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seguimiento_heraldo`
--

INSERT INTO `seguimiento_heraldo` (`id`, `numero_boletin`, `pp`, `interiores`, `columna`, `foto`, `texto`, `calificacion`, `nombremedio`, `comentarios`, `fecha`, `Evidencia`, `publicado`) VALUES
(112, 3, 1, 0, 0, 0, 0, 1, '19', '0', '2015-01-28', '0', 0),
(110, 3, 0, 1, 1, 0, 0, 0, '4', ' TEXTO DE EJEMPLO ', '2015-01-28', '0', 0),
(113, 0, 1, 0, 0, 0, 0, 1, '1', '0', '2015-03-02', '0', 0),
(97, 530, 1, 0, 0, 0, 0, 0, '2', '0', '2015-01-22', '0', 0),
(83, 526, 0, 0, 1, 0, 1, 1, '1', '    ', '2012-06-10', '0', 0),
(84, 25, 1, 1, 1, 1, 1, 1, '4', '  PRIMERA PLANA EN EL HERALDO  ', '2012-06-15', 'resumen 15 jun 12.doc', 0),
(85, 25, 0, 1, 0, 1, 1, 1, '3', '', '2012-06-15', 'resumen 15 jun 12.doc', 0),
(94, 526, 0, 0, 0, 0, 0, 1, '5', '', '2015-01-10', '0', 0),
(95, 526, 0, 0, 0, 0, 0, 1, '2', '', '2015-01-11', '0', 0),
(109, 0, 1, 1, 1, 1, 1, 1, '19', '0', '2015-01-28', '0', 0),
(93, 526, 0, 0, 0, 0, 0, 1, '3', 'Fueron Portada de Suplemento y 4 planas más', '2015-01-11', '0', 0),
(92, 150, 0, 1, 0, 1, 1, 1, '5', '  ', '2012-06-26', '0', 0),
(114, 3, 0, 1, 1, 0, 0, 1, '1', '0', '2015-03-02', '0', 0),
(115, 3, 1, 1, 0, 0, 0, 1, '21', '0', '2015-03-02', '0', 0),
(116, 123, 1, 0, 0, 1, 1, 1, '22', '0', '2015-05-19', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_medios`
--

CREATE TABLE IF NOT EXISTS `tipo_medios` (
`id` int(11) NOT NULL,
  `tipo_medio` varchar(45) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipo_medios`
--

INSERT INTO `tipo_medios` (`id`, `tipo_medio`) VALUES
(1, 'Escrito'),
(2, 'Electronico');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
`id` int(11) NOT NULL,
  `img_name` varchar(32) NOT NULL,
  `thumb_name` varchar(32) NOT NULL,
  `ext` varchar(8) NOT NULL,
  `upload_date` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `idSegEle` int(11) NOT NULL COMMENT 'ID del Seguimiento Electronico',
  `idSegEsc` int(11) NOT NULL COMMENT 'ID Seguimiento Escrito'
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `img_name`, `thumb_name`, `ext`, `upload_date`, `status`, `idSegEle`, `idSegEsc`) VALUES
(33, 'scene31', 'scene31_thumb', '.jpg', '1423684517', 0, 0, 0),
(34, 'scene2', 'scene2_thumb', '.jpg', '1423684536', 1, 0, 112),
(35, 'scene1', 'scene1_thumb', '.jpg', '1423684553', 1, 0, 112),
(36, 'TURISMO_WEB', 'TURISMO_WEB_thumb', '.png', '1423688631', 0, 0, 0),
(37, 'scene32', 'scene32_thumb', '.jpg', '1423688679', 0, 0, 0),
(39, 'scene12', 'scene12_thumb', '.jpg', '1424195723', 0, 0, 111),
(40, '001', '001_thumb', '.JPG', '1424196051', 0, 0, 111),
(41, 'Strike', 'Strike_thumb', '.jpg', '1424200992', 1, 26, 0),
(42, 'Equus', 'Equus_thumb', '.jpg', '1424203318', 0, 0, 112),
(43, '0011', '0011_thumb', '.JPG', '1424272081', 1, 26, 0),
(44, 'Sand_Dune', 'Sand_Dune_thumb', '.jpg', '1424379367', 0, 22, 0),
(45, 'scene33', 'scene33_thumb', '.jpg', '1426720050', 1, 0, 97),
(46, 'SistemaSeguimientoComunicados', 'SistemaSeguimientoComunicados_th', '.png', '1427304587', 0, 0, 0),
(47, 'ssc', 'ssc_thumb', '.png', '1427385339', 1, 0, 97),
(48, 'snapshot1', 'snapshot1_thumb', '.png', '1432044276', 1, 0, 114),
(49, 'IMG_1538', 'IMG_1538_thumb', '.JPG', '1432045055', 1, 0, 116);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alcance`
--
ALTER TABLE `alcance`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boletines`
--
ALTER TABLE `boletines`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `numero_boletin` (`numero_boletin`);

--
-- Indexes for table `medios`
--
ALTER TABLE `medios`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seguimiento_electronicos`
--
ALTER TABLE `seguimiento_electronicos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seguimiento_heraldo`
--
ALTER TABLE `seguimiento_heraldo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_medios`
--
ALTER TABLE `tipo_medios`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alcance`
--
ALTER TABLE `alcance`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `boletines`
--
ALTER TABLE `boletines`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `medios`
--
ALTER TABLE `medios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Numero que identifica al medio',AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `seguimiento_electronicos`
--
ALTER TABLE `seguimiento_electronicos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `seguimiento_heraldo`
--
ALTER TABLE `seguimiento_heraldo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `tipo_medios`
--
ALTER TABLE `tipo_medios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
