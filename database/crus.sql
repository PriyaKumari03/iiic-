-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 17, 2024 at 04:49 AM
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
  `gre` text,
  `question11` text,
  `question12` text,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `section_b_form`
--

INSERT INTO `section_b_form` (`cin`, `dew`, `stmtdir`, `dthi`, `enspec`, `gre`, `question11`, `question12`) VALUES
('L28920MH1945PLC004520', 'Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, https://www.tatamotors.com/investors/corporate-governance/policies/ https://www.tatamotors.com/wp-content/uploads/2015/10/09042523/tata-code-of-conduct1. pdf https://www.tatamotors.com/wp-content/uploads/2019/05/21063650/supplier-code-ofconduct.pdf https://www.tatamotors.com/wp-content/uploads/2019/05/21063650/dealer-code-ofconduct.pdf https://www.tatamotors.com/wp-content/uploads/2020/05/29134505/affirmative-actionpolicy.jpg https://investors.tatamotors.com/pdf/anti-bribery-anti-corruption-policy.pdf, https://www.tatamotors.com/investors/corporate-governance/policies/ https://www.tatamotors.com/wp-content/uploads/2015/10/09042523/tata-code-of-conduct1. pdf https://www.tatamotors.com/wp-content/uploads/2019/05/21063650/supplier-code-ofconduct.pdf https://www.tatamotors.com/wp-content/uploads/2019/05/21063650/dealer-code-ofconduct.pdf https://www.tatamotors.com/wp-content/uploads/2020/05/29134505/affirmative-actionpolicy.jpg https://investors.tatamotors.com/pdf/anti-bribery-anti-corruption-policy.pdf, https://www.tatamotors.com/investors/corporate-governance/policies/ https://www.tatamotors.com/wp-content/uploads/2015/10/09042523/tata-code-of-conduct1. pdf https://www.tatamotors.com/wp-content/uploads/2019/05/21063650/supplier-code-ofconduct.pdf https://www.tatamotors.com/wp-content/uploads/2019/05/21063650/dealer-code-ofconduct.pdf https://www.tatamotors.com/wp-content/uploads/2020/05/29134505/affirmative-actionpolicy.jpg https://investors.tatamotors.com/pdf/anti-bribery-anti-corruption-policy.pdf, https://www.tatamotors.com/investors/corporate-governance/policies/ https://www.tatamotors.com/wp-content/uploads/2015/10/09042523/tata-code-of-conduct1. pdf https://www.tatamotors.com/wp-content/uploads/2019/05/21063650/supplier-code-ofconduct.pdf https://www.tatamotors.com/wp-content/uploads/2019/05/21063650/dealer-code-ofconduct.pdf https://www.tatamotors.com/wp-content/uploads/2020/05/29134505/affirmative-actionpolicy.jpg https://investors.tatamotors.com/pdf/anti-bribery-anti-corruption-policy.pdf, https://www.tatamotors.com/investors/corporate-governance/policies/ https://www.tatamotors.com/wp-content/uploads/2015/10/09042523/tata-code-of-conduct1. pdf https://www.tatamotors.com/wp-content/uploads/2019/05/21063650/supplier-code-ofconduct.pdf https://www.tatamotors.com/wp-content/uploads/2019/05/21063650/dealer-code-ofconduct.pdf https://www.tatamotors.com/wp-content/uploads/2020/05/29134505/affirmative-actionpolicy.jpg https://investors.tatamotors.com/pdf/anti-bribery-anti-corruption-policy.pdf, https://www.tatamotors.com/investors/corporate-governance/policies/ https://www.tatamotors.com/wp-content/uploads/2015/10/09042523/tata-code-of-conduct1. pdf https://www.tatamotors.com/wp-content/uploads/2019/05/21063650/supplier-code-ofconduct.pdf https://www.tatamotors.com/wp-content/uploads/2019/05/21063650/dealer-code-ofconduct.pdf https://www.tatamotors.com/wp-content/uploads/2020/05/29134505/affirmative-actionpolicy.jpg https://investors.tatamotors.com/pdf/anti-bribery-anti-corruption-policy.pdf, https://www.tatamotors.com/investors/corporate-governance/policies/ https://www.tatamotors.com/wp-content/uploads/2015/10/09042523/tata-code-of-conduct1. pdf https://www.tatamotors.com/wp-content/uploads/2019/05/21063650/supplier-code-ofconduct.pdf https://www.tatamotors.com/wp-content/uploads/2019/05/21063650/dealer-code-ofconduct.pdf https://www.tatamotors.com/wp-content/uploads/2020/05/29134505/affirmative-actionpolicy.jpg https://investors.tatamotors.com/pdf/anti-bribery-anti-corruption-policy.pdf, https://www.tatamotors.com/investors/corporate-governance/policies/ https://www.tatamotors.com/wp-content/uploads/2015/10/09042523/tata-code-of-conduct1. pdf https://www.tatamotors.com/wp-content/uploads/2019/05/21063650/supplier-code-ofconduct.pdf https://www.tatamotors.com/wp-content/uploads/2019/05/21063650/dealer-code-ofconduct.pdf https://www.tatamotors.com/wp-content/uploads/2020/05/29134505/affirmative-actionpolicy.jpg https://investors.tatamotors.com/pdf/anti-bribery-anti-corruption-policy.pdf, https://www.tatamotors.com/investors/corporate-governance/policies/ https://www.tatamotors.com/wp-content/uploads/2015/10/09042523/tata-code-of-conduct1. pdf https://www.tatamotors.com/wp-content/uploads/2019/05/21063650/supplier-code-ofconduct.pdf https://www.tatamotors.com/wp-content/uploads/2019/05/21063650/dealer-code-ofconduct.pdf https://www.tatamotors.com/wp-content/uploads/2020/05/29134505/affirmative-actionpolicy.jpg https://investors.tatamotors.com/pdf/anti-bribery-anti-corruption-policy.pdf, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, Yes, The Environmental Policy, Safety & Health policy and Quality policy are aligned with the  requirements of international standards ISO 14001, ISO 45001 and IATF 16949. The Company  follows GRI Standards to disclose on its material topics in the Integrated Report, which is  also mapped against principles of United Nations Global Compact (\'UNGC\') and Sustainable  Development Goals (\'SDGs\'). The Company voluntarily discloses to Carbon Disclosure Project  (CDP) on Climate Change, S&P Global Corporate Sustainability Assessment (CSA) and is  committed to Science Based Targets initiative (SBTi)., The Environmental Policy, Safety & Health policy and Quality policy are aligned with the  requirements of international standards ISO 14001, ISO 45001 and IATF 16949. The Company  follows GRI Standards to disclose on its material topics in the Integrated Report, which is  also mapped against principles of United Nations Global Compact (\'UNGC\') and Sustainable  Development Goals (\'SDGs\'). The Company voluntarily discloses to Carbon Disclosure Project  (CDP) on Climate Change, S&P Global Corporate Sustainability Assessment (CSA) and is  committed to Science Based Targets initiative (SBTi)., The Environmental Policy, Safety & Health policy and Quality policy are aligned with the  requirements of international standards ISO 14001, ISO 45001 and IATF 16949. The Company  follows GRI Standards to disclose on its material topics in the Integrated Report, which is  also mapped against principles of United Nations Global Compact (\'UNGC\') and Sustainable  Development Goals (\'SDGs\'). The Company voluntarily discloses to Carbon Disclosure Project  (CDP) on Climate Change, S&P Global Corporate Sustainability Assessment (CSA) and is  committed to Science Based Targets initiative (SBTi)., The Environmental Policy, Safety & Health policy and Quality policy are aligned with the  requirements of international standards ISO 14001, ISO 45001 and IATF 16949. The Company  follows GRI Standards to disclose on its material topics in the Integrated Report, which is  also mapped against principles of United Nations Global Compact (\'UNGC\') and Sustainable  Development Goals (\'SDGs\'). The Company voluntarily discloses to Carbon Disclosure Project  (CDP) on Climate Change, S&P Global Corporate Sustainability Assessment (CSA) and is  committed to Science Based Targets initiative (SBTi)., The Environmental Policy, Safety & Health policy and Quality policy are aligned with the  requirements of international standards ISO 14001, ISO 45001 and IATF 16949. The Company  follows GRI Standards to disclose on its material topics in the Integrated Report, which is  also mapped against principles of United Nations Global Compact (\'UNGC\') and Sustainable  Development Goals (\'SDGs\'). The Company voluntarily discloses to Carbon Disclosure Project  (CDP) on Climate Change, S&P Global Corporate Sustainability Assessment (CSA) and is  committed to Science Based Targets initiative (SBTi)., The Environmental Policy, Safety & Health policy and Quality policy are aligned with the  requirements of international standards ISO 14001, ISO 45001 and IATF 16949. The Company  follows GRI Standards to disclose on its material topics in the Integrated Report, which is  also mapped against principles of United Nations Global Compact (\'UNGC\') and Sustainable  Development Goals (\'SDGs\'). The Company voluntarily discloses to Carbon Disclosure Project  (CDP) on Climate Change, S&P Global Corporate Sustainability Assessment (CSA) and is  committed to Science Based Targets initiative (SBTi)., The Environmental Policy, Safety & Health policy and Quality policy are aligned with the  requirements of international standards ISO 14001, ISO 45001 and IATF 16949. The Company  follows GRI Standards to disclose on its material topics in the Integrated Report, which is  also mapped against principles of United Nations Global Compact (\'UNGC\') and Sustainable  Development Goals (\'SDGs\'). The Company voluntarily discloses to Carbon Disclosure Project  (CDP) on Climate Change, S&P Global Corporate Sustainability Assessment (CSA) and is  committed to Science Based Targets initiative (SBTi)., The Environmental Policy, Safety & Health policy and Quality policy are aligned with the  requirements of international standards ISO 14001, ISO 45001 and IATF 16949. The Company  follows GRI Standards to disclose on its material topics in the Integrated Report, which is  also mapped against principles of United Nations Global Compact (\'UNGC\') and Sustainable  Development Goals (\'SDGs\'). The Company voluntarily discloses to Carbon Disclosure Project  (CDP) on Climate Change, S&P Global Corporate Sustainability Assessment (CSA) and is  committed to Science Based Targets initiative (SBTi)., The Environmental Policy, Safety & Health policy and Quality policy are aligned with the  requirements of international standards ISO 14001, ISO 45001 and IATF 16949. The Company  follows GRI Standards to disclose on its material topics in the Integrated Report, which is  also mapped against principles of United Nations Global Compact (\'UNGC\') and Sustainable  Development Goals (\'SDGs\'). The Company voluntarily discloses to Carbon Disclosure Project  (CDP) on Climate Change, S&P Global Corporate Sustainability Assessment (CSA) and is  committed to Science Based Targets initiative (SBTi)., The Company has set internal goals and targets on each of the principles with a few listed  below. In line with Principle 6, following commitments have been made by the Company: (i) Driving Net Zero - The Company is committed to achieving Net Zero Emissions by 2040  for Passenger Vehicles Business and 2045 for Commercial Vehicles Business and has  also committed to setting Science Based Targets to act as intermediate milestones in  this journey. (ii) Pioneering Circular Economy - The Company already has strong foundations in its  operations around responsible use of fresh water aiming for water neutrality by 2030  and disposal of waste, aiming for Zero Waste to Landfill by 2030. (iii) Preserving Nature and Biodiversity - While the Company has a rich legacy of creating  water body-based ecosystems around its plants which nurture a wide variety of flora  and fauna, the Company intend to take this forward with a more scientific approach and  aspire to become a catalyst of Transformation on this subject. The Company has set internal goals and targets on each of the principles with a few listed  below. In line with Principle 6, following commitments have been made by the Company: (i) Driving Net Zero - The Company is committed to achieving Net Zero Emissions by 2040  for Passenger Vehicles Business and 2045 for Commercial Vehicles Business and has  also committed to setting Science Based Targets to act as intermediate milestones in  this journey. (ii) Pioneering Circular Economy - The Company already has strong foundations in its  operations around responsible use of fresh water aiming for water neutrality by 2030  and disposal of waste, aiming for Zero Waste to Landfill by 2030. (iii) Preserving Nature and Biodiversity - While the Company has a rich legacy of creating  water body-based ecosystems around its plants which nurture a wide variety of flora  and fauna, the Company intend to take this forward with a more scientific approach and  aspire to become a catalyst of Transformation on this subject. , The Company has set internal goals and targets on each of the principles with a few listed  below. In line with Principle 6, following commitments have been made by the Company: (i) Driving Net Zero - The Company is committed to achieving Net Zero Emissions by 2040  for Passenger Vehicles Business and 2045 for Commercial Vehicles Business and has  also committed to setting Science Based Targets to act as intermediate milestones in  this journey. (ii) Pioneering Circular Economy - The Company already has strong foundations in its  operations around responsible use of fresh water aiming for water neutrality by 2030  and disposal of waste, aiming for Zero Waste to Landfill by 2030. (iii) Preserving Nature and Biodiversity - While the Company has a rich legacy of creating  water body-based ecosystems around its plants which nurture a wide variety of flora  and fauna, the Company intend to take this forward with a more scientific approach and  aspire to become a catalyst of Transformation on this subject. , The Company has set internal goals and targets on each of the principles with a few listed  below. In line with Principle 6, following commitments have been made by the Company: (i) Driving Net Zero - The Company is committed to achieving Net Zero Emissions by 2040  for Passenger Vehicles Business and 2045 for Commercial Vehicles Business and has  also committed to setting Science Based Targets to act as intermediate milestones in  this journey. (ii) Pioneering Circular Economy - The Company already has strong foundations in its  operations around responsible use of fresh water aiming for water neutrality by 2030  and disposal of waste, aiming for Zero Waste to Landfill by 2030. (iii) Preserving Nature and Biodiversity - While the Company has a rich legacy of creating  water body-based ecosystems around its plants which nurture a wide variety of flora  and fauna, the Company intend to take this forward with a more scientific approach and  aspire to become a catalyst of Transformation on this subject. , The Company has set internal goals and targets on each of the principles with a few listed  below. In line with Principle 6, following commitments have been made by the Company: (i) Driving Net Zero - The Company is committed to achieving Net Zero Emissions by 2040  for Passenger Vehicles Business and 2045 for Commercial Vehicles Business and has  also committed to setting Science Based Targets to act as intermediate milestones in  this journey. (ii) Pioneering Circular Economy - The Company already has strong foundations in its  operations around responsible use of fresh water aiming for water neutrality by 2030  and disposal of waste, aiming for Zero Waste to Landfill by 2030. (iii) Preserving Nature and Biodiversity - While the Company has a rich legacy of creating  water body-based ecosystems around its plants which nurture a wide variety of flora  and fauna, the Company intend to take this forward with a more scientific approach and  aspire to become a catalyst of Transformation on this subject. , The Company has set internal goals and targets on each of the principles with a few listed  below. In line with Principle 6, following commitments have been made by the Company: (i) Driving Net Zero - The Company is committed to achieving Net Zero Emissions by 2040  for Passenger Vehicles Business and 2045 for Commercial Vehicles Business and has  also committed to setting Science Based Targets to act as intermediate milestones in  this journey. (ii) Pioneering Circular Economy - The Company already has strong foundations in its  operations around responsible use of fresh water aiming for water neutrality by 2030  and disposal of waste, aiming for Zero Waste to Landfill by 2030. (iii) Preserving Nature and Biodiversity - While the Company has a rich legacy of creating  water body-based ecosystems around its plants which nurture a wide variety of flora  and fauna, the Company intend to take this forward with a more scientific approach and  aspire to become a catalyst of Transformation on this subject. , The Company has set internal goals and targets on each of the principles with a few listed  below. In line with Principle 6, following commitments have been made by the Company: (i) Driving Net Zero - The Company is committed to achieving Net Zero Emissions by 2040  for Passenger Vehicles Business and 2045 for Commercial Vehicles Business and has  also committed to setting Science Based Targets to act as intermediate milestones in  this journey. (ii) Pioneering Circular Economy - The Company already has strong foundations in its  operations around responsible use of fresh water aiming for water neutrality by 2030  and disposal of waste, aiming for Zero Waste to Landfill by 2030. (iii) Preserving Nature and Biodiversity - While the Company has a rich legacy of creating  water body-based ecosystems around its plants which nurture a wide variety of flora  and fauna, the Company intend to take this forward with a more scientific approach and  aspire to become a catalyst of Transformation on this subject. , The Company has set internal goals and targets on each of the principles with a few listed  below. In line with Principle 6, following commitments have been made by the Company: (i) Driving Net Zero - The Company is committed to achieving Net Zero Emissions by 2040  for Passenger Vehicles Business and 2045 for Commercial Vehicles Business and has  also committed to setting Science Based Targets to act as intermediate milestones in  this journey. (ii) Pioneering Circular Economy - The Company already has strong foundations in its  operations around responsible use of fresh water aiming for water neutrality by 2030  and disposal of waste, aiming for Zero Waste to Landfill by 2030. (iii) Preserving Nature and Biodiversity - While the Company has a rich legacy of creating  water body-based ecosystems around its plants which nurture a wide variety of flora  and fauna, the Company intend to take this forward with a more scientific approach and  aspire to become a catalyst of Transformation on this subject. , The Company has set internal goals and targets on each of the principles with a few listed  below. In line with Principle 6, following commitments have been made by the Company: (i) Driving Net Zero - The Company is committed to achieving Net Zero Emissions by 2040  for Passenger Vehicles Business and 2045 for Commercial Vehicles Business and has  also committed to setting Science Based Targets to act as intermediate milestones in  this journey. (ii) Pioneering Circular Economy - The Company already has strong foundations in its  operations around responsible use of fresh water aiming for water neutrality by 2030  and disposal of waste, aiming for Zero Waste to Landfill by 2030. (iii) Preserving Nature and Biodiversity - While the Company has a rich legacy of creating  water body-based ecosystems around its plants which nurture a wide variety of flora  and fauna, the Company intend to take this forward with a more scientific approach and  aspire to become a catalyst of Transformation on this subject. , The Company has set internal goals and targets on each of the principles with a few listed  below. In line with Principle 6, following commitments have been made by the Company: (i) Driving Net Zero - The Company is committed to achieving Net Zero Emissions by 2040  for Passenger Vehicles Business and 2045 for Commercial Vehicles Business and has  also committed to setting Science Based Targets to act as intermediate milestones in  this journey. (ii) Pioneering Circular Economy - The Company already has strong foundations in its  operations around responsible use of fresh water aiming for water neutrality by 2030  and disposal of waste, aiming for Zero Waste to Landfill by 2030. (iii) Preserving Nature and Biodiversity - While the Company has a rich legacy of creating  water body-based ecosystems around its plants which nurture a wide variety of flora  and fauna, the Company intend to take this forward with a more scientific approach and  aspire to become a catalyst of Transformation on this subject. , Performance on goals on each of the principles is reviewed periodically by various Committees  led by the Management and Board of Directors. A few of them detailed below: 1. Improvement in RE share in total electricity consumption for all our CV Operations –  17.7% in FY 2021-22 to 23.5% in FY 2022-23 2. Our manufacturing facility in Lucknow has been certified as \"Water Positive\" & facility in  Pantnagar has been certified \"Water Neutral\" by CII-GBC in FY23, Performance on goals on each of the principles is reviewed periodically by various Committees  led by the Management and Board of Directors. A few of them detailed below: 1. Improvement in RE share in total electricity consumption for all our CV Operations –  17.7% in FY 2021-22 to 23.5% in FY 2022-23 2. Our manufacturing facility in Lucknow has been certified as \"Water Positive\" & facility in  Pantnagar has been certified \"Water Neutral\" by CII-GBC in FY23, Performance on goals on each of the principles is reviewed periodically by various Committees  led by the Management and Board of Directors. A few of them detailed below: 1. Improvement in RE share in total electricity consumption for all our CV Operations –  17.7% in FY 2021-22 to 23.5% in FY 2022-23 2. Our manufacturing facility in Lucknow has been certified as \"Water Positive\" & facility in  Pantnagar has been certified \"Water Neutral\" by CII-GBC in FY23, Performance on goals on each of the principles is reviewed periodically by various Committees  led by the Management and Board of Directors. A few of them detailed below: 1. Improvement in RE share in total electricity consumption for all our CV Operations –  17.7% in FY 2021-22 to 23.5% in FY 2022-23 2. Our manufacturing facility in Lucknow has been certified as \"Water Positive\" & facility in  Pantnagar has been certified \"Water Neutral\" by CII-GBC in FY23, Performance on goals on each of the principles is reviewed periodically by various Committees  led by the Management and Board of Directors. A few of them detailed below: 1. Improvement in RE share in total electricity consumption for all our CV Operations –  17.7% in FY 2021-22 to 23.5% in FY 2022-23 2. Our manufacturing facility in Lucknow has been certified as \"Water Positive\" & facility in  Pantnagar has been certified \"Water Neutral\" by CII-GBC in FY23, Performance on goals on each of the principles is reviewed periodically by various Committees  led by the Management and Board of Directors. A few of them detailed below: 1. Improvement in RE share in total electricity consumption for all our CV Operations –  17.7% in FY 2021-22 to 23.5% in FY 2022-23 2. Our manufacturing facility in Lucknow has been certified as \"Water Positive\" & facility in  Pantnagar has been certified \"Water Neutral\" by CII-GBC in FY23, Performance on goals on each of the principles is reviewed periodically by various Committees  led by the Management and Board of Directors. A few of them detailed below: 1. Improvement in RE share in total electricity consumption for all our CV Operations –  17.7% in FY 2021-22 to 23.5% in FY 2022-23 2. Our manufacturing facility in Lucknow has been certified as \"Water Positive\" & facility in  Pantnagar has been certified \"Water Neutral\" by CII-GBC in FY23, Performance on goals on each of the principles is reviewed periodically by various Committees  led by the Management and Board of Directors. A few of them detailed below: 1. Improvement in RE share in total electricity consumption for all our CV Operations –  17.7% in FY 2021-22 to 23.5% in FY 2022-23 2. Our manufacturing facility in Lucknow has been certified as \"Water Positive\" & facility in  Pantnagar has been certified \"Water Neutral\" by CII-GBC in FY23, Performance on goals on each of the principles is reviewed periodically by various Committees  led by the Management and Board of Directors. A few of them detailed below: 1. Improvement in RE share in total electricity consumption for all our CV Operations –  17.7% in FY 2021-22 to 23.5% in FY 2022-23 2. Our manufacturing facility in Lucknow has been certified as \"Water Positive\" & facility in  Pantnagar has been certified \"Water Neutral\" by CII-GBC in FY23', 'Please refer Message of the Executive Directors in Integrated Annual Report of FY 2022-23', 'Mr. Girish Wagh (DIN: 03119361)  Designation: Executive Director  Telephone: 022-66657609  E-mail id: girish.wagh@tatamotors.com', 'The Safety, Health and Sustainability (\'SHS\') Committee reviews the Company’s performance  on SHS aspects, including Environment Social & and Governance and oversees the  implementation of relevant policies and strategies. The Corporate Social Responsibility (\'CSR\')  Committee formulates and recommends the CSR policy to the Board and monitors CSR  budget, activities and expenditure', 'The Company follows a systematic, multi-tiered approach to review the Safety, Health &  Sustainability (\'SHS\') performance. The Factory Implementation Committee is the first level  (monthly), followed by plant level Apex Committee/Sub-Committee (monthly) followed by  Business Unit (\'BU\') Safety & Health Council and Sustainability Council (monthly) and finally by the  SHS Committee of the Board (3 to 4 times in a year)., The Company follows a systematic, multi-tiered approach to review the Safety, Health &  Sustainability (\'SHS\') performance. The Factory Implementation Committee is the first level  (monthly), followed by plant level Apex Committee/Sub-Committee (monthly) followed by  Business Unit (\'BU\') Safety & Health Council and Sustainability Council (monthly) and finally by the  SHS Committee of the Board (3 to 4 times in a year)., The Company follows a systematic, multi-tiered approach to review the Safety, Health &  Sustainability (\'SHS\') performance. The Factory Implementation Committee is the first level  (monthly), followed by plant level Apex Committee/Sub-Committee (monthly) followed by  Business Unit (\'BU\') Safety & Health Council and Sustainability Council (monthly) and finally by the  SHS Committee of the Board (3 to 4 times in a year)., The Company follows a systematic, multi-tiered approach to review the Safety, Health &  Sustainability (\'SHS\') performance. The Factory Implementation Committee is the first level  (monthly), followed by plant level Apex Committee/Sub-Committee (monthly) followed by  Business Unit (\'BU\') Safety & Health Council and Sustainability Council (monthly) and finally by the  SHS Committee of the Board (3 to 4 times in a year)., The Company follows a systematic, multi-tiered approach to review the Safety, Health &  Sustainability (\'SHS\') performance. The Factory Implementation Committee is the first level  (monthly), followed by plant level Apex Committee/Sub-Committee (monthly) followed by  Business Unit (\'BU\') Safety & Health Council and Sustainability Council (monthly) and finally by the  SHS Committee of the Board (3 to 4 times in a year)., The Company follows a systematic, multi-tiered approach to review the Safety, Health &  Sustainability (\'SHS\') performance. The Factory Implementation Committee is the first level  (monthly), followed by plant level Apex Committee/Sub-Committee (monthly) followed by  Business Unit (\'BU\') Safety & Health Council and Sustainability Council (monthly) and finally by the  SHS Committee of the Board (3 to 4 times in a year)., The Company follows a systematic, multi-tiered approach to review the Safety, Health &  Sustainability (\'SHS\') performance. The Factory Implementation Committee is the first level  (monthly), followed by plant level Apex Committee/Sub-Committee (monthly) followed by  Business Unit (\'BU\') Safety & Health Council and Sustainability Council (monthly) and finally by the  SHS Committee of the Board (3 to 4 times in a year)., The Company follows a systematic, multi-tiered approach to review the Safety, Health &  Sustainability (\'SHS\') performance. The Factory Implementation Committee is the first level  (monthly), followed by plant level Apex Committee/Sub-Committee (monthly) followed by  Business Unit (\'BU\') Safety & Health Council and Sustainability Council (monthly) and finally by the  SHS Committee of the Board (3 to 4 times in a year)., The Company follows a systematic, multi-tiered approach to review the Safety, Health &  Sustainability (\'SHS\') performance. The Factory Implementation Committee is the first level  (monthly), followed by plant level Apex Committee/Sub-Committee (monthly) followed by  Business Unit (\'BU\') Safety & Health Council and Sustainability Council (monthly) and finally by the  SHS Committee of the Board (3 to 4 times in a year)., The Company follows a systematic, multi-tiered approach to review the Safety, Health &  Sustainability (\'SHS\') performance. The Factory Implementation Committee is the first level  (monthly), followed by plant level Apex Committee/Sub-Committee (monthly) followed by  Business Unit (\'BU\') Safety & Health Council and Sustainability Council (monthly) and finally by the  SHS Committee of the Board (3 to 4 times in a year)., The Company follows a systematic, multi-tiered approach to review the Safety, Health &  Sustainability (\'SHS\') performance. The Factory Implementation Committee is the first level  (monthly), followed by plant level Apex Committee/Sub-Committee (monthly) followed by  Business Unit (\'BU\') Safety & Health Council and Sustainability Council (monthly) and finally by the  SHS Committee of the Board (3 to 4 times in a year)., The Company follows a systematic, multi-tiered approach to review the Safety, Health &  Sustainability (\'SHS\') performance. The Factory Implementation Committee is the first level  (monthly), followed by plant level Apex Committee/Sub-Committee (monthly) followed by  Business Unit (\'BU\') Safety & Health Council and Sustainability Council (monthly) and finally by the  SHS Committee of the Board (3 to 4 times in a year)., The Company follows a systematic, multi-tiered approach to review the Safety, Health &  Sustainability (\'SHS\') performance. The Factory Implementation Committee is the first level  (monthly), followed by plant level Apex Committee/Sub-Committee (monthly) followed by  Business Unit (\'BU\') Safety & Health Council and Sustainability Council (monthly) and finally by the  SHS Committee of the Board (3 to 4 times in a year)., The Company follows a systematic, multi-tiered approach to review the Safety, Health &  Sustainability (\'SHS\') performance. The Factory Implementation Committee is the first level  (monthly), followed by plant level Apex Committee/Sub-Committee (monthly) followed by  Business Unit (\'BU\') Safety & Health Council and Sustainability Council (monthly) and finally by the  SHS Committee of the Board (3 to 4 times in a year)., The Company follows a systematic, multi-tiered approach to review the Safety, Health &  Sustainability (\'SHS\') performance. The Factory Implementation Committee is the first level  (monthly), followed by plant level Apex Committee/Sub-Committee (monthly) followed by  Business Unit (\'BU\') Safety & Health Council and Sustainability Council (monthly) and finally by the  SHS Committee of the Board (3 to 4 times in a year)., The Company follows a systematic, multi-tiered approach to review the Safety, Health &  Sustainability (\'SHS\') performance. The Factory Implementation Committee is the first level  (monthly), followed by plant level Apex Committee/Sub-Committee (monthly) followed by  Business Unit (\'BU\') Safety & Health Council and Sustainability Council (monthly) and finally by the  SHS Committee of the Board (3 to 4 times in a year)., The Company follows a systematic, multi-tiered approach to review the Safety, Health &  Sustainability (\'SHS\') performance. The Factory Implementation Committee is the first level  (monthly), followed by plant level Apex Committee/Sub-Committee (monthly) followed by  Business Unit (\'BU\') Safety & Health Council and Sustainability Council (monthly) and finally by the  SHS Committee of the Board (3 to 4 times in a year)., The Company follows a systematic, multi-tiered approach to review the Safety, Health &  Sustainability (\'SHS\') performance. The Factory Implementation Committee is the first level  (monthly), followed by plant level Apex Committee/Sub-Committee (monthly) followed by  Business Unit (\'BU\') Safety & Health Council and Sustainability Council (monthly) and finally by the  SHS Committee of the Board (3 to 4 times in a year)., The Company complies with the statutory requirements as applicable., The Company complies with the statutory requirements as applicable., The Company complies with the statutory requirements as applicable., The Company complies with the statutory requirements as applicable., The Company complies with the statutory requirements as applicable., The Company complies with the statutory requirements as applicable., The Company complies with the statutory requirements as applicable., The Company complies with the statutory requirements as applicable., The Company complies with the statutory requirements as applicable., The Company complies with the statutory requirements as applicable., The Company complies with the statutory requirements as applicable., The Company complies with the statutory requirements as applicable., The Company complies with the statutory requirements as applicable., The Company complies with the statutory requirements as applicable., The Company complies with the statutory requirements as applicable., The Company complies with the statutory requirements as applicable., The Company complies with the statutory requirements as applicable., The Company complies with the statutory requirements as applicable.', 'The implementation of TCoC and other policies are reviewed through internal audit function/ Ethics  Counsellor. External assessment through the Tata Business Excellence Model (\'TBEM\') reviews the  implementation of all the Company policies. Any opportunities for improvement are addressed  through implementation of TBEM action plan. The Quality, Safety & Health and Environmental  policies are subject to internal and external audits as part of certification process., The implementation of TCoC and other policies are reviewed through internal audit function/ Ethics  Counsellor. External assessment through the Tata Business Excellence Model (\'TBEM\') reviews the  implementation of all the Company policies. Any opportunities for improvement are addressed  through implementation of TBEM action plan. The Quality, Safety & Health and Environmental  policies are subject to internal and external audits as part of certification process., The implementation of TCoC and other policies are reviewed through internal audit function/ Ethics  Counsellor. External assessment through the Tata Business Excellence Model (\'TBEM\') reviews the  implementation of all the Company policies. Any opportunities for improvement are addressed  through implementation of TBEM action plan. The Quality, Safety & Health and Environmental  policies are subject to internal and external audits as part of certification process., The implementation of TCoC and other policies are reviewed through internal audit function/ Ethics  Counsellor. External assessment through the Tata Business Excellence Model (\'TBEM\') reviews the  implementation of all the Company policies. Any opportunities for improvement are addressed  through implementation of TBEM action plan. The Quality, Safety & Health and Environmental  policies are subject to internal and external audits as part of certification process., The implementation of TCoC and other policies are reviewed through internal audit function/ Ethics  Counsellor. External assessment through the Tata Business Excellence Model (\'TBEM\') reviews the  implementation of all the Company policies. Any opportunities for improvement are addressed  through implementation of TBEM action plan. The Quality, Safety & Health and Environmental  policies are subject to internal and external audits as part of certification process., The implementation of TCoC and other policies are reviewed through internal audit function/ Ethics  Counsellor. External assessment through the Tata Business Excellence Model (\'TBEM\') reviews the  implementation of all the Company policies. Any opportunities for improvement are addressed  through implementation of TBEM action plan. The Quality, Safety & Health and Environmental  policies are subject to internal and external audits as part of certification process., The implementation of TCoC and other policies are reviewed through internal audit function/ Ethics  Counsellor. External assessment through the Tata Business Excellence Model (\'TBEM\') reviews the  implementation of all the Company policies. Any opportunities for improvement are addressed  through implementation of TBEM action plan. The Quality, Safety & Health and Environmental  policies are subject to internal and external audits as part of certification process., The implementation of TCoC and other policies are reviewed through internal audit function/ Ethics  Counsellor. External assessment through the Tata Business Excellence Model (\'TBEM\') reviews the  implementation of all the Company policies. Any opportunities for improvement are addressed  through implementation of TBEM action plan. The Quality, Safety & Health and Environmental  policies are subject to internal and external audits as part of certification process., The implementation of TCoC and other policies are reviewed through internal audit function/ Ethics  Counsellor. External assessment through the Tata Business Excellence Model (\'TBEM\') reviews the  implementation of all the Company policies. Any opportunities for improvement are addressed  through implementation of TBEM action plan. The Quality, Safety & Health and Environmental  policies are subject to internal and external audits as part of certification process.', 'NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NA, NANA, NA, NA, NA');

