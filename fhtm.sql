-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 05, 2020 at 04:52 PM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fhtm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(10) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `course_credit` int(4) NOT NULL,
  `course_code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `schedule_id` int(10) NOT NULL AUTO_INCREMENT,
  `schedule_code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `schedule_date` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `schedule_time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

DROP TABLE IF EXISTS `semester`;
CREATE TABLE IF NOT EXISTS `semester` (
  `semester_id` int(10) NOT NULL AUTO_INCREMENT,
  `semester_description` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`semester_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(10) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `student_email` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `student_phn` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `student_major` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `student_password` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student portal`
--

DROP TABLE IF EXISTS `student portal`;
CREATE TABLE IF NOT EXISTS `student portal` (
  `studentportal_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`studentportal_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `phn` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `faculty` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
