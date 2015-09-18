-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2015 at 02:52 AM
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
  PRIMARY KEY (`bdept_id`),
  KEY `Depertment_name` (`Depertment_name`)
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
  `holder_name` varchar(255) NOT NULL,
  PRIMARY KEY (`Post_id`),
  KEY `Post_name` (`Post_name`),
  KEY `Post_name_2` (`Post_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_descriptin`
--

INSERT INTO `post_descriptin` (`Post_id`, `Post_name`, `holder_name`) VALUES
(1, 'PRESIDENT', 'B.M Abir'),
(2, 'DIRECTOR', ''),
(3, 'ASSISTANT DIRECTOR\r\n', ''),
(4, 'SENIOR EXECUTIVE', ''),
(5, 'JUNIOR EXECUTIVE', '');

-- --------------------------------------------------------

--
-- Table structure for table `project description`
--
-- Creation: Sep 05, 2015 at 02:19 PM
--

DROP TABLE IF EXISTS `project description`;
CREATE TABLE IF NOT EXISTS `project description` (
  `proj_id` int(15) NOT NULL AUTO_INCREMENT,
  `P_Name` varchar(255) NOT NULL,
  `Proj_desc` varchar(255) NOT NULL,
  `Proj_Destination` varchar(255) NOT NULL,
  `Current_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`proj_id`),
  UNIQUE KEY `P_Name` (`P_Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2015105 ;

--
-- Dumping data for table `project description`
--

INSERT INTO `project description` (`proj_id`, `P_Name`, `Proj_desc`, `Proj_Destination`, `Current_status`) VALUES
(201501, 'MARS_ROVER_2015', 'Complete the challenge by Mars Rover', 'USA', 1),
(201502, 'DOOR LOCK SYSTEM', 'COMPLETE THE DOOR LOCK BASED ON LIGHT SYSTEM', 'DHAKA', 0),
(201503, 'ALARM SYSTEM', 'ALARM SYSTEM BASED ON SONAR ', 'GULSHAN', 1),
(201504, 'SOLAR CAR', 'SOLAR ENERGY BASED CAR', 'ICT EXPO', 1),
(201505, 'LINE FOLLOWER', 'FOLLOW LINE BASED ON IR ', 'PATH_FINDER', 1),
(201506, 'dsfajhssj', 'EDFHASJDK', 'ADFHAK', 0),
(201507, 'DASFASDF', 'DFASDFG', 'FDGFSADG', 0),
(201508, 'EDRFDSF', 'ADSFASDF', 'ADSFAD', 0),
(201509, 'FGHSERYWRETY', 'SDFHSDFGJHS', 'HJSGTJS', 0),
(201510, 'STHJSTGJWSJSTGJH', 'SGJSGJSJ', 'SDGTJSFJGTS', 0),
(2015023, 'DOORDSD LOCK SYSTEM', 'COMPLETE THE DOOR LOCK BASED ON LIGHT SYSTEM', 'DHAKA', 0),
(2015032, 'ALARMSDS SYSTEM', 'ALARM SYSTEM BASED ON SONAR ', 'GULSHAN', 1),
(2015042, 'SOLAR DSDCAR', 'SOLAR ENERGY BASED CAR', 'ICT EXPO', 1),
(2015046, 'MARSDS_ROVER_2015', 'Complete the challenge by Mars Rover', 'USA', 1),
(2015053, 'LINE SDSFOLLOWER', 'FOLLOW LINE BASED ON IR ', 'PATH_FINDER', 1),
(2015066, 'dsfajSDShssj', 'EDFHASJDK', 'ADFHAK', 0),
(2015078, 'DASFADSDSDF', 'DFASDFG', 'FDGFSADG', 0),
(2015085, 'EDRFDDSDSF', 'ADSFASDF', 'ADSFAD', 0),
(2015095, 'FGHSEDSRYWRETY', 'SDFHSDFGJHS', 'HJSGTJS', 0),
(2015104, 'STHJDSDSTGJWSJSTGJH', 'SGJSGJSJ', 'SDGTJSFJGTS', 0);

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
  `Director` varchar(255) NOT NULL,
  `Asst. Director` varchar(255) DEFAULT NULL,
  `Executive_1` varchar(255) DEFAULT NULL,
  `Executive_2` varchar(255) DEFAULT NULL,
  `Executive_3` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`rdept_id`),
  KEY `rdept_id` (`rdept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `robu_dept`
--

INSERT INTO `robu_dept` (`rdept_id`, `rdept_name`, `Director`, `Asst. Director`, `Executive_1`, `Executive_2`, `Executive_3`) VALUES
(1, 'FINANCE', 'Md. Asiful Haque', 'Arpa Khandakar', 'adf', 'sdaf', 'sfd'),
(2, 'HR', '', '', '', '', ''),
(3, 'EVENT MANAGEMENT', 'Tausiful Alam Dipto ', 'Ashraf Shiraji', 'Sumon', 'Rummon', 'asd'),
(4, 'LOGISTIC SUPPORT', '', '', '', '', ''),
(5, 'WRITING AND PUBLICATION', '', '', '', '', ''),
(6, 'RESEARCH & DEVELOPMENT\r\n\r\n', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--
-- Creation: Sep 05, 2015 at 02:16 PM
--

DROP TABLE IF EXISTS `student_info`;
CREATE TABLE IF NOT EXISTS `student_info` (
  `std_id` int(15) NOT NULL COMMENT 'STUDENT ID OF BRAC UNIVERSITY',
  `Name` varchar(255) NOT NULL,
  `bdept_id` int(15) NOT NULL COMMENT 'Department Id of BRAC UNIVERSITY',
  `rdept_id` int(15) NOT NULL COMMENT 'DEPARTMENT ID OF ROBOTICS CLUB',
  `Post_id` int(15) NOT NULL,
  `pRoj_id` int(15) NOT NULL,
  `Skill` varchar(255) NOT NULL,
  `Interest` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  PRIMARY KEY (`std_id`),
  KEY `bdept_id` (`bdept_id`),
  KEY `post_id` (`Post_id`),
  KEY `rdept_id` (`rdept_id`),
  KEY `poj_id` (`pRoj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `student_info`:
--   `Post_id`
--       `post_descriptin` -> `Post_id`
--   `rdept_id`
--       `robu_dept` -> `rdept_id`
--   `bdept_id`
--       `brac_dept` -> `bdept_id`
--   `pRoj_id`
--       `project description` -> `proj_id`
--

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`std_id`, `Name`, `bdept_id`, `rdept_id`, `Post_id`, `pRoj_id`, `Skill`, `Interest`, `phone`) VALUES
(12201011, 'Md. Asiful Haque', 1, 1, 3, 201501, 'Finance Handling ', 'Communication', 1818560890),
(12201022, 'BM Abir', 1, 3, 1, 201501, 'Arduino ', 'Hardware', 1915601505);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--
-- Creation: Sep 10, 2015 at 09:36 PM
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_lvl` int(2) NOT NULL,
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `password`, `user_lvl`, `user_id`) VALUES
('kh3laghar', '104607', 1, 1),
('anantoalive@gmail.com', '12201022', 1, 2),
('root', '104607', 1, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_info`
--
ALTER TABLE `student_info`
  ADD CONSTRAINT `DELETE` FOREIGN KEY (`Post_id`) REFERENCES `post_descriptin` (`Post_id`),
  ADD CONSTRAINT `SET` FOREIGN KEY (`bdept_id`) REFERENCES `brac_dept` (`bdept_id`),
  ADD CONSTRAINT `SET_PROJECTONE` FOREIGN KEY (`pRoj_id`) REFERENCES `project description` (`proj_id`),
  ADD CONSTRAINT `UPDATE` FOREIGN KEY (`rdept_id`) REFERENCES `robu_dept` (`rdept_id`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
