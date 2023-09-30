<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/jpg" href="../images/cusrrs.jpg"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entity NGRBC Policy Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="sec_B.css">
    <style>
        .hidden {
            display: none;
        }
    </style>
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

    <div class="container">
        <form method="post" action="sec_B_response.php" enctype="multipart/form-data">
            <h1>Section B form</h1>
            <div class="mb-3">
                <div class="policy">
                    <label for="policyQuestion" class="form-label">Whether your entity’s policy/policies cover each principle & core elements of National Guidelines on responsible Business conduct (NGRBC):</label>
                </div>
                <select class="form-select" id="policyQuestion" name="policyQuestion">
                    <option value="">Select an option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="mb-3 hidden" id="policyLinkContainer">
                <div class="policy">
                    <label for="policyLink" class="form-label">If Web link available, provide the same:</label>
                </div>
                <input type="text" class="form-control" id="policyLink" name="policyLink">
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="procedureQuestion" class="form-label"><span style="color: red;"> * </span>Whether the entity has translated the policy into procedures:</label>
                </div>
                <select class="form-select" id="procedureQuestion" name="procedureQuestion" required>
                    <option value="">Select an option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="mb-3 hidden" id="procedureLinkContainer">
                <div class="policy">
                    <label for="procedureLink" class="form-label">If Web link available, provide the same:</label>
                </div>
                <input type="text" class="form-control" id="procedureLink" name="procedureLink">
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="valueChainQuestion" class="form-label"><span style="color: red;"> * </span>Do the enlisted policies extend to your value chain partners?:</label>
                </div>
                <select class="form-select" id="valueChainQuestion" name="valueChainQuestion" required>
                    <option value="">Select an option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="mb-3 hidden" id="valueChainLinkContainer">
                <div class="policy">
                    <label for="valueChainLink" class="form-label">If Web link available, provide the same:</label>
                </div>
                <input type="text" class="form-control" id="valueChainLink" name="valueChainLink">
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="standardsQuestion" class="form-label">Name of the national & international codes/certifications/labels/standards adopted by your entity & mapped to each principle:</label>
                </div>
                <textarea class="form-control" id="standardsQuestion" name="standardsQuestion" rows="4" ></textarea>
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="commitmentsQuestion" class="form-label">Specific commitments, goals & targets set by the entity with defined timelines, if any:</label>
                </div>
                <textarea class="form-control" id="commitmentsQuestion" name="commitmentsQuestion" rows="4" ></textarea>
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="performanceQuestion" class="form-label"><span style="color: red;"> * </span>Performance of the entity against the specific commitments, goals & targets along with reasons in case the same are not met:</label>
                </div>
                <textarea class="form-control" id="performanceQuestion" name="performanceQuestion" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="directorStatement" class="form-label"><span style="color: red;"> * </span>Statement by director responsible for the business responsibility report, highlighting ESG related challenges, targets & achievements:</label>
                </div>
                <textarea class="form-control" id="directorStatement" name="directorStatement" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="achievementsQuestion" class="form-label"><span style="color: red;"> * </span>Please provide your Achievements as a PDF file (Max 5 MB)</label>
                </div>
                <input type="file" id="file" name="uploadedFiles[]" accept=".pdf" required multiple>
                <br><br>
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="authorityDetails" class="form-label"><span style="color: red;"> * </span>Details of the highest authority responsible for implementation & oversight of the Business Responsibility policy:</label>
                </div>
                <textarea class="form-control" id="authorityDetails" name="authorityDetails" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="sustainabilityCommitteeQuestion" class="form-label"><span style="color: red;"> * </span>Does the entity have a specified Committee of the Board/Director responsible for decision-making on sustainability-related issues?</label>
                </div>
                <select class="form-select" id="sustainabilityCommitteeQuestion" name="sustainabilityCommitteeQuestion" required>
                    <option value="">Select an option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="mb-3 hidden" id="committeeDetailsContainer">
                <div class="policy">
                    <label for="committeeDetails" class="form-label">If yes, provide details:</label>
                </div>
                <textarea class="form-control" id="committeeDetails" name="committeeDetails" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="assessmentQuestion" class="form-label">Has the entity carried out independent assessment/evaluation of the working of its policies by an external agency?</label>
                </div>
                <select class="form-select" id="assessmentQuestion" name="assessmentQuestion" >
                    <option value="">Select an option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="mb-3 hidden" id="agencyDetailsContainer">
                <div class="policy">
                    <label for="agencyDetails" class="form-label">If yes, provide agency details:</label>
                </div>
                <textarea class="form-control" id="agencyDetails" name="agencyDetails" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="sec_B.js"></script>
    <script>
        function submitForm() {
            // You can perform any form validation here before submission.
        if (isSuccessful) {
                alert("Form submitted successfully!");
                window.location.href = "../sec_C/sec_C.php";
            } else {
                alert("Form submission failed. Please try again.");
                window.location.href = "../sec_B/sec_B.php";
            }
            
            // Return false to prevent the form from actually submitting.
            // You can remove this line if you want the form to submit even after showing the alert.
            return false;
        }
    </script>
</body>
</html>