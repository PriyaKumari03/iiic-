-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 10, 2023 at 06:57 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iiic`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_responses`
--

DROP TABLE IF EXISTS `b_responses`;
CREATE TABLE IF NOT EXISTS `b_responses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `policyQuestion` enum('Yes','No') NOT NULL,
  `policyLink` varchar(255) DEFAULT NULL,
  `procedureQuestion` enum('Yes','No') NOT NULL,
  `procedureLink` varchar(255) DEFAULT NULL,
  `valueChainQuestion` enum('Yes','No') NOT NULL,
  `valueChainLink` varchar(255) DEFAULT NULL,
  `standardsQuestion` text NOT NULL,
  `commitmentsQuestion` text NOT NULL,
  `performanceQuestion` text NOT NULL,
  `directorStatement` text NOT NULL,
  `achievementsFile` text,
  `authorityDetails` text NOT NULL,
  `sustainabilityCommitteeQuestion` enum('Yes','No') NOT NULL,
  `committeeDetails` text,
  `assessmentQuestion` enum('Yes','No') NOT NULL,
  `agencyDetails` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
