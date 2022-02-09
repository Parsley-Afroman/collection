# ************************************************************
# Sequel Ace SQL dump
# Version 20025
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.7.37)
# Database: sami-collection
# Generation Time: 2022-02-09 14:34:55 +0000
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
  `cost_in_dollars` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT '',
  `image` varchar(255) DEFAULT '',
  `year_released` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;

INSERT INTO `items` (`id`, `name`, `designer`, `style`, `cost_in_dollars`, `location`, `image`, `year_released`)
VALUES
	(1,'Nitro Run','Avirex','varsity',1498,'https://www.avirex.com/collections/jackets/products/nitro-run-avf201o01-1','https://cdn.shopify.com/s/files/1/0255/1385/3021/products/AVF201O01_BLACK_1400x.png?v=1635861765','2022'),
	(2,'B - 3','Avirex','shearling',1200,'https://www.avirex.com/collections/jackets/products/b-3-shearling-jacket-avh191o01-1','https://cdn.shopify.com/s/files/1/0255/1385/3021/products/AVH191O01_FRONT_1400x.jpg?v=1629484078','2022'),
	(3,'College Bomber Leather Sleeves Tattoo Patches','Philipp Plein','bomber',5425,'https://www.plein.com/gb/college-bomber-leather-sleeves-tattoo-patches/SABC-ULB0005-PTE120N_02.html?cgid=men-clothing-outerwear_and_coats#cgid=men-clothing-outerwear_and_coats&pmin=1.00&prefn1=hasPicture&prefv1=true&start=3','https://www.plein.com/dw/image/v2/BBKQ_PRD/on/demandware.static/-/Sites-plein-master-catalog/default/dwe88d2781/images/rollover/SABC-ULB0005-PTE120N_02_r.jpg?sw=440&sh=560','2022'),
	(4,'Python Leather College Bomber Tattoo Patches','Philipp Plein','bomber',13025,'https://www.plein.com/gb/python-leather-college-bomber-tattoo-patches/SABC-MLB1473-PLE029P_02.html?cgid=men-clothing-outerwear_and_coats#cgid=men-clothing-outerwear_and_coats&pmin=1.00&prefn1=hasPicture&prefv1=true&start=4','https://www.plein.com/dw/image/v2/BBKQ_PRD/on/demandware.static/-/Sites-plein-master-catalog/default/dw3608ecbe/images/rollover/SABC-MLB1473-PLE029P_02_r.jpg?sw=440&sh=560','2022'),
	(5,'Come Out Fighting','Pelle Pelle','bomber',800,'https://www.grailed.com/listings/27565041-pelle-pelle-pelle-pelle-leather-jacket-size-40','https://process.fs.grailed.com/AJdAgnqCST4iPtnUxiGtTz/auto_image/cache=expiry:max/rotate=deg:exif/resize=height:1400/output=quality:90/compress/https://cdn.fs.grailed.com/api/file/WAEwtolTQSfZ11ieoybb','2015'),
	(6,'KOMAINU JAPANESE PRINT','Evisu','denim',455,'https://www.miinto.co.uk/p-komainu-japanese-print-e0438aee-4045-49ee-b0ee-ae3501230720?gclid=CjwKCAiA6Y2QBhAtEiwAGHybPY7gOKemp4be0ldprLcEC54YmfncIK5CrtliV0K9n3OqUXIfVNEiHRoCur0QAvD_BwE','https://static.miinto.net/products/b4b2f541ae0f5c4027b8dd02069fe555.jpg?width=400&height=600&title=komainu-japanese-print','2022'),
	(7,'ALLOVER LINEAR CAMOUFLAGE PADDED M65','Evisu','denim',354,'https://www.evisu.com/uk/allover-linear-camouflage-padded-m65-denim-jacket-2eahtm1dj201xxdq.html?color=INDIGO','https://cdn.evisucdn.com/media/catalog/product/cache/4f99427b83ce1ff251300d45eff85554/2/e/2eahtm1dj201xxdq-indw_5_ggv76ixxh3qdasrc.jpg','2022');

/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
