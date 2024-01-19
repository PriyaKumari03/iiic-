-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 19, 2024 at 02:14 PM
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
-- Database: `crus`
--

-- --------------------------------------------------------

--
-- Table structure for table `section_a_form`
--

DROP TABLE IF EXISTS `section_a_form`;
CREATE TABLE IF NOT EXISTS `section_a_form` (
  `cin` varchar(21) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `incorp_date` int DEFAULT NULL,
  `office_address` text,
  `corporate_address` text,
  `email` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `telephone` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `website` varchar(255) DEFAULT NULL,
  `reporting_fin_year` text,
  `incorporation_certificate` text,
  `stock_name` varchar(255) DEFAULT NULL,
  `puc` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `poc_name` varchar(255) DEFAULT NULL,
  `poc_phone` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `poc_email` varchar(255) DEFAULT NULL,
  `rep_b` varchar(255) DEFAULT NULL,
  `doba` text,
  `dops` text,
  `nol` text,
  `drm` text,
  `drm_contribution_export` text,
  `drm_types_customers` text,
  `dew` text,
  `dewda` text,
  `pirw` text,
  `torpew` text,
  `holding` text,
  `csr_act` text,
  `csr_turnover` text,
  `csr_networth` text,
  `gre` text,
  `overview` text,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `section_a_form`
--

INSERT INTO `section_a_form` (`cin`, `name`, `incorp_date`, `office_address`, `corporate_address`, `email`, `telephone`, `website`, `reporting_fin_year`, `incorporation_certificate`, `stock_name`, `puc`, `poc_name`, `poc_phone`, `poc_email`, `rep_b`, `doba`, `dops`, `nol`, `drm`, `drm_contribution_export`, `drm_types_customers`, `dew`, `dewda`, `pirw`, `torpew`, `holding`, `csr_act`, `csr_turnover`, `csr_networth`, `gre`, `overview`) VALUES
('L28920MH1945PLC004520', 'Tata Motors Limited', 1945, 'Bombay House, 24, Homi Mody Street,  Mumbai, Maharashtra- 400001, India', 'Bombay House, 24, Homi Mody Street,  Mumbai, Maharashtra- 400001, India', 'inv_rel@tatamotors.com, ', '+91 22 66658282, ', 'https://www.tatamotors.com/', 'FY 2022-23', '../uploads/sec_A/659e2425acb77_Tata Motors BRSR Report.pdf', 'BSE, NSE', ' 766 crores', 'Mr. Jyotindran Sastabhavan Kutty - Chief Sustainability Officer', '+91 20 6613 2781 ', 'kutty@tatamotors.com', 'Report is done on a standalone basis', '1, Automobile Manufacturing, Motor Vehicles, Trailers, Semi Trailers, and other transport vehicles, 84.55%', '1, Vehicles, 291, 292, 293, 84.55, 2, Spare parts , 453, 11.11', '7, 31, 38, 0, 2, 2', 'Pan-India, , 125', '4.58%', 'The Companies Commercial Vehicles (\'CV\') caters to a diverse range of customers with varying needs and \r\nrequirements. Customers include - fleet owners, transporters, government agencies, small and medium \r\nenterprises (SMEs), agriculture and rural segment, construction industry etc.', '8901, 8290, 93.14, 611, 6.86, 360, 288, 80.00, 72, 20.00, 9261, 8578, 92.62, 683, 7.38, 11876, 11656, 98.15, 220, 1.85, 16964, 14957, 88.17, 2007, 11.83, 28840, 26613, 92.28, 2227, 7.72', '12, 12, 100.00, 0, 0.00, 0, 0, 0, 0, 0, 12, 12, 100.00, 0, 0.00, 56, 56, 100.00, 0, 0.00, 0, 0, 0, 0, 0, 56, 56, 100.00, 0, 0.00', '9, 2, 22.22, 2, 0, 0.00', '6.90, 16.90, 7.91, 7.50, 21.40, 8.44, 6.50, 10.40, 6.78, .20, 0.50, 2.22, 0.50, 0.50, 0.50, 3.90, 1.00, 3.78', '1, The Company has 88 subsidiaries (15 direct and 73 indirect), 11 associate companies, 4 joint ventures and 2 joint  operations as at March 31, 2023, as disclosed in the Integrated Annual Report of FY 2022-23.  The Company positively influences and encourages its subsidiaries to adopt business responsibility initiatives. All  the Company’s subsidiaries are guided by Tata Code of Conduct (\'TCoC\') to conduct their business in an ethical,  transparent and accountable manner. It also addresses key business responsibility issues like Quality and Customer  Value, Corruption and Bribery, Health and Safety, Environment, Human Rights and Employee well-being., -, , -', 'yes', '65,009.35', '21,200.27', 'No, , 0, 0, NIL, 0, 0, NIL, Yes, https://www.\r\ntatamotors.com/investors/ \r\ninvestor-contacts/, 0, 0, NIL, 0, 0, NIL, Yes, https://scores.gov.in/scores/\r\nWelcome.html, 86, 0, NIL, 40, 1, One pending \r\ncase was \r\nclosed \r\nsubsequently, Yes, https://investors.tatamotors.\r\ncom/pdf/whistle-blowerpolicy.pdf\r\nhttps://www.tata.com/\r\ncontent/dam/tata/pdf/\r\nTata%20Code%20Of%20\r\nConduct.pdf\r\nethicsoffice@tatamotors.\r\ncom, 82, 29,  We are \r\ncurrently in \r\nprocess of \r\nevaluating \r\nthe pending \r\ncomplaints. \r\nAppropriate \r\naction will be \r\ntaken in case \r\nany one is \r\nfound guilty, 48, 12, Tata Code \r\nof Conduct \r\nconcerns and \r\nPOSH cases, Yes, https://www.tata.com/\r\ncontent/dam/tata/pdf/\r\nTata%20Code%20Of%20\r\nConduct.pdf, 9, 2,  We are \r\ncurrently in \r\nprocess of \r\nevaluating \r\nthe pending \r\ncomplaints. \r\nAppropriate \r\naction will be \r\ntaken in case \r\nany one is \r\nfound guilty, 8, 1, NIL, Yes, Yes, stakeholders can raise \r\ntheir grievances through \r\nethicsoffice@tatamotors.\r\ncom\r\nhttps://www.tata.com/\r\ncontent/dam/tata/pdf/\r\nTata%20Code%20Of%20\r\nConduct.pdf, 10, 2,  We are \r\ncurrently in \r\nprocess of \r\nevaluating \r\nthe pending \r\ncomplaints. \r\nAppropriate \r\naction will be \r\ntaken in case \r\nany one is \r\nfound guilty, 9, 2, NIL, Yes, , 52, 12,  We are \r\ncurrently in \r\nprocess of \r\nevaluating \r\nthe pending \r\ncomplaints. \r\nAppropriate \r\naction will be \r\ntaken in case \r\nany one is \r\nfound guilty, 56, 13, NIL', '1, , , , , ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
