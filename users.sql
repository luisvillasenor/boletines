-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-03-2015 a las 10:24:49
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_boletines`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `email_notify` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_ult_acceso` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `grupo` varchar(13) NOT NULL,
  `id_coord` int(11) NOT NULL COMMENT 'Coordinacion',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Usuarios Miembros del Sistema' AUTO_INCREMENT=47 ;

--
-- Volcar la base de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `email_address`, `email_notify`, `password`, `fecha_creacion`, `fecha_ult_acceso`, `grupo`, `id_coord`) VALUES
(1, 'Luis Gabriel', 'Villasenor Alarcon', 'luisvillasenor@yahoo.com', 'luis.villasenor@aguascalientes.gob.mx', 'fe3bc49a3f2ce06fd948086cf520a0bc0e08e0c7', '2013-04-11', '2015-02-04 13:01:56', 'coordinador', 7),
(19, 'Ana', 'Jimenez', 'anajimenez@app.com', 'ana.jimenez@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-08-25 13:39:29', 'gestor', 0),
(18, 'Tagozam', 'Salazar', 'tagozam@app.com', 'tagosam.salazar@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-09-25 08:55:34', 'gestor', 0),
(17, 'Susana', 'Calderon', 'susanacalderon@app.com', 'susana.calderon@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-09-25 08:51:53', 'gestor', 0),
(16, 'APP', 'CEDULA', 'appcedula@app.com', 'luis.villasenor@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-02-17', '2015-02-25 16:43:48', 'administrador', 0),
(20, 'Eduardo', 'Gomez', 'eduardogomez@app.com', 'eduardo.gomez@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-08-11 16:29:54', 'gestor', 0),
(21, 'Rabin', 'Garcia', 'rabingarcia@app.com', 'rabindranath.garcia@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-09-05 09:50:35', 'administrador', 0),
(22, 'Luz', 'Marquez', 'luzmarquez@app.com', 'luzmarquezp@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-06-10 00:00:00', 'gestor', 0),
(23, 'Liliana', 'Reynoso', 'lilianareynoso@app.com', 'liliana.reynoso@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-09-15 14:10:35', 'gestor', 0),
(24, 'Leticia', 'Garcia', 'leticiagarcia@app.com', 'leticia.garcia@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-08-25 14:58:22', 'gestor', 0),
(25, 'Oscar', 'Castrejon', 'oscarcastrejon@app.com', 'oscar.castrejon@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-07-25 15:35:40', 'gestor', 0),
(26, 'Solange', 'Gorocica', 'solange@app.com', 'solange.gorocica@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-09-02 14:20:33', 'coordinador', 3),
(27, 'Veronica', 'Serafin', 'veronicaserafin@app.com', 'veronica.serafin@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-08-25 14:03:48', 'gestor', 0),
(28, 'Carolina', 'Galera', 'carolinagalera@app.com', 'carolina.galera@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-09-05 13:16:48', 'gestor', 0),
(29, 'Blanca', 'Rita', 'blancarita@app.com', 'blanca.delatorre@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-09-25 13:57:14', 'gestor', 0),
(30, 'Gerardo', 'Ariza', 'gerardoariza@app.com', 'gerardo.ariza@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-08-20 17:14:55', 'gestor', 0),
(31, 'Carolina', 'Hernandez', 'carito@app.com', 'carolina.hernandez@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-08-14 12:01:55', 'gestor', 0),
(32, 'Alejandra', 'Rodriguez', 'alerodriguez@app.com', 'alejandra.rodriguez@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-09-01 14:45:24', 'coordinador', 6),
(33, 'Alfredo', 'Padilla', 'alfredopadilla@app.com', 'jose.padilla@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-08-22 12:37:30', 'coordinador', 1),
(34, 'Blanca', 'Martinez', 'blancamartinez@app.com', 'blanca.martinez@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-08-26 13:40:50', 'coordinador', 2),
(35, 'Oscar', 'Morales', 'oscarmorales@app.com', 'oscar.morales@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-06-10 00:00:00', 'gestor', 0),
(36, 'Jorge', 'Andrade', 'jorgeandrade@app.com', 'jorge.andrade@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-09-10 19:16:04', 'administrador', 0),
(37, 'Selene', 'Maldonado', 'selenemaldonado@app.com', 'selene.maldonado@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-06-10 00:00:00', 'gestor', 0),
(38, 'Humberto', 'Moro', 'humbertomoro@app.com', 'humberto.moro@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-09-15 14:47:22', 'gestor', 0),
(39, 'Alfredo', 'Barba', 'alfredobarba@app.com', '', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-10', '2014-06-10 00:00:00', 'gestor', 0),
(40, 'Julio', 'Ramirez', 'julioramirez@app.com', 'julio.ramirez@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-11', '2014-08-28 09:12:12', 'administrador', 0),
(41, 'Alejandra', 'Marquez', 'alemarquez@app.com', 'alejandra.marquez@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-11', '2014-06-11 00:00:00', 'gestor', 0),
(42, 'Laura', 'Cordero', 'lauracordero@app.com', 'rabindranath.garcia@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-16', '2014-08-26 13:39:13', 'gestor', 0),
(43, 'Hector', 'Montes', 'hectormontes@appcedula.com', 'hector.montes@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-06-18', '2014-08-25 13:58:06', 'gestor', 0),
(44, 'TEST', 'TEST', 'TEST@app.com', '', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-07-04', '2014-07-04 15:20:16', 'coordinador', 7),
(45, 'Juan', 'De Dios Godoy', 'juangodoy@app.com', '', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-07-04', '2014-07-04 15:23:47', 'coordinador', 3),
(46, 'Leslie', 'Atilano', 'leslieatilano@app.com', 'leslie.atilano@aguascalientes.gob.mx', '61d9e6a73a4af25c650d07cd37609ff4bbb07c86', '2014-07-07', '2014-08-25 08:13:05', 'coordinador', 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