-- --------------------------------------------------------

--
-- Table structure for table `section_c_form`
--

DROP TABLE IF EXISTS `section_c_form`;
CREATE TABLE IF NOT EXISTS `section_c_form` (
  `cin` varchar(21) NOT NULL,
  `1_1_coverage` text,
  `1_1_coverage_comments` text,
  `1_2_details` text,
  `1_2_details_comments` text,
  `1_3_appeal` text,
  `1_3_appeal_comments` text,
  `1_4_antiCorruptionPolicy` text,
  `1_5_disciplinaryAction` text,
  `1_5_disciplinaryAction_comments` text,
  `1_6_conflictComplaints` text,
  `1_6_conflictComplaints_comments` text,
  `1_7_correctiveAction` text,
  `1_8_awarenessProgrammes` text,
  `1_8_awarenessProgrammes_comments` text,
  `1_9_conflictOfInterest` text,
  `1_10_conflictDetails` text,
  `2_1_rdPercentage` text,
  `2_1_rdPercentage_comments` text,
  `2_2_sustainableSourcing2` text,
  `2_3_sustainableSourcingPercentage` text,
  `2_3_sustainableSourcingPercentage_comments` text,
  `2_4_reclaimProcesses2` text,
  `2_5_eprApplicable` text,
  `2_6_eprCollectionPlan` text,
  `2_7_lcaConducted2` text,
  `2_7_lcaConducted2_comments` text,
  `2_8_concernsMitigation2` text,
  `2_8_concernsMitigation2_comments` text,
  `2_9_recycledPercentage2` text,
  `2_9_recycledPercentage2_comments` text,
  `2_10_reclaimedProducts2` text,
  `2_10_reclaimedProducts2_comments` text,
  `2_11_reclaimedPercentages2` text,
  `2_11_reclaimedPercentages2_comments` text,
  `3_1_employeeWellbeingDetails` text,
  `3_1_employeeWellbeingDetails_comments` text,
  `3_2_workerWellbeingDetails` text,
  `3_2_workerWellbeingDetails_comments` text,
  `3_3_retirementBenefitsDetails` text,
  `3_3_retirementBenefitsDetails_comments` text,
  `3_5_accessibilitySteps` text,
  `3_6_equalOpportunityLink` text,
  `3_7_returnRetentionRates` text,
  `3_7_returnRetentionRates_comments` text,
  `3_8_grievanceMechanismDetails` text,
  `3_8_grievanceMechanismDetails_comments` text,
  `3_9_unionMembershipPercentage` text,
  `3_9_unionMembershipPercentage_comments` text,
  `3_10_trainingDetails` text,
  `3_10_trainingDetails_comments` text,
  `3_11_performanceReviewDetails` text,
  `3_11_performanceReviewDetails_comments` text,
  `3_12_healthSafetyManagementSystemChoice` text,
  `3_13_healthSafetyManagementSystemDetails` text,
  `3_14_workplaceSafetyMeasures2` text,
  `3_15_workplaceSafetyMeasures` text,
  `3_15_workplaceSafetyMeasures_comments` text,
  `3_16_healthSafetyManagementSystem3` text,
  `3_17_healthSafetyManagementSystem4` text,
  `3_18_workplaceSafetyMeasures12` text,
  `3_19_workplaceSafetyMeasures15` text,
  `3_20_complaintsemployees` text,
  `3_20_complaintsemployees_comments` text,
  `3_21_assesmentyr` text,
  `3_21_assesmentyr_comments` text,
  `3_22_lifeInsuranceCompensationa` text,
  `3_23_lifeInsuranceCompensationdetailsa` text,
  `3_24_lifeInsuranceCompensationb` text,
  `3_25_lifeInsuranceCompensationdetailsb` text,
  `3_26_statutoryDuesMeasures` text,
  `3_27_workRelatedInjuryRehabilitation` text,
  `3_27_workRelatedInjuryRehabilitation_comments` text,
  `3_28_transitionAssistanceProgram` text,
  `3_29_rdPercentageassesment` text,
  `3_29_rdPercentageassesment_comments` text,
  `3_30_correctiveactions` text,
  `4_1_stakeholderIdentificationDetails` text,
  `4_2_stakeholderEngagementDetails` text,
  `4_2_stakeholderEngagementDetails_comments` text,
  `4_3_boardConsultationDetails` text,
  `4_4_stakeholderConsultationPolicy` text,
  `4_5_vulnerableEngagementDetails` text,
  `5_1_humanRightsTrainingDetails` text,
  `5_1_humanRightsTrainingDetails_comments` text,
  `5_2_wageDetails` text,
  `5_2_wageDetails_comments` text,
  `5_3_remunerationDetails` text,
  `5_3_remunerationDetails_comments` text,
  `5_4_humanRightsResponsible` text,
  `5_5_grievanceMechanism` text,
  `5_6_complaintsDetails` text,
  `5_6_complaintsDetails_comments` text,
  `5_7_discriminationProtectionMechanisms` text,
  `5_8_humanRightsInBusiness` text,
  `5_9_assessedPlantPercentage` text,
  `5_9_assessedPlantPercentage_comments` text,
  `5_10_correctiveActionsForAssessments` text,
  `5_11_businessProcessModifications` text,
  `5_12_humanRightsDueDiligence` text,
  `5_13_premiseAccessibility` text,
  `5_14_valueChainAssessment` text,
  `5_14_valueChainAssessment_comments` text,
  `5_15_correctiveActionsFromAssessments` text,
  `6_1_energyConsumptionDetails` text,
  `6_1_energyConsumptionDetails_comments` text,
  `6_2_energyExternalAgency` text,
  `6_3_energyExternalAgencyName` text,
  `6_4_designatedConsumers` text,
  `6_5_designatedConsumersDetails` text,
  `6_6_waterWithdrawalDetails` text,
  `6_6_waterWithdrawalDetails_comments` text,
  `6_7_waterExternalAgency` text,
  `6_8_waterExternalAgencyName` text,
  `6_9_liquidDischarge` text,
  `6_10_liquidDischargeDetails` text,
  `6_11_airEmissionDetails` text,
  `6_11_airEmissionDetails_comments` text,
  `6_12_airExternalAgency` text,
  `6_13_airExternalAgencyName` text,
  `6_14_greenhouseGasEmissionDetails` text,
  `6_14_greenhouseGasEmissionDetails_comments` text,
  `6_15_ghgExternalAgency` text,
  `6_16_ghgExternalAgencyName` text,
  `6_17_ghgReductionProject` text,
  `6_18_ghgReductionProjectDetails` text,
  `6_19_wasteDetails` text,
  `6_19_wasteDetails_comments` text,
  `6_20_wasteExternalAgency` text,
  `6_21_wasteExternalAgencyName` text,
  `6_22_wasteManagementPractices` text,
  `6_23_ecologicalAreaOperations` text,
  `6_23_ecologicalAreaOperations_comments` text,
  `6_26_eiaExternalAgency` text,
  `6_26_eiaExternalAgency_comments` text,
  `6_30_environmentalComplianceStatus` text,
  `6_30_environmentalComplianceStatus_comments` text,
  `6_31_totalenergyconsumed` text,
  `6_31_totalenergyconsumed_comments` text,
  `6_32_totalenergyconsumedAgency` text,
  `6_33_totalenergyconsumedAgencyName` text,
  `6_34_waterdischarged` text,
  `6_34_waterdischarged_comments` text,
  `6_35_waterdischargedAgency` text,
  `6_36_waterdischargedAgencyName` text,
  `6_37_waterstress` text,
  `6_37_waterstress_comments` text,
  `6_38_waterstressAgency` text,
  `6_39_waterstressAgencyName` text,
  `6_40_totalscope` text,
  `6_40_totalscope_comments` text,
  `6_41_totalscopeAgency` text,
  `6_42_totalscopeAgencyName` text,
  `6_43_significantdirect` text,
  `6_44_resourceefficiency` text,
  `6_44_resourceefficiency_comments` text,
  `6_45_disastermanagement` text,
  `6_46_valuechainentity` text,
  `6_47_valuechainbusiness` text,
  `7_1_noTradeAffiliations` text,
  `7_2_tradeAffiliations` text,
  `7_2_tradeAffiliations_comments` text,
  `7_3_antiCompetitiveActions` text,
  `7_3_antiCompetitiveActions_comments` text,
  `7_4_publicPolicyAdvocacy` text,
  `7_4_publicPolicyAdvocacy_comments` text,
  `8_1_socialImpactAssessments` text,
  `8_1_socialImpactAssessments_comments` text,
  `8_2_rehabilitationProjects` text,
  `8_2_rehabilitationProjects_comments` text,
  `8_3_grievanceRedressMechanism` text,
  `8_4_inputMaterialPercentage` text,
  `8_4_inputMaterialPercentage_comments` text,
  `8_5_socialImpactActions` text,
  `8_5_socialImpactActions_comments` text,
  `8_6_csrAspirationalDistricts` text,
  `8_6_csrAspirationalDistricts_comments` text,
  `8_7_procurementPolicyMarginalized` text,
  `8_8_intellectualPropertiesBenefits` text,
  `8_8_intellectualPropertiesBenefits_comments` text,
  `8_9_correctiveActionsIntellectualProperty` text,
  `8_9_correctiveActionsIntellectualProperty_comments` text,
  `8_10_csrProjectBeneficiaries` text,
  `8_10_csrProjectBeneficiaries_comments` text,
  `9_1_consumerFeedbackMechanism` text,
  `9_2_productTrunover` text,
  `9_2_productTrunover_comments` text,
  `9_3_consumerComplaints` text,
  `9_3_consumerComplaints_comments` text,
  `9_4_productRecallInstances` text,
  `9_4_productRecallInstances_comments` text,
  `9_5_cyberSecurityPolicy` text,
  `9_5_1_cyberSecurityPolicyDetails` text,
  `9_6_correctiveActions` text,
  `9_7_infoChannels` text,
  `9_8_consumerEducation` text,
  `9_9_serviceDisruptionInfo` text,
  `9_10_productInfoDisplay` text,
  `9_10_1_productInfoDisplayDetails` text,
  `9_11_surveyInfo` text,
  `9_11_1_surveyInfoDetails` text,
  `9_12_dataBreachesInfo` text,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
