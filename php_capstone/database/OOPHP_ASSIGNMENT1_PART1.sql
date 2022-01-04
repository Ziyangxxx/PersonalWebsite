-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: php_capstone
-- ------------------------------------------------------
-- Server version	10.4.14-MariaDB

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Landscape Projects'),(2,'Artwork'),(3,'Photo'),(4,'IT');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

DROP TABLE IF EXISTS `log`;
CREATE TABLE `log`
 (
 `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 `event` VARCHAR(255),
 `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
 )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `comments` longtext NOT NULL,
  `like_dislike` enum('Like','Dislike') DEFAULT NULL,
  `score` float(2,1) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `user_id_idx` (`user_id`),
  KEY `project_id_idx` (`project_id`),
  CONSTRAINT `project_id` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `tools` varchar(255) NOT NULL,
  `discription` longtext NOT NULL,
  `created_year` int(11) NOT NULL,
  `created_location` char(3) NOT NULL,
  `status` enum('Finished','In Progress') NOT NULL,
  `visited_times` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id_idx` (`category_id`),
  CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` 
VALUES 
(1,'Chaotianmen Plaza','IMG_0992.JPG',1,'PS AutoCAD Ai Lumion SketchUp','This is a landscape architecture project in Chongqing province of China. The project is located at the point of intersection between Jialing River and Changjiang River.',2019,'CN','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(2,'Vitamin of City','IMG_0895.JPG',1,'PS AutoCAD Ai Lumion SketchUp','This is a landscape architecture project which is in ChongQing from China as well. The project is located at a neighbourhood surrouded by office buildings and redidential area.',2019,'CN','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(3,'The City Above the Water','IMG_0993.JPG',1,'PS AutoCAD Ai Lumion SketchUp','This is a landscape architecture and urban planning project. The project is located in Suzhou from China, which is known as Oriental Venice.',2019,'CN','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(4,'An Old Man','IMG_0995.JPG',2,'Pencil Charcoal','This is a 3-hour sketch of a model from one model company. I emphasized his tanned skin and facial structure to present the feeling of an elder.',2019,'CN','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(5,'Old Man with Hat','IMG_0998.JPG',2,'Pencil Charcoal','This is a 3.5-hour sketch of an old man who live next to the studio where I make this sketch. The model has an inherently suspicious face and I caught this one moment of his eyes to reinforces the emotion.',2019,'CN','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(6,'Young Girl','IMG_1000.JPG',2,'Pencil Charcoal','This is a 3.5-hour sketch of a young female model who has beautiful eyes. It is hard to draw a young gril after drawing old men all the time.',2019,'CN','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(7,'Midage Lady','IMG_1001.JPG',2,'Pencil Charcoal','This ss a 4-hour sketch of a midage lady from one model company. This is a sketch right after I finished some copies from Nicolai Ivanovich Fechin and trying to find some inspiration by imitating his style.',2019,'CN','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(8,'Janitor','IMG_1002.JPG',2,'Pencil Charcoal','This is a 3-hour sketch of one janitor in my community centre. Because this lady has never be a model before so she was showing a confused, nervous, and curious looking face. ',2019,'CN','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(9,'My Neighbor','IMG_1003.JPG',2,'Pencil Charcoal','This is a 3.5-hour sketch of my neighbour. This is me trying to adapt to another style which is similar to chinese ink painting.',2019,'CN','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(10,'My Classmate','IMG_1004.JPG',2,'Pencil Charcoal','This a 30-minute sketch of my classmate in the studio. I chose this angle because I was attracted by the material of her jacket and also to capture a better posture.',2019,'CN','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(11,'Some Fruits','IMG_1005.JPG',2,'Gouache','This is a gouache practise which helped me to grasp the better understanding of how to improve my painting. I broke down the steps into 4 stages to show to process of drawing a gouache.',2018,'CN','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(12,'In Powerlong Museum','IMG_1006.JPG',3,'Camera','This is a photo taken in Powerlong museum in Shanghai from China.',2018,'CN','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(13,'In Montreal','IMG_1014.JPG',3,'Camera','This is a photo taken in Montreal during a Christmas trip.',2019,'CN','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(14,'In New Zealand','IMG_1008.JPG',3,'Camera','This is a photo taken during a trip to New Zealand.',2019,'CN','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(15,'In Russia','IMG_1009.JPG',3,'Camera','This is a photo taken during the trip to Russia. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',2019,'CN','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(16,'My Website','IMG_1010.JPG',4,'HTML CSS JavaScript PS PHP','This is my personal site created during my one year study in PACE of University of Winnipeg. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',2019,'CA','In Progress',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(17,'An Animation','IMG_1011.JPG',3,'An','This is an animation using Adobe Animate, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',2019,'CA','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(18,'Javascript Game','IMG_1011.JPG',4,'HTML CSS JavaScript PS','This is a mini game made during my JavaScript course, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',2019,'CA','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(19,'My School','IMG_1012.JPG',2,'IPhone Camera','This is a morning view in my university where I got my bachlor degree, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',2018,'CN','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
(20,'Graduation','IMG_1013.JPG',2,'IPhone Camera','This was taken on my way to the train station at the day when I graduated and left my university, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',2019,'CN','Finished',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first` varchar(255) DEFAULT NULL,
  `last` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `postalcode` varchar(6) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (23,'Ziyang','Xu','canada','Manitoba','Winnipeg','320 Colony St','R3C 0E','2046987311','asdiop963@hotmail.com','$2y$10$oFQ/ByPd2F7pRadd0SCrs.3ticy9HYPi3NaSNC44hESMrEXv26nV6','2020-09-04 16:20:27',NULL),(24,'Ziyang','Xu','canada','Manitoba','Winnipeg','320 Colony St','R3C 0E','2046987311','463523832@qq.com','$2y$10$9PFEWuvwRyZ543vIPnn.xODJAQTY7mNHoohSINCcL8dvUk0Im0TR6','2020-09-05 04:41:43',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-09 15:37:20
