-- MariaDB dump 10.19  Distrib 10.6.11-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: attackxss
-- ------------------------------------------------------
-- Server version	10.6.11-MariaDB-2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `attackxss`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `attackxss` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `attackxss`;

--
-- Table structure for table `pwned`
--

DROP TABLE IF EXISTS `pwned`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pwned` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `host` char(40) DEFAULT NULL,
  `agent` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `cookie` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pwned`
--

LOCK TABLES `pwned` WRITE;
/*!40000 ALTER TABLE `pwned` DISABLE KEYS */;
INSERT INTO `pwned` VALUES (1,'2023-03-29 20:40:24','192.168.1.23','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','en-US,en;q=0.5','PHPSESSID=4vg0gqeesf8vdgvr14fh5ml7qa'),(2,'2023-03-29 20:41:10','192.168.1.23','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','en-US,en;q=0.5','PHPSESSID=4vg0gqeesf8vdgvr14fh5ml7qa'),(3,'2023-03-29 20:41:12','192.168.1.23','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','en-US,en;q=0.5','PHPSESSID=4vg0gqeesf8vdgvr14fh5ml7qa'),(4,'2023-03-29 20:41:13','192.168.1.23','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','en-US,en;q=0.5','PHPSESSID=4vg0gqeesf8vdgvr14fh5ml7qa'),(5,'2023-03-29 20:58:57','192.168.1.18','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','en,es;q=0.9,es-ES;q=0.8','PHPSESSID=psnmprr3sl12nra8oh1jfg7lpg'),(6,'2023-03-29 20:59:29','192.168.1.23','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','en-US,en;q=0.5','PHPSESSID=4vg0gqeesf8vdgvr14fh5ml7qa'),(7,'2023-03-29 20:59:36','192.168.1.23','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/111.0','en-US,en;q=0.5','PHPSESSID=4vg0gqeesf8vdgvr14fh5ml7qa'),(8,'2023-03-29 21:01:56','192.168.1.18','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','en,es;q=0.9,es-ES;q=0.8','PHPSESSID=psnmprr3sl12nra8oh1jfg7lpg');
/*!40000 ALTER TABLE `pwned` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-29 17:08:23
