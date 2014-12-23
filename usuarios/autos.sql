/*
SQLyog Ultimate v11.5 (32 bit)
MySQL - 5.6.20 : Database - driveservice
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`driveservice` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci */;

USE `driveservice`;

/*Table structure for table `autos` */

DROP TABLE IF EXISTS `autos`;

CREATE TABLE `autos` (
  `marca` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `modelo` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `anio` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

/*Data for the table `autos` */

insert  into `autos`(`marca`,`modelo`,`anio`) values ('Honda','Civic',1997),('Honda','Accord',2003),('Honda','Accord',2004),('Honda','CrossTour',2003),('Honda','Accord',2005),('Toyota','Corola',2010),('Dodge','Ram',2007),('Ford','Lobo',2014);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
