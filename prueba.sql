-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2014 a las 23:15:30
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 58),
(2, 1, NULL, NULL, 'Users', 2, 21),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 2, NULL, NULL, 'login', 13, 14),
(9, 2, NULL, NULL, 'logout', 15, 16),
(10, 2, NULL, NULL, 'admin_logout', 17, 18),
(11, 2, NULL, NULL, 'admin_index', 19, 20),
(12, 1, NULL, NULL, 'Empresas', 22, 39),
(13, 1, NULL, NULL, 'Fundempresas', 40, 57),
(14, 12, NULL, NULL, 'index', 23, 24),
(15, 12, NULL, NULL, 'view', 25, 26),
(16, 12, NULL, NULL, 'add', 27, 28),
(17, 12, NULL, NULL, 'edit', 29, 30),
(18, 12, NULL, NULL, 'delete', 31, 32),
(19, 12, NULL, NULL, 'admin_index', 33, 34),
(20, 12, NULL, NULL, 'admin_delete', 35, 36),
(21, 12, NULL, NULL, 'admin_edit', 37, 38),
(22, 13, NULL, NULL, 'index', 41, 42),
(23, 13, NULL, NULL, 'view', 43, 44),
(24, 13, NULL, NULL, 'add', 45, 46),
(25, 13, NULL, NULL, 'delete', 47, 48),
(26, 13, NULL, NULL, 'edit', 49, 50),
(27, 13, NULL, NULL, 'admin_index', 51, 52),
(28, 13, NULL, NULL, 'admin_edit', 53, 54),
(29, 13, NULL, NULL, 'admin_delete', 55, 56);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncios`
--

CREATE TABLE IF NOT EXISTS `anuncios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(5000) NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha` date NOT NULL,
  `fechafin` date NOT NULL,
  `docente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`docente_id`),
  KEY `fk_Anuncios_docentes1_idx` (`docente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'Roles', 1, 8),
(2, 1, 'Role', 1, NULL, 2, 3),
(3, 1, 'Role', 2, NULL, 4, 5),
(4, 1, 'Role', 3, NULL, 6, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 4, 3, '1', '1', '1', '1'),
(2, 4, 5, '1', '1', '1', '1'),
(3, 4, 8, '1', '1', '1', '1'),
(4, 4, 9, '1', '1', '1', '1'),
(5, 3, 9, '1', '1', '1', '1'),
(6, 3, 8, '1', '1', '1', '1'),
(7, 3, 3, '1', '1', '1', '1'),
(8, 3, 4, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacions`
--

CREATE TABLE IF NOT EXISTS `asignacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estudiante_id` int(11) NOT NULL,
  `tarea_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_asignacions_estudiantes1_idx` (`estudiante_id`),
  KEY `fk_asignacions_tareas1_idx` (`tarea_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criterios`
--

CREATE TABLE IF NOT EXISTS `criterios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `evaluacions_id` int(11) NOT NULL,
  `evaluacions_docentes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`evaluacions_id`,`evaluacions_docentes_id`),
  KEY `fk_criterios_evaluacions1_idx` (`evaluacions_id`,`evaluacions_docentes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesesions`
--

CREATE TABLE IF NOT EXISTS `detallesesions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fechainicio` date DEFAULT NULL,
  `fechafin` date DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_detallesesions_users1_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE IF NOT EXISTS `docentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellidoP` varchar(30) NOT NULL,
  `apellidoM` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_docentes_users1_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `nombre`, `apellidoP`, `apellidoM`, `user_id`) VALUES
(3, 'nombred', 'apellidod', 'apellidod', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentestudiantes`
--

CREATE TABLE IF NOT EXISTS `docentestudiantes` (
  `docente_id` int(11) NOT NULL,
  `estudiantes_id` int(11) NOT NULL,
  PRIMARY KEY (`docente_id`,`estudiantes_id`),
  KEY `fk_docentestudiantes_estudiantes1_idx` (`estudiantes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE IF NOT EXISTS `documentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `documentoN` varchar(100) NOT NULL,
  `documentoPath` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_documentos_users1_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombrelargo` varchar(30) NOT NULL,
  `nombrecorto` varchar(15) NOT NULL,
  `logoN` varchar(45) DEFAULT NULL,
  `logoP` varchar(300) DEFAULT NULL,
  `correo` varchar(60) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_empresas_users1_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellidoP` varchar(30) NOT NULL,
  `apellidoM` varchar(30) NOT NULL,
  `codsis` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacions`
--

CREATE TABLE IF NOT EXISTS `evaluacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `comentario` varchar(5000) NOT NULL,
  `porcentaje` int(11) NOT NULL,
  `asignacions_id` int(11) NOT NULL,
  `docente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`docente_id`),
  KEY `fk_evaluacions_asignacions1_idx` (`asignacions_id`),
  KEY `fk_evaluacions_docentes1_idx` (`docente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_type_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `all_day` tinyint(1) NOT NULL DEFAULT '1',
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Scheduled',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_types`
--

CREATE TABLE IF NOT EXISTS `event_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foros`
--

CREATE TABLE IF NOT EXISTS `foros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creador` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `mensaje` varchar(1000) DEFAULT NULL,
  `foro_id` int(11) NOT NULL,
  `foro_users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_foro_users1_idx` (`user_id`),
  KEY `fk_foro_foro1_idx` (`foro_id`,`foro_users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcions`
--

CREATE TABLE IF NOT EXISTS `funcions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `funcions`
--

INSERT INTO `funcions` (`id`, `nombre`) VALUES
(1, 'listaestudiantes'),
(2, 'listadocentes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fundempresa`
--

CREATE TABLE IF NOT EXISTS `fundempresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integrantes`
--

CREATE TABLE IF NOT EXISTS `integrantes` (
  `empresa_id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  PRIMARY KEY (`empresa_id`,`estudiante_id`),
  KEY `fk_integrantes_estudiantes1_idx` (`estudiante_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodologia`
--

CREATE TABLE IF NOT EXISTS `metodologia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodologiaempresas`
--

CREATE TABLE IF NOT EXISTS `metodologiaempresas` (
  `empresa_id` int(11) NOT NULL,
  `metodologia_id` int(11) NOT NULL,
  PRIMARY KEY (`empresa_id`,`metodologia_id`),
  KEY `fk_metodologiaempresa_metodologia1_idx` (`metodologia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `met_tiene_rol`
--

CREATE TABLE IF NOT EXISTS `met_tiene_rol` (
  `metodologia_id` int(11) NOT NULL,
  `rolmetodologias_id` int(11) NOT NULL,
  PRIMARY KEY (`metodologia_id`,`rolmetodologias_id`),
  KEY `fk_met_tiene_rol_rolmetodologias1_idx` (`rolmetodologias_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planificacions`
--

CREATE TABLE IF NOT EXISTS `planificacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `actividad` varchar(100) NOT NULL,
  `duracion` int(11) NOT NULL,
  `empresas_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`empresas_id`),
  KEY `fk_planificacions_empresas1_idx` (`empresas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantienetareas`
--

CREATE TABLE IF NOT EXISTS `plantienetareas` (
  `planificacions_id` int(11) NOT NULL,
  `planificacions_empresas_id` int(11) NOT NULL,
  `tareas_id` int(11) NOT NULL,
  PRIMARY KEY (`planificacions_id`,`planificacions_empresas_id`,`tareas_id`),
  KEY `fk_plantienetareas_tareas1_idx` (`tareas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(45) DEFAULT NULL,
  `alias` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `role`, `alias`) VALUES
(1, 'Administrador', ''),
(2, 'Empresa', ''),
(3, 'Publico', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolfuncions`
--

CREATE TABLE IF NOT EXISTS `rolfuncions` (
  `rol_id` int(11) NOT NULL,
  `funcion_id` int(11) NOT NULL,
  PRIMARY KEY (`rol_id`,`funcion_id`),
  KEY `fk_rolfuncions_funcions1_idx` (`funcion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rolfuncions`
--

INSERT INTO `rolfuncions` (`rol_id`, `funcion_id`) VALUES
(1, 1),
(3, 1),
(2, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolintegrantes`
--

CREATE TABLE IF NOT EXISTS `rolintegrantes` (
  `integrantes_empresas_id` int(11) NOT NULL,
  `integrantes_estudiantes_id` int(11) NOT NULL,
  `rolmetodologias_id` int(11) NOT NULL,
  PRIMARY KEY (`integrantes_empresas_id`,`integrantes_estudiantes_id`,`rolmetodologias_id`),
  KEY `fk_rolintegrantes_rolmetodologias1_idx` (`rolmetodologias_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolmetodologias`
--

CREATE TABLE IF NOT EXISTS `rolmetodologias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablalogs`
--

CREATE TABLE IF NOT EXISTS `tablalogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tabla` varchar(35) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `datoviejo` varchar(1000) DEFAULT NULL,
  `datonuevo` varchar(1000) DEFAULT NULL,
  `operacion` varchar(20) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_tablalogs_users1_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE IF NOT EXISTS `tareas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

CREATE TABLE IF NOT EXISTS `telefonos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) NOT NULL,
  `docente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`docente_id`),
  KEY `fk_telefonos_docentes1_idx` (`docente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` enum('admin','regular') NOT NULL DEFAULT 'regular',
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `role_id`) VALUES
(3, 'docente', 'docente', 'regular', NULL),
(4, 'lal', 'lal', 'regular', NULL),
(12, 'nuevo', 'fac733d9bfdb5b762a9671f9076b93bfbb667ce2', 'regular', NULL),
(13, 'new', '11a2f5ede40367d54b94d24f2df9b346e40cf235', 'regular', 2),
(14, 'admin', 'b7a4f1b993bee9300b87b458407540b8ba8a49a6', 'admin', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariorols`
--

CREATE TABLE IF NOT EXISTS `usuariorols` (
  `user_id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`rol_id`),
  KEY `fk_usuarioroles_rols1_idx` (`rol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuariorols`
--

INSERT INTO `usuariorols` (`user_id`, `rol_id`) VALUES
(4, 1),
(3, 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anuncios`
--
ALTER TABLE `anuncios`
  ADD CONSTRAINT `fk_Anuncios_docentes1` FOREIGN KEY (`docente_id`) REFERENCES `docentes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asignacions`
--
ALTER TABLE `asignacions`
  ADD CONSTRAINT `fk_asignacions_estudiantes1` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiantes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_asignacions_tareas1` FOREIGN KEY (`tarea_id`) REFERENCES `tareas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `criterios`
--
ALTER TABLE `criterios`
  ADD CONSTRAINT `fk_criterios_evaluacions1` FOREIGN KEY (`evaluacions_id`, `evaluacions_docentes_id`) REFERENCES `evaluacions` (`id`, `docente_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detallesesions`
--
ALTER TABLE `detallesesions`
  ADD CONSTRAINT `fk_detallesesions_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `fk_docentes_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `docentestudiantes`
--
ALTER TABLE `docentestudiantes`
  ADD CONSTRAINT `fk_docentestudiantes_docentes1` FOREIGN KEY (`docente_id`) REFERENCES `docentes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_docentestudiantes_estudiantes1` FOREIGN KEY (`estudiantes_id`) REFERENCES `estudiantes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `fk_documentos_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `fk_empresas_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `evaluacions`
--
ALTER TABLE `evaluacions`
  ADD CONSTRAINT `fk_evaluacions_asignacions1` FOREIGN KEY (`asignacions_id`) REFERENCES `asignacions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_evaluacions_docentes1` FOREIGN KEY (`docente_id`) REFERENCES `docentes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `foros`
--
ALTER TABLE `foros`
  ADD CONSTRAINT `fk_foro_foro1` FOREIGN KEY (`foro_id`, `foro_users_id`) REFERENCES `foros` (`id`, `user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_foro_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `integrantes`
--
ALTER TABLE `integrantes`
  ADD CONSTRAINT `fk_integrantes_empresas1` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_integrantes_estudiantes1` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiantes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `metodologiaempresas`
--
ALTER TABLE `metodologiaempresas`
  ADD CONSTRAINT `fk_metodologiaempresa_empresas1` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_metodologiaempresa_metodologia1` FOREIGN KEY (`metodologia_id`) REFERENCES `metodologia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `met_tiene_rol`
--
ALTER TABLE `met_tiene_rol`
  ADD CONSTRAINT `fk_met_tiene_rol_metodologia1` FOREIGN KEY (`metodologia_id`) REFERENCES `metodologia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_met_tiene_rol_rolmetodologias1` FOREIGN KEY (`rolmetodologias_id`) REFERENCES `rolmetodologias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `planificacions`
--
ALTER TABLE `planificacions`
  ADD CONSTRAINT `fk_planificacions_empresas1` FOREIGN KEY (`empresas_id`) REFERENCES `empresas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `plantienetareas`
--
ALTER TABLE `plantienetareas`
  ADD CONSTRAINT `fk_plantienetareas_planificacions1` FOREIGN KEY (`planificacions_id`, `planificacions_empresas_id`) REFERENCES `planificacions` (`id`, `empresas_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_plantienetareas_tareas1` FOREIGN KEY (`tareas_id`) REFERENCES `tareas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rolfuncions`
--
ALTER TABLE `rolfuncions`
  ADD CONSTRAINT `fk_rolfuncions_funcions1` FOREIGN KEY (`funcion_id`) REFERENCES `funcions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rolfuncions_rols1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rolintegrantes`
--
ALTER TABLE `rolintegrantes`
  ADD CONSTRAINT `fk_rolintegrantes_integrantes1` FOREIGN KEY (`integrantes_empresas_id`, `integrantes_estudiantes_id`) REFERENCES `integrantes` (`empresa_id`, `estudiante_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rolintegrantes_rolmetodologias1` FOREIGN KEY (`rolmetodologias_id`) REFERENCES `rolmetodologias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tablalogs`
--
ALTER TABLE `tablalogs`
  ADD CONSTRAINT `fk_tablalogs_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD CONSTRAINT `fk_telefonos_docentes1` FOREIGN KEY (`docente_id`) REFERENCES `docentes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuariorols`
--
ALTER TABLE `usuariorols`
  ADD CONSTRAINT `fk_usuarioroles_rols1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarioroles_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
