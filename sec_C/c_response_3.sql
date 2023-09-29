-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 05:49 PM
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
-- Table structure for table `c_response_3`
--

CREATE TABLE `c_response_3` (
  `id` int(11) NOT NULL,
  `P71` varchar(255) NOT NULL,
  `P72` varchar(255) NOT NULL,
  `P73` varchar(255) NOT NULL,
  `P81` varchar(255) NOT NULL,
  `P82` varchar(255) NOT NULL,
  `P83` varchar(255) NOT NULL,
  `P84` int(3) NOT NULL,
  `P85` varchar(255) NOT NULL,
  `P86` varchar(255) NOT NULL,
  `P87` varchar(255) NOT NULL,
  `P88` varchar(255) NOT NULL,
  `P89` varchar(255) NOT NULL,
  `P810` varchar(255) NOT NULL,
  `P91` varchar(255) NOT NULL,
  `P92` varchar(255) NOT NULL,
  `P93` varchar(255) NOT NULL,
  `P94` varchar(255) NOT NULL,
  `P95` varchar(255) NOT NULL,
  `P96` varchar(255) NOT NULL,
  `P97` varchar(255) NOT NULL,
  `P98` varchar(255) NOT NULL,
  `P99` varchar(255) NOT NULL,
  `P910` varchar(255) NOT NULL,
  `P911` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_response_3`
--
ALTER TABLE `c_response_3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c_response_3`
--
ALTER TABLE `c_response_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
