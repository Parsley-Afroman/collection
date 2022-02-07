# ************************************************************
# Sequel Ace SQL dump
# Version 20025
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.7.37)
# Database: sami-collection
# Generation Time: 2022-02-07 13:39:18 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `designer` varchar(255) NOT NULL DEFAULT '',
  `style` varchar(255) NOT NULL DEFAULT '',
  `year_released` int(4) NOT NULL,
  `cost_in_dollars` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT '',
  `image` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;

INSERT INTO `items` (`id`, `name`, `designer`, `style`, `year_released`, `cost_in_dollars`, `location`, `image`)
VALUES
	(1,'Nitro Run','Avirex','varsity',2022,1498,'https://www.avirex.com/collections/jackets/products/nitro-run-avf201o01-1','https://cdn.shopify.com/s/files/1/0255/1385/3021/products/AVF201O01_BLACK_1400x.png?v=1635861765'),
	(2,'B - 3','Avirex','shearling',2022,1200,'https://www.avirex.com/collections/jackets/products/b-3-shearling-jacket-avh191o01-1','https://cdn.shopify.com/s/files/1/0255/1385/3021/products/AVH191O01_FRONT_1400x.jpg?v=1629484078'),
	(3,'College Bomber Leather Sleeves Tattoo Patches','Philipp Plein','bomber',2022,5425,'https://www.plein.com/gb/college-bomber-leather-sleeves-tattoo-patches/SABC-ULB0005-PTE120N_02.html?cgid=men-clothing-outerwear_and_coats#cgid=men-clothing-outerwear_and_coats&pmin=1.00&prefn1=hasPicture&prefv1=true&start=3','https://www.plein.com/dw/image/v2/BBKQ_PRD/on/demandware.static/-/Sites-plein-master-catalog/default/dwe88d2781/images/rollover/SABC-ULB0005-PTE120N_02_r.jpg?sw=440&sh=560'),
	(4,'Python Leather College Bomber Tattoo Patches','Philipp Plein','bomber',2022,13025,'https://www.plein.com/gb/python-leather-college-bomber-tattoo-patches/SABC-MLB1473-PLE029P_02.html?cgid=men-clothing-outerwear_and_coats#cgid=men-clothing-outerwear_and_coats&pmin=1.00&prefn1=hasPicture&prefv1=true&start=4','https://www.plein.com/dw/image/v2/BBKQ_PRD/on/demandware.static/-/Sites-plein-master-catalog/default/dw3608ecbe/images/rollover/SABC-MLB1473-PLE029P_02_r.jpg?sw=440&sh=560'),
	(5,'Come Out Fighting','Pelle Pelle','bomber',2015,800,'https://www.grailed.com/listings/27565041-pelle-pelle-pelle-pelle-leather-jacket-size-40','https://process.fs.grailed.com/AJdAgnqCST4iPtnUxiGtTz/auto_image/cache=expiry:max/rotate=deg:exif/resize=height:1400/output=quality:90/compress/https://cdn.fs.grailed.com/api/file/WAEwtolTQSfZ11ieoybb');

/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
