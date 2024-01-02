<?php
session_start();

include_once '../connection.php'; // Correct the include statement

// Function to check if the provided CIN is unique for section_a_form (replace with your database logic)
function isCINUnique_sec_A($cin, $pdo) {
    $query = $pdo->prepare("SELECT COUNT(*) FROM section_a_form WHERE cin = :cin");
    $query->bindParam(':cin', $cin, PDO::PARAM_STR);
    $query->execute();

    $count = $query->fetchColumn();

    return $count === 0;
}

// Function to check if the provided CIN is unique for section_b_form (replace with your database logic)
function isCINUnique_sec_B($cin, $pdo) {
    $query = $pdo->prepare("SELECT COUNT(*) FROM section_b_form WHERE cin = :cin");
    $query->bindParam(':cin', $cin, PDO::PARAM_STR);
    $query->execute();

    $count = $query->fetchColumn();

    return $count === 0;
}

function isCINUnique_sec_C($cin, $pdo) {
    $query = $pdo->prepare("SELECT COUNT(*) FROM section_c_form WHERE cin = :cin");
    $query->bindParam(':cin', $cin, PDO::PARAM_STR);
    $query->execute();

    $count = $query->fetchColumn();

    return $count === 0;
}

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    // Check if CIN is set in the session
    if (isset($_SESSION['cin'])) {
        $cin = $_SESSION['cin'];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $response = [];
        $response['status'] = 'failure'; // Default status

        if (!isCINUnique_sec_A($cin, $pdo)) {
            if (!isCINUnique_sec_B($cin, $pdo)) {
                if (isCINUnique_sec_C($cin, $pdo)) {
                    // Principle 1
                        //ESSENTIAL INDICATORS
                        $coverage = implode(', ', $_POST["coverage"]);
                        $details = implode(', ', $_POST["details"]);
                        $appeal = implode(', ', $_POST["appeal"]);

                        $antiCorruptionPolicy = $_POST["antiCorruptionPolicy"];
                        $disciplinaryAction = implode(', ', $_POST["disciplinaryAction"]);
                        $conflictComplaints = implode(', ', $_POST["conflictComplaints"]);
                        
                        $correctiveAction = $_POST["correctiveAction"];
                       
                        //LEADERSHIP INDICATORS
                        $awarenessProgrammes = implode(', ', $_POST["awarenessProgrammes"]);
                        $conflictOfInterest = $_POST["conflictOfInterest"];
                        $conflictDetails = $_POST["conflictDetails"];
                    
                    // Principle 2
                        //ESSENTIAL INDICATORS
                        $rdPercentage = implode(', ', $_POST["rdPercentage"]);
                        $sustainableSourcing2 = $_POST["sustainableSourcing2"];
                        //removed
                        $reclaimProcesses2 = $_POST["reclaimProcesses2"];
                        
                        $eprApplicable = $_POST["eprApplicable"];
                        $eprCollectionPlan = $_POST["eprCollectionPlan"];
                        //LEADERSHIP INDICATORS
                        $lcaConducted2 = implode(', ', $_POST["lcaConducted2"]);
                        $concernsMitigation2 = implode(', ', $_POST["concernsMitigation2"]);
                        $recycledPercentage2 = implode(', ', $_POST["recycledPercentage2"]);

                        $reclaimedProducts2 = implode(', ', $_POST["reclaimedProducts2"]);
                        $reclaimedPercentages2 = implode(', ', $_POST["reclaimedPercentages2"]);

                    // Principle 3
                        //ESSENTIAL INDICATORS
                        $employeeWellbeingDetails = implode(', ', $_POST["employeeWellbeingDetails"]);
                        $workerWellbeingDetails = implode(', ', $_POST["workerWellbeingDetails"]);
                        $retirementBenefitsDetails = implode(', ', $_POST["retirementBenefitsDetails"]);
                        
                        $accessibilitySteps = $_POST["accessibilitySteps"];
                        $equalOpportunityLink = $_POST["equalOpportunityLink"];
                        $returnRetentionRates = implode(', ', $_POST["returnRetentionRates"]);

                        $grievanceMechanismDetails = implode(', ', $_POST["grievanceMechanismDetails"]);
                        $unionMembershipPercentage = implode(', ', $_POST["unionMembershipPercentage"]);
                        $trainingDetails = implode(', ', $_POST["trainingDetails"]);
                                                  
                        $performanceReviewDetails = implode(', ', $_POST["performanceReviewDetails"]);
                        $healthSafetyManagementSystemChoice = $_POST["healthSafetyManagementSystemChoice"];
                        $healthSafetyManagementSystemDetails = $_POST["healthSafetyManagementSystemDetails"];

                        $workplaceSafetyMeasures2 = $_POST["workplaceSafetyMeasures2"];
                        $healthSafetyManagementSystem3 = $_POST["healthSafetyManagementSystem3"];
                        $healthSafetyManagementSystem4 = $_POST["healthSafetyManagementSystem4"];

                        $workplaceSafetyMeasures = implode(', ', $_POST["workplaceSafetyMeasures"]);
                        $workplaceSafetyMeasures12 = $_POST["workplaceSafetyMeasures12"];
                        $complaintsemployees = implode(', ', $_POST["complaintsemployees"]);
                            
                        $assesmentyr = implode(', ', $_POST["assesmentyr"]);
                        $workplaceSafetyMeasures15 = $_POST["workplaceSafetyMeasures15"];
                            
                        //LEADERSHIP INDICATORS
                        $lifeInsuranceCompensationa = $_POST["lifeInsuranceCompensationa"];
                        $lifeInsuranceCompensationdetailsa = $_POST["lifeInsuranceCompensationdetailsa"];
                        $lifeInsuranceCompensationb = $_POST["lifeInsuranceCompensationb"];
                            
                        $lifeInsuranceCompensationdetailsb = $_POST["lifeInsuranceCompensationdetailsb"];
                        $statutoryDuesMeasures = $_POST["statutoryDuesMeasures"];
                        $workRelatedInjuryRehabilitation = implode(', ', $_POST["workRelatedInjuryRehabilitation"]);
                            
                        $transitionAssistanceProgram = $_POST["transitionAssistanceProgram"];
                        $rdPercentageassesment = implode(', ', $_POST["rdPercentageassesment"]);
                        $correctiveactions = $_POST["correctiveactions"];

                    // Principle 4
                        //ESSENTIAL INDICATORS
                        $stakeholderIdentificationDetails = $_POST["stakeholderIdentificationDetails"];
                        $stakeholderEngagementDetails = implode(', ', $_POST["stakeholderEngagementDetails"]);
                            
                        //LEADERSHIP INDICATORS
                        $boardConsultationDetails = $_POST["boardConsultationDetails"];
                        $stakeholderConsultationPolicy = $_POST["stakeholderConsultationPolicy"];
                        $vulnerableEngagementDetails = $_POST["vulnerableEngagementDetails"];

                    // Principle 5
                        //ESSENTIAL INDICATORS
                        $humanRightsTrainingDetails = implode(', ', $_POST['humanRightsTrainingDetails']);
                        $wageDetails = implode(', ', $_POST['wageDetails']);
                        $remunerationDetails = implode(', ', $_POST['remunerationDetails']);
                            
                        $humanRightsResponsible = $_POST['humanRightsResponsible'];
                        $grievanceMechanism = $_POST['grievanceMechanism'];
                        $complaintsDetails = implode(', ', $_POST['complaintsDetails']);
                           
                        $discriminationProtectionMechanisms = $_POST['discriminationProtectionMechanisms'];
                        $humanRightsInBusiness = $_POST['humanRightsInBusiness'];
                        $assessedPlantPercentage = implode(', ', $_POST['assessedPlantPercentage']);
                            
                        $correctiveActionsForAssessments = $_POST['correctiveActionsForAssessments'];
                          
                        //LEADERSHIP INDICATORS
                        $businessProcessModifications = $_POST['businessProcessModifications'];
                        $humanRightsDueDiligence = $_POST['humanRightsDueDiligence'];
                        $premiseAccessibility = $_POST['premiseAccessibility'];
                            
                        $valueChainAssessment = implode(', ', $_POST['valueChainAssessment']);
                        $correctiveActionsFromAssessments = $_POST['correctiveActionsFromAssessments'];

                    // Principle 6
                        //ESSENTIAL INDICATORS
                        $energyConsumptionDetails = implode(', ', $_POST['energyConsumptionDetails']);
                        $energyExternalAgency = $_POST['energyExternalAgency'];
                        $energyExternalAgencyName = $_POST['energyExternalAgencyName'];
                            
                        $designatedConsumers = $_POST['designatedConsumers'];
                        $designatedConsumersDetails = $_POST['designatedConsumersDetails'];
                        $waterWithdrawalDetails = implode(', ', $_POST['waterWithdrawalDetails']);
                            
                        $waterExternalAgency = $_POST['waterExternalAgency'];
                        $waterExternalAgencyName = $_POST['waterExternalAgencyName'];
                        $liquidDischarge = $_POST['liquidDischarge'];
                            
                        $liquidDischargeDetails = $_POST['liquidDischargeDetails'];
                        $airEmissionDetails = implode(', ', $_POST['airEmissionDetails']);
                        $airExternalAgency = $_POST['airExternalAgency'];
                            
                        $airExternalAgencyName = $_POST['airExternalAgencyName'];
                        $greenhouseGasEmissionDetails = implode(', ', $_POST['greenhouseGasEmissionDetails']);
                        $ghgExternalAgency = $_POST['ghgExternalAgency'];
                            
                        $ghgExternalAgencyName = $_POST['ghgExternalAgencyName'];
                        $ghgReductionProject = $_POST['ghgReductionProject'];
                        $ghgReductionProjectDetails = $_POST['ghgReductionProjectDetails'];
                            
                        $wasteDetails = implode(', ', $_POST['wasteDetails']);
                        $wasteExternalAgency = $_POST['wasteExternalAgency'];
                        $wasteExternalAgencyName = $_POST['wasteExternalAgencyName'];
                          
                        $wasteManagementPractices = $_POST['wasteManagementPractices'];
                        $ecologicalAreaOperations = implode(', ', $_POST['ecologicalAreaOperations']);
                        //removed
                            
                        $eiaExternalAgency = implode(', ', $_POST['eiaExternalAgency']);
                        $environmentalComplianceStatus = implode(', ', $_POST['environmentalComplianceStatus']);
                            
                        //LEADERSHIP INDICATORS
                        $totalenergyconsumed = implode(', ', $_POST['totalenergyconsumed']);
                        $totalenergyconsumedAgency = $_POST['totalenergyconsumedAgency'];
                        $totalenergyconsumedAgencyName = $_POST['totalenergyconsumedAgencyName'];
                            
                        $waterdischarged = implode(', ', $_POST['waterdischarged']);
                        $waterdischargedAgency = $_POST['waterdischargedAgency'];
                        $waterdischargedAgencyName = $_POST['waterdischargedAgencyName'];
                        
                        $waterstress = implode(', ', $_POST['waterstress']);
                        $waterstressAgency = $_POST['waterstressAgency'];
                        $waterstressAgencyName = $_POST['waterstressAgencyName'];
                            
                        $totalscope = implode(', ', $_POST['totalscope']);
                        $totalscopeAgency = $_POST['totalscopeAgency']; 
                        $totalscopeAgencyName = $_POST['totalscopeAgencyName'];
                            
                        $significantdirect = $_POST['significantdirect'];
                        $resourceefficiency = implode(', ', $_POST['resourceefficiency']);
                        $disastermanagement = $_POST['disastermanagement'];
                            
                        $valuechainentity = $_POST['valuechainentity'];
                        $valuechainbusiness = $_POST['valuechainbusiness'];

                    // Principle 7
                        //ESSENTIAL INDICATORS
                        $noTradeAffiliations = $_POST['noTradeAffiliations'];
                        $tradeAffiliations = implode(', ', $_POST['tradeAffiliations']);
                        $antiCompetitiveActions = implode(', ', $_POST['antiCompetitiveActions']);
                        //LEADERSHIP INDICATORS
                        $publicPolicyAdvocacy = implode(', ', $_POST['publicPolicyAdvocacy']);

                    // Principle 8
                       //ESSENTIAL INDICATORS
                       $socialImpactAssessments = implode(', ', $_POST['socialImpactAssessments']);
                       $rehabilitationProjects = implode(', ', $_POST['rehabilitationProject']);
                       $grievanceRedressMechanism = $_POST['grievanceRedressMechanism'];
                       $inputMaterialPercentage = implode(', ', $_POST['inputMaterialPercentage']);
                       //LEADERSHIP INDICATORS
                       $socialImpactActions = implode(', ', $_POST['socialImpactActions']);
                       $csrAspirationalDistricts = implode(', ', $_POST['csrAspirationalDistricts']);
                       $procurementPolicyMarginalized = $_POST['procurementPolicyMarginalized'];
                       $intellectualPropertiesBenefits = implode(', ', $_POST['intellectualPropertiesBenefits']);
                       $correctiveActionsIntellectualProperty = implode(', ', $_POST['correctiveActionsIntellectualProperty']);
                       $csrProjectBeneficiaries = implode(', ', $_POST['csrProjectBeneficiaries']);

                     // Principle 9
                       //ESSENTIAL INDICATORS
                       $consumerFeedbackMechanism = $_POST['consumerFeedbackMechanism'];
                       $productTurnover = implode(', ', $_POST['productTurnover']);
                       $consumerComplaints = implode(', ', $_POST['consumerComplaints']);
                       $productRecallInstances = implode(', ', $_POST['productRecallInstances']);
                       $cyberSecurityPolicy = $_POST['cyberSecurityPolicy'];
                       $cyberSecurityPolicyDetails = $_POST['cyberSecurityPolicyDetails'];
                       $correctiveActions = $_POST['correctiveActions'];
                       //LEADERSHIP INDICATORS
                       $infoChannels = $_POST['infoChannels'];
                       $consumerEducation = $_POST['consumerEducation'];
                       $serviceDisruptionInfo = $_POST['serviceDisruptionInfo'];
                       $productInfoDisplay = $_POST['productInfoDisplay'];
                       $productInfoDisplayDetails = $_POST['productInfoDisplayDetails'];
                       $surveyInfo = $_POST['surveyInfo'];
                       $surveyInfoDetails = $_POST['surveyInfoDetails'];
                       $dataBreachesInfo = $_POST['dataBreachesInfo'];

                        
                    $data = [
                        'cin' => $cin,
                        // Principle 1
                            //ESSENTIAL INDICATORS
                            '1_1_coverage' => $coverage,
                            '1_2_details' => $details,
                            '1_3_appeal' => $appeal,
                            
                            '1_4_antiCorruptionPolicy' => $antiCorruptionPolicy,
                            '1_5_disciplinaryAction' => $disciplinaryAction,
                            '1_6_conflictComplaints' => $conflictComplaints,
                            
                            '1_7_correctiveAction' => $correctiveAction,
                            //LEADERSHIP INDICATORS
                            '1_8_awarenessProgrammes' => $awarenessProgrammes,
                            '1_9_conflictOfInterest' => $conflictOfInterest,
                            '1_10_conflictDetails' => $conflictDetails,
                        
                        // Principle 2
                            //ESSENTIAL INDICATORS
                            '2_1_rdPercentage' => $rdPercentage,
                            '2_2_sustainableSourcing2' => $sustainableSourcing2,
                            //removed
                            '2_4_reclaimProcesses2' => $reclaimProcesses2,
                            '2_5_eprApplicable' => $eprApplicable,
                            '2_6_eprCollectionPlan' => $eprCollectionPlan,
                            //LEADERSHIP INDICATORS
                            '2_7_lcaConducted2' => $lcaConducted2,
                            '2_8_concernsMitigation2' => $concernsMitigation2,
                            '2_9_recycledPercentage2' => $recycledPercentage2,
                            
                            '2_10_reclaimedProducts2' => $reclaimedProducts2,
                            '2_11_reclaimedPercentages2' => $reclaimedPercentages2,
                        
                        // Principle 3
                            //ESSENTIAL INDICATORS
                            '3_1_employeeWellbeingDetails' => $employeeWellbeingDetails,
                            '3_2_workerWellbeingDetails' => $workerWellbeingDetails,
                            '3_3_retirementBenefitsDetails' => $retirementBenefitsDetails,

                            '3_5_accessibilitySteps' => $accessibilitySteps,
                            '3_6_equalOpportunityLink' => $equalOpportunityLink,
                            '3_7_returnRetentionRates' => $returnRetentionRates,
                            
                            '3_8_grievanceMechanismDetails' => $grievanceMechanismDetails,
                            '3_9_unionMembershipPercentage' => $unionMembershipPercentage,
                            '3_10_trainingDetails' => $trainingDetails,
                            
                            '3_11_performanceReviewDetails' => $performanceReviewDetails,
                            '3_12_healthSafetyManagementSystemChoice' => $healthSafetyManagementSystemChoice,
                            '3_13_healthSafetyManagementSystemDetails' => $healthSafetyManagementSystemDetails,
                            
                            '3_14_workplaceSafetyMeasures2' => $workplaceSafetyMeasures2,     //change name
                            '3_15_workplaceSafetyMeasures' => $workplaceSafetyMeasures,        //change name
                            '3_16_healthSafetyManagementSystem3' => $healthSafetyManagementSystem3, 
                            
                            '3_17_healthSafetyManagementSystem4' => $healthSafetyManagementSystem4,
                            '3_18_workplaceSafetyMeasures12' => $workplaceSafetyMeasures12, //change name
                            '3_19_workplaceSafetyMeasures15' => $workplaceSafetyMeasures15, //change name
                            
                            '3_20_complaintsemployees' => $complaintsemployees,
                            '3_21_assesmentyr' => $assesmentyr,
                            
                            //LEADERSHIP INDICATORS
                            '3_22_lifeInsuranceCompensationa' => $lifeInsuranceCompensationa,
                            '3_23_lifeInsuranceCompensationdetailsa' => $lifeInsuranceCompensationdetailsa,
                            '3_24_lifeInsuranceCompensationb' => $lifeInsuranceCompensationb,
                            
                            '3_25_lifeInsuranceCompensationdetailsb' => $lifeInsuranceCompensationdetailsb,
                            '3_26_statutoryDuesMeasures' => $statutoryDuesMeasures,
                            '3_27_workRelatedInjuryRehabilitation' => $workRelatedInjuryRehabilitation,
                            
                            '3_28_transitionAssistanceProgram' => $transitionAssistanceProgram,
                            '3_29_rdPercentageassesment' => $rdPercentageassesment,
                            '3_30_correctiveactions' => $correctiveactions,

                        // Principle 4
                            //ESSENTIAL INDICATORS
                            '4_1_stakeholderIdentificationDetails' => $stakeholderIdentificationDetails,
                            '4_2_stakeholderEngagementDetails' => $stakeholderEngagementDetails,
                            //LEADERSHIP INDICATORS
                            '4_3_boardConsultationDetails' => $boardConsultationDetails,
                            '4_4_stakeholderConsultationPolicy' => $stakeholderConsultationPolicy,
                            '4_5_vulnerableEngagementDetails' => $vulnerableEngagementDetails,

                        // Principle 5
                            //ESSENTIAL INDICATORS    
                            '5_1_humanRightsTrainingDetails' => $humanRightsTrainingDetails,
                            '5_2_wageDetails' => $wageDetails,
                            '5_3_remunerationDetails' => $remunerationDetails,
                            
                            '5_4_humanRightsResponsible' => $humanRightsResponsible,
                            '5_5_grievanceMechanism' => $grievanceMechanism,
                            '5_6_complaintsDetails' => $complaintsDetails,
                            
                            '5_7_discriminationProtectionMechanisms' => $discriminationProtectionMechanisms,
                            '5_8_humanRightsInBusiness' => $humanRightsInBusiness,
                            '5_9_assessedPlantPercentage' => $assessedPlantPercentage,
                            
                            '5_10_correctiveActionsForAssessments' => $correctiveActionsForAssessments,
                            
                            //LEADERSHIP INDICATORS
                            '5_11_businessProcessModifications' => $businessProcessModifications,
                            '5_12_humanRightsDueDiligence' => $humanRightsDueDiligence,
                            '5_13_premiseAccessibility' => $premiseAccessibility,
                            
                            '5_14_valueChainAssessment' => $valueChainAssessment,
                            '5_15_correctiveActionsFromAssessments' => $correctiveActionsFromAssessments,

                         // Principle 6
                             //ESSENTIAL INDICATORS   
                             '6_1_energyConsumptionDetails' => $energyConsumptionDetails,
                             '6_2_energyExternalAgency' => $energyExternalAgency,
                             '6_3_energyExternalAgencyName' => $energyExternalAgencyName,
                             
                             '6_4_designatedConsumers' => $designatedConsumers,
                             '6_5_designatedConsumersDetails' => $designatedConsumersDetails,
                             '6_6_waterWithdrawalDetails' => $waterWithdrawalDetails,
                             
                             '6_7_waterExternalAgency' => $waterExternalAgency,
                             '6_8_waterExternalAgencyName' => $waterExternalAgencyName,
                             '6_9_liquidDischarge' => $liquidDischarge,
                             
                             '6_10_liquidDischargeDetails' => $liquidDischargeDetails,
                             '6_11_airEmissionDetails' => $airEmissionDetails,
                             '6_12_airExternalAgency' => $airExternalAgency,
                             
                             '6_13_airExternalAgencyName' => $airExternalAgencyName,
                             '6_14_greenhouseGasEmissionDetails' => $greenhouseGasEmissionDetails,
                             '6_15_ghgExternalAgency' => $ghgExternalAgency,
                             
                             '6_16_ghgExternalAgencyName' => $ghgExternalAgencyName,
                             '6_17_ghgReductionProject' => $ghgReductionProject,
                             '6_18_ghgReductionProjectDetails' => $ghgReductionProjectDetails,
                             
                             '6_19_wasteDetails' => $wasteDetails,
                             '6_20_wasteExternalAgency' => $wasteExternalAgency,
                             '6_21_wasteExternalAgencyName' => $wasteExternalAgencyName,
                             
                             '6_22_wasteManagementPractices' => $wasteManagementPractices,
                             '6_23_ecologicalAreaOperations' => $ecologicalAreaOperations,
                             //removed
                             
                             '6_26_eiaExternalAgency' => $eiaExternalAgency,
                             '6_30_environmentalComplianceStatus' => $environmentalComplianceStatus,
                             
                             //LEADERSHIP INDICATORS
                             '6_31_totalenergyconsumed' => $totalenergyconsumed,
                             '6_32_totalenergyconsumedAgency' => $totalenergyconsumedAgency,
                             '6_33_totalenergyconsumedAgencyName' => $totalenergyconsumedAgencyName,
                             
                             '6_34_waterdischarged' =>  $waterdischarged,
                             '6_35_waterdischargedAgency' => $waterdischargedAgency,
                             '6_36_waterdischargedAgencyName' => $waterdischargedAgencyName,
                             
                             '6_37_waterstress' => $waterstress,
                             '6_38_waterstressAgency' => $waterstressAgency,  //name changed
                             '6_39_waterstressAgencyName' => $waterstressAgencyName, //name changed
                             
                             '6_40_totalscope' => $totalscope,
                             '6_41_totalscopeAgency' => $totalscopeAgency,  //added
                             '6_42_totalscopeAgencyName' => $totalscopeAgencyName,
                             
                             '6_43_significantdirect' => $significantdirect,
                             '6_44_resourceefficiency' => $resourceefficiency,
                             '6_45_disastermanagement' => $disastermanagement,
                             
                             '6_46_valuechainentity' => $valuechainentity,
                             '6_47_valuechainbusiness' => $valuechainbusiness,  //name change

                         // Principle 7
                            //ESSENTIAL INDICATORS
                            '7_1_noTradeAffiliations' => $noTradeAffiliations,
                            '7_2_tradeAffiliations' => $tradeAffiliations,
                            
                            '7_3_antiCompetitiveActions' => $antiCompetitiveActions,
                             //LEADERSHIP INDICATORS
                            '7_4_publicPolicyAdvocacy' => $publicPolicyAdvocacy,

                         // Principle 8
                            //ESSENTIAL INDICATORS
                            '8_1_socialImpactAssessments' => $socialImpactAssessments,
                            '8_2_rehabilitationProjects' => $rehabilitationProjects,
                            '8_3_grievanceRedressMechanism' => $grievanceRedressMechanism,
                            '8_4_inputMaterialPercentage' => $inputMaterialPercentage,
                            //LEADERSHIP INDICATORS
                            '8_5_socialImpactActions' => $socialImpactActions,
                            '8_6_csrAspirationalDistricts' => $csrAspirationalDistricts,
                            '8_7_procurementPolicyMarginalized' => $procurementPolicyMarginalized,
                            '8_8_intellectualPropertiesBenefits' => $intellectualPropertiesBenefits,
                            '8_9_correctiveActionsIntellectualProperty' => $correctiveActionsIntellectualProperty,
                            '8_10_csrProjectBeneficiaries' => $csrProjectBeneficiaries,

                            // Principle 9
                           //ESSENTIAL INDICATORS
                           '9_1_consumerFeedbackMechanism' => $consumerFeedbackMechanism,
                           '9_2_productTrunover' => $productTurnover,
                           '9_3_consumerComplaints' => $consumerComplaints,
                           '9_4_productRecallInstances' => $productRecallInstances,
                           '9_5_cyberSecurityPolicy' => $cyberSecurityPolicy,
                           '9_5_1_cyberSecurityPolicyDetails' => $cyberSecurityPolicyDetails,
                           '9_6_correctiveActions' => $correctiveActions,
                           //LEADERSHIP INDICATORS
                           '9_7_infoChannels' => $infoChannels,
                           '9_8_consumerEducation' => $consumerEducation,
                           '9_9_serviceDisruptionInfo' => $serviceDisruptionInfo,
                           '9_10_productInfoDisplay' => $productInfoDisplay,
                           '9_10_1_productInfoDisplayDetails' => $productInfoDisplayDetails,
                           '9_11_surveyInfo' => $surveyInfo,
                           '9_11_1_surveyInfoDetails' => $surveyInfoDetails,
                           '9_12_dataBreachesInfo' => $dataBreachesInfo
                        ];

                    $columns = implode(', ', array_keys($data));
                    $placeholders = implode(', ', array_fill(0, count($data), '?'));

                    $sql = "INSERT INTO section_c_form ($columns) VALUES ($placeholders)";

                    $stmt = $pdo->prepare($sql);

                    $stmt->execute(array_values($data));

                    $response['status'] = 'success';
                    $response['message'] = 'Section C: Form submitted successfully';
                } else {
                    $response['status'] = 'failure1';
                    $response['message'] = 'Section C: CIN already exists';
                }
            } else {
                $response['status'] = 'failure2';
                $response['message'] = 'Fill section B form.';
            }
        } else {
            $response['status'] = 'failure3';
            $response['message'] = 'Fill section A form.';
        }
    }
} catch (PDOException $e) {
    $_SESSION['error'] = "Database error: " . $e->getMessage();
    $response['status'] = 'error';
    $response['message'] = 'Database error: ' . $e->getMessage();
}
header('Content-Type: application/json');
echo json_encode($response);
?>