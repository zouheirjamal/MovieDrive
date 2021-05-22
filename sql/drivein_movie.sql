CREATE DATABASE  IF NOT EXISTS `drivein` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `drivein`;
-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: drivein
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `movie` (
  `idmovie` int NOT NULL,
  `movieName` varchar(45) NOT NULL,
  `Day` varchar(45) NOT NULL,
  `showTimes` time NOT NULL,
  `date` date NOT NULL,
  `movieGenre` varchar(45) NOT NULL,
  `language` varchar(45) NOT NULL,
  `yearReleased` year NOT NULL,
  `description` longtext NOT NULL,
  `image` text,
  PRIMARY KEY (`idmovie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movie`
--

LOCK TABLES `movie` WRITE;
/*!40000 ALTER TABLE `movie` DISABLE KEYS */;
INSERT INTO `movie` VALUES (1,'Hunter killer','friday','20:00:00','0000-00-00',' Action, Thriller ','english',2009,'An untested American submarine captain teams with U.S. Navy Seals to rescue the Russian president, who has been kidnapped by a rogue general.','2.jpg'),(2,'the choice','friday','22:30:00','0000-00-00','Drama, Romance','english',2016,'Travis and Gabby first meet as neighbors in a small coastal town and wind up in a relationship that is tested by life\'s most defining events.','1.jpg'),(3,'dear john','saturday','20:00:00','0000-00-00','Drama, Mystery, Romance','english',2010,'A romantic drama about a soldier who falls for a conservative college student while he\'s home on leave','4m.jpg'),(4,'khabsa','daturday','22:30:00','0000-00-00','comedy, romance','arabic',2018,'The romp revolves around a dinner party hosted by the young and vicacious Nayla to introduce Fares, the love of her life, to Silvio, her new fiancé','1m.jpg'),(5,'hitman\'s bodyguard','sunday','20:00:00','0000-00-00','Action, Comedy, Crime','english',2017,'The world\'s top bodyguard gets a new client, a hitman who must testify at the International Criminal Court. They must put their differences aside and work together to make it to the trial on time.','3m.jpg'),(6,'Qu\'est-ce qu\'on a encore fait au bon dieu?','sunday','22:30:00','0000-00-00','comedy','french',2021,'Claude and Marie hardly bear marriages of their first three daughters with men of different origin and religion. Their last hope is in fourth, youngest daughter, which declares she has a Catholic fiancé.','2m.jpg');
/*!40000 ALTER TABLE `movie` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-15 21:02:53
