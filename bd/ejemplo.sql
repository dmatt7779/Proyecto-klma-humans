-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: ejemplo
-- ------------------------------------------------------
-- Server version	8.0.20

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
-- Table structure for table `campañas`
--

DROP TABLE IF EXISTS `campañas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `campañas` (
  `idcampañas` int NOT NULL AUTO_INCREMENT,
  `campaña` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcampañas`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campañas`
--

LOCK TABLES `campañas` WRITE;
/*!40000 ALTER TABLE `campañas` DISABLE KEYS */;
INSERT INTO `campañas` VALUES (1,'1'),(2,'2'),(3,'1'),(4,'3');
/*!40000 ALTER TABLE `campañas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalleventa`
--

DROP TABLE IF EXISTS `detalleventa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detalleventa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cantidad` int NOT NULL,
  `productos_id` int NOT NULL,
  `talla` varchar(45) DEFAULT NULL,
  `ventas_id` int NOT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `manga` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_detalleventa_productos1_idx` (`productos_id`),
  KEY `fk_detalleventa_ventas1_idx` (`ventas_id`),
  CONSTRAINT `fk_detalleventa_productos1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`),
  CONSTRAINT `fk_detalleventa_ventas1` FOREIGN KEY (`ventas_id`) REFERENCES `ventas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalleventa`
--

