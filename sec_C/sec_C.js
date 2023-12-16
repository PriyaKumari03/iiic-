// Yes/No based label visibility
document.getElementById('conflictOfInterest').addEventListener('change', function () {
    var conflictDetails = document.getElementById('conflictDetails');
    if (this.value === 'Yes') {
        conflictDetails.classList.remove('hidden');
    } else {
        conflictDetails.classList.add('hidden');
    }
});
document.getElementById('sustainableSourcing2').addEventListener('change', function () {
    var sourcingPercentage2num = document.getElementById('sourcingPercentage2num');
    if (this.value === 'Yes') {
        sourcingPercentage2num.classList.remove('hidden');
    } else {
        sourcingPercentage2num.classList.add('hidden');
    }
});
document.getElementById('eprApplicable').addEventListener('change', function () {
    var eprCollectionPlan = document.getElementById('eprCollectionPlan');
    if (this.value === 'Yes' || this.value === 'No') {
        eprCollectionPlan.classList.remove('hidden');
    } else {
        eprCollectionPlan.classList.add('hidden');
    }
});
document.getElementById('lcaConducted2').addEventListener('change', function () {
    var lcaDetails = document.getElementById('lcaDetails');
    if (this.value === 'Yes') {
        lcaDetails.classList.remove('hidden');
    } else {
        lcaDetails.classList.add('hidden');
    }
});
document.getElementById('accessibilityChoice').addEventListener('change', function () {
    var accessibilitySteps = document.getElementById('accessibilitySteps');
    if (this.value === 'No') {
        accessibilitySteps.classList.remove('hidden');
    } else {
        accessibilitySteps.classList.add('hidden');
    }
});
document.getElementById('equalOpportunity').addEventListener('change', function () {
    var equalOpportunityLink = document.getElementById('equalOpportunityLink');
    if (this.value === 'Yes') {
        equalOpportunityLink.classList.remove('hidden');
    } else {
        equalOpportunityLink.classList.add('hidden');
    }
});
document.getElementById('healthSafetyManagementSystemChoice').addEventListener('change', function () {
    var healthSafetyManagementSystemDetails = document.getElementById('healthSafetyManagementSystemDetails');
    if (this.value === 'Yes') {
        healthSafetyManagementSystemDetails.classList.remove('hidden');
    } else {
        healthSafetyManagementSystemDetails.classList.add('hidden');
    }
});
document.getElementById('stakeholderConsultationPolicy').addEventListener('change', function () {
    var sourcingPercentage = document.getElementById('sourcingPercentage');
    if (this.value === 'Yes') {
        sourcingPercentage.classList.remove('hidden');
    } else {
        sourcingPercentage.classList.add('hidden');
    }
});
document.getElementById('energyExternalAgency').addEventListener('change', function () {
    var energyExternalAgencyName = document.getElementById('energyExternalAgencyName');
    if (this.value === 'Yes') {
        energyExternalAgencyName.classList.remove('hidden');
    } else {
        energyExternalAgencyName.classList.add('hidden');
    }
});
document.getElementById('designatedConsumers').addEventListener('change', function () {
    var designatedConsumersDetails = document.getElementById('designatedConsumersDetails');
    if (this.value === 'Yes') {
        designatedConsumersDetails.classList.remove('hidden');
    } else {
        designatedConsumersDetails.classList.add('hidden');
    }
});
document.getElementById('waterExternalAgency').addEventListener('change', function () {
    var waterExternalAgencyName = document.getElementById('waterExternalAgencyName');
    if (this.value === 'Yes') {
        waterExternalAgencyName.classList.remove('hidden');
    } else {
        waterExternalAgencyName.classList.add('hidden');
    }
});
document.getElementById('liquidDischarge').addEventListener('change', function () {
    var liquidDischargeDetails = document.getElementById('liquidDischargeDetails');
    if (this.value === 'Yes') {
        liquidDischargeDetails.classList.remove('hidden');
    } else {
        liquidDischargeDetails.classList.add('hidden');
    }
});
document.getElementById('airExternalAgency').addEventListener('change', function () {
    var airExternalAgencyName = document.getElementById('airExternalAgencyName');
    if (this.value === 'Yes') {
        airExternalAgencyName.classList.remove('hidden');
    } else {
        airExternalAgencyName.classList.add('hidden');
    }
});
document.getElementById('ghgExternalAgency').addEventListener('change', function () {
    var ghgExternalAgencyName = document.getElementById('ghgExternalAgencyName');
    if (this.value === 'Yes') {
        ghgExternalAgencyName.classList.remove('hidden');
    } else {
        ghgExternalAgencyName.classList.add('hidden');
    }
});
document.getElementById('ghgReductionProject').addEventListener('change', function () {
    var ghgReductionProjectDetails = document.getElementById('ghgReductionProjectDetails');
    if (this.value === 'Yes') {
        ghgReductionProjectDetails.classList.remove('hidden');
    } else {
        ghgReductionProjectDetails.classList.add('hidden');
    }
});
document.getElementById('wasteExternalAgency').addEventListener('change', function () {
    var wasteExternalAgencyName = document.getElementById('wasteExternalAgencyName');
    if (this.value === 'Yes') {
        wasteExternalAgencyName.classList.remove('hidden');
    } else {
        wasteExternalAgencyName.classList.add('hidden');
    }
});
document.getElementById('ecologicalAreaOperations').addEventListener('change', function () {
    var ecologicalAreaOperationsDetails = document.getElementById('ecologicalAreaOperationsDetails');
    if (this.value === 'Yes') {
        ecologicalAreaOperationsDetails.classList.remove('hidden');
    } else {
        ecologicalAreaOperationsDetails.classList.add('hidden');
    }
});
document.getElementById('eiaExternalAgency').addEventListener('change', function () {
    var eiaExternalAgencyName = document.getElementById('eiaExternalAgencyName');
    if (this.value === 'Yes') {
        eiaExternalAgencyName.classList.remove('hidden');
    } else {
        eiaExternalAgencyName.classList.add('hidden');
    }
});
document.getElementById('eiaPublicDomain').addEventListener('change', function () {
    var eiaPublicDomainLink = document.getElementById('eiaPublicDomainLink');
    if (this.value === 'Yes') {
        eiaPublicDomainLink.classList.remove('hidden');
    } else {
        eiaPublicDomainLink.classList.add('hidden');
    }
});
document.getElementById('environmentalComplianceStatus').addEventListener('change', function () {
    var environmentalComplianceStatusDetails = document.getElementById('environmentalComplianceStatusDetails');
    if (this.value === 'Yes') {
        environmentalComplianceStatusDetails.classList.remove('hidden');
    } else {
        environmentalComplianceStatusDetails.classList.add('hidden');
    }
});
document.getElementById('antiCompetitiveActions').addEventListener('change', function () {
    var antiCompetitiveActionsDetails = document.getElementById('antiCompetitiveActionsDetails');
    if (this.value === 'Yes') {
        antiCompetitiveActionsDetails.classList.remove('hidden');
    } else {
        antiCompetitiveActionsDetails.classList.add('hidden');
    }
});

