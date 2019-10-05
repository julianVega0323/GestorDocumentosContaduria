-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 02:56 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contaduria2019`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
  `user` varchar(16) NOT NULL,
  `pass` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`user`, `pass`) VALUES
('1151534', '0323');

-- --------------------------------------------------------

--
-- Table structure for table `asigna-docente`
--

CREATE TABLE `asigna-docente` (
  `docente` int(10) NOT NULL,
  `asignatura` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asigna-docente`
--

INSERT INTO `asigna-docente` (`docente`, `asignatura`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `asignatura`
--

CREATE TABLE `asignatura` (
  `id` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `codigo` int(7) NOT NULL,
  `jornada` varchar(18) NOT NULL,
  `grupo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asignatura`
--

INSERT INTO `asignatura` (`id`, `nombre`, `codigo`, `jornada`, `grupo`) VALUES
(1, 'PROGRAMACION WEB', 0, 'DIURNA', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `convenio`
--

CREATE TABLE `convenio` (
  `id` int(10) NOT NULL,
  `estudiante` int(10) NOT NULL,
  `empresa` int(10) NOT NULL,
  `supervisor` int(10) NOT NULL,
  `fecha_convenio` date NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `convenio`
--

INSERT INTO `convenio` (`id`, `estudiante`, `empresa`, `supervisor`, `fecha_convenio`, `estado`) VALUES
(1, 1, 1, 1, '2019-10-01', 0),
(2, 2, 2, 2, '2019-10-04', 0),
(3, 3, 3, 3, '2019-10-04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `convenio_arl`
--

CREATE TABLE `convenio_arl` (
  `id` int(10) NOT NULL,
  `estudiante` int(10) NOT NULL,
  `fechaConvenio` date NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `docente`
--

CREATE TABLE `docente` (
  `id` int(10) NOT NULL,
  `nombre` varchar(36) NOT NULL,
  `email` varchar(24) NOT NULL,
  `codigo` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docente`
--

INSERT INTO `docente` (`id`, `nombre`, `email`, `codigo`) VALUES
(1, 'CARLOS RENE ANGARITA SANGUINO', 'CARLOSRENEAS@UFPS.EDU.CO', 0);

-- --------------------------------------------------------

--
-- Table structure for table `empresa`
--

CREATE TABLE `empresa` (
  `id` int(10) NOT NULL,
  `nit` varchar(23) NOT NULL,
  `nombre` varchar(23) NOT NULL,
  `correo` varchar(23) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(28) NOT NULL,
  `representante_legal` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empresa`
--

INSERT INTO `empresa` (`id`, `nit`, `nombre`, `correo`, `telefono`, `direccion`, `representante_legal`) VALUES
(1, '132.4125-03', 'RODIZIO', 'POSTOBONCUCUTA@GMAIL.CO', '58444444', 'CALLE 16 NÂ° 22-12 CENTRO', 1),
(2, '132.4125-03', 'POSTOBON', 'POSTOBONCUCUTA@GMAIL.CO', '58444444', 'CALLE 16 NÂ° 22-12 CENTRO', 2),
(3, '132.4125-03', 'POSTOBON', 'POSTOBONCUCUTA@GMAIL.CO', '58444444', 'CALLE 16 NÂ° 22-12 CENTRO', 3);

-- --------------------------------------------------------

--
-- Table structure for table `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(10) NOT NULL,
  `codigo` int(7) NOT NULL,
  `identificacion` varchar(12) NOT NULL,
  `tipo_identificacion` varchar(5) NOT NULL,
  `p_nombre` varchar(12) NOT NULL,
  `s_nombre` varchar(12) NOT NULL,
  `p_apellido` varchar(12) NOT NULL,
  `s_apellido` varchar(12) NOT NULL,
  `genero` varchar(1) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_expedicion` date NOT NULL,
  `dpto_nacimiento` varchar(23) NOT NULL,
  `ciudad_nacimiento` varchar(23) NOT NULL,
  `semestre_actual` int(2) NOT NULL,
  `direccion` varchar(28) NOT NULL,
  `correo` varchar(28) NOT NULL,
  `telf_fijo` varchar(10) NOT NULL,
  `telf_movil` varchar(15) NOT NULL,
  `eps-ars` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estudiante`
--

INSERT INTO `estudiante` (`id`, `codigo`, `identificacion`, `tipo_identificacion`, `p_nombre`, `s_nombre`, `p_apellido`, `s_apellido`, `genero`, `fecha_nacimiento`, `fecha_expedicion`, `dpto_nacimiento`, `ciudad_nacimiento`, `semestre_actual`, `direccion`, `correo`, `telf_fijo`, `telf_movil`, `eps-ars`) VALUES
(1, 1151534, '1094583190', 'C.C', 'JULIAN', 'ANDRES', 'BECERRA', 'VEGA', 'M', '2019-10-25', '2019-10-09', 'NORTE DE SANTANDER', 'CUCUTA', 6, 'AV 7 NÂ° 24-14 VILLAS DEL TE', 'JULIANANDRESBV@UFPS.EDU.CO', '5847474', '3114029073', 'coomeva'),
(2, 1121544, '1091542223', 'C.C', 'YEISON', 'DAVID', 'CORDOBA', 'CASTELLANOS', 'M', '2019-10-09', '2019-10-14', 'NORTE DE SANTANDER', 'CUCUTA', 5, 'AV 7 NÂ° 24-14 VILLAS DEL TE', 'YEISONC@UFPS.EDU.CO', '5847474', '3114029073', 'coomeva'),
(3, 1121544, '1091542223', 'C.C', 'YEISON', 'DAVID', 'CORDOBA', 'CASTELLANOS', 'M', '2019-10-17', '2019-10-24', 'NORTE DE SANTANDER', 'CUCUTA', 4, 'AV 7 NÂ° 24-14 VILLAS DEL TE', 'YEISONC@UFPS.EDU.CO', '5847474', '3114029073', 'coomeva');

-- --------------------------------------------------------

--
-- Table structure for table `practica`
--

CREATE TABLE `practica` (
  `id` int(10) NOT NULL,
  `asignatura` int(10) NOT NULL,
  `convenio` int(10) NOT NULL,
  `area_designada` text NOT NULL,
  `tematica-desarrollar` text NOT NULL,
  `horario-asistencia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `practica`
--

INSERT INTO `practica` (`id`, `asignatura`, `convenio`, `area_designada`, `tematica-desarrollar`, `horario-asistencia`) VALUES
(1, 1, 2, 'DESARROLLO UNA WEB RESPONSIVE', 'APP WEB', '10 -12 AM');

-- --------------------------------------------------------

--
-- Table structure for table `practica_arl`
--

CREATE TABLE `practica_arl` (
  `id` int(10) NOT NULL,
  `nombre_asignatura` varchar(30) NOT NULL,
  `docente` varchar(30) NOT NULL,
  `email_docente` varchar(30) NOT NULL,
  `jornada_asignatura` varchar(30) NOT NULL,
  `grupo_asignatura` varchar(30) NOT NULL,
  `convenio_arl` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `representante_legal`
--

CREATE TABLE `representante_legal` (
  `id` int(10) NOT NULL,
  `nombre` varchar(24) NOT NULL,
  `apellido` varchar(24) NOT NULL,
  `identificacion` varchar(12) NOT NULL,
  `lugar_expedicion` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `representante_legal`
--

INSERT INTO `representante_legal` (`id`, `nombre`, `apellido`, `identificacion`, `lugar_expedicion`) VALUES
(1, 'ANA KARINA', 'SANDOVAL ARANGO', '60308966', 'LOS PATIOS'),
(2, 'ANA KARINA', 'SANDOVAL ARANGO', '60308966', 'LOS PATIOS'),
(3, 'ANA KARINA', 'SANDOVAL ARANGO', '60308966', 'LOS PATIOS');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id` int(10) NOT NULL,
  `nombre` varchar(24) NOT NULL,
  `apellido` varchar(24) NOT NULL,
  `identificacion` varchar(12) NOT NULL,
  `lugar_expedicion` varchar(23) NOT NULL,
  `cargo` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id`, `nombre`, `apellido`, `identificacion`, `lugar_expedicion`, `cargo`) VALUES
(1, 'ELKIN ALBERTO', 'ZAPATA RODRIGUEZ', '64121005', 'BOGOTA', 'GERENTE'),
(2, 'ELKIN ALBERTO', 'ZAPATA RODRIGUEZ', '64121005', 'BOGOTA', 'GERENTE'),
(3, 'ELKIN ALBERTO', 'ZAPATA RODRIGUEZ', '64121005', 'BOGOTA', 'GERENTE');

-- --------------------------------------------------------

--
-- Table structure for table `trabajo_grado`
--

CREATE TABLE `trabajo_grado` (
  `id` int(10) NOT NULL,
  `convenio` int(10) NOT NULL,
  `tipo` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trabajo_grado`
--

INSERT INTO `trabajo_grado` (`id`, `convenio`, `tipo`) VALUES
(1, 1, 'INVESTIGACION'),
(2, 3, 'DIRIGIDO');

-- --------------------------------------------------------

--
-- Table structure for table `trabajo_grado_arl`
--

CREATE TABLE `trabajo_grado_arl` (
  `id` int(10) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `convenio_arl` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `asigna-docente`
--
ALTER TABLE `asigna-docente`
  ADD KEY `asignatura` (`asignatura`),
  ADD KEY `docente` (`docente`);

--
-- Indexes for table `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `convenio`
--
ALTER TABLE `convenio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estudiante` (`estudiante`),
  ADD KEY `supervisor` (`supervisor`),
  ADD KEY `empresa` (`empresa`);

--
-- Indexes for table `convenio_arl`
--
ALTER TABLE `convenio_arl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `representante_legal` (`representante_legal`);

--
-- Indexes for table `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practica`
--
ALTER TABLE `practica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `convenio` (`convenio`),
  ADD KEY `asignatura` (`asignatura`);

--
-- Indexes for table `practica_arl`
--
ALTER TABLE `practica_arl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `representante_legal`
--
ALTER TABLE `representante_legal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trabajo_grado`
--
ALTER TABLE `trabajo_grado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `convenio` (`convenio`);

--
-- Indexes for table `trabajo_grado_arl`
--
ALTER TABLE `trabajo_grado_arl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `convenio`
--
ALTER TABLE `convenio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `convenio_arl`
--
ALTER TABLE `convenio_arl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `docente`
--
ALTER TABLE `docente`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `practica`
--
ALTER TABLE `practica`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `practica_arl`
--
ALTER TABLE `practica_arl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `representante_legal`
--
ALTER TABLE `representante_legal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trabajo_grado`
--
ALTER TABLE `trabajo_grado`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trabajo_grado_arl`
--
ALTER TABLE `trabajo_grado_arl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asigna-docente`
--
ALTER TABLE `asigna-docente`
  ADD CONSTRAINT `asigna-docente_ibfk_1` FOREIGN KEY (`asignatura`) REFERENCES `asignatura` (`id`),
  ADD CONSTRAINT `asigna-docente_ibfk_2` FOREIGN KEY (`docente`) REFERENCES `docente` (`id`);

--
-- Constraints for table `convenio`
--
ALTER TABLE `convenio`
  ADD CONSTRAINT `convenio_ibfk_2` FOREIGN KEY (`estudiante`) REFERENCES `estudiante` (`id`),
  ADD CONSTRAINT `convenio_ibfk_3` FOREIGN KEY (`supervisor`) REFERENCES `supervisor` (`id`),
  ADD CONSTRAINT `convenio_ibfk_4` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`id`);

--
-- Constraints for table `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`representante_legal`) REFERENCES `representante_legal` (`id`);

--
-- Constraints for table `practica`
--
ALTER TABLE `practica`
  ADD CONSTRAINT `practica_ibfk_1` FOREIGN KEY (`convenio`) REFERENCES `convenio` (`id`),
  ADD CONSTRAINT `practica_ibfk_2` FOREIGN KEY (`asignatura`) REFERENCES `asignatura` (`id`);

--
-- Constraints for table `trabajo_grado`
--
ALTER TABLE `trabajo_grado`
  ADD CONSTRAINT `trabajo_grado_ibfk_1` FOREIGN KEY (`convenio`) REFERENCES `convenio` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
