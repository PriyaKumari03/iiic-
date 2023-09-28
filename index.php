<!DOCTYPE html>
<!--?php
include_once 'database.php';
?-->
<html>

<head>
  <title>CRUS</title>
  <link rel="icon" type="image/jpg" href="images\cusrrs.jpg"> 
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
  <a class="logo" href="#"><img src="images\cusrrs.jpg" alt="Logo"></a>
    <h1 class="logo"><a href="index.php">CHRIST University Sustainable Research Society</a></h1>
    <ul class="main-nav">
      <li><a href="">Home</a></li>
      <li><a href="#">About</a></li>
      
      <li><a href="sec_C.php">Section C</a></li>
      <li><a href="#">Contact</a></li>
   

    </ul>
  </header>

  <div class="container form-container">
    <h1>Section A form</h1>
    <label>Fields marked with (<span style="color: red;"> * </span>) are mandatory and can not be left blank.</label>
    <form method="POST">
     
     <!-- Section 1: Basic Details -->
    <div id="section1" class="form-section">
      <div class="form-group">
      <label for="cin"><span style="color: red;"> * </span>Corporate Identity Number (CIN)</label>
      <input type="text" id="cin" name="cin" class="form-control" placeholder="Enter CIN of Listed Entity" required>
    </div>

    <div class="form-group">
      <label for="name"><span style="color: red;"> * </span>Name</label>
      <input type="text" id="name" name="name" class="form-control" placeholder="Enter name of Listed Entity" required>
    </div>

    <div class="form-group">
      <label for="inyear"><span style="color: red;"> * </span>Incorporation Year</label>
      <select name="year" id="inyear" class="form-control">

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
      <label for="office_add"><span style="color: red;"> * </span>Registered Office Address</label>
      <input type="text" id="office_add" name="office_address" class="form-control" placeholder="Enter registered address" required>
    </div>

    <div class="form-group">
      <label for="corp_add"><span style="color: red;"> * </span>Corporate Address</label>
      <input type="text" id="corp_add" name="corporate_address" class="form-control" placeholder="Enter Corporate address" required>
    </div>

    <div class="form-group">
      <label for="email"><span style="color: red;"> * </span>Email</label>
      <input type="text" id="email" name="email" class="form-control" placeholder="Enter your email" required>
    </div>

    <div class="form-group">
      <label for="contact"><span style="color: red;"> * </span>Telephone</label>
      <input type="text" id="contact" name="telephone" class="form-control" placeholder="Enter your contact number" required>
    </div>


    <div class="form-group">
      <label for="website"><span style="color: red;"> * </span>Website</label>
      <input type="url" id="website" name="website" class="form-control" placeholder="Enter your website link" required>
    </div>

    <div class="form-group">
      <label for="year"><span style="color: red;">*</span>Reporting Financial year</label>
      <select name="reporting_fin_year" id="year" class="form-control">
    
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
      <label for="pdfFile"><span style="color: red;"> * </span>Upload Incorporation Certificate (Max 5 mb)</label>
      <input type="file" id="pdfFile" name="my_image" max="5242880"><br> <br>
      <input type="submit" name="upload" class="btn btn-info" value="Upload"> <br> <br>

      <div class="form-group">
      <label for="se-name"><span style="color: red;"> * </span>Name of the Stock Exchange(s)</label>
      <input type="text" id="se-name" name="name_stock" class="form-control" placeholder="Enter name of the Stock Exchange(s) where shares are listed" required>
    </div>

    <div class="form-group">
      <label for="puc"><span style="color: red;"> * </span>Paid-up Capital</label>
      <input type="text" id="puc" name="puc" required pattern="[0-9]+">
      </div>
    </div>

    <!-- Section 2: POC Details -->
    <div id="section2" class="form-section" style="display: none;">
      <div class="form-group">
        <p class="poc">
      <label for="details"><span style="color: red;"> * </span>Details of Point of Contact</label>
      <br>
      <label for="poc-name"><span style="color: red;"> * </span>Name</label>
      <input type="text" id="poc-name" name="poc_name" placeholder="Enter the name of person to contact for queries">
      <label for="poc-phone"><span style="color: red;">*</span>Phone Number</label>
      <input type="text" id="poc-phone" name="poc_phone" required pattern="[0-9]+" placeholder="Enter the contact number">
      <label for="email"><span style="color: red;"> * </span>Email Address</label>
      <input type="text" id="poc-email" name="poc_email" class="form-control" placeholder="Enter email address" required>
      </p>
      </div>
    </div>

    <!-- Section 3: Other Business Details -->    
    <div id="section3" class="form-section" style="display: none;">
      <div class="form-group">
      <label for="rep-b"><span style="color: red;"> * </span>Reporting boundary</label>
      <input type="text" id="rep-b" name="rep_b" class="form-control" placeholder="Enter Reporting boundary" required>
      </div>

     <div class="form-group">
        <label for="doba"><span style="color: red;"> * </span>Details of Business activities</label>
        <textarea id="doba" name="doba" rows="5" cols="50" class="form-control" placeholder="Enter details of Business activities of the entity (accounting for 90% of the entity’s Turnover)" required></textarea>
      </div>

  
     <div class="form-group"> 
        <label for="dops"><span style="color: red;"> * </span>Details of the products & services</label>
        <textarea id="dops" name="dops" rows="5" cols="50" class="form-control" placeholder="Enter details of the products & services sold by the entity (accounting for 90% of the entity’s Turnover)" required></textarea>
      </div>

    <div class="form-group">
      <label for="nol"><span style="color: red;"> * </span>Number of locations</label>
      <input type="text" id="nol" name="nol" required pattern="[0-9]+" placeholder=" Enter number of locations where plants/operation/ offices of the entity are located.">
      </div>

      <div class="form-group">
        <label for="drm"><span style="color: red;"> * </span>Details regarding markets served by the entity.</label>
        <textarea id="drm" name="drm" rows="5" cols="50" class="form-control" placeholder="Enter details regarding markets served by the entity." required></textarea>
      </div>
    </div>

    <!--MANDATORY FIELDS ENDS -->

    <!-- Section 4: Employee Details -->
    <div id="section4" class="form-section" style="display: none;">
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
       <input type="text" id="male1" name="malet" placeholder="Number of male employee">
       <label for="female1">Female Employee</label>
       <input type="text" id="female1" name="femalet" placeholder="Number of female employee">

    </p>
      </div>

      <div class="form-group">
      <label for="p-no">Participation/Inclusion/Representation of Women</label>
      <input type="text" id="p-no" name="p_no" required pattern="[0-9]+" placeholder=" Enter number of Female members of the BOD/KMP">
      </div>

      <div class="form-group">
      <label for="tor">Turnover rate for permanent employees & workers (For past 3 years)</label>
      <input type="text" id="tor" name="tor" required pattern="[0-9]+" placeholder="Enter Turnover rate for past 3 years">
      </div>
    </div>

    <!-- Section 5: Corporate Structure and CSR -->
    <div id="section5" class="form-section" style="display: none;">
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
    </div>    
      
    <!-- Navigation Buttons -->
    <div class="navigation-buttons">
      <button type="button" class="custom-btn prev-btn">Previous</button>
      <button type="button" class="custom-btn next-btn">Next</button>
      <button type="submit" name="submit" class="custom-btn btn-13" style="display: none;">Submit</button>
    </div>
    
   </form>
      
      <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1"> << </a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="index.php">Section A<span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="sec_C.php">6</a></li>
    <li class="page-item"><a class="page-link" href="sec_Cp7.php">7</a></li>
    <li class="page-item"><a class="page-link" href="sec_Cp8.php">8</a></li>
    <li class="page-item"><a class="page-link" href="sec_Cp9.php">9</a></li>
    <li class="page-item">
      <a class="page-link" href="sec_C.php"> >> </a>
    </li>
  </ul>
