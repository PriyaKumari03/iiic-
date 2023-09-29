<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sec_C.css">
    <title>Compliance Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        header {
            margin-bottom: 30px;
        }

        form {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 8%;
            padding-top: 4%;
            padding-bottom: 4%;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .prev {
            float: left;
        }

        textarea {
            height: 100px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        .con {
            display: flex;
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

    <div id="principle1">
        <form id="myForm1" method="POST" enctype="multipart/form-data">

            <h1>Section - C</h1>
            <h3>PRINCIPLE 1: BUSINESSES SHOULD CONDUCT & GOVERN THEMSELVES WITH INTEGRITY, & IN A MANNER THAT IS
                ETHICAL, TRANSPARENT & ACCOUNTABLE.</h3>
            <label for="coverage">1. Percentage coverage by training & awareness programmes on any of the Principles
                during the financial year of KMP/BOD/ Employees other than BOD & KMPs, Workers:</label>
            <input type="number" id="coverage" name="coverage" placeholder="Enter percentage coverage" required>

            <label for="details">2. Details of fines / penalties /punishment/ award/ compounding fees/ settlement amount
                paid in proceedings (by the entity or by directors / KMPs) with regulators/ law
                enforcement agencies/ judicial institutions, in the financial year:</label>
            <textarea id="details" name="details" placeholder="Enter details of fines/penalties/punishment"
                required></textarea>

            <label for="appeal">3. Of the instances disclosed in Question 2 above, details of the Appeal/ Revision
                preferred in cases where monetary or non-monetary action has been appealed.
                :</label>
            <textarea id="appeal" name="appeal" placeholder="Enter details of appeal/revision"></textarea>

            <label for="antiCorruptionPolicy">4. Does the entity have an anti-corruption or anti-bribery policy? If yes,
                provide details in brief & if available, provide a web-link to the policy.:</label>
            <textarea id="antiCorruptionPolicy" name="antiCorruptionPolicy"
                placeholder="Enter anti-corruption/anti-bribery policy details"></textarea>

            <label for="disciplinaryAction">5. Number of Directors/KMPs/employees/workers against whom disciplinary
                action was taken by any law enforcement agency for the charges of bribery/ corruption:</label>
            <input type="number" id="disciplinaryAction" name="disciplinaryAction" placeholder="Enter number of persons"
                required>

            <label for="conflictComplaints">6.Details of complaints with regard to conflict of interest.:</label>
            <textarea id="conflictComplaints" name="conflictComplaints"
                placeholder="Enter conflict of interest complaints details"></textarea>

            <label for="correctiveAction">7.Provide details of any corrective action taken or underway on issues related
                to fines / penalties / action taken by regulators/ law enforcement agencies/ judicial
                institutions, on cases of corruption & conflicts of interest:</label>
            <textarea id="correctiveAction" name="correctiveAction"
                placeholder="Enter corrective action details"></textarea><br><br>

            <h3>LEADERSHIP INDICATORS – IMPORTANCE TO INVESTORS</h3>

            <label for="awarenessProgrammes">1.Awareness programmes conducted for value chain partners on any of the
                Principles during the financial year:</label>
            <textarea id="awarenessProgrammes" name="awarenessProgrammes"
                placeholder="Enter awareness programmes details" required></textarea>

            <label for="conflictOfInterest">2.Does the entity have processes in place to avoid/ manage conflict of
                interests involving members of the Board? (Yes/No) If Yes, provide details of the same :</label>
            <div class="con">
                <input type="radio" id="conflictYes" name="conflictInterest" value="Yes">
                <label for="conflictYes">yes</label>
                <input type="radio" id="conflictNo" name="conflictInterest" value="No">
                <label for="conflictNo">No</label>
            </div>
            <textarea id="conflictDetails" name="conflictDetails"
                placeholder="Enter conflict of interest details"></textarea>

            <button type="submit" onclick="principle2()">Next</button>
        </form>
    </div>


    <div id="principle2">
        <form id="myForm2">

            <h1>Section - C</h1>
            <h3>PRINCIPLE 2: BUSINESSES SHOULD RESPECT THE INTERESTS OF & BE RESPONSIVE TO ALL THEIR STAKEHOLDERS.</h3>
            <label for="rdPercentage">1.Percentage of R&D & capital expenditure (capex) investments in specific
                technologies to improve the environmental & social impacts of product & processes to total
                R&D & capex investments made by the entity in current & previous FY:</label>
            <input type="number" id="rdPercentage" name="rdPercentage" placeholder="Enter percentage" required>

            <label for="sustainableSourcing2">2. Does the entity have procedures in place for sustainable sourcing, if
                yes specify the percentage:</label>
            <input type="radio" id="sourcingYes2" name="sourcing2" value="Yes"> Yes
            <input type="radio" id="sourcingNo2" name="sourcing2" value="No"> No

            <input type="number" id="sourcingPercentage2" name="sourcingPercentage" placeholder="Enter percentage">

            <label for="reclaimProcesses2">3.Describe the processes in place to safely reclaim your products for reusing,
                recycling & disposing at the end of life, for (a) Plastics (including packaging) (b) E-waste (c)
                Hazardous waste & (d) other waste :</label>
            <textarea id="reclaimProcesses2" name="reclaimProcesses2"
                placeholder="Enter processes for product reclamation" required></textarea>

            <label for="eprApplicable">4.Whether Extended Producer Responsibility (EPR) is applicable to the entity’s
                activities (Yes / No). If yes, whether the waste collection plan is in line with the Extended
                Producer Responsibility (EPR) plan submitted to Pollution Control Boards? If not, provide steps taken to
                address the same:</label>
            <input type="radio" id="eprYes" name="epr" value="Yes"> Yes
            <input type="radio" id="eprNo" name="epr" value="No"> No

            <textarea id="eprCollectionPlan" name="eprCollectionPlan"
                placeholder="Enter EPR collection plan details" ></textarea>

            <br><br><br><br>


            <h3>LEADERSHIP INDICATORS – IMPORTANCE TO INVESTORS</h3>
            <label for="lcaConducted2">1.Has the entity conducted Life Cycle Perspective / Assessments (LCA) for any of
                its products or for its services If yes, provide details, i.e. Name of Product /Service, % of
                total Turnover contributed, Boundary for which the Life Cycle Perspective / Assessment was conducted,
                whether conducted by external agency:</label>
            <input type="radio" id="lcaYes2" name="lcaConducted2" value="Yes"> Yes
            <input type="radio" id="lcaNo2" name="lcaConducted2" value="No"> No

            <textarea id="lcaDetails" name="lcaDetails2" placeholder="Enter LCA details"></textarea>

            <label for="concernsMitigation2">2.If there are any significant social or environmental concerns &/or risks
                arising from production or disposal of your products / services, as identified in the Life Cycle
                Perspective / Assessments (LCA) or through any other means, briefly describe the same along-with action
                taken to mitigate the same:</label>
            <textarea id="concernsMitigation2" name="concernsMitigation2"
                placeholder="Enter concerns and mitigation actions"></textarea>

            <label for="recycledPercentage2">3.Percentage of recycled or reused input material to total material (by
                value) used in production or providing services in current & previous FY:</label>
            <input type="number" id="recycledPercentage2" name="recycledPercentage2" placeholder="Enter percentage"
                required>

            <label for="reclaimedProducts2">4.Products & packaging reclaimed at end of life of products, amount (in
                metric tonnes) reused, recycled, & safely disposed in the current & previous FY:</label>
            <textarea id="reclaimedProducts2" name="reclaimedProducts2"
                placeholder="Enter reclaimed product and packaging details"></textarea>

            <label for="reclaimedPercentages2">5.Reclaimed products & their packaging materials (as percentage of
                products sold) for each product category:</label>
            <textarea id="reclaimedPercentages2" name="reclaimedPercentages2"
                placeholder="Enter reclaimed product and packaging percentages"></textarea>

            <button class="prev" type="submit" onclick="principle1()">Previous</button>
            <button type="submit" onclick="principle3()">Next</button>
        </form>
    </div>
    <div id="principle3">
        <form id="myForm3">

            <h1>Section - C</h1>
            <h3>PRINCIPLE 3: BUSINESSES SHOULD RESPECT & PROMOTE THE WELL-BEING OF ALL EMPLOYEES, INCLUDING THOSE IN THEIR VALUE CHAINS.</h3>
            <label for="P31">1. Details of measures for the well-being of (a) employees & (b) workers such as:</label>
            <textarea id="P31" name="P31" placeholder="Total number & percentage of various categories covered by: Health insurance, Accident insurance, Maternity benefits, Paternity Benefits & Day Care facilities." required></textarea>

            <label for="P32">2. Details of retirement benefits offered to workers & employees, for Current FY & Previous Financial Year:</label>
            <textarea id="P32" name="P32" placeholder="enter the details of retirement benefits offered"
                required></textarea>

            <label for="P33">3. Are the premises/offices of the entity accessible to differently-abled employees & workers, as per the requirements of the Rights of Persons with Disabilities Act, 2016? 
                If not, whether any steps are being taken by the entity in this regard. </label>
                <input type="radio" id="P33_choice" name="lcaConducted3" value="Yes"> Yes
                <input type="radio" id="P33_choice" name="lcaConducted3" value="No"> No
            <textarea id="P33" name="P33" placeholder="Enter the steps are being taken"></textarea>

            <label for="P34">4. Does the entity have an equal opportunity policy as per the Rights of Persons with Disabilities Act, 2016? If so, provide a web link to the policy. </label>
            <textarea id="P34" name="P34"
                placeholder=" Enter the web-link"></textarea>

            <label for="P35">5.Return to work & Retention rates of permanent employees & workers that took parental leave based on gender-male & female & in totality </label>
            <textarea type="text" id="P35" name="P35" placeholder=""required></textarea>

            <label for="P36">6.Is there a mechanism available to receive & redress grievances for the following permanent & temporary categories of employees & workers?:</label>
            <textarea id="P36" name="P36" placeholder=""></textarea>

            <label for="P37">7.Disclose No. & percentage of Membership of total permanent male & female both categories employees & workers in association(s) or Unions recognized by the listed 
                entity for both current & previous Financial Years.:</label>
            <input type="number" id="P37" name="P37" placeholder="Enter the percentage">

            <label for="P38">8.Details of training on Health & safety measures & on skill up-gradation, given to employees & workers based on gender-male & female, & in totality for both current &
                previous financial years. </label>
            <textarea id="P38" name="P38"
            placeholder="Enter the details on Details of training on Health & safety measures & on skill up-gradation"></textarea>
            
            <label for="P39">9.Details of performance & career development reviews of employees & workers on a gender-male & female & in totality for both current & previous financial years. </label>
            <textarea id="P39" name="P39"
            placeholder="Enter the performance & career development reviews "></textarea>

            <label for="P310">10.Whether an occupational health & safety management system has been implemented by the entity? (Yes/ No). If yes, the coverage of such system? </label>
            <select name="" id="P310">
                <option value="">Select an option</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>

            <label for="P311">11.Describe the measures taken by the entity to ensure a safe & healthy workplace.  </label>
            <textarea id="P311" name="P311"
            placeholder="Enter the measures taken"></textarea>
            
                <br><br>

            <h3>LEADERSHIP INDICATORS – IMPORTANCE TO INVESTORS</h3>

            <label for="P312">1.Does the entity extend any life insurance or any compensatory package in the event of death of (A) Employees (Y/N) (B) Workers (Y/N).
                :</label>
                <div class="con">
                    <input type="radio" id="P312Yes" name="P312" value="Yes">
                    <label for="conflictYes">yes</label>
                    <input type="radio" id="P312No" name="P312" value="No">
                    <label for="conflictNo">No</label>
                </div>

            <label for="P313">2.Provide the measures undertaken by the entity to ensure that statutory dues have been deducted & deposited by the value chain partners.</label>
            
            <textarea id="P313" name="P313" placeholder="Enter conflict of interest details"></textarea>

            <label for="P314">3.Provide the number of employees/workers having suffered high consequence work-related injury/ill-health/fatalities (as reported in Q11 of Essential Indicators above), 
                who have been are rehabilitated & placed in suitable employment or whose family members have been placed in suitable employment for both employee & workers 
                categories for current & previous FYs. .</label>
            
            <textarea id="P314" name="P314
            placeholder="Enter conflict of interest details"></textarea>

            <label for="P315">4.Does the entity provide transition assistance programs to facilitate continued employability & the management of career endings resulting from retirement or termination 
                of employment? (Yes/ No)</label>
            
                <div class="con">
                    <input type="radio" id="P315Yes" name="P315" value="Yes">
                    <label for="conflictYes">yes</label>
                    <input type="radio" id="P315No" name="P315" value="No">
                    <label for="conflictNo">No</label>
                </div>
            <button class="prev" type="submit" onclick="principle2()">Previous</button>
            <button type="submit" onclick="principle4()">Next</button>

        </form>
    </div>


    <div id="principle4">
        <form id="myForm4">

            <h1>Section - C</h1>
            <h3>PRINCIPLE 4: BUSINESSES SHOULD RESPECT THE INTERESTS OF & BE RESPONSIVE TO ALL THEIR STAKEHOLDERS.</h3>
            <label for="rdPercentage">1.Describe the processes for identifying key stakeholder groups of the entity</label>
            <textarea id="conflictDetails" name="conflictDetails"
            placeholder="Enter conflict of interest details"></textarea>

            <label for="sustainableSourcing">2. List stakeholder groups identified as key for your entity & the method, frequency & purpose of engagement with each stakeholder group.</label>
            <textarea id="concernsMitigation" name="concernsMitigation"
            placeholder="Enter concerns and mitigation actions"></textarea>

            <br><br><br><br>
            <h3>LEADERSHIP INDICATORS – IMPORTANCE TO INVESTORS</h3>
            <label for="lcaConducted">1.Provide the processes for consultation between stakeholders & the Board on economic, environmental, & social topics or if consultation is delegated, how is feedback 
                from such consultations provided to the Board.:</label>
    
            <textarea id="lcaDetails" name="lcaDetails" placeholder="Enter LCA details"></textarea>

            <label for="concernsMitigation">2.Whether stakeholder consultation is used to support the identification & management of environmental, & social topics (Yes / No). If so, provide details of instances 
                as to how the inputs received from stakeholders on these topics were incorporated into policies & activities of the entity.</label>
                <input type="radio" id="sourcingYes" name="sourcing" value="Yes"> Yes
            <input type="radio" id="sourcingNo" name="sourcing" value="No"> No

            <input type="number" id="sourcingPercentage" name="sourcingPercentage" placeholder="Enter percentage">
            
            <label for="recycledPercentage">3.Provide details of instances of engagement with, & actions taken to, address the concerns of vulnerable/ marginalized stakeholder groups.</label>
            <textarea id="engagement" name="engagement" placeholder="Enter LCA details"></textarea>

            <label for="reclaimedProducts">4.Products & packaging reclaimed at end of life of products, amount (in
                metric tonnes) reused, recycled, & safely disposed in the current & previous FY:</label>
            <textarea id="reclaimedProducts" name="reclaimedProducts"
                placeholder="Enter reclaimed product and packaging details"></textarea>

            <label for="reclaimedPercentages">5.Reclaimed products & their packaging materials (as percentage of
                products sold) for each product category:</label>
            <textarea id="reclaimedPercentages" name="reclaimedPercentages"
                placeholder="Enter reclaimed product and packaging percentages"></textarea>

            <button class="prev" type="submit" onclick="principle3()">Previous</button>
            <button class="next2" onclick="principle5()">Next</button>

        </form>
    </div>

    <div id="principle5">
    <form id="myForm5">
        <h1>Section - C</h1>
        <h3>PRINCIPLE 5: BUSINESSES SHOULD RESPECT & PROMOTE HUMAN RIGHTS.</h3>
        <div class="form-group">
            <label for="P51">1.Details of training provided to employees & workers (Permanent & Temporary) on human rights issues for current & previous years. </label>
            <textarea id="P51" name="P51" class="form-control" placeholder=" Enter the training details on human rights issues." required></textarea>
          </div>
    
          <div class="form-group">
            <label for="P52">2.Details of minimum wages paid to workers & employees (For both current & previous year)</label>
            <textarea id="P52" name="P52" class="form-control" placeholder="Enter the details of minimum wages paid. " required></textarea>
          </div>
           
          <div class="form-group">
            <label for="P53">3.Details of remuneration/salary/wages of BoD/KMP/Employees & Workers (For both Male & Female)</label>
            <textarea id="P53" name="P53" class="form-control" placeholder="Enter the Details of remuneration/salary/wages of BoD/KMP/Employees" required></textarea>
          </div>
    
          <div class="form-group">
            <label for="P54">4.Does the organization have an Individual /Committee responsible for addressing human rights impacts or issues caused or contributed to by the business?</label>
            <input type="radio" id="P54Yes" name="P54" value="Yes"> Yes
            <input type="radio" id="P54No" name="P54" value="No"> No
          </div>
    
          <div class="form-group">
            <label for="P55">5.Details of the internal mechanisms in place to redress grievances related to human rights issues.</label>
            <textarea id="P55" name="P55" class="form-control" placeholder="Enter details of the internal mechanism" required></textarea>
          </div>
    
          <div class="form-group">
            <label for="P56">6.Details of complaints made by employees & workers on sexual harassment, discrimination at workplace, Child Labour, Forced Labour/Involuntary Labour, Wages or other human rights related issues</label>
            <textarea id="P56" name="P56" class="form-control" placeholder="Enter employees compliment here" required></textarea>
          </div>
    
          <div class="form-group">
            <label for="P57">7.Mechanisms to prevent adverse consequences to the complainant in discrimination & harassment cases</label>
            <textarea id="P57" name="P57" class="form-control" placeholder="  provide details of Mechanisms to prevent adverse consequences "  required></textarea>
          </div>
    
          <div class="form-group">
            <label for="P58">8.Do human rights requirements form part of your business agreements & contracts? (Yes/No)</label>
            <input type="radio" id="sourcingYes" name="sourcing" value="Yes"> Yes
            <input type="radio" id="sourcingNo" name="sourcing" value="No"> No
          </div>
    
          <div class="form-group">
            <label for="P59">9.Percentage of your plants & offices that were assessed (by entity or statutory authorities or third parties) for sexual harassment, discrimination at workplace, Child
               Labour, Forced Labour/Involuntary Labour, Wages or other human rights related issues)</label>
            <input type="number" id="P59" name="P59" class="form-control" placeholder="Enter the Percentage of your plants & offices that were assessed " required></textarea>
          </div>
    
          <div class="form-group">
            <label for="P510">10.Provide details of any corrective actions taken or underway to address significant risks / concerns arising from the assessments at Question 9 above</label>
            <textarea id="P510" name="P510" class="form-control" placeholder="Enter details of any corrective actions taken or underway to address significant risks." required></textarea>
          </div>
    
          <div class="form-group">
            <label for="P511">11.Details of a business process being modified / introduced as a result of addressing human rights grievances/complaints.</label>
            <textarea id="P511" name="P511" class="form-control" placeholder="Enter details of a business process being modified." required></textarea>
          </div>
    
          <div class="form-group">
            <label for="P512">12.Details of the scope & coverage of any Human rights due-diligence conducted.</label>
            <textarea id="P512" name="P512" class="form-control" placeholder="Enter Details of the scope & coverage of any Human rights due-diligence conducted." required></textarea>
          </div>
    
          <div class="form-group">
            <label for="P513">13.Is the premise/office of the entity accessible to differently abled visitors, as per the requirements of the Rights of Persons with Disabilities Act, 2016?</label>
            <input type="radio" id="P513Yes" name="P513" value="Yes"> Yes
            <input type="radio" id="P513No" name="P513" value="No"> No
          </div>
    
          <div class="form-group">
            <label for="P514">14.Percentage of value chain partners that were assessed (by entity or statutory authorities or third parties) for sexual harassment, discrimination at workplace, Child
              Labour, Forced Labour/Involuntary Labour, Wages or other human rights related issues, along with the corrective action taken to address significant risks & concerns arising from assessments.</label>
            <input type="number" id="P514" name="P514" class="form-control" placeholder=" Enter percentage value." required>
          </div>
    
          <div class="form-group">
            <label for="P515">15.Provide details of any corrective actions taken or underway to address significant risks / concerns arising from the assessments at Question 4 above.</label>
            <textarea id="P515" name="P515" class="form-control" placeholder="Provide the concerns arising from the assessments at Question 4 above." required></textarea>
          </div>
        <button class="prev" type="submit" onclick="principle4()">Previous</button>
        <button class="next2" onclick="principle6()">Next</button>

    </form>
    </div>

    <div id="principle6">
        <form id="myForm6">

            <h1>Section - C</h1>
            <h3>PRINCIPLE 6: BUSINESSES SHOULD RESPECT & MAKE EFFORTS TO PROTECT & RESTORE THE ENVIRONMENT</h3>

            <div class="form-group">
        <label for="P61">1.Details of total energy consumption (in Joules or multiples) & energy intensity as per BRSR format. 
          Also Indicate if any independent assessment/ evaluation/assurance has been carried out by an external agency? </label>
        <textarea id="P61" name="P61" class="form-control" placeholder=" (Y/N) If yes, name of the external agency"></textarea>
      </div>

      <div class="form-group">
        <label for="P62">2.Does the entity have any sites/facilities identified as designated consumers (DCs) under the Performance, Achieve, & Trade (PAT) Scheme of the Government of India?</label>
        <textarea id="P62" name="P62" class="form-control" placeholder="(Y/N) If yes, disclose whether targets set under the PAT scheme have been achieved. In case targets have not been achieved, provide the remedial action taken if any. "></textarea>
      </div>
       
      <div class="form-group">
        <label for="P63">3.Provide details of water withdrawal from different sources, total volume of water withdrawal & consumed, & Water intensity per rupee of turnover (Water consumed / turnover) as per BRSR format. Also, indicate if any independent assessment/ evaluation/assurance has been carried out by an external agency?</label>
        <textarea id="P63" name="P63" class="form-control" placeholder="(Y/N) If yes, name of theexternal agency"></textarea>
      </div>

      <div class="form-group">
        <label for="P64">4.Has the entity implemented a mechanism for Zero Liquid Discharge?</label>
        <textarea id="P64" name="P64" class="form-control" placeholder=" If yes, provide details of its coverage & implementation." required></textarea>
      </div>

      <div class="form-group">
        <label for="P65">5.Please provide details of air emissions (other than GHG emissions) by the entity, in BRSR format. Also, indicate if any independent assessment/ evaluation/assurance has been carried out by an external agency?</label>
        <textarea id="P65" name="P65" class="form-control" placeholder=" (Y/N) If yes, the name of the external agency"></textarea>
      </div>

      <div class="form-group">
        <label for="P66">6.Provide details of greenhouse gas emissions (Scope 1 & Scope 2 emissions) & its intensity per rupee of turnover as per BRSR format. Also, indicate if any independent assessment/ evaluation/assurance has been carried out by an external agency??</label>
        <textarea id="P66" name="P66" class="form-control" placeholder=" (Y/N) If yes, the name of the external agency"></textarea>
      </div>

      <div class="form-group">
        <label for="P67">7.Does the entity have any project related to reducing Green House Gas emission?</label>
        <textarea id="P67" name="P67" class="form-control" placeholder=" (Y/N) If yes, the name of the external agency. "></textarea>
      </div>

      <div class="form-group">
        <label for="P68">8.Provide details of waste generated, waste recycled & waste dumped with breakup into categories like hazardous, plastic, e-waste, bio-medical waste etc. as per BRSR format. Also, indicate if any independent assessment/ evaluation/assurance has been carried out by an external agency?</label>
        <textarea id="P68" name="P68" class="form-control" placeholder=" If Yes, then provide details."></textarea>
      </div>

      <div class="form-group">
        <label for="P69">9.Briefly describe the waste management practices adopted in your establishments. Describe the strategy adopted by your entity to reduce usage of hazardous & toxic chemicals in your products & processes & the practices adopted to manage such wastes.</label>
        <textarea id="P69" name="P69" class="form-control" placeholder="Provide details here."></textarea>
      </div>

      <div class="form-group">
        <label for="P610">10.If the entity has operations/offices in/around ecologically sensitive areas (such as national parks, wildlife sanctuaries, biosphere reserves, wetlands, biodiversity hotspots, forests, coastal regulation zones etc.) where environmental approvals / clearances are required, please specify details like: Location of operations/offices; Type of operations; the conditions of environmental approval / clearance are being complied with?</label>
        <textarea id="P610" name="P610" class="form-control" placeholder=" (Y/N) If no, the reasons thereof & corrective action taken, if any."></textarea>
      </div>

      <div class="form-group">
        <label for="P611">11.Share name & details of environmental impact assessments of projects undertaken by the entity along with EIA notification No.& date; in the current financial year. Also share whether EIA is conducted by independent external agency (Yes/No)</label>
        <textarea id="P611" name="P611" class="form-control" placeholder="If yes then whether Results communicated in public domain (Yes/No) & Relevant Web link."></textarea>
      </div>

      <div class="form-group">
        <label for="P612">12.Is the entity compliant with the applicable environmental law/ regulations/ guidelines in India; such as the Water (Prevention & Control of Pollution) Act, Air (Prevention & Control of Pollution) Act, Environment Protection Act & rules thereunder (Y/N).</label>
        <textarea id="P612" name="P612" class="form-control" placeholder=" If Yes, then provide details."></textarea>
      </div>

            <button class="prev" type="submit" onclick="principle5()">Previous</button>
            <button class="next2" onclick="principle7()">Next</button>

        </form>
    </div>

    <div id="principle7">
        <form id="myForm7">

            <h1>Section - C</h1>
            <h3>PRINCIPLE 7: BUSINESSES, WHEN ENGAGING IN INFLUENCING PUBLIC & REGULATORY POLICY, SHOULD DO SO IN A MANNER THAT IS RESPONSIBLE & TRANSPARENT</h3>

            <div class="form-group">
                <label for="P71">1.Details of affiliations with trade & industry chambers/ associations. (Name of top 10 trade & industry chambers)</label>
                <textarea id="P71" name="P71" class="form-control" placeholder="(Y/N) If yes, name of the external agency" required></textarea>
            </div>
        
            <div class="form-group">
                <label for="P72">2.Details of corrective action taken or underway on any issues related to anticompetitive conduct by the entity, based on adverse orders from regulatory authorities.</label>
                <textarea id="P72" name="P72" class="form-control" placeholder="(Y/N) If yes, name of the external agency " required></textarea>
            </div>
               
        
            <div class="form-group">
                <label for="P73">3.Details of the Public policy advocated by the entity.</label>
                <textarea id="P73" name="P73" class="form-control" placeholder="(Y/N) If yes, name of theexternal agency" required></textarea>
            </div>

            <button class="prev" type="submit" onclick="principle6()">Previous</button>
            <button class="next2" onclick="principle8()">Next</button>

        </form>
    </div>

    <div id="principle8">
        <form id="myForm8">
            <h1>Section - C</h1>
            <h3>PRINCIPLE 8: BUSINESSES SHOULD PROMOTE INCLUSIVE GROWTH & EQUITABLE DEVELOPMENT.</h3>
            <div class="form-group">
                <label for="P81">1.Details of Social Impact Assessments (SIA) of projects undertaken by the entity based on applicable laws, in the current financial year.</label>
                <textarea id="P81" name="P81" class="form-control" placeholder="Enter Details here" required></textarea>
              </div>
        
              <div class="form-group">
                <label for="P82">2.Provide information on project(s) for which ongoing Rehabilitation & Resettlement (R&R) is being undertaken by your entity, in the following format:</label>
                <textarea id="P82" name="P82" class="form-control" placeholder="Enter Details here" required></textarea>
              </div>
               
              <div class="form-group">
                <label for="P83">3.Describe the mechanisms to receive & redress grievances of the community</label>
                <textarea id="P83" name="P83" class="form-control" placeholder="Enter Details here" required></textarea>
              </div>
        
              <div class="form-group">
                <label for="P84">4.Percentage of input material (inputs to total inputs by value) sourced from suppliers:</label>
                <input type="number" id="P84" name="P84" class="form-control" placeholder="Enter the percentage" required>
              </div>
        
              <div class="form-group">
                <label for="P85">5.Provide details of actions taken to mitigate any negative social impacts identified in Social Impact Assessments (Reference: Question 1 of Essential Indicators above): </label>
                <textarea id="P85" name="P85" class="form-control" placeholder="Enter Details here" required></textarea>
              </div>
        
              <div class="form-group">
                <label for="P86">6.Provide the following information on CSR projects undertaken by your entity in designated aspirational districts as identified by government bodies</label>
                <textarea id="P86" name="P86" class="form-control" placeholder="Enter Details here" required></textarea>
              </div>
               
              <div class="form-group">
                <label for="P87">7.Details of procurement policy in respect to marginalized /vulnerable groups.</label>
                <textarea id="P87" name="P87" class="form-control" placeholder="Enter Details here" required></textarea>
              </div>
        
              <div class="form-group">
                <label for="P88">8.Details of the benefits derived & shared from the intellectual properties owned or acquired by your entity (in the current financial year), based on traditional knowledge</label>
                <textarea id="P88" name="P88" class="form-control" placeholder="Enter Details here" required></textarea>
              </div>
        
              <div class="form-group">
                <label for="P89">9.Details of corrective actions taken or underway, based on any adverse order in intellectual property related disputes wherein usage of traditional knowledge is involved</label>
                <textarea id="P89" name="P89" class="form-control" placeholder="Enter Details here" required></textarea>
              </div>
        
              <div class="form-group">
                <label for="P810">10.Details of beneficiaries of CSR Projects</label>
                <textarea id="P810" name="P810" class="form-control" placeholder="Enter Details here" required></textarea>
              </div>

              <button class="prev" type="submit" onclick="principle7()">Previous</button>
              <button class="next2" onclick="principle9()">Next</button>

        </form>
    </div>

    <div id="principle9">
        <form id="myForm9">
            <h1>Section - C</h1>
            <h3>PRINCIPLE 9: BUSINESSES SHOULD ENGAGE WITH & PROVIDE VALUE TO THEIR CONSUMERS IN A RESPONSIBLE MANNER.</h3>
            <div class="form-group">
                <label for="P91">1.Describe the mechanisms in place to receive & respond to consumer complaints & feedback</label>
                <textarea id="P91" name="P91" class="form-control" placeholder="Provide details here." required></textarea>
              </div>
        
              <div class="form-group">
                <label for="P92">2.Turnover of products &/ services as a percentage of turnover from all products/service that carry information about, Environmental & social parameters relevant to
                  the product, Safe & responsible usage & Recycling &/or safe disposal.</label>
                <textarea id="P92" name="P92" class="form-control" placeholder="Provide details here. " required></textarea>
              </div>
               
              <div class="form-group">
                <label for="P93">3.Number of consumer complaints in respect of the Data privacy, Advertising, Cyber-security, Delivery of essential services, Restrictive Trade Practices, Unfair Trade
                   Practices& other Received & pending during current & previous FY. </label>
                <textarea id="P93" name="P93" class="form-control" placeholder="Provide details here." required></textarea>
              </div>
        
              <div class="form-group">
                <label for="P94">4.Details of instances of product recalls on account of safety issues.</label>
                <textarea id="P94" name="P94" class="form-control" placeholder="Provide details here." required></textarea>
              </div>
        
              <div class="form-group">
                <label for="P95">5.Does the entity have a framework/ policy on cyber security & risks related to data privacy? (Yes/No) If available, provide a web-link of the policy.</label>
                <textarea id="P95" name="P95" class="form-control" placeholder="Provide details here." required></textarea>
              </div>
        
              <div class="form-group">
                <label for="P96">6.Provide details of any corrective actions taken or underway on issues relating to advertising, & delivery of essential services; cyber security & data privacy of customers;
                    re-occurrence of instances of product recalls; penalty / action taken by regulatory authorities on safety of products / services.
        </label>
                <textarea id="P96" name="P96" class="form-control" placeholder="Provide details here." required></textarea>
              </div>
        
              <div class="form-group">
                <label for="P97">7.Channels / platforms where information on products & services of the entity can be accessed (provide web link, if available).</label>
                <textarea id="P97" name="P97" class="form-control" placeholder="Provide details here." required></textarea>
              </div>
        
              <div class="form-group">
                <label for="P98">8.Steps taken to inform & educate consumers about safe & responsible usage of products &/or services</label>
                <textarea id="P98" name="P98" class="form-control" placeholder=" Provide details here." required></textarea>
              </div>
        
              <div class="form-group">
                <label for="P99">9.Mechanisms in place to inform consumers of any risk of disruption/discontinuation of essential services.</label>
                <textarea id="P99" name="P99" class="form-control" placeholder="Provide details here." required></textarea>
              </div>
        
              <div class="form-group">
                <label for="P910">10.Does the entity display product information on the product over & above what Is mandated as per local laws? (Yes/No/Not Applicable) If yes, provide details in brief.
                     Did your entity carry out any survey with regard to consumer satisfaction relating to the major products / services of the entity, significant locations of operation of
                     the entity or the entity as a whole? (Yes/No).</label>
                <textarea id="P910" name="P910" class="form-control" placeholder=" (Y/N) If no, the reasons thereof & corrective action taken, if any." required></textarea>
              </div>
        
              <div class="form-group">
                <label for="P911">11.Provide the information relating to data breaches Number of instances of data breaches along with impact &
                    Percentage of data breaches involving personally identifiable information of customers</label>
                <textarea id="P911" name="P911" class="form-control" placeholder="Provide details here." required></textarea>
              </div>
              <button class="prev" type="submit" onclick="principle8()">Previous</button>
              <button type="submit" class="next2">SUBMIT</button>
        </form>
    </div>

    <script>
        document.getElementById('myForm1').addEventListener('submit', function (event) {
            event.preventDefault();
            const coverage = document.getElementById('coverage').value;
            const details = document.getElementById('details').value;
            const appeal = document.getElementById('appeal').value;
            const antiCorruptionPolicy = document.getElementById('antiCorruptionPolicy').value;
            const disciplinaryAction = document.getElementById('disciplinaryAction').value;
            const conflictComplaints = document.getElementById('conflictComplaints').value;
            const correctiveAction = document.getElementById('correctiveAction').value;

            if (!coverage || !details || !disciplinaryAction) {
                alert('Please fill in all required fields.');
            } else {
                alert('Form submitted successfully!\nCoverage: ' + coverage + '\nDetails: ' + details);
                // You can send the data to the server or perform other actions here
            }
        });

        document.getElementById('myForm1').addEventListener('submit', function (event) {
            event.preventDefault();
            const awarenessProgrammes = document.getElementById('awarenessProgrammes').value;
            const conflictInterest = document.querySelector('input[name="conflictInterest"]:checked');
            const conflictDetails = document.getElementById('conflictDetails').value;

            if (!awarenessProgrammes || !conflictInterest || (conflictInterest.value === 'Yes' && !conflictDetails)) {
                alert('Please fill in all required fields.');
            } else {
                alert('Form submitted successfully!\nAwareness Programmes: ' + awarenessProgrammes);
                if (conflictInterest.value === 'Yes') {
                    alert('Conflict of Interest Details: ' + conflictDetails);
                }
                // You can send the data to the server or perform other actions here
            }
        });

        document.getElementById('myForm2').addEventListener('submit', function (event) {
            event.preventDefault();
            const lcaConducted = document.querySelector('input[name="lcaConducted"]:checked');
            const lcaDetails = document.getElementById('lcaDetails').value;
            const concernsMitigation = document.getElementById('concernsMitigation').value;
            const recycledPercentage = document.getElementById('recycledPercentage').value;
            const reclaimedProducts = document.getElementById('reclaimedProducts').value;
            const reclaimedPercentages = document.getElementById('reclaimedPercentages').value;

            if (!lcaConducted || (lcaConducted.value === 'Yes' && !lcaDetails) || !recycledPercentage) {
                alert('Please fill in all required fields.');
            } else {
                alert('Form submitted successfully!');
                alert('LCA Conducted: ' + lcaConducted.value);
                if (lcaConducted.value === 'Yes') {
                    alert('LCA Details: ' + lcaDetails);
                }
                alert('Concerns & Mitigation: ' + concernsMitigation);
                alert('Recycled Percentage: ' + recycledPercentage);
                alert('Reclaimed Products & Packaging: ' + reclaimedProducts);
                alert('Reclaimed Percentages: ' + reclaimedPercentages);
                // You can send the data to the server or perform other actions here
            }
        });
        document.getElementById('myForm3').addEventListener('submit', function (event) {
            event.preventDefault();
            const P31 = document.getElementById('P31').value;
            const P32 = document.getElementById('P32').value;
            const P33_choice = document.getElementById('P33_choice').value;
            const P33 = document.getElementById('P33').value;
            const P34 = document.getElementById('P34').value;
            const P35 = document.getElementById('P35').value;
            const P36 = document.getElementById('P36').value;
            const P37 = document.getElementById('P37').value;
            const P38 = document.getElementById('P38').value;
            const P39 = document.getElementById('P39').value;
            const P310 = document.getElementById('P310').value;
            const P311 = document.getElementById('P311').value;
            const P312 = document.getElementById('P312').value;
            const P313 = document.getElementById('P313').value;
            const P314 = document.getElementById('P314').value;
            const P315 = document.getElementById('P315').value;

            /*if (!coverage || !details || !disciplinaryAction) {
                alert('Please fill in all required fields.');
            } else {
                alert('Form submitted successfully!\nCoverage: ' + coverage + '\nDetails: ' + details);
                // You can send the data to the server or perform other actions here
            }*/
        });


        document.getElementById('myForm4').addEventListener('submit', function (event) {
            event.preventDefault();
            const lcaConducted = document.querySelector('input[name="lcaConducted"]:checked');
            const lcaDetails = document.getElementById('lcaDetails').value;
            const concernsMitigation = document.getElementById('concernsMitigation').value;
            const recycledPercentage = document.getElementById('recycledPercentage').value;
            const reclaimedProducts = document.getElementById('reclaimedProducts').value;
            const reclaimedPercentages = document.getElementById('reclaimedPercentages').value;

            /*if (!lcaConducted || (lcaConducted.value === 'Yes' && !lcaDetails) || !recycledPercentage) {
                alert('Please fill in all required fields.');
            } else {
                alert('Form submitted successfully!');
                alert('LCA Conducted: ' + lcaConducted.value);
                if (lcaConducted.value === 'Yes') {
                    alert('LCA Details: ' + lcaDetails);
                }
                alert('Concerns & Mitigation: ' + concernsMitigation);
                alert('Recycled Percentage: ' + recycledPercentage);
                alert('Reclaimed Products & Packaging: ' + reclaimedProducts);
                alert('Reclaimed Percentages: ' + reclaimedPercentages);
                // You can send the data to the server or perform other actions here
            }*/
        });
        document.getElementById('myForm5').addEventListener('submit', function (event) {
            event.preventDefault();
            const P51 = document.getElementById('P51').value;
            const P52 = document.getElementById('P52').value;
            const P53 = document.getElementById('P53').value;
            const P54 = document.getElementById('P54').value;
            const P55 = document.getElementById('P55').value;
            const P56 = document.getElementById('P56').value;
            const P57 = document.getElementById('P57').value;
            const P58 = document.getElementById('P58').value;
            const P59 = document.getElementById('P59').value;
            const P510 = document.getElementById('P510').value;
            const P511 = document.getElementById('P511').value;
            const P512 = document.getElementById('P512').value;
            const P513 = document.getElementById('P513').value;
            const P514 = document.getElementById('P514').value;
            const P515 = document.getElementById('P515').value;
            /*if (!P61 || !P62 || !P63) {
                alert('Please fill in all required fields.');
            } else {
                //alert('Form submitted successfully!\nCoverage: ' + coverage + '\nDetails: ' + details);
                // You can send the data to the server or perform other actions here
            }*/
        });
        document.getElementById('myForm6').addEventListener('submit', function (event) {
            event.preventDefault();
            const P61 = document.getElementById('P61').value;
            const P62 = document.getElementById('P62').value;
            const P63 = document.getElementById('P63').value;
            const P64 = document.getElementById('P64').value;
            const P65 = document.getElementById('P65').value;
            const P66 = document.getElementById('P66').value;
            const P67 = document.getElementById('P67').value;
            const P68 = document.getElementById('P68').value;
            const P69 = document.getElementById('P69').value;
            const P610 = document.getElementById('P610').value;
            const P611 = document.getElementById('P611').value;
            const P612 = document.getElementById('P612').value;
            if (!P61 || !P62 || !P63) {
                alert('Please fill in all required fields.');
            } else {
                //alert('Form submitted successfully!\nCoverage: ' + coverage + '\nDetails: ' + details);
                // You can send the data to the server or perform other actions here
            }
        });
        document.getElementById('myForm7').addEventListener('submit', function (event) {
            event.preventDefault();
            const P71 = document.getElementById('P71').value;
            const P72 = document.getElementById('P72').value;
            const P73 = document.getElementById('P73').value;

            /*if (!P61 || !P62 || !P63) {
                alert('Please fill in all required fields.');
            } else {
                //alert('Form submitted successfully!\nCoverage: ' + coverage + '\nDetails: ' + details);
                // You can send the data to the server or perform other actions here
            }*/
        });

        document.getElementById('myForm8').addEventListener('submit', function (event) {
            event.preventDefault();
            const P81 = document.getElementById('P81').value;
            const P82 = document.getElementById('P82').value;
            const P83 = document.getElementById('P83').value;
            const P84 = document.getElementById('P84').value;
            const P85 = document.getElementById('P85').value;
            const P86 = document.getElementById('P86').value;
            const P87 = document.getElementById('P87').value;
            const P88 = document.getElementById('P88').value;
            const P89 = document.getElementById('P89').value;
            const P810 = document.getElementById('P810').value;
        });

        document.getElementById('myForm9').addEventListener('submit', function (event) {
            event.preventDefault();
            const P91 = document.getElementById('P91').value;
            const P92 = document.getElementById('P92').value;
            const P93 = document.getElementById('P93').value;
            const P94 = document.getElementById('P94').value;
            const P95 = document.getElementById('P95').value;
            const P96 = document.getElementById('P96').value;
            const P97 = document.getElementById('P97').value;
            const P98 = document.getElementById('P98').value;
            const P99 = document.getElementById('P99').value;
            const P910 = document.getElementById('P910').value;
            const P911 = document.getElementById('P911').value;
        });

        document.getElementById("principle2").style.display = "none";
        document.getElementById("principle3").style.display = "none";
        document.getElementById("principle4").style.display = "none";
        document.getElementById("principle5").style.display = "none";
        document.getElementById("principle6").style.display = "none";
        document.getElementById("principle7").style.display = "none";
        document.getElementById("principle8").style.display = "none";
        document.getElementById("principle9").style.display = "none";

        function principle1() {
            document.getElementById("principle1").style.display = "block";
            document.getElementById("principle2").style.display = "none";
            document.getElementById("principle3").style.display = "none";
            document.getElementById("principle4").style.display = "none";
            document.getElementById("principle5").style.display = "none";
            document.getElementById("principle6").style.display = "none";
            document.getElementById("principle7").style.display = "none";
            document.getElementById("principle8").style.display = "none";
            document.getElementById("principle9").style.display = "none";
            scrolltotop()
        }
        function principle2() {
            document.getElementById("principle1").style.display = "none";
            document.getElementById("principle2").style.display = "block";
            document.getElementById("principle3").style.display = "none";
            document.getElementById("principle4").style.display = "none";
            document.getElementById("principle5").style.display = "none";
            document.getElementById("principle6").style.display = "none";
            document.getElementById("principle7").style.display = "none";
            document.getElementById("principle8").style.display = "none";
            document.getElementById("principle9").style.display = "none";
            scrolltotop()
        }
        function principle3() {
            document.getElementById("principle1").style.display = "none";
            document.getElementById("principle2").style.display = "none";
            document.getElementById("principle3").style.display = "block";
            document.getElementById("principle4").style.display = "none";
            document.getElementById("principle5").style.display = "none";
            document.getElementById("principle6").style.display = "none";
            document.getElementById("principle7").style.display = "none";
            document.getElementById("principle8").style.display = "none";
            document.getElementById("principle9").style.display = "none";
            scrolltotop()
        }
        function principle4() {
            document.getElementById("principle1").style.display = "none";
            document.getElementById("principle2").style.display = "none";
            document.getElementById("principle3").style.display = "none";
            document.getElementById("principle4").style.display = "block";
            document.getElementById("principle5").style.display = "none";
            document.getElementById("principle6").style.display = "none";
            document.getElementById("principle7").style.display = "none";
            document.getElementById("principle8").style.display = "none";
            document.getElementById("principle9").style.display = "none";
            scrolltotop()
        }
        function principle5() {
            document.getElementById("principle1").style.display = "none";
            document.getElementById("principle2").style.display = "none";
            document.getElementById("principle3").style.display = "none";
            document.getElementById("principle4").style.display = "none";
            document.getElementById("principle5").style.display = "block";
            document.getElementById("principle6").style.display = "none";
            document.getElementById("principle7").style.display = "none";
            document.getElementById("principle8").style.display = "none";
            document.getElementById("principle9").style.display = "none";
            scrolltotop()
        }
        function principle6() {
            document.getElementById("principle1").style.display = "none";
            document.getElementById("principle2").style.display = "none";
            document.getElementById("principle3").style.display = "none";
            document.getElementById("principle4").style.display = "none";
            document.getElementById("principle5").style.display = "none";
            document.getElementById("principle6").style.display = "block";
            document.getElementById("principle7").style.display = "none";
            document.getElementById("principle8").style.display = "none";
            document.getElementById("principle9").style.display = "none";
            scrolltotop()
        }
        function principle7() {
            document.getElementById("principle1").style.display = "none";
            document.getElementById("principle2").style.display = "none";
            document.getElementById("principle3").style.display = "none";
            document.getElementById("principle4").style.display = "none";
            document.getElementById("principle5").style.display = "none";
            document.getElementById("principle6").style.display = "none";
            document.getElementById("principle7").style.display = "block";
            document.getElementById("principle8").style.display = "none";
            document.getElementById("principle9").style.display = "none";
            scrolltotop()
        }
        function principle8() {
            document.getElementById("principle1").style.display = "none";
            document.getElementById("principle2").style.display = "none";
            document.getElementById("principle3").style.display = "none";
            document.getElementById("principle4").style.display = "none";
            document.getElementById("principle5").style.display = "none";
            document.getElementById("principle6").style.display = "none";
            document.getElementById("principle7").style.display = "none";
            document.getElementById("principle8").style.display = "block";
            document.getElementById("principle9").style.display = "none";
            scrolltotop()
        }
        function principle9() {
            document.getElementById("principle1").style.display = "none";
            document.getElementById("principle2").style.display = "none";
            document.getElementById("principle3").style.display = "none";
            document.getElementById("principle4").style.display = "none";
            document.getElementById("principle5").style.display = "none";
            document.getElementById("principle6").style.display = "none";
            document.getElementById("principle7").style.display = "none";
            document.getElementById("principle8").style.display = "none";
            document.getElementById("principle9").style.display = "block";
            scrolltotop()
        }

        function scrolltotop() {
            window.scroll({
                top: 0,
                left: 0,
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>