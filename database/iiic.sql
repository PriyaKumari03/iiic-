-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 03:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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
-- Table structure for table `section_a_form`
--

CREATE TABLE `section_a_form` (
  `cin`varchar(21) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `office_address` text DEFAULT NULL,
  `corporate_address` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `reporting_fin_year` int(11) DEFAULT NULL,
  `incorporation_certificate` text DEFAULT NULL,
  `name_stock` varchar(255) DEFAULT NULL,
  `puc` varchar(255) DEFAULT NULL,
  `poc_name` varchar(255) DEFAULT NULL,
  `poc_phone` varchar(20) DEFAULT NULL,
  `poc_email` varchar(255) DEFAULT NULL,
  `rep_b` varchar(255) DEFAULT NULL,
  `doba` date DEFAULT NULL,
  `dops` date DEFAULT NULL,
  `nol` int(11) DEFAULT NULL,
  `drm` varchar(255) DEFAULT NULL,
  `tote` varchar(255) DEFAULT NULL,
  `male` int(11) DEFAULT NULL,
  `female` int(11) DEFAULT NULL,
  `malet` int(11) DEFAULT NULL,
  `femalet` int(11) DEFAULT NULL,
  `p_no` int(11) DEFAULT NULL,
  `tor` varchar(255) DEFAULT NULL,
  `holding` varchar(255) DEFAULT NULL,
  `subsidiary` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `csr` varchar(255) DEFAULT NULL,
  `gre` varchar(255) DEFAULT NULL,
  `overview` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- Indexes for table `section_b_form`
--
ALTER TABLE `section_a_form`
  ADD PRIMARY KEY (`cin`);
--
-- AUTO_INCREMENT for dumped tables
--

-- --------------------------------------------------------

--
-- Table structure for table `section_b_form`
--

CREATE TABLE `section_b_form` (
  `id` int(11) NOT NULL,
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
  `achievementsFile` text DEFAULT NULL,
  `authorityDetails` text NOT NULL,
  `sustainabilityCommitteeQuestion` enum('Yes','No') NOT NULL,
  `committeeDetails` text DEFAULT NULL,
  `assessmentQuestion` enum('Yes','No') NOT NULL,
  `agencyDetails` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `section_b_form`
--
ALTER TABLE `section_b_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `section_b_form`
--
ALTER TABLE `section_b_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
