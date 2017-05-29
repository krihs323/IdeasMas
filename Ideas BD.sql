-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2017 a las 06:07:38
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ideasplus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_por_idea`
--

CREATE TABLE IF NOT EXISTS `area_por_idea` (
`ID_AREAIDEA` int(11) NOT NULL,
  `ID_IDEA` int(11) NOT NULL,
  `ID_AREA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma`
--

CREATE TABLE IF NOT EXISTS `cronograma` (
`ID_CRONOGRAMA` int(11) NOT NULL,
  `ID_ESTUDIANTE` int(11) NOT NULL,
  `ID_DOCENTE` int(11) NOT NULL,
  `FECHA_INICIO` date NOT NULL,
  `FECHA_FIN` date NOT NULL,
  `HORA_INICIO` time NOT NULL,
  `HORA_FIN` time NOT NULL,
  `TITULO` varchar(100) NOT NULL,
  `DESCRIPCION` varchar(300) NOT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  `ID_IDEA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idea_log`
--

CREATE TABLE IF NOT EXISTS `idea_log` (
`ID_IDEALOG` int(11) NOT NULL,
  `ID_IDEA` int(11) NOT NULL,
  `TITULO` varchar(250) DEFAULT NULL,
  `DESCRIPCION` text,
  `PRIVADO` tinyint(1) DEFAULT NULL,
  `AREA` varchar(30) DEFAULT NULL,
  `USUARIO_CREA` varchar(60) DEFAULT NULL,
  `ESTUDIANTE` varchar(60) DEFAULT NULL,
  `DOCENTE` varchar(60) DEFAULT NULL,
  `ESTADO` varchar(30) DEFAULT NULL,
  `FECHA` datetime DEFAULT NULL,
  `USUARIO` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ACCION` varchar(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `idea_log`
--

INSERT INTO `idea_log` (`ID_IDEALOG`, `ID_IDEA`, `TITULO`, `DESCRIPCION`, `PRIVADO`, `AREA`, `USUARIO_CREA`, `ESTUDIANTE`, `DOCENTE`, `ESTADO`, `FECHA`, `USUARIO`, `ACCION`) VALUES
(1, 0, 'PEPE', 'PELUA', 1, '2', '0', '1', '1', '1', '2017-05-28 22:57:00', 'root@localhost', NULL),
(2, 0, 'WEWQQ', '23123123121', 1, '2', '0', '1', '1', '1', '2017-05-28 23:00:44', 'root@localhost', 'INSERT'),
(3, 0, 'TRTERTER', '', 0, '0', '0', NULL, NULL, '0', '2017-05-28 23:01:00', 'root@localhost', 'INSERT'),
(4, 11, 'TRTERTER', '', 0, '0', '0', NULL, NULL, '0', '2017-05-28 23:01:25', 'root@localhost', 'UPDATE'),
(5, 11, 'TRTERTER', 'FFFFFFFFF', 1, '2', '1', '1', '1', '1', '2017-05-28 23:03:26', 'root@localhost', 'UPDATE'),
(6, 11, 'ANTONIO DEL MIGUEL', 'PERRR', 1, '2', '1', '1', '1', '1', '2017-05-28 23:03:43', 'root@localhost', 'UPDATE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_area_interes`
--

CREATE TABLE IF NOT EXISTS `tb_area_interes` (
`ID_AREAINTERES` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `DESCRIPCION` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tb_area_interes`
--

INSERT INTO `tb_area_interes` (`ID_AREAINTERES`, `NOMBRE`, `DESCRIPCION`) VALUES
(2, 'Tecnologiao', 'tecnologias'),
(3, 'diselo', 'ththtgt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_estado`
--

CREATE TABLE IF NOT EXISTS `tb_estado` (
`ID_ESTADO` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `TIPO` char(1) NOT NULL,
  `VALOR` smallint(6) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tb_estado`
--

INSERT INTO `tb_estado` (`ID_ESTADO`, `NOMBRE`, `TIPO`, `VALOR`) VALUES
(1, 'false', '0', 0),
(2, 'true', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_idea`
--

CREATE TABLE IF NOT EXISTS `tb_idea` (
`ID_IDEA` int(11) NOT NULL,
  `TITULO` varchar(250) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `PRIVADO` tinyint(1) NOT NULL,
  `ID_AREA` int(11) NOT NULL,
  `ID_USUARIO_CREA` int(11) NOT NULL,
  `ID_ESTUDIANTE` int(11) DEFAULT NULL,
  `ID_DOCENTE` int(11) DEFAULT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  `FECHA_PUBLICACION` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `tb_idea`
--

INSERT INTO `tb_idea` (`ID_IDEA`, `TITULO`, `DESCRIPCION`, `PRIVADO`, `ID_AREA`, `ID_USUARIO_CREA`, `ID_ESTUDIANTE`, `ID_DOCENTE`, `ID_ESTADO`, `FECHA_PUBLICACION`) VALUES
(1, 'CRISTIAN', 'CR	', 2, 1, 0, NULL, NULL, 0, '0000-00-00'),
(2, 'dd', 'ddd', 1, 2, 0, NULL, NULL, 0, '0000-00-00'),
(3, 'dd', 'ddd', 1, 2, 0, NULL, NULL, 0, '0000-00-00'),
(4, 'dd', 'ddd', 1, 2, 0, NULL, NULL, 0, '0000-00-00'),
(5, 'dd', 'ddd', 1, 2, 0, NULL, NULL, 0, '0000-00-00'),
(6, 'gestor de chances', 'aplicacion para realizar chances via electronica', 1, 2, 0, 1, 1, 1, '2017-01-01'),
(7, 'dd', 'ddd', 1, 2, 0, NULL, NULL, 0, '0000-00-00'),
(8, 'RWERWER', '43424234234', 1, 2, 0, 1, 1, 1, '2017-01-01'),
(9, 'PEPE', 'PELUA', 1, 2, 0, 1, 1, 1, '2017-01-01'),
(10, 'WEWQQ', '23123123121', 1, 2, 0, 1, 1, 1, '2017-02-02'),
(11, 'LALO LANDA', 'PERRR', 1, 2, 1, 1, 1, 1, '2015-01-01');

--
-- Disparadores `tb_idea`
--
DELIMITER //
CREATE TRIGGER `idea_Trigger` AFTER UPDATE ON `tb_idea`
 FOR EACH ROW BEGIN
INSERT INTO idea_log (USUARIO, FECHA, ID_IDEA, TITULO, DESCRIPCION, PRIVADO, AREA, USUARIO_CREA, ESTUDIANTE, DOCENTE, ESTADO, ACCION)
VALUES (user(), now(), OLD.ID_IDEA, OLD.TITULO, OLD.DESCRIPCION, OLD.PRIVADO, OLD.ID_AREA, OLD.ID_USUARIO_CREA, OLD.ID_ESTUDIANTE, OLD.ID_DOCENTE, OLD.ID_ESTADO, 'UPDATE');
END
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `idea_log` BEFORE INSERT ON `tb_idea`
 FOR EACH ROW BEGIN
INSERT INTO idea_log (USUARIO, FECHA, ID_IDEA, TITULO, DESCRIPCION, PRIVADO, AREA, USUARIO_CREA, ESTUDIANTE, DOCENTE, ESTADO, ACCION)
VALUES (user(), now(), NEW.ID_IDEA, NEW.TITULO, NEW.DESCRIPCION, NEW.PRIVADO, NEW.ID_AREA, NEW.ID_USUARIO_CREA, NEW.ID_ESTUDIANTE, NEW.ID_DOCENTE, NEW.ID_ESTADO, 'INSERT');
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_rol`
--

CREATE TABLE IF NOT EXISTS `tb_rol` (
`ID_ROL` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `tb_rol`
--

INSERT INTO `tb_rol` (`ID_ROL`, `NOMBRE`) VALUES
(11, 'Profesor'),
(12, 'Estudiante'),
(16, 'Administrador'),
(17, 'klll');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
`ID_USUARIO` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `APELLIDO` varchar(30) NOT NULL,
  `DOCUMENTO` int(11) DEFAULT NULL,
  `TIPO_DOCUMENTO` varchar(20) DEFAULT NULL,
  `CORREO` varchar(60) NOT NULL DEFAULT '',
  `ID_ROL` int(11) DEFAULT NULL,
  `ID_ESTADO` int(11) DEFAULT NULL,
  `GENERO` char(1) DEFAULT NULL COMMENT 'M=Masculino;F=Femenino',
  `FECHA_NACIMIENTO` date DEFAULT NULL,
  `CONTRASENA` varchar(500) DEFAULT NULL,
  `TELEFONO` varchar(11) DEFAULT NULL,
  `CELULAR` varchar(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `tb_usuario`
--

INSERT INTO `tb_usuario` (`ID_USUARIO`, `NOMBRE`, `APELLIDO`, `DOCUMENTO`, `TIPO_DOCUMENTO`, `CORREO`, `ID_ROL`, `ID_ESTADO`, `GENERO`, `FECHA_NACIMIENTO`, `CONTRASENA`, `TELEFONO`, `CELULAR`) VALUES
(30, 'IIIIIIIIIIIIIIII', 'BOTINA', 0, '123456', 'cristian_botina@hotmail.com', 11, 2, 'M', '1989-03-23', 'Paraiso123', '3359441', '3188277354'),
(31, 'yuya', 'BOTINA', 456465456, 'cedula ciudadania', 'cristian_botina@hotmail1.com', 11, 1, 'M', '1989-03-23', 'Paraiso123', '3359441', '3188277354'),
(32, '3333', 'BOTINA', 456465456, 'cedula ciudadania', 'cristian_botina@hotmail2.com', 11, 1, 'M', '1989-03-23', 'Paraiso123', '3359441', '3188277354'),
(33, 'luis', 'aragon', 31987987, 'cedula', 'luis@gmail.com', 12, 2, 'M', '1989-12-31', '123456', '3549874', '3216549877'),
(34, 'micheal', 'rosero', 1143826532, 'CC', 'michael@gmail.com', 11, 2, 'M', '1989-03-19', '123456', '354444', '32145'),
(35, 'andres', 'pastrana', 123456, 'CC', 'andres@hotmail.com', 11, 1, '', '1989-02-02', '123456', '32345677', '321345678'),
(36, 'andres', 'pastrana', 123456, 'CC', 'andres@hotmail.com', 11, 1, 'F', '1989-02-02', '123456', '32345677', '321345678'),
(37, 'ddasdsad', '', 0, '', '', 0, 1, '', '0000-00-00', '', '', ''),
(38, 'cristian', '', 0, '', '', 0, 1, '', '0000-00-00', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area_por_idea`
--
ALTER TABLE `area_por_idea`
 ADD PRIMARY KEY (`ID_AREAIDEA`), ADD KEY `ID_IDEA` (`ID_IDEA`), ADD KEY `ID_AREA` (`ID_AREA`);

--
-- Indices de la tabla `cronograma`
--
ALTER TABLE `cronograma`
 ADD PRIMARY KEY (`ID_CRONOGRAMA`), ADD KEY `ID_ESTUDIANTE` (`ID_ESTUDIANTE`), ADD KEY `ID_DOCENTE` (`ID_DOCENTE`), ADD KEY `ID_ESTADO` (`ID_ESTADO`), ADD KEY `ID_IDEA` (`ID_IDEA`);

--
-- Indices de la tabla `idea_log`
--
ALTER TABLE `idea_log`
 ADD PRIMARY KEY (`ID_IDEALOG`);

--
-- Indices de la tabla `tb_area_interes`
--
ALTER TABLE `tb_area_interes`
 ADD PRIMARY KEY (`ID_AREAINTERES`);

--
-- Indices de la tabla `tb_estado`
--
ALTER TABLE `tb_estado`
 ADD PRIMARY KEY (`ID_ESTADO`);

--
-- Indices de la tabla `tb_idea`
--
ALTER TABLE `tb_idea`
 ADD PRIMARY KEY (`ID_IDEA`), ADD KEY `ID_AREA` (`ID_AREA`), ADD KEY `ID_USUARIO_CREA` (`ID_USUARIO_CREA`), ADD KEY `ID_ESTUDIANTE` (`ID_ESTUDIANTE`), ADD KEY `ID_DOCENTE` (`ID_DOCENTE`), ADD KEY `ID_ESTADO` (`ID_ESTADO`);

--
-- Indices de la tabla `tb_rol`
--
ALTER TABLE `tb_rol`
 ADD PRIMARY KEY (`ID_ROL`);

--
-- Indices de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
 ADD PRIMARY KEY (`ID_USUARIO`), ADD KEY `ID_ESTADO` (`ID_ESTADO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area_por_idea`
--
ALTER TABLE `area_por_idea`
MODIFY `ID_AREAIDEA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cronograma`
--
ALTER TABLE `cronograma`
MODIFY `ID_CRONOGRAMA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `idea_log`
--
ALTER TABLE `idea_log`
MODIFY `ID_IDEALOG` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tb_area_interes`
--
ALTER TABLE `tb_area_interes`
MODIFY `ID_AREAINTERES` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tb_estado`
--
ALTER TABLE `tb_estado`
MODIFY `ID_ESTADO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tb_idea`
--
ALTER TABLE `tb_idea`
MODIFY `ID_IDEA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `tb_rol`
--
ALTER TABLE `tb_rol`
MODIFY `ID_ROL` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