document.getElementById('productInfoDisplay').addEventListener('change', function () {
    var productInfoDisplayDetails = document.getElementById('productInfoDisplayDetails');
    if (this.value === 'Yes') {
        productInfoDisplayDetails.classList.remove('hidden');
    } else {
        productInfoDisplayDetails.classList.add('hidden');
    }
});
document.getElementById('surveyInfo').addEventListener('change', function () {
    var surveyInfoDetails = document.getElementById('surveyInfoDetails');
    if (this.value === 'No') {
        surveyInfoDetails.classList.remove('hidden');
    } else {
        surveyInfoDetails.classList.add('hidden');
    }
});
document.getElementById('cyberSecurityPolicy').addEventListener('change', function () {
    var cyberSecurityPolicyDetails = document.getElementById('cyberSecurityPolicyDetails');
    if (this.value === 'Yes') {
        cyberSecurityPolicyDetails.classList.remove('hidden');
    } else {
        cyberSecurityPolicyDetails.classList.add('hidden');
    }
});

// Navigation button based Division visiblility
let currentDiv = 1;
let totalDivs = 9;

function navigate(direction) {
    if (direction === 1 && !areRequiredFieldsFilled('prin' + currentDiv)) {
        alert("Please fill out all required fields before proceeding!");
        triggerNativeValidation('prin' + currentDiv);
        return;
    }
    document.getElementById('prin' + currentDiv).style.display = 'none';
    currentDiv += direction;
    if (currentDiv > totalDivs) currentDiv = totalDivs;
    if (currentDiv < 1) currentDiv = 1;
    document.getElementById('prin' + currentDiv).style.display = 'block';
    window.scrollTo(0, 0);
}

// Enforce filling of required fields in each div
function areRequiredFieldsFilled(divId) {
    const currentDiv = document.getElementById(divId);
    const requiredInputs = currentDiv.querySelectorAll('input[required], textarea[required], select[required]');

    for (let input of requiredInputs) {
        if (!input.value.trim()) {
            return false;
        }
    }
    return true;
}

// Point to exact missing field with native HTML validation
function triggerNativeValidation(divId) {
    const currentDiv = document.getElementById(divId);
    const requiredInputs = currentDiv.querySelectorAll('input[required], textarea[required], select[required]');
    for (let input of requiredInputs) {
        if (!input.value.trim()) {
            input.reportValidity(); // This will trigger the native HTML highlighting for unfilled fields
            break; // Stop at the first invalid field
        }
    }
}

function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

//Principle 1
// coverage
document.getElementById("coverage").addEventListener("input", function () {
    var input = this.value;
    if (input < 0) {
        this.value = 0;
    } else if (input > 100) {
        this.value = 100;
    }
});

// disciplinaryAction
document.getElementById("disciplinaryAction").addEventListener("input", function () {
    var input = this.value;
    if (input < 0) {
        this.value = 0;
    } else if (input > 2300000) {
        this.value = 2300000;
    }
});

//Principle 2
//rdPercentage
document.getElementById("rdPercentage").addEventListener("input", function () {
    var input = this.value;
    if (input < 0) {
        this.value = 0;
    } else if (input > 100) {
        this.value = 100;
    }
});

//sourcingPercentage2num
document.getElementById("sourcingPercentage2num").addEventListener("input", function () {
    var input = this.value;
    if (input < 0) {
        this.value = 0;
    } else if (input > 100) {
        this.value = 100;
    }
});


//recycledPercentage2
document.getElementById("recycledPercentage2").addEventListener("input", function () {
    var input = this.value;
    if (input < 0) {
        this.value = 0;
    } else if (input > 100) {
        this.value = 100;
    }
});

//Principle 4
//sourcingPercentage
document.getElementById("sourcingPercentage").addEventListener("input", function () {
    var input = this.value;
    if (input < 0) {
        this.value = 0;
    } else if (input > 100) {
        this.value = 100;
    }
});


//Principle 5
//assessedPlantPercentage
document.getElementById("assessedPlantPercentage").addEventListener("input", function () {
    var input = this.value;
    if (input < 0) {
        this.value = 0;
    } else if (input > 100) {
        this.value = 100;
    }
});

//valueChainAssessment
document.getElementById("valueChainAssessment").addEventListener("input", function () {
    var input = this.value;
    if (input < 0) {
        this.value = 0;
    } else if (input > 100) {
        this.value = 100;
    }
});


//Principle 8
//inputMaterialPercentage
document.getElementById("inputMaterialPercentage").addEventListener("input", function () {
    var input = this.value;
    if (input < 0) {
        this.value = 0;
    } else if (input > 100) {
        this.value = 100;
    }
});

