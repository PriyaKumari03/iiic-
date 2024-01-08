-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 08, 2024 at 12:54 PM
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
-- Table structure for table `section_c_form`
--

DROP TABLE IF EXISTS `section_c_form`;
CREATE TABLE IF NOT EXISTS `section_c_form` (
  `cin` varchar(21) NOT NULL,
  `1_1_coverage` text,
  `1_2_details` text,
  `1_3_appeal` text,
  `1_4_antiCorruptionPolicy` text,
  `1_5_disciplinaryAction` text,
  `1_6_conflictComplaints` text,
  `1_7_correctiveAction` text,
  `1_8_awarenessProgrammes` text,
  `1_9_conflictOfInterest` text,
  `1_10_conflictDetails` text,
  `2_1_rdPercentage` text,
  `2_2_sustainableSourcing2` text,
  `2_3_sustainableSourcingPercentage` text,
  `2_4_reclaimProcesses2` text,
  `2_5_eprApplicable` text,
  `2_6_eprCollectionPlan` text,
  `2_7_lcaConducted2` text,
  `2_8_concernsMitigation2` text,
  `2_9_recycledPercentage2` text,
  `2_10_reclaimedProducts2` text,
  `2_11_reclaimedPercentages2` text,
  `3_1_employeeWellbeingDetails` text,
  `3_2_workerWellbeingDetails` text,
  `3_3_retirementBenefitsDetails` text,
  `3_5_accessibilitySteps` text,
  `3_6_equalOpportunityLink` text,
  `3_7_returnRetentionRates` text,
  `3_8_grievanceMechanismDetails` text,
  `3_9_unionMembershipPercentage` text,
  `3_10_trainingDetails` text,
  `3_11_performanceReviewDetails` text,
  `3_12_healthSafetyManagementSystemChoice` text,
  `3_13_healthSafetyManagementSystemDetails` text,
  `3_14_workplaceSafetyMeasures2` text,
  `3_15_workplaceSafetyMeasures` text,
  `3_16_healthSafetyManagementSystem3` text,
  `3_17_healthSafetyManagementSystem4` text,
  `3_18_workplaceSafetyMeasures12` text,
  `3_19_workplaceSafetyMeasures15` text,
  `3_20_complaintsemployees` text,
  `3_21_assesmentyr` text,
  `3_22_lifeInsuranceCompensationa` text,
  `3_23_lifeInsuranceCompensationdetailsa` text,
  `3_24_lifeInsuranceCompensationb` text,
  `3_25_lifeInsuranceCompensationdetailsb` text,
  `3_26_statutoryDuesMeasures` text,
  `3_27_workRelatedInjuryRehabilitation` text,
  `3_28_transitionAssistanceProgram` text,
  `3_29_rdPercentageassesment` text,
  `3_30_correctiveactions` text,
  `4_1_stakeholderIdentificationDetails` text,
  `4_2_stakeholderEngagementDetails` text,
  `4_3_boardConsultationDetails` text,
  `4_4_stakeholderConsultationPolicy` text,
  `4_5_vulnerableEngagementDetails` text,
  `5_1_humanRightsTrainingDetails` text,
  `5_2_wageDetails` text,
  `5_3_remunerationDetails` text,
  `5_4_humanRightsResponsible` text,
  `5_5_grievanceMechanism` text,
  `5_6_complaintsDetails` text,
  `5_7_discriminationProtectionMechanisms` text,
  `5_8_humanRightsInBusiness` text,
  `5_9_assessedPlantPercentage` text,
  `5_10_correctiveActionsForAssessments` text,
  `5_11_businessProcessModifications` text,
  `5_12_humanRightsDueDiligence` text,
  `5_13_premiseAccessibility` text,
  `5_14_valueChainAssessment` text,
  `5_15_correctiveActionsFromAssessments` text,
  `6_1_energyConsumptionDetails` text,
  `6_2_energyExternalAgency` text,
  `6_3_energyExternalAgencyName` text,
  `6_4_designatedConsumers` text,
  `6_5_designatedConsumersDetails` text,
  `6_6_waterWithdrawalDetails` text,
  `6_7_waterExternalAgency` text,
  `6_8_waterExternalAgencyName` text,
  `6_9_liquidDischarge` text,
  `6_10_liquidDischargeDetails` text,
  `6_11_airEmissionDetails` text,
  `6_12_airExternalAgency` text,
  `6_13_airExternalAgencyName` text,
  `6_14_greenhouseGasEmissionDetails` text,
  `6_15_ghgExternalAgency` text,
  `6_16_ghgExternalAgencyName` text,
  `6_17_ghgReductionProject` text,
  `6_18_ghgReductionProjectDetails` text,
  `6_19_wasteDetails` text,
  `6_20_wasteExternalAgency` text,
  `6_21_wasteExternalAgencyName` text,
  `6_22_wasteManagementPractices` text,
  `6_23_ecologicalAreaOperations` text,
  `6_26_eiaExternalAgency` text,
  `6_30_environmentalComplianceStatus` text,
  `6_31_totalenergyconsumed` text,
  `6_32_totalenergyconsumedAgency` text,
  `6_33_totalenergyconsumedAgencyName` text,
  `6_34_waterdischarged` text,
  `6_35_waterdischargedAgency` text,
  `6_36_waterdischargedAgencyName` text,
  `6_37_waterstress` text,
  `6_38_waterstressAgency` text,
  `6_39_waterstressAgencyName` text,
  `6_40_totalscope` text,
  `6_41_totalscopeAgency` text,
  `6_42_totalscopeAgencyName` text,
  `6_43_significantdirect` text,
  `6_44_resourceefficiency` text,
  `6_45_disastermanagement` text,
  `6_46_valuechainentity` text,
  `6_47_valuechainbusiness` text,
  `7_1_noTradeAffiliations` text,
  `7_2_tradeAffiliations` text,
  `7_3_antiCompetitiveActions` text,
  `7_4_publicPolicyAdvocacy` text,
  `8_1_socialImpactAssessments` text,
  `8_2_rehabilitationProjects` text,
  `8_3_grievanceRedressMechanism` text,
  `8_4_inputMaterialPercentage` text,
  `8_5_socialImpactActions` text,
  `8_6_csrAspirationalDistricts` text,
  `8_7_procurementPolicyMarginalized` text,
  `8_8_intellectualPropertiesBenefits` text,
  `8_9_correctiveActionsIntellectualProperty` text,
  `8_10_csrProjectBeneficiaries` text,
  `9_1_consumerFeedbackMechanism` text,
  `9_2_productTrunover` text,
  `9_3_consumerComplaints` text,
  `9_4_productRecallInstances` text,
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
