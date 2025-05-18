-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: db_admission
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

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
-- Table structure for table `tb_admin`
--

DROP TABLE IF EXISTS `tb_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(50) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_name` varchar(100) DEFAULT NULL,
  `admin_role` enum('เจ้าหน้าที่','ผู้ดูแลระบบ') DEFAULT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_username` (`admin_username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_admin`
--

LOCK TABLES `tb_admin` WRITE;
/*!40000 ALTER TABLE `tb_admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_documents`
--

DROP TABLE IF EXISTS `tb_documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_documents` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_student_id` int(11) DEFAULT NULL,
  `doc_name` varchar(100) DEFAULT NULL,
  `doc_file_path` varchar(255) DEFAULT NULL,
  `doc_uploaded_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`doc_id`),
  KEY `doc_student_id` (`doc_student_id`),
  CONSTRAINT `tb_documents_ibfk_1` FOREIGN KEY (`doc_student_id`) REFERENCES `tb_students` (`student_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_documents`
--

LOCK TABLES `tb_documents` WRITE;
/*!40000 ALTER TABLE `tb_documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_oldeducational`
--

DROP TABLE IF EXISTS `tb_oldeducational`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_oldeducational` (
  `oldsch_id` int(11) NOT NULL AUTO_INCREMENT,
  `oldsch_student_id` int(11) DEFAULT NULL,
  `oldsch_school_name` varchar(150) DEFAULT NULL,
  `oldsch_grade_level_completed` varchar(50) DEFAULT NULL,
  `oldsch_gpa` decimal(3,2) DEFAULT NULL,
  `oldsch_year_completed` year(4) DEFAULT NULL,
  PRIMARY KEY (`oldsch_id`),
  KEY `oldsch_student_id` (`oldsch_student_id`),
  CONSTRAINT `tb_oldeducational_ibfk_1` FOREIGN KEY (`oldsch_student_id`) REFERENCES `tb_students` (`student_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_oldeducational`
--

LOCK TABLES `tb_oldeducational` WRITE;
/*!40000 ALTER TABLE `tb_oldeducational` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_oldeducational` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_parents`
--

DROP TABLE IF EXISTS `tb_parents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_parents` (
  `parent_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_student_id` int(11) DEFAULT NULL,
  `parent_name` varchar(100) DEFAULT NULL,
  `parent_relationship` varchar(50) DEFAULT NULL,
  `parent_phone_number` varchar(15) DEFAULT NULL,
  `parent_email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`parent_id`),
  KEY `parent_student_id` (`parent_student_id`),
  CONSTRAINT `parent_student_id` FOREIGN KEY (`parent_student_id`) REFERENCES `tb_students` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_parents`
--

LOCK TABLES `tb_parents` WRITE;
/*!40000 ALTER TABLE `tb_parents` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_parents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_status`
--

DROP TABLE IF EXISTS `tb_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_status` (
  `sta_id` int(11) NOT NULL AUTO_INCREMENT,
  `sta_student_id` int(11) DEFAULT NULL,
  `sta_status` enum('รอตรวจสอบ','ผ่าน','ไม่ผ่าน') DEFAULT NULL,
  `sta_note` text DEFAULT NULL,
  `sta_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`sta_id`),
  KEY `sta_student_id` (`sta_student_id`),
  CONSTRAINT `tb_status_ibfk_1` FOREIGN KEY (`sta_student_id`) REFERENCES `tb_students` (`student_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_status`
--

LOCK TABLES `tb_status` WRITE;
/*!40000 ALTER TABLE `tb_status` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_students`
--

DROP TABLE IF EXISTS `tb_students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_sex` varchar(30) NOT NULL COMMENT 'คำนำหน้า',
  `stu_first_name` varchar(100) DEFAULT NULL,
  `stu_last_name` varchar(100) DEFAULT NULL,
  `stu_gender` text NOT NULL,
  `stu_date_of_birth` date DEFAULT NULL,
  `stu_national_id` varchar(13) DEFAULT NULL,
  `stu_class` text NOT NULL,
  `stu_phone_number` varchar(15) DEFAULT NULL,
  `stu_email` varchar(100) DEFAULT NULL,
  `stu_address` text DEFAULT NULL,
  `stu_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `stu_national_id` (`stu_national_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_students`
--

LOCK TABLES `tb_students` WRITE;
/*!40000 ALTER TABLE `tb_students` DISABLE KEYS */;
INSERT INTO `tb_students` VALUES (1,'นางสาว','พรพรรณ์','นิลารัตน์','หญิง','0000-00-00','1234567891011','','0123456789','123456789132456789','13456789@gmail.com','2025-05-18 12:01:57'),(3,'นางสาว','กิตติมา','สนิทผล','2025-05-18','0000-00-00','0123456789032','มัธยม','789456123','0123456789765415','789456@gmail.com','2025-05-18 12:36:22');
/*!40000 ALTER TABLE `tb_students` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-05-18 20:47:19