LOCK TABLES `detalleventa` WRITE;
/*!40000 ALTER TABLE `detalleventa` DISABLE KEYS */;
INSERT INTO `detalleventa` VALUES (29,2,1,'S',15,NULL,NULL),(30,4,1,'L',15,NULL,NULL),(31,4,1,'M',15,NULL,NULL),(32,5,1,'XL',15,NULL,NULL),(33,1,2,'S',15,NULL,NULL),(34,2,2,'M',16,NULL,NULL),(35,1,1,'XL',17,NULL,NULL),(36,2,1,'M',17,NULL,NULL),(37,1,1,'S',17,NULL,NULL),(38,1,1,'S',18,NULL,NULL),(39,1,2,'M',19,NULL,NULL),(40,1,1,'S',20,NULL,NULL),(41,2,1,'S',21,NULL,NULL),(42,1,1,'M',21,NULL,NULL),(43,1,1,'XL',21,NULL,NULL),(86,1,26,'S',22,NULL,NULL),(87,1,1,'XL',22,NULL,NULL),(88,1,55,'L',22,'Masculino','Ranglan'),(93,2,43,'M',25,'Femenino','Sisa'),(94,1,1,'S',23,NULL,NULL),(95,3,47,'S',23,'Femenino','Sisa'),(96,1,55,'S',23,'Femenino','Sisa'),(97,1,47,'S',23,'Femenino','Ranglan');
/*!40000 ALTER TABLE `detalleventa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `frases`
--

DROP TABLE IF EXISTS `frases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `frases` (
  `id` int NOT NULL AUTO_INCREMENT,
  `frase` varchar(400) DEFAULT NULL,
  `escritor` varchar(45) DEFAULT NULL,
  `emocion` varchar(45) DEFAULT NULL,
  `blog` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `frases`
--

LOCK TABLES `frases` WRITE;
/*!40000 ALTER TABLE `frases` DISABLE KEYS */;
INSERT INTO `frases` VALUES (4,'LA ALEGRÍA Y EL AMOR SON DOS ALAS PARA LAS GRANDES ACCIONES','GOETHE','AMOR','Todos los hombres, hermano Galión, quieren vivir felizmente. Aspiramos a ser felices y para ello intentamos descubrir qué es. Sin embargo, cada persona posee una respuesta y una definición de felicidad diferente. — Séneca, “De vita beata”'),(5,'LA FELICIDAD ES LA CERTEZA DE NO SENTIRSE PERDIDO','JORGE BUCAY','FELICIDAD','Todos los hombres, hermano Galión, quieren vivir felizmente. Aspiramos a ser felices y para ello intentamos descubrir qué es. Sin embargo, cada persona posee una respuesta y una definición de felicidad diferente. — Séneca, “De vita beata”'),(6,'LA PRUEBA MÀS CLARA DE SABIDURÍA ES UNA ALEGRÍA CONTINUA','MONTAIGNE','ALEGRÍA','Todos los hombres, hermano Galión, quieren vivir felizmente. Aspiramos a ser felices y para ello intentamos descubrir qué es. Sin embargo, cada persona posee una respuesta y una definición de felicidad diferente. — Séneca, “De vita beata'),(7,'EL QUE DE LA IRA SE DEJA VENCER SE EXPONE A PERDER','PROVERBIO','IRA','Todos los hombres, hermano Galión, quieren vivir felizmente. Aspiramos a ser felices y para ello intentamos descubrir qué es. Sin embargo, cada persona posee una respuesta y una definición de felicidad diferente. — Séneca, “De vita beata'),(8,'DEJAMOS DE TEMER A AQUELLO QUE SE HA APRENDIDO A ENTENDER','MARIE CURIE','MIEDO','Todos los hombres, hermano Galión, quieren vivir felizmente. Aspiramos a ser felices y para ello intentamos descubrir qué es. Sin embargo, cada persona posee una respuesta y una definición de felicidad diferente. — Séneca, “De vita beata'),(9,'UN SANTO TRISTE ES UN TRISTE SANTO','FRANCISCO DE SALES','TRISTEZA','Todos los hombres, hermano Galión, quieren vivir felizmente. Aspiramos a ser felices y para ello intentamos descubrir qué es. Sin embargo, cada persona posee una respuesta y una definición de felicidad diferente. — Séneca, “De vita beata”'),(10,'EL AMOR UNA DANZA ENTRE LA PROXIMIDAD Y LA DISTANCIA','MIGUEL MESA','AMOR','Todos los hombres, hermano Galión, quieren vivir felizmente. Aspiramos a ser felices y para ello intentamos descubrir qué es. Sin embargo, cada persona posee una respuesta y una definición de felicidad diferente. — Séneca, “De vita beata”'),(11,'PARA QUE NO QUEDE REPETIDA PONGAMOS EMPACA TUS SUEÑOS','JERSON ECHEVERRI','CALMWEAR','Todos los hombres, hermano Galión, quieren vivir felizmente. Aspiramos a ser felices y para ello intentamos descubrir qué es. Sin embargo, cada persona posee una respuesta y una definición de felicidad diferente. — Séneca, “De vita beata”'),(12,'ESTA ES UNA PRUEBA PARA VER SI FUNCIONA EL BLOG BIEN','MATEO PINEDA','ODIO','Los mejores instructores de todo el mundo enseñan a millones de estudiantes en Udemy. Proporcionamos las herramientas y las habilidades para que enseñes lo que te apasiona, Los mejores instructores de todo el mundo enseñan a millones de estudiantes en Udemy. Proporcionamos las herramientas y las habilidades para que enseñes lo que te apasiona'),(13,'ESTA ES UNA PRUEBA PARA VER SI FUNCIONA EL BLOG BIEN','MATEO PINEDA','ODIO','Los mejores instructores de todo el mundo enseñan a millones de estudiantes en Udemy. Proporcionamos las herramientas y las habilidades para que enseñes lo que te apasiona, Los mejores instructores de todo el mundo enseñan a millones de estudiantes en Udemy. Proporcionamos las herramientas y las habilidades para que enseñes lo que te apasiona'),(14,'una frase que te va a volver loco','probador de frases','TRISTEZA','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id aliquet tortor. Nunc bibendum lacinia elit, at ultrices massa auctor eget. Quisque eleifend tortor enim, et condimentum felis imperdiet nec. Mauris non dictum eros. Morbi volutpat magna non tortor aliquam, eu semper lorem congue. Aliquam id lacus risus. Aenean enim felis, dapibus vel mi sollicitudin, lacinia bibendum leo. Nulla consectetur gravida orci at dictum. Nam egestas dui ac tortor tempor efficitur. In euismod tincidunt diam, sed vehicula nisi consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Vivamus sed lacus sed velit sagittis malesuada. Quisque lorem ipsum, hendrerit vel sodales at, vehicula eu leo. Ut tristique pharetra justo, et posuere augue vulputate at. Quisque eget leo in lorem interdum tincidunt et sit amet massa. Donec elementum vehicula porttitor. Duis lacus turpis, sodales id sapien vel, placerat iaculis lorem. Suspendisse at facilisis urna. Praesent hendrerit sem id ante tempor laoreet eu id erat.  In vel commodo lorem. Donec cursus vestibulum odio non eleifend. Quisque interdum mi et ligula bibendum tincidunt. Phasellus turpis diam, fringilla et neque a, fermentum dignissim neque. Donec eget elit et magna laoreet porta. Pellentesque sit amet mi orci. Etiam porta odio sagittis, maximus erat at, molestie magna. Curabitur mattis lectus non lorem pharetra facilisis. Nulla sed diam non purus suscipit feugiat in nec augue. Duis malesuada vestibulum convallis. Maecenas pharetra leo quam, eget tempor nisl eleifend vitae. Integer at maximus sem. Donec at sem non erat commodo elementum sit amet vitae justo. Maecenas non accumsan enim, mollis viverra urna. Fusce ornare sagittis nisl vel blandit. Maecenas imperdiet eleifend mauris, non commodo eros aliquet non.  Aliquam imperdiet consectetur dolor, in eleifend purus molestie nec. Morbi vitae libero sollicitudin, ullamcorper felis auctor, cursus urna. Proin eget ex sed mi luctus laoreet. Sed dui justo, iaculis vitae diam vitae, rhoncus malesuada lectus. Etiam turpis est, placerat non eros eu, varius laoreet ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin ornare porta ex ut sollicitudin. Sed justo quam, facilisis porttitor magna non, convallis tincidunt dolor. Quisque at condimentum eros. Etiam ac mattis purus, sed ornare ex. Sed eleifend mauris lorem, nec congue diam facilisis convallis. Integer interdum enim et tortor fermentum sollicitudin. Donec ac erat dignissim, tincidunt risus nec, ultrices est. Duis vel magna dapibus, egestas turpis vitae, ultrices massa. Etiam semper porta velit rutrum cursus.');
/*!40000 ALTER TABLE `frases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `tipologia_id` int NOT NULL,
  `precio_venta` float NOT NULL,
  `precio_compra` float NOT NULL,
  `cantidad` int NOT NULL,
  `habilitado` tinyint NOT NULL,
  `fecha` datetime NOT NULL,
  `historia` longtext NOT NULL,
  `descripcion` longtext NOT NULL,
  `genero` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `carrusel` varchar(400) DEFAULT NULL,
  `emocion` varchar(45) DEFAULT NULL,
  `empaque` varchar(45) DEFAULT NULL,
  `imagencalmwear` varchar(45) DEFAULT NULL,
  `imagenmaterial1` varchar(45) DEFAULT NULL,
  `imagenmaterial2` varchar(45) DEFAULT NULL,
  `diseñador` varchar(45) DEFAULT NULL,
  `frase` varchar(400) DEFAULT NULL,
  `campaña` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_productos_tipologia_idx` (`tipologia_id`),
  CONSTRAINT `fk_productos_tipologia` FOREIGN KEY (`tipologia_id`) REFERENCES `tipologia` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'C1/315-01','CALM DRESS SOUL DRESS',1,270000,80000,100,1,'2020-10-19 09:03:00','ESTA T-SHIRT GALERY FUE ELABORADA EN 100% ALGÓDON ORGÁNICO EXTRA SUAVE, TIENE UN FIT OVERSIZED\n\nSU ARTE FUE CREADO A TRAVÉS DE UNA EXPRESIÓN EMOCIONAL\n\nMADE IN COLOMBIA','CHOMPA MANGA CORTA CON SESGOS EN CONTRASTE','f','Loungewear/primera.jpg',NULL,NULL,'26','Loungewear/primera.jpg',NULL,NULL,'SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.',NULL),(2,'C1/315-02','T-SHIRT BRAND',1,270000,75000,100,1,'2020-10-19 09:12:00','ESTA T-SHIRT GALERY FUE ELABORADA EN 100% ALGÓDON ORGÁNICO EXTRA SUAVE, TIENE UN FIT OVERSIZED\n\nSU ARTE FUE CREADO A TRAVÉS DE UNA EXPRESIÓN EMOCIONAL\n\nMADE IN COLOMBIA','CAMISETA MANGA SISA BORDADA','u','Loungewear/Sintítulo.jpg',NULL,NULL,'26','Loungewear/Sintítulo.jpg',NULL,NULL,'SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.',NULL),(3,'C1/315-03','KNITTED SWEATER',1,270000,74000,100,1,'2020-10-19 09:12:00','ESTA T-SHIRT GALERY FUE ELABORADA EN 100% ALGÓDON ORGÁNICO EXTRA SUAVE, TIENE UN FIT OVERSIZED\n\nSU ARTE FUE CREADO A TRAVÉS DE UNA EXPRESIÓN EMOCIONAL\n\nMADE IN COLOMBIA','BUSO TEJIDO CON MANGAS ABOMBADAS','f','Loungewear/tercera.jpg',NULL,NULL,'26','Loungewear/tercera.jpg',NULL,NULL,'SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.',NULL),(4,'C1/315-04','COMFORTABLE BLAZER',1,370000,200000,100,1,'2020-10-19 09:17:00','ESTA T-SHIRT GALERY FUE ELABORADA EN 100% ALGÓDON ORGÁNICO EXTRA SUAVE, TIENE UN FIT OVERSIZED\n\nSU ARTE FUE CREADO A TRAVÉS DE UNA EXPRESIÓN EMOCIONAL\n\nMADE IN COLOMBIA','BLAZER CON RAYAS ACOLCHADAS','u','Loungewear/wengue.jpg',NULL,NULL,'26','Loungewear/wengue.jpg',NULL,NULL,'SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.',NULL),(5,'C1/315-05','BIG JACKET',1,370000,200000,100,1,'2020-10-19 09:17:00','ESTA T-SHIRT GALERY FUE ELABORADA EN 100% ALGÓDON ORGÁNICO EXTRA SUAVE, TIENE UN FIT OVERSIZED\n\nSU ARTE FUE CREADO A TRAVÉS DE UNA EXPRESIÓN EMOCIONAL\n\nMADE IN COLOMBIA','CHAQUETA OVERSIZE AFELPADA','m','Loungewear/wengue2.jpg',NULL,NULL,'26','Loungewear/wengue2.jpg',NULL,NULL,'SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.',NULL),(6,'C1/315-06','T-SHIRT BRAND 2',1,270000,75000,100,1,'2020-10-19 09:12:00','ESTA T-SHIRT GALERY FUE ELABORADA EN 100% ALGÓDON ORGÁNICO EXTRA SUAVE, TIENE UN FIT OVERSIZED\n\nSU ARTE FUE CREADO A TRAVÉS DE UNA EXPRESIÓN EMOCIONAL\n\nMADE IN COLOMBIA','CAMISETA MANGA SISA BORDADA','m','Loungewear/Sintítulo.jpg',NULL,NULL,'26','Loungewear/Sintítulo.jpg',NULL,NULL,'SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.',NULL),(7,'C1/315-07','KNITTED SWEATER 2',1,27000,74000,100,1,'2020-10-19 09:12:00','ESTA T-SHIRT GALERY FUE ELABORADA EN 100% ALGÓDON ORGÁNICO EXTRA SUAVE, TIENE UN FIT OVERSIZED\n\nSU ARTE FUE CREADO A TRAVÉS DE UNA EXPRESIÓN EMOCIONAL\n\nMADE IN COLOMBIA','BUSO TEJIDO CON MANGAS ABOMBADAS','m','Loungewear/tercera.jpg',NULL,NULL,'26','Loungewear/tercera.jpg',NULL,NULL,'SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.',NULL),(8,'C1/315-08','COMFORTABLE BLAZER 2',1,370000,200000,100,1,'2020-10-19 09:17:00','ESTA T-SHIRT GALERY FUE ELABORADA EN 100% ALGÓDON ORGÁNICO EXTRA SUAVE, TIENE UN FIT OVERSIZED\n\nSU ARTE FUE CREADO A TRAVÉS DE UNA EXPRESIÓN EMOCIONAL\n\nMADE IN COLOMBIA','BLAZER CON RAYAS ACOLCHADA','f','Loungewear/wengue.jpg',NULL,NULL,'26','Loungewear/wengue.jpg',NULL,NULL,'SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.',NULL),(9,'C1/315-09','BIG JACKET 2',1,370000,200000,100,1,'2020-10-19 09:17:00','ESTA T-SHIRT GALERY FUE ELABORADA EN 100% ALGÓDON ORGÁNICO EXTRA SUAVE, TIENE UN FIT OVERSIZED\n\nSU ARTE FUE CREADO A TRAVÉS DE UNA EXPRESIÓN EMOCIONAL\n\nMADE IN COLOMBIA','CHAQUETA OVERSIZE AFELPADA','f','Loungewear/wengue2.jpg',NULL,NULL,'26','Loungewear/wengue2.jpg',NULL,NULL,'SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.',NULL),(15,'C1/315-10','T-SHIRT BRAND 4',1,50000,40000,10,0,'2020-12-10 14:33:59','fue elaborada en estos dias','camisa mela','u','Loungewear/melo3.jpg',NULL,NULL,'26','Loungewear/melo3.jpg',NULL,NULL,'SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.',NULL),(26,'h1n1','bolso de loungewear',2,2000,2000,20,1,'2021-02-14 20:10:01','chimba de historia','chimbita de bolso','u','Calmwear/bolso.png','carrusel/',NULL,'','Calmwear/bolso.png','calmwear/material01.png','calmwear/material02.png','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.',NULL),(28,'referencia prueba jhon','prueba jhon',1,2000,5000,20,1,'2021-02-08 18:02:08','chimba de historia','camisa mela','u','Loungewear/melo4.jpg','carrusel/imagen calmwear.jpg,carrusel/melo4 - copia (2).jpg,carrusel/melo4 - copia (3).jpg,carrusel/melo4 - copia (4).jpg,carrusel/melo4 - copia (5).jpg,carrusel/melo4 - copia.jpg',NULL,'26','Loungewear/melo4.jpg',NULL,NULL,'SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.',NULL),(29,'ref','geometry totum',2,25000,25000,20,1,'2021-02-14 18:02:08','hystory','objetico','u','Calmwear/book.jpg','carrusel/book - copia (2).jpg,carrusel/book - copia (3).jpg,carrusel/book - copia.jpg,carrusel/book.jpg',NULL,'26','calmwear/book.jpg','calmwear/material01.png','calmwear/material02.png','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.',NULL),(30,'ref','geometry totum 2',2,25000,25000,20,1,'2021-02-14 18:02:08','hystory','objetico','f','Calmwear/Design_Museum_.jpg','carrusel/book - copia (2).jpg,carrusel/book - copia (3).jpg,carrusel/book - copia.jpg,carrusel/book.jpg',NULL,'26','calmwear/book.jpg','calmwear/material01.png','calmwear/material02.png','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.',NULL),(32,'h1n1','saas',2,2000,5000,20,1,'2021-02-14 19:38:15','chimba de historia','camisa mela','f','Calmwear/book.jpg','carrusel/book - copia (2).jpg,carrusel/book - copia (3).jpg,carrusel/book - copia.jpg,carrusel/book.jpg',NULL,'26','Calmwear/book.jpg','calmwear/material01.png','calmwear/material02.png','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.',NULL),(34,'material','material',2,22000,12232,122332,1,'2021-02-14 21:15:47','fue elaborada en estos dias','camisa mela','f','Calmwear/Design_Museum_.jpg','carrusel/book - copia (2).jpg,carrusel/book - copia (3).jpg,carrusel/book - copia.jpg,carrusel/book.jpg,carrusel/Design_Museum_.jpg',NULL,'26','Calmwear/book.jpg','Calmwear/mat.png','Calmwear/mat2.png','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.',NULL),(35,'ira 1','ira1',3,50000,5000,20,1,'2021-02-15 00:33:47','chimba de historia','camisa mela','f','Transition/ira1.png','carrusel/ira 1.png','ira','26','Transition/ira1.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','1'),(36,'ira 2','ira 2',3,2000,5000,20,1,'2021-02-15 00:41:35','chimba de historia','camisa mela','f','Transition/ira2.png','carrusel/ira 2.png','ira','26','Transition/ira2.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','2'),(37,'ira 3','ira 3',3,2000,5000,20,1,'2021-02-15 00:42:14','chimba de historia','camisa mela','m','Transition/ira3.png','carrusel/ira 3.png','ira','26','Transition/ira3.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','3'),(38,'ira 4','ira 4',3,2000,5000,20,1,'2021-02-15 00:42:49','chimba de historia','camisa mela','m','Transition/ira4.png','carrusel/ira 4.png','ira','26','Transition/ira4.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','4'),(39,'miedo 1','miedo 1',3,2000,5000,20,1,'2021-02-15 00:47:14','chimba de historia','camisa mela','m','Transition/miedo1.png','carrusel/miedo 1.png','miedo','26','Transition/miedo1.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','1'),(40,'miedo 2','miedo 2',3,2000,5000,20,1,'2021-02-15 00:49:14','chimba de historia','camisa mela','m','Transition/miedo2.png','carrusel/miedo 2.png','miedo','26','Transition/miedo2.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','2'),(41,'miedo 3','miedo 3',3,2000,5000,20,1,'2021-02-15 00:49:43','chimba de historia','camisa mela','f','Transition/miedo3.png','carrusel/miedo 3.png','miedo','26','Transition/miedo3.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','3'),(42,'miedo 4','miedo 4',3,2000,5000,20,1,'2021-02-15 00:50:13','chimba de historia','camisa mela','f','Transition/miedo4.png','carrusel/miedo 4.png','miedo','26','Transition/miedo4.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','4'),(43,'tristeza 1','tristeza 1',3,2000,5000,20,1,'2021-02-15 00:51:26','chimba de historia','camisa mela','m','Transition/tristeza1.png','carrusel/tristeza 1.png','tristeza','26','Transition/tristeza1.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','1'),(44,'tristeza 2','tristeza 2',3,2000,5000,20,1,'2021-02-15 00:52:16','chimba de historia','camisa mela','m','Transition/tristeza2.png','carrusel/tristeza 2.png','tristeza','26','Transition/tristeza2.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','2'),(45,'tristeza 3','tristeza 3',3,2000,5000,20,1,'2021-02-15 00:53:36','chimba de historia','camisa mela','m','Transition/tristeza3.png','carrusel/tristeza 3.png','tristeza','26','Transition/tristeza3.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','3'),(46,'tristeza 4','tristeza 4 ',3,2000,5000,20,1,'2021-02-15 00:55:24','chimba de historia','camisa mela','f','Transition/tristeza4.png','carrusel/tristeza 4.png','tristeza','26','Transition/tristeza4.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','4'),(47,'alegria 1','alegria 1',3,2000,5000,20,1,'2021-02-15 01:00:42','chimba de historia','camisa mela','m','Transition/alegria1.png','carrusel/alegria 1.png','alegria','26','Transition/alegria1.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','1'),(48,'alegria 2','alegria 2',3,2000,5000,20,1,'2021-02-15 01:01:29','chimba de historia','camisa mela','m','Transition/alegria2.png','carrusel/alegria 2.png','alegria','26','Transition/alegria2.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','2'),(49,'alegria 3','alegria 3',3,2000,5000,20,1,'2021-02-15 01:02:23','chimba de historia','camisa mela','m','Transition/alegria3.png','carrusel/alegria 3.png','alegria','26','Transition/alegria3.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','3'),(50,'alegria 4','alegria 4',3,2000,5000,20,1,'2021-02-15 01:03:20','chimba de historia','camisa mela','f','Transition/alegria4.png','carrusel/alegria 4.png','alegria','26','Transition/alegria4.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','4'),(51,'felicidad 1 ','felicidad 1 ',3,2000,5000,20,1,'2021-02-15 01:19:59','chimba de historia','camisa mela','f','Transition/felicidad1.png','carrusel/felicidad 1.png','felicidad','26','Transition/felicidad1.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','1'),(52,'felicidad 2','felicidad 2',3,2000,5000,20,1,'2021-02-15 01:24:18','chimba de historia','camisa mela','f','Transition/felicidad2.png','carrusel/felicidad 2.png','felicidad','26','Transition/felicidad2.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','2'),(53,'felicidad 3','felicidad 3',3,2000,5000,20,1,'2021-02-15 01:29:39','chimba de historia','camisa mela','u','Transition/felicidad3.png','carrusel/felicidad 3.png','felicidad','26','Transition/felicidad3.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','3'),(54,'felicidad 4','felicidad 4',3,2000,5000,20,1,'2021-02-15 01:30:31','chimba de historia','camisa mela','u','Transition/felicidad4.png','carrusel/felicidad 4.png','felicidad','26','Transition/felicidad4.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','4'),(55,'amor 1','amor 1',3,2000,5000,20,1,'2021-02-15 01:31:48','chimba de historia','camisa mela','u','Transition/amor1.png','carrusel/amor 1.png','amor','26','Transition/amor1.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','1'),(56,'amor 2','amor 2',3,2000,5000,20,1,'2021-02-15 01:32:24','chimba de historia','camisa mela','u','Transition/amor2.png','carrusel/amor 2.png','amor','26','Transition/amor2.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','2'),(57,'amor 3','amor 3',3,2000,5000,20,1,'2021-02-15 01:36:41','chimba de historia','camisa mela','m','Transition/amor3.png','carrusel/amor 3.png','amor','26','Transition/amor3.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','3'),(58,'amor 4','amor 4',3,2000,5000,20,1,'2021-02-15 01:37:11','chimba de historia','camisa mela','f','Transition/amor4.png','carrusel/amor 4.png','amor','26','Transition/amor4.png','/','/','SARA VARGAS','EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.','4'),(62,'C1/220-14','TOTE BAG',2,50000,40000,5,1,'2021-02-16 17:26:13','fue elaborada en estos dias','es un empaque muy bonito supremamente maravilloso','u','Calmwear/bolsocalm.png','carrusel/bolsocalm.png','','','Calmwear/bolsocalm.png','Calmwear/mat.png','Calmwear/mat2.png','JERSON ECHEVERRRI','EMPACA TU SUEÑOS',NULL),(64,'C1/315-10','prueba',2,2000,5000,20,1,'2021-02-18 15:28:08','chimba de historia','camisa mela','m','Calmwear/book.jpg','carrusel/','','62','Calmwear/book.jpg','Calmwear/','Calmwear/','jerson mi chan','LA FELICIDAD ES LA CERTEZA DE NO SENTIRSE PERDIDO',NULL),(65,'refer','refer',2,2000,5000,20,1,'2021-02-21 01:25:36','chimba de historia','camisa mela','f','Calmwear/Desig.jpg','carrusel/','','26','Calmwear/Desig.jpg','Calmwear/mat.png','Calmwear/mat2.png','jerson mi chan','hablame','1');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suscripcion`
--

DROP TABLE IF EXISTS `suscripcion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `suscripcion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `correo` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suscripcion`
--

LOCK TABLES `suscripcion` WRITE;
/*!40000 ALTER TABLE `suscripcion` DISABLE KEYS */;
INSERT INTO `suscripcion` VALUES (14,'ad@m.com'),(15,'suscripcion@prueba.com'),(17,'correo@m.com'),(18,'j@d.comssssssss'),(19,'holaszs@m.com'),(20,'micorreojijiji@m.com'),(21,'singapur@m.com'),(23,'sadassa@de.comwwwada'),(24,'yo noapruebelamor@preomearriesgo.aquererte');
/*!40000 ALTER TABLE `suscripcion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipologia`
--

DROP TABLE IF EXISTS `tipologia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipologia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipologia`
--

LOCK TABLES `tipologia` WRITE;
/*!40000 ALTER TABLE `tipologia` DISABLE KEYS */;
INSERT INTO `tipologia` VALUES (1,'Loungewear'),(2,'Calmwear'),(3,'Transition');
/*!40000 ALTER TABLE `tipologia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `apodo` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `rol` varchar(1) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'pipa','ad@m.com','123','3','2020-12-08 18:36:00'),(2,'admin','admin@m.com','123','1','2020-12-12 18:36:00'),(51,'vendomucho','vendedor@m.com','123','2','2021-01-25 20:38:29'),(52,'key','yacuza@m.com','123','2','2021-01-27 18:18:31'),(55,'dddd','suscripcion@prueba.com','123','3','2021-02-08 17:58:34');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ventas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subtotal` float DEFAULT '0',
  `total` float DEFAULT NULL,
  `estado` varchar(1) NOT NULL,
  `fecha` varchar(40) NOT NULL DEFAULT 'now()',
  `envio` float DEFAULT NULL,
  `usuarios_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `doctorshots_ventas_mesero_id_d52919c3` (`total`),
  KEY `fk_ventas_usuarios1_idx` (`usuarios_id`),
  CONSTRAINT `fk_ventas_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
INSERT INTO `ventas` VALUES (15,4320000,NULL,'2','2020-04-19 00:00:00',0,51),(16,540000,NULL,'3','2020-04-19 00:00:00',0,51),(17,1080000,NULL,'1','2021-01-27 00:41:18',0,51),(18,270000,NULL,'3','2021-01-27 12:56:45',0,1),(19,270000,NULL,'2','2021-01-27 18:25:37',0,1),(20,270000,NULL,'2','2021-01-27 19:01:21',0,2),(21,1080000,NULL,'1','2021-01-27 23:25:49',0,1),(22,276000,NULL,'0','2021-01-28 11:17:28',0,51),(23,0,NULL,'0','2021-02-05 19:45:25',0,1),(25,0,NULL,'0','2021-02-15 23:23:58',0,2);
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-21  2:40:31
