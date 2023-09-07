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
    <h2>PRINCIPLE 9</h2>
    
        <form method="POST">
      <div class="form-group">
        <label for="P91">Describe the mechanisms in place to receive & respond to consumer complaints & feedback</label>
        <input type="text" id="P91" name="P91" class="form-control" placeholder="Provide details here." required>
      </div>

      <div class="form-group">
        <label for="P92">Turnover of products &/ services as a percentage of turnover from all products/service that carry information about, Environmental & social parameters relevant to
the product, Safe & responsible usage & Recycling &/or safe disposal.</label>
        <input type="text" id="P92" name="P92" class="form-control" placeholder="Provide details here. " required>
      </div>
       
      <div class="form-group">
        <label for="P93">Number of consumer complaints in respect of the Data privacy, Advertising, Cyber-security, Delivery of essential services, Restrictive Trade Practices, Unfair Trade
Practices& other Received & pending during current & previous FY. </label>
        <input type="text" id="P93" name="P93" class="form-control" placeholder="Provide details here." required>
      </div>

      <div class="form-group">
        <label for="P94">Details of instances of product recalls on account of safety issues.</label>
        <input type="text" id="P94" name="P94" class="form-control" placeholder="Provide details here." required>
      </div>

      <div class="form-group">
        <label for="P95">Does the entity have a framework/ policy on cyber security & risks related to data privacy? (Yes/No) If available, provide a web-link of the policy.</label>
        <input type="text" id="P95" name="P95" class="form-control" placeholder="Provide details here." required>
      </div>

      <div class="form-group">
        <label for="P96">Provide details of any corrective actions taken or underway on issues relating to advertising, & delivery of essential services; cyber security & data privacy of customers;
re-occurrence of instances of product recalls; penalty / action taken by regulatory authorities on safety of products / services.
</label>
        <input type="text" id="P96" name="P96" class="form-control" placeholder="Provide details here." required>
      </div>

      <div class="form-group">
        <label for="P97">Channels / platforms where information on products & services of the entity can be accessed (provide web link, if available).</label>
        <input type="text" id="P97" name="P97" class="form-control" placeholder="Provide details here." required>
      </div>

      <div class="form-group">
        <label for="P98">Steps taken to inform & educate consumers about safe & responsible usage of products &/or services</label>
        <input type="text" id="P98" name="P98" class="form-control" placeholder=" Provide details here." required>
      </div>

      <div class="form-group">
        <label for="P99">Mechanisms in place to inform consumers of any risk of disruption/discontinuation of essential services.</label>
        <input type="text" id="P99" name="P99" class="form-control" placeholder="Provide details here." required>
      </div>

      <div class="form-group">
        <label for="P910">Does the entity display product information on the product over & above what Is mandated as per local laws? (Yes/No/Not Applicable) If yes, provide details in brief.
Did your entity carry out any survey with regard to consumer satisfaction relating to the major products / services of the entity, significant locations of operation of
the entity or the entity as a whole? (Yes/No).</label>
        <input type="text" id="P910" name="P910" class="form-control" placeholder=" (Y/N) If no, the reasons thereof & corrective action taken, if any." required>
      </div>

      <div class="form-group">
        <label for="P911">Provide the information relating to data breaches Number of instances of data breaches along with impact &
Percentage of data breaches involving personally identifiable information of customers</label>
        <input type="text" id="P911" name="P911" class="form-control" placeholder="Provide details here." required>
      </div>

   
<!-- form fields ends-->
        <button type="submit" name="submit1" class="custom-btn btn-13">Submit</button>
        <button class="custom-btn btn-15">Reset</button>

          
        <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="sec_Cp8.php" tabindex="-1"> << </a>
      <li class="page-item"><a class="page-link" href="index.php">Section A</a></li>
    </li>
   
    <li class="page-item"><a class="page-link" href="sec_C.php">6</a></li>
    
    <li class="page-item"><a class="page-link" href="sec_Cp7.php">7</a></li>
    <li class="page-item"><a class="page-link" href="sec_Cp8.php">8</a></li>
   
    <li class="page-item active">
      <a class="page-link" href="sec_Cp9.php">9<span class="sr-only">(current)</span></a>
    </li>


    <li class="page-item">
      <a class="page-link" href="index.php"> >> </a>
    </li>
  </ul>
</nav>

    
      </form>

      <?php
      //$sql1 = "SELECT * FROM p6;";
      //$result1 = mysqli_query($conn1, $sql1);


      if (isset($_POST['submit1'])) {
        $P91 = $_POST['P91'];
        $P92 = $_POST['P92'];
        $P93 = $_POST['P93'];
        $P94 = $_POST['P94'];
        $P95 = $_POST['P95'];
        $P96 = $_POST['P96'];
        $P97 = $_POST['P97'];
        $P98 =  $_POST['P98'];
        $P99 = $_POST['P99'];
        $P910 = $_POST['P910'];
        $P911= $_POST['P911'];
       
       //$sql1 = "INSERT INTO `p6`(`P61`, `P62`, `P63`, `P64`, `P65`, `P66`, `P67`, `P68`, `P69`, `P610`, `P611`, `P612`) 
                       //VALUES ('$P61', '$P62', '$P63', '$P64', '$P65', '$P66', '$P67', '$P68','$P69','$P610', '$P611', '$P612');";

$sql4 = "INSERT INTO `p9`(`P91`, `P92`, `P93`, `P94`, `P95`, `P96`, `P97`, `P98`, `P99`, `P910`, `P911`) 
VALUES ('$P91','$P92','$P93', '$P94', '$P95', '$P96', '$P97', '$P98','$P99','$P910', '$P911');";
        $data1 = mysqli_query($conn1, $sql4);
      

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