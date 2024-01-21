-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2024 at 01:26 PM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crus`
--

-- --------------------------------------------------------

--
-- Table structure for table `section_b_form`
--

DROP TABLE IF EXISTS `section_b_form`;
CREATE TABLE IF NOT EXISTS `section_b_form` (
  `cin` varchar(21) NOT NULL,
  `dew` text,
  `stmtdir` text,
  `dthi` text,
  `enspec` text,
  `dew_comments` text NOT NULL,
  `gre` text,
  `gre_comments` text NOT NULL,
  `question11` text,
  `question11_comments` text NOT NULL,
  `question12` text,
  `question12_comments` text NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
