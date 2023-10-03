-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 03, 2023 at 01:01 PM
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
-- Table structure for table `section_a_form`
--

DROP TABLE IF EXISTS `section_a_form`;
CREATE TABLE IF NOT EXISTS `section_a_form` (
  `cin` varchar(21) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `year` int DEFAULT NULL,
  `office_address` text,
  `corporate_address` text,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `reporting_fin_year` int DEFAULT NULL,
  `incorporation_certificate` text,
  `name_stock` varchar(255) DEFAULT NULL,
  `puc` varchar(255) DEFAULT NULL,
  `poc_name` varchar(255) DEFAULT NULL,
  `poc_phone` varchar(20) DEFAULT NULL,
  `poc_email` varchar(255) DEFAULT NULL,
  `rep_b` varchar(255) DEFAULT NULL,
  `doba` date DEFAULT NULL,
  `dops` date DEFAULT NULL,
  `nol` int DEFAULT NULL,
  `drm` varchar(255) DEFAULT NULL,
  `tote` varchar(255) DEFAULT NULL,
  `male` int DEFAULT NULL,
  `female` int DEFAULT NULL,
  `malet` int DEFAULT NULL,
  `femalet` int DEFAULT NULL,
  `p_no` int DEFAULT NULL,
  `tor` varchar(255) DEFAULT NULL,
  `holding` varchar(255) DEFAULT NULL,
  `subsidiary` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `csr` varchar(255) DEFAULT NULL,
  `gre` varchar(255) DEFAULT NULL,
  `overview` text,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `section_a_form`
--

INSERT INTO `section_a_form` (`cin`, `name`, `year`, `office_address`, `corporate_address`, `email`, `telephone`, `website`, `reporting_fin_year`, `incorporation_certificate`, `name_stock`, `puc`, `poc_name`, `poc_phone`, `poc_email`, `rep_b`, `doba`, `dops`, `nol`, `drm`, `tote`, `male`, `female`, `malet`, `femalet`, `p_no`, `tor`, `holding`, `subsidiary`, `ac`, `csr`, `gre`, `overview`) VALUES
('U74140DL2014PTC272628', 'Vought Industries', 2022, 'Bangalore', 'Bangalore', 'stan.edgar@gmail.com', '97653422678', 'https://www.vought.com', 2022, '../uploads/sec_A/651c0f63edc15_CERTIFICATE OF PRESENTATION-ICCS.pdf', 'BSE', '2000000', 'kjij', '76876876', 'lmaoaurlol@jingle.com', 'hahahahaJokesonyou', '0000-00-00', '0000-00-00', 0, 'fddsf', 'fdsdsf', 0, 0, 0, 0, 12, '343', '342', '454', 'dfsdfs', 'dsds', 'fddf', 'dfsds');

-- --------------------------------------------------------

--
-- Table structure for table `section_b_form`
--

DROP TABLE IF EXISTS `section_b_form`;
CREATE TABLE IF NOT EXISTS `section_b_form` (
  `cin` varchar(21) NOT NULL,
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
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `section_b_form`
--

INSERT INTO `section_b_form` (`cin`, `policyQuestion`, `policyLink`, `procedureQuestion`, `procedureLink`, `valueChainQuestion`, `valueChainLink`, `standardsQuestion`, `commitmentsQuestion`, `performanceQuestion`, `directorStatement`, `achievementsFile`, `authorityDetails`, `sustainabilityCommitteeQuestion`, `committeeDetails`, `assessmentQuestion`, `agencyDetails`) VALUES
('U74140DL2014PTC272628', 'Yes', 'https://www.lmao.com', 'No', '', 'No', '', 'huoihiuhihuo', 'bsfvs', 'vsfdfs', 'vsdsdv', '../uploads/sec_B/651c0f8bb2cfc_Meghashyam Vivek_ICCMST.pdf', 'vsvfsds', 'No', '', 'No', '');

-- --------------------------------------------------------

--
-- Table structure for table `section_c_form`
--

DROP TABLE IF EXISTS `section_c_form`;
CREATE TABLE IF NOT EXISTS `section_c_form` (
  `cin` varchar(21) NOT NULL,
  `1_1_coverage` int NOT NULL,
  `1_2_details` text NOT NULL,
  `1_3_appeal` text,
  `1_4_antiCorruptionPolicy` text,
  `1_5_disciplinaryAction` int NOT NULL,
  `1_6_conflictComplaints` text,
  `1_7_correctiveAction` text,
  `1_8_awarenessProgrammes` text NOT NULL,
  `1_9_conflictOfInterest` enum('Yes','No') NOT NULL,
  `1_10_conflictDetails` text,
  `2_1_rdPercentage` float DEFAULT NULL,
  `2_2_sustainableSourcing2` enum('Yes','No') DEFAULT NULL,
  `2_3_sourcingPercentage2num` float DEFAULT NULL,
  `2_4_reclaimProcesses2` text,
  `2_5_eprApplicable` enum('Yes','No') DEFAULT NULL,
  `2_6_eprCollectionPlan` text,
  `2_7_lcaConducted2` enum('Yes','No') DEFAULT NULL,
  `2_8_lcaDetails` text,
  `2_9_concernsMitigation2` text,
  `2_10_recycledPercentage2` float DEFAULT NULL,
  `2_11_reclaimedProducts2` text,
  `2_12_reclaimedPercentages2` text,
  `3_1_employeeWellbeingDetails` text,
  `3_2_retirementBenefitsDetails` text,
  `3_3_accessibilityChoice` enum('Yes','No') DEFAULT NULL,
  `3_4_accessibilitySteps` text,
  `3_5_equalOpportunity` enum('Yes','No') DEFAULT NULL,
  `3_6_equalOpportunityLink` text,
  `3_7_returnRetentionRates` text,
  `3_8_grievanceMechanismDetails` text,
  `3_9_unionMembershipPercentage` text,
  `3_10_trainingDetails` text,
  `3_11_performanceReviewDetails` text,
  `3_12_healthSafetyManagementSystemChoice` enum('Yes','No') DEFAULT NULL,
  `3_13_healthSafetyManagementSystemDetails` text,
  `3_14_workplaceSafetyMeasures` text,
  `3_15_lifeInsuranceCompensation` enum('Yes','No') DEFAULT NULL,
  `3_16_statutoryDuesMeasures` text,
  `3_17_workRelatedInjuryRehabilitation` text,
  `3_18_transitionAssistanceProgram` enum('Yes','No') DEFAULT NULL,
  `4_1_stakeholderIdentificationDetails` text,
  `4_2_stakeholderEngagementDetails` text,
  `4_3_boardConsultationDetails` text,
  `4_4_stakeholderConsultationPolicy` enum('Yes','No') DEFAULT NULL,
  `4_5_sourcingPercentage` decimal(5,2) DEFAULT NULL,
  `4_6_vulnerableEngagementDetails` text,
  `4_7_productEndOfLifeDetails` text,
  `4_8_reclaimedProductPercentageDetails` text,
  `5_1_humanRightsTrainingDetails` text,
  `5_2_wageDetails` text,
  `5_3_remunerationDetails` text,
  `5_4_humanRightsResponsible` enum('Yes','No') DEFAULT NULL,
  `5_5_grievanceMechanism` text,
  `5_6_complaintsDetails` text,
  `5_7_discriminationProtectionMechanisms` text,
  `5_8_humanRightsInBusiness` enum('Yes','No') DEFAULT NULL,
  `5_9_assessedPlantPercentage` decimal(5,2) DEFAULT NULL,
  `5_10_correctiveActionsForAssessments` text,
  `5_11_businessProcessModifications` text,
  `5_12_humanRightsDueDiligence` text,
  `5_13_premiseAccessibility` enum('Yes','No') DEFAULT NULL,
  `5_14_valueChainAssessment` decimal(5,2) DEFAULT NULL,
  `5_15_correctiveActionsFromAssessments` text,
  `6_1_energyConsumptionDetails` text,
  `6_2_energyExternalAgency` enum('Yes','No') DEFAULT NULL,
  `6_3_energyExternalAgencyName` text,
  `6_4_designatedConsumers` enum('Yes','No') DEFAULT NULL,
  `6_5_designatedConsumersDetails` text,
  `6_6_waterWithdrawalDetails` text,
  `6_7_waterExternalAgency` enum('Yes','No') DEFAULT NULL,
  `6_8_waterExternalAgencyName` text,
  `6_9_liquidDischarge` enum('Yes','No') DEFAULT NULL,
  `6_10_liquidDischargeDetails` text,
  `6_11_airEmissionDetails` text,
  `6_12_airExternalAgency` enum('Yes','No') DEFAULT NULL,
  `6_13_airExternalAgencyName` text,
  `6_14_greenhouseGasEmissionDetails` text,
  `6_15_ghgExternalAgency` enum('Yes','No') DEFAULT NULL,
  `6_16_ghgExternalAgencyName` text,
  `6_17_ghgReductionProject` enum('Yes','No') DEFAULT NULL,
  `6_18_ghgReductionProjectDetails` text,
  `6_19_wasteDetails` text,
  `6_20_wasteExternalAgency` enum('Yes','No') DEFAULT NULL,
  `6_21_wasteExternalAgencyName` text,
  `6_22_wasteManagementPractices` text,
  `6_23_ecologicalAreaOperations` enum('Yes','No') DEFAULT NULL,
  `6_24_ecologicalAreaOperationsDetails` text,
  `6_25_environmentalImpactAssessmentDetails` text,
  `6_26_eiaExternalAgency` enum('Yes','No') DEFAULT NULL,
  `6_27_eiaExternalAgencyName` text,
  `6_28_eiaPublicDomain` enum('Yes','No') DEFAULT NULL,
  `6_29_eiaPublicDomainLink` text,
  `6_30_environmentalComplianceStatus` enum('Yes','No') DEFAULT NULL,
  `6_31_environmentalComplianceStatusDetails` text,
  `7_1_tradeAffiliations` text NOT NULL,
  `7_2_antiCompetitiveActions` enum('Yes','No') NOT NULL,
  `7_3_antiCompetitiveActionsDetails` text,
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
  `9_1_consumerFeedbackMechanism` text,
  `9_2_productTurnover` text,
  `9_3_consumerComplaints` text,
  `9_4_productRecallInstances` text,
  `9_5_cyberSecurityPolicy` enum('Yes','No') DEFAULT NULL,
  `9_5_1_cyberSecurityPolicyDetails` text,
  `9_6_correctiveActions` text,
  `9_7_infoChannels` text,
  `9_8_consumerEducation` text,
  `9_9_serviceDisruptionInfo` text,
  `9_10_productInfoDisplay` enum('Yes','No','NA') DEFAULT NULL,
  `9_10_1_productInfoDisplayDetails` text,
  `9_11_surveyInfo` enum('Yes','No') DEFAULT NULL,
  `9_11_1_surveyInfoDetails` text,
  `9_12_dataBreachesInfo` text,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `section_c_form`
--

INSERT INTO `section_c_form` (`cin`, `1_1_coverage`, `1_2_details`, `1_3_appeal`, `1_4_antiCorruptionPolicy`, `1_5_disciplinaryAction`, `1_6_conflictComplaints`, `1_7_correctiveAction`, `1_8_awarenessProgrammes`, `1_9_conflictOfInterest`, `1_10_conflictDetails`, `2_1_rdPercentage`, `2_2_sustainableSourcing2`, `2_3_sourcingPercentage2num`, `2_4_reclaimProcesses2`, `2_5_eprApplicable`, `2_6_eprCollectionPlan`, `2_7_lcaConducted2`, `2_8_lcaDetails`, `2_9_concernsMitigation2`, `2_10_recycledPercentage2`, `2_11_reclaimedProducts2`, `2_12_reclaimedPercentages2`, `3_1_employeeWellbeingDetails`, `3_2_retirementBenefitsDetails`, `3_3_accessibilityChoice`, `3_4_accessibilitySteps`, `3_5_equalOpportunity`, `3_6_equalOpportunityLink`, `3_7_returnRetentionRates`, `3_8_grievanceMechanismDetails`, `3_9_unionMembershipPercentage`, `3_10_trainingDetails`, `3_11_performanceReviewDetails`, `3_12_healthSafetyManagementSystemChoice`, `3_13_healthSafetyManagementSystemDetails`, `3_14_workplaceSafetyMeasures`, `3_15_lifeInsuranceCompensation`, `3_16_statutoryDuesMeasures`, `3_17_workRelatedInjuryRehabilitation`, `3_18_transitionAssistanceProgram`, `4_1_stakeholderIdentificationDetails`, `4_2_stakeholderEngagementDetails`, `4_3_boardConsultationDetails`, `4_4_stakeholderConsultationPolicy`, `4_5_sourcingPercentage`, `4_6_vulnerableEngagementDetails`, `4_7_productEndOfLifeDetails`, `4_8_reclaimedProductPercentageDetails`, `5_1_humanRightsTrainingDetails`, `5_2_wageDetails`, `5_3_remunerationDetails`, `5_4_humanRightsResponsible`, `5_5_grievanceMechanism`, `5_6_complaintsDetails`, `5_7_discriminationProtectionMechanisms`, `5_8_humanRightsInBusiness`, `5_9_assessedPlantPercentage`, `5_10_correctiveActionsForAssessments`, `5_11_businessProcessModifications`, `5_12_humanRightsDueDiligence`, `5_13_premiseAccessibility`, `5_14_valueChainAssessment`, `5_15_correctiveActionsFromAssessments`, `6_1_energyConsumptionDetails`, `6_2_energyExternalAgency`, `6_3_energyExternalAgencyName`, `6_4_designatedConsumers`, `6_5_designatedConsumersDetails`, `6_6_waterWithdrawalDetails`, `6_7_waterExternalAgency`, `6_8_waterExternalAgencyName`, `6_9_liquidDischarge`, `6_10_liquidDischargeDetails`, `6_11_airEmissionDetails`, `6_12_airExternalAgency`, `6_13_airExternalAgencyName`, `6_14_greenhouseGasEmissionDetails`, `6_15_ghgExternalAgency`, `6_16_ghgExternalAgencyName`, `6_17_ghgReductionProject`, `6_18_ghgReductionProjectDetails`, `6_19_wasteDetails`, `6_20_wasteExternalAgency`, `6_21_wasteExternalAgencyName`, `6_22_wasteManagementPractices`, `6_23_ecologicalAreaOperations`, `6_24_ecologicalAreaOperationsDetails`, `6_25_environmentalImpactAssessmentDetails`, `6_26_eiaExternalAgency`, `6_27_eiaExternalAgencyName`, `6_28_eiaPublicDomain`, `6_29_eiaPublicDomainLink`, `6_30_environmentalComplianceStatus`, `6_31_environmentalComplianceStatusDetails`, `7_1_tradeAffiliations`, `7_2_antiCompetitiveActions`, `7_3_antiCompetitiveActionsDetails`, `7_4_publicPolicyAdvocacy`, `8_1_socialImpactAssessments`, `8_2_rehabilitationProjects`, `8_3_grievanceRedressMechanism`, `8_4_inputMaterialPercentage`, `8_5_socialImpactActions`, `8_6_csrAspirationalDistricts`, `8_7_procurementPolicyMarginalized`, `8_8_intellectualPropertiesBenefits`, `8_9_correctiveActionsIntellectualProperty`, `8_10_csrProjectBeneficiaries`, `9_1_consumerFeedbackMechanism`, `9_2_productTurnover`, `9_3_consumerComplaints`, `9_4_productRecallInstances`, `9_5_cyberSecurityPolicy`, `9_5_1_cyberSecurityPolicyDetails`, `9_6_correctiveActions`, `9_7_infoChannels`, `9_8_consumerEducation`, `9_9_serviceDisruptionInfo`, `9_10_productInfoDisplay`, `9_10_1_productInfoDisplayDetails`, `9_11_surveyInfo`, `9_11_1_surveyInfoDetails`, `9_12_dataBreachesInfo`) VALUES
('U74140DL2014PTC272628', 12, 'wgefr', 'jonjkjn', 'nmlknlknm', 246, '', '', 'tw44wt', 'No', '', 18, 'No', 0, 'werfwe', 'No', 'efwewf', 'No', '', 'wfewfe', 28, 'fefe', '', 'nljnlkj', 'njnln', 'Yes', '', 'No', '', '', '', 'fewwef', 'ewffwe', 'fwewef', 'No', '', '', '', '', '', '', 'fewfew', '', '', '', '0.00', '', '', '', 'ewfew', 'ewfew', 'fewef', 'Yes', 'fewewf', 'efwewf', 'feewf', '', '34.00', 'svbs', 'sdfdsf', 'dfsdfs', 'No', '1.23', 'fvsv', 'svds', 'No', '', 'No', '', 'vsdsvd', '', '', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sdsdf', 'No', '', 'sdfsdf', 'fdssdf', 'dfsdfs', 'dfsfds', '10.00', 'dsfs', 'fdsafsd', 'sdffsd', 'dfsdfs', 'dfsdfs', 'dsfdfs', 'fddfs', 'dfsdsf', 'dfsdfs', 'dfsdfs', 'No', '', 'fdsdsf', 'dsfdfs', 'sdfds', 'sdfdsf', 'NA', '', 'Yes', '', 'dfsdfs');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
