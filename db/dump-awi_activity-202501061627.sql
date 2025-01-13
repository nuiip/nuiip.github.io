-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: awi_activity
-- ------------------------------------------------------
-- Server version	9.1.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_role` int DEFAULT '1',
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT '1',
  `verification_token` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `refresh_token` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `note` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `username` (`username`) USING BTREE,
  UNIQUE KEY `email` (`email`) USING BTREE,
  UNIQUE KEY `password_reset_token` (`password_reset_token`) USING BTREE,
  KEY `id_role` (`id_role`) USING BTREE,
  KEY `refresh_token` (`refresh_token`) USING BTREE,
  CONSTRAINT `users_roles_FK` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'app_admin','ahpamGeyH0IHI0G1xJOorgelOXZHYH5R','$2y$13$Asb8dWt7O14.awf32iktSuLwP3EXgYhAKUOi5CopGj6lNUQBD1qDm','BeoERJedwLiju9CNb0KNlwhv8YiOb04I_1692607101','admin@gmail.com',1,'gY4clXQ8j2dR1nojA-qbFEOar0DjVoop_1689246510',NULL,NULL,'2023-04-01 12:36:08',1,'2023-07-13 11:08:30',1,NULL,NULL),(193,49,'111111','ECZamP0rosHU-tjNKUxqjhrMoVl2xa4L','$2y$13$.BUSAA9cisLptoChuSdtEub99PeIuIF.BcxhO7St50z/jiJBcvxdC',NULL,'ipriatna94.id@gmail.com',1,'qBdEnEultuTRK9sochgG7B0JW6lWk4i0_1692696071',NULL,'test',NULL,NULL,'2023-08-22 09:35:27',1,NULL,NULL),(196,49,'111112','KULDyETKiYNrcr16o29X1smNMOsL4oM0','$2y$13$.uzEvI.DU7FX8UuU7hYjNeJcjbeNk4LLfSi7uW40uMn6R.eNsZwcy',NULL,'test@mail.com',1,'CNGGUpwLKFjaEhaDTkZKXdbp7EMqlein_1694580562',NULL,'test',NULL,NULL,'2023-09-13 04:49:28',195,NULL,NULL),(197,48,'111110','7q8r5XfKqFSWoM5Z6ZMnkrnwTKkxGpE0','$2y$13$k3R7orx08X/6c7PbCBYu9OM/rsvs5B/cXYzpmaRhnmU4w/ookwkrC',NULL,'employee01@gmail.com',1,'5IHypi8xdtP47w4Bj_KfknwmC1JxDVU5_1695010118',NULL,'',NULL,NULL,'2023-09-20 12:18:30',1,NULL,NULL),(200,50,'jaggerjack403@gmail.com','-i9oUU1wK2zF29dvwghqfXVXUolP3L-j','$2y$13$7Df8CbucPcGCVrSTI1eaTuBOz74TgHnf3gxaUVH1ai6pg8jdNegKa',NULL,'jaggerjack403@gmail.com',0,'eyMK4Py9CKn1qb1GCiaAzDhDOFwWICPi_1697011023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(201,50,'sttb@mail.com','LbWNGRlX_eCQrYBFLyBR4-VTWaoIbdxw','$2y$13$mqfuT7XglOL8L.je6E9wdut.OOKuoRcdyaEE4o8gd5OTvZhQpMBUG',NULL,'sttb@mail.com',0,'D-lzqqPi19E89ls5yuUSTB_9aWwekndu_1725107577',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
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

-- Dump completed on 2025-01-06 16:27:55
