// Yes/No based label visibility
document.getElementById('conflictOfInterest').addEventListener('change', function () {
    var conflictDetails = document.getElementById('conflictDetails');
    if (this.value === 'Yes') {
        conflictDetails.classList.remove('hidden');
    } else {
        conflictDetails.classList.add('hidden');
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

//Principle 3

//EI 10a
document.getElementById('healthSafetyManagementSystemChoice').addEventListener('change', function () {
    var healthSafetyManagementSystemDetails = document.getElementById('healthSafetyManagementSystemDetails');
    if (this.value === 'Yes') {
        healthSafetyManagementSystemDetails.classList.remove('hidden');
    } else {
        healthSafetyManagementSystemDetails.classList.add('hidden');
    }
});

//LI 1a
document.getElementById('lifeInsuranceCompensationa').addEventListener('change', function () {
    var lifeInsuranceCompensationdetailsa = document.getElementById('lifeInsuranceCompensationdetailsa');
    if (this.value === 'Yes') {
        lifeInsuranceCompensationdetailsa.classList.remove('hidden');
    } else {
        lifeInsuranceCompensationdetailsa.classList.add('hidden');
    }
});

//LI 1b
document.getElementById('lifeInsuranceCompensationb').addEventListener('change', function () {
    var lifeInsuranceCompensationdetailsb = document.getElementById('lifeInsuranceCompensationdetailsb');
    if (this.value === 'Yes') {
        lifeInsuranceCompensationdetailsb.classList.remove('hidden');
    } else {
        lifeInsuranceCompensationdetailsb.classList.add('hidden');
    }
});

//Principle 6

//EI 1.2
document.getElementById('energyExternalAgency').addEventListener('change', function () {
    var energyExternalAgencyName = document.getElementById('energyExternalAgencyName');
    if (this.value === 'Yes') {
        energyExternalAgencyName.classList.remove('hidden');
    } else {
        energyExternalAgencyName.classList.add('hidden');
    }
});

//EI 2
document.getElementById('designatedConsumers').addEventListener('change', function () {
    var designatedConsumersDetails = document.getElementById('designatedConsumersDetails');
    if (this.value === 'Yes') {
        designatedConsumersDetails.classList.remove('hidden');
    } else {
        designatedConsumersDetails.classList.add('hidden');
    }
});

//EI 3.2
document.getElementById('waterExternalAgency').addEventListener('change', function () {
    var waterExternalAgencyName = document.getElementById('waterExternalAgencyName');
    if (this.value === 'Yes') {
        waterExternalAgencyName.classList.remove('hidden');
    } else {
        waterExternalAgencyName.classList.add('hidden');
    }
});

//EI 4
document.getElementById('liquidDischarge').addEventListener('change', function () {
    var liquidDischargeDetails = document.getElementById('liquidDischargeDetails');
    if (this.value === 'Yes') {
        liquidDischargeDetails.classList.remove('hidden');
    } else {
        liquidDischargeDetails.classList.add('hidden');
    }
});

//EI 5.2
document.getElementById('airExternalAgency').addEventListener('change', function () {
    var airExternalAgencyName = document.getElementById('airExternalAgencyName');
    if (this.value === 'Yes') {
        airExternalAgencyName.classList.remove('hidden');
    } else {
        airExternalAgencyName.classList.add('hidden');
    }
});

//EI 6.2
document.getElementById('ghgExternalAgency').addEventListener('change', function () {
    var ghgExternalAgencyName = document.getElementById('ghgExternalAgencyName');
    if (this.value === 'Yes') {
        ghgExternalAgencyName.classList.remove('hidden');
    } else {
        ghgExternalAgencyName.classList.add('hidden');
    }
});

//EI 7
document.getElementById('ghgReductionProject').addEventListener('change', function () {
    var ghgReductionProjectDetails = document.getElementById('ghgReductionProjectDetails');
    if (this.value === 'Yes') {
        ghgReductionProjectDetails.classList.remove('hidden');
    } else {
        ghgReductionProjectDetails.classList.add('hidden');
    }
});

//EI 8.2
document.getElementById('wasteExternalAgency').addEventListener('change', function () {
    var wasteExternalAgencyName = document.getElementById('wasteExternalAgencyName');
    if (this.value === 'Yes') {
        wasteExternalAgencyName.classList.remove('hidden');
    } else {
        wasteExternalAgencyName.classList.add('hidden');
    }
});

//LI 1.2
document.getElementById('totalenergyconsumedAgency').addEventListener('change', function () {
    var totalenergyconsumedAgencyName = document.getElementById('totalenergyconsumedAgencyName');
    if (this.value === 'Yes') {
        totalenergyconsumedAgencyName.classList.remove('hidden');
    } else {
        totalenergyconsumedAgencyName.classList.add('hidden');
    }
});

//LI 2.2
document.getElementById('waterdischargedAgency').addEventListener('change', function () {
    var waterdischargedAgencyName = document.getElementById('waterdischargedAgencyName');
    if (this.value === 'Yes') {
        waterdischargedAgencyName.classList.remove('hidden');
    } else {
        waterdischargedAgencyName.classList.add('hidden');
    }
});

//LI 3.2
document.getElementById('waterstressAgency').addEventListener('change', function () {
    var waterstressAgencyName = document.getElementById('waterstressAgencyName');
    if (this.value === 'Yes') {
        waterstressAgencyName.classList.remove('hidden');
    } else {
        waterstressAgencyName.classList.add('hidden');
    }
});

//LI 4.2
document.getElementById('totalscopeAgency').addEventListener('change', function () {
    var totalscopeAgencyName = document.getElementById('totalscopeAgencyName');
    if (this.value === 'Yes') {
        totalscopeAgencyName.classList.remove('hidden');
    } else {
        totalscopeAgencyName.classList.add('hidden');
    }
});

//Principle 9

//EI 5
document.getElementById('cyberSecurityPolicy').addEventListener('change', function () {
    var cyberSecurityPolicyDetails = document.getElementById('cyberSecurityPolicyDetails');
    if (this.value === 'Yes') {
        cyberSecurityPolicyDetails.classList.remove('hidden');
    } else {
        cyberSecurityPolicyDetails.classList.add('hidden');
    }
});

//LI 4.1
document.getElementById('productInfoDisplay').addEventListener('change', function () {
    var productInfoDisplayDetails = document.getElementById('productInfoDisplayDetails');
    if (this.value === 'Yes') {
        productInfoDisplayDetails.classList.remove('hidden');
    } else {
        productInfoDisplayDetails.classList.add('hidden');
    }
});

//LI 4.2
document.getElementById('surveyInfo').addEventListener('change', function () {
    var surveyInfoDetails = document.getElementById('surveyInfoDetails');
    if (this.value === 'No') {
        surveyInfoDetails.classList.remove('hidden');
    } else {
        surveyInfoDetails.classList.add('hidden');
    }
});
// End of Yes/No based label visibility

// Helper function to calculate percentage
function calculatePercentage(part, whole) {
    if (whole == 0)
        return 0;
    else
        return (part / whole * 100).toFixed(2); // Adjust the number of decimal places as needed
}

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

//recycledPercentage2
document.getElementById("recycledPercentage2").addEventListener("input", function () {
    var input = this.value;
    if (input < 0) {
        this.value = 0;
    } else if (input > 100) {
        this.value = 100;
    }
});


/* ************************************************************************************************************************************ */
/*                                                                                                                                      */
/*                                                           Table row addition                                                         */
/*                                                                                                                                      */
/* ************************************************************************************************************************************ */

// Function to add a new row at the bottom of the table
function addBottomRow(Id) {
    const table = document.querySelector(`#${Id} table tbody`);
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

    updateSNoValues(Id);
}

// Function to remove a specific row from the table with confirmation
function removeSpecificRow(Id) {
    const indexInput = document.getElementById(`indexInput_${Id}`);
    const parsedIndex = parseInt(indexInput.value);

    if (!isNaN(parsedIndex) && parsedIndex > 1) {
        const table = document.querySelector(`#${Id} table tbody`);
        const rows = table.getElementsByTagName("tr");

        if (parsedIndex <= rows.length) {
            // Ask for confirmation before removing the row
            if (confirm("Are you sure you want to remove this row?")) {
                table.removeChild(rows[parsedIndex - 1]);

                // Update the S.No. values in the table
                updateSNoValues(Id);
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
    indexInput.value = "";
}

// Function to remove the last row from the table with confirmation
function removeBottomRow(Id) {
    const table = document.querySelector(`#${Id} table tbody`);
    const rows = table.getElementsByTagName("tr");

    if (rows.length > 1) { // Ensure there is more than one row
        // Ask for confirmation before removing the row
        if (confirm("Are you sure you want to remove the last row?")) {
            table.removeChild(rows[rows.length - 1]);

            // Update the S.No. values in the table
            updateSNoValues(Id);
        }
    }
}

// Function to add a new row at a specific index
function addRowAtIndex(Id) {
    const indexInput = document.getElementById(`indexInput_${Id}`);
    const parsedIndex = parseInt(indexInput.value);

    if (!isNaN(parsedIndex) && parsedIndex >= -1) {
        const table = document.querySelector(`#${Id} table tbody`);
        const rows = table.getElementsByTagName("tr");
        const newRow = rows[rows.length - 1].cloneNode(true);

        // Clear input fields in the new row
        const inputs = newRow.getElementsByTagName("input");
        for (let i = 0; i < inputs.length; i++) {
            inputs[i].value = "";
        }

        // Add the new row at the specified index
        if (parsedIndex === 1) {
            // Insert at the beginning
            table.insertBefore(newRow, rows[0]);
        } else if (parsedIndex <= rows.length - 1) {
            table.insertBefore(newRow, rows[parsedIndex - 2].nextSibling);
        } else {
            table.appendChild(newRow);
        }

        // Update the S.No. for all rows in the table
        updateSNoValues(Id);
    } else {
        alert("Invalid S.No. Please enter a valid S.No. greater than or equal to 1.");
    }

    // Clear the input value after adding the row
    indexInput.value = "";
}

// Function to update S.No. values in the table
function updateSNoValues(Id) {
    const table = document.querySelector(`#${Id} table tbody`);
    const rows = table.getElementsByTagName("tr");

    // Update S.No. values for all rows in the table
    for (let i = 0; i < rows.length; i++) {
        rows[i].cells[0].getElementsByTagName("input")[0].value = i + 1;
    }
}



/* ************************************************************************************************************************************ */
/*                                                                                                                                      */
/*                                         Function to make sure you really want to submit the form                                     */
/*                                                                                                                                      */
/* ************************************************************************************************************************************ */
function confirmSubmission() {
    // You can add additional validation or actions before final submission
    return confirm('Are you sure you want to submit the form?');
}

    