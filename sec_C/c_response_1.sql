-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 05:48 PM
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
-- Table structure for table `c_response_1`
--

CREATE TABLE `c_response_1` (
  `id` int(11) NOT NULL,
  `coverage` int(3) NOT NULL,
  `details` varchar(255) NOT NULL,
  `appeal` varchar(255) NOT NULL,
  `antiCorruptionPolicy` varchar(255) NOT NULL,
  `disciplinaryAction` int(5) NOT NULL,
  `conflictComplaints` varchar(255) NOT NULL,
  `correctiveAction` varchar(255) NOT NULL,
  `awarenessProgrammes` varchar(255) NOT NULL,
  `conflictInterest` varchar(10) NOT NULL,
  `conflictDetails` varchar(255) DEFAULT NULL,
  `rdPercentage` int(3) NOT NULL,
  `sourcing2` varchar(10) NOT NULL,
  `sourcingPercentage2` int(3) DEFAULT NULL,
  `reclaimProcesses2` varchar(255) NOT NULL,
  `epr` varchar(10) NOT NULL,
  `eprCollectionPlan` varchar(255) DEFAULT NULL,
  `lcaConducted2` varchar(10) NOT NULL,
  `lcaDetails2` varchar(255) DEFAULT NULL,
  `concernsMitigation2` varchar(255) NOT NULL,
  `recycledPercentage2` int(3) NOT NULL,
  `reclaimedProducts2` varchar(255) NOT NULL,
  `reclaimedPercentages2` varchar(255) NOT NULL,
  `P31` varchar(255) NOT NULL,
  `P32` varchar(255) NOT NULL,
  `P33_choice` varchar(10) NOT NULL,
  `P33` varchar(255) DEFAULT NULL,
  `P34` varchar(255) NOT NULL,
  `P35` varchar(255) NOT NULL,
  `P36` varchar(255) NOT NULL,
  `P37` int(3) NOT NULL,
  `P38` varchar(255) NOT NULL,
  `P39` varchar(255) NOT NULL,
  `P310` varchar(10) DEFAULT NULL,
  `P311` varchar(255) NOT NULL,
  `P312` varchar(10) NOT NULL,
  `P313` varchar(255) NOT NULL,
  `P314` varchar(255) NOT NULL,
  `P315` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_response_1`
--
ALTER TABLE `c_response_1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c_response_1`
--
ALTER TABLE `c_response_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
