-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.21-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla academico.grados
CREATE TABLE IF NOT EXISTS `grados` (
  `id_grado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_grado` varchar(50) NOT NULL DEFAULT '0',
  `cant_est` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_grado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='listado de grados dentro del sistema';

-- Volcando datos para la tabla academico.grados: ~0 rows (aproximadamente)
DELETE FROM `grados`;
/*!40000 ALTER TABLE `grados` DISABLE KEYS */;
INSERT INTO `grados` (`id_grado`, `nombre_grado`, `cant_est`) VALUES
	(1, 'VII A', 28);
/*!40000 ALTER TABLE `grados` ENABLE KEYS */;

-- Volcando estructura para tabla academico.materia
CREATE TABLE IF NOT EXISTS `materia` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `nom_materia` varchar(50) DEFAULT NULL,
  `puntaje` int(11) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla academico.materia: ~0 rows (aproximadamente)
DELETE FROM `materia`;
/*!40000 ALTER TABLE `materia` DISABLE KEYS */;
INSERT INTO `materia` (`id_materia`, `nom_materia`, `puntaje`, `descripcion`) VALUES
	(1, 'matematica basica', 81, 'materia basica de matematica');
/*!40000 ALTER TABLE `materia` ENABLE KEYS */;

-- Volcando estructura para tabla academico.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id_menu` int(11) DEFAULT NULL,
  `nombre_menu` varchar(50) DEFAULT NULL,
  `tag_menu` text,
  `tagger` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='menus presentes en el sistema configurable';

-- Volcando datos para la tabla academico.menus: ~7 rows (aproximadamente)
DELETE FROM `menus`;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id_menu`, `nombre_menu`, `tag_menu`, `tagger`) VALUES
	(1, 'Administracion', '<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">\r\n          <i class="fas fa-fw fa-cog"></i>\r\n          <span>Administracion</span>\r\n</a>', 'collapseTwo'),
	(2, 'Admin Profesores', '<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree" aria-expanded="true" aria-controls="collapseTwo">\r\n          <i class="fas fa-fw fa-cog"></i>\r\n          <span>Admin Profesores</span>\r\n</a>', 'collapseTree'),
	(3, 'Notas', '<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapseTwo">\r\n          <i class="fas fa-fw fa-cog"></i>\r\n          <span>Notas</span>\r\n</a>', 'collapse4'),
	(4, 'Matricula', '<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">\r\n          <i class="fas fa-fw fa-cog"></i>\r\n          <span>Matricula</span>\r\n</a>', 'collapse5'),
	(5, 'Tareas', '<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">\r\n          <i class="fas fa-fw fa-cog"></i>\r\n          <span>Tareas</span>\r\n</a>', 'collapse6'),
	(6, 'Planificacion', '<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">\r\n          <i class="fas fa-fw fa-cog"></i>\r\n          <span>Planificacion</span>\r\n</a>', 'collapse7'),
	(7, 'Evaluacion - Conducta', '<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">\r\n          <i class="fas fa-fw fa-cog"></i>\r\n          <span>Eval - Conducta</span>\r\n</a>', 'collapse8');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Volcando estructura para tabla academico.menu_perfil_usuario
