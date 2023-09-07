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
    <h2>PRINCIPLE 7</h2>
    
        <form method="POST">
      <div class="form-group">
        <label for="P71">Details of affiliations with trade & industry chambers/ associations. (Name of top 10 trade & industry chambers)</label>
        <input type="text" id="P71" name="P71" class="form-control" placeholder="(Y/N) If yes, name of the external agency" required>
      </div>

      <div class="form-group">
        <label for="P72">Details of corrective action taken or underway on any issues related to anticompetitive conduct by the entity, based on adverse orders from regulatory authorities.</label>
        <input type="text" id="P72" name="P72" class="form-control" placeholder="(Y/N) If yes, name of the external agency " required>
      </div>
       

      <div class="form-group">
        <label for="P73">Details of the Public policy advocated by the entity.</label>
        <input type="text" id="P73" name="P73" class="form-control" placeholder="(Y/N) If yes, name of theexternal agency" required>
      </div>



<!-- form fields ends-->
        <button type="submit" name="submit3" class="custom-btn btn-13">Submit</button>
        <button class="custom-btn btn-15">Reset</button>
    
        <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="sec_C.php" tabindex="-1"> << </a>
      <li class="page-item"><a class="page-link" href="index.php">Section A</a></li>
    </li>
   
    <li class="page-item"><a class="page-link" href="sec_C.php">6</a></li>
    <li class="page-item active">
      <a class="page-link" href="sec_Cp7.php">7<span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="sec_Cp8.php">8</a></li>
    <li class="page-item"><a class="page-link" href="sec_Cp9.php">9</a></li>
    <li class="page-item">
      <a class="page-link" href="sec_Cp8.php"> >> </a>
    </li>
  </ul>
</nav>

      </form>

      <?php
      //$sql1 = "SELECT * FROM p6;";
      //$result1 = mysqli_query($conn1, $sql1);


      if (isset($_POST['submit3'])) {
        
        $P71 = $_POST['P71'];
        $P72 = $_POST['P72'];
        $P73 = $_POST['P73']; //details block one
       
       
        $sql2 = "INSERT INTO `p7`(`P71`, `P72`, `P73`) 
        VALUES ('$P71', '$P72', '$P73');";


//$sql1 = "INSERT INTO `p6`(`P61`,`P62`,`P63`,`P64`, `P65`, `P66`, `P67`) 
                       // VALUES ('$P61','$P62','$P63', '$P64', '$P65', '$P66', '$P67`);";
        $data2 = mysqli_query($conn1, $sql2);
      

      if ($data2) {
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