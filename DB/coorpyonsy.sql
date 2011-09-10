-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.67-community-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema coorpyonsy
--

CREATE DATABASE IF NOT EXISTS coorpyonsy;
USE coorpyonsy;

--
-- Definition of table `area`
--

DROP TABLE IF EXISTS `area`;
CREATE TABLE `area` (
  `IdArea` char(4) NOT NULL,
  `ArNombre` varchar(45) NOT NULL,
  `ArDescrip` longtext NOT NULL,
  PRIMARY KEY  (`IdArea`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

/*!40000 ALTER TABLE `area` DISABLE KEYS */;
/*!40000 ALTER TABLE `area` ENABLE KEYS */;


--
-- Definition of table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE `empleados` (
  `IdEmp` int(10) unsigned NOT NULL auto_increment,
  `EmpNombre` varchar(100) NOT NULL,
  `EmpApellido` varchar(100) NOT NULL,
  `Empcargo` varchar(100) NOT NULL,
  `EmpMail` varchar(150) NOT NULL,
  `EmpGenero` char(1) NOT NULL,
  `EmpTelefono` varchar(9) NOT NULL,
  `EmpDir` varchar(200) NOT NULL,
  PRIMARY KEY  (`IdEmp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empleados`
--

/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;


--
-- Definition of table `tarea`
--

DROP TABLE IF EXISTS `tarea`;
CREATE TABLE `tarea` (
  `IdTarea` char(4) NOT NULL,
  `TaTitulo` varchar(100) NOT NULL,
  `TaDescr` longtext NOT NULL,
  `TaEstado` varchar(10) NOT NULL,
  PRIMARY KEY  (`IdTarea`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarea`
--

/*!40000 ALTER TABLE `tarea` DISABLE KEYS */;
/*!40000 ALTER TABLE `tarea` ENABLE KEYS */;


--
-- Definition of table `trabajos`
--

DROP TABLE IF EXISTS `trabajos`;
CREATE TABLE `trabajos` (
  `IdEmp` int(10) unsigned NOT NULL auto_increment,
  `IdTarea` char(4) NOT NULL,
  `IdArea` char(4) NOT NULL,
  PRIMARY KEY  (`IdEmp`,`IdTarea`,`IdArea`),
  KEY `Tarea_trabajos` (`IdTarea`),
  KEY `Area_trabajos` (`IdArea`),
  CONSTRAINT `Area_trabajos` FOREIGN KEY (`IdArea`) REFERENCES `area` (`IdArea`),
  CONSTRAINT `Emp_trabajo` FOREIGN KEY (`IdEmp`) REFERENCES `empleados` (`IdEmp`),
  CONSTRAINT `Tarea_trabajos` FOREIGN KEY (`IdTarea`) REFERENCES `tarea` (`IdTarea`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trabajos`
--

/*!40000 ALTER TABLE `trabajos` DISABLE KEYS */;
/*!40000 ALTER TABLE `trabajos` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