CREATE TABLE IF NOT EXISTS `menu_perfil_usuario` (
  `id_menu_perfil_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_menus` int(11) DEFAULT NULL,
  `id_usuario_perfil` int(11) DEFAULT NULL,
  `id_perfil` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_menu_perfil_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='configuracion de menus del sistema dependiendo del Rol que poseaa';

-- Volcando datos para la tabla academico.menu_perfil_usuario: ~10 rows (aproximadamente)
DELETE FROM `menu_perfil_usuario`;
/*!40000 ALTER TABLE `menu_perfil_usuario` DISABLE KEYS */;
INSERT INTO `menu_perfil_usuario` (`id_menu_perfil_usuario`, `id_menus`, `id_usuario_perfil`, `id_perfil`) VALUES
	(1, 1, 1, 1),
	(2, 2, 1, 1),
	(3, 3, 2, 3),
	(4, 4, 2, 3),
	(5, 5, 2, 3),
	(6, 6, 3, 2),
	(7, 7, 3, 2),
	(8, 3, 4, 3),
	(9, 4, 4, 3),
	(10, 5, 4, 3);
/*!40000 ALTER TABLE `menu_perfil_usuario` ENABLE KEYS */;

-- Volcando estructura para tabla academico.perfiles
CREATE TABLE IF NOT EXISTS `perfiles` (
  `id_perfiles` int(11) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla academico.perfiles: ~3 rows (aproximadamente)
DELETE FROM `perfiles`;
/*!40000 ALTER TABLE `perfiles` DISABLE KEYS */;
INSERT INTO `perfiles` (`id_perfiles`, `descripcion`) VALUES
	(1, 'Administrador'),
	(2, 'Profesor'),
	(3, 'Estudiante'),
	(4, 'Acudiente');
/*!40000 ALTER TABLE `perfiles` ENABLE KEYS */;

-- Volcando estructura para tabla academico.periodo
CREATE TABLE IF NOT EXISTS `periodo` (
  `id_periodo` int(11) NOT NULL AUTO_INCREMENT,
  `periodo` varchar(50) DEFAULT NULL,
  `año_lectivo` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `descripcion` date DEFAULT NULL,
  PRIMARY KEY (`id_periodo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla academico.periodo: ~0 rows (aproximadamente)
DELETE FROM `periodo`;
/*!40000 ALTER TABLE `periodo` DISABLE KEYS */;
/*!40000 ALTER TABLE `periodo` ENABLE KEYS */;

-- Volcando estructura para tabla academico.submenu
CREATE TABLE IF NOT EXISTS `submenu` (
  `id_submenu` int(11) DEFAULT NULL,
  `nombre_submenu` varchar(50) DEFAULT NULL,
  `tag_submenu` text,
  `id_menu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='opciones del menu creado : ejemplo menu HHRR tiene planilla, contratos, etc.';

-- Volcando datos para la tabla academico.submenu: ~16 rows (aproximadamente)
DELETE FROM `submenu`;
/*!40000 ALTER TABLE `submenu` DISABLE KEYS */;
INSERT INTO `submenu` (`id_submenu`, `nombre_submenu`, `tag_submenu`, `id_menu`) VALUES
	(1, 'Crear Perfil - Usuario', '<a class="collapse-item" href="usuario.php">Crear Perfil Usuario</a>', 1),
	(2, 'Conectador Actualmente', '<a class="collapse-item" href="usuario.php?m=conectado">Conectados</a>', 1),
	(3, 'Crear Materia - Curso', '<a class="collapse-item" href="materia.php">Crear Materia / Curso</a>', 1),
	(4, 'Listar Profesores', '<a class="collapse-item" href="profesores.php">Listar Profesores</a>', 2),
	(5, 'Ver Notas', '<a class="collapse-item" href="#">Ver Notas</a>', 3),
	(6, 'Asignar Profesor - Materia', '<a class="collapse-item" href="profesor.php?m=asignar">Asignar Profesor a Materia</a>', 2),
	(7, 'Crear Periodo Academico', '<a class="collapse-item" href="periodo.php">Crear Periodo</a>', 1),
	(8, 'Bloqueoador Usuario', '<a class="collapse-item" href="usuario.php?m=bloqueo">Bloqueo Usuario</a>', 1),
	(9, 'Ver Materia Matriculada', '<a class="collapse-item" href="matricula.php?m=pmatricula">Ver Materia Matriculada</a>', 4),
	(10, 'Matricula', '<a class="collapse-item" href="matricula.php">Ver Matricula</a>', 4),
	(11, 'Ver Tareas', '<a class="collapse-item" href="tareas.php">Ver Tareas</a>', 5),
	(12, 'Calendario Tareas', '<a class="collapse-item" href="tareas.php?m=calendario">Ver Calendario</a>', 5),
	(13, 'Ver Rubrica', '<a class="collapse-item" href="matricula.php?m=rubrica">Ver Rubrica</a>', 4),
	(14, 'Tabla Calificacion', '<a class="collapse-item" href="notas.php?m=tablacalif">Tabla de Calif</a>', 3),
	(15, 'Crear Tareas', '<a class="collapse-item" href="tareas.php?m=creartareas">Crear Tareas</a>', 6),
	(16, 'Evaluar Tareas', '<a class="collapse-item" href="tareas.php?m=creartareas">Evaluar Tareas</a>', 6),
	(17, 'Crear Grado', '<a class="collapse-item" href="materia.php?m=creargrado">Crear Grado</a>', 1);
/*!40000 ALTER TABLE `submenu` ENABLE KEYS */;

-- Volcando estructura para tabla academico.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `telefono` tinytext,
  `email` tinytext,
  `fecha` datetime DEFAULT NULL,
  `conexion` int(11) DEFAULT NULL,
  `imagen_url` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='información de usuarios registrado en el sistema';

-- Volcando datos para la tabla academico.usuarios: ~5 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `cedula`, `nombre`, `pass`, `telefono`, `email`, `fecha`, `conexion`, `imagen_url`) VALUES
	(1001, '4-752-2225', 'Braulio Castillo', '123456', NULL, NULL, NULL, 0, NULL),
	(1002, '4-752-2020', 'Luis morales', '654321', NULL, NULL, NULL, 0, NULL),
	(1003, '4-752-2021', 'Edgar Rovira', '123123', NULL, NULL, NULL, 0, NULL),
	(1004, '4-752-2022', 'Luis Rovira', '123321', NULL, NULL, NULL, 0, NULL),
	(1005, '4-752-2222', 'Edward Pinto', '111111', NULL, NULL, NULL, 0, NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla academico.usu_usuario_perfil
CREATE TABLE IF NOT EXISTS `usu_usuario_perfil` (
  `id_usuario_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_perfil` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usuario_perfil`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='manejador de perfil del usuario del sistema puede ser : Administrador, Vendedor';

-- Volcando datos para la tabla academico.usu_usuario_perfil: ~4 rows (aproximadamente)
DELETE FROM `usu_usuario_perfil`;
/*!40000 ALTER TABLE `usu_usuario_perfil` DISABLE KEYS */;
INSERT INTO `usu_usuario_perfil` (`id_usuario_perfil`, `nombre_perfil`, `cedula`) VALUES
	(1, 'Administrador', '4-752-2225'),
	(2, 'Estudiante', '4-752-2020'),
	(3, 'Profesor', '4-752-2021'),
	(4, 'Estudiante', '4-752-2022');
/*!40000 ALTER TABLE `usu_usuario_perfil` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
