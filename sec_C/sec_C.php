<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/jpg" href="../images/cusrrs.jpg"> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Entity NGRBC Policy Form</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="sec_C.css">
        <style>
            .hidden {
                display: none;
            }
            @media screen and (max-width: 800px) {
                #cinDiv {
                    display: none;
                }
            }
        </style>
    </head>

    <?php
        session_start();
        if (isset($_SESSION['cin'])) 
            $cin = $_SESSION['cin'];
    ?>
    <body>
        <header class="header">
            <h1 class="logo"><a href="#">CUSRS</a></h1>
            <div style="padding-left:20%;" id="cinDiv">
                <?php
                    if (!empty($cin)) {
                        echo '<div class="form-label" style="float:center; margin-top:1%"><h4>CIN: ' . $cin . '</h4></div>';
                    }
                ?>
            </div>
            <ul class="main-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </header>
        <!------------------------------------------------------------------------------------------------------------------------->
        <!--                                                                                                                     -->
        <!--                                                Main Division                                                        -->
        <!--                                                                                                                     -->
        <!-------------------------------------------------------------------------------------------------------------------------> 
        <div class="container">
            <form method="post"  id="myForm" action="" enctype="multipart/form-data" novalidate>
                <h1>SECTION C : PRINCIPLE WISE PERFORMANCE DISCLOSURE</h1>
   
                <!------------------------------------------------------------------------------------------------------------------------->
                <!--                                                                                                                     -->
                <!--                                                PRINCIPLE 1 -START                                                   -->
                <!--                                                                                                                     -->
                <!------------------------------------------------------------------------------------------------------------------------->     
                <div id="prin1" class="prin-div" style="display:block;">
                    <div class="policy">
                        <h3>PRINCIPLE 1: BUSINESSES SHOULD CONDUCT & GOVERN THEMSELVES WITH INTEGRITY, & IN A MANNER THAT IS ETHICAL, TRANSPARENT & ACCOUNTABLE.</h3>
                    </div>

                    <!------------------------------------------------------------------------------------------------------------------------->
                    <!--                                     ESSENTIAL INDICATORS -START                                                     -->
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <div class="bold_border_container">
                        <div class="policy">
                            <h3 style="text-align: center; border-bottom: 2px solid #2d6a4f; padding-bottom: 15px;">Essential Indicators</h3>
                        </div>

                        <!--Percentage coverage by training and awareness programmes start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="coverage" class="form-label"><span style="color: red;"> * </span>1. Percentage coverage by training & awareness programmes on any of the Principles during the financial year :</label>
                            </div>
                            <div id="coverage" class="responsive-table">
                                <table id=p_coverage>
                                    <thead>
                                        <tr>
                                            <th class="form-label">Segment</th>
                                            <th class="form-label">Total number of training and awareness programmes held</th>
                                            <th class="form-label">Topics/Principles covered under the training and its impact</th>
                                            <th class="form-label">%age of persons in respective category covered by the awareness programmes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="form-label">Board of Directors</th>
                                            <td><input type="text" id="coverage" name="coverage[]" class="form-control" required></td>
                                            <td><input type="text" id="coverage" name="coverage[]" class="form-control" required></td>
                                            <td><input type="text" id="coverage" name="coverage[]" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <th class="form-label">Key Managerial Personnel</th>
                                            <td><input type="text" id="coverage" name="coverage[]" class="form-control" required></td>
                                            <td><input type="text" id="coverage" name="coverage[]" class="form-control" required></td>
                                            <td><input type="text" id="coverage" name="coverage[]" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <th class="form-label">Employees other than BoD and KMPs</th>
                                            <td><input type="text" id="coverage" name="coverage[]" class="form-control" required></td>
                                            <td><input type="text" id="coverage" name="coverage[]" class="form-control" required></td>
                                            <td><input type="text" id="coverage" name="coverage[]" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <th class="form-label">Workers</th>
                                            <td><input type="text" id="coverage" name="coverage[]" class="form-control" required></td>
                                            <td><input type="text" id="coverage" name="coverage[]" class="form-control" required></td>
                                            <td><input type="text" id="coverage" name="coverage[]" class="form-control" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--Percentage coverage by training and awareness programmes end-->
                    
                        <!--Details of fines/penalties/punishment/award/compounding fees/settlement amount paid start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="details" class="form-label"><span style="color: red;"> * </span>2. Details of fines / penalties /punishment/ award/ compounding fees/ settlement amount paid in proceedings (by the entity or by directors / KMPs) with regulators/ law enforcement agencies/ judicial institutions, in the financial year:</label>
                            </div>
                            <div id="details" class="responsive-table">
                                <table id="p_details">
                                    <tr>
                                        <th class="form-label" colspan="6">Monetary</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th class="form-label">NGRBC Principle</th>
                                        <th class="form-label">Name of the regulatory/enforcement agencies judicial institutions</th>
                                        <th class="form-label">Amount (In INR)</th>
                                        <th class="form-label">Brief of the case</th>
                                        <th class="form-label">Has an appeal been preferred?(Yes/No)</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Penalty/fine</th>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">settlement</th>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Compounding fee</th>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>  
                                    </tr>
                                    <tr>
                                        <th  class="form-label" colspan="6">Non-Monetary</th>
                                    <tr>
                                    <tr>
                                        <th></th>
                                        <th class="form-label">NGRBC Principle</th>
                                        <th class="form-label">Name of the regulatory/enforcement agencies judicial institutions</th>
                                        <th class="form-label">Amount (In INR)</th>
                                        <th class="form-label">Brief of the case</th>
                                        <th class="form-label">Has an appeal been preferred?(Yes/No)</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Imprisonment</th>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Punishment</th>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>
                                        <td><input type="text" id="details" name="details[]" class="form-control" required></td>  
                                    </tr>
                                </table>
                            </div>
                        </div>
                         <!--Details of fines/penalties/punishment/award/compounding fees/settlement amount paid end-->

                        <!--Details of appeal/revision preferred in cases where monetary or non-monetary actions has been appealed start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="appeal" class="form-label">3. Of the instances disclosed in Question 2 above, details of the Appeal/ Revision preferred in cases where monetary or non-monetary action has been appealed.</label>
                            </div>
                            <div id="appeal" class="responsive-table">
                                <table id="appeal">
                                    <tr>
                                        <th class="form-label">S.No.</th>
                                        <th class="form-label">Case Details</th>
                                        <th class="form-label">Name of the regulatory/enforcement agencies/judicial instutions</th>
                                    </tr>
                                    <tr>
                                        <td style="width:5%;"><input type="number" id="appeal" id="p_appeal" name="appeal[]" class="table-control" required value="1" readonly></td>
                                        <td><input type="text" id="appeal" name="appeal[]" class="form-control" required></td>
                                        <td><input type="text" id="appeal" name="appeal[]" class="form-control" required></td>
                                    </tr>
                                </table>
                                <div>
                                    <input type="number" id="indexInput1_3" placeholder="Enter Index">
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addRowAtIndex1_3()">Add At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeSpecificRow1_3()">Remove At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addBottomRow1_3()">Add Row</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeBottomRow1_3()">Remove Row</button>
                                </div>
                            </div>
                        </div>
                        <!--Details of appeal/revision preferred in cases where monetary or non-monetary actions has been appealed end-->
                    
                        <!--Does the entity have an anti-corruption or anti-bribery policy - details start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="antiCorruptionPolicy" class="form-label">4. Does the entity have an anti-corruption or anti-bribery policy? If yes, provide details in brief & if available, provide a web-link to the policy:</label>
                            </div>
                            <textarea class="form-control" id="antiCorruptionPolicy" name="antiCorruptionPolicy" placeholder="Enter anti-corruption/anti-bribery policy details"></textarea>
                        </div>
                        <!--Does the entity have an anti-corruption or anti-bribery policy - details end-->

                        <!--Number of Directors/KMPs/employees/workers against whom disciplinary action was taken start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="disciplinaryAction" class="form-label"><span style="color: red;"> * </span>5. Number of Directors/KMPs/employees/workers against whom disciplinary action was taken by any law enforcement agency for the charges of bribery/ corruption:</label>
                            </div>
                            <div id="disciplinaryAction" class="responsive-table">
                                <table id="p_disciplinaryAction">
                                    <tr>
                                        <th></th>
                                        <th class="form-label">FY___(Current Financial Year)</th>
                                        <th class="form-label">FY___(Previous Financial Year)</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Directors</th>
                                        <td><input type="text" id="disciplinaryAction" name="disciplinaryAction[]" class="form-control" required></td>
                                        <td><input type="text" id="disciplinaryAction" name="disciplinaryAction[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">KMPs</th>
                                        <td><input type="text" id="disciplinaryAction" name="disciplinaryAction[]" class="form-control" required></td>
                                        <td><input type="text" id="disciplinaryAction" name="disciplinaryAction[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Employees</th>
                                        <td><input type="text" id="disciplinaryAction" name="disciplinaryAction[]" class="form-control" required></td>
                                        <td><input type="text" id="disciplinaryAction" name="disciplinaryAction[]" class="form-control" required></td>     
                                    </tr>
                                    <tr>
                                        <th class="form-label">workers</th>
                                        <td><input type="text" id="disciplinaryAction" name="disciplinaryAction[]" class="form-control" required></td>
                                        <td><input type="text" id="disciplinaryAction" name="disciplinaryAction[]" class="form-control" required></td>
                                </table>
                            </div>
                        </div>
                        <!--Number of Directors/KMPs/employees/workers against whom disciplinary action was taken end-->

                         <!--Details of complaints with regard to conflict of interest start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="conflictComplaints" class="form-label">6. Details of complaints with regard to conflict of interest:</label>
                            </div>
                            <div id="conflictComplaints" class="responsive-table">
                                <table id="p_conflictComplaints">
                                    <tr>
                                        <th  class="form-label" rowspan=2></th>
                                        <th  class="form-label" colspan="2">FY___(Current Financial Year)</th>
                                        <th  class="form-label" colspan="2">FY___(Previous Financial Year)</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Number</th>
                                        <th class="form-label">Remarks</th>
                                        <th class="form-label">Number</th>
                                        <th class="form-label">Remarks</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Number of Complaints received in relation to issues of Conflfict of intrest of the Directors</th>
                                        <td><input type="text" id="conflictComplaints" name="conflictComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="conflictComplaints" name="conflictComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="conflictComplaints" name="conflictComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="conflictComplaints" name="conflictComplaints[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Number of Complaints received in relation to issues of Conflect to Intrest of the KMPs</th>
                                        <td><input type="text" id="conflictComplaints" name="conflictComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="conflictComplaints" name="conflictComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="conflictComplaints" name="conflictComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="conflictComplaints" name="conflictComplaints[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Details of complaints with regard to conflict of interest end-->
                    
                        <!--Details of corrective action taken or underway on issues related to fines / penalties / action taken by regulators start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="correctiveAction" class="form-label">7. Provide details of any corrective action taken or underway on issues related to fines / penalties / action taken by regulators/ law enforcement agencies/ judicial institutions, on cases of corruption & conflicts of interest:</label>
                            </div>
                            <textarea class="form-control" id="correctiveAction" name="correctiveAction" placeholder="Enter corrective action details"></textarea>
                        </div>
                        <!--Details of corrective action taken or underway on issues related to fines / penalties / action taken by regulators end-->
                    </div>

                    <!------------------------------------------------------------------------------------------------------------------------->
                    <!--                                     LEADERSHIP INDICATORS -START                                                    -->
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <div class="bold_border_container">
                        <div class="policy">
                             <h3 style="text-align: center; border-bottom: 2px solid #2d6a4f; padding-bottom: 15px;">Leadership Indicators</h3>
                        </div>

                        <!--Awareness programmes conducted for value chain partners on any of the Principles start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="awarenessProgrammes" class="form-label"><span style="color: red;"> * </span>1. Awareness programmes conducted for value chain partners on any of the Principles during the financial year:</label>
                            </div>
                            <div id="awarenessProgrammes" class="responsive-table">
                                <table id="p_awarenessProgrammes">
                                    <tr>
                                        <th class="form-label">S.No</th>
                                        <th class="form-label">Total number of awareness programes held</th>
                                        <th class="form-label">Topics/Principles Covered Under the training</th>
                                        <th class="form-label">%age of value chain partners covered (by value of business done with such partners)under the awareness programmes</th>
                                    </tr>
                                        <tr><td style="width:5%;"><input type="number" id="awarenessProgrammes" id="p_awarenessProgrammes" name="awarenessProgrammes[]" class="table-control" required value="1" readonly></td>
                                        <td><input type="text" id="awarenessProgrammes" name="awarenessProgrammes[]" class="form-control" required></td>
                                        <td><input type="text" id="awarenessProgrammes" name="awarenessProgrammes[]" class="form-control" required></td>
                                        <td><input type="text" id="awarenessProgrammes" name="awarenessProgrammes[]" class="form-control" required></td>
                                    </tr>
                                </table>
                                <div>
                                    <input type="number" id="indexInput1_p_1" placeholder="Enter Index">
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addRowAtIndex1_p_1()">Add At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeSpecificRow1_p_1()">Remove At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addBottomRow1_p_1()">Add Row</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeBottomRow1_p_1()">Remove Row</button>
                                </div>
                            </div>
                        </div>
                        <!--Awareness programmes conducted for value chain partners on any of the Principles end-->
                
                        <!--Does the entity have processes in place to avoid/ manage conflict of interests involving members of the Board? start-->
                        <div class="mb-3">
                            <div class="policy">
                                 <label for="conflictOfInterest" class="form-label"><span style="color: red;"> * </span>2. Does the entity have processes in place to avoid/manage conflict of interests involving members of the Board?(Yes/No). If yes, provide details of the same:</label>
                            </div>
                            <select class="form-select" id="conflictOfInterest" name="conflictOfInterest" required>
                                <option value="">Select an option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <!--hidden question ( only display if option is yes )-->
                        <div class="mb-3 hidden" id="conflictDetails">
                            <div class="policy">
                                 <label for="conflictDetails" class="form-label">Enter conflict of interest details:</label>
                            </div>
                            <textarea class="form-control" id="conflictDetails" name="conflictDetails"></textarea>
                        </div>
                        <!--Does the entity have processes in place to avoid/ manage conflict of interests involving members of the Board? end-->
              
                        <div class="mb-3 hidden" id="conflictDetails">
                            <div class="policy">
                                <label for="conflictDetails" class="form-label">Enter conflict of interest details:</label>
                            </div>
                            <textarea class="form-control" id="conflictDetails" name="conflictDetails"></textarea>
                        </div>
                    </div>
                    <button type="button" class="btn-primary" onclick="navigate(1)">Next</button>
                </div>

                <!------------------------------------------------------------------------------------------------------------------------->
                <!--                                                                                                                     -->
                <!--                                                PRINCIPLE 2 -START                                                   -->
                <!--                                                                                                                     -->
                <!-------------------------------------------------------------------------------------------------------------------------> 
                <div id="prin2" class="prin-div">
                    <div class="policy">
                        <h3>PRINCIPLE 2: BUSINESSES SHOULD RESPECT THE INTERESTS OF & BE RESPONSIVE TO ALL THEIR STAKEHOLDERS.</h3>
                    </div>

                    <!------------------------------------------------------------------------------------------------------------------------->
                    <!--                                     ESSENTIAL INDICATORS -START                                                     -->
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <div class="bold_border_container">
                        <div class="policy">
                            <h3 style="text-align: center; border-bottom: 2px solid #2d6a4f; padding-bottom: 15px;">Essential Indicators</h3>
                        </div>
                        <!--Percentage of R&D and CAPEX investments start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="rdPercentage" class="form-label"><span style="color: red;"> * </span>1. Percentage of R&D & capital expenditure (capex) investments in specific technologies to improve the environmental & social impacts of product & processes to total R&D & capex investments made by the entity in current & previous FY:</label>
                            </div>
                            <div id="rdpercentage" class="responsive-table">
                                <table id="p_rdpercentage">
                                    <tr>
                                        <th></th>
                                        <th class="form-label">Current Financial Year</th>
                                        <th class="form-label">Previous financial Year</th>
                                        <th class="form-label">Details of improvements in environmental and social impacts</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">R&D</th>
                                        <td><input type="text" id="dpercentage" name="dpercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="dpercentage" name="dpercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="dpercentage" name="dpercentage[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">capex</th>
                                        <td><input type="text" id="dpercentage" name="dpercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="dpercentage" name="dpercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="dpercentage" name="dpercentage[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Percentage of R&D and CAPEX investments end-->
                
                        <!--Does the entity have procedures in place for sustainable sourcing? start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="sustainableSourcing2" class="form-label"><span style="color: red;"> * </span>2. Does the entity have procedures in place for sustainable sourcing? (Yes/No). If yes, specify the percentage:</label>
                            </div>
                            <select class="form-select" id="sustainableSourcing2" name="sustainableSourcing2" required>
                                <option value="">Select an option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <!--hidden question ( only display if option is yes )-->
                        <div class="mb-3 hidden" id="sourcingPercentage2num">
                            <div class="policy">
                                <label for="sourcingPercentage2num" class="form-label">Specify the percentage of sustainable sourcing:</label>
                            </div>
                            <input type="number" id="sourcingPercentage2num" name="sourcingPercentage2num" class="form-control" placeholder="Enter percentage">
                        </div>
                        <!--Does the entity have procedures in place for sustainable sourcing? end-->
                
                        <!--Processes to safely reclaim products for reusing, recycling and disposing at the end of life start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="reclaimProcesses2" class="form-label"><span style="color: red;"> * </span>3. Describe the processes in place to safely reclaim your products for reusing, recycling & disposing at the end of life, for (a) Plastics (including packaging) (b) E-waste (c) Hazardous waste & (d) Other waste:</label>
                            </div>
                            <textarea id="reclaimProcesses2" name="reclaimProcesses2" class="form-control" placeholder="Enter processes for product reclamation" required></textarea>
                        </div>
                        <!--Processes to safely reclaim products for reusing, recycling and disposing at the end of life end-->

                        <!--Whether Extended Producer Responsibility (EPR) is applicable to the entity’s activities start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="eprApplicable" class="form-label"><span style="color: red;"> * </span>4. Whether Extended Producer Responsibility (EPR) is applicable to the entity’s activities (Yes/No). If yes, whether the waste collection plan is in line with the Extended Producer Responsibility (EPR) plan submitted to Pollution Control Boards? If not, provide steps taken to address the same:</label>
                            </div>
                            <select class="form-select" id="eprApplicable" name="eprApplicable" required>
                                <option value="">Select an option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <!--hidden-->
                        <div class="mb-3 hidden" id="eprCollectionPlan">
                            <div class="policy">
                                <label for="eprCollectionPlan" class="form-label">Specify the relevant details:</label>
                            </div>
                            <textarea class="form-control" id="eprCollectionPlan" name="eprCollectionPlan" placeholder="Enter the details"></textarea>
                        </div>
                        <!--Whether Extended Producer Responsibility (EPR) is applicable to the entity’s activities end-->
                    </div>

                    <!------------------------------------------------------------------------------------------------------------------------->
                    <!--                                     LEADERSHIP INDICATORS -START                                                    -->
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <div class="bold_border_container">
                        <div class="policy">
                            <h3 style="text-align: center; border-bottom: 2px solid #2d6a4f; padding-bottom: 15px;">Leadership Indicators</h3>
                        </div>
                        <!--Life Cycle Perspective / Assessments (LCA) for any of the products or for its services start-->
                        <div class="mb-3">
                            <div class="policy">
                                 <label for="lcaConducted2" class="form-label">1. Has the entity conducted Life Cycle Perspective / Assessments (LCA) for any of its products or for its services If yes, provide details, i.e. Name of Product /Service, % of total Turnover contributed, Boundary for which the Life Cycle Perspective/Assessment was conducted, whether conducted by external agency:</label>
                            </div>
                            <div id="lcaConducted2" class="responsive-table">
                                <table id="p_lcaConducted2">
                                    <tr>
                                        <th class="form-label">S.No.</th>
                                        <th class="form-label">NIC code</th>
                                        <th class="form-label">Name of Product/Service</th>
                                        <th class="form-label">% of total Turnover contributed</th>
                                        <th class="form-label">Boundary for which the life Cycle Perspective/Assessment was conducted</th>
                                        <th class="form-label">Whether conducted by independent external agency(Yes/No)</th>
                                        <th class="form-label">Results communicated in public domain(yes/no) if yes, provide the web-link</th>
                                    </tr>
                                    <tr>
                                        <tr><td style="width:5%;"><input type="number" id="lcaConducted2" id="p_lcaConducted2" name="lcaConducted2[]" class="table-control" required value="1" readonly></td>
                                        <td><input type="text" id="lcaConducted2" name="lcaConducted2[]" class="form-control" required></td>
                                        <td><input type="text" id="lcaConducted2" name="lcaConducted2[]" class="form-control" required></td>
                                        <td><input type="text" id="lcaConducted2" name="lcaConducted2[]" class="form-control" required></td>
                                        <td><input type="text" id="lcaConducted2" name="lcaConducted2[]" class="form-control" required></td>
                                        <td><input type="text" id="lcaConducted2" name="lcaConducted2[]" class="form-control" required></td>
                                        <td><input type="text" id="lcaConducted2" name="lcaConducted2[]" class="form-control" required></td>
                                        <td><input type="text" id="lcaConducted2" name="lcaConducted2[]" class="form-control" required></td>
                                    </tr>
                                </table>
                                <div>
                                    <input type="number" id="indexInput2_1" placeholder="Enter Index">
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addRowAtIndex2_1()">Add At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeSpecificRow2_1()">Remove At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addBottomRow2_1()">Add Row</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeBottomRow2_1()">Remove Row</button>
                                </div>
                            </div>
                        </div>
                        <!--Life Cycle Perspective / Assessments (LCA) for any of the products or for its services end-->
                
                        <!--Significant social or environmental concerns as identified in the Life Cycle Perspective/Assessments (LCA) start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="concernsMitigation2" class="form-label">2. If there are any significant social or environmental concerns &/or risks arising from production or disposal of your products / services, as identified in the Life Cycle Perspective / Assessments (LCA) or through any other means, briefly describe the same along-with action taken to mitigate the same:</label>
                            </div>
                            <div id="concernsMitigation2" class="responsive-table">
                                <table id="p_concernsMitigation2">
                                    <tr>
                                        <th class="form-label">S.No.</th>
                                        <th class="form-label">Name of Product/service</th>
                                        <th class="form-label">Description of the risk/concern</th>
                                        <th class="form-label">Action Taken</th>
                                    </tr>
                                    <tr>
                                        <tr><td style="width:5%;"><input type="number" id="concernsMitigation2" id="p_concernsMitigation2" name="concernsMitigation2[]" class="table-control" required value="1" readonly></td>                          
                                        <td><input type="text" id="concernsMitigation2" name="concernsMitigation2[]" class="form-control" required></td>                          
                                        <td><input type="text" id="concernsMitigation2" name="concernsMitigation2[]" class="form-control" required></td>                          
                                        <td><input type="text" id="concernsMitigation2" name="concernsMitigation2[]" class="form-control" required></td>
                                    </tr>
                                </table>
                                <div>
                                    <input type="number" id="indexInput2_2" placeholder="Enter Index">
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addRowAtIndex2_2()">Add At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeSpecificRow2_2()">Remove At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addBottomRow2_2()">Add Row</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeBottomRow2_2()">Remove Row</button>
                                </div>
                            </div>
                        </div>
                        <!--Significant social or environmental concerns as identified in the Life Cycle Perspective/Assessments (LCA) end-->
                
                        <!--Percentage of recycled or reused input material to total material used in production start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="recycledPercentage2" class="form-label"><span style="color: red;"> * </span>3. Percentage of recycled or reused input material to total material (by value) used in production or providing services in current & previous FY:</label>
                            </div>
                            <div id="recycledPercentage2" class="responsive-table">
                                <table id="p_recycledPercentage2">
                                    <tr>
                                        <th class="form-label" rowspan="2">S.No.</th>
                                        <th class="form-label" rowspan="2">Indicate input material</th>
                                        <th class="form-label" colspan="2">Recycled or re-used input material to total material </th>
                                    </tr>
                                    <tr>
                                        <th class="form-label"> FY___current Financial Year</th>
                                        <th class="form-label"> FY___Previous Financial Year</th>
                                    </tr>
                                    <tr>
                                        <td style="width:5%;"><input type="number" id="recycledPercentage2" id="p_recycledPercentage2" name="recycledPercentage2[]" class="table-control" required value="1" readonly></td>                                          
                                        <td><input type="text" id="rrecycledPercentage2" name="recycledPercentage2[]" class="form-control" required></td>
                                        <td><input type="text" id="rrecycledPercentage2" name="recycledPercentage2[]" class="form-control" required></td>
                                        <td><input type="text" id="rrecycledPercentage2" name="recycledPercentage2[]" class="form-control" required></td>
                                    </tr>
                                </table>
                                <div>
                                    <input type="number" id="indexInput2_3" placeholder="Enter Index">
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addRowAtIndex2_3()">Add At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeSpecificRow2_3()">Remove At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addBottomRow2_3()">Add Row</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeBottomRow2_3()">Remove Row</button>
                                </div>
                            </div>
                        </div>
                        <!--Percentage of recycled or reused input material to total material used in production end-->
                   
                        <!--Products and packaging reclaimed at end of life of products, amount reused, recycled, and safely disposed start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="reclaimedProducts2" class="form-label">4. Products & packaging reclaimed at end of life of products, amount (in metric tonnes) reused, recycled, & safely disposed in the current & previous FY:</label>
                            </div>
                            <div id="reclaimedProducts2" class="responsive-table">
                                <table id="p_reclaimedProducts2">
                                    <tr>
                                        <th rowspan=2></th>
                                        <th class="form-label" colspan="3">FY___(Current Financial Year)</th>
                                        <th class="form-label" colspan="3">FY___(Previous Financial Year)</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Re-used</th>
                                        <th class="form-label">Recycled</th>
                                        <th class="form-label">Safely Disposed</th>
                                        <th class="form-label">Re-used</th>
                                        <th class="form-label">Recycled</th>
                                        <th class="form-label">Safely Disposed</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Plastics(including packaging)</th>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control" required></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control" required></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control" required></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control" required></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control" required></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">E-waste</th>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control" required></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control" required></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control" required></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control" required></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control" required></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Hazardous waste</th>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control" required></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control" required></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control" required></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control" required></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control" required></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Other waste</th>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control"></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control"></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control"></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control"></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control"></td>
                                        <td><input type="text" id="reclaimedProducts2" name="reclaimedProducts2[]" class="form-control"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Products and packaging reclaimed at end of life of products, amount reused, recycled, and safely disposed end-->
                   
                        <!--Reclaimed products and their packaging materials for each product category start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="reclaimedPercentages2" class="form-label">5. Reclaimed products & their packaging materials (as percentage of products sold) for each product category:</label>
                            </div>
                            <div id="reclaimedPercentages2" class="responsive-table">
                                <table id="p_reclaimedPercentages2">
                                    <tr>
                                        <th class="form=label">S.No.</th>
                                        <th class="form-label">Indicate product category</th>
                                        <th class="form-label">Reclaimed products and their packaging materials as % of total products sold in respective category</th>
                                    </tr>
                                    <tr>
                                        <td style="width:5%;"><input type="number" id="reclaimedPercentages2" id="p_reclaimedPercentages2" name="reclaimedPercentages2[]" class="table-control" required value="1" readonly></td>                                                                      
                                        <td><input type="text" id="reclaimedPercentages2" name="reclaimedPercentages2[]" class="form-control" required></td>
                                        <td><input type="text" id="reclaimedPercentages2" name="reclaimedPercentages2[]" class="form-control" required></td>
                                    </tr>
                                </table>
                                <div>
                                    <input type="number" id="indexInput2_5" placeholder="Enter Index">
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addRowAtIndex2_5()">Add At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeSpecificRow2_5()">Remove At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addBottomRow2_5()">Add Row</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeBottomRow2_5()">Remove Row</button>
                                </div>
                            </div>
                        </div>
                        <!--Reclaimed products and their packaging materials for each product category end-->  
                    </div>
                    <button type="button" class="btn-primary" onclick="navigate(-1)">Previous</button>
                    <button type="button" class="btn-primary" onclick="navigate(1)">Next</button>
                </div>

                <!------------------------------------------------------------------------------------------------------------------------->
                <!--                                                                                                                     -->
                <!--                                                PRINCIPLE 3 -START                                                   -->
                <!--                                                                                                                     -->
                <!-------------------------------------------------------------------------------------------------------------------------> 
                <div id="prin3" class="prin-div">
                    <div class="policy">
                        <h3>PRINCIPLE 3: BUSINESSES SHOULD RESPECT & PROMOTE THE WELL-BEING OF ALL EMPLOYEES, INCLUDING THOSE IN THEIR VALUE CHAINS.</h3>
                    </div>

                    <!------------------------------------------------------------------------------------------------------------------------->
                    <!--                                     ESSENTIAL INDICATORS -START                                                     -->
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <div class="bold_border_container">
                        <div class="policy">
                            <h3 style="text-align: center; border-bottom: 2px solid #2d6a4f; padding-bottom: 15px;">Essential Indicators</h3>
                        </div>
                        <!--Details of measures for the well-being of employees start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="employeeWellbeingDetails" class="form-label"><span style="color: red;"> * </span>1.1 Details of measures for the well-being of employees :</label>
                            </div>
                            <div id="employeeWellbeingDetails" class="responsive-table">
                                <table id="p_employeeWellbeingDetails">
                                    <tr>
                                        <th class="form-label" rowspan="3">Category</th>
                                        <th class="form-label" colspan="12">%of employees covered by</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label" rowspan="2">Total employees</th>
                                        <th class="form-label" colspan="2">Health insurance</th>
                                        <th class="form-label" colspan="2">Accident insurance</th>
                                        <th class="form-label" colspan="2">Maternity Benefits</th>
                                        <th class="form-label" colspan="2">Paternity Benefits</th>
                                        <th class="form-label" colspan="2">Day-care facilities</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Number (B)</th>
                                        <th class="form-label">%(B/A)</th>
                                        <th class="form-label">Number (C)</th>
                                        <th class="form-label">%(C/A)</th>
                                        <th class="form-label">Number (D)</th>
                                        <th class="form-label">%(D/A)</th>
                                        <th class="form-label">Number (E)</th>
                                        <th class="form-label">%(E/A)</th>
                                        <th class="form-label">Number (F)</th>
                                        <th class="form-label">%(F/A)</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label" colspan="12">Permanent employees</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Male</td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td class="form-label">Female</td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Total</th>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label" colspan="12">Other than Permanent employees</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Male</td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td class="form-label">Female</td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Total</th>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="employeeWellbeingDetails" name="employeeWellbeingDetails[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Details of measures for the well-being of employees end-->

                        <!--Details of measures for the well-being of workers start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="workerWellbeingDetails" class="form-label"><span style="color: red;"> * </span>1.2 Details of measures for the well-being of workers :</label>
                            </div>
                            <div id="workerWellbeingDetails" class="responsive-table">
                                <table id="p_workerWellbeingDetails">
                                    <tr>
                                        <th class="form-label" rowspan="3">Category</th>
                                        <th class="form-label" colspan="12">%of workers covered by</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label" rowspan="2">Total employees</th>
                                        <th class="form-label" colspan="2">Health insurance</th>
                                        <th class="form-label" colspan="2">Accident insurance</th>
                                        <th class="form-label" colspan="2">Maternity Benefits</th>
                                        <th class="form-label" colspan="2">Paternity Benefits</th>
                                        <th class="form-label" colspan="2">Day-care facilities</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Number (B)</th>
                                        <th class="form-label">%(B/A)</th>
                                        <th class="form-label">Number (C)</th>
                                        <th class="form-label">%(C/A)</th>
                                        <th class="form-label">Number (D)</th>
                                        <th class="form-label">%(D/A)</th>
                                        <th class="form-label">Number (E)</th>
                                        <th class="form-label">%(E/A)</th>
                                        <th class="form-label">Number (F)</th>
                                        <th class="form-label">%(F/A)</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label" colspan="12">Permanent workers</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Male</td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td class="form-label">Female</td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Total</th>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label" colspan="12">Other than Permanent workers</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Male</td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td class="form-label">Female</td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Total</th>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="workerWellbeingDetails" name="workerWellbeingDetails[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Details of measures for the well-being of workers end-->

                        <!--Details of retirement benefits start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="retirementBenefitsDetails" class="form-label"><span style="color: red;"> * </span>2. Details of retirement benefits offered to workers & employees, for Current FY & Previous Financial Year:</label>
                            </div>
                            <div id="retirementBenefitsDetails" class="responsive-table">
                                <table id="p_retirementBenefitsDetails">
                                    <tr>
                                        <th class="form-label" rowspan="2">Benefits</th>
                                        <th class="form-label" colspan="3">FY____current Financial Year</th>
                                        <th class="form-label" colspan="3">FY____Previous Financial Year</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">No. of employees covered as a % of total employees</th>
                                        <th class="form-label">No. of employees covered as a % of total workers</th>
                                        <th class="form-label">Deducted and deposited with the authority(Y/N/N.A.)</th>
                                        <th class="form-label">No. of employees covered as a % of total employees</th>
                                        <th class="form-label">No. of employees covered as a % of total workers</th>
                                        <th class="form-label">Deducted and deposited with the authority(Y/N/N.A.)</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">PF</th>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Gratuity</th>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">ESI</th>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>       
                                    </tr>
                                    <tr>
                                        <th class="form-label">Others-please specify</th>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="retirementBenefitsDetails" name="retirementBenefitsDetails[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Details of retirement benefits end-->

                        <!--Accessibility of workplaces start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="accessibilityChoice" class="form-label">3. Are the premises/offices of the entity accessible to differently-abled employees & workers, as per the requirements of the Rights of Persons with Disabilities Act, 2016? If not, whether any steps are being taken by the entity in this regard:</label>
                            </div>
                            <select name="accessibilityChoice" id="accessibilityChoice" class="form-control">
                                <option value="">Select an option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <!--hidden-->
                        <div id="accessibilitySteps" class="mb-3 hidden">
                            <div class="policy">
                                <label for="accessibilitySteps" class="form-label">Specify the steps being taken to make the premises more accessible:</label>
                            </div>
                            <textarea id="accessibilitySteps" name="accessibilitySteps" class="form-control" placeholder="Enter the steps being taken"></textarea>
                        </div>
                        <!--Accessibility of workplaces end-->

                        <!--Does the entity have an equal opportunity policy as per the Rights of Persons with Disabilities Act, 2016? start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="equalOpportunity" class="form-label">4. Does the entity have an equal opportunity policy as per the Rights of Persons with Disabilities Act, 2016? If yes, provide a web link to the policy:</label>
                            </div>
                            <select name="equalOpportunity" id="equalOpportunity" class="form-control">
                                <option value="">Select an option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <!--hidden-->
                        <div id="equalOpportunityLink" class="mb-3 hidden">
                            <div class="policy">
                                <label for="equalOpportunityLink" class="form-label">Specify the relevant web link:</label>
                            </div>
                            <textarea id="equalOpportunityLink" name="equalOpportunityLink" class="form-control" placeholder="Enter the link"></textarea>
                        </div>
                        <!--Does the entity have an equal opportunity policy as per the Rights of Persons with Disabilities Act, 2016? end-->

                        <!--Return to work and Retention rates of permanent employees and workers that took parental leave start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="returnRetentionRates" class="form-label">5. Return to work & Retention rates of permanent employees & workers that took parental leave based on gender-male & female & in totality:</label>
                            </div>
                            <div id="returnRetentionRates" class="responsive-table">
                                <table id="p_returnRetentionRates">
                                    <tr>
                                        <th></th>
                                        <th  class="form-label" colspan="2">Permanent Workers</th>
                                        <th  class="form-label" colspan="2">Permanent Workers</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Gender</th>
                                        <th class="form-label">Return to work rate</th>
                                        <th class="form-label">Retention rate</th>
                                        <th class="form-label">Return to work rate</th>
                                        <th class="form-label">Retention rate</th>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Male</td>
                                        <td><input type="text" id="returnRetentionRates" name="returnRetentionRates[]" class="form-control" required></td>
                                        <td><input type="text" id="returnRetentionRates" name="returnRetentionRates[]" class="form-control" required></td>
                                        <td><input type="text" id="returnRetentionRates" name="returnRetentionRates[]" class="form-control" required></td>
                                        <td><input type="text" id="returnRetentionRates" name="returnRetentionRates[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Female</td>
                                        <td><input type="text" id="returnRetentionRates" name="returnRetentionRates[]" class="form-control" required></td>
                                        <td><input type="text" id="returnRetentionRates" name="returnRetentionRates[]" class="form-control" required></td>
                                        <td><input type="text" id="returnRetentionRates" name="returnRetentionRates[]" class="form-control" required></td>
                                        <td><input type="text" id="returnRetentionRates" name="returnRetentionRates[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Total</th>
                                        <td><input type="text" id="returnRetentionRates" name="returnRetentionRates[]" class="form-control" required></td>
                                        <td><input type="text" id="returnRetentionRates" name="returnRetentionRates[]" class="form-control" required></td>
                                        <td><input type="text" id="returnRetentionRates" name="returnRetentionRates[]" class="form-control" required></td>
                                        <td><input type="text" id="returnRetentionRates" name="returnRetentionRates[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Return to work and Retention rates of permanent employees and workers that took parental leave end-->

                        <!--Is there a mechanism available to receive and redress grievances start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="grievanceMechanismDetails" class="form-label">6. Is there a mechanism available to receive & redress grievances for the following  categories of employees and worker? if yes give details of the mechanism in brief</label>
                            </div>
                            <div id="grievanceMechanismDetails" class="responsive-table">
                                <table id="p_grievanceMechanismDetails">
                                    <tr>
                                        <th class="form-label"></th>
                                        <th class="form-label">Yes/No(If Yes,then give details of the machanism in brief)</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Permanent Workers</th>
                                        <td><input type="text" id="grievanceMechanismDetails" name="grievanceMechanismDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                    <th class="form-label">Other than Permanent Workers</th>
                                        <td><input type="text" id="grievanceMechanismDetails" name="grievanceMechanismDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Permanent employees</th>
                                        <td><input type="text" id="grievanceMechanismDetails" name="grievanceMechanismDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">other than permanent employees</th>
                                        <td><input type="text" id="grievanceMechanismDetails" name="grievanceMechanismDetails[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Is there a mechanism available to receive and redress grievances end-->

                        <!--Membership of employees and worker in association(s) or Unions recognised by the listed entity start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="unionMembershipPercentage" class="form-label"><span style="color: red;"> * </span>7. Disclose No. & percentage of Membership of total permanent male & female both categories employees & workers in association(s) or Unions recognized by the listed entity for both current & previous Financial Years:</label>
                            </div>
                            <div id="unionMembershipPercentage" class="responsive-table">
                                <table id="p_unionMembershipPercentage">
                                    <tr>
                                        <th class="form-label" rowspan="2">Category</th>
                                        <th class="form-label" colspan="3">FY____Current Financial Year</th>
                                        <th class="form-label" colspan="3">FY____Previous Financial Year</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Total employees / workers in respective category (A)</th>
                                        <th class="form-label">No. of employees / workers in respective category, who are part of association(s) or Union(B)</th>
                                        <th class="form-label">% (B/A)</th>
                                        <th class="form-label">Total employees / workers in respective category (C)</th>
                                        <th class="form-label">No. of employees / workers in respective category, who are part of association(s) or Union(D)</th>
                                        <th class="form-label">% (C/D)</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Total Permanent Employees</th>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Male</td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Female</td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Total Permanent Workers</th>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Male</td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Female</td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                        <td><input type="text" id="unionMembershipPercentage" name="unionMembershipPercentage[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Membership of employees and worker in association(s) or Unions recognised by the listed entity end-->

                        <!--Details of training given to employees and workers start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="trainingDetails" class="form-label">8. Details of training on Health & safety measures & on skill up-gradation, given to employees & workers based on gender-male & female, & in totality for both current & previous financial years:</label>
                            </div>
                            <div id="trainingDetails" class="responsive-table">
                                <table id="p_trainingDetails">
                                    <tr>
                                        <th class="form-label" rowspan="3">Category</th>
                                        <th class="form-label" colspan="5">FY____Current Financial Year</th>
                                        <th class="form-label" colspan="5">FY____Previous Financial Year</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label" rowspan="2">Total(A)</th>
                                        <th class="form-label" colspan="2">On Health and safety measures</th>
                                        <th class="form-label" colspan="2">On skill upgradation</th>
                                        <th class="form-label" rowspan="2">Total(D)</th>
                                        <th class="form-label" colspan="2">On Health and safety measures</th>
                                        <th class="form-label" colspan="2">On skill upgradation</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">No.(B)</th>
                                        <th class="form-label">% (B/A)</th>
                                        <th class="form-label">No.(C)</th>
                                        <th class="form-label">% (C/A)</th>
                                        <th class="form-label">No.(E)</th>
                                        <th class="form-label">% (E/D)</th>
                                        <th class="form-label">No.(F)</th>
                                        <th class="form-label">% (F/D)</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label" colspan="11">Employees</th>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Male</td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Female</td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Total</th>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th  class="form-label" colspan="11">Workers</th>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Male</td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Female</td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Total</th>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="trainingDetails" name="trainingDetails[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Details of training given to employees and workers end-->

                        <!--Details of performance and career development reviews of employees and workers start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="performanceReviewDetails" class="form-label">9. Details of performance & career development reviews of employees & workers on a gender-male & female & in totality for both current & previous financial years:</label>
                            </div>
                            <div id="performanceReviewDetails" class="responsive-table">
                                <table id="p_performanceReviewDetails">
                                    <tr>
                                        <th class="form-label" rowspan="2">Category</th>
                                        <th class="form-label" colspan="3">FY____Current Financial Year</th>
                                        <th class="form-label" colspan="3">FY____Previous Financial Year</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Total(A)</th>
                                        <th class="form-label">No.(B)</th>  
                                        <th class="form-label">%(B/A)</th> 
                                        <th class="form-label">Total(C)</th>
                                        <th class="form-label">No.(D)</th>
                                        <th class="form-label">%(D/C)</th> 

                                    </tr>
                                    <tr>
                                        <th class="form-label" colspan="7">Employees</th>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Male</td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Female</td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Total</th>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th  class="form-label" colspan="7">Workers</th>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Male</td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Female</td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Total</th>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="performanceReviewDetails" name="performanceReviewDetails[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Details of performance and career development reviews of employees and workers end-->

                        <!--Health and safety management system start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="healthSafetyManagementSystemChoice" class="form-label">10. Health and safety management system:</label>
                            </div>
                            <div class="mb-3 invisible_container">
                                <div class="policy">
                                    <label for="healthSafetyManagementSystemChoice" class="form-label">a. Whether an occupational health & safety management system has been implemented by the entity? (Yes/ No). If yes, the coverage of such system?</label>
                                </div>
                                <select id="healthSafetyManagementSystemChoice" name="healthSafetyManagementSystemChoice" class="form-control">
                                    <option value="">Select an option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <div id="healthSafetyManagementSystemDetails" class="mb-3 hidden">
                                    <div class="policy">
                                        <label for="healthSafetyManagementSystemDetails" class="form-label">Specify the coverage of occupational health and safety management systems:</label>
                                    </div>
                                    <textarea id="healthSafetyManagementSystemDetails" name="healthSafetyManagementSystemDetails" class="form-control" placeholder="Enter the coverage"></textarea>
                                </div>
                                <div class="mb-3">
                                    <div class="policy">
                                        <label for="workplaceSafetyMeasures2" class="form-label"><br>b. What are the processes used to identify work-related harzards and assess risks on a routine and non-routine basis by the entity? </label>
                                    </div>
                                    <textarea id="workplaceSafetyMeasures2" name="workplaceSafetyMeasures2" class="form-control" placeholder="Enter the details" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <div class="policy">
                                        <label for="healthSafetyManagementSystemChoice" class="form-label">c. Whether you have processes for workers to report the work related hazards and to remove themselves from such risks(Y/N)</label>
                                    </div>
                                    <select id="healthSafetyManagementSystemChoice" name="healthSafetyManagementSystemChoice" class="form-control">
                                        <option value="">Select an option</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <div id="healthSafetyManagementSystemDetails" class="mb-3 hidden">
                                    <div class="policy">
                                        <label for="healthSafetyManagementSystemDetails" class="form-label">Specify the coverage of occupational health and safety management systems:</label>
                                    </div>
                                    <textarea id="healthSafetyManagementSystemDetails" name="healthSafetyManagementSystemDetails" class="form-control" placeholder="Enter the coverage"></textarea>
                                </div>
                                <div class="mb-3">
                                    <div class="policy">
                                        <label for="healthSafetyManagementSystemChoice" class="form-label">d. Do the employees/workers of the entity have access to non-occupational medical and healthcare services?(Yes/No)</label>
                                    </div>
                                    <select id="healthSafetyManagementSystemChoice" name="healthSafetyManagementSystemChoice" class="form-control">
                                        <option value="">Select an option</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <div id="healthSafetyManagementSystemDetails" class="mb-3 hidden">
                                    <div class="policy">
                                        <label for="healthSafetyManagementSystemDetails" class="form-label">Specify the coverage of occupational health and safety management systems:</label>
                                    </div>
                                    <textarea id="healthSafetyManagementSystemDetails" name="healthSafetyManagementSystemDetails" class="form-control" placeholder="Enter the coverage"></textarea>
                                </div>
                            </div>
                        </div>
                        <!--Health and safety management system end-->

                        <!--Details of safety related incidents start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="workplaceSafetyMeasures" class="form-label">11. Details of safety related incidents, in the following format:</label>
                            </div>
                            <div id="workplaceSafetyMeasures" class="responsive-table">
                                <table id="p_workplaceSafetyMeasures">
                                    <tr>
                                        <th class="form-label"> Safety Incident/Number</th>
                                        <th class="form-label"> Category</th>
                                        <th class="form-label"> FY____Current Financial Year</th>
                                        <th class="form-label"> FY____Previous Financial Year</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label" rowspan="2">Lost Time Injury Frequency Rate(LTIFR)(per one million-person hours worked)</th>
                                        <td align="center" class="form-label">Employees</td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Workers</td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label" rowspan="2">Total recordable work-related injuries</th>
                                        <td align="center" class="form-label">Employees</td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Workers</td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label" rowspan="2">no.of fatalities</th>
                                        <td align="center" class="form-label">Employees</td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Workers</td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label" rowspan="2">High consequence work-related injury or ill-health(excluding fatalities)</th>
                                        <td align="center" class="form-label">Employees</td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Workers</td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label" rowspan="2">High consequence work-related injury or ill-health(excluding fatalities)</th>
                                        <td align="center" class="form-label">Employees</td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Workers</td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                        <td><input type="text" id="workplaceSafetyMeasures" name="workplaceSafetyMeasures[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Details of safety related incidents end-->

                        <!--Describe the measures taken by the entity to ensure safe and healthy work place start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="workplaceSafetyMeasures12" class="form-label">12. Describe the measures taken by the entity to ensure a safe & healthy workplace:</label>
                            </div>
                            <textarea id="workplaceSafetyMeasures12" name="workplaceSafetyMeasures12" class="form-control" placeholder="Enter the measures taken"></textarea>
                        </div>
                        <!--Describe the measures taken by the entity to ensure safe and healthy work place end-->

                        <!--Number of Complaints start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="complaintsemployees" class="form-label">13. Number of Complaints on the following made by employees and workers:</label>
                            </div>
                            <div id="complaintsemployees" class="responsive-table">
                                <table id="p_complaintsemployees">
                                    <tr>
                                        <th rowspan="2"></th>
                                        <th class="form-label" colspan="3">FY _____(Current Financial Year)</th>
                                        <th class="form-label" colspan="3">FY _____(Previous Financial Year)</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Filed during the year</th>
                                        <th class="form-label">Pending resolution at the end of year</th>
                                        <th class="form-label">Remarks</th>
                                        <th class="form-label">Filed during the year</th>
                                        <th class="form-label">Pending resolution at the end of year</th>
                                        <th class="form-label">Remarks</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Working Conditions</th>
                                        <td><input type="text" id="complaintsemployees" name="complaintsemployees[]" class="form-control" required></td>
                                        <td><input type="text" id="complaintsemployees" name="complaintsemployees[]" class="form-control" required></td>
                                        <td><input type="text" id="complaintsemployees" name="complaintsemployees[]" class="form-control" required></td>
                                        <td><input type="text" id="complaintsemployees" name="complaintsemployees[]" class="form-control" required></td>
                                        <td><input type="text" id="complaintsemployees" name="complaintsemployees[]" class="form-control" required></td>
                                        <td><input type="text" id="complaintsemployees" name="complaintsemployees[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Health and Safety</th>
                                        <td><input type="text" id="complaintsemployees" name="complaintsemployees[]" class="form-control" required></td>
                                        <td><input type="text" id="complaintsemployees" name="complaintsemployees[]" class="form-control" required></td>
                                        <td><input type="text" id="complaintsemployees" name="complaintsemployees[]" class="form-control" required></td>
                                        <td><input type="text" id="complaintsemployees" name="complaintsemployees[]" class="form-control" required></td>
                                        <td><input type="text" id="complaintsemployees" name="complaintsemployees[]" class="form-control" required></td>
                                        <td><input type="text" id="complaintsemployees" name="complaintsemployees[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Number of Complaints end-->

                        <!--Assessments for the year start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="assesmentyr" class="form-label">14. Assessments for the year:</label>
                            </div>
                            <div id="assesmentyr" class="responsive-table">
                                <table id="assesmentyr">
                                    <tr>
                                        <th class="form-label"></th>
                                        <th class="form-label">%of your plants and offices that were assessed(by entity or statutory authorities or third parties)</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Health and saftey practies</th>
                                        <td><input type="text" id="assesmentyr" name="assesmentyr[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">working conditions</th>
                                        <td><input type="text" id="assesmentyr" name="assesmentyr[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Assessments for the year end-->

                        <!--Corrective action taken or underway to address safety-related incidents start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="workplaceSafetyMeasures15" class="form-label">15. Provide details of any corrective action taken or underway to address safety-related incidents(if any) and on significant risks/concerns arising from assessments of health & safety practices and working conditions</label>
                            </div>
                            <textarea id="workplaceSafetyMeasures15" name="workplaceSafetyMeasures15" class="form-control" placeholder="Enter the measures taken"></textarea>
                        </div>
                        <!--Corrective action taken or underway to address safety-related incidents end-->
                    </div>

                    <!------------------------------------------------------------------------------------------------------------------------->
                    <!--                                     LEADERSHIP INDICATORS -START                                                    -->
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <div class="bold_border_container">
                        <div class="policy">
                            <h3 style="text-align: center; border-bottom: 2px solid #2d6a4f; padding-bottom: 15px;">Leadership Indicators</h3>
                        </div>
                        <!--Does the entity extend any life insurance or any compensatory package in the event of death start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="lifeInsuranceCompensation" class="form-label">1. Does the entity extend any life insurance or any compensatory package in the event of death of (A) Employees  (B) Workers ?</label>
                            </div>
                            <div class="mb-3 invisible_container">
                                <div class="policy">
                                    <label for="lifeInsuranceCompensation" class="form-label">a. Employees</label>
                                </div>
                                <select id="lifeInsuranceCompensation" name="lifeInsuranceCompensation" class="form-control">
                                    <option value="">Select an option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <div class="policy">
                                    <label for="lifeInsuranceCompensation" class="form-label">b. Workers</label>
                                </div>
                                <select id="lifeInsuranceCompensation" name="lifeInsuranceCompensation" class="form-control">
                                    <option value="">Select an option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <!--Does the entity extend any life insurance or any compensatory package in the event of death end-->

                        <!--Measures undertaken by the entity to ensure that statutory dues have been deducted and deposited by the value chain partners start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="statutoryDuesMeasures" class="form-label">2. Provide the measures undertaken by the entity to ensure that statutory dues have been deducted & deposited by the value chain partners:</label>
                            </div>
                            <textarea id="statutoryDuesMeasures" name="statutoryDuesMeasures" class="form-control" placeholder="Enter measures details"></textarea>
                        </div>
                        <!--Measures undertaken by the entity to ensure that statutory dues have been deducted and deposited by the value chain partners end-->

                        <!--Number of employees / workers having suffered high consequence work-related injury / ill-health / fatalities start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="workRelatedInjuryRehabilitation" class="form-label">3. Provide the number of employees/workers having suffered high consequence work-related injury/ill-health/fatalities (as reported in Q11 of Essential Indicators above), who have been rehabilitated & placed in suitable employment or whose family members have been placed in suitable employment for both employee & workers categories for current & previous FYs:</label>
                            </div>
                            <div id="workRelatedInjuryRehabilitation" class="responsive-table">
                                <table id="p_workRelatedInjuryRehabilitation">
                                    <tr>
                                        <th></th>
                                        <th class="form-label" colspan="2">Total no of affected employees/workers</th>
                                        <th class="form-label" colspan="2">No.of employees/workers that rae rehiabilitated and placed in suitable employment or whose family members have been placed in suitable employmen</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th class="form-label">FY____(current financial year)</th>
                                        <th class="form-label">FY____(previous financial year)</th>
                                        <th class="form-label">FY____(current financial year)</th>
                                        <th class="form-label">FY____(previous financial year)</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Employees</th>
                                        <td><input type="text" id="workRelatedInjuryRehabilitation" name="workRelatedInjuryRehabilitation[]" class="form-control" required></td>
                                        <td><input type="text" id="workRelatedInjuryRehabilitation" name="workRelatedInjuryRehabilitation[]" class="form-control" required></td>
                                        <td><input type="text" id="workRelatedInjuryRehabilitation" name="workRelatedInjuryRehabilitation[]" class="form-control" required></td>
                                        <td><input type="text" id="workRelatedInjuryRehabilitation" name="workRelatedInjuryRehabilitation[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Workers</th>
                                        <td><input type="text" id="workRelatedInjuryRehabilitation" name="workRelatedInjuryRehabilitation[]" class="form-control" required></td>
                                        <td><input type="text" id="workRelatedInjuryRehabilitation" name="workRelatedInjuryRehabilitation[]" class="form-control" required></td>
                                        <td><input type="text" id="workRelatedInjuryRehabilitation" name="workRelatedInjuryRehabilitation[]" class="form-control" required></td>
                                        <td><input type="text" id="workRelatedInjuryRehabilitation" name="workRelatedInjuryRehabilitation[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Number of employees / workers having suffered high consequence work-related injury / ill-health / fatalities end-->

                        <!--Does the entity provide transition assistance programs to facilitate continued employability start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="transitionAssistanceProgram" class="form-label">4. Does the entity provide transition assistance programs to facilitate continued employability & the management of career endings resulting from retirement or termination of employment?</label>
                            </div>
                            <select id="transitionAssistanceProgram" name="transitionAssistanceProgram" class="form-control">
                                <option value="">Select an option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <!--Does the entity provide transition assistance programs to facilitate continued employability end-->

                        <!--Details on assessment of value chain partners start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="rdPercentageassesment" class="form-label"><span style="color: red;"> * </span>5.Details on assesment of value chain partners</label>
                            </div>
                            <div id="rdPercentageassesment" class="responsive-table">
                                <table id="rdPercentageassesment">
                                    <tr>
                                        <th class="form-label"></th>
                                        <th class="form-label">%of value chain partners(by value of business done with such partners)that were assessed</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Health and saftey practies</th>
                                        <td><input type="number" id="rdPercentageassesment" name="rdPercentageassesment[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">working conditions</th>
                                        <td><input type="number" id="rdPercentageassesment" name="rdPercentageassesment[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Details on assessment of value chain partners end-->

                        <!--Details of any corrective actions taken or underway to address significant risks / concerns arising from assessments of health and safety practices start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="lifeInsuranceCompensation" class="form-label">6. Provide details of any corrective actions taken or underway to adderss significant risks/concerns arising from assignments of health and saftey parctices and working conditions of value chain partners</label>
                                </div>
                            <textarea id="correctiveactions" name="correctiveactions" class="form-control" placeholder="Enter details"></textarea>
                        </div>
                        <!--Details of any corrective actions taken or underway to address significant risks / concerns arising from assessments of health and safety practices end-->
                    </div>
                    <button type="button" class="btn-primary" onclick="navigate(-1)">Previous</button>
                    <button type="button" class="btn-primary" onclick="navigate(1)">Next</button>
                </div>

                <!------------------------------------------------------------------------------------------------------------------------->
                <!--                                                                                                                     -->
                <!--                                                PRINCIPLE 4 -START                                                   -->
                <!--                                                                                                                     -->
                <!-------------------------------------------------------------------------------------------------------------------------> 
                <div id="prin4" class="prin-div">
                    <div class="policy">
                        <h3>PRINCIPLE 4: BUSINESSES SHOULD RESPECT THE INTERESTS OF & BE RESPONSIVE TO ALL THEIR STAKEHOLDERS.</h3>
                    </div>
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <!--                                     ESSENTIAL INDICATORS -START                                                     -->
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <div class="bold_border_container">
                        <div class="policy">
                            <h3 style="text-align: center; border-bottom: 2px solid #2d6a4f; padding-bottom: 15px;">Essential Indicators</h3>
                        </div>
                        <!--Processes for identifying key stakeholder groups start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="stakeholderIdentificationDetails" class="form-label">1. Describe the processes for identifying key stakeholder groups of the entity:</label>
                            </div>
                            <textarea id="stakeholderIdentificationDetails" name="stakeholderIdentificationDetails" class="form-control" placeholder="Enter stakeholder identification details"></textarea>
                        </div>
                        <!--Processes for identifying key stakeholder groups end-->

                        <!--List stakeholder groups start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="stakeholderEngagementDetails" class="form-label">2. List stakeholder groups identified as key for your entity & the method, frequency & purpose of engagement with each stakeholder group:</label>
                            </div>
                            <div id="stakeholderEngagementDetails" class="responsive-table">
                                <table id="p_stakeholderEngagementDetails">
                                    <tr>
                                        <th class="form-label">S.No</th>
                                        <th class="form-label">Stakeholder Group</th>
                                        <th class="form-label">Whether identified as Vulnerable & Marginalized group (Yes/No)</th>
                                        <th class="form-label">Channels of communication</th>
                                        <th class="form-label">Frequency of engagement(Anually/Half yearly/Quarterly/others-please specify)</th>
                                        <th class="form-label">Purpose and scope of engagement including key topics and concerns raised during such engagement</th>
                                    </tr>
                                    <tr>
                                        <td style="width:5%;"><input type="number" id="stakeholderEngagementDetails" id="p_stakeholderEngagementDetails" name="stakeholderEngagementDetails[]" class="table-control" required value="1" readonly></td>                                                                      
                                        <td><input type="text" id="sstakeholderEngagementDetails" name="stakeholder[]" class="form-control" required></td>
                                        <td><input type="text" id="sstakeholderEngagementDetails" name="stakeholder[]" class="form-control" required></td>
                                        <td><input type="text" id="sstakeholderEngagementDetails" name="stakeholder[]" class="form-control" required></td>
                                        <td><input type="text" id="sstakeholderEngagementDetails" name="stakeholder[]" class="form-control" required></td>
                                        <td><input type="text" id="sstakeholderEngagementDetails" name="stakeholder[]" class="form-control" required></td>
                                        <td><input type="text" id="sstakeholderEngagementDetails" name="stakeholder[]" class="form-control" required></td>
                                    </tr>
                                </table>
                                <div>
                                     <input type="number" id="indexInput4_2" placeholder="Enter Index">
                                     <button class="add-remove-row-btn form-label" type="button" onclick="addRowAtIndex4_2()">Add At Index</button>
                                     <button class="add-remove-row-btn form-label" type="button" onclick="removeSpecificRow4_2()">Remove At Index</button>
                                     <button class="add-remove-row-btn form-label" type="button" onclick="addBottomRow4_2()">Add Row</button>
                                     <button class="add-remove-row-btn form-label" type="button" onclick="removeBottomRow4_2()">Remove Row</button>
                                </div>    
                            </div>
                        </div>
                        <!--List stakeholder groups end-->
                    </div>

                    <!------------------------------------------------------------------------------------------------------------------------->
                    <!--                                     LEADERSHIP INDICATORS -START                                                    -->
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <div class="bold_border_container">
                        <div class="policy">
                            <h3 style="text-align: center; border-bottom: 2px solid #2d6a4f; padding-bottom: 15px;">Leadership Indicators</h3>
                        </div>
                        <!--Processes for consultation between stakeholders and the Board start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="boardConsultationProcess" class="form-label">1. Provide the processes for consultation between stakeholders & the Board on economic, environmental, & social topics or if consultation is delegated, how is feedback from such consultations provided to the Board:</label>
                            </div>
                            <textarea id="boardConsultationDetails" name="boardConsultationDetails" class="form-control" placeholder="Enter board consultation details"></textarea>
                        </div>
                        <!--Processes for consultation between stakeholders and the Board end-->

                        <!--Is stakeholder consultation used to support the identification and management of environmental and social topics start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="stakeholderConsultationPolicy" class="form-label">2. Is stakeholder consultation used to support the identification & management of environmental & social topics ? :</label>
                            </div>
                            <select name="stakeholderConsultationPolicy" id="stakeholderConsultationPolicy" class="form-control">
                                <option value="">Select an option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <!--hidden-->
                        <div id="sourcingPercentage" class="mb-3 hidden">
                            <div class="policy">
                                <label for="sourcingPercentage" class="form-label">Details of instances as to how the inputs received from stakeholders on these topics were incorporated into policies and activities of the entity:</label>
                            </div>
                             <input type="number" class="form-control" id="sourcingPercentage" name="sourcingPercentage" placeholder="Enter sourcing percentage">
                        </div>
                        <!--Is stakeholder consultation used to support the identification and management of environmental and social topics end-->

                        <!--Details of instances of engagement with, and actions taken to, address the concerns stakeholder groups start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="vulnerableEngagementDetails" class="form-label">3. Provide details of instances of engagement with, & actions taken to, address the concerns of vulnerable/ marginalized stakeholder groups:</label>
                            </div>
                            <textarea id="vulnerableEngagementDetails" name="vulnerableEngagementDetails" class="form-control" placeholder="Enter engagement details"></textarea>
                        </div>
                        <!--Details of instances of engagement with, and actions taken to, address the concerns stakeholder groups end-->
                    </div>
                    <button type="button" class="btn-primary" onclick="navigate(-1)">Previous</button>
                    <button type="button" class="btn-primary" onclick="navigate(1)">Next</button>
                </div>

                <!------------------------------------------------------------------------------------------------------------------------->
                <!--                                                                                                                     -->
                <!--                                                PRINCIPLE 5 -START                                                   -->
                <!--                                                                                                                     -->
                <!-------------------------------------------------------------------------------------------------------------------------> 
                <div id="prin5" class="prin-div">
                    <div class="policy">
                        <h3>PRINCIPLE 5: BUSINESSES SHOULD RESPECT & PROMOTE HUMAN RIGHTS.</h3>
                    </div>
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <!--                                     ESSENTIAL INDICATORS -START                                                     -->
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <div class="bold_border_container">
                        <div class="policy">
                            <h3 style="text-align: center; border-bottom: 2px solid #2d6a4f; padding-bottom: 15px;">Essential Indicators</h3>
                        </div>
                        <!--Training provided on human right issues start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="humanRightsTrainingDetails" class="form-label">1. Details of training provided to employees & workers (Permanent & Temporary) on human rights issues for current & previous years:</label>
                            </div>
                            <div id="humanRightsTrainingDetails" class="responsive-table">
                                <table id="p_humanRightsTrainingDetails">
                                    <tr>
                                        <th rowspan=2 class="form-label">Category</th>
                                        <th colspan="3" class="form-label">FY___(Current Financial Year)</th>
                                        <th colspan="3" class="form-label">FY___(Previous Financial Year)</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Total(A)</th>
                                        <th class="form-label">No. of employees/workers covered (B)</th>
                                        <th class="form-label">% (B/A)</th>
                                        <th class="form-label">Total(C)</th>
                                        <th class="form-label">No. of employees/workers covered (D)</th>
                                        <th class="form-label">% (D/C)</th>
                                    </tr>
                                    <tr>
                                        <th colspan="7" class="form-label">Employees</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Permanent</th>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Other than Permanent</th>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Total Employees</th>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th colspan="7" class="form-label">Workers</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Permanent</th>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Other than Permanent</th>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Total Workers</th>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                        <td><input type="text" id="humanRightsTrainingDetails" name="humanRightsTrainingDetails[]" class="form-control"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Training provided on human right issues end-->

                        <!--Details of human wages start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="wageDetails" class="form-label">2. Details of minimum wages paid to workers & employees (For both current & previous year):</label>
                            </div>
                            <div id="wageDetails" class="responsive-table">
                                <table id="p_wageDetails">
                                    <tr>
                                        <th rowspan="3" class="form-label">Category</th>
                                        <th colspan="5" class="form-label">FY___(Current Financial Year)</th>
                                        <th colspan="5" class="form-label">FY___(Previous Financial Year)</th>
                                    </tr>
                                    <tr>
                                        <th rowspan="2" class="form-label">Total(A)</th>
                                        <th colspan="2" class="form-label">Equal to minimum wage</th>
                                        <th colspan="2" class="form-label">More than minimum wage</th>
                                        <th rowspan="2" class="form-label">Total(D)</th>
                                        <th colspan="2" class="form-label">Equal to minimum wage</th>
                                        <th colspan="2" class="form-label">More than minimum wage</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">No.(B)</th>
                                        <th class="form-label">% (B/A)</th>
                                        <th class="form-label">No.(C)</th>
                                        <th class="form-label">% (C/A)</th>
                                        <th class="form-label">No.(E)</th>
                                        <th class="form-label">% (E/D)</th>
                                        <th class="form-label">No.(F)</th>
                                        <th class="form-label">% (F/D)</th>
                                    </tr>
                                    <tr>
                                        <th colspan="11" class="form-label">Employees</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Permanent</th>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Male</th>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Female</th>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                       <th class="form-label">Other than Permanent</th>
                                       <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                       <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                       <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                       <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                       <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                       <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                       <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                       <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                       <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                       <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Male</th>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Female</th>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th colspan="11" class="form-label">Workers</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Permanent</th>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Male</th>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Female</th>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Other than Permanent</th>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Male</th>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td align="center" class="form-label">Female</th>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control" required></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                        <td><input type="text" id="wageDetails" name="wageDetails[]" class="form-control"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Details of human wages end-->

                        <!--Details of renumeratiion/salary/wages start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="remunerationDetails" class="form-label">3. Details of remuneration/salary/wages :</label>
                            </div>
                            <div id="remunerationDetails" class="responsive-table">
                                <table id="p_remunerationDetails">
                                    <tr>
                                        <th rowspan=2></th>
                                        <th colspan="2" class="form-label">Male</th>
                                        <th colspan="2" class="form-label">Female</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Number</th>
                                        <th class="form-label">Median remuneration/ salary/ wages of respective category</th>
                                        <th class="form-label">Number</th>
                                        <th class="form-label">Median remuneration/ salary/ wages of respective category</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Board of Directors (BoD)</th>
                                        <td><input type="text" id="remunerationDetails" name="remunerationDetails[]" class="form-control"></td>
                                        <td><input type="text" id="remunerationDetails" name="remunerationDetails[]" class="form-control"></td>
                                        <td><input type="text" id="remunerationDetails" name="remunerationDetails[]" class="form-control"></td>
                                        <td><input type="text" id="remunerationDetails" name="remunerationDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Key Managerial Personnel (KMP)</th>
                                        <td><input type="text" id="remunerationDetails" name="remunerationDetails[]" class="form-control"></td>
                                        <td><input type="text" id="remunerationDetails" name="remunerationDetails[]" class="form-control"></td>
                                        <td><input type="text" id="remunerationDetails" name="remunerationDetails[]" class="form-control"></td>
                                        <td><input type="text" id="remunerationDetails" name="remunerationDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Employees other than BoD and KMP</th>
                                        <td><input type="text" id="remunerationDetails" name="remunerationDetails[]" class="form-control"></td>
                                        <td><input type="text" id="remunerationDetails" name="remunerationDetails[]" class="form-control"></td>
                                        <td><input type="text" id="remunerationDetails" name="remunerationDetails[]" class="form-control"></td>
                                        <td><input type="text" id="remunerationDetails" name="remunerationDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Workers</th>
                                        <td><input type="text" id="remunerationDetails" name="remunerationDetails[]" class="form-control"></td>
                                        <td><input type="text" id="remunerationDetails" name="remunerationDetails[]" class="form-control"></td>
                                        <td><input type="text" id="remunerationDetails" name="remunerationDetails[]" class="form-control"></td>
                                        <td><input type="text" id="remunerationDetails" name="remunerationDetails[]" class="form-control"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Details of renumeratiion/salary/wages end-->

                        <!--Do you have a focal point responsible for addressing human rights impacts start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="humanRightsResponsible" class="form-label">4. Does the organization have an Individual /Committee responsible for addressing human rights impacts or issues caused or contributed to by the business?</label>
                            </div>
                            <select name="humanRightsResponsible" id="humanRightsResponsible" class="form-control">
                                <option value="">Select an option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <!--Do you have a focal point responsible for addressing human rights impacts end-->

                        <!--Internal mechanisms in place to redress grievances start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="grievanceMechanism" class="form-label">5. Details of the internal mechanisms in place to redress grievances related to human rights issues:</label>
                            </div>
                            <textarea id="grievanceMechanism" name="grievanceMechanism" class="form-control" placeholder="Enter details of the internal mechanism" required></textarea>
                        </div>
                        <!--Internal mechanisms in place to redress grievances end-->

                        <!--Number of complaints made by employees and workers start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="complaintsDetails" class="form-label">6. Details of complaints made by employees & workers on sexual harassment, discrimination at workplace, Child Labour, Forced Labour/Involuntary Labour, Wages or other human rights related issues:</label>
                            </div>
                            <div id="complaintsDetails" class="responsive-table">
                                <table id="p_complaintsDetails">
                                    <tr>
                                        <th rowspan=2></th>
                                        <th colspan="3" class="form-label">FY___(Current Financial Year)</th>
                                        <th colspan="3" class="form-label">FY___(Previous Financial Year)</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Filed during the year</th>
                                        <th class="form-label">Pending resolution at the end of year</th>
                                        <th class="form-label">Remarks</th>
                                        <th class="form-label">Filed during the year</th>
                                        <th class="form-label">Pending resolution at the end of year</th>
                                        <th class="form-label">Remarks</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Sexual Harassment</th>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Discrimination at workplace</th>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Child Labour</th>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Forced Labour/ Involuntary Labour</th>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Wages</th>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Other human rights related issues</th>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                        <td><input type="text" id="complaintsDetails" name="complaintsDetails[]" class="form-control"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Number of complaints made by employees and workers end-->

                        <!--Mechanisms to prevent adverse consequences to the complainant in discrimination and harassment cases start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="discriminationProtectionMechanisms" class="form-label"><span style="color: red;"> * </span>7. Mechanisms to prevent adverse consequences to the complainant in discrimination & harassment cases:</label>
                            </div>
                            <textarea id="discriminationProtectionMechanisms" name="discriminationProtectionMechanisms" class="form-control" placeholder="Provide details of Mechanisms to prevent adverse consequences" required></textarea>
                        </div>
                        <!--Mechanisms to prevent adverse consequences to the complainant in discrimination and harassment cases end-->

                        <!--Do human rights requirements form part of your business agreements and contracts start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="humanRightsInBusiness" class="form-label">8. Do human rights requirements form part of your business agreements & contracts?</label>
                            </div>
                            <select name="humanRightsInBusiness" id="humanRightsInBusiness" class="form-control">
                                <option value="">Select an option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <!--Do human rights requirements form part of your business agreements and contracts end-->

                        <!--Assessments for the year start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="assessedPlantPercentage" class="form-label">9. Assessments for the year:</label>
                            </div>
                            <div id="assessedPlantPercentage" class="responsive-table">
                                <table id="p_assessedPlantPercentage">
                                    <tr>
                                        <th class="form-label"></th>
                                        <th class="form-label">% of your plants and offices that were assessed (by entity or statutory authorities orthird parties)</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Child Labour</th>
                                        <td><input type="text" id="assessedPlantPercentage" name="assessedPlantPercentage[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Forced/involuntary Labour</th>
                                        <td><input type="text" id="assessedPlantPercentage" name="assessedPlantPercentage[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Sexual harassment</th>
                                        <td><input type="text" id="assessedPlantPercentage" name="assessedPlantPercentage[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Discrimination at workplace</th>
                                        <td><input type="text" id="assessedPlantPercentage" name="assessedPlantPercentage[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Wages</th>
                                        <td><input type="text" id="assessedPlantPercentage" name="assessedPlantPercentage[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Others - please specify</th>
                                        <td><input type="text" id="assessedPlantPercentage" name="assessedPlantPercentage[]" class="form-control"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Assessments for the year end-->

                        <!--Corrective actions taken to address significant risks / concerns arising from the assessments at Question 9 start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="correctiveActionsForAssessments" class="form-label"><span style="color: red;"> * </span>10. Provide details of any corrective actions taken or underway to address significant risks / concerns arising from the assessments at Question 9 above:</label>
                            </div>
                            <textarea id="correctiveActionsForAssessments" name="correctiveActionsForAssessments" class="form-control" placeholder="Enter details of any corrective actions taken or underway to address significant risks." required></textarea>
                        </div>
                        <!--Corrective actions taken to address significant risks / concerns arising from the assessments at Question 9 end-->
                    </div>
           
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <!--                                     LEADERSHIP INDICATORS -START                                                    -->
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <div class="bold_border_container">
                        <div class="policy">
                            <h3 style="text-align: center; border-bottom: 2px solid #2d6a4f; padding-bottom: 15px;">Leadership Indicators</h3>
                        </div>
                        <!--Details of a business process being modified as a result of addressing human rights grievances/complaints start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="businessProcessModifications" class="form-label"><span style="color: red;"> * </span>1. Details of a business process being modified / introduced as a result of addressing human rights grievances/complaints:</label>
                            </div>
                            <textarea id="businessProcessModifications" name="businessProcessModifications" class="form-control" placeholder="Enter details of a business process being modified." required></textarea>
                        </div>
                        <!--Details of a business process being modified as a result of addressing human rights grievances/complaints end-->
                    
                        <!--Details of scope and coverage of any Human rights due-diligence conducted start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="humanRightsDueDiligence" class="form-label"><span style="color: red;"> * </span>2. Details of the scope & coverage of any Human rights due-diligence conducted:</label>
                            </div>
                            <textarea id="humanRightsDueDiligence" name="humanRightsDueDiligence" class="form-control" placeholder="Enter Details of the scope & coverage of any Human rights due-diligence conducted." required></textarea>
                        </div>
                        <!--Details of scope and coverage of any Human rights due-diligence conducted end-->
                    
                        <!--Is the premise/office of the entity accessible to differently abled visitors start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="premiseAccessibility" class="form-label">3. Is the premise/office of the entity accessible to differently abled visitors, as per the requirements of the Rights of Persons with Disabilities Act, 2016?</label>
                            </div>
                            <select name="premiseAccessibility" id="premiseAccessibility" class="form-control">
                                <option value="">Select an option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <!--Is the premise/office of the entity accessible to differently abled visitors end-->
                    
                        <!--Assessment of value chain partners start-->
                        <div class="mb-3">
                            <div class="policy">
                                 <label for="valueChainAssessment" class="form-label">4. Percentage of value chain partners that were assessed (by entity or statutory authorities or third parties) for sexual harassment, discrimination at workplace, Child Labour, Forced Labour/Involuntary Labour, Wages or other human rights related issues, along with the corrective action taken to address significant risks & concerns arising from assessments:</label>
                            </div>
                            <div id="valueChainAssessment" class="responsive-table">
                                <table id="p_valueChainAssessment">
                                    <tr>
                                        <th></th>
                                        <th class="form-label">% of value chain partners (by value of business done with such partners) that were assessed</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Sexual Harassment</th>
                                        <td><input type="text" id="valueChainAssessment" name="valueChainAssessment[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Discrimination at workplace</th>
                                        <td><input type="text" id="valueChainAssessment" name="valueChainAssessment[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Child Labour</th>
                                        <td><input type="text" id="valueChainAssessment" name="valueChainAssessment[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Forced Labour/ Involuntary Labour</th>
                                        <td><input type="text" id="valueChainAssessment" name="valueChainAssessment[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Wages</th>
                                        <td><input type="text" id="valueChainAssessment" name="valueChainAssessment[]" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Others - please specify</th>
                                        <td><input type="text" id="valueChainAssessment" name="valueChainAssessment[]" class="form-control"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Assessment of value chain partners end-->

                        <!--Corrective actions taken or underway to address significant risks / concerns arising from the assessments at Question 4 start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="correctiveActionsFromAssessments" class="form-label"><span style="color: red;"> * </span>5. Provide details of any corrective actions taken or underway to address significant risks / concerns arising from the assessments at Question 4 above:</label>
                            </div>
                            <textarea id="correctiveActionsFromAssessments" name="correctiveActionsFromAssessments" class="form-control" placeholder="Provide the concerns arising from the assessments at Question 4 above." required></textarea>
                        </div>
                        <!--Corrective actions taken or underway to address significant risks / concerns arising from the assessments at Question 4 end-->
                    </div>
                    <button type="button" class="btn-primary" onclick="navigate(-1)">Previous</button>
                    <button type="button" class="btn-primary" onclick="navigate(1)">Next</button>
                </div>

                <!------------------------------------------------------------------------------------------------------------------------->
                <!--                                                                                                                     -->
                <!--                                                PRINCIPLE 6 -START                                                   -->
                <!--                                                                                                                     -->
                <!-------------------------------------------------------------------------------------------------------------------------> 
                <div id="prin6" class="prin-div">
                    <div class="policy">
                        <h3>PRINCIPLE 6: BUSINESSES SHOULD RESPECT & MAKE EFFORTS TO PROTECT & RESTORE THE ENVIRONMENT</h3>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="energyConsumptionDetails" class="form-label">1.1 Details of total energy consumption (in Joules or multiples) & energy intensity as per BRSR format:</label>
                        </div>
                        <textarea id="energyConsumptionDetails" name="energyConsumptionDetails" class="form-control" placeholder="Enter the details"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="energyExternalAgency" class="form-label">1.2 Indicate if any independent assessment/ evaluation/assurance of energy consumption has been carried out by an external agency? If yes, provide the name of the external agency:</label>
                        </div>
                        <select name="energyExternalAgency" id="energyExternalAgency" class="form-control">
                            <option value="">Select an option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div id="energyExternalAgencyName" class="mb-3 hidden">
                        <div class="policy">
                            <label for="energyExternalAgencyName" class="form-label">Specify the name of the external agency:</label>
                        </div>
                        <textarea id="energyExternalAgencyName" name="energyExternalAgencyName" class="form-control" placeholder="Enter the name"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="designatedConsumers" class="form-label">2. Does the entity have any sites/facilities identified as designated consumers (DCs) under the Performance, Achieve, & Trade (PAT) Scheme of the Government of India?  If yes, disclose whether targets set under the PAT scheme have been achieved. In case targets have not been achieved, provide the remedial action taken if any:</label>
                        </div>
                        <select name="designatedConsumers" id="designatedConsumers" class="form-control">
                            <option value="">Select an option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div id="designatedConsumersDetails" class="mb-3 hidden">
                        <div class="policy">
                            <label for="designatedConsumersDetails" class="form-label">Specify the details of PAT scheme targets:</label>
                        </div>
                        <textarea id="designatedConsumersDetails" name="designatedConsumersDetails" class="form-control" placeholder="Enter the details"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="waterWithdrawalDetails" class="form-label">3.1. Provide details of water withdrawal from different sources, total volume of water withdrawal & consumed, & Water intensity per rupee of turnover (Water consumed / turnover) as per BRSR format:</label>
                        </div>
                        <textarea id="waterWithdrawalDetails" name="waterWithdrawalDetails" class="form-control" placeholder="Enter the details"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="waterExternalAgency" class="form-label">3.2. Indicate if any independent assessment/ evaluation/assurance of water withdrawal has been carried out by an external agency? If yes, provide the name of the external agency:</label>
                        </div>
                        <select name="waterExternalAgency" id="waterExternalAgency" class="form-control">
                            <option value="">Select an option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div id="waterExternalAgencyName" class="mb-3 hidden">
                        <div class="policy">
                            <label for="waterExternalAgencyName" class="form-label">Specify the name of the external agency:</label>
                        </div>
                        <textarea id="waterExternalAgencyName" name="waterExternalAgencyName" class="form-control" placeholder="Enter the name"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="liquidDischarge" class="form-label"><span style="color: red;"> * </span>4. Has the entity implemented a mechanism for Zero Liquid Discharge? If yes, provide details of its coverage & implementation:</label>
                        </div>
                        <select name="liquidDischarge" id="liquidDischarge" class="form-control" required>
                            <option value="">Select an option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div id="liquidDischargeDetails" class="mb-3 hidden">
                        <div class="policy">
                            <label for="liquidDischargeDetails" class="form-label">Specify the details of its coverage & implementation:</label>
                        </div>
                        <textarea id="liquidDischargeDetails" name="liquidDischargeDetails" class="form-control" placeholder="Enter the details"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="airEmissionDetails" class="form-label">5.1. Please provide details of air emissions (other than GHG emissions) by the entity, in BRSR format. Also, indicate if any independent assessment/ evaluation/assurance has been carried out by an external agency?</label>
                        </div>
                        <textarea id="airEmissionDetails" name="airEmissionDetails" class="form-control" placeholder="Enter the details"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="airExternalAgency" class="form-label">5.2. Indicate if any independent assessment/ evaluation/assurance of air emissions has been carried out by an external agency? If yes, provide the name of the external agency:</label>
                        </div>
                        <select name="airExternalAgency" id="airExternalAgency" class="form-control">
                            <option value="">Select an option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div id="airExternalAgencyName" class="mb-3 hidden">
                        <div class="policy">
                            <label for="airExternalAgencyName" class="form-label">Specify the name of the external agency:</label>
                        </div>
                        <textarea id="airExternalAgencyName" name="airExternalAgencyName" class="form-control" placeholder="Enter the name"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="greenhouseGasEmissionDetails" class="form-label">6.1. Provide details of greenhouse gas emissions (Scope 1 & Scope 2 emissions) & its intensity per rupee of turnover as per BRSR format:</label>
                        </div>
                        <textarea id="greenhouseGasEmissionDetails" name="greenhouseGasEmissionDetails" class="form-control" placeholder="Enter the details"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="ghgExternalAgency" class="form-label">6.2. Indicate if any independent assessment/ evaluation/assurance of greenhouse gas emissions has been carried out by an external agency? If yes, provide the name of the external agency:</label>
                        </div>
                        <select name="ghgExternalAgency" id="ghgExternalAgency" class="form-control">
                            <option value="">Select an option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div id="ghgExternalAgencyName" class="mb-3 hidden">
                        <div class="policy">
                            <label for="ghgExternalAgencyName" class="form-label">Specify the name of the external agency:</label>
                        </div>
                        <textarea id="ghgExternalAgencyName" name="ghgExternalAgencyName" class="form-control" placeholder="Enter the name"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="ghgReductionProject" class="form-label">7. Does the entity have any project related to reducing Green House Gas emission? If yes, provide details about the project:</label>
                        </div>
                        <select name="ghgReductionProject" id="ghgReductionProject" class="form-control">
                            <option value="">Select an option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div id="ghgReductionProjectDetails" class="mb-3 hidden">
                        <div class="policy">
                            <label for="ghgReductionProjectDetails" class="form-label">Specify the details of the project:</label>
                        </div>
                        <textarea id="ghgReductionProjectDetails" name="ghgReductionProjectDetails" class="form-control" placeholder="Enter the details"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="wasteDetails" class="form-label">8.1. Provide details of waste generated, waste recycled & waste dumped with breakup into categories like hazardous, plastic, e-waste, bio-medical waste etc. as per BRSR format:</label>
                        </div>
                        <textarea id="wasteDetails" name="wasteDetails" class="form-control" placeholder="Enter the details"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="wasteExternalAgency" class="form-label">8.2. Indicate if any independent assessment/ evaluation/assurance of greenhouse waste management has been carried out by an external agency? If yes, provide the name of the external agency:</label>
                        </div>
                        <select name="wasteExternalAgency" id="wasteExternalAgency" class="form-control">
                            <option value="">Select an option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div id="wasteExternalAgencyName" class="mb-3 hidden">
                        <div class="policy">
                            <label for="wasteExternalAgencyName" class="form-label">Specify the name of the external agency:</label>
                        </div>
                        <textarea id="wasteExternalAgencyName" name="wasteExternalAgencyName" class="form-control" placeholder="Enter the name"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="wasteManagementPractices" class="form-label">9. Briefly describe the waste management practices adopted in your establishments. Describe the strategy adopted by your entity to reduce usage of hazardous & toxic chemicals in your products & processes & the practices adopted to manage such wastes:</label>
                        </div>
                        <textarea id="wasteManagementPractices" name="wasteManagementPractices" class="form-control" placeholder="Enter the details"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="ecologicalAreaOperations" class="form-label">10. Does the entity have operations/offices in/around ecologically sensitive areas (such as national parks, wildlife sanctuaries, biosphere reserves, wetlands, biodiversity hotspots, forests, coastal regulation zones etc.) where environmental approvals / clearances are required. If yes, please specify details like: Location of operations/offices; Type of operations; the conditions of environmental approval / clearance are being complied with?</label>
                        </div>
                        <select name="ecologicalAreaOperations" id="ecologicalAreaOperations" class="form-control">
                            <option value="">Select an option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div id="ecologicalAreaOperationsDetails" class="mb-3 hidden">
                        <div class="policy">
                            <label for="ecologicalAreaOperationsDetails" class="form-label">Specify the details mentioned in Q15. In case of non-compliance, mention the reasons thereof & corrective action taken, if any:</label>
                        </div>
                        <textarea id="ecologicalAreaOperationsDetails" name="ecologicalAreaOperationsDetails" class="form-control" placeholder="Enter the details"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="environmentalImpactAssessmentDetails" class="form-label">11.1. Share name & details of environmental impact assessments of projects undertaken by the entity along with EIA notification no. & date; in the current financial year:</label>
                        </div>
                        <textarea id="environmentalImpactAssessmentDetails" name="environmentalImpactAssessmentDetails" class="form-control" placeholder="Enter the details"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="eiaExternalAgency" class="form-label">11.2. Indicate if EIA has been carried out by an independent external agency? If yes, provide the name of the external agency:</label>
                        </div>
                        <select name="eiaExternalAgency" id="eiaExternalAgency" class="form-control">
                            <option value="">Select an option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div id="eiaExternalAgencyName" class="mb-3 hidden">
                        <div class="policy">
                            <label for="eiaExternalAgencyName" class="form-label">Specify the name of the external agency:</label>
                        </div>
                        <textarea id="eiaExternalAgencyName" name="eiaExternalAgencyName" class="form-control" placeholder="Enter the name"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="eiaPublicDomain" class="form-label">11.3. Indicate if results of the EIA have been communicated in the public domain? If yes, provide the relevant web link:</label>
                        </div>
                        <select name="eiaPublicDomain" id="eiaPublicDomain" class="form-control">
                            <option value="">Select an option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div id="eiaPublicDomainLink" class="mb-3 hidden">
                        <div class="policy">
                            <label for="eiaPublicDomainLink" class="form-label">Specify the relevant web link:</label>
                        </div>
                        <textarea id="eiaPublicDomainLink" name="eiaPublicDomainLink" class="form-control" placeholder="Enter the link"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="policy">
                            <label for="environmentalComplianceStatus" class="form-label">12. Is the entity compliant with the applicable environmental law/ regulations/ guidelines in India; such as the Water (Prevention & Control of Pollution) Act, Air (Prevention & Control of Pollution) Act, Environment Protection Act & rules thereunder. If yes, provide relevant details:</label>
                        </div>
                        <select name="environmentalComplianceStatus" id="environmentalComplianceStatus" class="form-control">
                            <option value="">Select an option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div id="environmentalComplianceStatusDetails" class="mb-3 hidden">
                        <div class="policy">
                            <label for="environmentalComplianceStatusDetails" class="form-label">Specify the relevant details:</label>
                        </div>
                        <textarea id="environmentalComplianceStatusDetails" name="environmentalComplianceStatusDetails" class="form-control" placeholder="Enter the details"></textarea>
                    </div>
                    <!--Leadership indicators principle 6-->
                    <div class="policy">
                        <h3>LEADERSHIP INDICATORS – IMPORTANCE TO INVESTORS</h3>
                    </div>

                    <button type="button" class="btn-primary" onclick="navigate(-1)">Previous</button>
                    <button type="button" class="btn-primary" onclick="navigate(1)">Next</button>
                </div>

                <!------------------------------------------------------------------------------------------------------------------------->
                <!--                                                                                                                     -->
                <!--                                                PRINCIPLE 7 -START                                                   -->
                <!--                                                                                                                     -->
                <!-------------------------------------------------------------------------------------------------------------------------> 
                <div id="prin7" class="prin-div">
                    <div class="policy">
                        <h3>PRINCIPLE 7: BUSINESSES, WHEN ENGAGING IN INFLUENCING PUBLIC & REGULATORY POLICY, SHOULD DO SO IN A MANNER THAT IS RESPONSIBLE & TRANSPARENT</h3>
                    </div>

                    <!------------------------------------------------------------------------------------------------------------------------->
                    <!--                                     ESSENTIAL INDICATORS -START                                                     -->
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <div class="bold_border_container">
                        <div class="policy">
                            <h3 style="text-align: center; border-bottom: 2px solid #2d6a4f; padding-bottom: 15px;">Essential Indicators</h3>
                        </div>
                        <!--Details of trade and industry chambers/ associations start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="7_1_1_tradeAffiliations" class="form-label">1.a. Number of affiliations with trade & industry chambers/associations (Names of top 10 trade & industry chambers):</label>
                            </div>
                            <div class="policy">
                                <label for="7_1_2_tradeAffiliations" class="form-label">1.b. List the top 10 trade & industry chambers/associations (determined based on the total members of such body) the entity is a member of/affiliated to:</label>
                            </div>
                            <div id="7_1_2_tradeAffiliations" class="responsive-table">
                                <table id="p_7_1_2_tradeAffiliations">
                                    <thead>
                                        <tr>
                                            <th class="form-label">S.No.</th>
                                            <th class="form-label">Name of the trade and industry chambers/associations</th>
                                            <th class="form-label">Reach of trade and industry chambers/ associations (State/National)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="width:5%;"><input type="number" id="7_1_2_tradeAffiliations" id="p_7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" required value="1" class="form-control" readonly></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td style="width:5%;"><input type="number" id="7_1_2_tradeAffiliations" id="p_7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" required value="2" class="form-control" readonly></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td style="width:5%;"><input type="number" id="7_1_2_tradeAffiliations" id="p_7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" required value="3" class="form-control" readonly></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td style="width:5%;"><input type="number" id="7_1_2_tradeAffiliations" id="p_7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" required value="4" class="form-control" readonly></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td style="width:5%;"><input type="number" id="7_1_2_tradeAffiliations" id="p_7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" required value="5" class="form-control" readonly></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td style="width:5%;"><input type="number" id="7_1_2_tradeAffiliations" id="p_7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" required value="6" class="form-control" readonly></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td style="width:5%;"><input type="number" id="7_1_2_tradeAffiliations" id="p_7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" required value="7" class="form-control" readonly></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td style="width:5%;"><input type="number" id="7_1_2_tradeAffiliations" id="p_7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" required value="8" class="form-control" readonly></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td style="width:5%;"><input type="number" id="7_1_2_tradeAffiliations" id="p_7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" required value="9" class="form-control" readonly></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td style="width:5%;"><input type="number" id="7_1_2_tradeAffiliations" id="p_7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" required value="10" class="form-control" readonly></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                        <td><input type="text" id="7_1_2_tradeAffiliations" name="7_1_2_tradeAffiliations[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Details of trade and industry chambers/ associations end-->

                        <!--Details of AntiCompetitive Actions start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="antiCompetitiveActions" class="form-label">2. Provide details of corrective action taken or underway on any issues related to antiCompetitive conduct by the entity, based on adverse orders from regulatory authorities: </label>
                            </div>
                            <div id="antiCompetitiveActions" class="responsive-table">
                                <table id="p_antiCompetitiveActions">
                                    <thead>
                                        <tr>
                                            <th class="form-label">S. No.</th>
                                            <th class="form-label">Name of authority</th>
                                            <th class="form-label">Brief of the case</th>
                                            <th class="form-label">Corrective action taken</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:5%;"><input type="number" id="antiCompetitiveActions" id="p_antiCompetitiveActions" name="antiCompetitiveActions[]" class="table-control" value="1" readonly required ></th>
                                            <td><input type="text" id="antiCompetitiveActions" name="antiCompetitiveActions[]" class="form-control"></td>
                                            <td><input type="text" id="antiCompetitiveActions" name="antiCompetitiveActions[]" class="form-control"></td>
                                            <td><input type="text" id="antiCompetitiveActions" name="antiCompetitiveActions[]" class="form-control"></td>
                                        </tr>          
                                    </tbody>
                                </table>
                                <div>
                                    <input type="number" id="indexInput7_2" placeholder="Enter Index">
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addRowAtIndex7_2()">Add At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeSpecificRow7_2()">Remove At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addBottomRow7_2()">Add Row</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeBottomRow7_2()">Remove Row</button>
                                </div>
                            </div>
                        </div>
                        <!--Details of AntiCompetitive Actions end-->
                    </div>
 
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <!--                                     LEADERSHIP INDICATORS -START                                                    -->
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <div class="bold_border_container">
                        <div class="policy">
                            <h3 style="text-align: center; border-bottom: 2px solid #2d6a4f; padding-bottom: 15px;">Leadership Indicators</h3>
                        </div>
                        <!-- Details of public policy positions advocated by the entity start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="publicPolicyAdvocacy" class="form-label">1. Details of the Public policy positions advocated by the entity:</label>
                            </div>
                            <div id="publicPolicyAdvocacy" class="responsive-table">
                                <table id="p_publicPolicyAdvocacy">
                                    <thead>
                                        <tr>
                                            <th class="form-label">S. No.</th>
                                            <th class="form-label">Public policy advocated</th>
                                            <th class="form-label">Method resorted for such advocacy</th>
                                            <th class="form-label">Whether information available in public domain? (Yes/No)</th>
                                            <th class="form-label">Frequency of Review by Board (Annually/ Half yearly/ Quaterly/ Others - please specify)</th>
                                            <th class="form-label">Web link, if available</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:5%;"><input type="number" id="publicPolicyAdvocacy" id="p_publicPolicyAdvocacy" name="publicPolicyAdvocacy[]" class="table-control" value="1" readonly required ></th>
                                            <td><input type="text" id="publicPolicyAdvocacy" name="publicPolicyAdvocacy[]" class="form-control"></td>
                                            <td><input type="text" id="publicPolicyAdvocacy" name="publicPolicyAdvocacy[]" class="form-control"></td>
                                            <td><input type="text" id="publicPolicyAdvocacy" name="publicPolicyAdvocacy[]" class="form-control"></td>
                                            <td><input type="text" id="publicPolicyAdvocacy" name="publicPolicyAdvocacy[]" class="form-control"></td>
                                            <td><input type="text" id="publicPolicyAdvocacy" name="publicPolicyAdvocacy[]" class="form-control"></td>
                                        </tr>          
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <input type="number" id="indexInput7_3" placeholder="Enter Index">
                                <button class="add-remove-row-btn form-label" type="button" onclick="addRowAtIndex7_3()">Add At Index</button>
                                <button class="add-remove-row-btn form-label" type="button" onclick="removeSpecificRow7_3()">Remove At Index</button>
                                <button class="add-remove-row-btn form-label" type="button" onclick="addBottomRow7_3()">Add Row</button>
                                <button class="add-remove-row-btn form-label" type="button" onclick="removeBottomRow7_3()">Remove Row</button>
                            </div>
                        </div>
                        <!-- Details of public policy positions advocated by the entity end-->
                    </div>
                    <button type="button" class="btn-primary" onclick="navigate(-1)">Previous</button>
                    <button type="button" class="btn-primary" onclick="navigate(1)">Next</button>
                </div>

                <!------------------------------------------------------------------------------------------------------------------------->
                <!--                                                                                                                     -->
                <!--                                                PRINCIPLE 8 -START                                                   -->
                <!--                                                                                                                     -->
                <!-------------------------------------------------------------------------------------------------------------------------> 
                <div id="prin8" class="prin-div">
                    <div class="policy">
                        <h3>PRINCIPLE 8: BUSINESSES SHOULD PROMOTE INCLUSIVE GROWTH & EQUITABLE DEVELOPMENT</h3>
                    </div>

                    <!------------------------------------------------------------------------------------------------------------------------->
                    <!--                                     ESSENTIAL INDICATORS -START                                                     -->
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <div class="bold_border_container">
                        <div class="policy">
                            <h3 style="text-align: center; border-bottom: 2px solid #2d6a4f; padding-bottom: 15px;">Essential Indicators</h3>
                        </div>
                        <!--Details of Social Impact Assessments (SIA) of projects start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="socialImpactAssessments" class="form-label"><span style="color: red;"> * </span>1. Details of Social Impact Assessments (SIA) of projects undertaken by the entity based on applicable laws, in the current financial year:</label>
                            </div>
                            <div id="socialImpactAssessments" class="responsive-table">
                                <table id="p_socialImpactAssessments">
                                    <thead>
                                        <tr>
                                            <th class="form-label">S.No.</th>
                                            <th class="form-label">Name and brief details of project</th>
                                            <th class="form-label">SIA Notification No.</th>
                                            <th class="form-label">Date of notification</th>
                                            <th class="form-label">Whether conducted by independent external agency (Yes / No)</th>
                                            <th class="form-label">Results communicated in public domain(Yes / No)</th>
                                            <th class="form-label">Relevant Web link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:5%;"><input type="number" id="socialImpactAssessments" id="p_socialImpactAssessments" name="socialImpactAssessments[]" class="table-control" required value="1" readonly></td>
                                            <td><input type="text" id="socialImpactAssessments" name="socialImpactAssessments[]" class="form-control" required></td>
                                            <td><input type="text" id="socialImpactAssessments" name="socialImpactAssessments[]" class="form-control" required></td>
                                            <td><input type="text" id="socialImpactAssessments" name="socialImpactAssessments[]" class="form-control" required></td>
                                            <td><input type="text" id="socialImpactAssessments" name="socialImpactAssessments[]" class="form-control" required></td>
                                            <td><input type="text" id="socialImpactAssessments" name="socialImpactAssessments[]" class="form-control" required></td>
                                            <td><input type="text" id="socialImpactAssessments" name="socialImpactAssessments[]" class="form-control" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div>
                                    <input type="number" id="indexInput8_1" placeholder="Enter Index">
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addRowAtIndex8_1()">Add At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeSpecificRow8_1()">Remove At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addBottomRow8_1()">Add Row</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeBottomRow8_1()">Remove Row</button>
                                </div>
                            </div>
                        </div>
                        <!--Details of Social Impact Assessments (SIA) of projects end-->

                        <!--Details on project(s) for which ongoing Rehabilitation and Resettlement(R&R) start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="rehabilitationProjects" class="form-label"><span style="color: red;"> * </span>2. Provide information on project(s) for which ongoing Rehabilitation & Resettlement (R&R) is being undertaken by your entity, in the following format:</label>
                            </div>
                            <div id="rehabilitationProject" class="responsive-table">
                                <table id="p_rehabilitationProject">
                                    <thead>
                                        <tr>
                                            <th class="form-label">S.No.</th>
                                            <th class="form-label">Name of Project for which R&R is ongoing</th>
                                            <th class="form-label">State</th>
                                            <th class="form-label">District</th>
                                            <th class="form-label">No. of Project Affected Families (PAFs)</th>
                                            <th class="form-label">% of PAFs covered by R&R</th>
                                            <th class="form-label">Amounts paid to PAFs in the FY (In INR)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:5%;"><input type="number" id="rehabilitationProject" id="p_rehabilitationProject" name="rehabilitationProject[]" class="table-control" required value="1" readonly></td>
                                            <td><input type="text" id="rehabilitationProject" name="rehabilitationProject[]" class="form-control" required></td>
                                            <td><input type="text" id="rehabilitationProject" name="rehabilitationProject[]" class="form-control" required></td>
                                            <td><input type="text" id="rehabilitationProject" name="rehabilitationProject[]" class="form-control" required></td>
                                            <td><input type="text" id="rehabilitationProject" name="rehabilitationProject[]" class="form-control" required></td>
                                            <td><input type="text" id="rehabilitationProject" name="rehabilitationProject[]" class="form-control" required></td>
                                            <td><input type="text" id="rehabilitationProject" name="rehabilitationProject[]" class="form-control" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div>
                                    <input type="number" id="indexInput8_2" placeholder="Enter Index">
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addRowAtIndex8_2()">Add At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeSpecificRow8_2()">Remove At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addBottomRow8_2()">Add Row</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeBottomRow8_2()">Remove Row</button>
                                </div>
                            </div>
                        </div>  
                        <!--Details on project(s) for which ongoing Rehabilitation and Resettlement(R&R) end-->

                        <!--Describe the mechanisms to receive and redress grievances of the community start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="grievanceRedressMechanism" class="form-label"><span style="color: red;"> * </span>3. Describe the mechanisms to receive & redress grievances of the community:</label>
                            </div>
                            <textarea id="grievanceRedressMechanism" name="grievanceRedressMechanism" class="form-control" placeholder="Enter the details" required></textarea>
                        </div>
                        <!--Describe the mechanisms to receive and redress grievances of the community end-->

                        <!--Percentage of input material (inputs to total inputs by value) sourced from suppliers start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="inputMaterialPercentage" class="form-label"><span style="color: red;"> * </span>4. Percentage of input material (inputs to total inputs by value) sourced from suppliers:</label>
                            </div>
                            <div id="inputMaterialPercentage" class="responsive-table">
                                <table id="p_inputMaterialPercentagedrm">
                                    <thead>
                                        <tr>
                                            <th class="form-label"></th>
                                            <th class="form-label">FY _____ Current Financial Year</th>
                                            <th class="form-label">FY _____ Previous Financial Year</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="form-label" id="inputMaterialPercentage" id="p_inputMaterialPercentage" name="inputMaterialPercentage[]" class="form-control">Directly sourced from MSMEs/ small producers</th>
                                            <td><input type="number" id="inputMaterialPercentage" name="inputMaterialPercentage[]" class="form-control"></td>
                                            <td><input type="number" id="inputMaterialPercentage" name="inputMaterialPercentage[]" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <th class="form-label" id="inputMaterialPercentage" id="p_inputMaterialPercentage" name="inputMaterialPercentage[]" class="form-control">Sourced directly from within the district and neighbouring districts</th>
                                            <td><input type="number" id="inputMaterialPercentage" name="inputMaterialPercentage[]" class="form-control"></td>
                                            <td><input type="number" id="inputMaterialPercentage" name="inputMaterialPercentage[]" class="form-control"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--Percentage of input material (inputs to total inputs by value) sourced from suppliers end-->
                    </div>

                    <!------------------------------------------------------------------------------------------------------------------------->
                    <!--                                     LEADERSHIP INDICATORS -START                                                    -->
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <div class="bold_border_container">
                        <div class="policy">
                            <h3 style="text-align: center; border-bottom: 2px solid #2d6a4f; padding-bottom: 15px;">Leadership Indicators</h3>
                        </div>
                        <!--Details of actions taken to mitigate any negative social impacts identified in the Social Impact Assessments start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="socialImpactActions" class="form-label"><span style="color: red;"> * </span>1. Provide details of actions taken to mitigate any negative social impacts identified in Social Impact Assessments (Reference: Question 1 of Essential Indicators above):</label>
                            </div>
                            <div id="socialImpactActions" class="responsive-table">
                                <table id="p_socialImpactActions">
                                    <thead>
                                        <tr>
                                            <th class="form-label">S.No.</th>
                                            <th class="form-label">Details of negative social impact identified</th>
                                            <th class="form-label">Corrective action taken</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:5%;"><input type="number" id="socialImpactActions" id="p_socialImpactActions" name="socialImpactActions[]" class="table-control" required value="1" readonly></td>
                                            <td><input type="text" id="socialImpactActions" name="socialImpactActions[]" class="form-control" required></td>
                                            <td><input type="text" id="socialImpactActions" name="socialImpactActions[]" class="form-control" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div>
                                    <input type="number" id="indexInput8_L_1" placeholder="Enter Index">
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addRowAtIndex8_L_1()">Add At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeSpecificRow8_L_1()">Remove At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addBottomRow8_L_1()">Add Row</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeBottomRow8_L_1()">Remove Row</button>
                                </div>
                            </div>  
                        </div>
                        <!--Details of actions taken to mitigate any negative social impacts identified in the Social Impact Assessments end-->

                        <!--Details on CSR projects start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="csrAspirationalDistricts" class="form-label"><span style="color: red;"> * </span>2. Provide the following information on CSR projects undertaken by your entity in designated aspirational districts as identified by government bodies:</label>
                            </div>
                            <div id="csrAspirationalDistricts" class="responsive-table">
                                <table id="p_csrAspirationalDistricts">
                                    <thead>
                                        <tr>
                                            <th class="form-label">S.No.</th>
                                            <th class="form-label">State</th>
                                            <th class="form-label">Aspirational District</th>
                                            <th class="form-label">Amount spent (In INR)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:5%;"><input type="number" id="csrAspirationalDistricts" id="csrAspirationalDistricts" name="csrAspirationalDistricts[]" class="table-control" required value="1" readonly></td>
                                            <td><input type="text" id="csrAspirationalDistricts" name="csrAspirationalDistricts[]" class="form-control" required></td>
                                            <td><input type="text" id="csrAspirationalDistricts" name="csrAspirationalDistricts[]" class="form-control" required></td>
                                            <td><input type="number" id="csrAspirationalDistricts" name="csrAspirationalDistricts[]" class="form-control"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div>
                                    <input type="number" id="indexInput8_L_2" placeholder="Enter Index">
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addRowAtIndex8_L_2()">Add At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeSpecificRow8_L_2()">Remove At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addBottomRow8_L_2()">Add Row</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeBottomRow8_L_2()">Remove Row</button>
                                </div>
                            </div>  
                        </div>
                        <!--Details on CSR projects end-->

                        <!--Marginalized /vulnerable groups start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="procurementPolicyMarginalized" class="form-label"><span style="color: red;"> * </span>3.a. Do you have a preferential procurement policy where you give preference to purchase from suppliers comprising marginalized /vulnerable groups? (Yes/No)</label>
                            </div>
                            <div class="policy">
                                <select class="form-select" id="conflictOfInterest" name="conflictOfInterest" required>
                                    <option value="">Select an option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="policy">
                                <label for="procurementPolicyMarginalized" class="form-label">3.b. From which marginalized /vulnerable groups do you procure?</label>
                                <textarea id="procurementPolicyMarginalized" name="iprocurementPolicyMarginalized" class="form-control" placeholder="Enter the details" required></textarea>
                            </div>
                            <div class="policy">
                                <label for="procurementPolicyMarginalized" class="form-label">3.c. What percentage of total procurement (by value) does it constitute?</label>
                                <textarea id="procurementPolicyMarginalized" name="iprocurementPolicyMarginalized" class="form-control" placeholder="Enter the details" required></textarea>
                            </div>
                        </div>
                        <!--Marginalized /vulnerable groups end-->

                        <!--Benefits derived and shared from the intellectual properties start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="intellectualPropertiesBenefits" class="form-label"><span style="color: red;"> * </span>4. Details of the benefits derived & shared from the intellectual properties owned or acquired by your entity (in the current financial year), based on traditional knowledge:</label>
                            </div>
                            <div id="intellectualPropertiesBenefits" class="responsive-table">
                                <table id="p_intellectualPropertiesBenefits">
                                    <thead>
                                        <tr>
                                            <th class="form-label">S.No.</th>
                                            <th class="form-label">Intellectual Property based on traditional knowledge</th>
                                            <th class="form-label">Owned/ Acquired (Yes/No)</th>
                                            <th class="form-label">Benefit shared(Yes / No)</th>
                                            <th class="form-label">Basis of calculating benefit share</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:5%;"><input type="number" id="intellectualPropertiesBenefits" id="p_intellectualPropertiesBenefits" name="intellectualPropertiesBenefits[]" class="table-control" required value="1" readonly></td>
                                            <td><input type="text" id="intellectualPropertiesBenefits" name="intellectualPropertiesBenefits[]" class="form-control" required></td>
                                            <td><input type="text" id="intellectualPropertiesBenefits" name="intellectualPropertiesBenefits[]" class="form-control" required></td>
                                            <td><input type="text" id="intellectualPropertiesBenefits" name="intellectualPropertiesBenefits[]" class="form-control" required></td>
                                            <td><input type="text" id="intellectualPropertiesBenefits" name="intellectualPropertiesBenefits[]" class="form-control" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div>
                                    <input type="number" id="indexInput8_L_4" placeholder="Enter Index">
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addRowAtIndex8_L_4()">Add At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeSpecificRow8_L_4()">Remove At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addBottomRow8_L_4()">Add Row</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeBottomRow8_L_4()">Remove Row</button>
                                </div>
                            </div>
                        </div> 
                        <!--Benefits derived and shared from the intellectual properties end-->

                        <!--Details of corrective actions taken or underway, based on any adverse order in intellectual property related disputes start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="correctiveActionsIntellectualProperty" class="form-label"><span style="color: red;"> * </span>5. Details of corrective actions taken or underway, based on any adverse order in intellectual property related disputes wherein usage of traditional knowledge is involved:</label>
                            </div>
                            <div id="correctiveActionsIntellectualProperty" class="responsive-table">
                                <table id="p_correctiveActionsIntellectualProperty">
                                    <thead>
                                        <tr>
                                            <th class="form-label">S.No.</th>
                                            <th class="form-label">Name of authority</th>
                                            <th class="form-label">Brief of the Case</th>
                                            <th class="form-label">Corrective action taken</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:5%;"><input type="number" id="correctiveActionsIntellectualProperty" id="p_correctiveActionsIntellectualProperty" name="intellectualPropertiesBenefits[]" class="table-control" required value="1" readonly></td>
                                            <td><input type="text" id="correctiveActionsIntellectualProperty" name="correctiveActionsIntellectualProperty[]" class="form-control" required></td>
                                            <td><input type="text" id="correctiveActionsIntellectualProperty" name="correctiveActionsIntellectualProperty[]" class="form-control" required></td>
                                            <td><input type="text" id="correctiveActionsIntellectualProperty" name="correctiveActionsIntellectualProperty[]" class="form-control" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div>
                                    <input type="number" id="indexInput8_L_5" placeholder="Enter Index">
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addRowAtIndex8_L_5()">Add At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeSpecificRow8_L_5()">Remove At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addBottomRow8_L_5()">Add Row</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeBottomRow8_L_5()">Remove Row</button>
                                </div>
                            </div>
                        </div> 
                        <!--Details of corrective actions taken or underway, based on any adverse order in intellectual property related disputes end-->

                        <!--Details of beneficiaries of CSR Projects start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="csrProjectBeneficiaries" class="form-label"><span style="color: red;"> * </span>6. Details of beneficiaries of CSR Projects:</label>
                            </div>
                            <div id="csrProjectBeneficiaries" class="responsive-table">
                                <table id="p_csrProjectBeneficiaries">
                                    <thead>
                                        <tr>
                                            <th class="form-label">S.No.</th>
                                            <th class="form-label">CSR Project</th>
                                            <th class="form-label">No. of persons benefitted from CSR Projects</th>
                                            <th class="form-label">% of beneficiaries from vulnerable and marginalized groups</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:5%;"><input type="number" id="csrProjectBeneficiaries" id="p_csrProjectBeneficiaries" name="intellectualPropertiesBenefits[]" class="table-control" required value="1" readonly></td>
                                            <td><input type="text" id="csrProjectBeneficiaries" name="csrProjectBeneficiaries[]" class="form-control" required></td>
                                            <td><input type="text" id="csrProjectBeneficiaries" name="csrProjectBeneficiaries[]" class="form-control" required></td>
                                            <td><input type="text" id="csrProjectBeneficiaries" name="csrProjectBeneficiaries[]" class="form-control" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div>
                                    <input type="number" id="indexInput8_L_6" placeholder="Enter Index">
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addRowAtIndex8_L_6()">Add At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeSpecificRow8_L_6()">Remove At Index</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="addBottomRow8_L_6()">Add Row</button>
                                    <button class="add-remove-row-btn form-label" type="button" onclick="removeBottomRow8_L_6()">Remove Row</button>
                                </div>
                            </div>
                        </div> 
                        <!--Details of beneficiaries of CSR Projects end-->
                    </div>
                    <button type="button" class="btn-primary" onclick="navigate(-1)">Previous</button>
                    <button type="button" class="btn-primary" onclick="navigate(1)">Next</button>
                </div>

                <!------------------------------------------------------------------------------------------------------------------------->
                <!--                                                                                                                     -->
                <!--                                                PRINCIPLE 9 -START                                                   -->
                <!--                                                                                                                     -->
                <!-------------------------------------------------------------------------------------------------------------------------> 
                <div id="prin9" class="prin-div">
                    <div class="policy">
                        <h3>PRINCIPLE 9  BUSINESSES SHOULD ENGAGE WITH & PROVIDE VALUE TO THEIR CONSUMERS IN A RESPONSIBLE MANNER</h3>
                    </div>
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <!--                                     ESSENTIAL INDICATORS -START                                                     -->
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <div class="bold_border_container">
                        <div class="policy">
                            <h3 style="text-align: center; border-bottom: 2px solid #2d6a4f; padding-bottom: 15px;">Essential Indicators</h3>
                        </div>
                        <!--Describe the mechanisms to receive & respond to consumer complaints & feedback start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="consumerFeedbackMechanism" class="form-label"><br><span style="color: red;"> * </span>1. Describe the mechanisms to receive & respond to consumer complaints & feedback:</label>
                            </div>
                            <textarea id="consumerFeedbackMechanism" name="consumerFeedbackMechanism" class="form-control" placeholder="Enter the details" required></textarea>
                        </div>
                        <!--Describe the mechanisms to receive & respond to consumer complaints & feedback end-->

                        <!--Turnover of products and/ services as a percentage of turnover from all products start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="productRecallInstances" class="form-label"><span style="color: red;"> * </span>2. Turnover of products and/or services as a percentage of turnover from all products/service that carry information about:</label>
                            </div>
                            <div id="productRecallInstances" class="responsive-table">
                                <table id="p_productRecallInstances">
                                    <tr>
                                        <th class="form-label" colspan="1" rowspan="1"></th>
                                        <th class="form-label" colspan="1" rowspan="1">As a percentage to total turnover</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Environmental and social parameters relevant to the product</th>
                                        <td><input type="number" id="productRecallInstances" name="productRecallInstances[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Safe and responsible usage</th>
                                        <td><input type="number" id="productRecallInstances" name="productRecallInstances[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Recycling and/or safe disposal</th>
                                        <td><input type="number" id="productRecallInstances" name="productRecallInstances[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Turnover of products and/ services as a percentage of turnover from all products end-->

                        <!--Number of consumer complaints start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="consumerComplaints" class="form-label"><span style="color: red;"> * </span>3. Number of consumer complaints with respect to the following:</label>
                            </div>
                            <div id="consumerComplaints" class="responsive-table">
                                <table id="p_consumerComplaints">
                                    <tr>
                                        <th class="form-label" colspan="1" rowspan="2"></th>
                                        <th class="form-label" colspan="2">FY _____ Current </br>Financial Year</th>
                                        <th class="form-label" colspan="1"> Remarks</th>
                                        <th class="form-label" colspan="2">FY _____ Previous </br>Financial Year</th>
                                        <th class="form-label" colspan="1"> Remarks</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Received during the year</th>
                                        <th class="form-label">Pending resolution at end of year</th>
                                        <th class="form-label"></th>
                                        <th class="form-label">Received during the year</th>
                                        <th class="form-label">Pending resolution at end of year</th>
                                        <th class="form-label"></th>
                                    </tr>
                                    <tr>
                                        <th class="form-label" id="consumerComplaints" name="consumerComplaints[]">Data privacy</th>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label" id="consumerComplaints" name="consumerComplaints[]">Advertising</th>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label" id="consumerComplaints" name="consumerComplaints[]">Cyber-security</th>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label" id="consumerComplaints" name="consumerComplaints[]">Delivery of essential services</th>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label" id="consumerComplaints" name="consumerComplaints[]">Restrictive Trade Practices</th>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label" id="consumerComplaints" name="consumerComplaints[]">Unfair Trade Practices</th>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label" id="consumerComplaints" name="consumerComplaints[]">Other </th>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="number" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                        <td><input type="text" id="consumerComplaints" name="consumerComplaints[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Number of consumer complaints end-->

                        <!--Details of instances of product recalls on account of safety issues start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="productRecallInstances" class="form-label"><span style="color: red;"> * </span>4. Details of instances of product recalls on account of safety issues:</label>
                            </div>
                            <div id="productRecallInstances" class="responsive-table">
                                <table id="p_productRecallInstances">
                                    <tr>
                                        <th class="form-label" colspan="1" rowspan="1"></th>
                                        <th class="form-label" colspan="1" rowspan="1">Number</th>
                                        <th class="form-label" colspan="1" rowspan="1">Reasons for recall</th>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Voluntary recalls</th>
                                        <td><input type="number" id="productRecallInstances" name="productRecallInstances[]" class="form-control" required></td>
                                        <td><input type="number" id="productRecallInstances" name="productRecallInstances[]" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="form-label">Forced recalls</th>
                                        <td><input type="number" id="productRecallInstances" name="productRecallInstances[]" class="form-control" required></td>
                                        <td><input type="number" id="productRecallInstances" name="productRecallInstances[]" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Details of instances of product recalls on account of safety issues end-->

                        <!--Does the entity have a framework/ policy on cyber security and risks related to data privacy start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="cyberSecurityPolicy" class="form-label"><span style="color: red;"> * </span>5. Does the entity have a framework/policy on cyber security & risks related to data privacy? If yes, provide details and a web-link of the policy if available:</label>
                            </div>
                            <select name="cyberSecurityPolicy" id="cyberSecurityPolicy" class="form-control" required>
                                <option value="">Select an option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <!--hidden-->
                        <div id="cyberSecurityPolicyDetails" class="mb-3 hidden">
                            <div class="policy">
                                <label for="cyberSecurityPolicyDetails" class="form-label">Specify the relevant details:</label>
                            </div>
                            <textarea id="cyberSecurityPolicyDetails" name="cyberSecurityPolicyDetails" class="form-control" placeholder="Enter the details"></textarea>
                        </div>
                        <!--Does the entity have a framework/ policy on cyber security and risks related to data privacy end-->

                        <!--Details of any corrective actions taken on issues relating to advertising, and delivery of essential services start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="correctiveActions" class="form-label"><span style="color: red;"> * </span>6. Provide details of any corrective actions taken or underway on issues relating to advertising, & delivery of essential services; cyber security & data privacy of customers; re-occurrence of instances of product recalls; penalty/action taken by regulatory authorities on safety of products/services:</label>
                            </div>
                            <textarea id="correctiveActions" name="correctiveActions" class="form-control" placeholder="Enter the details" required></textarea>
                        </div>
                        <!--Details of any corrective actions taken on issues relating to advertising, and delivery of essential services end-->
                    </div>

                    <!------------------------------------------------------------------------------------------------------------------------->
                    <!--                                     LEADERSHIP INDICATORS -START                                                    -->
                    <!------------------------------------------------------------------------------------------------------------------------->
                    <div class="bold_border_container">
                        <div class="policy">
                            <h3 style="text-align: center; border-bottom: 2px solid #2d6a4f; padding-bottom: 15px;">Leadership Indicators</h3>
                        </div>
                        <!--Channels / platforms where information on products and services of the entity can be accessed start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="infoChannels" class="form-label"><br><span style="color: red;"> * </span>1. Channels/platforms where information on products & services of the entity can be accessed (provide web link, if available):</label>
                            </div>
                            <textarea id="infoChannels" name="infoChannels" class="form-control" placeholder="Enter the details" required></textarea>
                        </div>
                        <!--Channels / platforms where information on products and services of the entity can be accessed end-->

                        <!--Steps taken to inform and educate consumers about safe and responsible usage of products and/or services start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="consumerEducation" class="form-label"><span style="color: red;"> * </span>2. Steps taken to inform & educate consumers about safe & responsible usage of products and/or services:</label>
                            </div>
                            <textarea id="consumerEducation" name="consumerEducation" class="form-control" placeholder="Enter the details" required></textarea>
                        </div>
                        <!--Steps taken to inform and educate consumers about safe and responsible usage of products and/or services end-->

                        <!--Mechanisms in place to inform consumers of any risk of disruption/discontinuation of essential services start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="serviceDisruptionInfo" class="form-label"><span style="color: red;"> * </span>3. Mechanisms in place to inform consumers of any risk of disruption/discontinuation of essential services:</label>
                            </div>
                            <textarea id="serviceDisruptionInfo" name="serviceDisruptionInfo" class="form-control" placeholder="Enter the details" required></textarea>
                        </div>
                        <!--Mechanisms in place to inform consumers of any risk of disruption/discontinuation of essential services end-->

                        <!--Does the entity display product information on the product over and above what is mandated as per local laws start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="productInfoDisplay" class="form-label"><span style="color: red;"> * </span>4.1 Does the entity display product information on the product over & above what is mandated as per local laws? If yes, provide details in brief:</label>
                            </div>
                            <select name="productInfoDisplay" id="productInfoDisplay" class="form-control" required>
                                <option value="">Select an option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="NA">Not Applicable</option>
                            </select>
                        </div>
                        <!--hidden-->
                        <div id="productInfoDisplayDetails" class="mb-3 hidden">
                            <div class="policy">
                                <label for="productInfoDisplayDetails" class="form-label">Specify the relevant details:</label>
                            </div>
                            <textarea id="productInfoDisplayDetails" name="productInfoDisplayDetails" class="form-control" placeholder="Enter the details"></textarea>
                        </div>
                        <!--Does the entity display product information on the product over and above what is mandated as per local laws end-->

                        <!--Did your entity carry out any survey with regard to consumer satisfaction start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="surveyInfo" class="form-label"><span style="color: red;"> * </span>4.2. Did your entity carry out any survey with regard to consumer satisfaction relating to the major products/services of the entity, significant locations of operation of the entity or the entity as a whole? If no, the reasons thereof & corrective actions taken, if any:</label>
                            </div>
                            <select name="surveyInfo" id="surveyInfo" class="form-control" required>
                                <option value="">Select an option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <!--hidden-->
                        <div id="surveyInfoDetails" class="mb-3 hidden">
                            <div class="policy">
                                <label for="surveyInfoDetails" class="form-label">Specify the reson and corrective actions taken, if any:</label>
                            </div>
                            <textarea id="surveyInfoDetails" name="surveyInfoDetails" class="form-control" placeholder="Enter the details"></textarea>
                        </div>
                        <!--Did your entity carry out any survey with regard to consumer satisfaction end-->

                        <!--Data breaches start-->
                        <div class="mb-3">
                            <div class="policy">
                                <label for="dataBreachesInfo" class="form-label"><span style="color: red;"> * </span>5. Provide the information relating to data breaches: </label>
                            </div>
                            <div class="mb-3 invisible_container">
                                <div class="policy">
                                    <label for="dataBreachesInfo" class="form-label"><br>a. Number of instances of data breaches along with impact </label>
                                </div>
                                <textarea id="dataBreachesInfo" name="dataBreachesInfo" class="form-control" placeholder="Enter the details" required></textarea>
                                <div class="policy">
                                    <label for="dataBreachesInfo" class="form-label"><br>b. Percentage of data breaches involving personally identifiable information of customers</label>
                                </div>
                                <textarea id="dataBreachesInfo" name="dataBreachesInfo" class="form-control" placeholder="Enter the details" required></textarea>
                            </div>
                        </div>
                        <!--Data breaches end-->
                    </div>
                    <button type="button" class="btn-primary" onclick="navigate(-1)">Previous</button>
                    <button type="submit" class="btn-primary" id="submit">Submit</button>
                </div>
            </form>
        </div>

        <!------------------------------------------------------------------------------------------------------------------------->
        <!--                                                                                                                     -->
        <!--                                                 JS SCRIPT                                                           -->
        <!--                                                                                                                     -->
        <!-------------------------------------------------------------------------------------------------------------------------> 
        <script src="sec_C.js"></script>
        <script src="sec_C_form_submit_validation.js"></script>

        <!------------------------------------------------------------------------------------------------------------------------->
        <!--                                                                                                                     -->
        <!--                                                 FOOTER-Start                                                        -->
        <!--                                                                                                                     -->
        <!-------------------------------------------------------------------------------------------------------------------------> 
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
    </body>
</html>