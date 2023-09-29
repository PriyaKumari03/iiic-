-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 04:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
-- Table structure for table `c_response_2`
--

CREATE TABLE `c_response_2` (
  `id` int(11) NOT NULL,
  `conflictDetails` varchar(255) NOT NULL,
  `concernsMitigation` varchar(255) NOT NULL,
  `lcaDetails` varchar(255) NOT NULL,
  `sourcing` varchar(10) NOT NULL,
  `sourcingPercentage` varchar(255) DEFAULT NULL,
  `engagement` varchar(255) NOT NULL,
  `reclaimedProducts` varchar(255) NOT NULL,
  `reclaimedPercentages` varchar(255) NOT NULL,
  `P51` varchar(255) NOT NULL,
  `P52` varchar(255) NOT NULL,
  `P53` varchar(255) NOT NULL,
  `P54` varchar(10) NOT NULL,
  `P55` varchar(255) NOT NULL,
  `P56` varchar(255) NOT NULL,
  `P57` varchar(255) NOT NULL,
  `P58` varchar(10) NOT NULL,
  `P59` int(3) NOT NULL,
  `P510` varchar(255) NOT NULL,
  `P511` varchar(255) NOT NULL,
  `P512` varchar(255) NOT NULL,
  `P513` varchar(10) NOT NULL,
  `P514` int(3) NOT NULL,
  `P515` varchar(255) NOT NULL,
  `P61` varchar(255) NOT NULL,
  `P62` varchar(255) NOT NULL,
  `P63` varchar(255) NOT NULL,
  `P64` varchar(255) NOT NULL,
  `P65` varchar(255) NOT NULL,
  `P66` varchar(255) NOT NULL,
  `P67` varchar(255) NOT NULL,
  `P68` varchar(255) NOT NULL,
  `P69` varchar(255) NOT NULL,
  `P610` varchar(255) NOT NULL,
  `P611` varchar(255) NOT NULL,
  `P612` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `c_response_2`
--

INSERT INTO `c_response_2` (`id`, `conflictDetails`, `concernsMitigation`, `lcaDetails`, `sourcing`, `sourcingPercentage`, `engagement`, `reclaimedProducts`, `reclaimedPercentages`, `P51`, `P52`, `P53`, `P54`, `P55`, `P56`, `P57`, `P58`, `P59`, `P510`, `P511`, `P512`, `P513`, `P514`, `P515`, `P61`, `P62`, `P63`, `P64`, `P65`, `P66`, `P67`, `P68`, `P69`, `P610`, `P611`, `P612`) VALUES
(1, 'a', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_response_2`
--
ALTER TABLE `c_response_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c_response_2`
--
ALTER TABLE `c_response_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
