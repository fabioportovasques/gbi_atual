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
  `nome_cliente` varchar(40) NOT NULL,
  `sobre_nome_cliente` varchar(45) NOT NULL,
  `telefone1_cliente` varchar(15) NOT NULL,
  `telefone2_cliente` varchar(15) DEFAULT NULL,
  `cpf_cliente` varchar(14) DEFAULT NULL,
  `RG_cliente` varchar(15) DEFAULT NULL,
  `rua_cliente` varchar(50) DEFAULT NULL,
  `numero_rua_cliente` int DEFAULT NULL,
  `cidade_cliente` int DEFAULT NULL,
  `uf_cliente` char(2) NOT NULL,
  `pais_cliente` varchar(15) DEFAULT NULL COMMENT '	',
  `data_nascimento_cliente` varchar(45) DEFAULT NULL,
  `sexo_cliente` varchar(45) DEFAULT NULL,
  `bairro_cliente` varchar(45) DEFAULT NULL,
  `login_cod_login` int NOT NULL,
  PRIMARY KEY (`codcliente`,`login_cod_login`),
  KEY `fk_cliente_login1_idx` (`login_cod_login`),
  CONSTRAINT `fk_cliente_login1` FOREIGN KEY (`login_cod_login`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicos`
--

DROP TABLE IF EXISTS `servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicos` (
  `cod_servicos` int NOT NULL AUTO_INCREMENT,
  `filtro_combustivel` varchar(80) DEFAULT NULL,
  `filtro_cabine` varchar(80) DEFAULT NULL,
  `filtro_ar` varchar(80) DEFAULT NULL,
  `filtro_oleo` varchar(80) DEFAULT NULL,
  `data_troca` date NOT NULL,
  `proxima_troca` date NOT NULL,
  `veiculo_cod_veiculo` int NOT NULL,
  `veiculo_placa_veiculo` int NOT NULL,
  `cliente_codcliente` int NOT NULL,
  `cliente_login_cod_login` int NOT NULL,
  PRIMARY KEY (`cod_servicos`,`veiculo_placa_veiculo`,`cliente_codcliente`,`cliente_login_cod_login`),
  KEY `fk_servicos_veiculo1_idx` (`veiculo_placa_veiculo`),
  KEY `fk_servicos_cliente1_idx` (`cliente_codcliente`,`cliente_login_cod_login`),
  CONSTRAINT `fk_servicos_cliente1` FOREIGN KEY (`cliente_codcliente`, `cliente_login_cod_login`) REFERENCES `cliente` (`codcliente`, `login_cod_login`),
  CONSTRAINT `fk_servicos_veiculo1` FOREIGN KEY (`veiculo_placa_veiculo`) REFERENCES `veiculo` (`placa_veiculo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicos`
--

LOCK TABLES `servicos` WRITE;
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `nome` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin2;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'fabioportovasques321@gmail.com','6e63aa9f23a7ff9ff9b1f4f3a0a3f1e9',NULL,'Fábio Vasques'),(2,'fgpvasqu@gmail.com','224460',NULL,'Fábio Vasques'),(3,'fabio@gmail.com','6e63aa9f23a7ff9ff9b1f4f3a0a3f1e9',NULL,'Fábio Vasques'),(4,'adm@gmail.com','6e63aa9f23a7ff9ff9b1f4f3a0a3f1e9',NULL,'Administrador');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `veiculo`
--

DROP TABLE IF EXISTS `veiculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `veiculo` (
  `placa_veiculo` int NOT NULL,
  `tipo_veiculo` varchar(25) NOT NULL,
  `cor_veiculo` varchar(20) NOT NULL,
  `modelo_veiculo` varchar(45) NOT NULL,
  `fabricante_veiculo` varchar(45) NOT NULL,
  `ano_fabricacao_veiculo` date NOT NULL,
  `km_veiculo` int NOT NULL,
  `obs_veiculo` varchar(45) DEFAULT NULL,
  `cliente_codcliente` int NOT NULL,
  PRIMARY KEY (`placa_veiculo`),
  KEY `fk_veiculo_cliente1_idx` (`cliente_codcliente`),
  CONSTRAINT `fk_veiculo_cliente1` FOREIGN KEY (`cliente_codcliente`) REFERENCES `cliente` (`codcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veiculo`
--

LOCK TABLES `veiculo` WRITE;
/*!40000 ALTER TABLE `veiculo` DISABLE KEYS */;
/*!40000 ALTER TABLE `veiculo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-13 23:58:07
