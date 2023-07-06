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
        <input type="submit" name="upload" class="btn btn-info" value="Upload"> <br> <br>
      
        <div class="form-group">
        <label for="se-name">Name of the Stock Exchange(s)</label>
        <input type="text" id="se-name" name="se-name" class="form-control" placeholder="Enter name of the Stock Exchange(s) where shares are listed" required>
      </div>

      <div class="form-group">
        <label for="puc">Paid-up Capital</label>
        <input type="text" id="puc" name="puc" required pattern="[0-9]+">
        </div>

      <!-- Deatils of POC-->
        <div class="form-group">
          <p class="poc">
        <label for="details">Details of Point of Contact</label>
        <br>
        <label for="poc-name">Name</label>
        <input type="text" id="poc-name" name="poc-name" placeholder="Enter the name of person to contact for queries">
        <label for="poc-phone">Phone Number</label>
        <input type="text" id="poc-phone" name="poc-phone" required pattern="[0-9]+" placeholder="Enter the contact number">
        <label for="email">Email Address</label>
        <input type="text" id="poc-email" name="poc-email" class="form-control" placeholder="Enter email address" required>
        </p>
        </div>
        <!-- Deatils of POC ends-->

        <div class="form-group">
        <label for="rep-b">Reporting boundary</label>
        <input type="text" id="rep-b" name="rep-b" class="form-control" placeholder="Enter Reporting boundary" required>
      </div>

       <div class="form-group">
          <label for="doba">Details of Business activities</label>
          <textarea id="doba" name="doba" rows="5" cols="50" class="form-control" placeholder="Enter details of Business activities of the entity (accounting for 90% of the entity’s Turnover)" required></textarea>
        </div>

        
       <div class="form-group">
          <label for="dops">Details of the products & services</label>
          <textarea id="dops" name="dops" rows="5" cols="50" class="form-control" placeholder="Enter details of the products & services sold by the entity (accounting for 90% of the entity’s Turnover)" required></textarea>
        </div>

      <div class="form-group">
        <label for="nol">Number of locations</label>
        <input type="text" id="nol" name="nol" required pattern="[0-9]+" placeholder=" Enter number of locations where plants/operation/ offices of the entity are located.">
        </div>

        <div class="form-group">
          <label for="drm">Details regarding markets served by the entity.</label>
          <textarea id="drm" name="drm" rows="5" cols="50" class="form-control" placeholder="Enter details regarding markets served by the entity." required></textarea>
        </div>

        <!-- Deatils of employee-->
        <div class="form-group">
          <p class="poc">
        <label for="details">Details of Employees & Workers</label>
        <br>
        <label for="tote">Total numbere of Employees & Workers</label>
        <input type="text" id="tote" name="tote" placeholder="Enter the total numbere of Employees & Workers">
        
        <label for="type">Peramnent</label>

        <label for="male">Male Employee</label>
        <input type="text" id="male" name="male" placeholder="Number of male employee">
        <label for="female">Female Employee</label>
        <input type="text" id="female" name="female" placeholder="Number of female employee">

        <label for="type1">Temporaray</label>

         <label for="male1">Male Employee</label>
         <input type="text" id="male1" name="male1" placeholder="Number of male employee">
         <label for="female1">Female Employee</label>
         <input type="text" id="female1" name="female1" placeholder="Number of female employee">

      </p>
        </div>
        <!-- Deatils of employee ends-->

        <div class="form-group">
        <label for="p-no">Participation/Inclusion/Representation of Women</label>
        <input type="text" id="p-no" name="p-no" required pattern="[0-9]+" placeholder=" Enter number of Female members of the BOD/KMP">
        </div>

        <div class="form-group">
        <label for="tor">Turnover rate for permanent employees & workers (For past 3 years)</label>
        <input type="text" id="tor" name="tor" required pattern="[0-9]+" placeholder="Enter Turnover rate for past 3 years">
        </div>

        
      <!-- Deatils of corporate structure-->
      <div class="form-group">
          <p class="poc">
        <label for="details">Details of corporate structure</label>
        <br>
        <label for="holding">Holding</label>
        <input type="text" id="holding" name="holding" placeholder="Enter the details of Holding">
        
        <label for="subsidiary">Subsidiary</label>
        <input type="text" id="subsidiary" name="subsidiary" required pattern="[0-9]+" placeholder="Enter the subsidiary">
        
        <label for="ac">Associate Companies (including joint ventures)</label>
        <textarea id="ac" name="ac" rows="5" cols="50" class="form-control" placeholder="Enter the details of Associate Companies (including joint ventures)" required></textarea>  
      </p>
        </div>
        <!-- Deatils of corporate structure ends-->

        <div class="form-group">
        <label for="csr">Details of CSR Activities </label>
        <textarea id="csr" name="csr" rows="5" cols="50" class="form-control" placeholder="Enter the details of CSR Activities" required></textarea>  
      </div>

      <div class="form-group">
        <label for="gre">Grievance redressal </label>
        <textarea id="gre" name="gre" rows="5" cols="50" class="form-control" placeholder=" Raise concerns about, & seek remedy for, the organization’s potential & actual negative impacts on them" required></textarea>  
      </div>

      <div class="form-group">
        <label for="overview">Overview of the entity’s material responsible business conduct issues </label>
        <textarea id="overview" name="overview" rows="5" cols="50" class="form-control" placeholder="Increased awareness & understanding of climate risks & opportunities within the entity resulting in better risk management & more informed strategic planning" required></textarea>  
      </div>

<!-- form fields ends-->
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