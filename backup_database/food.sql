-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: food
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.16-MariaDB

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
-- Table structure for table `bkp_produtos`
--

DROP TABLE IF EXISTS `bkp_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bkp_produtos` (
  `id` int(11) NOT NULL DEFAULT '0',
  `code` varchar(50) CHARACTER SET utf8 NOT NULL,
  `name` char(255) CHARACTER SET utf8 NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '1',
  `price` decimal(25,2) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT 'no_image.png',
  `tax` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `cost` decimal(25,2) DEFAULT NULL,
  `tax_method` tinyint(1) DEFAULT '1',
  `quantity` decimal(15,2) DEFAULT '0.00',
  `barcode_symbology` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'code39',
  `type` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'standard',
  `details` text CHARACTER SET utf8,
  `alert_quantity` decimal(10,2) DEFAULT '0.00',
  `cozinha` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bkp_produtos`
--

LOCK TABLES `bkp_produtos` WRITE;
/*!40000 ALTER TABLE `bkp_produtos` DISABLE KEYS */;
INSERT INTO `bkp_produtos` VALUES (1,'0001','Hamburquer',2,2.00,'99ba81363ddbfe5a92c93023e1fd550a.jpg','0',4.00,0,53.00,'code39','standard','Hamburguer com P?o de Hamburguer, queijo, carne, presunto e salada',5.00,1),(2,'0002','Mixto Quente',2,1.00,'3ba18844e23b27e8224f8fa6b1752208.jpg','0',3.00,0,8.00,'code39','standard','',5.00,1),(3,'0003','Cahorro Quente',2,2.00,'573bc5101fabefd864960416b1752899.jpg','0',3.00,0,4.00,'code39','standard','',5.00,1),(4,'0004','Bolo de Chocolate',2,2.00,'8ad58758122f3a886e859def53da6a6a.jpg','0',3.00,0,7.00,'code39','standard','',5.00,0),(5,'0005','Coxinha de Frango',2,2.00,'d3115abf501ce492bdf449f72f185fb1.jpg','0',3.00,0,9.00,'code39','standard','',5.00,0),(6,'0006','Empada',2,2.00,'76fed631b7861010869172aa83d78e0a.jpg','0',3.00,0,19.00,'code39','standard','',5.00,0),(7,'0007','Monteiro Lopes',2,2.00,'3274477f5b7d3ef257c4562c56ef387e.jpg','0',3.00,0,10.00,'code39','standard','',5.00,0),(8,'0008','Risole de Carne',2,2.00,'32a3ac97716a9dc68812aecbaf11840a.jpg','0',4.00,0,4.00,'code39','standard','',5.00,0),(9,'0009','Coxinha de Caranguejo',2,4.00,'8bd5b89b645b1bc2d4d08816b5ad3d0b.jpg','0',6.00,0,6.00,'code39','standard','',5.00,0),(10,'0010','Coxinha de Camar?o',2,4.00,'272825062f261b126f1996ed099b4b87.jpg','0',6.00,0,7.00,'code39','standard','',5.00,0),(11,'0011','Sonho',2,2.00,'1f56837339171226e7e33eb0c5e8eae0.jpg','0',3.00,0,7.00,'code39','standard','',5.00,0),(12,'0012','Lasanha',2,6.00,'fd1c25461a5fbb0597c68bb78100c6ec.jpg','0',9.00,0,10.00,'code39','standard','',5.00,0),(13,'0013','Torta de Chocolate',2,3.00,'11fcdf61a2d8c2d6b7c3e9c0a6996a54.jpg','0',6.00,0,10.00,'code39','standard','',5.00,0),(14,'0014','Fanta Laranja Lata',1,2.00,'f0ed23add960528f5da95d8fb2a8a106.jpg','0',4.00,0,10.00,'code39','standard','',5.00,0),(15,'0015','Coca-Cola Lata',1,2.00,'d1ae8344e2fdfc3fcd80a96bb1f00240.jpg','0',4.00,0,7.00,'code39','standard','',5.00,0),(16,'0016','?gua Mineral',1,2.00,'91b3bcff369f45e167c3544bad752912.jpg','0',3.00,0,9.00,'code39','standard','',5.00,0),(17,'0017','Suco de Laranja',1,4.00,'f4cab501731cb47389a6c1a9a54cf736.jpg','0',6.00,0,5.00,'code39','standard','',5.00,0),(18,'01','Combo M',2,10.99,'no_image.png','5',8.71,0,0.00,'code39','combo','',0.00,0),(19,'02','Batata M',2,7.99,'no_image.png','0',4.72,0,0.00,'code39','standard','',0.00,0),(20,'03','Cobertura Cheddar',2,1.00,'no_image.png','0',0.27,0,0.00,'code39','standard','',0.00,0),(21,'012','Pizza Calabresa',3,24.00,'no_image.png','0',12.00,1,10.00,'code39','standard','',1.00,1),(22,'20','Pizza Mussarela',3,26.00,'no_image.png','0',13.00,1,10.00,'code39','standard','',0.00,1),(23,'027','1/2 Pizza Mussarela',3,26.00,'no_image.png','0',6.00,0,11.00,'code39','standard','',0.00,1),(24,'01777','1/2 Calabresa',3,21.00,'no_image.png','0',6.00,0,9.00,'code39','standard','',0.00,1);
/*!40000 ALTER TABLE `bkp_produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `caixa01`
--

DROP TABLE IF EXISTS `caixa01`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `caixa01` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_abertura` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `data_fechamento` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `valor_inicial` decimal(10,2) NOT NULL,
  `valor_final` decimal(10,2) NOT NULL,
  `status` varchar(45) CHARACTER SET utf8 NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caixa01`
--

LOCK TABLES `caixa01` WRITE;
/*!40000 ALTER TABLE `caixa01` DISABLE KEYS */;
INSERT INTO `caixa01` VALUES (1,'0000-00-00 00:00','0000-00-00 00:00',0.00,0.00,'Fechado',1),(19,'2017-02-15 14:55','2017-02-15 14:55',100.00,100.00,'Fechado',1),(20,'2017-02-15 19:08','2017-02-15 23:26',120.00,280.00,'Fechado',1),(21,'2017-02-17 22:09','2017-02-17 22:20',100.00,156.30,'Fechado',1),(22,'2017-02-17 23:12','2017-02-22 19:29',100.00,100.00,'Fechado',1),(23,'2017-02-22 20:05','2017-03-08 01:21',120.00,377.20,'Fechado',1),(24,'2017-03-08 17:13','2017-03-19 16:08',120.00,774.10,'Fechado',1),(25,'2017-03-19 16:13','2017-03-19 17:18',100.00,182.30,'Fechado',1),(26,'2017-03-20 12:32','2017-03-27 18:15',500.00,662.70,'Fechado',1),(27,'2017-03-27 22:57','2017-04-11 11:46',500.00,876.30,'Fechado',1),(28,'2017-04-11 14:13','2017-04-11 15:06',150.00,178.00,'Fechado',1),(29,'2017-04-11 15:07','2017-04-11 15:37',500.00,500.00,'Fechado',1),(30,'2017-04-11 15:37','2017-04-11 16:33',500.00,514.80,'Fechado',1),(31,'2017-04-11 16:34','2017-04-18 20:37',30.00,415.10,'Fechado',1),(32,'2017-04-18 20:39','2017-04-20 21:45',50.00,260.80,'Fechado',1),(33,'2017-04-20 21:45','2017-04-21 17:34',500.00,500.00,'Fechado',1),(34,'2017-04-21 17:35','-',123.00,0.00,'Aberto',1);
/*!40000 ALTER TABLE `caixa01` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `caixa02`
--

DROP TABLE IF EXISTS `caixa02`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `caixa02` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_abertura` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `data_fechamento` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `valor_inicial` decimal(10,2) NOT NULL,
  `valor_final` decimal(10,2) NOT NULL,
  `status` varchar(45) CHARACTER SET utf8 NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caixa02`
--

LOCK TABLES `caixa02` WRITE;
/*!40000 ALTER TABLE `caixa02` DISABLE KEYS */;
INSERT INTO `caixa02` VALUES (1,'0000-00-00 00:00','000-00-00 00:00',0.00,0.00,'Fechado',3),(2,'2017-01-25 00:49','000-00-00 00:00',0.00,0.00,'Fechado',2);
/*!40000 ALTER TABLE `caixa02` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargo`
--

DROP TABLE IF EXISTS `cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(45) NOT NULL,
  `permissao` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargo`
--

LOCK TABLES `cargo` WRITE;
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
INSERT INTO `cargo` VALUES (1,'admin',1),(2,'Gerente',1),(3,'Operadora',0),(4,'Garçom',0),(5,'Motoboy',0);
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Pizzas'),(2,'Esfihas'),(3,'Salgados'),(4,'Beirutes'),(5,'Porcoes'),(6,'Bebidas'),(7,'Pasteis'),(8,'Lanches'),(9,'Doces'),(10,'Sorvetes'),(11,'Outros');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) CHARACTER SET utf8 NOT NULL,
  `cf1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cf2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `celular` varchar(18) CHARACTER SET utf8 DEFAULT NULL,
  `taxa_de_entrega` decimal(10,2) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `endereco` varchar(125) CHARACTER SET utf8 DEFAULT NULL,
  `bairro` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `cep` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `delivery` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Cliente Padrão','123','','1122222222','',3.00,'','Rua teste','Teste','01112-234',''),(3,'Junior','188','','1122625640','',2.00,'','Rua doutor valentim bouças','Jardim Tremembé','0',''),(6,'Felipe','54','','123123123','',3.00,'','Rua planalto','jardim palmares','12345-678',''),(7,'Patricia','199','','22222222','',4.00,'','Rua generica','Vila zilda','02323-040',''),(8,'Godofredo','167','','24360912','',4.00,'','Rua tenente amador','Vila Cachoeira','12345060',''),(9,'Carol','120','','213123123','',2.00,'','Rua Lucas Alaman','Jardim Tremembe','123123123',''),(10,'ailton','25','','23642463','',5.00,'','rua dr olindo chiafarelio','mandaqui','02415045','');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contato`
--

DROP TABLE IF EXISTS `contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contato` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(100) DEFAULT NULL,
  `FONE` varchar(15) NOT NULL,
  `CELULAR` varchar(15) NOT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contato`
--

LOCK TABLES `contato` WRITE;
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contatos`
--

DROP TABLE IF EXISTS `contatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contatos` (
  `id` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `telefone` varchar(45) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contatos`
--

LOCK TABLES `contatos` WRITE;
/*!40000 ALTER TABLE `contatos` DISABLE KEYS */;
INSERT INTO `contatos` VALUES (1,'Diogo Cezar','xgordo@gmail.com','(43) 3523-2956'),(2,'Mario Sergio','padariajoia@gmail.com','(43) 9915-7944'),(3,'JoÃ£o da Silva','joao@gmail.com','(41) 3453-9876'),(4,'Junior','teste','1231231'),(5,'Felipe','teste12','1241414'),(6,'outro gato','outro@teste','7783894');
/*!40000 ALTER TABLE `contatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cpf_nota`
--

DROP TABLE IF EXISTS `cpf_nota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cpf_nota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) NOT NULL,
  `origem` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cpf_nota`
--

LOCK TABLES `cpf_nota` WRITE;
/*!40000 ALTER TABLE `cpf_nota` DISABLE KEYS */;
/*!40000 ALTER TABLE `cpf_nota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fechamentos`
--

DROP TABLE IF EXISTS `fechamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fechamentos` (
  `id` int(11) NOT NULL DEFAULT '0',
  `id_caixa` int(11) DEFAULT NULL,
  `data_abertura` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `data_fechamento` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `valor_inicial` decimal(10,2) NOT NULL,
  `valor_final` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fechamentos`
--

LOCK TABLES `fechamentos` WRITE;
/*!40000 ALTER TABLE `fechamentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `fechamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forma_pagamento`
--

DROP TABLE IF EXISTS `forma_pagamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forma_pagamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forma_pagamento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `icone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forma_pagamento`
--

LOCK TABLES `forma_pagamento` WRITE;
/*!40000 ALTER TABLE `forma_pagamento` DISABLE KEYS */;
INSERT INTO `forma_pagamento` VALUES (1,'Dinheiro','money icon','din_vendaDAO.php'),(2,'Cartao de Debito','payment icon','vendaDAO.php'),(3,'Cartao de Credito','credit card alternative icon','vendaDAO.php'),(4,'Dinheiro + Debito','',''),(5,'Dinheiro + Credito','','');
/*!40000 ALTER TABLE `forma_pagamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movimentacao_caixa01`
--

DROP TABLE IF EXISTS `movimentacao_caixa01`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movimentacao_caixa01` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` decimal(10,2) NOT NULL,
  `tipo_movimentacao` varchar(2) NOT NULL,
  `saldo` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movimentacao_caixa01`
--

LOCK TABLES `movimentacao_caixa01` WRITE;
/*!40000 ALTER TABLE `movimentacao_caixa01` DISABLE KEYS */;
/*!40000 ALTER TABLE `movimentacao_caixa01` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nome_nota`
--

DROP TABLE IF EXISTS `nome_nota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nome_nota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nome_nota`
--

LOCK TABLES `nome_nota` WRITE;
/*!40000 ALTER TABLE `nome_nota` DISABLE KEYS */;
/*!40000 ALTER TABLE `nome_nota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pde_fato_vendas`
--

DROP TABLE IF EXISTS `pde_fato_vendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pde_fato_vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_venda` varchar(60) NOT NULL,
  `origem_venda` varchar(60) NOT NULL,
  `num_nota_fiscal` int(11) NOT NULL,
  `valor_nota_fiscal` decimal(10,2) DEFAULT NULL,
  `id_forma_pagamento` int(11) NOT NULL,
  `id_abertura` int(11) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pde_fato_vendas`
--

LOCK TABLES `pde_fato_vendas` WRITE;
/*!40000 ALTER TABLE `pde_fato_vendas` DISABLE KEYS */;
INSERT INTO `pde_fato_vendas` VALUES (1,'2017-02-10 03:49','Caixa 01',1,0.00,3,2,'A',0),(43,'2017-02-15 21:43','Delivery',2,0.00,3,20,'C',0),(44,'2017-02-15 21:43','Delivery',3,28.00,2,20,'A',0),(45,'2017-02-15 21:44','Delivery',4,30.00,3,20,'A',0),(46,'2017-02-15 21:44','Delivery',5,30.00,2,20,'A',0),(47,'2017-02-15 22:43','Delivery',6,3.30,3,20,'A',0),(48,'2017-02-15 22:45','Delivery',7,30.00,3,20,'A',0),(49,'2017-02-17 22:13','Delivery',8,28.30,3,21,'A',0),(50,'2017-02-17 22:20','Delivery',9,28.00,2,21,'A',0),(51,'2017-02-23 18:47','Caixa 01',10,15.00,1,23,'A',0),(52,'2017-03-01 18:48','Caixa 01',11,0.00,3,23,'A',0),(53,'2017-03-06 22:00','Delivery',12,26.00,1,23,'A',0),(54,'2017-03-06 22:28','Delivery',13,3.30,1,23,'A',0),(55,'2017-03-07 00:54','Delivery',14,4.80,3,23,'A',0),(56,'2017-03-07 01:22','Delivery',15,54.00,2,23,'A',0),(57,'2017-03-07 01:27','Delivery',16,26.00,2,23,'A',0),(58,'2017-03-07 18:29','Delivery',17,3.30,1,23,'A',0),(59,'2017-03-07 22:36','Delivery',18,14.80,1,23,'A',0),(60,'2017-03-07 22:41','Delivery',19,8.30,4,23,'A',0),(61,'2017-03-08 01:11','Caixa 01',20,0.00,1,23,'A',0),(62,'2017-03-08 01:13','Caixa 01',21,0.00,1,23,'A',0),(63,'2017-03-08 01:17','Caixa 01',22,29.30,1,23,'A',0),(64,'2017-03-08 01:18','Caixa 01',23,11.30,2,23,'A',0),(65,'2017-03-08 01:19','Caixa 01',24,10.00,5,23,'A',0),(66,'2017-03-14 17:27','Mesa 1',25,32.00,1,24,'A',0),(67,'2017-03-14 18:01','Mesa 1',26,28.00,2,24,'A',0),(68,'2017-03-14 18:26','Mesa 18',27,11.30,1,24,'A',0),(69,'2017-03-14 23:25','Caixa 01',28,12.80,1,24,'A',0),(70,'2017-03-14 23:26','Mesa 6',29,38.00,2,24,'A',0),(71,'2017-03-16 22:48','Caixa 01',30,11.30,2,24,'A',0),(72,'2017-03-16 22:49','Caixa 01',31,28.00,1,24,'A',0),(73,'2017-03-16 23:46','Caixa 01',32,24.00,1,24,'A',0),(74,'2017-03-16 23:48','Caixa 01',33,24.00,1,24,'A',0),(75,'2017-03-16 23:57','Caixa 01',34,28.00,1,24,'A',0),(76,'2017-03-16 23:59','Caixa 01',35,24.00,1,24,'A',0),(77,'2017-03-17 00:01','Caixa 01',36,24.00,1,24,'A',0),(78,'2017-03-17 00:02','Caixa 01',37,24.00,1,24,'A',0),(79,'2017-03-17 00:02','Caixa 01',38,25.00,2,24,'A',0),(80,'2017-03-17 00:07','Caixa 01',39,24.00,3,24,'A',0),(81,'2017-03-17 00:07','Caixa 01',40,24.00,1,24,'A',0),(82,'2017-03-17 00:11','Delivery',41,31.00,1,24,'A',0),(83,'2017-03-17 00:16','Mesa 2',42,28.00,1,24,'A',0),(84,'2017-03-17 00:16','Mesa 2',43,24.00,2,24,'C',0),(85,'2017-03-17 00:26','Mesa 1',44,24.00,3,24,'A',0),(86,'2017-03-17 00:31','Mesa 1',45,1.50,2,24,'C',0),(87,'2017-03-18 14:43','Caixa 01',46,13.80,1,24,'A',0),(88,'2017-03-18 14:44','Mesa 2',47,2.80,1,24,'C',0),(89,'2017-03-19 16:14','Caixa 01',48,3.80,1,25,'A',0),(90,'2017-03-19 17:01','Delivery',49,27.00,2,25,'A',0),(91,'2017-03-19 17:02','Delivery',50,26.00,3,25,'A',0),(92,'2017-03-20 13:00','Delivery',51,26.00,2,26,'A',0),(93,'2017-03-20 22:03','Delivery',52,28.00,3,26,'A',0),(94,'2017-03-22 18:06','Delivery',53,26.90,1,26,'A',0),(95,'2017-03-22 18:06','Delivery',54,26.00,3,26,'A',0),(96,'2017-03-25 17:23','Delivery',55,26.00,1,26,'A',3),(97,'2017-03-25 17:27','Caixa 01',56,2.80,3,26,'A',0),(98,'2017-03-25 17:28','Mesa 4',57,2.80,2,26,'A',0),(99,'2017-04-02 18:13','Mesa 4',58,24.00,1,27,'A',0),(100,'2017-04-02 18:33','Caixa 01',59,9.30,2,27,'A',0),(101,'2017-04-03 23:58','Caixa 01',60,9.50,1,27,'A',0),(102,'2017-04-04 00:02','Caixa 01',61,46.00,1,27,'A',0),(103,'2017-04-05 01:31','Caixa 01',62,33.00,1,27,'A',0),(104,'2017-04-06 22:14','Delivery',63,16.80,2,27,'A',8),(105,'2017-04-07 21:22','Caixa 01',64,15.30,2,27,'A',0),(106,'2017-04-07 21:24','Caixa 01',65,15.00,3,27,'A',0),(107,'2017-04-07 21:25','Caixa 01',66,22.50,2,27,'A',0),(108,'2017-04-07 21:29','Mesa 4',67,9.30,2,27,'A',0),(109,'2017-04-07 21:47','Caixa 01',68,9.50,2,27,'A',0),(110,'2017-04-07 21:48','Mesa 4',69,10.00,2,27,'A',0),(111,'2017-04-08 19:43','Caixa 01',70,4.00,3,27,'A',0),(112,'2017-04-11 03:36','Mesa 2',71,27.00,1,27,'A',0),(113,'2017-04-11 03:36','Mesa 1',72,25.00,2,27,'A',0),(114,'2017-04-11 14:16','Mesa 1',73,28.00,1,28,'A',0),(115,'2017-04-11 15:39','Caixa 01',74,10.50,1,30,'A',0),(116,'2017-04-11 16:24','Mesa 3',75,4.30,1,30,'A',0),(117,'2017-04-12 20:05','Caixa 01',76,2.80,2,31,'A',0),(118,'2017-04-12 21:25','Caixa 01',77,2.80,2,31,'A',0),(119,'2017-04-12 21:29','Caixa 01',78,24.00,3,31,'A',0),(120,'2017-04-12 21:37','Caixa 01',79,10.50,2,31,'A',0),(121,'2017-04-12 21:37','Caixa 01',80,8.00,1,31,'A',0),(122,'2017-04-12 21:38','Delivery',81,3.30,1,31,'A',3),(123,'2017-04-13 00:11','Delivery',82,4.50,3,31,'A',3),(124,'2017-04-13 00:44','Delivery',83,3.50,2,31,'A',3),(125,'2017-04-13 00:45','Delivery',84,25.90,3,31,'A',3),(126,'2017-04-13 00:50','Delivery',85,5.30,2,31,'A',7),(127,'2017-04-13 01:27','Delivery',86,60.00,1,31,'A',8),(128,'2017-04-13 02:19','Caixa 01',87,1.30,2,31,'A',0),(129,'2017-04-17 15:11','Delivery',88,27.90,2,31,'A',8),(130,'2017-04-17 15:49','Mesa 15',89,20.00,1,31,'C',0),(131,'2017-04-18 00:52','Delivery',90,30.00,2,31,'A',3),(132,'2017-04-18 00:53','Delivery',91,30.00,2,31,'A',3),(133,'2017-04-18 20:23','Caixa 01',92,20.00,2,31,'C',0),(134,'2017-04-18 23:47','Caixa 01',93,11.30,2,32,'A',0),(135,'2017-04-19 03:03','Caixa 01',94,11.30,2,32,'A',0),(136,'2017-04-19 03:28','Delivery',95,18.00,2,32,'A',3),(137,'2017-04-19 19:10','Caixa 01',96,28.00,3,32,'A',0),(138,'2017-04-19 19:13','Caixa 01',97,9.50,3,32,'A',0),(139,'2017-04-19 19:14','Caixa 01',98,6.50,3,32,'A',0),(140,'2017-04-19 19:16','Caixa 01',99,10.50,3,32,'A',0),(141,'2017-04-19 19:16','Caixa 01',100,15.00,2,32,'A',0),(142,'2017-04-19 22:31','Caixa 01',101,9.30,2,32,'A',0),(143,'2017-04-19 22:35','Caixa 01',102,25.50,3,32,'A',0),(144,'2017-04-19 22:35','Caixa 01',103,24.00,2,32,'A',0),(145,'2017-04-23 20:48','Delivery',104,3.30,2,34,'A',3),(146,'2017-04-23 21:35','Delivery',105,3.30,3,34,'A',3),(147,'2017-04-24 04:40','Delivery',106,62.00,2,34,'A',3),(148,'2017-04-24 05:11','Caixa 01',107,10.50,2,34,'A',0),(149,'2017-04-24 05:11','Caixa 01',108,1.30,2,34,'C',0),(150,'2017-04-24 05:17','Delivery',109,5.50,1,34,'A',7),(151,'2017-04-24 05:21','Mesa 3',110,28.00,3,34,'A',0),(152,'2017-04-24 05:22','Mesa 5',111,12.50,2,34,'A',0),(153,'2017-04-24 17:11','Mesa 1',112,9.30,3,34,'C',0),(154,'2017-04-24 17:14','Mesa 1',113,9.30,3,34,'C',0),(155,'2017-04-24 17:18','Mesa 1',114,28.00,3,34,'A',0),(156,'2017-04-24 17:19','Mesa 1',115,23.00,2,34,'C',0),(157,'2017-04-24 17:24','Mesa 1',116,23.00,2,34,'A',0),(158,'2017-04-24 17:25','Mesa 1',117,24.00,1,34,'A',0),(159,'2017-04-24 21:35','Caixa 01',118,1.30,2,34,'A',0),(160,'2017-04-24 21:36','Caixa 01',119,8.00,1,34,'A',0),(161,'2017-04-24 21:37','Caixa 01',120,10.50,3,34,'A',0),(162,'2017-04-24 21:42','Delivery',121,27.00,2,34,'A',6),(163,'2017-04-24 21:47','Delivery',122,31.00,2,34,'A',6),(164,'2017-04-24 21:47','Delivery',123,30.00,3,34,'A',9),(165,'2017-04-24 22:24','Caixa 01',124,111.90,2,34,'A',0),(166,'2017-04-25 01:13','Delivery',125,30.00,1,34,'A',3),(167,'2017-04-25 01:15','Delivery',126,29.00,2,34,'A',3),(168,'2017-04-25 01:23','Delivery',127,53.90,2,34,'A',3),(172,'2017-04-28 00:18','Caixa 01',128,2.80,1,34,'A',0);
/*!40000 ALTER TABLE `pde_fato_vendas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pde_fato_vendas_produtos`
--

DROP TABLE IF EXISTS `pde_fato_vendas_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pde_fato_vendas_produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_nota_fiscal` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=302 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pde_fato_vendas_produtos`
--

LOCK TABLES `pde_fato_vendas_produtos` WRITE;
/*!40000 ALTER TABLE `pde_fato_vendas_produtos` DISABLE KEYS */;
INSERT INTO `pde_fato_vendas_produtos` VALUES (1,1,1,1,''),(56,2,530,1,''),(57,2,5,1,''),(58,3,532,1,''),(59,3,2,1,''),(60,4,530,1,''),(61,4,9,1,''),(62,5,530,1,''),(63,5,9,1,''),(64,6,530,1,''),(65,6,47,10,''),(66,7,530,1,''),(67,7,12,1,''),(68,8,530,1,''),(69,8,5,1,''),(70,8,47,1,''),(71,9,532,1,''),(72,9,2,1,''),(73,10,631,1,''),(74,12,530,1,''),(75,12,2,1,''),(76,13,530,1,''),(77,13,47,10,''),(78,14,530,1,''),(79,14,47,21,''),(80,14,50,10,''),(81,14,84,1,''),(82,15,530,1,''),(83,15,1,1,''),(84,15,2,1,''),(85,16,530,1,''),(86,16,2,1,''),(87,17,530,1,''),(88,17,47,5,''),(89,18,530,1,''),(90,18,47,7,''),(91,18,48,1,''),(92,18,75,1,''),(93,19,530,1,''),(94,19,47,8,''),(95,19,77,1,''),(96,22,47,2,''),(97,22,1,1,''),(98,23,47,8,''),(99,23,75,1,''),(100,24,72,1,''),(101,24,77,1,''),(102,25,2,1,''),(103,25,76,1,''),(104,26,634,1,''),(105,27,47,9,''),(106,27,75,1,''),(107,28,47,12,''),(108,28,48,6,''),(109,28,75,5,''),(110,29,1,1,''),(111,29,75,1,''),(112,30,47,3,''),(113,30,75,1,''),(114,31,1,2,''),(115,32,2,1,''),(116,33,6,1,''),(117,34,1,1,''),(118,35,2,1,''),(119,36,6,1,''),(120,37,2,1,''),(121,38,5,1,''),(122,39,2,1,''),(123,40,2,2,''),(124,41,531,1,''),(125,41,1,1,''),(126,42,1,1,''),(127,43,2,1,''),(128,44,6,1,''),(129,45,48,7,''),(130,46,47,7,''),(131,46,63,1,''),(132,46,75,1,''),(133,47,47,1,''),(134,47,48,3,''),(135,48,47,11,''),(136,48,63,6,''),(137,49,530,1,''),(138,49,3,1,''),(139,50,530,1,''),(140,50,2,1,''),(141,51,530,1,''),(142,51,2,1,''),(143,52,532,1,''),(144,52,6,1,''),(145,53,531,1,''),(146,53,518,1,''),(147,54,530,1,''),(148,54,2,1,''),(149,55,530,1,''),(150,55,647,1,''),(151,56,47,10,''),(152,56,50,2,''),(153,57,47,6,''),(154,57,48,4,''),(155,58,2,1,''),(156,59,47,7,''),(157,59,76,1,''),(158,60,48,6,''),(159,60,76,1,''),(160,61,16,1,''),(161,61,75,1,''),(162,62,5,1,''),(163,62,76,1,''),(164,63,532,1,''),(165,63,47,10,''),(166,63,50,3,''),(167,63,75,1,''),(168,64,47,5,''),(169,64,82,1,''),(170,64,75,1,''),(171,65,75,1,''),(172,65,72,1,''),(173,66,68,1,''),(174,66,63,1,''),(175,67,47,4,''),(176,67,76,1,''),(177,68,48,5,''),(178,68,76,2,''),(179,69,75,3,''),(180,70,649,1,''),(181,70,650,1,''),(182,71,4,2,''),(183,72,3,1,''),(184,73,1,1,''),(185,74,63,1,''),(186,74,76,1,''),(187,75,47,1,''),(188,75,48,1,''),(189,75,49,1,''),(190,76,47,5,''),(191,76,48,1,''),(192,77,47,1,''),(193,77,48,1,''),(194,78,6,1,''),(195,79,63,1,''),(196,79,76,1,''),(197,80,64,1,''),(198,80,77,1,''),(199,81,530,1,''),(200,81,47,3,''),(201,82,530,1,''),(202,82,63,1,''),(203,83,530,1,''),(204,83,48,4,''),(205,84,530,1,''),(206,84,518,1,''),(207,85,532,1,''),(208,85,47,8,''),(209,86,532,1,''),(210,86,650,1,''),(211,86,651,1,''),(212,87,47,4,''),(213,88,532,1,''),(214,88,518,1,''),(215,89,68,5,''),(216,90,530,1,''),(217,90,1,1,''),(218,91,530,1,''),(219,91,1,1,''),(220,92,55,1,''),(221,92,69,1,''),(222,93,47,11,''),(223,93,75,1,''),(224,94,47,5,''),(225,94,75,1,''),(226,95,69,1,''),(227,96,68,1,''),(228,96,76,1,''),(229,97,48,5,''),(230,97,76,1,''),(231,98,48,5,''),(232,98,77,1,''),(233,99,63,1,''),(234,99,76,1,''),(235,100,72,1,''),(236,100,75,1,''),(237,101,47,10,''),(238,101,76,1,''),(239,102,48,1,''),(240,102,2,1,''),(241,103,2,1,''),(242,104,530,1,''),(243,104,47,3,''),(244,105,530,1,''),(245,105,47,4,''),(246,106,530,1,''),(247,106,68,1,''),(248,106,68,3,''),(249,106,68,2,''),(250,107,63,1,''),(251,107,76,1,''),(252,108,47,2,''),(253,108,84,1,''),(254,109,532,1,''),(255,109,48,5,''),(256,110,68,1,''),(257,110,76,1,''),(258,111,63,1,''),(259,111,75,1,''),(260,112,47,6,''),(261,112,76,1,''),(262,113,47,4,''),(263,113,76,1,''),(264,114,68,1,''),(265,114,76,1,''),(266,115,72,1,''),(267,115,73,1,''),(268,115,76,1,''),(269,116,69,1,''),(270,116,77,1,''),(271,117,70,1,''),(272,117,79,1,''),(273,118,47,3,''),(274,119,64,1,''),(275,119,77,1,''),(276,120,76,1,''),(277,120,63,1,''),(278,121,531,1,''),(279,121,2,1,''),(280,122,531,1,''),(281,122,1,1,''),(282,123,530,1,''),(283,123,1,1,''),(284,124,518,1,''),(285,124,646,1,''),(286,124,652,1,''),(287,124,653,1,''),(288,125,530,1,''),(289,125,1,1,''),(290,126,530,1,''),(291,126,4,1,''),(292,127,530,1,''),(293,127,663,1,''),(294,127,664,1,''),(300,128,47,10,''),(301,128,48,5,'');
/*!40000 ALTER TABLE `pde_fato_vendas_produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pde_movimentacao`
--

DROP TABLE IF EXISTS `pde_movimentacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pde_movimentacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_movimentacao` varchar(2) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `origem` varchar(45) NOT NULL,
  `id_forma_pagamento` int(11) NOT NULL,
  `num_nota_fiscal` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=214 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pde_movimentacao`
--

LOCK TABLES `pde_movimentacao` WRITE;
/*!40000 ALTER TABLE `pde_movimentacao` DISABLE KEYS */;
INSERT INTO `pde_movimentacao` VALUES (1,'E',28.00,'Caixa 01',3,1),(46,'E',27.00,'Delivery',3,2),(47,'E',28.00,'Delivery',2,3),(48,'E',30.00,'Delivery',3,4),(49,'E',30.00,'Delivery',2,5),(50,'E',15.00,'Delivery',3,6),(51,'E',30.00,'Delivery',3,7),(52,'E',28.30,'Delivery',3,8),(53,'E',28.00,'Delivery',2,9),(54,'E',15.00,'Caixa 01',1,10),(55,'E',30.00,'Delivery',1,12),(56,'S',30.00,'Delivery',1,12),(57,'E',20.00,'Delivery',1,13),(58,'S',20.00,'Delivery',1,13),(59,'E',54.00,'Delivery',2,15),(60,'E',26.00,'Delivery',2,16),(61,'E',30.00,'Delivery',1,18),(62,'S',7.40,'Delivery',1,18),(63,'E',10.00,'Delivery',1,19),(64,'E',7.40,'Delivery',2,19),(65,'E',31.00,'Caixa 01',1,20),(66,'S',0.40,'Caixa 01',1,20),(67,'E',31.00,'Caixa 01',1,21),(68,'S',0.40,'Caixa 01',1,21),(69,'E',31.00,'Caixa 01',1,22),(70,'S',0.40,'Caixa 01',1,22),(71,'E',20.40,'Caixa 01',2,23),(72,'E',5.00,'Caixa 01',1,24),(73,'E',5.00,'Caixa 01',3,24),(74,'E',40.00,'Mesa 1',1,25),(75,'S',8.00,'Mesa 1',1,25),(76,'E',28.00,'Mesa 1',2,26),(77,'E',50.00,'Mesa 18',1,27),(78,'S',28.30,'Mesa 18',1,27),(79,'E',80.00,'Caixa 01',1,28),(80,'S',5.40,'Caixa 01',1,28),(81,'E',38.00,'Mesa 6',2,29),(82,'E',13.90,'Caixa 01',2,30),(83,'E',60.00,'Caixa 01',1,31),(84,'S',4.00,'Caixa 01',1,31),(85,'E',30.00,'Caixa 01',1,32),(86,'S',6.00,'Caixa 01',1,32),(87,'E',30.00,'Caixa 01',1,33),(88,'S',6.00,'Caixa 01',1,33),(89,'E',30.00,'Caixa 01',1,34),(90,'S',2.00,'Caixa 01',1,34),(91,'E',25.00,'Caixa 01',1,35),(92,'S',1.00,'Caixa 01',1,35),(93,'E',50.00,'Caixa 01',1,36),(94,'S',26.00,'Caixa 01',1,36),(95,'E',50.00,'Caixa 01',1,37),(96,'S',26.00,'Caixa 01',1,37),(97,'E',25.00,'Caixa 01',2,38),(98,'E',24.00,'Caixa 01',3,39),(99,'E',50.00,'Caixa 01',1,40),(100,'S',2.00,'Caixa 01',1,40),(101,'E',40.00,'Delivery',1,41),(102,'S',9.00,'Delivery',1,41),(103,'E',50.00,'Mesa 2',1,42),(104,'S',22.00,'Mesa 2',1,42),(105,'E',24.00,'Mesa 2',2,43),(106,'E',24.00,'Mesa 1',3,44),(107,'E',10.50,'Mesa 1',2,45),(108,'E',50.00,'Caixa 01',1,46),(109,'S',28.40,'Caixa 01',1,46),(110,'E',6.00,'Mesa 2',1,47),(111,'S',0.20,'Mesa 2',1,47),(112,'E',50.00,'Caixa 01',1,48),(113,'S',20.70,'Caixa 01',1,48),(114,'E',27.00,'Delivery',2,49),(115,'E',26.00,'Delivery',3,50),(116,'E',26.00,'Delivery',2,51),(117,'E',28.00,'Delivery',3,52),(118,'E',30.00,'Delivery',1,53),(119,'S',3.10,'Delivery',1,53),(120,'E',26.00,'Delivery',3,54),(121,'E',30.00,'Delivery',1,55),(122,'S',4.00,'Delivery',1,55),(123,'E',16.00,'Caixa 01',3,56),(124,'E',13.80,'Mesa 4',2,57),(125,'E',40.00,'Mesa 4',1,58),(126,'S',16.00,'Mesa 4',1,58),(127,'E',17.10,'Caixa 01',2,59),(128,'E',20.00,'Caixa 01',1,60),(129,'S',3.00,'Caixa 01',1,60),(130,'E',50.00,'Caixa 01',1,61),(131,'S',4.00,'Caixa 01',1,61),(132,'E',40.00,'Caixa 01',1,62),(133,'S',7.00,'Caixa 01',1,62),(134,'E',31.50,'Delivery',2,63),(135,'E',20.50,'Caixa 01',2,64),(136,'E',15.00,'Caixa 01',3,65),(137,'E',22.50,'Caixa 01',2,66),(138,'E',13.20,'Mesa 4',2,67),(139,'E',23.50,'Caixa 01',2,68),(140,'E',30.00,'Mesa 4',2,69),(141,'E',4.00,'Caixa 01',3,70),(142,'E',60.00,'Mesa 2',1,71),(143,'S',6.00,'Mesa 2',1,71),(144,'E',25.00,'Mesa 1',2,72),(145,'E',50.00,'Mesa 1',1,73),(146,'S',22.00,'Mesa 1',1,73),(147,'E',15.00,'Caixa 01',1,74),(148,'S',4.50,'Caixa 01',1,74),(149,'E',10.00,'Mesa 3',1,75),(150,'S',5.70,'Mesa 3',1,75),(151,'E',8.00,'Caixa 01',2,76),(152,'E',2.80,'Caixa 01',2,77),(153,'E',24.00,'Caixa 01',3,78),(154,'E',10.50,'Caixa 01',2,79),(155,'E',10.00,'Caixa 01',1,80),(156,'S',2.00,'Caixa 01',1,80),(157,'E',10.00,'Delivery',1,81),(158,'S',4.10,'Delivery',1,81),(159,'E',4.50,'Delivery',3,82),(160,'E',8.00,'Delivery',2,83),(161,'E',25.90,'Delivery',3,84),(162,'E',14.40,'Delivery',2,85),(163,'E',100.00,'Delivery',1,86),(164,'S',40.00,'Delivery',1,86),(165,'E',5.20,'Caixa 01',2,87),(166,'E',27.90,'Delivery',2,88),(167,'E',100.00,'Mesa 15',1,89),(168,'E',30.00,'Delivery',2,90),(169,'E',30.00,'Delivery',2,91),(170,'E',20.00,'Caixa 01',2,92),(171,'E',24.30,'Caixa 01',2,93),(172,'E',16.50,'Caixa 01',2,94),(173,'E',18.00,'Delivery',2,95),(174,'E',28.00,'Caixa 01',3,96),(175,'E',15.50,'Caixa 01',3,97),(176,'E',12.50,'Caixa 01',3,98),(177,'E',10.50,'Caixa 01',3,99),(178,'E',15.00,'Caixa 01',2,100),(179,'E',21.00,'Caixa 01',2,101),(180,'E',25.50,'Caixa 01',3,102),(181,'E',24.00,'Caixa 01',2,103),(182,'E',5.90,'Delivery',2,104),(183,'E',7.20,'Delivery',3,105),(184,'E',122.00,'Delivery',2,106),(185,'E',10.50,'Caixa 01',2,107),(186,'E',2.60,'Caixa 01',2,108),(187,'E',15.00,'Delivery',1,109),(188,'S',3.50,'Delivery',1,109),(189,'E',28.00,'Mesa 3',3,110),(190,'E',12.50,'Mesa 5',2,111),(191,'E',15.80,'Mesa 1',3,112),(192,'E',13.20,'Mesa 1',3,113),(193,'E',28.00,'Mesa 1',3,114),(194,'E',23.00,'Mesa 1',2,115),(195,'E',23.00,'Mesa 1',2,116),(196,'E',25.00,'Mesa 1',1,117),(197,'S',1.00,'Mesa 1',1,117),(198,'E',3.90,'Caixa 01',2,118),(199,'E',10.00,'Caixa 01',1,119),(200,'S',2.00,'Caixa 01',1,119),(201,'E',10.50,'Caixa 01',3,120),(202,'E',27.00,'Delivery',2,121),(203,'E',31.00,'Delivery',2,122),(204,'E',30.00,'Delivery',3,123),(205,'E',111.90,'Caixa 01',2,124),(206,'E',30.00,'Delivery',1,125),(207,'E',29.00,'Delivery',2,126),(208,'E',53.90,'Delivery',2,127),(212,'E',25.00,'Caixa 01',1,128),(213,'S',4.50,'Caixa 01',1,128);
/*!40000 ALTER TABLE `pde_movimentacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa1`
--

DROP TABLE IF EXISTS `pedido_aux_mesa1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa1`
--

LOCK TABLES `pedido_aux_mesa1` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa1` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa10`
--

DROP TABLE IF EXISTS `pedido_aux_mesa10`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa10` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa10`
--

LOCK TABLES `pedido_aux_mesa10` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa10` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa10` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa11`
--

DROP TABLE IF EXISTS `pedido_aux_mesa11`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa11` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa11`
--

LOCK TABLES `pedido_aux_mesa11` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa11` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa11` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa12`
--

DROP TABLE IF EXISTS `pedido_aux_mesa12`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa12` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa12`
--

LOCK TABLES `pedido_aux_mesa12` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa12` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa12` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa13`
--

DROP TABLE IF EXISTS `pedido_aux_mesa13`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa13` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa13`
--

LOCK TABLES `pedido_aux_mesa13` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa13` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa13` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa14`
--

DROP TABLE IF EXISTS `pedido_aux_mesa14`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa14` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa14`
--

LOCK TABLES `pedido_aux_mesa14` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa14` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa14` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa15`
--

DROP TABLE IF EXISTS `pedido_aux_mesa15`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa15` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa15`
--

LOCK TABLES `pedido_aux_mesa15` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa15` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa15` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa16`
--

DROP TABLE IF EXISTS `pedido_aux_mesa16`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa16` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa16`
--

LOCK TABLES `pedido_aux_mesa16` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa16` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa16` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa17`
--

DROP TABLE IF EXISTS `pedido_aux_mesa17`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa17` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa17`
--

LOCK TABLES `pedido_aux_mesa17` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa17` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa17` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa18`
--

DROP TABLE IF EXISTS `pedido_aux_mesa18`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa18` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa18`
--

LOCK TABLES `pedido_aux_mesa18` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa18` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa18` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa19`
--

DROP TABLE IF EXISTS `pedido_aux_mesa19`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa19` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa19`
--

LOCK TABLES `pedido_aux_mesa19` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa19` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa19` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa2`
--

DROP TABLE IF EXISTS `pedido_aux_mesa2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa2`
--

LOCK TABLES `pedido_aux_mesa2` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa2` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa20`
--

DROP TABLE IF EXISTS `pedido_aux_mesa20`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa20` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa20`
--

LOCK TABLES `pedido_aux_mesa20` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa20` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa20` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa3`
--

DROP TABLE IF EXISTS `pedido_aux_mesa3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa3`
--

LOCK TABLES `pedido_aux_mesa3` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa3` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa4`
--

DROP TABLE IF EXISTS `pedido_aux_mesa4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa4`
--

LOCK TABLES `pedido_aux_mesa4` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa4` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa5`
--

DROP TABLE IF EXISTS `pedido_aux_mesa5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa5`
--

LOCK TABLES `pedido_aux_mesa5` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa5` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa5` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa6`
--

DROP TABLE IF EXISTS `pedido_aux_mesa6`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa6` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa6`
--

LOCK TABLES `pedido_aux_mesa6` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa6` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa6` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa7`
--

DROP TABLE IF EXISTS `pedido_aux_mesa7`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa7` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa7`
--

LOCK TABLES `pedido_aux_mesa7` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa7` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa7` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa8`
--

DROP TABLE IF EXISTS `pedido_aux_mesa8`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa8` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa8`
--

LOCK TABLES `pedido_aux_mesa8` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa8` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa8` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_aux_mesa9`
--

DROP TABLE IF EXISTS `pedido_aux_mesa9`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_aux_mesa9` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_aux_mesa9`
--

LOCK TABLES `pedido_aux_mesa9` WRITE;
/*!40000 ALTER TABLE `pedido_aux_mesa9` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_aux_mesa9` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_balcao`
--

DROP TABLE IF EXISTS `pedido_balcao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_balcao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `impresso` int(11) DEFAULT NULL,
  `senha` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_balcao`
--

LOCK TABLES `pedido_balcao` WRITE;
/*!40000 ALTER TABLE `pedido_balcao` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_balcao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_balcao2`
--

DROP TABLE IF EXISTS `pedido_balcao2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_balcao2` (
  `id` int(11) NOT NULL DEFAULT '0',
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_balcao2`
--

LOCK TABLES `pedido_balcao2` WRITE;
/*!40000 ALTER TABLE `pedido_balcao2` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_balcao2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_delivery`
--

DROP TABLE IF EXISTS `pedido_delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_delivery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_motoboy` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_delivery`
--

LOCK TABLES `pedido_delivery` WRITE;
/*!40000 ALTER TABLE `pedido_delivery` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_delivery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa1`
--

DROP TABLE IF EXISTS `pedido_mesa1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) CHARACTER SET utf8 NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa1`
--

LOCK TABLES `pedido_mesa1` WRITE;
/*!40000 ALTER TABLE `pedido_mesa1` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa10`
--

DROP TABLE IF EXISTS `pedido_mesa10`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa10` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) CHARACTER SET utf8 NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa10`
--

LOCK TABLES `pedido_mesa10` WRITE;
/*!40000 ALTER TABLE `pedido_mesa10` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa10` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa11`
--

DROP TABLE IF EXISTS `pedido_mesa11`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa11` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa11`
--

LOCK TABLES `pedido_mesa11` WRITE;
/*!40000 ALTER TABLE `pedido_mesa11` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa11` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa12`
--

DROP TABLE IF EXISTS `pedido_mesa12`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa12` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa12`
--

LOCK TABLES `pedido_mesa12` WRITE;
/*!40000 ALTER TABLE `pedido_mesa12` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa12` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa13`
--

DROP TABLE IF EXISTS `pedido_mesa13`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa13` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) CHARACTER SET utf8 NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa13`
--

LOCK TABLES `pedido_mesa13` WRITE;
/*!40000 ALTER TABLE `pedido_mesa13` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa13` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa14`
--

DROP TABLE IF EXISTS `pedido_mesa14`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa14` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa14`
--

LOCK TABLES `pedido_mesa14` WRITE;
/*!40000 ALTER TABLE `pedido_mesa14` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa14` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa15`
--

DROP TABLE IF EXISTS `pedido_mesa15`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa15` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa15`
--

LOCK TABLES `pedido_mesa15` WRITE;
/*!40000 ALTER TABLE `pedido_mesa15` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa15` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa16`
--

DROP TABLE IF EXISTS `pedido_mesa16`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa16` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) CHARACTER SET utf8 NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa16`
--

LOCK TABLES `pedido_mesa16` WRITE;
/*!40000 ALTER TABLE `pedido_mesa16` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa16` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa17`
--

DROP TABLE IF EXISTS `pedido_mesa17`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa17` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa17`
--

LOCK TABLES `pedido_mesa17` WRITE;
/*!40000 ALTER TABLE `pedido_mesa17` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa17` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa18`
--

DROP TABLE IF EXISTS `pedido_mesa18`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa18` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa18`
--

LOCK TABLES `pedido_mesa18` WRITE;
/*!40000 ALTER TABLE `pedido_mesa18` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa18` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa19`
--

DROP TABLE IF EXISTS `pedido_mesa19`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa19` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa19`
--

LOCK TABLES `pedido_mesa19` WRITE;
/*!40000 ALTER TABLE `pedido_mesa19` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa19` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa2`
--

DROP TABLE IF EXISTS `pedido_mesa2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa2`
--

LOCK TABLES `pedido_mesa2` WRITE;
/*!40000 ALTER TABLE `pedido_mesa2` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa20`
--

DROP TABLE IF EXISTS `pedido_mesa20`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa20` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa20`
--

LOCK TABLES `pedido_mesa20` WRITE;
/*!40000 ALTER TABLE `pedido_mesa20` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa20` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa3`
--

DROP TABLE IF EXISTS `pedido_mesa3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa3`
--

LOCK TABLES `pedido_mesa3` WRITE;
/*!40000 ALTER TABLE `pedido_mesa3` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa4`
--

DROP TABLE IF EXISTS `pedido_mesa4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa4`
--

LOCK TABLES `pedido_mesa4` WRITE;
/*!40000 ALTER TABLE `pedido_mesa4` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa5`
--

DROP TABLE IF EXISTS `pedido_mesa5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa5`
--

LOCK TABLES `pedido_mesa5` WRITE;
/*!40000 ALTER TABLE `pedido_mesa5` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa5` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa6`
--

DROP TABLE IF EXISTS `pedido_mesa6`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa6` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa6`
--

LOCK TABLES `pedido_mesa6` WRITE;
/*!40000 ALTER TABLE `pedido_mesa6` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa6` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa7`
--

DROP TABLE IF EXISTS `pedido_mesa7`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa7` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) CHARACTER SET utf8 NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa7`
--

LOCK TABLES `pedido_mesa7` WRITE;
/*!40000 ALTER TABLE `pedido_mesa7` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa7` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa8`
--

DROP TABLE IF EXISTS `pedido_mesa8`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa8` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa8`
--

LOCK TABLES `pedido_mesa8` WRITE;
/*!40000 ALTER TABLE `pedido_mesa8` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa8` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_mesa9`
--

DROP TABLE IF EXISTS `pedido_mesa9`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_mesa9` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) CHARACTER SET utf8 NOT NULL,
  `id_garcom` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_mesa9`
--

LOCK TABLES `pedido_mesa9` WRITE;
/*!40000 ALTER TABLE `pedido_mesa9` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_mesa9` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos_suspensos`
--

DROP TABLE IF EXISTS `produtos_suspensos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos_suspensos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_suspensao` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `id_motoboy` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos_suspensos`
--

LOCK TABLES `produtos_suspensos` WRITE;
/*!40000 ALTER TABLE `produtos_suspensos` DISABLE KEYS */;
/*!40000 ALTER TABLE `produtos_suspensos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sabores_pizza`
--

DROP TABLE IF EXISTS `sabores_pizza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sabores_pizza` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sabor1` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `sabor2` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `sabor3` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sabores_pizza`
--

LOCK TABLES `sabores_pizza` WRITE;
/*!40000 ALTER TABLE `sabores_pizza` DISABLE KEYS */;
INSERT INTO `sabores_pizza` VALUES (1,'PIZZA MUSSARELA','PIZZA CALABRESA',''),(2,'PIZZA DOIS QUEIJOS','PIZZA MILHO VERDE',''),(3,'ATUM','CALABRESA',''),(4,'MUSSARELA','ATUM','4 QUEIJOS');
/*!40000 ALTER TABLE `sabores_pizza` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `senhas`
--

DROP TABLE IF EXISTS `senhas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `senhas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `senha` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `senhas`
--

LOCK TABLES `senhas` WRITE;
/*!40000 ALTER TABLE `senhas` DISABLE KEYS */;
INSERT INTO `senhas` VALUES (1,'31038784');
/*!40000 ALTER TABLE `senhas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tabela_auxiliar_venda`
--

DROP TABLE IF EXISTS `tabela_auxiliar_venda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabela_auxiliar_venda` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `total` int(100) NOT NULL,
  `pago` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabela_auxiliar_venda`
--

LOCK TABLES `tabela_auxiliar_venda` WRITE;
/*!40000 ALTER TABLE `tabela_auxiliar_venda` DISABLE KEYS */;
/*!40000 ALTER TABLE `tabela_auxiliar_venda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tec_mesas`
--

DROP TABLE IF EXISTS `tec_mesas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tec_mesas` (
  `id` int(11) NOT NULL DEFAULT '0',
  `mesa` varchar(45) CHARACTER SET utf8 NOT NULL,
  `estado` varchar(45) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tec_mesas`
--

LOCK TABLES `tec_mesas` WRITE;
/*!40000 ALTER TABLE `tec_mesas` DISABLE KEYS */;
INSERT INTO `tec_mesas` VALUES (1,'Mesa 01','free'),(2,'Mesa 02','free'),(3,'Mesa 03','free'),(4,'Mesa 04','free'),(5,'Mesa 05','free'),(6,'Mesa 06','free'),(7,'Mesa 07','free'),(8,'Mesa 08','free'),(9,'Mesa 09','free'),(10,'Mesa 10','free'),(11,'Mesa 11','free'),(12,'Mesa 12','free'),(13,'Mesa 13','free'),(14,'Mesa 14','free'),(15,'Mesa 15','free'),(16,'Mesa 16','free'),(17,'Mesa 17','free'),(18,'Mesa 18','free'),(19,'Mesa 19','free'),(20,'Mesa 20','free'),(21,'Mesa 21','free'),(22,'Mesa 22','free'),(23,'Mesa 23','free'),(24,'Mesa 24','free'),(25,'Mesa 25','free'),(26,'Mesa 26','free'),(27,'Mesa 27','free');
/*!40000 ALTER TABLE `tec_mesas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tec_pedido_mesa`
--

DROP TABLE IF EXISTS `tec_pedido_mesa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tec_pedido_mesa` (
  `id` int(11) NOT NULL DEFAULT '0',
  `id_produto` int(11) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `impresso` int(11) NOT NULL,
  `cozinha` int(11) DEFAULT NULL,
  `foi_pedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tec_pedido_mesa`
--

LOCK TABLES `tec_pedido_mesa` WRITE;
/*!40000 ALTER TABLE `tec_pedido_mesa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tec_pedido_mesa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tec_products`
--

DROP TABLE IF EXISTS `tec_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tec_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(10) NOT NULL,
  `name` varchar(65) CHARACTER SET utf8 NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '1',
  `price` decimal(25,2) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT 'no_image.png',
  `tax` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `cost` decimal(25,2) DEFAULT NULL,
  `tax_method` tinyint(1) DEFAULT '1',
  `quantity` int(11) DEFAULT '0',
  `barcode_symbology` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'code39',
  `type` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'standard',
  `details` text CHARACTER SET utf8,
  `alert_quantity` decimal(10,2) DEFAULT '0.00',
  `cozinha` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=692 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tec_products`
--

LOCK TABLES `tec_products` WRITE;
/*!40000 ALTER TABLE `tec_products` DISABLE KEYS */;
INSERT INTO `tec_products` VALUES (1,101,'PIZZA AMERICANA',1,0.00,'pamericana.jpg','0',28.00,0,-1,'','0','',2.00,1),(2,102,'PIZZA ATUM I',1,0.00,'patum.jpg','0',24.00,0,-1,'','0','',2.00,1),(3,103,'PIZZA ATUM II',1,0.00,'patum.jpg','0',25.00,0,-1,'','0','',2.00,1),(4,104,'PIZZA BACON',1,0.00,'baconqueijo.jpg','0',27.00,0,-1,'','0','',2.00,1),(5,105,'PIZZA BAURU',1,0.00,'pbauru.jpg','0',25.00,0,-1,'','0','',2.00,1),(6,106,'PIZZA BAIANA',1,0.00,'pbaiana.jpg','0',24.00,0,-1,'','0','',2.00,1),(7,107,'PIZZA BARCELONA',1,0.00,'pcatoles.jpg','0',28.00,0,-1,'','0','',2.00,1),(8,108,'PIZZA BRASILEIRA',1,0.00,'patum.jpg','0',28.00,0,-1,'','0','',2.00,1),(9,109,'PIZZA BROCOLIS',1,0.00,'pbrocolisrequeijao.jpg','0',28.00,0,-1,'','0','',2.00,1),(10,110,'PIZZA CALABRESA I',1,0.00,'pcalabresa.jpg','0',23.90,0,-1,'','0','',2.00,1),(11,111,'PIZZA CALABRESA II',1,0.00,'pcalabresa.jpg','0',26.00,0,-1,'','0','',2.00,1),(12,112,'PIZZA MODA DA CASA',1,0.00,'pmoda.jpg','0',28.00,0,-1,'','0','',2.00,1),(13,113,'PIZZA CAIPIRA I',1,0.00,'pcaipira.jpg','0',29.00,0,-1,'','0','',2.00,1),(14,114,'PIZZA CAIPIRA II',1,0.00,'pcaipira.jpg','0',30.00,0,-1,'','0','',2.00,1),(15,115,'PIZZA CAMPONESA',1,0.00,'pbrasileira.jpg','0',28.00,0,-1,'','0','',2.00,1),(16,116,'PIZZA CARNE SECA',1,0.00,'pcarneseca.jpg','0',36.00,0,-1,'','0','',2.00,1),(17,117,'PIZZA DOIS QUEIJOS',1,0.00,'pmussarela.jpg','0',27.00,0,-1,'','0','',2.00,1),(18,118,'PIZZA ESCAROLA',1,0.00,'pescarola.jpg','0',26.00,0,-1,'','0','',2.00,1),(19,119,'PIZZA ESPANHOLA',1,0.00,'pespanhola.jpg','0',27.00,0,-1,'','0','',2.00,1),(20,120,'PIZZA FRANGO C/ CATUPIRY',1,0.00,'pfrangocatupiry.jpg','0',28.00,0,-1,'','0','',2.00,1),(21,121,'PIZZA FRANCESINHA',1,0.00,'ppresunto.jpg','0',28.00,0,-1,'','0','',2.00,1),(22,122,'PIZZA GIANINNA',1,0.00,'pvegetariana.jpg','0',30.00,0,-1,'','0','',2.00,1),(23,123,'PIZZA GRAMUTE',1,0.00,'ppresunto.jpg','0',28.00,0,-1,'','0','',2.00,1),(24,124,'PIZZA HARLEY',1,0.00,'pgrega.jpg','0',27.00,0,-1,'','0','',2.00,1),(25,125,'PIZZA JARDINEIRA',1,0.00,'pjardineira.jpg','0',27.00,0,-1,'','0','',2.00,1),(26,126,'PIZZA LOMBO I',1,0.00,'plombo.jpg','0',25.00,0,-1,'','0','',2.00,1),(27,127,'PIZZA LOMBO II',1,0.00,'plombo.jpg','0',27.00,0,-1,'','0','',2.00,1),(28,128,'PIZZA MARGUERITA',1,0.00,'pmarguerita.jpg','0',26.00,0,-1,'','0','',2.00,1),(29,129,'PIZZA MILHO',1,0.00,'pmilho.jpg','0',25.00,0,-1,'','0','',2.00,1),(30,130,'PIZZA MEXICO',1,0.00,'plombo.jpg','0',27.00,0,-1,'','0','',2.00,1),(31,131,'PIZZA MUSSARELA',1,0.00,'pmussarela.jpg','0',23.90,0,-1,'','0','',2.00,1),(32,132,'PIZZA NAPOLITANA',1,0.00,'p2queijos.jpg','0',26.00,0,-1,'','0','',2.00,1),(33,133,'PIZZA PALMITO',1,0.00,'ppalmito.jpg','0',28.00,0,-1,'','0','',2.00,1),(34,134,'PIZZA PEPERONI',1,0.00,'ppeperoni.jpg','0',36.00,0,-1,'','0','',2.00,1),(35,135,'PIZZA PERUANA',1,0.00,'pgrega.jpg','0',28.00,0,-1,'','0','',2.00,1),(36,136,'PIZZA PORTUGUESA',1,0.00,'pportuguesa.jpg','0',28.00,0,-1,'','0','',2.00,1),(37,137,'PIZZA PORTUGUESA ESPECIAL',1,0.00,'pportuguesa.jpg','0',32.00,0,-1,'','0','',2.00,1),(38,138,'PIZZA QUATRO QUEIJOS',1,0.00,'p4queijos.jpg','0',30.00,0,-1,'','0','',2.00,1),(39,139,'PIZZA SÃO FRANCISCO',1,0.00,'p3queijos.jpg','0',32.00,0,-1,'','0','',2.00,1),(40,140,'PIZZA SICILIANA',1,0.00,'psiciliana.jpg','0',29.00,0,-1,'','0','',2.00,1),(41,141,'PIZZA TOSCANA',1,0.00,'ptoscana.jpg','0',26.00,0,-1,'','0','',2.00,1),(42,142,'PIZZA TRES QUEIJOS',1,0.00,'p3queijos.jpg','0',28.00,0,-1,'','0','',2.00,1),(43,143,'PIZZA VENEZA',1,0.00,'ptropical.jpg','0',28.00,0,-1,'','0','',2.00,1),(44,144,'PIZZA BRIGADEIRO',1,0.00,'pbrigadeiro.jpg','0',26.00,0,-1,'','0','',2.00,1),(45,145,'PIZZA MMs',1,0.00,'pmm.jpg','0',32.00,0,-1,'','0','',2.00,1),(46,146,'PIZZA ROMEU E JULIETA',1,0.00,'promeuejulieta.jpg','0',26.00,0,-1,'','0','',2.00,1),(47,201,'ESFIHA CARNE',2,0.00,'carne.jpg','0',1.30,0,-1,'','0','',2.00,1),(48,202,'ESFIHA ATUM',2,0.00,'atum.jpg','0',1.50,0,-1,'','0','',2.00,1),(49,203,'ESFIHA CALABRESA',2,0.00,'calabresa.jpg','0',1.50,0,-1,'','0','',2.00,1),(50,204,'ESFIHA QUEIJO MUSSARELA',2,0.00,'queijo.jpg','0',1.50,0,-1,'','0','',2.00,1),(51,205,'ESFIHA CALABRESA C/ CATUPIRY',2,0.00,'calabresaqueijo.jpg','0',2.00,0,-1,'','0','',2.00,1),(52,206,'ESFIHA TOSCANA',2,0.00,'ptoscana.jpg','0',2.00,0,-1,'','0','',2.00,1),(53,207,'ESFIHA PALMITO C/ CATUPIRY',2,0.00,'palmito.jpg','0',2.00,0,-1,'','0','',2.00,1),(54,208,'ESFIHA PALMITO C/ MUSSARELA',2,0.00,'palmito.jpg','0',2.00,0,-1,'','0','',2.00,1),(55,209,'ESFIHA ATUM C/ CATUPIRY',2,0.00,'atum.jpg','0',2.00,0,-1,'','0','',2.00,1),(56,210,'ESFIHA FRANGO C/ CATUPIRY',2,0.00,'frangorequeijao.jpg','0',2.00,0,-1,'','0','',2.00,1),(57,211,'ESFIHA FRANGO C/ MUSSARELA',2,0.00,'frangorequeijao.jpg','0',2.00,0,-1,'','0','',2.00,1),(58,212,'ESFIHA BACON',2,0.00,'baconqueijo.jpg','0',2.00,0,-1,'','0','',2.00,1),(59,213,'ESFIHA ESCAROLA C/ MUSSARELA',2,0.00,'escarola.jpg','0',2.00,0,-1,'','0','',2.00,1),(60,214,'ESFIHA ESCAROLA C/ CATUPIRY',2,0.00,'escarola.jpg','0',2.00,0,-1,'','0','',2.00,1),(61,215,'ESFIHA CALABRESA C/ MUSSARELA',2,0.00,'calabresaqueijo.jpg','0',2.00,0,-1,'','0','',2.00,1),(62,216,'ESFIHA BAINA',2,0.00,'bauru.jpg','0',2.00,0,-1,'','0','',2.00,1),(63,301,'COXINHA DE FRANGO',3,0.00,'coxinhafrango.jpg','0',2.50,0,-1,'','0','',2.00,0),(64,302,'COXINHA FRANGO C/ CAUPIRY',3,0.00,'coxinhafrango.jpg','0',3.00,0,-1,'','0','',2.00,0),(65,303,'KIBE RECHADO',3,0.00,'kibe.jpg','0',3.00,0,-1,'','0','',2.00,0),(66,304,'BOLINHO DE CARNE',3,0.00,'bolinhocarne.jpg','0',2.50,0,-1,'','0','',2.00,0),(67,305,'RISOLE PRES/QUEIJO',3,0.00,'risole.jpg','0',2.50,0,-1,'','0','',2.00,0),(68,401,'BEIRUTE ESPECIAL',4,0.00,'bfrango.jpg','0',20.00,0,-1,'','0','',2.00,1),(69,402,'BEIRUTE ROSBIFE',4,0.00,'bmoda.jpg','0',18.00,0,-1,'','0','',2.00,1),(70,403,'BEIRUTE FRANGO',4,0.00,'bcalabresacatupiry.jpg','0',18.00,0,-1,'','0','',2.00,1),(71,404,'BEIRUTE CALABRESA',4,0.00,'bcalabresa.jpg','0',18.00,0,-1,'','0','',2.00,1),(72,501,'BATATA PEQUENA',5,0.00,'porcaofritas.jpg','0',5.00,0,-1,'','0','',2.00,1),(73,502,'BATATA MEDIA',5,0.00,'porcaofritas.jpg','0',10.00,0,-1,'','0','',2.00,1),(74,503,'BATATA GRANDE',5,0.00,'porcaofritas.jpg','0',15.00,0,-1,'','0','',2.00,1),(75,601,'COCA 2L',6,0.00,'coca2.jpg','0',10.00,0,11,'','1','',2.00,0),(76,602,'COCA 1,5L',6,0.00,'coca15.jpg','0',8.00,0,3,'','1','',2.00,0),(77,603,'COCA 600ML',6,0.00,'coca600.jpg','0',5.00,0,15,'','1','',2.00,0),(78,604,'REFRIGERANTES 2L',6,0.00,'refri2.jpg','0',8.00,0,19,'','1','',2.00,0),(79,605,'ITUBAINA 2L',6,0.00,'itubaina2l.jpg','0',6.00,0,18,'','1','',2.00,0),(80,606,'DOLLY 2L',6,0.00,'dolly2.jpg','0',5.00,0,19,'','1','',2.00,0),(81,607,'REFRIGERANTES LATA',6,0.00,'minilata.jpg','0',4.00,0,19,'','1','',2.00,0),(82,608,'SKOL',6,0.00,'skollata.jpg','0',4.00,0,19,'','1','',2.00,0),(83,609,'ITAIPAVA',6,0.00,'itaipavalata.jpg','0',3.50,0,19,'','1','',2.00,0),(84,610,'DOLLY PROMOCAO',6,0.00,'dolly2.jpg','0',0.00,0,18,'','1','',2.00,0),(85,300,'OPCIONAL',2,0.00,'no_image.png','0',2.00,0,-1,'','0','',2.00,0),(424,10,'AMERICANA',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(425,11,'ATUM I',98,0.00,'no_image.jpg','0',24.00,0,-1,'','0','',2.00,0),(426,12,'ATUM II',98,0.00,'no_image.jpg','0',25.00,0,-1,'','0','',2.00,0),(427,13,'BACON',98,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(428,14,'BAURU',98,0.00,'no_image.jpg','0',25.00,0,-1,'','0','',2.00,0),(429,15,'BAIANA',98,0.00,'no_image.jpg','0',24.00,0,-1,'','0','',2.00,0),(430,16,'BARCELONA',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(431,17,'BRASILEIRA',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(432,18,'BROCOLIS',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(433,19,'CALABRESA I',98,0.00,'no_image.jpg','0',23.90,0,-1,'','0','',2.00,0),(434,20,'CALABRESA II',98,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(435,21,'MODA DA CASA',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(436,22,'CAIPIRA I',98,0.00,'no_image.jpg','0',29.00,0,-1,'','0','',2.00,0),(437,23,'CAIPIRA II',98,0.00,'no_image.jpg','0',30.00,0,-1,'','0','',2.00,0),(438,24,'CAMPONESA',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(439,25,'CARNE SECA',98,0.00,'no_image.jpg','0',36.00,0,-1,'','0','',2.00,0),(440,26,'DOIS QUEIJOS',98,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(441,27,'ESCAROLA',98,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(442,28,'ESPANHOLA',98,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(443,29,'FRANGO C/ CATUPIRY',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(444,30,'FRANCESINHA',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(445,31,'GIANINNA',98,0.00,'no_image.jpg','0',30.00,0,-1,'','0','',2.00,0),(446,32,'GRAMUTE',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(447,33,'HARLEY',98,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(448,34,'JARDINEIRA',98,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(449,35,'LOMBO I',98,0.00,'no_image.jpg','0',25.00,0,-1,'','0','',2.00,0),(450,36,'LOMBO II',98,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(451,37,'MARGUERITA',98,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(452,38,'MILHO',98,0.00,'no_image.jpg','0',25.00,0,-1,'','0','',2.00,0),(453,39,'MEXICO',98,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(454,40,'MUSSARELA',98,0.00,'no_image.jpg','0',23.90,0,-1,'','0','',2.00,0),(455,41,'NAPOLITANA',98,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(456,42,'PALMITO',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(457,43,'PEPERONI',98,0.00,'no_image.jpg','0',36.00,0,-1,'','0','',2.00,0),(458,44,'PERUANA',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(459,45,'PORTUGUESA',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(460,46,'PORTUGUESA ESPECIAL',98,0.00,'no_image.jpg','0',32.00,0,-1,'','0','',2.00,0),(461,47,'QUATRO QUEIJOS',98,0.00,'no_image.jpg','0',30.00,0,-1,'','0','',2.00,0),(462,48,'SÃO FRANCISCO',98,0.00,'no_image.jpg','0',32.00,0,-1,'','0','',2.00,0),(463,49,'SICILIANA',98,0.00,'no_image.jpg','0',29.00,0,-1,'','0','',2.00,0),(464,50,'TOSCANA',98,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(465,51,'TRES QUEIJOS',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(466,52,'VENEZA',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(467,53,'BRIGADEIRO',98,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(468,54,'MMs',98,0.00,'no_image.jpg','0',32.00,0,-1,'','0','',2.00,0),(469,55,'ROMEU E JULIETA',98,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(470,56,'AMERICANA',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(471,57,'ATUM I',99,0.00,'no_image.jpg','0',24.00,0,-1,'','0','',2.00,0),(472,58,'ATUM II',99,0.00,'no_image.jpg','0',25.00,0,-1,'','0','',2.00,0),(473,59,'BACON',99,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(474,60,'BAURU',99,0.00,'no_image.jpg','0',25.00,0,-1,'','0','',2.00,0),(475,61,'BAIANA',99,0.00,'no_image.jpg','0',24.00,0,-1,'','0','',2.00,0),(476,62,'BARCELONA',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(477,63,'BRASILEIRA',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(478,64,'BROCOLIS',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(479,65,'CALABRESA I',99,0.00,'no_image.jpg','0',23.90,0,-1,'','0','',2.00,0),(480,66,'CALABRESA II',99,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(481,67,'MODA DA CASA',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(482,68,'CAIPIRA I',99,0.00,'no_image.jpg','0',29.00,0,-1,'','0','',2.00,0),(483,69,'CAIPIRA II',99,0.00,'no_image.jpg','0',30.00,0,-1,'','0','',2.00,0),(484,70,'CAMPONESA',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(485,71,'CARNE SECA',99,0.00,'no_image.jpg','0',36.00,0,-1,'','0','',2.00,0),(486,72,'DOIS QUEIJOS',99,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(487,73,'ESCAROLA',99,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(488,74,'ESPANHOLA',99,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(489,75,'FRANGO C/ CATUPIRY',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(490,76,'FRANCESINHA',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(491,77,'GIANINNA',99,0.00,'no_image.jpg','0',30.00,0,-1,'','0','',2.00,0),(492,78,'GRAMUTE',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(493,79,'HARLEY',99,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(494,80,'JARDINEIRA',99,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(495,81,'LOMBO I',99,0.00,'no_image.jpg','0',25.00,0,-1,'','0','',2.00,0),(496,82,'LOMBO II',99,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(497,83,'MARGUERITA',99,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(498,84,'MILHO',99,0.00,'no_image.jpg','0',25.00,0,-1,'','0','',2.00,0),(499,85,'MEXICO',99,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(500,86,'MUSSARELA',99,0.00,'no_image.jpg','0',23.90,0,-1,'','0','',2.00,0),(501,87,'NAPOLITANA',99,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(502,88,'PALMITO',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(503,89,'PEPERONI',99,0.00,'no_image.jpg','0',36.00,0,-1,'','0','',2.00,0),(504,90,'PERUANA',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(505,91,'PORTUGUESA',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(506,92,'PORTUGUESA ESPECIAL',99,0.00,'no_image.jpg','0',32.00,0,-1,'','0','',2.00,0),(507,93,'QUATRO QUEIJOS',99,0.00,'no_image.jpg','0',30.00,0,-1,'','0','',2.00,0),(508,94,'SÃO FRANCISCO',99,0.00,'no_image.jpg','0',32.00,0,-1,'','0','',2.00,0),(509,95,'SICILIANA',99,0.00,'no_image.jpg','0',29.00,0,-1,'','0','',2.00,0),(510,96,'TOSCANA',99,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(511,97,'TRES QUEIJOS',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(512,98,'VENEZA',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(513,99,'BRIGADEIRO',99,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(514,100,'MMs',99,0.00,'no_image.jpg','0',32.00,0,-1,'','0','',2.00,0),(515,101,'ROMEU E JULIETA',99,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(529,999,'Taxa de entrega',102,0.00,'no_image.png','0',1.00,0,-1,'code39','0',NULL,1.00,0),(530,999,'Taxa de entrega',102,0.00,'no_image.png','0',2.00,0,-1,'code39','0',NULL,1.00,0),(531,999,'Taxa de entrega',102,0.00,'no_image.png','0',3.00,0,-1,'code39','0',NULL,1.00,0),(532,999,'Taxa de entrega',102,0.00,'no_image.png','0',4.00,0,-1,'code39','0',NULL,1.00,0),(533,999,'Taxa de entrega',102,0.00,'no_image.png','0',5.00,0,-1,'code39','0',NULL,1.00,0),(534,999,'Taxa de entrega',102,0.00,'no_image.png','0',6.00,0,-1,'code39','0',NULL,1.00,0),(535,999,'Taxa de entrega',102,0.00,'no_image.png','0',7.00,0,-1,'code39','0',NULL,1.00,0),(536,999,'Taxa de entrega',102,0.00,'no_image.png','0',8.00,0,-1,'code39','0',NULL,1.00,0),(538,1001,'BROTO AMERICANA',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(539,1002,'BROTO ATUM I',98,0.00,'no_image.jpg','0',24.00,0,-1,'','0','',2.00,0),(540,1003,'BROTO ATUM II',98,0.00,'no_image.jpg','0',25.00,0,-1,'','0','',2.00,0),(541,1004,'BROTO BACON',98,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(542,1005,'BROTO BAIANA',98,0.00,'no_image.jpg','0',24.00,0,-1,'','0','',2.00,0),(543,1006,'BROTO BARCELONA',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(544,1007,'BROTO BAURU',98,0.00,'no_image.jpg','0',25.00,0,-1,'','0','',2.00,0),(545,1008,'BROTO BRASILEIRA',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(546,1009,'BROTO BRIGADEIRO',98,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(547,1010,'BROTO BROCOLIS',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(548,1011,'BROTO CAIPIRA I',98,0.00,'no_image.jpg','0',29.00,0,-1,'','0','',2.00,0),(549,1012,'BROTO CAIPIRA II',98,0.00,'no_image.jpg','0',30.00,0,-1,'','0','',2.00,0),(550,1013,'BROTO CALABRESA I',98,0.00,'no_image.jpg','0',23.90,0,-1,'','0','',2.00,0),(551,1014,'BROTO CALABRESA II',98,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(552,1015,'BROTO CAMPONESA',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(553,1016,'BROTO CARNE SECA',98,0.00,'no_image.jpg','0',36.00,0,-1,'','0','',2.00,0),(554,1017,'BROTO DOIS QUEIJOS',98,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(555,1018,'BROTO ESCAROLA',98,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(556,1019,'BROTO ESPANHOLA',98,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(557,1020,'BROTO FRANCESINHA',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(558,1021,'BROTO FRANGO C/ CATUPIRY',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(559,1022,'BROTO GIANINNA',98,0.00,'no_image.jpg','0',30.00,0,-1,'','0','',2.00,0),(560,1023,'BROTO GRAMUTE',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(561,1024,'BROTO HARLEY',98,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(562,1025,'BROTO JARDINEIRA',98,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(563,1026,'BROTO LOMBO I',98,0.00,'no_image.jpg','0',25.00,0,-1,'','0','',2.00,0),(564,1027,'BROTO LOMBO II',98,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(565,1028,'BROTO MARGUERITA',98,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(566,1029,'BROTO MEXICO',98,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(567,1030,'BROTO MILHO',98,0.00,'no_image.jpg','0',25.00,0,-1,'','0','',2.00,0),(568,1031,'BROTO MMs',98,0.00,'no_image.jpg','0',32.00,0,-1,'','0','',2.00,0),(569,1032,'BROTO MODA DA CASA',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(570,1033,'BROTO MUSSARELA',98,0.00,'no_image.jpg','0',23.90,0,-1,'','0','',2.00,0),(571,1034,'BROTO NAPOLITANA',98,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(572,1035,'BROTO PALMITO',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(573,1036,'BROTO PEPERONI',98,0.00,'no_image.jpg','0',36.00,0,-1,'','0','',2.00,0),(574,1037,'BROTO PERUANA',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(575,1038,'BROTO PORTUGUESA',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(576,1039,'BROTO PORTUGUESA ESPECIAL',98,0.00,'no_image.jpg','0',32.00,0,-1,'','0','',2.00,0),(577,1040,'BROTO QUATRO QUEIJOS',98,0.00,'no_image.jpg','0',30.00,0,-1,'','0','',2.00,0),(578,1041,'BROTO ROMEU E JULIETA',98,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(579,1042,'BROTO SICILIANA',98,0.00,'no_image.jpg','0',29.00,0,-1,'','0','',2.00,0),(580,1043,'BROTO SÃO FRANCISCO',98,0.00,'no_image.jpg','0',32.00,0,-1,'','0','',2.00,0),(581,1044,'BROTO TOSCANA',98,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(582,1045,'BROTO TRES QUEIJOS',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(583,1046,'BROTO VENEZA',98,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(584,1047,'BROTO AMERICANA',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(585,1048,'BROTO ATUM I',99,0.00,'no_image.jpg','0',24.00,0,-1,'','0','',2.00,0),(586,1049,'BROTO ATUM II',99,0.00,'no_image.jpg','0',25.00,0,-1,'','0','',2.00,0),(587,1050,'BROTO BACON',99,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(588,1051,'BROTO BAIANA',99,0.00,'no_image.jpg','0',24.00,0,-1,'','0','',2.00,0),(589,1052,'BROTO BARCELONA',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(590,1053,'BROTO BAURU',99,0.00,'no_image.jpg','0',25.00,0,-1,'','0','',2.00,0),(591,1054,'BROTO BRASILEIRA',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(592,1055,'BROTO BRIGADEIRO',99,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(593,1056,'BROTO BROCOLIS',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(594,1057,'BROTO CAIPIRA I',99,0.00,'no_image.jpg','0',29.00,0,-1,'','0','',2.00,0),(595,1058,'BROTO CAIPIRA II',99,0.00,'no_image.jpg','0',30.00,0,-1,'','0','',2.00,0),(596,1059,'BROTO CALABRESA I',99,0.00,'no_image.jpg','0',23.90,0,-1,'','0','',2.00,0),(597,1060,'BROTO CALABRESA II',99,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(598,1061,'BROTO CAMPONESA',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(599,1062,'BROTO CARNE SECA',99,0.00,'no_image.jpg','0',36.00,0,-1,'','0','',2.00,0),(600,1063,'BROTO DOIS QUEIJOS',99,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(601,1064,'BROTO ESCAROLA',99,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(602,1065,'BROTO ESPANHOLA',99,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(603,1066,'BROTO FRANCESINHA',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(604,1067,'BROTO FRANGO C/ CATUPIRY',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(605,1068,'BROTO GIANINNA',99,0.00,'no_image.jpg','0',30.00,0,-1,'','0','',2.00,0),(606,1069,'BROTO GRAMUTE',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(607,1070,'BROTO HARLEY',99,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(608,1071,'BROTO JARDINEIRA',99,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(609,1072,'BROTO LOMBO I',99,0.00,'no_image.jpg','0',25.00,0,-1,'','0','',2.00,0),(610,1073,'BROTO LOMBO II',99,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(611,1074,'BROTO MARGUERITA',99,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(612,1075,'BROTO MEXICO',99,0.00,'no_image.jpg','0',27.00,0,-1,'','0','',2.00,0),(613,1076,'BROTO MILHO',99,0.00,'no_image.jpg','0',25.00,0,-1,'','0','',2.00,0),(614,1077,'BROTO MMs',99,0.00,'no_image.jpg','0',32.00,0,-1,'','0','',2.00,0),(615,1078,'BROTO MODA DA CASA',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(616,1079,'BROTO MUSSARELA',99,0.00,'no_image.jpg','0',23.90,0,-1,'','0','',2.00,0),(617,1080,'BROTO NAPOLITANA',99,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(618,1081,'BROTO PALMITO',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(619,1082,'BROTO PEPERONI',99,0.00,'no_image.jpg','0',36.00,0,-1,'','0','',2.00,0),(620,1083,'BROTO PERUANA',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(621,1084,'BROTO PORTUGUESA',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(622,1085,'BROTO PORTUGUESA ESPECIAL',99,0.00,'no_image.jpg','0',32.00,0,-1,'','0','',2.00,0),(623,1086,'BROTO QUATRO QUEIJOS',99,0.00,'no_image.jpg','0',30.00,0,-1,'','0','',2.00,0),(624,1087,'BROTO ROMEU E JULIETA',99,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(625,1088,'BROTO SICILIANA',99,0.00,'no_image.jpg','0',29.00,0,-1,'','0','',2.00,0),(626,1089,'BROTO SÃO FRANCISCO',99,0.00,'no_image.jpg','0',32.00,0,-1,'','0','',2.00,0),(627,1090,'BROTO TOSCANA',99,0.00,'no_image.jpg','0',26.00,0,-1,'','0','',2.00,0),(628,1091,'BROTO TRES QUEIJOS',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(629,1092,'BROTO VENEZA',99,0.00,'no_image.jpg','0',28.00,0,-1,'','0','',2.00,0),(631,2000,'MALOTE',200,0.00,'no_image.png','0',15.00,0,-1,'code39','edit',NULL,1.00,0),(663,0,'1/2 MUSSARELA 1/2 CALABRESA I',100,0.00,'no_image.png','0',23.90,0,10,'','','',5.00,1),(664,0,'1/2 ATUM I 1/2 PORTUGUESA',100,0.00,'no_image.png','0',28.00,0,10,'','','',5.00,1),(665,0,'1/2 MUSSARELA 1/2 ATUM I',100,0.00,'no_image.png','0',24.00,0,10,'','','',5.00,1),(666,0,'1/3 ATUM I 1/3 CALABRESA I 1/3 TRES QUEIJOS',101,0.00,'no_image.png','0',28.00,0,10,'','','',5.00,1),(667,0,'1/2 AMERICANA 1/2 ATUM I',100,0.00,'no_image.png','0',28.00,0,10,'','','',5.00,1),(668,0,'1/2 ATUM I 1/2 LOMBO I',100,0.00,'no_image.png','0',25.00,0,10,'','','',5.00,1),(669,0,'1/3 CALABRESA I 1/3 ATUM I 1/3 PORTUGUESA',101,0.00,'no_image.png','0',28.00,0,10,'','','',5.00,1),(670,0,'1/3 MUSSARELA 1/3 CALABRESA I 1/3 ATUM II',101,0.00,'no_image.png','0',25.00,0,10,'','','',5.00,1),(671,0,'1/2 MUSSARELA 1/2 LOMBO I',100,0.00,'no_image.png','0',25.00,0,10,'','','',5.00,1),(672,0,'1/2 ATUM I 1/2 CALABRESA I',100,0.00,'no_image.png','0',24.00,0,10,'','','',5.00,1),(673,0,'1/2 ATUM I 1/2 ATUM II',100,0.00,'no_image.png','0',25.00,0,10,'','','',5.00,1),(674,0,'1/2 AMERICANA 1/2 ATUM II',100,0.00,'no_image.png','0',28.00,0,10,'','','',5.00,1),(675,0,'1/2 CALABRESA I 1/2 MUSSARELA',100,0.00,'no_image.png','0',23.90,0,10,'','','',5.00,1),(676,0,'1/2 BROCOLIS 1/2 QUATRO QUEIJOS',100,0.00,'no_image.png','0',30.00,0,10,'','','',5.00,1),(677,0,'1/2 ATUM I 1/2 BAURU',100,0.00,'no_image.png','0',25.00,0,10,'','','',5.00,1),(678,0,'1/2-PORTUGUESA/PORTUGUESA ESPECIAL',100,0.00,'no_image.png','0',32.00,0,10,'','','',5.00,1),(679,0,'1/2-LOMBO I/LOMBO II',100,0.00,'no_image.png','0',27.00,0,10,'','','',5.00,1),(680,0,'1/2-FRANGO C/ CATUPIRY/PORTUGUESA ESPECIAL',100,0.00,'no_image.png','0',32.00,0,10,'','','',5.00,1),(681,0,'1/2-PORTUGUESA ESPECIAL/MODA DA CASA',100,0.00,'no_image.png','0',32.00,0,10,'','','',5.00,1),(682,0,'1/2-PORTUGUESA ESPECIAL/FRANGO C/ CATUPIRY',100,0.00,'no_image.png','0',32.00,0,10,'','','',5.00,1),(683,0,'1/2-CALABRESA II/FRANGO C/ CATUPIRY',100,0.00,'no_image.png','0',28.00,0,10,'','','',5.00,1),(684,0,'1/3 FRANGO C/ CATUPIRY 1/3 MODA DA CASA 1/3 PORTUGUESA ESPECIAL',101,0.00,'no_image.png','0',32.00,0,10,'','','',5.00,1),(685,0,'1/3 FRANGO C/ CATUPIRY 1/3 CALABRESA II 1/3 FRANCESINHA',101,0.00,'no_image.png','0',28.00,0,10,'','','',5.00,1),(686,0,'1/2-MUSSARELA/FRANGO C/ CATUPIRY',100,0.00,'no_image.png','0',28.00,0,10,'','','',5.00,1),(687,0,'1/2-PORTUGUESA ESPECIAL/AMERICANA',100,0.00,'no_image.png','0',32.00,0,10,'','','',5.00,1),(688,0,'1/3-FRANGO C/ CATUPIRY/AMERICANA/CALABRESA II',101,0.00,'no_image.png','0',28.00,0,10,'','','',5.00,1),(689,0,'1/3-FRANGO C/ CATUPIRY/PORTUGUESA ESPECIAL/MODA DA CASA',101,0.00,'no_image.png','0',32.00,0,10,'','','',5.00,1),(690,125,'PIZZA MUSSARELA',1,0.00,'pmussarela.jpg','0',19.99,0,5,'','0','',2.00,1),(691,0,'1/2 MUSSARELA 1/2 AMERICANA',100,0.00,'no_image.png','0',28.00,0,10,'','','',5.00,1);
/*!40000 ALTER TABLE `tec_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(50) CHARACTER SET utf8 NOT NULL,
  `avatar` varchar(150) CHARACTER SET utf8 NOT NULL,
  `id_cargo` int(11) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Junior Nascimento','jjunior','ejwkh24','images/boy.png',1,1),(12,'Operadora 1 ','operadora','12345678','images/girl.png',2,0),(14,'Celso','motoboy','12345678','images/boy.png',5,1),(15,'Pedro','','','images/boy.png',5,1),(16,'-','','','',5,1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `valores_nota`
--

DROP TABLE IF EXISTS `valores_nota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valores_nota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `troco` varchar(45) NOT NULL,
  `forma_pagamento` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valores_nota`
--

LOCK TABLES `valores_nota` WRITE;
/*!40000 ALTER TABLE `valores_nota` DISABLE KEYS */;
/*!40000 ALTER TABLE `valores_nota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venda_balcao_hist`
--

DROP TABLE IF EXISTS `venda_balcao_hist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venda_balcao_hist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_venda` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `obs` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `data_venda` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `forma_pagamento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total_dinheiro` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venda_balcao_hist`
--

LOCK TABLES `venda_balcao_hist` WRITE;
/*!40000 ALTER TABLE `venda_balcao_hist` DISABLE KEYS */;
INSERT INTO `venda_balcao_hist` VALUES (1,1,1,1,'','2017-01-16 15:22','Cartão de Débito',NULL),(2,1,15,1,'','2017-01-16 15:22','Cartão de Débito',NULL),(3,1,5,1,'','2017-01-16 19:28','Dinheiro',NULL),(4,1,17,1,'','2017-01-16 19:28','Dinheiro',NULL),(5,2,3,1,'','2017-01-16 19:59','Dinheiro',NULL),(6,2,4,1,'','2017-01-16 19:59','Dinheiro',NULL),(7,3,5,2,'','2017-01-16 22:45','',NULL),(8,4,12,1,'','2017-01-16 22:47','',NULL),(9,5,10,1,'','2017-01-16 22:48','Cartão de Crédito',NULL),(10,6,1,2,'','2017-01-21 17:26','Dinheiro   Crédito',NULL),(11,7,5,4,'','2017-01-21 17:31','Dinheiro / Débito',NULL),(12,8,5,3,'','2017-01-22 18:36','Dinheiro',NULL),(13,9,8,7,'','2017-01-22 18:47','Dinheiro',NULL),(14,10,1,10,'','2017-01-23 18:41','Dinheiro',NULL),(15,11,2,1,'','2017-01-23 19:21','Dinheiro',NULL),(16,12,5,1,'','2017-01-23 19:22','Dinheiro',NULL);
/*!40000 ALTER TABLE `venda_balcao_hist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendas_history`
--

DROP TABLE IF EXISTS `vendas_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendas_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(10) NOT NULL,
  `Produto` varchar(65) CHARACTER SET utf8 NOT NULL,
  `quantidade` int(11) NOT NULL,
  `Preço` decimal(25,2) DEFAULT NULL,
  `Total` decimal(35,2) DEFAULT NULL,
  `obs` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '1',
  `id_produto` int(11) NOT NULL DEFAULT '0',
  `num_nota_fiscal` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendas_history`
--

LOCK TABLES `vendas_history` WRITE;
/*!40000 ALTER TABLE `vendas_history` DISABLE KEYS */;
INSERT INTO `vendas_history` VALUES (1,1,'ESFIHA CARNE',1,0.99,0.99,'',1,1,NULL),(2,575,'AMERICANA',1,31.00,31.00,'31.00',99,311,NULL),(3,580,'BRASILEIRA',1,30.00,30.00,'',99,316,NULL);
/*!40000 ALTER TABLE `vendas_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendas_motoboys`
--

DROP TABLE IF EXISTS `vendas_motoboys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendas_motoboys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_motoboy` int(11) NOT NULL,
  `entregas` int(11) NOT NULL,
  `total_taxas` decimal(10,2) DEFAULT NULL,
  `id_abertura` int(11) NOT NULL,
  `horario` varchar(45) DEFAULT NULL,
  `pago` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendas_motoboys`
--

LOCK TABLES `vendas_motoboys` WRITE;
/*!40000 ALTER TABLE `vendas_motoboys` DISABLE KEYS */;
INSERT INTO `vendas_motoboys` VALUES (1,14,1,2.00,20,'2017-02-15 21:43',1),(2,14,1,4.00,20,'2017-02-15 21:43',1),(3,15,1,2.00,20,'2017-02-15 21:44',1),(4,15,1,2.00,20,'2017-02-15 21:44',1),(5,15,1,2.00,20,'2017-02-15 22:45',1),(6,15,1,2.00,21,'2017-02-17 22:13',1),(7,14,1,4.00,21,'2017-02-17 22:20',1),(8,0,1,2.00,23,'2017-03-06 22:28',0),(9,0,1,2.00,23,'2017-03-07 00:54',0),(10,0,1,2.00,23,'2017-03-07 01:22',0),(11,0,1,2.00,23,'2017-03-07 01:27',0),(12,0,1,2.00,23,'2017-03-07 18:29',0),(13,15,1,2.00,23,'2017-03-07 22:36',0),(14,0,1,2.00,23,'2017-03-07 22:41',0),(15,15,1,3.00,24,'2017-03-17 00:11',0),(16,14,1,2.00,26,'2017-03-20 13:00',0),(17,14,1,4.00,26,'2017-03-20 22:03',0),(18,0,1,3.00,26,'2017-03-22 18:06',0),(19,0,1,2.00,26,'2017-03-22 18:06',0),(20,15,1,2.00,26,'2017-03-25 17:23',0),(21,14,1,4.00,27,'2017-04-06 22:14',0),(22,15,1,2.00,31,'2017-04-12 21:38',0),(23,0,1,2.00,31,'2017-04-13 00:11',0),(24,15,1,2.00,31,'2017-04-13 00:44',0),(25,15,1,2.00,31,'2017-04-13 00:45',0),(26,14,1,4.00,31,'2017-04-13 00:50',0),(27,14,1,4.00,31,'2017-04-13 01:27',0),(28,14,1,4.00,31,'2017-04-17 15:11',0),(29,0,1,2.00,31,'2017-04-18 00:52',0),(30,15,1,2.00,31,'2017-04-18 00:53',0),(31,15,1,2.00,34,'2017-04-23 20:48',0),(32,14,1,2.00,34,'2017-04-23 21:35',0),(33,0,1,2.00,34,'2017-04-24 04:40',0),(34,14,1,4.00,34,'2017-04-24 05:17',0),(35,0,1,3.00,34,'2017-04-24 21:42',0),(36,16,1,3.00,34,'2017-04-24 21:47',0),(37,14,1,2.00,34,'2017-04-24 21:47',0),(38,14,1,2.00,34,'2017-04-25 01:13',0),(39,14,1,2.00,34,'2017-04-25 01:15',0),(40,14,1,2.00,34,'2017-04-25 01:23',0);
/*!40000 ALTER TABLE `vendas_motoboys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendas_suspensas`
--

DROP TABLE IF EXISTS `vendas_suspensas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendas_suspensas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_suspensao` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_suspensao` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `total` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendas_suspensas`
--

LOCK TABLES `vendas_suspensas` WRITE;
/*!40000 ALTER TABLE `vendas_suspensas` DISABLE KEYS */;
/*!40000 ALTER TABLE `vendas_suspensas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-28 15:51:58
