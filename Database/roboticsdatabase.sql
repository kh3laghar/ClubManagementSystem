-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2015 at 04:54 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `roboticsdatabase`
--
CREATE DATABASE IF NOT EXISTS `roboticsdatabase` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `roboticsdatabase`;

-- --------------------------------------------------------

--
-- Table structure for table `brac_dept`
--
-- Creation: Sep 05, 2015 at 02:26 PM
--

DROP TABLE IF EXISTS `brac_dept`;
CREATE TABLE IF NOT EXISTS `brac_dept` (
  `bdept_id` int(15) NOT NULL,
  `Depertment_name` varchar(255) NOT NULL,
  PRIMARY KEY (`bdept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brac_dept`
--

INSERT INTO `brac_dept` (`bdept_id`, `Depertment_name`) VALUES
(1, 'CSE'),
(21, 'EEE\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `post_descriptin`
--
-- Creation: Sep 05, 2015 at 02:17 PM
--

DROP TABLE IF EXISTS `post_descriptin`;
CREATE TABLE IF NOT EXISTS `post_descriptin` (
  `Post_id` int(15) NOT NULL,
  `Post_name` varchar(255) NOT NULL,
  PRIMARY KEY (`Post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_descriptin`
--

INSERT INTO `post_descriptin` (`Post_id`, `Post_name`) VALUES
(1, 'PRESIDENT'),
(2, 'DIRECTOR'),
(3, 'ASSISTANT DIRECTOR\r\n'),
(4, 'SENIOR EXECUTIVE'),
(5, 'JUNIOR EXECUTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `project description`
--
-- Creation: Sep 05, 2015 at 02:19 PM
--

DROP TABLE IF EXISTS `project description`;
CREATE TABLE IF NOT EXISTS `project description` (
  `proj_id` varchar(255) NOT NULL,
  `std_id` int(15) NOT NULL,
  `P_Name` varchar(255) NOT NULL,
  `Proj_desc` varchar(255) NOT NULL,
  `Proj_Destination` varchar(255) NOT NULL,
  `Current_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`proj_id`),
  KEY `std_id` (`std_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `project description`:
--   `proj_id`
--       `project description` -> `proj_id`
--   `std_id`
--       `student_info` -> `std_id`
--

--
-- Dumping data for table `project description`
--

INSERT INTO `project description` (`proj_id`, `std_id`, `P_Name`, `Proj_desc`, `Proj_Destination`, `Current_status`) VALUES
('', 12201022, '', '', '', 0),
('MARS_2015_15', 12201011, 'MARS ROVER CHALANGE', 'MARS ROVER', 'USA', 0);

-- --------------------------------------------------------

--
-- Table structure for table `robu_dept`
--
-- Creation: Sep 05, 2015 at 02:20 PM
--

DROP TABLE IF EXISTS `robu_dept`;
CREATE TABLE IF NOT EXISTS `robu_dept` (
  `rdept_id` int(15) NOT NULL,
  `rdept_name` varchar(255) NOT NULL,
  PRIMARY KEY (`rdept_id`),
  KEY `rdept_id` (`rdept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `robu_dept`
--

INSERT INTO `robu_dept` (`rdept_id`, `rdept_name`) VALUES
(1, 'FINANCE'),
(2, 'HR'),
(3, 'EVENT MANAGEMENT'),
(4, 'LOGISTIC SUPPORT'),
(5, 'WRITING AND PUBLICATION'),
(6, 'RESEARCH & DEVELOPMENT\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--
-- Creation: Sep 05, 2015 at 02:16 PM
--

DROP TABLE IF EXISTS `student_info`;
CREATE TABLE IF NOT EXISTS `student_info` (
  `std_id` int(15) NOT NULL COMMENT 'STUDENT ID OF BRAC UNIVERSITY',
  `bdept_id` int(15) NOT NULL COMMENT 'Department Id of BRAC UNIVERSITY',
  `rdept_id` int(15) NOT NULL COMMENT 'DEPARTMENT ID OF ROBOTICS CLUB',
  `Post_id` int(15) NOT NULL,
  `Skill` varchar(255) NOT NULL,
  `Interest` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  PRIMARY KEY (`std_id`),
  KEY `bdept_id` (`bdept_id`),
  KEY `post_id` (`Post_id`),
  KEY `rdept_id` (`rdept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `student_info`:
--   `Post_id`
--       `post_descriptin` -> `Post_id`
--   `rdept_id`
--       `robu_dept` -> `rdept_id`
--   `bdept_id`
--       `brac_dept` -> `bdept_id`
--

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`std_id`, `bdept_id`, `rdept_id`, `Post_id`, `Skill`, `Interest`, `Name`, `phone`) VALUES
(12201011, 1, 1, 3, 'ABRAKA DABRA', 'YOU BETTER RESEARCH ON ME ', 'MD. ASIFUL HAQUE', 1717887196),
(12201022, 1, 4, 1, 'BUSTY', 'BUSTY', 'ABIR MOHAMMAD BHUIYAN', 1915601505);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project description`
--
ALTER TABLE `project description`
  ADD CONSTRAINT `SET_PROJECT` FOREIGN KEY (`std_id`) REFERENCES `student_info` (`std_id`);

--
-- Constraints for table `student_info`
--
ALTER TABLE `student_info`
  ADD CONSTRAINT `DELETE` FOREIGN KEY (`Post_id`) REFERENCES `post_descriptin` (`Post_id`),
  ADD CONSTRAINT `SET` FOREIGN KEY (`bdept_id`) REFERENCES `brac_dept` (`bdept_id`),
  ADD CONSTRAINT `UPDATE` FOREIGN KEY (`rdept_id`) REFERENCES `robu_dept` (`rdept_id`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
