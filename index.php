<!DOCTYPE html>
<?php
include_once 'database.php';
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
      <li><a href="#">Portfolio</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </header>

  <div class="container form-container">
    <h1>Section A form</h1>
    <form method="POST">
      <div class="form-group">
        <label for="cin">Corporate Identity Number (CIN)</label>
        <input type="text" id="cin" name="cin" class="form-control" placeholder="Enter CIN of Listed Entity" required>
      </div>

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Enter name of Listed Entity" required>
      </div>

      <div class="form-group">
        <label for="inyear">Incorporation Year</label>


        <select name="year" id="inyear" class="form-control">



          <!--<option value="" name="year">Select the Year of Incorporation</option>
          <!-- Year options from 2022 to 2050 
          <script>
            for (var i = 2022; i <= 2050; i++) {
              document.write('<option value="' + i + '">' + i + '</option>');
            }
          </script> -->
        </select>
        <script>
          var start = 2022;
          var end = 2050;
          var options = "";
          for (var year = start; year <= end; year++) {
            options += "<option>" + year + "</option>";
          }
          document.getElementById("inyear").innerHTML = options;
        </script>
      </div>

      <div class="form-group">
        <label for="office_add">Registered Office Address</label>
        <input type="text" id="office_add" name="office_address" class="form-control" placeholder="Enter registered address" required>
      </div>

      <div class="form-group">
        <label for="corp_add">Corporate Address</label>
        <input type="text" id="corp_add" name="corporate_address" class="form-control" placeholder="Enter Corporate address" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" class="form-control" placeholder="Enter your email" required>
      </div>

      <div class="form-group">
        <label for="contact">Telephone</label>
        <input type="text" id="contact" name="telephone" class="form-control" placeholder="Enter your contact number" required>
      </div>


      <div class="form-group">
        <label for="website">Website</label>
        <input type="url" id="website" name="website" class="form-control" placeholder="Enter your website link" required>
      </div>

      <div class="form-group">
        <label for="year">Reporting Financial year</label>
        <select name="reporting_fin_year" id="year" class="form-control">
          
        <!--<option name="reporting_fin_year" value="">Select Financial year for which reporting is being done</option>
          <!-- Year options from 2022 to 2040 
          <script>
            for (var i = 2022; i <= 2040; i++) {
              document.write('<option value="' + i + '">' + i + '</option>');
            }
          </script> -->
        </select>
        <script>
          var start = 2022;
          var end = 2040;
          var options = "";
          for (var year = start; year <= end; year++) {
            options += "<option>" + year + "</option>";
          }
          document.getElementById("year").innerHTML = options;
        </script>
      </div>



      <!-- certificate upload -->

      <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="pdfFile">Upload Incorporation Certificate (Max 5 mb)</label>
        <input type="file" id="pdfFile" name="my_image" max="5242880"><br> <br>
        
        <input type="submit" name="upload" class="btn btn-info" value="Upload"> 

        <button type="submit" name="submit" class="custom-btn btn-13">Submit</button>
        <button class="custom-btn btn-15">Reset</button>
       
       

      </form>

      <!-- certificate upload ends -->



      <!--<form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="pdfFile">Upload Incorporation Certificate (Max 5 KB)</label>
        <input type="file" id="pdfFile" name="pdfFile" accept=".pdf" max="5120">
        <input type="submit" value="Upload">
      </form>-->
      <!--<label for="pdfFile">Upload Incorporation Certificate (Max 5 KB):</label>
      <input type="file" id="pdfFile" name="pdfFile" accept=".pdf" max="5120">
      <input type="submit" value="Upload">--> <br>


      <!--<input type="submit" value="Submit" class="btn btn-submit">-->
      <!--<input type="reset" value="Reset" class="btn btn-reset">-->


      <?php
      $sql = "SELECT * FROM section_a_form;";
      $result = mysqli_query($conn, $sql);


      if (isset($_POST['submit'])) {
        $cin = $_POST['cin'];
        $name = $_POST['name'];
        $year = $_POST['year'];
        $office_address = $_POST['office_address'];
        $corporate_address = $_POST['corporate_address'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $website = $_POST['website'];
        $reporting_fin_year = $_POST['reporting_fin_year'];
        //$sql = "INSERT INTO student (i) VALUES('$id','$firstname','$lastname','$dob','$gender','$dep','$usern','$pass'); ";
        $sql = "INSERT INTO section_a_form (`cin`, `name`, `year`, `office_address`, `corporate_address`, `email`, `telephone`, `website`, `reporting_fin_year`) VALUES('$cin','$name','$year','$office_address','$corporate_address','$email','$telephone','$website','$reporting_fin_year'); ";
        $data = mysqli_query($conn, $sql);
      

      if ($data) {
        echo "Inserted Successfully";
      ?>
        <!--<meta http-equiv="refresh" content="1; url = http://localhost/test/first_program/login.php" /> --->
      <?php
      } else {
        echo "Insertion failed";
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