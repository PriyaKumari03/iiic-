<!DOCTYPE html>
<html>
  <head>
    <title>CRUS</title>
    <link rel="icon" type="image/jpg" href="../images/cusrrs.jpg"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sec_A.css">
  </head>

  <body>
    <header class="header">
      <a class="logo" href="#"><img src="../images/cusrrs.jpg" alt="Logo"></a>
      <h1 class="logo"><a href="../index.php">CHRIST University Sustainable Research Society</a></h1>
      <ul class="main-nav">
        <li><a href="">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </header>
    <div class="container form-container">
      <h1>Section A form</h1>
      <!-- Form Start -->
      <form id="primary" method="post" enctype="multipart/form-data">
        <!-- CIN Start -->
        <div class="form-group">
          <label for="cin"><span style="color: red;"> * </span>Corporate Identity Number (CIN)</label>
          <input type="text" id="cin" name="cin" class="form-control" placeholder="Enter CIN of Listed Entity" required maxlength="21">
          <p id="cinValidationMessage" style="color: red;"></p>
        </div>
        <!-- CIN End -->

        <!-- Name Start -->
        <div class="form-group">
          <label for="name"><span style="color: red;"> * </span>Name</label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Enter name of Listed Entity" required>
        </div>
        <!-- Name End -->

        <!-- Year Start -->
        <div class="form-group">
          <label for="inyear"><span style="color: red;"> * </span>Incorporation Year</label>
          <select name="year" id="inyear" class="form-control"></select>
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
        <!-- Year End -->

        <!-- Start -->
        <div class="form-group">
          <!-- Registered Office Address Start -->
          <label for="office_add"><span style="color: red;"> * </span>Registered Office Address</label>
          <input type="text" id="office_add" name="office_address" class="form-control" placeholder="Enter registered address" required>
          <!-- Registered Office Address End -->
        </div>

        <!-- Corporate Address Start -->
        <div class="form-group">
          <label for="corp_add"><span style="color: red;"> * </span>Corporate Address</label>
          <input type="text" id="corp_add" name="corporate_address" class="form-control" placeholder="Enter Corporate address" required>
        </div>
        <!-- Corporate Address End -->

        <!-- Email Start -->
        <div class="form-group">
          <label for="email"><span style="color: red;"> * </span>Email (Enter only official email ID)</label>
          <input type="text" id="email" name="email" class="form-control" placeholder="Enter your email" required>
          <p id="validationMessage"></p>
        </div>
        <!-- Email End -->

        <!-- Telephone Start -->
        <div class="form-group">
          <label for="contact"><span style="color: red;"> * </span>Telephone</label>
          <input type="text" id="contact" name="telephone" class="form-control" placeholder="Enter your contact number" required>
        </div>
        <!-- Telephone End -->

        <!-- Website Start -->
        <div class="form-group">
          <label for="website"><span style="color: red;"> * </span>Website</label>
          <input type="url" id="website" name="website" class="form-control" placeholder="Enter your website link" required>
        </div>
        <!-- Website End -->

        <!-- Reporting Financial year Start -->
        <div class="form-group">
          <label for="year"><span style="color: red;"> * </span>Reporting Financial year</label>
          <select name="reporting_fin_year" id="year" class="form-control"></select>
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
        <!-- Reporting Financial year End -->

        <!-- PDF UPLOAD Start -->
        <div class="mb-3">
          <div class="policy">
            <label for="incorporation_certificate">
              <span style="color: red;"> * </span>Please provide your incorporation certificate as a PDF file (Max 5 MB)
            </label>
          </div>
          <input type="file" id="file" name="uploadedFiles[]" accept=".pdf" required multiple><br><br>
          <div id="fileSizeMessage" style="color: red;"></div> <!-- Message container -->
        </div>
        <!-- PDF UPLOAD End -->
        
        <!-- Name of the Stock Exchange(s) Start -->
        <div class="form-group">
          <label for="name_stock"><span style="color: red;"> * </span>Name of the Stock Exchange(s)</label>
          <select id="name_stock" id="name_stock" name="name_stock"  required>
            <option value="" disabled selected>Select a stock exchange</option>
            <option value="BSE">Bombay Stock Excha (BSE)</option>
            <option value="NSE">National Stock Exchange (NSE)</option>
            <option value="CSE">Calcutta Stock Exchange (CSE)</option>
            <option value="MSE">Madras Stock Exchange (MSE)</option>
            <option value="DSE">Delhi Stock Exchange (DSE)</option>
            <option value="INX">India International Exchange (INX)</option>
          </select>
        </div>
        <!-- Name of the Stock Exchange(s) End -->

        <!-- Paid-up Capital Start -->
        <div class="form-group">
          <label for="puc"><span style="color: red;"> * </span>Paid-up Capital</label>
          <input type="text" id="puc" name="puc" required pattern="[0-9]+">
        </div>
        <!-- Paid-up Capital End -->

        <!-- Details of Point of Contact Start -->
        <div class="form-group">
          <p class="poc">
            <label for="details"><span style="color: red;"> * </span>Details of Point of Contact</label><br>
            <!-- Name of the Point of Contact Start -->
            <label for="poc-name"><span style="color: red;"> * </span>Name</label>
            <input type="text" id="poc-name" name="poc_name" placeholder="Enter the name of the person to contact for queries" required>
            <!-- Name validation message
            <span id="poc-name-validation" style="color: red;"></span>-->
            <!-- Name of the Point of Contact End -->

            <!-- Phone Number of Point of Contact Start -->
            <label for="poc-phone"><span style="color: red;"> * </span>Phone Number</label>
            <input type="text" id="poc-phone" name="poc_phone" required pattern="[0-9]+" placeholder="Enter the contact number" maxlength="10">
            <!-- Phone validation message -->
            <span id="poc-phone-validation" style="color: red;"></span>
            <!-- Phone Number of Point of Contact End -->

            <!-- Email Address of Point of Contact Start -->
            <label for="poc-email"><span style="color: red;"> * </span>Email Address (Enter only official email ID)</label>
            <input type="text" id="poc-email" name="poc_email" class="form-control" placeholder="Enter email address" required>
            <!-- Email validation message -->
            <span id="poc-email-validation" style="color: red;"></span>
            <!-- Email Address of Point of Contact End -->
          </p>
        </div>
        <!-- Details of Point of Contact End -->

        <!-- Reporting boundary Start -->
        <div class="form-group">
          <label for="rep-b">Reporting boundary</label>
          <input type="text" id="rep-b" name="rep_b" class="form-control" placeholder="Enter Reporting boundary" >
        </div>
        <!-- Reporting boundary End -->

        <!-- Details of Business activities Start -->
        <div class="form-group">
          <label for="doba">Details of Business activities</label>
          <textarea id="doba" name="doba" rows="5" cols="50" class="form-control" placeholder="Enter details of Business activities of the entity (accounting for 90% of the entity’s Turnover)"></textarea>
        </div>
        <!-- Details of Business activities End -->

        <!-- Details of the products & services Start -->
        <div class="form-group">
          <label for="dops">Details of the products & services</label>
          <textarea id="dops" name="dops" rows="5" cols="50" class="form-control" placeholder="Enter details of the products & services sold by the entity (accounting for 90% of the entity’s Turnover)" ></textarea>
        </div>
        <!-- Details of the products & services End -->

        <!-- Number of locations Start -->
        <div class="form-group">
          <label for="nol">Number of locations</label>
          <input type="text" id="nol" name="nol" placeholder=" Enter number of locations where plants/operation/ offices of the entity are located.">
        </div>
        <!-- Number of locations End -->

        <!-- Details regarding markets served by the entity Start -->
        <div class="form-group">
          <label for="drm">Details regarding markets served by the entity.</label>
          <textarea id="drm" name="drm" rows="5" cols="50" class="form-control" placeholder="Enter details regarding markets served by the entity." ></textarea>
        </div>
        <!-- Details regarding markets served by the entity End -->

        <!-- Details of Employees & Workers Start -->
        <div class="form-group">
          <p class="poc">
            <label for="details">Details of Employees & Workers</label>
            <br/>
            <!-- Total number of Employees & Workers Start -->
            <label for="tote">Total number of Employees & Workers</label>
            <input type="text" id="tote" name="tote" placeholder="Enter the total number of Employees & Workers">
            <!-- Total number of Employees & Workers End -->

            <!-- Permanent Employees Start -->
            <label for="type">Permanent</label>
            <label for="male">Male Employee</label>
            <input type="text" id="male" name="male" placeholder="Number of male employee">
            <label for="female">Female Employee</label>
            <input type="text" id="female" name="female" placeholder="Number of female employee">
            <!-- Permanent Employees End -->

            <!-- Temporary Employees Start -->
            <label for="type1">Temporary</label>
            <label for="male1">Male Employee</label>
            <input type="text" id="male1" name="malet" placeholder="Number of male employee">
            <label for="female1">Female Employee</label>
            <input type="text" id="female1" name="femalet" placeholder="Number of female employee">
            <!-- Temporary Employees End -->
          </p>
        </div>
        <!-- Details of Employees & Workers End -->

        <!-- Participation/Inclusion/Representation of Women Start -->
        <div class="form-group">
          <label for="p-no"><span style="color: red;"> * </span>Participation/Inclusion/Representation of Women</label>
          <input type="text" id="p-no" name="p_no" required pattern="[0-9]+" placeholder=" Enter number of Female members of the BOD/KMP">
        </div>
        <!-- Participation/Inclusion/Representation of Women End -->

        <!-- Turnover rate for permanent employees & workers (For past 3 years) Start -->
        <div class="form-group">
          <label for="tor"><span style="color: red;"> * </span>Turnover rate for permanent employees & workers (For past 3 years)</label>
          <input type="text" id="tor" name="tor" required pattern="[0-9]+" placeholder="Enter Turnover rate for past 3 years">
        </div>
        <!-- Turnover rate for permanent employees & workers (For past 3 years) End -->

        <!-- Details of corporate structure Start -->
        <div class="form-group">
          <p class="poc">
          <label for="details">Details of corporate structure</label>
            <br>
            <!-- Holding Start -->
            <label for="holding">Holding</label>
            <input type="text" id="holding" name="holding" placeholder="Enter the details of Holding">
            <!-- Holding End -->

            <!-- Subsidiary Start -->
            <label for="subsidiary">Subsidiary</label>
            <input type="text" id="subsidiary" name="subsidiary" placeholder="Enter the subsidiary">
            <!-- Subsidiary End -->

            <!-- Associate Companies (including joint ventures) Start -->
            <label for="ac">Associate Companies (including joint ventures)</label>
            <textarea id="ac" name="ac" rows="5" cols="50" class="form-control" placeholder="Enter the details of Associate Companies (including joint ventures)" ></textarea>
            <!-- Associate Companies (including joint ventures) End -->
          </p>
        </div>
        <!-- Details of corporate structure End -->

        <!-- Details of Corporate Social Responsibility (CSR) Activities Start -->
        <div class="form-group">
          <label for="csr">Details of Corporate Social Responsibility (CSR) Activities </label>
          <textarea id="csr" name="csr" rows="5" cols="50" class="form-control" placeholder="Enter the details of CSR Activities" ></textarea>  
        </div>
        <!-- Details of Corporate Social Responsibility (CSR) Activities End -->

        <!-- Grievance redressal Start -->
        <div class="form-group">
          <label for="gre"><span style="color: red;"> * </span>Grievance redressal </label>
          <textarea id="gre" name="gre" rows="5" cols="50" class="form-control" placeholder=" Raise concerns about, & seek remedy for, the organization’s potential & actual negative impacts on them" required></textarea>  
        </div>
        <!-- Grievance redressal End -->

        <!-- Overview of the entity’s material responsible business conduct issues Start -->
        <div class="form-group">
          <label for="overview"><span style="color: red;"> * </span>Overview of the entity’s material responsible business conduct issues </label>
          <textarea id="overview" name="overview" rows="5" cols="50" class="form-control" placeholder="Increased awareness & understanding of climate risks & opportunities within the entity resulting in better risk management & more informed strategic planning" required></textarea>  
        </div>
        <!-- Overview of the entity’s material responsible business conduct issues End -->

        <!-- form fields ends-->
        <button type="submit" name="submit" class="custom-btn btn-13">Submit</button>
        <button class="custom-btn btn-15">Reset</button>
      </form>
    </div>
    <!--Including JavaScript-->
    <script src="sec_A.js"></script>
    <script src="sec_A_form_submit_validation.js"></script>

    <!-- Footer Section -->
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