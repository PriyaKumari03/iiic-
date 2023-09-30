<?php
    session_start();

    include_once '../connection.php'; // Correct the include statement
// Function to check if the provided CIN is unique (replace with your database logic)
function isCINUnique($cin,$pdo) {
     // Prepare a SQL query to check if the CIN already exists in the database
     $query = $pdo->prepare("SELECT COUNT(*) FROM section_a_form WHERE cin = :cin");
     $query->bindParam(':cin', $cin, PDO::PARAM_STR);
     $query->execute();
 
     $count = $query->fetchColumn(); // Retrieve the count as a single value
 
     return $count === 0; // Return true if the CIN is unique (count is 0), false otherwise
}
try{
$pdo = new PDO($dsn, $user, $pass, $options);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cin = $_POST["cin"];
    
    // Check if the CIN is unique using the isCINUnique function
    if (isCINUnique($cin,$pdo)) {
        echo 1; // CIN is unique
        $cin = $_POST['cin'];
                $name = $_POST['name'];
                $year = $_POST['year'];
                $office_address = $_POST['office_address'];
                $corporate_address = $_POST['corporate_address'];
                $email = $_POST['email'];
                $telephone = $_POST['telephone'];
                $website = $_POST['website'];
                $reporting_fin_year = $_POST['reporting_fin_year'];
                $name_stock = $_POST['name_stock'];
                $puc = $_POST['puc'];
                $poc_name = $_POST['poc_name'];
                $poc_phone = $_POST['poc_phone'];
                $poc_email = $_POST['poc_email'];
                $rep_b  = $_POST['rep_b'];
                $doba = $_POST['doba'];
                $dops = $_POST['dops'];
                $nol = $_POST['nol'];
                $drm = $_POST['drm'];
                $tote = $_POST['tote'];
                $male = $_POST['male'];
                $female = $_POST['female'];
                $malet = $_POST['malet'];
                $femalet = $_POST['femalet'];
                $p_no = $_POST['p_no'];
                $tor = $_POST['tor'];
                $holding = $_POST['holding'];
                $subsidiary= $_POST['subsidiary'];
                $ac = $_POST['ac'];
                $csr = $_POST['csr'];
                $gre = $_POST['gre'];
                $overview = $_POST['overview'];
                $incorporation_certificate = null;
 
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
                    $cin,$name,$year,$office_address,$corporate_address,
                    $email,$telephone,$website,$reporting_fin_year,$incorporation_certificate,
                    $name_stock,$puc,$poc_name,$poc_phone,$poc_email,
                    $rep_b,$doba,$dops,$nol,$drm,
                    $tote,$male,$female,$malet,$femalet,
                    $p_no,$tor,$holding,$subsidiary,$ac,
                    $csr,$gre,$overview
                ]);
                echo 1;
                exit(); // Ensure that no further code is executed after the redirection
            } else {
                // If CIN is not unique, return an error message
                echo 0;
                exit();
            }
        }
    } catch (PDOException $e) {
        $_SESSION['message'] = "Failed to submit.";
        printf($e);
        header('Location: ../sec_B/sec_B.php');
        exit();
    }
?>