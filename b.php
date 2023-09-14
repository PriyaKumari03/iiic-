﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Entity NGRBC Policy Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="b.css">
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
        <form id="policyForm" method="post" action="process_b.php" enctype="multipart/form-data">
            <h1>Section B form</h1>
            <div class="mb-3">
                <div class="policy">
                    <label for="policyQuestion" class="form-label">Whether your entity’s policy/policies cover each principle & core elements of NGRBCs:</label>
                </div>
                <select class="form-select" id="policyQuestion" name="policyQuestion" required>
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
                    <label for="procedureQuestion" class="form-label">Whether the entity has translated the policy into procedures:</label>
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
                    <label for="valueChainQuestion" class="form-label">Do the enlisted policies extend to your value chain partners?:</label>
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
                <textarea class="form-control" id="standardsQuestion" name="standardsQuestion" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="commitmentsQuestion" class="form-label">Specific commitments, goals & targets set by the entity with defined timelines, if any:</label>
                </div>
                <textarea class="form-control" id="commitmentsQuestion" name="commitmentsQuestion" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="performanceQuestion" class="form-label">Performance of the entity against the specific commitments, goals & targets along with reasons in case the same are not met:</label>
                </div>
                <textarea class="form-control" id="performanceQuestion" name="performanceQuestion" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="directorStatement" class="form-label">Statement by director responsible for the business responsibility report, highlighting ESG related challenges, targets & achievements:</label>
                </div>
                <textarea class="form-control" id="directorStatement" name="directorStatement" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="achievementsQuestion" class="form-label">Achievements:</label>
                </div>
                <input type="file" id="file" name="uploadedFiles[]" multiple>
                <br><br>
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="authorityDetails" class="form-label">Details of the highest authority responsible for implementation & oversight of the Business Responsibility policy:</label>
                </div>
                <textarea class="form-control" id="authorityDetails" name="authorityDetails" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="sustainabilityCommitteeQuestion" class="form-label">Does the entity have a specified Committee of the Board/Director responsible for decision-making on sustainability-related issues?</label>
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
                <select class="form-select" id="assessmentQuestion" name="assessmentQuestion" required>
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
    <script src="b.js"></script>
</body>
</html>