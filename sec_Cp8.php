<!DOCTYPE html>
<?php
include_once 'database_sec_c.php';
?>
<html>

<head>
  <title>CRUS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="form.css">
  
  </head>

<body>
  <header class="header">
    <h1 class="logo"><a href="#">CUSRS</a></h1>
    <ul class="main-nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="iiic-\a.html">Section B</a></li>
      <li><a href="\index.php">Section A</a></li>
    </ul>
  </header>

  <div class="container form-container">
    <h1>Section C form</h1>
    <h2>PRINCIPLE 8</h2>
    
        <form method="POST">
      <div class="form-group">
        <label for="P81">Details of Social Impact Assessments (SIA) of projects undertaken by the entity based on applicable laws, in the current financial year.</label>
        <input type="text" id="P81" name="P81" class="form-control" placeholder="Enter Details here" required>
      </div>

      <div class="form-group">
        <label for="P82">Provide information on project(s) for which ongoing Rehabilitation & Resettlement (R&R) is being undertaken by your entity, in the following format:</label>
        <input type="text" id="P82" name="P82" class="form-control" placeholder="Enter Details here" required>
      </div>
       
      <div class="form-group">
        <label for="P83">Describe the mechanisms to receive & redress grievances of the community</label>
        <input type="text" id="P83" name="P83" class="form-control" placeholder="Enter Details here" required>
      </div>

      <div class="form-group">
        <label for="P84">Percentage of input material (inputs to total inputs by value) sourced from suppliers:</label>
        <input type="text" id="P84" name="P84" class="form-control" placeholder="Enter Details here" required>
      </div>

      <div class="form-group">
        <label for="P85">Provide details of actions taken to mitigate any negative social impacts identified in Social Impact Assessments (Reference: Question 1 of Essential Indicators above): </label>
        <input type="text" id="P85" name="P85" class="form-control" placeholder="Enter Details here" required>
      </div>

      <div class="form-group">
        <label for="P86">Provide the following information on CSR projects undertaken by your entity in designated aspirational districts as identified by government bodies</label>
        <input type="text" id="P86" name="P86" class="form-control" placeholder="Enter Details here" required>
      </div>
       
      <div class="form-group">
        <label for="P87">Details of procurement policy in respect to marginalized /vulnerable groups.</label>
        <input type="text" id="P87" name="P87" class="form-control" placeholder="Enter Details here" required>
      </div>

      <div class="form-group">
        <label for="P88">Details of the benefits derived & shared from the intellectual properties owned or acquired by your entity (in the current financial year), based on traditional knowledge</label>
        <input type="text" id="P88" name="P88" class="form-control" placeholder="Enter Details here" required>
      </div>

      <div class="form-group">
        <label for="P89">Details of corrective actions taken or underway, based on any adverse order in intellectual property related disputes wherein usage of traditional knowledge is involved</label>
        <input type="text" id="P89" name="P89" class="form-control" placeholder="Enter Details here" required>
      </div>

      <div class="form-group">
        <label for="P810">Details of beneficiaries of CSR Projects</label>
        <input type="text" id="P810" name="P810" class="form-control" placeholder="Enter Details here" required>
      </div>


    
<!-- form fields ends-->
        <button type="submit" name="submit3" class="custom-btn btn-13">Submit</button>
        <button class="custom-btn btn-15">Reset</button>

        
        <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="sec_Cp7.php" tabindex="-1"> << </a>
      <li class="page-item"><a class="page-link" href="index.php">Section A</a></li>
    </li>
   
    <li class="page-item"><a class="page-link" href="sec_C.php">6</a></li>
    
    <li class="page-item"><a class="page-link" href="sec_Cp7.php">7</a></li>
    <li class="page-item active">
      <a class="page-link" href="sec_Cp8.php">8<span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="sec_Cp9.php">9</a></li>
    <li class="page-item">
      <a class="page-link" href="sec_Cp9.php"> >> </a>
    </li>
  </ul>
</nav>
    
      </form>

      <?php
      //$sql1 = "SELECT * FROM p6;";
      //$result1 = mysqli_query($conn1, $sql1);


      if (isset($_POST['submit3'])) {
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
    
       
       //$sql3 = "INSERT INTO `p8`(`P81`, `P82`, `P83`, `P84`,`P85`,'P86','P87','P88','P89) VALUES 
                       //VALUES ('$P81', '$P82', '$P83', '$P84');";

$sql3 = "INSERT INTO `p8`(`P81`, `P82`, `P83`, `P84`, `P85`, `P86`, `P87`, `P88`, `P89`, `P810`) 
VALUES ('$P81', '$P82', '$P83', '$P84','$P85', '$P86', '$P87', '$P88', '$P89', '$P810');";
        $data1 = mysqli_query($conn1, $sql3);
      

      if ($data1) {
        //echo "Inserted Successfully";
      ?>
        <!--<meta http-equiv="refresh" content="1; url = http://localhost/test/first_program/login.php" /> --->
      <?php
      } else {
        //echo "Insertion failed";
      }
    }

      ?>

    </form>
  </div>

  <footer class="footer">

    <div class="row">

      <div class="column">

        <h4>About Us</h4>

        <p> Christ University Sustainable development and Research group</p>

      </div>

      <div class="column">

        <h4>Quick Links</h4>

        <ul>

          <li><a href="#"><i class="fa fa-angle-right"></i> Sustainable Goals</a></li>

          <li><a href="#"><i class="fa fa-angle-right"></i> Contact us</a></li>

          <li><a href="#"><i class="fa fa-angle-right"></i> About us</a></li>

        </ul>

      </div>

      <div class="column">

        <h4>Connect with Us</h4>

        <ul class="social-icons">

          <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>

          <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>

          <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>

          <!-- <li><a href="#"><i class="fa-brands fa-github"></i></a></li> -->

        </ul>

      </div>

    </div>

    <p class="copyright">© 2023 All Rights Reserved</p>

  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>