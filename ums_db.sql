-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 02, 2020 at 05:02 PM
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
-- Database: `ums_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `adminName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminPassword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminName`, `adminPassword`) VALUES
(1, 'Hassan Ismail', '12345'),
(2, 'talal maher', '123456'),
(3, 'mhana joumblat', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `classID` int(11) NOT NULL AUTO_INCREMENT,
  `teacherID` int(11) NOT NULL,
  `courseID` int(11) NOT NULL,
  `scheduleID` int(11) NOT NULL,
  `semesterID` int(11) NOT NULL,
  PRIMARY KEY (`classID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `courseID` int(10) NOT NULL AUTO_INCREMENT,
  `courseCode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `courseName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `courseCredit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`courseID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseID`, `courseCode`, `courseName`, `courseCredit`) VALUES
(1, 'CSC-101', 'Programming 1', '3'),
(2, 'CSC-201', 'Programming 2', '3');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

DROP TABLE IF EXISTS `semester`;
CREATE TABLE IF NOT EXISTS `semester` (
  `semsterID` int(10) NOT NULL AUTO_INCREMENT,
  `semsterYear` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `semsterSeason` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`semsterID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semsterID`, `semsterYear`, `semsterSeason`) VALUES
(5, '2019/2020', 'Spring'),
(4, '2019/2020', 'Fall'),
(3, '2018/2019 ', 'Summer'),
(2, '2018/2019 ', 'Spring'),
(1, '2018/2019 ', 'Fall');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `studensID` int(10) NOT NULL AUTO_INCREMENT,
  `studentName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `studentPassword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `studentEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`studensID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studensID`, `studentName`, `studentPassword`, `studentEmail`) VALUES
(1, 'hassan Ismail', '12345', 'hassan@park.com');

-- --------------------------------------------------------

--
-- Table structure for table `studentclass`
--

DROP TABLE IF EXISTS `studentclass`;
CREATE TABLE IF NOT EXISTS `studentclass` (
  `studentClassID` int(11) NOT NULL AUTO_INCREMENT,
  `classID` int(11) NOT NULL,
  `studentGrade` int(11) NOT NULL,
  `teacherID` int(11) NOT NULL,
  PRIMARY KEY (`studentClassID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `teacherID` int(10) NOT NULL AUTO_INCREMENT,
  `teacherName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacherPassword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacherEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`teacherID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherID`, `teacherName`, `teacherPassword`, `teacherEmail`) VALUES
(1, 'Adham park', '12345', 'adham@park.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
