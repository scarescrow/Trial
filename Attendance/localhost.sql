-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2013 at 08:40 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attendance`
--
CREATE DATABASE IF NOT EXISTS `attendance` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `attendance`;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `S.No` int(11) NOT NULL AUTO_INCREMENT,
  `Subject` varchar(30) NOT NULL,
  `Present` int(11) NOT NULL DEFAULT '0',
  `Absent` int(11) NOT NULL DEFAULT '0',
  `Total` varchar(11) NOT NULL DEFAULT '0',
  `Percentage` float NOT NULL,
  PRIMARY KEY (`S.No`),
  UNIQUE KEY `S.No` (`S.No`),
  KEY `Subject` (`Subject`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`S.No`, `Subject`, `Present`, `Absent`, `Total`, `Percentage`) VALUES
(1, 'MA', 7, 6, '7/13', 53.8462),
(2, 'OR', 8, 6, '8/14', 57.1429),
(3, 'FE', 11, 3, '11/14', 78.5714),
(4, 'INS', 5, 2, '5/7', 71.4286),
(5, 'DBMS', 6, 2, '6/8', 75),
(6, 'DBMS-LAB', 2, 1, '2/3', 66.6667),
(7, 'OR-LAB', 2, 0, '2/2', 100),
(8, 'INS-LAB', 0, 0, '0', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
