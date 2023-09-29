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
      <h1 class="logo"><a href="index.php">CHRIST University Susatinable Research Society</a></h1>
      <ul class="main-nav">
        <li><a href="">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </header>
    <div class="container form-container">
      <h1>Section A form</h1>
      <form id="primary" enctype="multipart/form-data">
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
          <p id="validationMessage"></p>
            <script>
              const emailInput = document.getElementById("email");
              const validationMessage = document.getElementById("validationMessage");
              emailInput.addEventListener("input", function() {
              const email = emailInput.value;
              const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
              if (emailRegex.test(email)) {
                validationMessage.textContent = "Valid email!";
                validationMessage.style.color = "green";
              } else {
                  validationMessage.textContent = "Invalid email ID";
                  validationMessage.style.color = "red";
              }
              });
           </script>
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

        <div class="mb-3">
          <div class="policy">
            <label for="incorporation_certificate"><span style="color: red;"> * </span>Please provide your incorporation certificate as a PDF file (Max 5 MB)</label>
          </div>
          <input type="file" id="file" name="uploadedFiles[]" accept=".pdf" required multiple><br><br>
        </div>

        <div class="form-group">
          <label for="se-name"><span style="color: red;"> * </span>Name of the Stock Exchange(s)</label>
          <input type="text" id="se-name" name="name_stock" class="form-control" placeholder="Enter name of the Stock Exchange(s) where shares are listed" required>
        </div>

        <div class="form-group">
          <label for="puc"><span style="color: red;"> * </span>Paid-up Capital</label>
          <input type="text" id="puc" name="puc" required pattern="[0-9]+">
        </div>

        <!-- Details of POC -->
        <div class="form-group">
          <p class="poc">
            <label for="details"><span style="color: red;"> * </span>Details of Point of Contact</label><br>
            <label for="poc-name"><span style="color: red;"> * </span>Name</label>
            <input type="text" id="poc-name" name="poc_name" placeholder="Enter the name of the person to contact for queries" required>
            <label for="poc-phone"><span style="color: red;"> * </span>Phone Number</label>
            <input type="text" id="poc-phone" name="poc_phone" required pattern="[0-9]+" placeholder="Enter the contact number">
            <label for="poc-email"><span style="color: red;"> * </span>Email Address</label>
            <input type="text" id="poc-email" name="poc_email" class="form-control" placeholder="Enter email address" required>
            <p id="poc-validationMessage">Enter a valid email address.</p> <!-- Unique validation message ID -->
            <script>
              const pocEmailInput = document.getElementById("poc-email"); // Unique ID
              const pocValidationMessage = document.getElementById("poc-validationMessage"); // Unique ID
              pocEmailInput.addEventListener("input", function() {
                const email = pocEmailInput.value;
                const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                if (emailRegex.test(email)) {
                  pocValidationMessage.textContent = "Valid email!";
                  pocValidationMessage.style.color = "green";
                } else {
                  pocValidationMessage.textContent = "Invalid email ID";
                  pocValidationMessage.style.color = "red";
                }
              });
            </script>
          </p>
        </div>
        <!-- Details of POC ends -->
        <div class="form-group">
          <label for="rep-b">Reporting boundary</label>
          <input type="text" id="rep-b" name="rep_b" class="form-control" placeholder="Enter Reporting boundary" >
        </div>
        <div class="form-group">
          <label for="doba">Details of Business activities</label>
          <textarea id="doba" name="doba" rows="5" cols="50" class="form-control" placeholder="Enter details of Business activities of the entity (accounting for 90% of the entity’s Turnover)"></textarea>
        </div>
        <div class="form-group">
          <label for="dops">Details of the products & services</label>
        <textarea id="dops" name="dops" rows="5" cols="50" class="form-control" placeholder="Enter details of the products & services sold by the entity (accounting for 90% of the entity’s Turnover)" ></textarea>
        </div>
        <div class="form-group">
          <label for="nol">Number of locations</label>
          <input type="text" id="nol" name="nol" placeholder=" Enter number of locations where plants/operation/ offices of the entity are located.">
        </div>
        <div class="form-group">
          <label for="drm">Details regarding markets served by the entity.</label>
          <textarea id="drm" name="drm" rows="5" cols="50" class="form-control" placeholder="Enter details regarding markets served by the entity." ></textarea>
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
            <input type="text" id="male1" name="malet" placeholder="Number of male employee">
            <label for="female1">Female Employee</label>
            <input type="text" id="female1" name="femalet" placeholder="Number of female employee">
          </p>
        </div>
        <!-- Deatils of employee ends-->
        <div class="form-group">
          <label for="p-no"><span style="color: red;"> * </span>Participation/Inclusion/Representation of Women</label>
          <input type="text" id="p-no" name="p_no" required pattern="[0-9]+" placeholder=" Enter number of Female members of the BOD/KMP">
        </div>
        <div class="form-group">
          <label for="tor"><span style="color: red;"> * </span>Turnover rate for permanent employees & workers (For past 3 years)</label>
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
            <input type="text" id="subsidiary" name="subsidiary" placeholder="Enter the subsidiary">
            
            <label for="ac">Associate Companies (including joint ventures)</label>
            <textarea id="ac" name="ac" rows="5" cols="50" class="form-control" placeholder="Enter the details of Associate Companies (including joint ventures)" ></textarea>  
          </p>
        </div>
        <!-- Deatils of corporate structure ends-->
        <div class="form-group">
          <label for="csr">Details of CSR Activities </label>
          <textarea id="csr" name="csr" rows="5" cols="50" class="form-control" placeholder="Enter the details of CSR Activities" ></textarea>  
        </div>

        <div class="form-group">
          <label for="gre"><span style="color: red;"> * </span>Grievance redressal </label>
          <textarea id="gre" name="gre" rows="5" cols="50" class="form-control" placeholder=" Raise concerns about, & seek remedy for, the organization’s potential & actual negative impacts on them" required></textarea>  
        </div>

        <div class="form-group">
          <label for="overview"><span style="color: red;"> * </span>Overview of the entity’s material responsible business conduct issues </label>
          <textarea id="overview" name="overview" rows="5" cols="50" class="form-control" placeholder="Increased awareness & understanding of climate risks & opportunities within the entity resulting in better risk management & more informed strategic planning" required></textarea>  
        </div>

        <!-- form fields ends-->
        <button type="submit" name="submit" class="custom-btn btn-13">Submit</button>
        <button class="custom-btn btn-15">Reset</button>
      </form>

      <!--code to check whether cin is unique or not-->
      <script>
        document.getElementById("primary").addEventListener("submit", function (event) {
          event.preventDefault(); // Prevent the default form submission
          var formData = new FormData(this); // Serialize the entire form data
          // Make an AJAX POST request to the PHP script
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function () {
            if (this.readyState == 4) {
              if (this.status == 200) {
                var response = parseInt(this.responseText);
                if (response === 1) {
                  alert("Successfully submitted!");
                  window.location.href = "../sec_B/sec_B.php";
                } else {
                    alert("Failed: CIN is not unique.");
                    window.location.href = "../sec_B/sec_B.php";
                }
              } else {
                  alert("Failed to submit. Please try again later.");
              }
            }
          };
          xhttp.open("POST", "sec_A_response.php", true);
          xhttp.send(formData); // Send the entire form data
        });
      </script>

    </div>
    <!--Footer Section-->
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