/* ************************************************************************************************************************************ */
/*                                                                                                                                      */
/*                                                                P1 Table-START                                                        */
/*                                                                                                                                      */
/* ************************************************************************************************************************************ */


    /********************************************************************************************************************************** */
    /*                                                            P1-T1-Start                                                           */
    /********************************************************************************************************************************** */
    // Function to add a new row at the bottom of the table
    function addBottomRow1_3() {
        const table = document.querySelector("#appeal table tbody");
        const rows = table.getElementsByTagName("tr");
        const lastRow = rows[rows.length - 1].cloneNode(true);

        // Increment the S.No. in the new row
        const lastSNo = parseInt(rows[rows.length - 1].cells[0].getElementsByTagName("input")[0].value);
        lastRow.cells[0].getElementsByTagName("input")[0].value = lastSNo + 1;

        // Clear other input fields in the new row
        const inputs = lastRow.getElementsByTagName("input");
        for (let i = 1; i < inputs.length; i++) {
            inputs[i].value = "";
        }

        // Add the new row at the bottom
        table.appendChild(lastRow);

        updateSNoValues1_3();
    }

    // Function to remove a specific row from the table with confirmation
    function removeSpecificRow1_3() {
        const indexInput1_3 = document.getElementById("indexInput1_3");
        const parsedIndex = parseInt(indexInput1_3.value);

        if (!isNaN(parsedIndex) && parsedIndex > 1) {
            const table = document.querySelector("#appeal table tbody");
            const rows = table.getElementsByTagName("tr");

            if (parsedIndex <= rows.length) {
                // Ask for confirmation before removing the row
                if (confirm("Are you sure you want to remove this row?")) {
                    table.removeChild(rows[parsedIndex - 1]);

                    // Update the S.No. values in the table
                    updateSNoValues1_3();
                }
            } else {
                alert("Invalid S.No. The specified row does not exist.");
            }
        } else if (parsedIndex === 1) {
            alert("Cannot remove the first row. Please enter a valid S.No. greater than 1.");
        } else {
            alert("Invalid S.No. Please enter a valid S.No.");
        }

        // Clear the input value after removing the row
        indexInput1_3.value = "";
    }

    // Function to remove the last row from the table with confirmation
    function removeBottomRow1_3() {
        const table = document.querySelector("#appeal table tbody");
        const rows = table.getElementsByTagName("tr");

        if (rows.length > 1) { // Ensure there is more than one row
            // Ask for confirmation before removing the row
            if (confirm("Are you sure you want to remove the last row?")) {
                table.removeChild(rows[rows.length - 1]);

                // Update the S.No. values in the table
                updateSNoValues1_3();
            }
        }
    }

    // Function to add a new row at a specific index
    function addRowAtIndex1_3() {
        const indexInput1_3 = document.getElementById("indexInput1_3");
        const parsedIndex = parseInt(indexInput1_3.value);

        if (!isNaN(parsedIndex) && parsedIndex > 1) {
            const table = document.querySelector("#appeal table tbody");
            const rows = table.getElementsByTagName("tr");
            const newRow = rows[rows.length - 1].cloneNode(true);

            // Clear input fields in the new row
            const inputs = newRow.getElementsByTagName("input");
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].value = "";
            }
            // Increment the S.No. in the new row
            const lastSNo = parseInt(rows[rows.length - 1].cells[0].getElementsByTagName("input")[0].value);

            // Add the new row at the specified index
            if (parsedIndex === 0) {
                // Insert at the beginning
                table.insertBefore(newRow, rows[0]);
            } else if (parsedIndex <= rows.length - 1) {
                table.insertBefore(newRow, rows[parsedIndex]);
            } else {
                table.appendChild(newRow);
            }

            // Set S.No. for all rows starting from the specified index
            for (let i = parsedIndex; i < rows.length; i++) {
                const currentSNo = parseInt(rows[i].cells[0].getElementsByTagName("input")[0].value);
                rows[i].cells[0].getElementsByTagName("input")[0].value = currentSNo + 0;
            }
        } else {
            alert("Invalid S.No. Please enter a valid S.No. greater than 1.");
        }
        // Clear the input value after adding the row
        indexInput1_3.value = "";
        // Update the S.No. values in the table
        updateSNoValues1_3();
    }

    // Function to update S.No. values in the table
    function updateSNoValues1_3() {
        const table = document.querySelector("#appeal table tbody");
        const rows = table.getElementsByTagName("tr");
        for (let i = 1; i < rows.length; i++) {
            rows[i].cells[0].getElementsByTagName("input")[0].value = i + 1;
        }
    }

    /********************************************************************************************************************************** */
    /*                                                            P1-T1-Start                                                           */
    /********************************************************************************************************************************** */
    // Function to add a new row at the bottom of the table
    function addBottomRow1_p_1() {
        const table = document.querySelector("#awarenessProgrammes table tbody");
        const rows = table.getElementsByTagName("tr");
        const lastRow = rows[rows.length - 1].cloneNode(true);

        // Increment the S.No. in the new row
        const lastSNo = parseInt(rows[rows.length - 1].cells[0].getElementsByTagName("input")[0].value);
        lastRow.cells[0].getElementsByTagName("input")[0].value = lastSNo + 1;

        // Clear other input fields in the new row
        const inputs = lastRow.getElementsByTagName("input");
        for (let i = 1; i < inputs.length; i++) {
            inputs[i].value = "";
        }

        // Add the new row at the bottom
        table.appendChild(lastRow);

        updateSNoValues1_p_1();
    }

    // Function to remove a specific row from the table with confirmation
    function removeSpecificRow1_p_1() {
        const indexInput1_p_1 = document.getElementById("indexInput1_p_1");
        const parsedIndex = parseInt(indexInput1_p_1.value);

        if (!isNaN(parsedIndex) && parsedIndex > 1) {
            const table = document.querySelector("#awarenessProgrammes table tbody");
            const rows = table.getElementsByTagName("tr");

            if (parsedIndex <= rows.length) {
                // Ask for confirmation before removing the row
                if (confirm("Are you sure you want to remove this row?")) {
                    table.removeChild(rows[parsedIndex - 1]);

                    // Update the S.No. values in the table
                    updateSNoValues1_p_1();
                }
            } else {
                alert("Invalid S.No. The specified row does not exist.");
            }
        } else if (parsedIndex === 1) {
            alert("Cannot remove the first row. Please enter a valid S.No. greater than 1.");
        } else {
            alert("Invalid S.No. Please enter a valid S.No.");
        }

        // Clear the input value after removing the row
        indexInput1_p_1.value = "";
    }

    // Function to remove the last row from the table with confirmation
    function removeBottomRow1_p_1() {
        const table = document.querySelector("#awarenessProgrammes table tbody");
        const rows = table.getElementsByTagName("tr");

        if (rows.length > 1) { // Ensure there is more than one row
            // Ask for confirmation before removing the row
            if (confirm("Are you sure you want to remove the last row?")) {
                table.removeChild(rows[rows.length - 1]);

                // Update the S.No. values in the table
                updateSNoValues1_p_1();
            }
        }
    }

    // Function to add a new row at a specific index
    function addRowAtIndex1_p_1() {
        const indexInput1_p_1 = document.getElementById("indexInput1_p_1");
        const parsedIndex = parseInt(indexInput1_p_1.value);

        if (!isNaN(parsedIndex) && parsedIndex > 1) {
            const table = document.querySelector("#awarenessProgrammes table tbody");
            const rows = table.getElementsByTagName("tr");
            const newRow = rows[rows.length - 1].cloneNode(true);

            // Clear input fields in the new row
            const inputs = newRow.getElementsByTagName("input");
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].value = "";
            }
            // Increment the S.No. in the new row
            const lastSNo = parseInt(rows[rows.length - 1].cells[0].getElementsByTagName("input")[0].value);

            // Add the new row at the specified index
            if (parsedIndex === 0) {
                // Insert at the beginning
                table.insertBefore(newRow, rows[0]);
            } else if (parsedIndex <= rows.length - 1) {
                table.insertBefore(newRow, rows[parsedIndex]);
            } else {
                table.appendChild(newRow);
            }

            // Set S.No. for all rows starting from the specified index
            for (let i = parsedIndex; i < rows.length; i++) {
                const currentSNo = parseInt(rows[i].cells[0].getElementsByTagName("input")[0].value);
                rows[i].cells[0].getElementsByTagName("input")[0].value = currentSNo + 0;
            }
        } else {
            alert("Invalid S.No. Please enter a valid S.No. greater than 1.");
        }
        // Clear the input value after adding the row
        indexInput1_p_1.value = "";
        // Update the S.No. values in the table
        updateSNoValues1_p_1();
    }

    // Function to update S.No. values in the table
    function updateSNoValues1_p_1() {
        const table = document.querySelector("#awarenessProgrammes table tbody");
        const rows = table.getElementsByTagName("tr");
        for (let i = 1; i < rows.length; i++) {
            rows[i].cells[0].getElementsByTagName("input")[0].value = i + 1;
        }
}


