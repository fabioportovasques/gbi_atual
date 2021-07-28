-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: db-gbi
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `codcliente` int NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sobrenome_cliente` varchar(45) CHARACTER SET latin2 COLLATE latin2_general_ci NOT NULL,
  `telefone1_cliente` varchar(15) CHARACTER SET latin2 COLLATE latin2_general_ci DEFAULT NULL,
  `telefone2_cliente` varchar(15) DEFAULT NULL,
  `cpf_cliente` varchar(14) DEFAULT NULL,
  `rg_cliente` varchar(15) CHARACTER SET latin2 COLLATE latin2_general_ci DEFAULT NULL,
  `rua_cliente` varchar(50) DEFAULT NULL,
  `numero_rua_cliente` int DEFAULT NULL,
  `cidade_cliente` varchar(50) DEFAULT NULL,
  `uf_cliente` char(2) CHARACTER SET latin2 COLLATE latin2_general_ci DEFAULT NULL,
  `data_nascimento_cliente` date DEFAULT NULL,
  `sexo_cliente` varchar(45) DEFAULT NULL,
  `bairro_cliente` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin2;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'fabio','vasques',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'teste1','teste1...',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'teste2','teste2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'teste3','teste3','53999367651',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'Teste4','Teste4','53999365413',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'Teste5','Teste5','5363215488',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'teste6','teste6','5435345345',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,'teste7','telefone2_cliente','53999367651','999367651',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'teste8','teste8','45345345','5345345343',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,'teste9','teste9','4324234','423423',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,'teste10','teste10','42342','42423','32432',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,'teste11','teste11','4343','4343','34324','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,'teste11','teste11','5435345','5435345','43345','534534535',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,'teste12','teste12','43434','4343','43433','4343',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,'teste13','teste13','4343','4343','33343','3434','841',NULL,NULL,NULL,NULL,NULL,NULL),(16,'Fabio Geovane','Porto vasques','53999367651','53999975310','02041884070','1096853931','841',NULL,NULL,NULL,NULL,NULL,NULL),(17,'joao','cruz','432423','43243242','3443242','4324324','',NULL,NULL,NULL,NULL,NULL,NULL),(18,'teste14','teste14','42342','42342','324234','42342','841',NULL,NULL,NULL,NULL,NULL,NULL),(19,'teste15','teste15','43534','534534','43242','5353','joaquim gasso borges',841,NULL,NULL,NULL,NULL,NULL),(20,'teste16','teste16','42342','42342','43423','423423','joaquim gasso borges',841,'Bagé',NULL,NULL,NULL,NULL),(21,'teste17','teste17','43242','42342','43242','4234234','joaquim gasso borges',842,'Hulha',NULL,NULL,NULL,NULL),(22,'teste18','teste18','42342','43242','42342','42342','joaquim gasso borges',852,'Candiota',NULL,NULL,NULL,NULL),(23,'teste19','teste19','423423','42342','43242','4242','joaquim gasso borges',825,'Bagé',NULL,NULL,NULL,NULL),(24,'teste20','teste20','535','54353','5345','5345','joaquim gasso borges',879,'Hulha',NULL,NULL,NULL,NULL),(25,'teste21','teste21','42342','42342','324234','423423','erfeferfr',4334,'Hulha',NULL,NULL,NULL,NULL),(26,'teste22','teste22','54353','53534','45351','53453','ertert',4535,'Hulha',NULL,NULL,NULL,NULL),(27,'teste23','teste23','43243','432423','42342','42342','rwtwe',345345,'Hulha',NULL,NULL,NULL,NULL),(28,'teste24','teste24','6868','6868','8768','6868','rewrwerwer',34234,'Hulha',NULL,NULL,NULL,NULL),(29,'teste25','teste25','6768768','76868687','68678','6876868','fefererf',42342,'Hulha',NULL,NULL,NULL,NULL),(30,'teste26','teste26','6786876','6868','678687','68768','ferefef',321,'Bagé',NULL,NULL,NULL,NULL),(31,'teste27','teste27','7678686','786868','687687','68768678','fafsffef',4242,'Bagé',NULL,NULL,NULL,NULL),(32,'teste28','teste28','7897897','897979','78789','897979','efeefefr',4342,'Hulha',NULL,NULL,NULL,NULL),(33,'teste29','teste29','798789','897897','79798','78979','bjbjb',89808,'bage','rs','2021-02-10','masculino','pedra branca'),(34,'teste29','teste29','79879','79879','7979','8799','fwfewfwefwef',34234,'Bagé',NULL,NULL,NULL,NULL),(35,'teste30','teste30','76868','76868','68768','786868','ewwerw',344,'Candiota',NULL,NULL,NULL,NULL),(36,'teste31','teste31','87979','798789','79798','87979','4fwefw',4323,'Bagé',NULL,NULL,NULL,NULL),(37,'teste32','teste32','78979','79879','8797','797987','ewrwre',4343,'Bagé',NULL,NULL,NULL,NULL),(38,'teste33','teste33','87979','78979','78979','78979','kçlkçkç',4343,'Bagé',NULL,NULL,NULL,NULL),(39,'teste34','teste34','789789','78979','7897','87979','9879797hkjnk',798,'pedra branca',NULL,NULL,NULL,NULL),(40,'teste35','teste35','877897','897979','78789','789789','fwfwef',343,'Bagé',NULL,NULL,NULL,NULL),(41,'teste36','teste36','42342','42423','432423','42423','ewrewrwer',423423,'Bagé',NULL,NULL,NULL,NULL),(42,'teste37','teste37','76868','678678','678678','67868','fefef',343,'Bagé',NULL,NULL,NULL,NULL),(43,'teste38','teste38','897979','7987979','78979','7897897','ewewew',322,'Bagé','RS',NULL,NULL,NULL),(44,'teste39','teste39','787987897','7897979','89797','7897897','ffee',4343,'Hulha','SP',NULL,NULL,NULL),(45,'teste40','teste40','8797897','789779','8897897','78978979','rewrwewr',4343,'Candiota','RJ','2021-02-25',NULL,NULL),(46,'teste41','teste41','897979','8978997','7987897','7987879','joaquim gasso borges',3434,'Bagé','RS','2021-02-10',NULL,NULL),(47,'teste42','teste42','678687','87678687','687678','678687','joaquim gasso borges',3232,'Bagé','RS','2021-02-17',NULL,NULL),(48,'teste43','teste43','798798','78998798','7898798','98789789','joaquim gasso borges',343,'Bagé','RS','2021-02-17','option1','pedra branca'),(49,'teste44','teste44','987987','98778','87897','79879','joaquim gasso borges',4343,'Bagé','RS','2021-02-17','masculino','pedra branca'),(50,'teste45','teste45','7987979','98789798','87897','797897','sete de setembro',445,'Bagé','RS','2021-02-17','femenino','centro'),(51,'Fabio Geovane','Porto vasques','53999367651','999975310','02041884070','1096853931','Joaquim gasso Borges',841,'Bagé','RS','2020-11-10','masculino','Pedra branca'),(52,'Natcheli ','Vasques','999975310','999367651','3215468','10365546','Joaquim gasso Borges',841,'Bagé','RS','1991-02-22','femenino',''),(53,'Teste46','Teste 46','687878','75787878','36588788','2834975788','Sete de setembro',2356,'Bagé','RS','2021-02-10','femenino','Centro');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-17 23:30:18
