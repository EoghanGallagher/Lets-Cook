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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Appetizers and Snacks',NULL,NULL),(2,'BBQ and Grilling',NULL,NULL),(3,'Bread Recipes',NULL,NULL),(4,'Breakfast and Brunch',NULL,NULL),(5,'Desserts',NULL,NULL),(6,'Dinner Recipes',NULL,NULL),(7,'Drinks',NULL,NULL),(8,'Everyday Cooking',NULL,NULL),(9,'Free From Recipes',NULL,NULL),(10,'Fruits and Vegtables',NULL,NULL),(11,'Healthy Recipes',NULL,NULL),(12,'Holidays and Events',NULL,NULL),(13,'Ingredients',NULL,NULL),(14,'Lunch Recipes',NULL,NULL),(15,'Main Dishes',NULL,NULL),(16,'Meat and Poulty',NULL,NULL),(17,'Pasta and Noodles',NULL,NULL),(18,'Salad Recipes',NULL,NULL),(19,'Seafood Recipes',NULL,NULL),(20,'Side Dishes',NULL,NULL),(21,'Soups',NULL,NULL),(22,'Stew',NULL,NULL),(23,'Chili',NULL,NULL),(24,'Trusted Brands',NULL,NULL),(25,'U.S. Recipes',NULL,NULL),(26,'World Cuisine',NULL,NULL);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
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