/* ************************************************************************************************************************************ */
/*                                                                                                                                      */
/*                                                                P2 Table-START                                                        */
/*                                                                                                                                      */
/* ************************************************************************************************************************************ */

    /********************************************************************************************************************************** */
    /*                                                            P2-T1-Start                                                           */
    /********************************************************************************************************************************** */
    // Function to add a new row at the bottom of the table
    function addBottomRow2_1() {
        const table = document.querySelector("#lcaConducted2 table tbody");
        const rows = table.getElementsByTagName("tr");
        const lastRow = rows[rows.length - 1].cloneNode(true);

        // Increment the S.No. in the new row
        const lastSNo = parseInt(rows[rows.length - 1].cells[0].getElementsByTagName("input")[0].value);
        lastRow.cells[0].getElementsByTagName("input")[0].value = lastSNo + 1;

        // Clear other input fields in the new row
        const inputs = lastRow.getElementsByTagName("input");
        for (let i = 1; i < inputs.length; i++) {
            inputs[i].value = "";
        }

        // Add the new row at the bottom
        table.appendChild(lastRow);

        updateSNoValues2_1();
    }

    // Function to remove a specific row from the table with confirmation
    function removeSpecificRow2_1() {
        const indexInput2_1 = document.getElementById("indexInput2_1");
        const parsedIndex = parseInt(indexInput2_1.value);

        if (!isNaN(parsedIndex) && parsedIndex > 1) {
            const table = document.querySelector("#lcaConducted2 table tbody");
            const rows = table.getElementsByTagName("tr");

            if (parsedIndex <= rows.length) {
                // Ask for confirmation before removing the row
                if (confirm("Are you sure you want to remove this row?")) {
                    table.removeChild(rows[parsedIndex - 1]);

                    // Update the S.No. values in the table
                    updateSNoValues2_1();
                }
            } else {
                alert("Invalid S.No. The specified row does not exist.");
            }
        } else if (parsedIndex === 1) {
            alert("Cannot remove the first row. Please enter a valid S.No. greater than 1.");
        } else {
            alert("Invalid S.No. Please enter a valid S.No.");
        }

        // Clear the input value after removing the row
        indexInput2_1.value = "";
    }

    // Function to remove the last row from the table with confirmation
    function removeBottomRow2_1() {
        const table = document.querySelector("#lcaConducted2 table tbody");
        const rows = table.getElementsByTagName("tr");

        if (rows.length > 1) { // Ensure there is more than one row
            // Ask for confirmation before removing the row
            if (confirm("Are you sure you want to remove the last row?")) {
                table.removeChild(rows[rows.length - 1]);

                // Update the S.No. values in the table
                updateSNoValues2_1();
            }
        }
    }

    // Function to add a new row at a specific index
    function addRowAtIndex2_1() {
        const indexInput2_1 = document.getElementById("indexInput2_1");
        const parsedIndex = parseInt(indexInput2_1.value);

        if (!isNaN(parsedIndex) && parsedIndex > 1) {
            const table = document.querySelector("#lcaConducted2 table tbody");
            const rows = table.getElementsByTagName("tr");
            const newRow = rows[rows.length - 1].cloneNode(true);

            // Clear input fields in the new row
            const inputs = newRow.getElementsByTagName("input");
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].value = "";
            }
            // Increment the S.No. in the new row
            const lastSNo = parseInt(rows[rows.length - 1].cells[0].getElementsByTagName("input")[0].value);

            // Add the new row at the specified index
            if (parsedIndex === 0) {
                // Insert at the beginning
                table.insertBefore(newRow, rows[0]);
            } else if (parsedIndex <= rows.length - 1) {
                table.insertBefore(newRow, rows[parsedIndex]);
            } else {
                table.appendChild(newRow);
            }

            // Set S.No. for all rows starting from the specified index
            for (let i = parsedIndex; i < rows.length; i++) {
                const currentSNo = parseInt(rows[i].cells[0].getElementsByTagName("input")[0].value);
                rows[i].cells[0].getElementsByTagName("input")[0].value = currentSNo + 0;
            }
        } else {
            alert("Invalid S.No. Please enter a valid S.No. greater than 1.");
        }
        // Clear the input value after adding the row
        indexInput2_1.value = "";
        // Update the S.No. values in the table
        updateSNoValues2_1();
    }

    // Function to update S.No. values in the table
    function updateSNoValues2_1() {
        const table = document.querySelector("#lcaConducted2 table tbody");
        const rows = table.getElementsByTagName("tr");
        for (let i = 1; i < rows.length; i++) {
            rows[i].cells[0].getElementsByTagName("input")[0].value = i + 1;
        }
    }


    /********************************************************************************************************************************** */
    /*                                                            P2-T2-Start                                                           */
    /********************************************************************************************************************************** */
    // Function to add a new row at the bottom of the table
    function addBottomRow2_2() {
        const table = document.querySelector("#concernsMitigation2 table tbody");
        const rows = table.getElementsByTagName("tr");
        const lastRow = rows[rows.length - 1].cloneNode(true);

        // Increment the S.No. in the new row
        const lastSNo = parseInt(rows[rows.length - 1].cells[0].getElementsByTagName("input")[0].value);
        lastRow.cells[0].getElementsByTagName("input")[0].value = lastSNo + 1;

        // Clear other input fields in the new row
        const inputs = lastRow.getElementsByTagName("input");
        for (let i = 1; i < inputs.length; i++) {
            inputs[i].value = "";
        }

        // Add the new row at the bottom
        table.appendChild(lastRow);

        updateSNoValues2_2();
    }

    // Function to remove a specific row from the table with confirmation
    function removeSpecificRow2_2() {
        const indexInput2_2 = document.getElementById("indexInput2_2");
        const parsedIndex = parseInt(indexInput2_2.value);

        if (!isNaN(parsedIndex) && parsedIndex > 1) {
            const table = document.querySelector("#concernsMitigation2 table tbody");
            const rows = table.getElementsByTagName("tr");

            if (parsedIndex <= rows.length) {
                // Ask for confirmation before removing the row
                if (confirm("Are you sure you want to remove this row?")) {
                    table.removeChild(rows[parsedIndex - 1]);

                    // Update the S.No. values in the table
                    updateSNoValues2_2();
                }
            } else {
                alert("Invalid S.No. The specified row does not exist.");
            }
        } else if (parsedIndex === 1) {
            alert("Cannot remove the first row. Please enter a valid S.No. greater than 1.");
        } else {
            alert("Invalid S.No. Please enter a valid S.No.");
        }

        // Clear the input value after removing the row
        indexInput2_2.value = "";
    }

    // Function to remove the last row from the table with confirmation
    function removeBottomRow2_2() {
        const table = document.querySelector("#concernsMitigation2 table tbody");
        const rows = table.getElementsByTagName("tr");

        if (rows.length > 1) { // Ensure there is more than one row
            // Ask for confirmation before removing the row
            if (confirm("Are you sure you want to remove the last row?")) {
                table.removeChild(rows[rows.length - 1]);

                // Update the S.No. values in the table
                updateSNoValues2_2();
            }
        }
    }

    // Function to add a new row at a specific index
    function addRowAtIndex2_2() {
        const indexInput2_2 = document.getElementById("indexInput2_2");
        const parsedIndex = parseInt(indexInput2_2.value);

        if (!isNaN(parsedIndex) && parsedIndex > 1) {
            const table = document.querySelector("#concernsMitigation2 table tbody");
            const rows = table.getElementsByTagName("tr");
            const newRow = rows[rows.length - 1].cloneNode(true);

            // Clear input fields in the new row
            const inputs = newRow.getElementsByTagName("input");
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].value = "";
            }
            // Increment the S.No. in the new row
            const lastSNo = parseInt(rows[rows.length - 1].cells[0].getElementsByTagName("input")[0].value);

            // Add the new row at the specified index
            if (parsedIndex === 0) {
                // Insert at the beginning
                table.insertBefore(newRow, rows[0]);
            } else if (parsedIndex <= rows.length - 1) {
                table.insertBefore(newRow, rows[parsedIndex]);
            } else {
                table.appendChild(newRow);
            }

            // Set S.No. for all rows starting from the specified index
            for (let i = parsedIndex; i < rows.length; i++) {
                const currentSNo = parseInt(rows[i].cells[0].getElementsByTagName("input")[0].value);
                rows[i].cells[0].getElementsByTagName("input")[0].value = currentSNo + 0;
            }
        } else {
            alert("Invalid S.No. Please enter a valid S.No. greater than 1.");
        }
        // Clear the input value after adding the row
        indexInput2_2.value = "";
        // Update the S.No. values in the table
        updateSNoValues2_2();
    }

    // Function to update S.No. values in the table
    function updateSNoValues2_2() {
        const table = document.querySelector("#concernsMitigation2 table tbody");
        const rows = table.getElementsByTagName("tr");
        for (let i = 1; i < rows.length; i++) {
            rows[i].cells[0].getElementsByTagName("input")[0].value = i + 1;
        }
    }


    /********************************************************************************************************************************** */
    /*                                                            P2-T3-Start                                                           */
    /********************************************************************************************************************************** */
    // Function to add a new row at the bottom of the table
    function addBottomRow2_3() {
        const table = document.querySelector("#recycledPercentage2 table tbody");
        const rows = table.getElementsByTagName("tr");
        const lastRow = rows[rows.length - 1].cloneNode(true);

        // Increment the S.No. in the new row
        const lastSNo = parseInt(rows[rows.length - 1].cells[0].getElementsByTagName("input")[0].value);
        lastRow.cells[0].getElementsByTagName("input")[0].value = lastSNo + 1;

        // Clear other input fields in the new row
        const inputs = lastRow.getElementsByTagName("input");
        for (let i = 1; i < inputs.length; i++) {
            inputs[i].value = "";
        }

        // Add the new row at the bottom
        table.appendChild(lastRow);

        updateSNoValues2_3();
    }

    // Function to remove a specific row from the table with confirmation
    function removeSpecificRow2_3() {
        const indexInput2_3 = document.getElementById("indexInput2_3");
        const parsedIndex = parseInt(indexInput2_3.value);

        if (!isNaN(parsedIndex) && parsedIndex > 1) {
            const table = document.querySelector("#recycledPercentage2 table tbody");
            const rows = table.getElementsByTagName("tr");

            if (parsedIndex <= rows.length) {
                // Ask for confirmation before removing the row
                if (confirm("Are you sure you want to remove this row?")) {
                    table.removeChild(rows[parsedIndex - 1]);

                    // Update the S.No. values in the table
                    updateSNoValues2_3();
                }
            } else {
                alert("Invalid S.No. The specified row does not exist.");
            }
        } else if (parsedIndex === 1) {
            alert("Cannot remove the first row. Please enter a valid S.No. greater than 1.");
        } else {
            alert("Invalid S.No. Please enter a valid S.No.");
        }

        // Clear the input value after removing the row
        indexInput2_3.value = "";
    }

    // Function to remove the last row from the table with confirmation
    function removeBottomRow2_3() {
        const table = document.querySelector("#recycledPercentage2 table tbody");
        const rows = table.getElementsByTagName("tr");

        if (rows.length > 1) { // Ensure there is more than one row
            // Ask for confirmation before removing the row
            if (confirm("Are you sure you want to remove the last row?")) {
                table.removeChild(rows[rows.length - 1]);

                // Update the S.No. values in the table
                updateSNoValues2_3();
            }
        }
    }

    // Function to add a new row at a specific index
    function addRowAtIndex2_3() {
        const indexInput2_3 = document.getElementById("indexInput2_3");
        const parsedIndex = parseInt(indexInput2_3.value);

        if (!isNaN(parsedIndex) && parsedIndex > 1) {
            const table = document.querySelector("#recycledPercentage2 table tbody");
            const rows = table.getElementsByTagName("tr");
            const newRow = rows[rows.length - 1].cloneNode(true);

            // Clear input fields in the new row
            const inputs = newRow.getElementsByTagName("input");
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].value = "";
            }
            // Increment the S.No. in the new row
            const lastSNo = parseInt(rows[rows.length - 1].cells[0].getElementsByTagName("input")[0].value);

            // Add the new row at the specified index
            if (parsedIndex === 0) {
                // Insert at the beginning
                table.insertBefore(newRow, rows[0]);
            } else if (parsedIndex <= rows.length - 1) {
                table.insertBefore(newRow, rows[parsedIndex]);
            } else {
                table.appendChild(newRow);
            }

            // Set S.No. for all rows starting from the specified index
            for (let i = parsedIndex; i < rows.length; i++) {
                const currentSNo = parseInt(rows[i].cells[0].getElementsByTagName("input")[0].value);
                rows[i].cells[0].getElementsByTagName("input")[0].value = currentSNo + 0;
            }
        } else {
            alert("Invalid S.No. Please enter a valid S.No. greater than 1.");
        }
        // Clear the input value after adding the row
        indexInput2_3.value = "";
        // Update the S.No. values in the table
        updateSNoValues2_3();
    }

    // Function to update S.No. values in the table
    function updateSNoValues2_3() {
        const table = document.querySelector("#recycledPercentage2 table tbody");
        const rows = table.getElementsByTagName("tr");
        for (let i = 1; i < rows.length; i++) {
            rows[i].cells[0].getElementsByTagName("input")[0].value = i + 1;
        }
    }


    /********************************************************************************************************************************** */
    /*                                                            P2-T4-Start                                                           */
    /********************************************************************************************************************************** */
    // Function to add a new row at the bottom of the table
    function addBottomRow2_5() {
        const table = document.querySelector("#reclaimedPercentages2 table tbody");
        const rows = table.getElementsByTagName("tr");
        const lastRow = rows[rows.length - 1].cloneNode(true);

        // Increment the S.No. in the new row
        const lastSNo = parseInt(rows[rows.length - 1].cells[0].getElementsByTagName("input")[0].value);
        lastRow.cells[0].getElementsByTagName("input")[0].value = lastSNo + 1;

        // Clear other input fields in the new row
        const inputs = lastRow.getElementsByTagName("input");
        for (let i = 1; i < inputs.length; i++) {
            inputs[i].value = "";
        }

        // Add the new row at the bottom
        table.appendChild(lastRow);

        updateSNoValues2_5();
    }

    // Function to remove a specific row from the table with confirmation
    function removeSpecificRow2_5() {
        const indexInput2_5 = document.getElementById("indexInput2_5");
        const parsedIndex = parseInt(indexInput2_5.value);

        if (!isNaN(parsedIndex) && parsedIndex > 1) {
            const table = document.querySelector("#reclaimedPercentages2 table tbody");
            const rows = table.getElementsByTagName("tr");

            if (parsedIndex <= rows.length) {
                // Ask for confirmation before removing the row
                if (confirm("Are you sure you want to remove this row?")) {
                    table.removeChild(rows[parsedIndex - 1]);

                    // Update the S.No. values in the table
                    updateSNoValues2_5();
                }
            } else {
                alert("Invalid S.No. The specified row does not exist.");
            }
        } else if (parsedIndex === 1) {
            alert("Cannot remove the first row. Please enter a valid S.No. greater than 1.");
        } else {
            alert("Invalid S.No. Please enter a valid S.No.");
        }

        // Clear the input value after removing the row
        indexInput2_5.value = "";
    }

    // Function to remove the last row from the table with confirmation
    function removeBottomRow2_5() {
        const table = document.querySelector("#reclaimedPercentages2 table tbody");
        const rows = table.getElementsByTagName("tr");

        if (rows.length > 1) { // Ensure there is more than one row
            // Ask for confirmation before removing the row
            if (confirm("Are you sure you want to remove the last row?")) {
                table.removeChild(rows[rows.length - 1]);

                // Update the S.No. values in the table
                updateSNoValues2_5();
            }
        }
    }

    // Function to add a new row at a specific index
    function addRowAtIndex2_5() {
        const indexInput2_5 = document.getElementById("indexInput2_5");
        const parsedIndex = parseInt(indexInput2_5.value);

        if (!isNaN(parsedIndex) && parsedIndex > 1) {
            const table = document.querySelector("#reclaimedPercentages2 table tbody");
            const rows = table.getElementsByTagName("tr");
            const newRow = rows[rows.length - 1].cloneNode(true);

            // Clear input fields in the new row
            const inputs = newRow.getElementsByTagName("input");
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].value = "";
            }
            // Increment the S.No. in the new row
            const lastSNo = parseInt(rows[rows.length - 1].cells[0].getElementsByTagName("input")[0].value);

            // Add the new row at the specified index
            if (parsedIndex === 0) {
                // Insert at the beginning
                table.insertBefore(newRow, rows[0]);
            } else if (parsedIndex <= rows.length - 1) {
                table.insertBefore(newRow, rows[parsedIndex]);
            } else {
                table.appendChild(newRow);
            }

            // Set S.No. for all rows starting from the specified index
            for (let i = parsedIndex; i < rows.length; i++) {
                const currentSNo = parseInt(rows[i].cells[0].getElementsByTagName("input")[0].value);
                rows[i].cells[0].getElementsByTagName("input")[0].value = currentSNo + 0;
            }
        } else {
            alert("Invalid S.No. Please enter a valid S.No. greater than 1.");
        }
        // Clear the input value after adding the row
        indexInput2_5.value = "";
        // Update the S.No. values in the table
        updateSNoValues2_5();
    }

    // Function to update S.No. values in the table
    function updateSNoValues2_5() {
        const table = document.querySelector("#reclaimedPercentages2 table tbody");
        const rows = table.getElementsByTagName("tr");
        for (let i = 1; i < rows.length; i++) {
            rows[i].cells[0].getElementsByTagName("input")[0].value = i + 1;
        }
}


