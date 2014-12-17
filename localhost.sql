-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2013 at 12:06 PM
-- Server version: 5.5.28
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `discuss`
--
CREATE DATABASE `discuss` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `discuss`;

-- --------------------------------------------------------

--
-- Table structure for table `harvardcourses`
--

CREATE TABLE IF NOT EXISTS `harvardcourses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `cat_num` varchar(16) DEFAULT NULL,
  `term` varchar(16) DEFAULT NULL,
  `number` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `unactivated_users`
--

CREATE TABLE IF NOT EXISTS `unactivated_users` (
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirmationcode` varchar(255) DEFAULT NULL,
  `registration_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unactivated_users`
--

INSERT INTO `unactivated_users` (`firstname`, `lastname`, `email`, `password`, `confirmationcode`, `registration_date`) VALUES
('Deep', 'Depinder', 'deep@harvard.edu', '$1$ngqsx4PU$vVdCVDfjZsLHpsX2d8NAL.', '677762d20f0def0010fdcafda1a62bc1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
--
-- Database: `oes`
--
CREATE DATABASE `oes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `oes`;

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `admname` varchar(32) NOT NULL,
  `admpassword` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`admname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`admname`, `admpassword`) VALUES
('root', '63a9f0ea7bb98050796b649e85481845');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `testid` bigint(20) NOT NULL DEFAULT '0',
  `qnid` int(11) NOT NULL DEFAULT '0',
  `question` varchar(500) DEFAULT NULL,
  `optiona` varchar(100) DEFAULT NULL,
  `optionb` varchar(100) DEFAULT NULL,
  `optionc` varchar(100) DEFAULT NULL,
  `optiond` varchar(100) DEFAULT NULL,
  `correctanswer` enum('optiona','optionb','optionc','optiond') DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  PRIMARY KEY (`testid`,`qnid`),
  KEY `idx_qnid` (`qnid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stdid` bigint(20) NOT NULL,
  `stdname` varchar(40) DEFAULT NULL,
  `stdpassword` varchar(40) DEFAULT NULL,
  `emailid` varchar(40) DEFAULT NULL,
  `contactno` varchar(20) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `pincode` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`stdid`),
  UNIQUE KEY `stdname` (`stdname`),
  UNIQUE KEY `emailid` (`emailid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stdid`, `stdname`, `stdpassword`, `emailid`, `contactno`, `address`, `city`, `pincode`) VALUES
(1, 'Deep', '"?2|g‰''', 'ghai64@gmail.com', '9592608056', '43B', 'Patiala', '147001');

-- --------------------------------------------------------

--
-- Table structure for table `studentquestion`
--

