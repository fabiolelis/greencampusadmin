-- MySQL dump 10.13  Distrib 5.7.9, for osx10.9 (x86_64)
--
-- Host: localhost    Database: greencampus
-- ------------------------------------------------------
-- Server version	5.6.29

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
-- Dumping data for table `characteristic`
--

LOCK TABLES `characteristic` WRITE;
/*!40000 ALTER TABLE `characteristic` DISABLE KEYS */;
INSERT INTO `characteristic` VALUES (1,1,'Mature tree','','/Library/WebServer/Documents/gcadmin/www/asse',NULL,'mature alder pic'),(2,1,'Flowers and Fruit','Alder is monoecious, it produces both male and female flowers on the same tree.   The male catkins are pictured on the left, while the female fruits appear on the right.\n','/Library/WebServer/Documents/gcadmin/www/asse',NULL,'alder flower'),(3,1,'Bark','As the bark ages, it becomes dark grey and fissured, younger bark has very noticeable white lenticels.\n',NULL,NULL,'bark alder'),(4,1,'Young bark','','/Library/WebServer/Documents/gcadmin/www/asse',3,'alder -> bark -> young'),(5,1,'Mature bark','','/Library/WebServer/Documents/gcadmin/www/asse',3,'alder mature bark'),(6,1,'Leaves','The leaves are rounded and some describe it as being pear-shaped. The margin is toothed, but there are fewer teeth towards the leaf stem. There are usually 6-8 pairs of veins, which are almost â€˜sunkenâ€™ into the surrounding leaf tissue. The leaves tend to remain on the trees until quite late in the year\n','/Library/WebServer/Documents/gcadmin/www/asse',NULL,'alder leaves'),(7,1,'Alnus_glutinosa_Botanical Illustration','','/Library/WebServer/Documents/gcadmin/www/asse',NULL,'alder illustration');
/*!40000 ALTER TABLE `characteristic` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-08 23:39:42
