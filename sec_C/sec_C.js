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
/*document.getElementById('accessibilityChoice').addEventListener('change', function () {
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
});*/
/*document.getElementById('healthSafetyManagementSystemChoice').addEventListener('change', function () {
    var healthSafetyManagementSystemDetails = document.getElementById('healthSafetyManagementSystemDetails');
    if (this.value === 'Yes') {
        healthSafetyManagementSystemDetails.classList.remove('hidden');
    } else {
        healthSafetyManagementSystemDetails.classList.add('hidden');
    }
});*/





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
/*                                                              Table-START                                                             */
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

    if (!isNaN(parsedIndex) && parsedIndex > 1) {
        const table = document.querySelector(`#${Id} table tbody`);
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
    indexInput.value = "";
    // Update the S.No. values in the table
    updateSNoValues(Id);
}

// Function to update S.No. values in the table
function updateSNoValues(Id) {
    const table = document.querySelector(`#${Id} table tbody`);
    const rows = table.getElementsByTagName("tr");
    for (let i = 1; i < rows.length; i++) {
        rows[i].cells[0].getElementsByTagName("input")[0].value = i + 1;
    }
}

    