CREATE TABLE IF NOT EXISTS `studentquestion` (
  `stdid` bigint(20) NOT NULL DEFAULT '0',
  `testid` bigint(20) NOT NULL DEFAULT '0',
  `qnid` int(11) NOT NULL DEFAULT '0',
  `answered` enum('answered','unanswered','review') DEFAULT NULL,
  `stdanswer` enum('optiona','optionb','optionc','optiond') DEFAULT NULL,
  PRIMARY KEY (`stdid`,`testid`,`qnid`),
  KEY `testid` (`testid`,`qnid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studenttest`
--

CREATE TABLE IF NOT EXISTS `studenttest` (
  `stdid` bigint(20) NOT NULL DEFAULT '0',
  `testid` bigint(20) NOT NULL DEFAULT '0',
  `starttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `endtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `correctlyanswered` int(11) DEFAULT NULL,
  `status` enum('over','inprogress') DEFAULT NULL,
  PRIMARY KEY (`stdid`,`testid`),
  KEY `testid` (`testid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subid` int(11) NOT NULL,
  `subname` varchar(40) DEFAULT NULL,
  `subdesc` varchar(100) DEFAULT NULL,
  `tcid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`subid`),
  UNIQUE KEY `subname` (`subname`),
  KEY `subject_fk1` (`tcid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `testid` bigint(20) NOT NULL,
  `testname` varchar(30) NOT NULL,
  `testdesc` varchar(100) DEFAULT NULL,
  `testdate` date DEFAULT NULL,
  `testtime` time DEFAULT NULL,
  `subid` int(11) DEFAULT NULL,
  `testfrom` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `testto` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `duration` int(11) DEFAULT NULL,
  `totalquestions` int(11) DEFAULT NULL,
  `attemptedstudents` bigint(20) DEFAULT NULL,
  `testcode` varchar(40) NOT NULL,
  `tcid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`testid`),
  UNIQUE KEY `testname` (`testname`),
  KEY `test_fk1` (`subid`),
  KEY `test_fk2` (`tcid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testconductor`
--

CREATE TABLE IF NOT EXISTS `testconductor` (
  `tcid` bigint(20) NOT NULL,
  `tcname` varchar(40) DEFAULT NULL,
  `tcpassword` varchar(40) DEFAULT NULL,
  `emailid` varchar(40) DEFAULT NULL,
  `contactno` varchar(20) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `pincode` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`tcid`),
  UNIQUE KEY `stdname` (`tcname`),
  UNIQUE KEY `emailid` (`emailid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`testid`) REFERENCES `test` (`testid`);

--
-- Constraints for table `studentquestion`
--
ALTER TABLE `studentquestion`
  ADD CONSTRAINT `studentquestion_ibfk_1` FOREIGN KEY (`stdid`) REFERENCES `student` (`stdid`),
  ADD CONSTRAINT `studentquestion_ibfk_2` FOREIGN KEY (`testid`, `qnid`) REFERENCES `question` (`testid`, `qnid`);

--
-- Constraints for table `studenttest`
--
ALTER TABLE `studenttest`
  ADD CONSTRAINT `studenttest_ibfk_1` FOREIGN KEY (`stdid`) REFERENCES `student` (`stdid`),
  ADD CONSTRAINT `studenttest_ibfk_2` FOREIGN KEY (`testid`) REFERENCES `test` (`testid`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_fk1` FOREIGN KEY (`tcid`) REFERENCES `testconductor` (`tcid`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_fk1` FOREIGN KEY (`subid`) REFERENCES `subject` (`subid`),
  ADD CONSTRAINT `test_fk2` FOREIGN KEY (`tcid`) REFERENCES `testconductor` (`tcid`);
--
-- Database: `pset7`
--
CREATE DATABASE `pset7` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pset7`;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(11) NOT NULL,
  `transaction` varchar(7) NOT NULL,
  `symbol` varchar(15) NOT NULL,
  `shares` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(10) NOT NULL,
  `symbol` varchar(50) NOT NULL,
  `shares` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `cash` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `hash`, `cash`) VALUES
(1, 'caesar', '$1$50$GHABNWBNE/o4VL7QjmQ6x0', 1000),
(2, 'cs50', '$1$50$ceNa7BV5AoVQqilACNLuC1', 1000),
(3, 'jharvard', '$1$50$RX3wnAMNrGIbgzbRYrxM1/', 3715.97),
(4, 'malan', '$1$HA$azTGIMVlmPi9W9Y12cYSj/', 1000),
(5, 'nate', '$1$50$sUyTaTbiSKVPZCpjJckan0', 1000),
(6, 'rbowden', '$1$50$lJS9HiGK6sphej8c4bnbX.', 1000),
(7, 'skroob', '$1$50$euBi4ugiJmbpIbvTTfmfI.', 1000),
(8, 'tmacwilliam', '$1$50$91ya4AroFPepdLpiX.bdP1', 1000),
(9, 'zamyla', '$1$50$Suq.MOtQj51maavfKvFsW1', 1000),
(10, 'Billu', '$1$B6AQWS5Y$5ZE8kd5fQBEIXPFNoqlu60', 1000),
(11, 'Parneet', '$1$rDiCadzg$KyA4bHBv5A/8RhKfiD5lm1', 10690);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
