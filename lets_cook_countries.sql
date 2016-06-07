CREATE DATABASE  IF NOT EXISTS `lets_cook` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `lets_cook`;
-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: lets_cook
-- ------------------------------------------------------
-- Server version	5.5.42

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'American',NULL,NULL),(2,'Argentinian',NULL,NULL),(3,'Armenian ',NULL,NULL),(4,'Australian',NULL,NULL),(5,'Austrian',NULL,NULL),(6,'Basque',NULL,NULL),(7,'Belgian',NULL,NULL),(8,'Brazillian',NULL,NULL),(9,'British',NULL,NULL),(10,'Burmese',NULL,NULL),(11,'Cajun',NULL,NULL),(12,'Canadian',NULL,NULL),(13,'Caribbean',NULL,NULL),(14,'Chinese',NULL,NULL),(15,'Colombian',NULL,NULL),(16,'Croatian',NULL,NULL),(17,'Czech',NULL,NULL),(18,'Danish',NULL,NULL),(19,'Dutch',NULL,NULL),(20,'Egyption',NULL,NULL),(21,'Eskimo',NULL,NULL),(22,'Ethiopian',NULL,NULL),(23,'Filipino',NULL,NULL),(24,'Finnish',NULL,NULL),(25,'French',NULL,NULL),(26,'German',NULL,NULL),(27,'Greek',NULL,NULL),(28,'Hawaiian',NULL,NULL),(29,'Hungarian',NULL,NULL),(30,'Icelandic',NULL,NULL),(31,'Indian & Pakistani',NULL,NULL),(32,'Indonesia',NULL,NULL),(33,'Irish',NULL,NULL),(34,'Italian',NULL,NULL),(35,'Japanese',NULL,NULL),(36,'Jewish',NULL,NULL),(37,'Korean',NULL,NULL),(38,'Lebanese',NULL,NULL),(39,'Mexican',NULL,NULL),(40,'Morrocan',NULL,NULL),(41,'Native American',NULL,NULL),(42,'New Zealand',NULL,NULL),(43,'Other African',NULL,NULL),(44,'Other Middle Eastern',NULL,NULL),(45,'Persian',NULL,NULL),(46,'Peruvian',NULL,NULL),(47,'Polish',NULL,NULL),(48,'Portuguese',NULL,NULL),(49,'Romanian',NULL,NULL),(50,'Russian',NULL,NULL),(51,'Scandinavian',NULL,NULL),(52,'Scottish',NULL,NULL),(53,'Serbian',NULL,NULL),(54,'Singaporean',NULL,NULL),(55,'Spanish',NULL,NULL),(56,'Swedish',NULL,NULL),(57,'Swiss',NULL,NULL),(58,'Tahitian',NULL,NULL),(59,'Thai',NULL,NULL),(60,'Tibetan',NULL,NULL),(61,'Turkish',NULL,NULL),(62,'Ukranian',NULL,NULL),(63,'Venezuelan',NULL,NULL),(64,'Viernamese',NULL,NULL),(65,'Welsh',NULL,NULL);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-07 15:15:56
