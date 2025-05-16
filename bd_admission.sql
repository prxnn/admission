-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2025 at 02:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_name` varchar(100) DEFAULT NULL,
  `admin_role` enum('เจ้าหน้าที่','ผู้ดูแลระบบ') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_documents`
--

CREATE TABLE `tb_documents` (
  `doc_id` int(11) NOT NULL,
  `doc_student_id` int(11) DEFAULT NULL,
  `doc_type` varchar(100) DEFAULT NULL,
  `doc_file_path` varchar(255) DEFAULT NULL,
  `doc_uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_oldeducational`
--

CREATE TABLE `tb_oldeducational` (
  `oldsch_id` int(11) NOT NULL,
  `oldsch_student_id` int(11) DEFAULT NULL,
  `oldsch_school_name` varchar(150) DEFAULT NULL,
  `oldsch_grade_level_completed` varchar(50) DEFAULT NULL,
  `oldsch_gpa` decimal(3,2) DEFAULT NULL,
  `oldsch_year_completed` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_parents`
--

CREATE TABLE `tb_parents` (
  `parent_id` int(11) NOT NULL,
  `parent_student_id` int(11) DEFAULT NULL,
  `parent_name` varchar(100) DEFAULT NULL,
  `parent_relationship` varchar(50) DEFAULT NULL,
  `parent_phone_number` varchar(15) DEFAULT NULL,
  `parent_email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `sta_id` int(11) NOT NULL,
  `sta_student_id` int(11) DEFAULT NULL,
  `sta_status` enum('รอตรวจสอบ','ผ่าน','ไม่ผ่าน') DEFAULT NULL,
  `sta_note` text DEFAULT NULL,
  `sta_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_students`
--

CREATE TABLE `tb_students` (
  `student_id` int(11) NOT NULL,
  `stu_first_name` varchar(100) DEFAULT NULL,
  `stu_last_name` varchar(100) DEFAULT NULL,
  `stu_gender` enum('ชาย','หญิง','อื่นๆ') DEFAULT NULL,
  `stu_date_of_birth` date DEFAULT NULL,
  `stu_national_id` varchar(13) DEFAULT NULL,
  `stu_phone_number` varchar(15) DEFAULT NULL,
  `stu_email` varchar(100) DEFAULT NULL,
  `stu_address` text DEFAULT NULL,
  `stu_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_username` (`admin_username`);

--
-- Indexes for table `tb_documents`
--
ALTER TABLE `tb_documents`
  ADD PRIMARY KEY (`doc_id`),
  ADD KEY `doc_student_id` (`doc_student_id`);

--
-- Indexes for table `tb_oldeducational`
--
ALTER TABLE `tb_oldeducational`
  ADD PRIMARY KEY (`oldsch_id`),
  ADD KEY `oldsch_student_id` (`oldsch_student_id`);

--
-- Indexes for table `tb_parents`
--
ALTER TABLE `tb_parents`
  ADD PRIMARY KEY (`parent_id`),
  ADD KEY `parent_student_id` (`parent_student_id`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`sta_id`),
  ADD KEY `sta_student_id` (`sta_student_id`);

--
-- Indexes for table `tb_students`
--
ALTER TABLE `tb_students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `stu_national_id` (`stu_national_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_documents`
--
ALTER TABLE `tb_documents`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_oldeducational`
--
ALTER TABLE `tb_oldeducational`
  MODIFY `oldsch_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_parents`
--
ALTER TABLE `tb_parents`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `sta_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_students`
--
ALTER TABLE `tb_students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_documents`
--
ALTER TABLE `tb_documents`
  ADD CONSTRAINT `tb_documents_ibfk_1` FOREIGN KEY (`doc_student_id`) REFERENCES `tb_students` (`student_id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_oldeducational`
--
ALTER TABLE `tb_oldeducational`
  ADD CONSTRAINT `tb_oldeducational_ibfk_1` FOREIGN KEY (`oldsch_student_id`) REFERENCES `tb_students` (`student_id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_parents`
--
ALTER TABLE `tb_parents`
  ADD CONSTRAINT `parent_student_id` FOREIGN KEY (`parent_student_id`) REFERENCES `tb_students` (`student_id`);

--
-- Constraints for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD CONSTRAINT `tb_status_ibfk_1` FOREIGN KEY (`sta_student_id`) REFERENCES `tb_students` (`student_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
