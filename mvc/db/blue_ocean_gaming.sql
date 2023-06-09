-- --------------------------------------------------------
-- Strežnik:                     127.0.0.1
-- Verzija strežnika:            8.0.31 - MySQL Community Server - GPL
-- Operacijski sistem strežnika: Win64
-- HeidiSQL Različica:           11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for blue_ocean_gaming
DROP DATABASE IF EXISTS `blue_ocean_gaming`;
CREATE DATABASE IF NOT EXISTS `blue_ocean_gaming` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `blue_ocean_gaming`;

-- Dumping structure for tabela blue_ocean_gaming.view_3d
DROP TABLE IF EXISTS `view_3d`;
CREATE TABLE IF NOT EXISTS `view_3d` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `playerid` int unsigned NOT NULL,
  `agentid` int unsigned NOT NULL,
  `currency` char(3) NOT NULL,
  `bet` decimal(10,2) DEFAULT NULL,
  `win` decimal(10,2) DEFAULT NULL,
  `rake` decimal(10,2) DEFAULT NULL,
  `tournament` decimal(10,2) DEFAULT NULL,
  `net` decimal(10,2) NOT NULL,
  `fin` decimal(10,2) DEFAULT NULL,
  `aams_ticket` varchar(40) NOT NULL,
  `aams_table` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `date` (`date`),
  KEY `playerid` (`playerid`),
  KEY `agentid` (`agentid`)
) ENGINE=MyISAM AUTO_INCREMENT=10835 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table blue_ocean_gaming.view_3d: 3 rows
/*!40000 ALTER TABLE `view_3d` DISABLE KEYS */;
INSERT INTO `view_3d` (`id`, `date`, `playerid`, `agentid`, `currency`, `bet`, `win`, `rake`, `tournament`, `net`, `fin`, `aams_ticket`, `aams_table`) VALUES
	(1, '2012-10-31', 44426, 871, 'EUR', 0.86, 1.45, 0.03, 0.00, 0.03, 0.00, '', ''),
	(2, '2012-10-31', 44425, 871, 'EUR', 1.62, 0.04, 0.07, 0.00, 0.07, 0.00, '', ''),
	(3, '2012-10-31', 44424, 871, 'EUR', 4.64, 2.64, 0.22, 0.00, 0.22, 0.00, '', '');
/*!40000 ALTER TABLE `view_3d` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