</nav>

      

      
  


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
        //$sql = "INSERT INTO student (i) VALUES('$id','$firstname','$lastname','$dob','$gender','$dep','$usern','$pass'); ";
        //$sql = "INSERT INTO section_a_form (`cin`, `name`, `year`, `office_address`, `corporate_address`, `email`, `telephone`, `website`, `reporting_fin_year`) VALUES('$cin','$name','$year','$office_address','$corporate_address','$email','$telephone','$website','$reporting_fin_year'); ";
        $sql = "INSERT INTO `section_a_form`(`cin`, `name`, `year`, `office_address`, `corporate_address`, `email`, `telephone`, `website`, `reporting_fin_year`, `name_stock`, `puc`, `poc_name`, `poc_phone`, `poc_email`, `rep_b`, `doba`, `dops`, `nol`, `drm`, `tote`, `male`, `female`, `malet`, `femalet`, `p_no`, `tor`, `holding`, `subsidiary`, `ac`, `csr`, `gre`, `overview`) 
              VALUES ('$cin','$name','$year','$office_address','$corporate_address','$email','$telephone','$website','$reporting_fin_year','$name_stock','$puc','$poc_name',
              '$poc_phone','$poc_email','$rep_b','$doba','$dops','$nol','$drm','$tote','$male','$female','$malet','$femalet','$p_no','$tor','$holding','$subsidiary','$ac','$csr','$gre',
              '$overview');";
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

  <script src="index_nav_buttons.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>