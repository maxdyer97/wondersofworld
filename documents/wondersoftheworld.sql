# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.35)
# Database: wondersoftheworld
# Generation Time: 2021-09-27 14:00:27 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table wonders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wonders`;

CREATE TABLE `wonders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `yearmade` varchar(11) DEFAULT NULL,
  `yearvisit` varchar(11) DEFAULT NULL,
  `images` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `wonders` WRITE;
/*!40000 ALTER TABLE `wonders` DISABLE KEYS */;

INSERT INTO `wonders` (`id`, `name`, `location`, `yearmade`, `yearvisit`, `images`)
VALUES
	(1,'Taj Mahal','India','1631',NULL,NULL),
	(2,'Colosseum','Italy','70 AD',NULL,NULL),
	(3,'Machu Picchu','Peru','1438-71',NULL,NULL),
	(4,'Christ the Redeemer','Brazil','1922',NULL,NULL),
	(5,'Petra','Jordan','312 BC',NULL,NULL),
	(6,'Chichen Itza','Mexico','400 AD',NULL,NULL),
	(7,'Great Wall of China','China','1644',NULL,NULL);

/*!40000 ALTER TABLE `wonders` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
