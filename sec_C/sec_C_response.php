<?php
session_start();

include_once '../connection.php';

// Function to check if the provided CIN is unique (replace with your database logic)
function isCINUnique($cin, $pdo) {
    $query = $pdo->prepare("SELECT COUNT(*) FROM section_a_form WHERE cin = :cin");
    $query->bindParam(':cin', $cin, PDO::PARAM_STR);
    $query->execute();

    $count = $query->fetchColumn();

    return $count === 0;
}

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process data from Section 1 (PRINCIPLE 1)
        if (isset($_POST["coverage"]) && isset($_POST["details"]) && isset($_POST["disciplinaryAction"])) {
            //myform1
            $coverage = $_POST['coverage'];
            $details = $_POST['details'];
            $appeal = $_POST['appeal'];
            $antiCorruptionPolicy = $_POST['antiCorruptionPolicy'];
            $disciplinaryAction = $_POST['disciplinaryAction'];
            $conflictComplaints = $_POST['conflictComplaints'];
            $correctiveAction = $_POST['correctiveAction'];
            $awarenessProgrammes = $_POST['awarenessProgrammes'];
            $conflictOfInterest = $_POST['conflictOfInterest'];
            //myform2
            if (isset($_POST["rdPercentage"]) && isset($_POST["sustainableSourcing2"]) && isset($_POST["reclaimProcesses2"])) {
            $rdPercentage = $_POST['rdPercentage'];
            $sustainableSourcing2 = $_POST['sustainableSourcing2'];
            $reclaimProcesses2 = $_POST['reclaimProcesses2'];
            $eprApplicable = $_POST['eprApplicable'];
            $eprCollectionPlan = $_POST['eprCollectionPlan'];
            $lcaConducted2 = $_POST['lcaConducted2'];
            $concernsMitigation2 = $_POST['concernsMitigation2'];
            $recycledPercentage2 = $_POST['recycledPercentage2'];
            $reclaimedProducts2 = $_POST['reclaimedProducts2'];
            $reclaimedPercentages2 = $_POST['reclaimedPercentages2'];
            //myform3
            if (isset($_POST["P31"]) && isset($_POST["P32"]) && isset($_POST["P33"])) {
            $P31 = $_POST['P31'];
            $P32 = $_POST['P32'];
            $P33 = $_POST['P33'];
            $P34 = $_POST['P34'];
            $P35 = $_POST['P35'];
            $P36 = $_POST['P36'];
            $P37 = $_POST['P37'];
            $P38 = $_POST['P38'];
            $P39 = $_POST['P39'];
            $P310 = $_POST['P310'];
            $P311 = $_POST['P311'];
            $P312 = $_POST['P312'];
            $P313 = $_POST['P313'];
            $P314 = $_POST['P314'];
            $P315 = $_POST['P315'];
            //myform4
            if (isset($_POST["rdPercentage"]) && isset($_POST["sustainableSourcing"]) && isset($_POST["reclaimProcesses"])) {
            $rdPercentage = $_POST['rdPercentage'];
            $sustainableSourcing2 = $_POST['sustainableSourcing2'];
            $lcaConducted2 = $_POST['lcaConducted'];
            $concernsMitigation2 = $_POST['concernsMitigation'];
            $recycledPercentage2 = $_POST['recycledPercentage'];
            $reclaimedProducts2 = $_POST['reclaimedProducts'];
            $reclaimedPercentages2 = $_POST['reclaimedPercentages'];
            //myform5
            if (isset($_POST["P51"]) && isset($_POST["P52"]) && isset($_POST["P53"])) {
            $P51 = $_POST['P51'];
            $P52 = $_POST['P52'];
            $P53 = $_POST['P53'];
            $P54 = $_POST['P54'];
            $P55 = $_POST['P55'];
            $P56 = $_POST['P56'];
            $P57 = $_POST['P57'];
            $P58 = $_POST['P58'];
            $P59 = $_POST['P59'];
            $P510 = $_POST['P510'];
            $P511 = $_POST['P511'];
            $P512 = $_POST['P512'];
            $P513 = $_POST['P513'];
            $P514 = $_POST['P514'];
            $P515 = $_POST['P515'];
            //myform6
            if (isset($_POST["P61"]) && isset($_POST["P62"]) && isset($_POST["P63"])) {
            $P61 = $_POST['P61'];
            $P62 = $_POST['P62'];
            $P63 = $_POST['P63'];
            $P64 = $_POST['P64'];
            $P65 = $_POST['P65'];
            $P66 = $_POST['P66'];
            $P67 = $_POST['P67'];
            $P68 =  $_POST['P68'];
            $P69 = $_POST['P69'];
            $P610 = $_POST['P610'];
            $P611= $_POST['P611'];
            $P612= $_POST['P612'];
            //myform7
            if (isset($_POST["P71"]) && isset($_POST["P72"]) && isset($_POST["P73"])) {
            $P71 = $_POST['P71'];
            $P72 = $_POST['P72'];
            $P73 = $_POST['P73']; 
            //myform8
            if (isset($_POST["P81"]) && isset($_POST["P82"]) && isset($_POST["P83"])) {
            $P81 = $_POST['P81'];
            $P82 = $_POST['P82'];
            $P83 = $_POST['P83'];
            $P84 = $_POST['P84'];
            $P85 = $_POST['P85'];
            $P86 = $_POST['P86'];
            $P87 = $_POST['P87'];
            $P88 = $_POST['P88'];
            $P89 = $_POST['P89'];
            $P810 = $_POST['P810'];
            //myform9
            if (isset($_POST["P91"]) && isset($_POST["P92"]) && isset($_POST["P93"])) {
            $P91 = $_POST['P91'];
            $P92 = $_POST['P92'];
            $P93 = $_POST['P93'];
            $P94 = $_POST['P94'];
            $P95 = $_POST['P95'];
            $P96 = $_POST['P96'];
            $P97 = $_POST['P97'];
            $P98 = $_POST['P98'];
            $P99 = $_POST['P99'];
            $P910 = $_POST['P910'];
            $P911= $_POST['P911'];
            
            if (isset($_FILES['uploadedFiles']) && is_array($_FILES['uploadedFiles']['error'])) {
                $uploadDir = '../uploads/sec_A/';
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

                $incorporation_certificate = implode(";", $uploadedPaths);
            } else {
                $_SESSION['error'] = "No files were uploaded or there was an error.";
            }

            $stmt = $pdo->prepare("
                INSERT INTO section_a_form (
                    cin, name, year, office_address, corporate_address, 
                    email, telephone, website, reporting_fin_year, incorporation_certificate,
                    name_stock, puc, poc_name, poc_phone, poc_email,
                    rep_b, doba, dops, nol, drm,
                    tote, male, female, malet, femalet,
                    p_no, tor, holding, subsidiary, ac,
                    csr, gre, overview
                ) VALUES (
                    ?, ?, ?, ?, ?,
                    ?, ?, ?, ?, ?, 
                    ?, ?, ?, ?, ?, 
                    ?, ?, ?, ?, ?, 
                    ?, ?, ?, ?, ?, 
                    ?, ?, ?, ?, ?, 
                    ?, ?, ?
                )
            ");

            $stmt->execute([
                $cin, $name, $year, $office_address, $corporate_address,
                $email, $telephone, $website, $reporting_fin_year, $incorporation_certificate,
                $name_stock, $puc, $poc_name, $poc_phone, $poc_email,
                $rep_b, $doba, $dops, $nol, $drm,
                $tote, $male, $female, $malet, $femalet,
                $p_no, $tor, $holding, $subsidiary, $ac,
                $csr, $gre, $overview
            ]);

            echo 1; // Return success
            exit();
        } else {
            // If CIN is not unique, return an error message
            echo 0; // Return failure
            exit();
        }
    }
} catch (PDOException $e) {
    $_SESSION['message'] = "Failed to submit: " . $e->getMessage();
    header('Location: ../sec_B/sec_B.php');
    exit();
}
?>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process data from Section 1 (PRINCIPLE 1)
    if (isset($_POST["coverage"]) && isset($_POST["details"]) && isset($_POST["disciplinaryAction"])) {
        $coverage = $_POST["coverage"];
        $details = $_POST["details"];
        $disciplinaryAction = $_POST["disciplinaryAction"];
        // You can perform actions with this data, such as saving it to a database
    }

    // Process data from Section 2 (PRINCIPLE 2)
    if (isset($_POST["rdPercentage"]) && isset($_POST["sourcing2"]) && isset($_POST["reclaimProcesses2"])) {
        $rdPercentage = $_POST["rdPercentage"];
        $sourcing2 = $_POST["sourcing2"];
        $reclaimProcesses2 = $_POST["reclaimProcesses2"];
        // You can perform actions with this data, such as saving it to a database
    }

    // Process data from other sections (PRINCIPLE 3, 4, 5, ...)
    // ...

    // Send a response or redirect the user to the next section
    // You can use the header() function for redirection or send a JSON response
}
?>
