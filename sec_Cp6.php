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
    <h2>PRINCIPLE 6</h2>
    
        <form method="POST">
      <div class="form-group">
        <label for="P61">Details of total energy consumption (in Joules or multiples) & energy intensity as per BRSR format. 
          Also Indicate if any independent assessment/ evaluation/assurance has been carried out by an external agency? </label>
        <input type="text" id="P61" name="P61" class="form-control" placeholder=" (Y/N) If yes, name of the external agency" required>
      </div>

      <div class="form-group">
        <label for="P62">Does the entity have any sites/facilities identified as designated consumers (DCs) under the Performance, Achieve, & Trade (PAT) Scheme of the Government of India?</label>
        <input type="text" id="P62" name="P62" class="form-control" placeholder="(Y/N) If yes, disclose whether targets set under the PAT scheme have been achieved. In case targets have
         not been achieved, provide the remedial action taken if any. " required>
      </div>
       
      <div class="form-group">
        <label for="P63">Provide details of water withdrawal from different sources, total volume of water withdrawal & consumed, & Water intensity per rupee of turnover (Water consumed / turnover) as per BRSR format. Also, indicate if any independent assessment/ evaluation/assurance has been carried out by an external agency?</label>
        <input type="text" id="P63" name="P63" class="form-control" placeholder="(Y/N) If yes, name of theexternal agency" required>
      </div>

      <div class="form-group">
        <label for="P64">Has the entity implemented a mechanism for Zero Liquid Discharge?</label>
        <input type="text" id="P64" name="P64" class="form-control" placeholder=" If yes, provide details of its coverage & implementation." required>
      </div>

      <div class="form-group">
        <label for="P65">Please provide details of air emissions (other than GHG emissions) by the entity, in BRSR format. Also, indicate if any independent assessment/ evaluation/assurance has been carried out by an external agency?</label>
        <input type="text" id="P65" name="P65" class="form-control" placeholder=" (Y/N) If yes, the name of the external agency" required>
      </div>

      <div class="form-group">
        <label for="P66">Provide details of greenhouse gas emissions (Scope 1 & Scope 2 emissions) & its intensity per rupee of turnover as per BRSR format. Also, indicate if any independent assessment/ evaluation/assurance has been carried out by an external agency??</label>
        <input type="text" id="P66" name="P66" class="form-control" placeholder=" (Y/N) If yes, the name of the external agency" required>
      </div>

      <div class="form-group">
        <label for="P67">Does the entity have any project related to reducing Green House Gas emission?</label>
        <input type="text" id="P67" name="P67" class="form-control" placeholder=" (Y/N) If yes, the name of the external agency. " required>
      </div>

      <div class="form-group">
        <label for="P68">Provide details of waste generated, waste recycled & waste dumped with breakup into categories like hazardous, plastic, e-waste, bio-medical waste etc. as per BRSR format. Also, indicate if any independent assessment/ evaluation/assurance has been carried out by an external agency?</label>
        <input type="text" id="P68" name="P68" class="form-control" placeholder=" If Yes, then provide details." required>
      </div>

      <div class="form-group">
        <label for="P69">Briefly describe the waste management practices adopted in your establishments. Describe the strategy adopted by your entity to reduce usage of hazardous & toxic chemicals in your products & processes & the practices adopted to manage such wastes.</label>
        <input type="text" id="P69" name="P69" class="form-control" placeholder="Provide details here." required>
      </div>

      <div class="form-group">
        <label for="P610">If the entity has operations/offices in/around ecologically sensitive areas (such as national parks, wildlife sanctuaries, biosphere reserves, wetlands, biodiversity hotspots, forests, coastal regulation zones etc.) where environmental approvals / clearances are required, please specify details like: Location of operations/offices; Type of operations; the conditions of environmental approval / clearance are being complied with?</label>
        <input type="text" id="P610" name="P610" class="form-control" placeholder=" (Y/N) If no, the reasons thereof & corrective action taken, if any." required>
      </div>

      <div class="form-group">
        <label for="P611">Share name & details of environmental impact assessments of projects undertaken by the entity along with EIA notification No.& date; in the current financial year. Also share whether EIA is conducted by independent external agency (Yes/No)</label>
        <input type="text" id="P611" name="P611" class="form-control" placeholder="If yes then whether Results communicated in public domain (Yes/No) & Relevant Web link." required>
      </div>

      <div class="form-group">
        <label for="P612">Is the entity compliant with the applicable environmental law/ regulations/ guidelines in India; such as the Water (Prevention & Control of Pollution) Act, Air (Prevention & Control of Pollution) Act, Environment Protection Act & rules thereunder (Y/N).</label>
        <input type="text" id="P612" name="P612" class="form-control" placeholder=" If Yes, then provide details." required>
      </div>
<!-- form fields ends-->
        <button type="submit" name="submit1" class="custom-btn btn-13">Submit</button>
        <button class="custom-btn btn-15">Reset</button>
    
        <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="index.php" tabindex="-1"> << </a>
    </li>
    <li class="page-item"><a class="page-link" href="index.php">Section A</a></li>
    <li class="page-item active">
      <a class="page-link" href="sec_C.php">6 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="sec_Cp7.php">7</a></li>
    <li class="page-item"><a class="page-link" href="sec_Cp8.php">8</a></li>
    <li class="page-item"><a class="page-link" href="sec_Cp9.php">9</a></li>
    <li class="page-item">
      <a class="page-link" href="sec_Cp7.php"> >> </a>
    </li>
  </ul>
</nav>

      </form>

      <?php
      //$sql1 = "SELECT * FROM p6;";
      //$result1 = mysqli_query($conn1, $sql1);


      if (isset($_POST['submit1'])) {
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
       
       $sql1 = "INSERT INTO `p6`(`P61`, `P62`, `P63`, `P64`, `P65`, `P66`, `P67`, `P68`, `P69`, `P610`, `P611`, `P612`) 
                       VALUES ('$P61', '$P62', '$P63', '$P64', '$P65', '$P66', '$P67', '$P68','$P69','$P610', '$P611', '$P612');";

//$sql1 = "INSERT INTO `p6`(`P61`,`P62`,`P63`,`P64`, `P65`, `P66`, `P67`) 
                       // VALUES ('$P61','$P62','$P63', '$P64', '$P65', '$P66', '$P67`);";
        $data1 = mysqli_query($conn1, $sql1);
      

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