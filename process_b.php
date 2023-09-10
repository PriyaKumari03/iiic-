<?php
session_start();

$host = 'localhost';
$db   = 'iiic';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $policyQuestion = $_POST["policyQuestion"];
        $policyLink = $_POST["policyLink"];
        $procedureQuestion = $_POST["procedureQuestion"];
        $procedureLink = $_POST["procedureLink"];
        $valueChainQuestion = $_POST["valueChainQuestion"];
        $valueChainLink = $_POST["valueChainLink"];
        $standardsQuestion = $_POST["standardsQuestion"];
        $commitmentsQuestion = $_POST["commitmentsQuestion"];
        $performanceQuestion = $_POST["performanceQuestion"];
        $directorStatement = $_POST["directorStatement"];
        $authorityDetails = $_POST["authorityDetails"];
        $sustainabilityCommitteeQuestion = $_POST["sustainabilityCommitteeQuestion"];
        $committeeDetails = $_POST["committeeDetails"];
        $assessmentQuestion = $_POST["assessmentQuestion"];
        $agencyDetails = $_POST["agencyDetails"];
        $achievementsFilePath = null;

        if (isset($_FILES['uploadedFiles']) && is_array($_FILES['uploadedFiles']['error'])) {
            $uploadDir = 'uploads/';
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            $uploadedPaths = [];
            $totalFiles = count($_FILES['uploadedFiles']['name']);
    
            for ($i = 0; $i < $totalFiles; $i++) {
                if ($_FILES['uploadedFiles']['error'][$i] === 0) {
                    $uniqueFilename = uniqid() . '_' . $_FILES['uploadedFiles']['name'][$i];
                    $uploadFilePath = $uploadDir . $uniqueFilename;
            
                    if (move_uploaded_file($_FILES['uploadedFiles']['tmp_name'][$i], $uploadFilePath)) {
                        $uploadedPaths[] = $uploadFilePath;
                    } else {
                        $_SESSION['error'] = "Error uploading file: " . $_FILES['uploadedFiles']['name'][$i];
                        break;
                    }
                } else {
                    $_SESSION['error'] = "Error with file: " . $_FILES['uploadedFiles']['name'][$i];
                    break;
                }
            }
    
            $achievementsFilePath = implode(";", $uploadedPaths);
        } else {
            $_SESSION['error'] = "No files were uploaded or there was an error.";
        }

        $stmt = $pdo->prepare("
            INSERT INTO B_responses (
                policyQuestion, policyLink, procedureQuestion, procedureLink, 
                valueChainQuestion, valueChainLink, standardsQuestion, commitmentsQuestion,
                performanceQuestion, directorStatement, achievementsFile, authorityDetails, 
                sustainabilityCommitteeQuestion, committeeDetails, assessmentQuestion, agencyDetails
            ) VALUES (
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
            )
        ");

        $stmt->execute([
            $policyQuestion, $policyLink, $procedureQuestion, $procedureLink, 
            $valueChainQuestion, $valueChainLink, $standardsQuestion, $commitmentsQuestion,
            $performanceQuestion, $directorStatement, $achievementsFilePath, $authorityDetails, 
            $sustainabilityCommitteeQuestion, $committeeDetails, $assessmentQuestion, $agencyDetails
        ]);

        $_SESSION['message'] = "Section B successfully submitted.";
        header('Location: c.html');
        exit;
    }
} catch (PDOException $e) {
    $_SESSION['error'] = "Database error: " . $e->getMessage();
    header('Location: c.html');
    exit; 
}
?>
