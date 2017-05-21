-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2017 a las 04:40:34
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idea_log`
--

CREATE TABLE IF NOT EXISTS `idea_log` (
  `ID_IDEALOG` int(11) NOT NULL,
  `ID_IDEA` int(11) NOT NULL,
  `TITULO` varchar(250) DEFAULT NULL,
  `DESCRIPCION` text,
  `PRIVADA` tinyint(1) DEFAULT NULL,
  `AREA` varchar(30) DEFAULT NULL,
  `USUARIO_CREA` varchar(60) DEFAULT NULL,
  `ESTUDIANTE` varchar(60) DEFAULT NULL,
  `DOCENTE` varchar(60) DEFAULT NULL,
  `ESTADO` varchar(30) DEFAULT NULL,
  `FECHA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_area_interes`
--

CREATE TABLE IF NOT EXISTS `tb_area_interes` (
  `ID_AREAINTERES` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `DESCRIPCION` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_estado`
--

CREATE TABLE IF NOT EXISTS `tb_estado` (
  `ID_ESTADO` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `TIPO` char(1) NOT NULL,
  `VALOR` smallint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_rol`
--

CREATE TABLE IF NOT EXISTS `tb_rol` (
  `ID_ROL` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_rol`
--

INSERT INTO `tb_rol` (`ID_ROL`, `NOMBRE`) VALUES
(11, 'sf'),
(12, 'das'),
(16, 'Hola'),
(17, 'asdasd'),
(18, 'dqw');

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
  `GENERO` char(1) DEFAULT NULL,
  `FECHA_NACIMIENTO` date DEFAULT NULL,
  `CONTRASENA` varchar(500) DEFAULT NULL,
  `TELEFONO` int(11) DEFAULT NULL,
  `CELULAR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_usuario`
--

INSERT INTO `tb_usuario` (`ID_USUARIO`, `NOMBRE`, `APELLIDO`, `DOCUMENTO`, `TIPO_DOCUMENTO`, `CORREO`, `ID_ROL`, `ID_ESTADO`, `GENERO`, `FECHA_NACIMIENTO`, `CONTRASENA`, `TELEFONO`, `CELULAR`) VALUES
(0, 'Michael', 'Rosero', 10249129, 'Cedula', 'michael@hotmail.com', 2, 2, 'M', '1997-07-30', '123', 3131912, 1291429);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area_por_idea`
--
ALTER TABLE `area_por_idea`
  ADD PRIMARY KEY (`ID_AREAIDEA`),
  ADD KEY `ID_IDEA` (`ID_IDEA`),
  ADD KEY `ID_AREA` (`ID_AREA`);

--
-- Indices de la tabla `cronograma`
--
ALTER TABLE `cronograma`
  ADD PRIMARY KEY (`ID_CRONOGRAMA`),
  ADD KEY `ID_ESTUDIANTE` (`ID_ESTUDIANTE`),
  ADD KEY `ID_DOCENTE` (`ID_DOCENTE`),
  ADD KEY `ID_ESTADO` (`ID_ESTADO`),
  ADD KEY `ID_IDEA` (`ID_IDEA`);

--
-- Indices de la tabla `idea_log`
--
ALTER TABLE `idea_log`
  ADD PRIMARY KEY (`ID_IDEALOG`),
  ADD UNIQUE KEY `ID_IDEA` (`ID_IDEA`);

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
  ADD PRIMARY KEY (`ID_IDEA`),
  ADD KEY `ID_AREA` (`ID_AREA`),
  ADD KEY `ID_USUARIO_CREA` (`ID_USUARIO_CREA`),
  ADD KEY `ID_ESTUDIANTE` (`ID_ESTUDIANTE`),
  ADD KEY `ID_DOCENTE` (`ID_DOCENTE`),
  ADD KEY `ID_ESTADO` (`ID_ESTADO`);

--
-- Indices de la tabla `tb_rol`
--
ALTER TABLE `tb_rol`
  ADD PRIMARY KEY (`ID_ROL`);

--
-- Indices de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`ID_USUARIO`),
  ADD KEY `ID_ESTADO` (`ID_ESTADO`);

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
  MODIFY `ID_IDEALOG` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_area_interes`
--
ALTER TABLE `tb_area_interes`
  MODIFY `ID_AREAINTERES` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_estado`
--
ALTER TABLE `tb_estado`
  MODIFY `ID_ESTADO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tb_idea`
--
ALTER TABLE `tb_idea`
  MODIFY `ID_IDEA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_rol`
--
ALTER TABLE `tb_rol`
  MODIFY `ID_ROL` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
