-- MySQL dump 10.16  Distrib 10.1.13-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: RestaurantSys
-- ------------------------------------------------------
-- Server version	10.1.13-MariaDB

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
-- Table structure for table `cuisines`
--

DROP TABLE IF EXISTS `cuisines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuisines` (
  `CuisineID` int(11) NOT NULL AUTO_INCREMENT,
  `Category` char(15) NOT NULL,
  `Name` char(35) NOT NULL,
  `Description` tinytext NOT NULL,
  `Price` decimal(4,2) NOT NULL,
  PRIMARY KEY (`CuisineID`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuisines`
--

LOCK TABLES `cuisines` WRITE;
/*!40000 ALTER TABLE `cuisines` DISABLE KEYS */;
INSERT INTO `cuisines` VALUES (1,'Malaysia','Malaysian Curry','Choice of fish, prawns or seafood with special curry sauce, coconut milk, okra, tofu puff, and squid',20.00),(2,'Malaysia','Malaysian Assam Tumis','Choice of Fish Threadfin or fish with special spicy tamarind sauce, onion, tomato and okra',20.00),(3,'Malaysia','Penang Fried Assam Prawns','Prawns in special tamarind paste, coriander leaves, and carrot strips',17.00),(4,'Malaysia','Melaka Style Sambal','Choice of prawns or squid with Assam House special spicy chilli sauce, bitter bean, onion and mango',10.00),(5,'Malaysia','Super Star Sambal Petai','Choice of prawns or squid with special spicy sauce, bitter bean, onion and mango strips',15.00),(6,'Nyonya','Green Chilies Fish Fillet','Deep fried fish fillet, topped with special fragrant green chili paste and green pepper.',15.00),(7,'Nyonya','Cincalok Pork','Stir-fried sliced pork with sauce mixture, chilies and Thai basil.',7.00),(8,'Nyonya','Nyonya Pucuk Paku','Stir fried with fern shoots with special thick coconut milk, chilies and shrimps.',10.00),(9,'Nyonya','Nyonya Curry Kapitan','Choice of chicken or squid with thick curry sauce, green pepper, chilies and onions',15.00),(10,'Korea','Korean Appetizer','Wrapped seaweed, dried bean curd, onion, chilies, sweet and sour sauce with vegetables',10.00),(11,'Korea','Korean Chili Sauce','Stir-fried choice of fish, prawns, or seafood with secret sauce, carrot and onion',18.00),(12,'Korea','Korean Sizzling','Sizzling pork on hot pan and wrap with spicy Korean sauce and vegetable.',8.00),(13,'Korea','Korean Pan Cake','Deep-fried, flour batter eggs and shallots, served with mixture of soy sauce.',8.00),(14,'Korea','Korean Bean Curd Soup','Bean curd, onion, shallots, potato and dried anchovies in hot and sour soup.',8.00),(15,'Nostalgia','Fried Meat with Salted Fish','Deep fried meat marinated in salted fish.',10.00),(16,'Nostalgia','Nostalgic Qi-Lin Bean Curd','Fried homemade bean curd, topped with chicken, scallions, chilies and garlic.',6.00),(17,'Nostalgia','Fried Egg with Mushroom Sauce','Fried golden egg, topped with mushroom, garlic and scallions.',6.00),(18,'Nostalgia','Chicken Salad HK Style','Fried crispy chicken, topped with chopped carrots, homemade salad sauce and yam bean.',7.00),(19,'Nostalgia','Mongolia Black Pepper','Choice of prawns or chicken with sweet soy sauce, scallions and garlic.',10.00),(20,'Malaysia','Malaysian Curry Chicken','Spicy chicken in thick coconut curry sauce with lemon grass, chili padi.',10.00),(21,'Malaysia','Pineapple Curry Chicken','Spicy chicken in thick coconut curry sayce with pineapple, chili padi.',10.00),(22,'Malaysia','Melaka Sliced Pork','Deep fried pork marinated in spices.',8.00),(23,'Malaysia','Sri Malay Stir Fried','Your choice of vegetable stir fried with special fragrant chili paste, chilies and dried shrimps.',10.00),(24,'Malaysia','Bean Sprout with Salted Fish','Stir fried Ipoh famous bean sprout with salted fish and garlic.',7.00),(25,'Malaysia','Malacca Sambal Cucumber Boat','Fresh cucumber relish, topped with fragrant chili sauce.',8.00),(26,'Malaysia','Penang Acar Salad','Pickled assorted vegetables with sweet and sour vinegar, sugar.',6.00),(27,'Malaysia','Kerabu Pomelo Salad','Pomelo, crispy shallots, dried shrimps, fresh scallops, shrimps, cashew nuts and chili sauce.',9.00),(28,'Malaysia','Multicultural Spring Toss','Scallop, jellyfish, cabbage, carrot, cracker, special sweet and sour sauce wrapped in rice paper.',15.00),(29,'Nyonya','Nyonya Sweet Chilies','Choice of fish fillet, prawns or squid with fragran chili sauce, chilies, onion and green pepper.',15.00),(30,'Nyonya','Nyonya Fish Maw','Curry with vaious of vegetable, aromatic herbs and fermented fish stomach.',10.00),(31,'Nyonya','Nyonya Sizzling Otak Otak','Spicy mackerel paste mixed with secret spices and served on a sizzling platter.',10.00),(32,'Nyonya','Nyonya Jiu Hu Char','Stir fried shredded cuttlefish, dried cuttle fish strips, yam bean, carrot and cabbage.',15.00),(33,'Nostalgia','Drunken Prawns Soup','Prawns in Chinese wine broth with ginger, meat, scallions and galangal.',15.00),(34,'Nostalgia','Homemade Bean Curd','Braised angled gourd with homemade bean curd, garlic and seafood.',10.00),(35,'Nostalgia','Vegetarian Delights','Stir fried assorted vegetables, served on yam basked.',10.00),(36,'Nostalgia','Steamed Prawns with Angelica Root','Prawns with angelica roots, herbs, scallions and ginger.',15.00),(37,'Nostalgia','Deep-fried Spareribs','Deep fried marinated spareribs served with grapes sauce.',15.00),(38,'Nostalgia','Ginger Roasted Duck','Duck marinated in herbs and secret sauces, served with plum sauces, diced ginger, garlic and chilies.',25.00),(39,'Nostalgia','Cheese Flavor HK Style','Choice of fish, prawns or spareribs with special cheese sauce, tomato, chilies, carrots and scallions.',12.00),(40,'Nostalgia','Stir Fried White Cabbage','Stir fried white cabbage with salted veggies and garlic.',10.00);
/*!40000 ALTER TABLE `cuisines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `CustID` int(11) NOT NULL AUTO_INCREMENT,
  `CustTitle` varchar(5) NOT NULL,
  `Surname` char(20) NOT NULL,
  `Forename` char(20) NOT NULL,
  `TelNo` varchar(15) NOT NULL,
  PRIMARY KEY (`CustID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'Mr','Bloggs','Joe','0834814269'),(2,'Miss','O\' Sullivan','Catherine','0774814269'),(3,'Mr','Smith','Kevin','0663579569'),(4,'Mrs','Loh','Vivian','0663579569'),(5,'Mr','Chen','Brandon','0663579569'),(6,'Mr','Lew','Simon','0834826592'),(7,'Ms','Alba','Jessica','0884579825'),(8,'Mr','Chang','Aaron','0778954682'),(9,'Mr','Lee','Alex','0845984126'),(10,'Mrs','Kee','Joyce','0845948265'),(11,'Mr','Smith','Jonathan','0834874159'),(12,'Ms','Ling','Jerome','0668475896'),(13,'Mr','Yeong','De Jong','0834814268'),(14,'Mrs','Teh','Catherine','0841598452'),(15,'Ms','O\' Sullivan','Mary','0847512065'),(16,'Ms','O\' Sullivan','Jane','0847512486'),(17,'Mr','Lee','Jonathan','0843598452'),(18,'Ms','Loh','Mary','0868475985');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservations` (
  `ReserveID` int(11) NOT NULL AUTO_INCREMENT,
  `ReserveDate` date NOT NULL,
  `ReserveTime` time NOT NULL,
  `TotalPerson` tinyint(4) NOT NULL,
  `Price` decimal(5,2) DEFAULT '0.00',
  `CustID` int(11) NOT NULL,
  `TableID` tinyint(4) NOT NULL,
  `SittingID` tinyint(4) NOT NULL,
  `Status` enum('EN','en','CF','cf','CC','cc','AR','ar') NOT NULL DEFAULT 'EN',
  PRIMARY KEY (`ReserveID`),
  KEY `CustID` (`CustID`),
  KEY `TableID` (`TableID`),
  KEY `SittingID` (`SittingID`),
  CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`CustID`) REFERENCES `customers` (`CustID`),
  CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`TableID`) REFERENCES `tableinfos` (`TableID`),
  CONSTRAINT `reservations_ibfk_3` FOREIGN KEY (`SittingID`) REFERENCES `sittings` (`SittingID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
INSERT INTO `reservations` VALUES (1,'2016-11-30','13:30:00',2,0.00,1,2,1,'EN'),(2,'2016-11-30','19:30:00',2,0.00,2,2,2,'EN'),(3,'2016-11-30','20:30:00',5,0.00,3,5,2,'EN'),(4,'2016-11-30','20:00:00',10,0.00,4,9,2,'CC'),(5,'2016-11-30','20:00:00',10,0.00,5,9,2,'EN'),(6,'2016-11-30','12:00:00',2,0.00,6,2,1,'EN'),(7,'2016-12-01','12:00:00',2,0.00,7,2,1,'EN'),(8,'2016-12-02','12:00:00',2,0.00,8,1,1,'EN'),(9,'2016-12-01','13:00:00',2,0.00,9,2,1,'CC'),(10,'2016-12-01','13:00:00',2,0.00,10,1,1,'EN'),(11,'2016-12-05','13:00:00',2,0.00,11,1,1,'EN'),(12,'2016-12-05','19:00:00',2,0.00,12,3,2,'EN'),(13,'2016-12-05','14:00:00',2,0.00,13,2,1,'EN'),(14,'2016-12-05','14:30:00',2,0.00,14,2,1,'EN'),(15,'2016-12-07','12:00:00',6,0.00,15,4,1,'CC'),(16,'2016-12-07','12:00:00',6,0.00,16,4,1,'EN'),(17,'2016-12-07','18:30:00',8,0.00,17,7,2,'EN'),(18,'2016-12-07','20:30:00',3,0.00,18,2,2,'EN');
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sittings`
--

DROP TABLE IF EXISTS `sittings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sittings` (
  `SittingID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `TimeRange` char(20) NOT NULL,
  PRIMARY KEY (`SittingID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sittings`
--

LOCK TABLES `sittings` WRITE;
/*!40000 ALTER TABLE `sittings` DISABLE KEYS */;
INSERT INTO `sittings` VALUES (1,'11:30 - 15:00'),(2,'18:00 - 22:00');
/*!40000 ALTER TABLE `sittings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscribers` (
  `SubID` int(11) NOT NULL AUTO_INCREMENT,
  `SubTitle` varchar(5) NOT NULL,
  `Surname` char(20) NOT NULL,
  `Forename` char(20) NOT NULL,
  `Email` char(50) NOT NULL,
  `TelNo` varchar(15) NOT NULL,
  PRIMARY KEY (`SubID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribers`
--

LOCK TABLES `subscribers` WRITE;
/*!40000 ALTER TABLE `subscribers` DISABLE KEYS */;
INSERT INTO `subscribers` VALUES (1,'Mr','Smith','John','johnsmith@yahoo.ie','0667839942'),(3,'Mr','Aldiss','Brian','brianaldiss@yahoo.ie','0883452349'),(5,'Mr','Bailey','James','jamesbailey@hotmail.com','0834825495'),(6,'Mr','Chen','Brandon','brandonchen@yahoo.com','0776578924'),(7,'Ms','Teh','Catherine','catherineteh@gmail.com','0789234569'),(9,'Ms','Tan','Cory','corytan@yahoo.ie','0774584265');
/*!40000 ALTER TABLE `subscribers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tableinfos`
--

DROP TABLE IF EXISTS `tableinfos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tableinfos` (
  `TableID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `Smoking` enum('N','n','Y','y') NOT NULL,
  `MaxCapacity` tinyint(4) NOT NULL,
  `Location` char(15) NOT NULL,
  PRIMARY KEY (`TableID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tableinfos`
--

LOCK TABLES `tableinfos` WRITE;
/*!40000 ALTER TABLE `tableinfos` DISABLE KEYS */;
INSERT INTO `tableinfos` VALUES (1,'N',3,'Normal'),(2,'N',3,'Window'),(3,'Y',3,'Outdoor'),(4,'Y',6,'Outdoor'),(5,'N',6,'Window'),(6,'N',6,'Normal'),(7,'N',9,'Normal'),(8,'N',9,'Window'),(9,'N',12,'Normal'),(10,'N',12,'Window'),(11,'N',15,'Window'),(12,'N',15,'Normal'),(13,'N',18,'Normal'),(14,'N',20,'Normal');
/*!40000 ALTER TABLE `tableinfos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-07 13:08:13
