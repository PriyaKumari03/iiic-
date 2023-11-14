-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 09:02 PM
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
  `cin` varchar(21) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `incorp_date` int(11) DEFAULT NULL,
  `office_address` text DEFAULT NULL,
  `corporate_address` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `reporting_fin_year` int(11) DEFAULT NULL,
  `incorporation_certificate` text DEFAULT NULL,
  `stock_name` varchar(255) DEFAULT NULL,
  `puc` varchar(255) DEFAULT NULL,
  `poc_name` varchar(255) DEFAULT NULL,
  `poc_phone` varchar(20) DEFAULT NULL,
  `poc_email` varchar(255) DEFAULT NULL,
  `rep_b` varchar(255) DEFAULT NULL,
  `doba` text DEFAULT NULL,
  `dops` text DEFAULT NULL,
  `nol` text DEFAULT NULL,
  `drm` text DEFAULT NULL,
  `drm_contribution_export` text DEFAULT NULL,
  `drm_types_customers` text DEFAULT NULL,
  `dew` text DEFAULT NULL,
  `dewda` text DEFAULT NULL,
  `pirw` text DEFAULT NULL,
  `torpew` text DEFAULT NULL,
  `holding` text DEFAULT NULL,
  `csr_act` text DEFAULT NULL,
  `csr_turnover` double DEFAULT NULL,
  `csr_networth` double DEFAULT NULL,
  `gre` text DEFAULT NULL,
  `overview` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_a_form`
--

INSERT INTO `section_a_form` (`cin`, `name`, `incorp_date`, `office_address`, `corporate_address`, `email`, `telephone`, `website`, `reporting_fin_year`, `incorporation_certificate`, `stock_name`, `puc`, `poc_name`, `poc_phone`, `poc_email`, `rep_b`, `doba`, `dops`, `nol`, `drm`, `drm_contribution_export`, `drm_types_customers`, `dew`, `dewda`, `pirw`, `torpew`, `holding`, `csr_act`, `csr_turnover`, `csr_networth`, `gre`, `overview`) VALUES
('U74140DL2014PTC272628', 'Ashutosh Kumar Maurya', 1900, 'Devdanhall Christ University Kengeri Maysore Road', 'Dawaud Ansari Hospital Road', 'ashutosh.maurya@btech.christuniversity.in', '07523946373', 'https://www.g.com', 1900, '../uploads/sec_A/6553af3ebd21b_section_c_form.pdf', 'BSE, NSE, CSE', '24', 'Ashutosh Kumar Maurya', '7523946373', 'ashutosh.maurya@btech.christuniversity.in', 'Karnataka ', '1, 1, 1, 1', '1, 1, 1, 1', '1, 1, 1, 1, 1, 1', '1, 1', '1', '1', '1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 11, 1, 1, 1, 1, 1, 1, 1', '1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1', '1, 1, 1, 1, 1, 1', '1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 11, 1, 1, 1, 1, 1, 1', '1, 1, 1, 1, 11', 'yes', 1, 1, '1, 1, 1, 1, 11, 1, 1, 1, 1, 1, 1, 1, 1, 11, 1, 1, 1, 1, 1, 1, 1, 1, 11, 1, 1, 1, 1, 11, 1, 1, 1, 1, 1, 1, 1, 11, 1, 1, 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 11', '1, 1, 1, 1, 1, 1');

-- --------------------------------------------------------

--
-- Table structure for table `section_b_form`
--

CREATE TABLE `section_b_form` (
  `cin` varchar(21) NOT NULL,
  `dew` text DEFAULT NULL,
  `stmtdir` text DEFAULT NULL,
  `dthi` text DEFAULT NULL,
  `enspec` text DEFAULT NULL,
  `gre` text DEFAULT NULL,
  `question11` text DEFAULT NULL,
  `question12` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `section_c_form`
--

CREATE TABLE `section_c_form` (
  `cin` varchar(21) NOT NULL,
  `1_1_coverage` int(11) NOT NULL,
  `1_2_details` text NOT NULL,
  `1_3_appeal` text DEFAULT NULL,
  `1_4_antiCorruptionPolicy` text DEFAULT NULL,
  `1_5_disciplinaryAction` int(11) NOT NULL,
  `1_6_conflictComplaints` text DEFAULT NULL,
  `1_7_correctiveAction` text DEFAULT NULL,
  `1_8_awarenessProgrammes` text NOT NULL,
  `1_9_conflictOfInterest` enum('Yes','No') NOT NULL,
  `1_10_conflictDetails` text DEFAULT NULL,
  `2_1_rdPercentage` float DEFAULT NULL,
  `2_2_sustainableSourcing2` enum('Yes','No') DEFAULT NULL,
  `2_3_sourcingPercentage2num` float DEFAULT NULL,
  `2_4_reclaimProcesses2` text DEFAULT NULL,
  `2_5_eprApplicable` enum('Yes','No') DEFAULT NULL,
  `2_6_eprCollectionPlan` text DEFAULT NULL,
  `2_7_lcaConducted2` enum('Yes','No') DEFAULT NULL,
  `2_8_lcaDetails` text DEFAULT NULL,
  `2_9_concernsMitigation2` text DEFAULT NULL,
  `2_10_recycledPercentage2` float DEFAULT NULL,
  `2_11_reclaimedProducts2` text DEFAULT NULL,
  `2_12_reclaimedPercentages2` text DEFAULT NULL,
  `3_1_employeeWellbeingDetails` text DEFAULT NULL,
  `3_2_retirementBenefitsDetails` text DEFAULT NULL,
  `3_3_accessibilityChoice` enum('Yes','No') DEFAULT NULL,
  `3_4_accessibilitySteps` text DEFAULT NULL,
  `3_5_equalOpportunity` enum('Yes','No') DEFAULT NULL,
  `3_6_equalOpportunityLink` text DEFAULT NULL,
  `3_7_returnRetentionRates` text DEFAULT NULL,
  `3_8_grievanceMechanismDetails` text DEFAULT NULL,
  `3_9_unionMembershipPercentage` text DEFAULT NULL,
  `3_10_trainingDetails` text DEFAULT NULL,
  `3_11_performanceReviewDetails` text DEFAULT NULL,
  `3_12_healthSafetyManagementSystemChoice` enum('Yes','No') DEFAULT NULL,
  `3_13_healthSafetyManagementSystemDetails` text DEFAULT NULL,
  `3_14_workplaceSafetyMeasures` text DEFAULT NULL,
  `3_15_lifeInsuranceCompensation` enum('Yes','No') DEFAULT NULL,
  `3_16_statutoryDuesMeasures` text DEFAULT NULL,
  `3_17_workRelatedInjuryRehabilitation` text DEFAULT NULL,
  `3_18_transitionAssistanceProgram` enum('Yes','No') DEFAULT NULL,
  `4_1_stakeholderIdentificationDetails` text DEFAULT NULL,
  `4_2_stakeholderEngagementDetails` text DEFAULT NULL,
  `4_3_boardConsultationDetails` text DEFAULT NULL,
  `4_4_stakeholderConsultationPolicy` enum('Yes','No') DEFAULT NULL,
  `4_5_sourcingPercentage` decimal(5,2) DEFAULT NULL,
  `4_6_vulnerableEngagementDetails` text DEFAULT NULL,
  `4_7_productEndOfLifeDetails` text DEFAULT NULL,
  `4_8_reclaimedProductPercentageDetails` text DEFAULT NULL,
  `5_1_humanRightsTrainingDetails` text DEFAULT NULL,
  `5_2_wageDetails` text DEFAULT NULL,
  `5_3_remunerationDetails` text DEFAULT NULL,
  `5_4_humanRightsResponsible` enum('Yes','No') DEFAULT NULL,
  `5_5_grievanceMechanism` text DEFAULT NULL,
  `5_6_complaintsDetails` text DEFAULT NULL,
  `5_7_discriminationProtectionMechanisms` text DEFAULT NULL,
  `5_8_humanRightsInBusiness` enum('Yes','No') DEFAULT NULL,
  `5_9_assessedPlantPercentage` decimal(5,2) DEFAULT NULL,
  `5_10_correctiveActionsForAssessments` text DEFAULT NULL,
  `5_11_businessProcessModifications` text DEFAULT NULL,
  `5_12_humanRightsDueDiligence` text DEFAULT NULL,
  `5_13_premiseAccessibility` enum('Yes','No') DEFAULT NULL,
  `5_14_valueChainAssessment` decimal(5,2) DEFAULT NULL,
  `5_15_correctiveActionsFromAssessments` text DEFAULT NULL,
  `6_1_energyConsumptionDetails` text DEFAULT NULL,
  `6_2_energyExternalAgency` enum('Yes','No') DEFAULT NULL,
  `6_3_energyExternalAgencyName` text DEFAULT NULL,
  `6_4_designatedConsumers` enum('Yes','No') DEFAULT NULL,
  `6_5_designatedConsumersDetails` text DEFAULT NULL,
  `6_6_waterWithdrawalDetails` text DEFAULT NULL,
  `6_7_waterExternalAgency` enum('Yes','No') DEFAULT NULL,
  `6_8_waterExternalAgencyName` text DEFAULT NULL,
  `6_9_liquidDischarge` enum('Yes','No') DEFAULT NULL,
  `6_10_liquidDischargeDetails` text DEFAULT NULL,
  `6_11_airEmissionDetails` text DEFAULT NULL,
  `6_12_airExternalAgency` enum('Yes','No') DEFAULT NULL,
  `6_13_airExternalAgencyName` text DEFAULT NULL,
  `6_14_greenhouseGasEmissionDetails` text DEFAULT NULL,
  `6_15_ghgExternalAgency` enum('Yes','No') DEFAULT NULL,
  `6_16_ghgExternalAgencyName` text DEFAULT NULL,
  `6_17_ghgReductionProject` enum('Yes','No') DEFAULT NULL,
  `6_18_ghgReductionProjectDetails` text DEFAULT NULL,
  `6_19_wasteDetails` text DEFAULT NULL,
  `6_20_wasteExternalAgency` enum('Yes','No') DEFAULT NULL,
  `6_21_wasteExternalAgencyName` text DEFAULT NULL,
  `6_22_wasteManagementPractices` text DEFAULT NULL,
  `6_23_ecologicalAreaOperations` enum('Yes','No') DEFAULT NULL,
  `6_24_ecologicalAreaOperationsDetails` text DEFAULT NULL,
  `6_25_environmentalImpactAssessmentDetails` text DEFAULT NULL,
  `6_26_eiaExternalAgency` enum('Yes','No') DEFAULT NULL,
  `6_27_eiaExternalAgencyName` text DEFAULT NULL,
  `6_28_eiaPublicDomain` enum('Yes','No') DEFAULT NULL,
  `6_29_eiaPublicDomainLink` text DEFAULT NULL,
  `6_30_environmentalComplianceStatus` enum('Yes','No') DEFAULT NULL,
  `6_31_environmentalComplianceStatusDetails` text DEFAULT NULL,
  `7_1_tradeAffiliations` text NOT NULL,
  `7_2_antiCompetitiveActions` enum('Yes','No') NOT NULL,
  `7_3_antiCompetitiveActionsDetails` text DEFAULT NULL,
  `7_4_publicPolicyAdvocacy` text NOT NULL,
  `8_1_socialImpactAssessments` text NOT NULL,
  `8_2_rehabilitationProjects` text NOT NULL,
  `8_3_grievanceRedressMechanism` text NOT NULL,
  `8_4_inputMaterialPercentage` decimal(5,2) NOT NULL,
  `8_5_socialImpactActions` text NOT NULL,
  `8_6_csrAspirationalDistricts` text NOT NULL,
  `8_7_procurementPolicyMarginalized` text NOT NULL,
  `8_8_intellectualPropertiesBenefits` text NOT NULL,
  `8_9_correctiveActionsIntellectualProperty` text NOT NULL,
  `8_10_csrProjectBeneficiaries` text NOT NULL,
  `9_1_consumerFeedbackMechanism` text DEFAULT NULL,
  `9_2_productTurnover` text DEFAULT NULL,
  `9_3_consumerComplaints` text DEFAULT NULL,
  `9_4_productRecallInstances` text DEFAULT NULL,
  `9_5_cyberSecurityPolicy` enum('Yes','No') DEFAULT NULL,
  `9_5_1_cyberSecurityPolicyDetails` text DEFAULT NULL,
  `9_6_correctiveActions` text DEFAULT NULL,
  `9_7_infoChannels` text DEFAULT NULL,
  `9_8_consumerEducation` text DEFAULT NULL,
  `9_9_serviceDisruptionInfo` text DEFAULT NULL,
  `9_10_productInfoDisplay` enum('Yes','No','NA') DEFAULT NULL,
  `9_10_1_productInfoDisplayDetails` text DEFAULT NULL,
  `9_11_surveyInfo` enum('Yes','No') DEFAULT NULL,
  `9_11_1_surveyInfoDetails` text DEFAULT NULL,
  `9_12_dataBreachesInfo` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `section_a_form`
--
ALTER TABLE `section_a_form`
  ADD PRIMARY KEY (`cin`);

--
-- Indexes for table `section_b_form`
--
ALTER TABLE `section_b_form`
  ADD PRIMARY KEY (`cin`);

--
-- Indexes for table `section_c_form`
--
ALTER TABLE `section_c_form`
  ADD PRIMARY KEY (`cin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