/* ************************************************************************************************************************************ */
/*                                                                                                                                      */
/*                                                                P4 Table-START                                                        */
/*                                                                                                                                      */
/* ************************************************************************************************************************************ */

    /********************************************************************************************************************************** */
    /*                                                            P4-T1-Start                                                           */
    /********************************************************************************************************************************** */
    // Function to add a new row at the bottom of the table
    function addBottomRow4_2() {
        const table = document.querySelector("#stakeholderEngagementDetails table tbody");
        const rows = table.getElementsByTagName("tr");
        const lastRow = rows[rows.length - 1].cloneNode(true);

        // Increment the S.No. in the new row
        const lastSNo = parseInt(rows[rows.length - 1].cells[0].getElementsByTagName("input")[0].value);
        lastRow.cells[0].getElementsByTagName("input")[0].value = lastSNo + 1;

        // Clear other input fields in the new row
        const inputs = lastRow.getElementsByTagName("input");
        for (let i = 1; i < inputs.length; i++) {
            inputs[i].value = "";
        }

        // Add the new row at the bottom
        table.appendChild(lastRow);

        updateSNoValues4_2();
    }

    // Function to remove a specific row from the table with confirmation
    function removeSpecificRow4_2() {
        const indexInput4_2 = document.getElementById("indexInput4_2");
        const parsedIndex = parseInt(indexInput4_2.value);

        if (!isNaN(parsedIndex) && parsedIndex > 1) {
            const table = document.querySelector("#stakeholderEngagementDetails table tbody");
            const rows = table.getElementsByTagName("tr");

            if (parsedIndex <= rows.length) {
                // Ask for confirmation before removing the row
                if (confirm("Are you sure you want to remove this row?")) {
                    table.removeChild(rows[parsedIndex - 1]);

                    // Update the S.No. values in the table
                    updateSNoValues4_2();
                }
            } else {
                alert("Invalid S.No. The specified row does not exist.");
            }
        } else if (parsedIndex === 1) {
            alert("Cannot remove the first row. Please enter a valid S.No. greater than 1.");
        } else {
            alert("Invalid S.No. Please enter a valid S.No.");
        }

        // Clear the input value after removing the row
        indexInput4_2.value = "";
    }

    // Function to remove the last row from the table with confirmation
    function removeBottomRow4_2() {
        const table = document.querySelector("#stakeholderEngagementDetails table tbody");
        const rows = table.getElementsByTagName("tr");

        if (rows.length > 1) { // Ensure there is more than one row
            // Ask for confirmation before removing the row
            if (confirm("Are you sure you want to remove the last row?")) {
                table.removeChild(rows[rows.length - 1]);

                // Update the S.No. values in the table
                updateSNoValues4_2();
            }
        }
    }

    // Function to add a new row at a specific index
    function addRowAtIndex4_2() {
        const indexInput4_2 = document.getElementById("indexInput4_2");
        const parsedIndex = parseInt(indexInput4_2.value);

        if (!isNaN(parsedIndex) && parsedIndex > 1) {
            const table = document.querySelector("#stakeholderEngagementDetails table tbody");
            const rows = table.getElementsByTagName("tr");
            const newRow = rows[rows.length - 1].cloneNode(true);

            // Clear input fields in the new row
            const inputs = newRow.getElementsByTagName("input");
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].value = "";
            }
            // Increment the S.No. in the new row
            const lastSNo = parseInt(rows[rows.length - 1].cells[0].getElementsByTagName("input")[0].value);

            // Add the new row at the specified index
            if (parsedIndex === 0) {
                // Insert at the beginning
                table.insertBefore(newRow, rows[0]);
            } else if (parsedIndex <= rows.length - 1) {
                table.insertBefore(newRow, rows[parsedIndex]);
            } else {
                table.appendChild(newRow);
            }

            // Set S.No. for all rows starting from the specified index
            for (let i = parsedIndex; i < rows.length; i++) {
                const currentSNo = parseInt(rows[i].cells[0].getElementsByTagName("input")[0].value);
                rows[i].cells[0].getElementsByTagName("input")[0].value = currentSNo + 0;
            }
        } else {
            alert("Invalid S.No. Please enter a valid S.No. greater than 1.");
        }
        // Clear the input value after adding the row
        indexInput4_2.value = "";
        // Update the S.No. values in the table
        updateSNoValues4_2();
    }

    // Function to update S.No. values in the table
    function updateSNoValues4_2() {
        const table = document.querySelector("#stakeholderEngagementDetails table tbody");
        const rows = table.getElementsByTagName("tr");
        for (let i = 1; i < rows.length; i++) {
            rows[i].cells[0].getElementsByTagName("input")[0].value = i + 1;
        }
}


/* ************************************************************************************************************************************ */
/*                                                                                                                                      */
/*                                                                P7 Table-START                                                        */
/*                                                                                                                                      */
/* ************************************************************************************************************************************ */

    /********************************************************************************************************************************** */
    /*                                                            P7-T1-Start                                                           */
    /********************************************************************************************************************************** */
    // Function to add a new row at the bottom of the table
    function addBottomRow7_3() {
        const table = document.querySelector("#publicPolicyAdvocacy table tbody");
        const rows = table.getElementsByTagName("tr");
        const lastRow = rows[rows.length - 1].cloneNode(true);

        // Increment the S.No. in the new row
        const lastSNo = parseInt(rows[rows.length - 1].cells[0].getElementsByTagName("input")[0].value);
        lastRow.cells[0].getElementsByTagName("input")[0].value = lastSNo + 1;

        // Clear other input fields in the new row
        const inputs = lastRow.getElementsByTagName("input");
        for (let i = 1; i < inputs.length; i++) {
            inputs[i].value = "";
        }

        // Add the new row at the bottom
        table.appendChild(lastRow);

        updateSNoValues7_3();
    }

    // Function to remove a specific row from the table with confirmation
    function removeSpecificRow7_3() {
        const indexInput7_3 = document.getElementById("indexInput7_3");
        const parsedIndex = parseInt(indexInput7_3.value);

        if (!isNaN(parsedIndex) && parsedIndex > 1) {
            const table = document.querySelector("#publicPolicyAdvocacy table tbody");
            const rows = table.getElementsByTagName("tr");

            if (parsedIndex <= rows.length) {
                // Ask for confirmation before removing the row
                if (confirm("Are you sure you want to remove this row?")) {
                    table.removeChild(rows[parsedIndex - 1]);

                    // Update the S.No. values in the table
                    updateSNoValues7_3();
                }
            } else {
                alert("Invalid S.No. The specified row does not exist.");
            }
        } else if (parsedIndex === 1) {
            alert("Cannot remove the first row. Please enter a valid S.No. greater than 1.");
        } else {
            alert("Invalid S.No. Please enter a valid S.No.");
        }

        // Clear the input value after removing the row
        indexInput7_3.value = "";
    }

    // Function to remove the last row from the table with confirmation
    function removeBottomRow7_3() {
        const table = document.querySelector("#publicPolicyAdvocacy table tbody");
        const rows = table.getElementsByTagName("tr");

        if (rows.length > 1) { // Ensure there is more than one row
            // Ask for confirmation before removing the row
            if (confirm("Are you sure you want to remove the last row?")) {
                table.removeChild(rows[rows.length - 1]);

                // Update the S.No. values in the table
                updateSNoValues7_3();
            }
        }
    }

    // Function to add a new row at a specific index
    function addRowAtIndex7_3() {
        const indexInput7_3 = document.getElementById("indexInput7_3");
        const parsedIndex = parseInt(indexInput7_3.value);

        if (!isNaN(parsedIndex) && parsedIndex > 1) {
            const table = document.querySelector("#publicPolicyAdvocacy table tbody");
            const rows = table.getElementsByTagName("tr");
            const newRow = rows[rows.length - 1].cloneNode(true);

            // Clear input fields in the new row
            const inputs = newRow.getElementsByTagName("input");
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].value = "";
            }
            // Increment the S.No. in the new row
            const lastSNo = parseInt(rows[rows.length - 1].cells[0].getElementsByTagName("input")[0].value);

            // Add the new row at the specified index
            if (parsedIndex === 0) {
                // Insert at the beginning
                table.insertBefore(newRow, rows[0]);
            } else if (parsedIndex <= rows.length - 1) {
                table.insertBefore(newRow, rows[parsedIndex]);
            } else {
                table.appendChild(newRow);
            }

            // Set S.No. for all rows starting from the specified index
            for (let i = parsedIndex; i < rows.length; i++) {
                const currentSNo = parseInt(rows[i].cells[0].getElementsByTagName("input")[0].value);
                rows[i].cells[0].getElementsByTagName("input")[0].value = currentSNo + 0;
            }
        } else {
            alert("Invalid S.No. Please enter a valid S.No. greater than 1.");
        }
        // Clear the input value after adding the row
        indexInput7_3.value = "";
        // Update the S.No. values in the table
        updateSNoValues7_3();
    }

    // Function to update S.No. values in the table
    function updateSNoValues7_3() {
        const table = document.querySelector("#publicPolicyAdvocacy table tbody");
        const rows = table.getElementsByTagName("tr");
        for (let i = 1; i < rows.length; i++) {
            rows[i].cells[0].getElementsByTagName("input")[0].value = i + 1;
        }
    }