/* ************************************************************************************************************************************ */
/*                                                                                                                                      */
/*                                                     I. DETAILS OF THE LISTED ENTITY                                                  */
/*                                                                                                                                      */
/* ************************************************************************************************************************************ */

    //1-cin validation
    const cin = document.getElementById("cin").addEventListener("input", function () {
        const cinValidationMessage = document.getElementById("cinValidationMessage");
        var cinValue = this.value.toUpperCase();
        cinValue = cinValue.replace(/[^A-Z0-9]/g, '');
        // Check if the CIN is a valid format (e.g., U74140DL2014PTC272628)
        const cinRegex = /^[A-Z][0-9]{5}[A-Z]{2}[0-9]{4}[A-Z]{3}[0-9]{6}$/;
        const isValidLength = cinValue.length === 21;
        this.value = cinValue;
        if (cinRegex.test(cinValue) && isValidLength) {
            cinValidationMessage.textContent = "Valid CIN";
            cinValidationMessage.style.color = "green";
        } else {
            cinValidationMessage.textContent = "Invalid CIN format. Please enter a valid 21-character CIN(U74140DL2014PTC272628)";
            cinValidationMessage.style.color = "red";
        }
    });

    //2-name validation
    const nameInput = document.getElementById("name");
    const nameError = document.getElementById("nameValidationMessage");
    nameInput.addEventListener("input", function () {
        this.value = this.value.replace(/[^A-Za-z\s.]/g, ''); // Remove characters that are NOT alphabets, spaces, or dots
        var name = nameInput.value;
        var regex = /^[A-Za-z\s.]+$/;

        if (!regex.test(name)) {
            nameError.textContent = "Only alphabets, dots, and spaces are allowed.";
            nameInput.setCustomValidity("Invalid input");
        } else {
            nameError.textContent = "";
            nameInput.setCustomValidity("");
        }
    });

    //3-incorporation date
    var start = 1900;
    var end = 2023;
    var options = "";
    for (var year = start; year <= end; year++) {
        options += "<option value='" + year + "'>" + year + "</option>";
    }
    document.getElementById("incorp_date").innerHTML = options;

    //6-email validation
    var emailInputs = document.querySelectorAll('input[name="email[]"]');
    var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    emailInputs.forEach(function (input, index) {
        input.addEventListener("input", function () {
            var inputValue = input.value;
            var validationMessage = document.getElementById("emailValidationMessage" + (index + 1));

            if (emailRegex.test(inputValue)) {
                validationMessage.textContent = "Email address is valid.";
                validationMessage.style.color = "green";
            } else {
                validationMessage.textContent = "Please enter a valid email address.";
                validationMessage.style.color = "red";
            }
        });
    });

    //7-telephone validation
    var telephoneInputs = document.querySelectorAll('input[name="telephone[]"]');
    var telephoneRegex = /^[0-9+-]+$/;

    telephoneInputs.forEach(function (input, index) {
        input.addEventListener("input", function () {
            var inputValue = input.value;
            var validationMessage = document.getElementById("telephoneValidationMessage" + (index + 1));

            if (telephoneRegex.test(inputValue)) {
                validationMessage.textContent = "telephone number is valid.";
                validationMessage.style.color = "green";
            } else {
                validationMessage.textContent = "Please enter a valid telephone number.";
                validationMessage.style.color = "red";
            }
        });
    });

    //8-website validation
    var websiteInput = document.getElementById("website");
    var websiteValidationMessage = document.getElementById("websiteValidationMessage");

    websiteInput.addEventListener("input", function () {
        var inputValue = websiteInput.value;

        if (isValidWebsite(inputValue)) {
            websiteValidationMessage.textContent = "Website link is valid.";
            websiteValidationMessage.style.color = "green";
        } else {
            websiteValidationMessage.textContent = "Please enter a valid website link.";
            websiteValidationMessage.style.color = "red";
        }
    });
    function isValidWebsite(url) {
        var pattern = /^(https?:\/\/)?[\w.-]+\.[a-zA-Z]{2,}(\/\S*)?$/;
        return pattern.test(url);
    }

    //9-reporting financial year validation
    var start = 1900;
    var end = 2023;
    var options = "";
    for (var year = start; year <= end; year++) {
        var fiscalYear = "FY " + year + "-" + (year.toString().substr(2, 2) * 1 + 1).toString().padStart(2, "0");
        options += "<option value='" + fiscalYear + "'>" + fiscalYear + "</option>";
    }
    document.getElementById("reporting_fin_year").innerHTML = options;

    //pdf validation
    document.getElementById('incorporation_certificate').addEventListener('change', function () {
        const fileInput = this;
        const maxFileSizeInBytes = 5 * 1024 * 1024; // 5 MB
        const fileSizeMessage = document.getElementById('fileSizeMessage');
        let invalidFile = false;
        for (let i = 0; i < fileInput.files.length; i++) {
            const file = fileInput.files[i];
            if (file.size > maxFileSizeInBytes) {
                invalidFile = true;
                fileSizeMessage.textContent = 'File size exceeds the maximum allowed size of 5 MB.';
                fileInput.value = ''; // Clear the file input
                break;
            }
        }
        if (!invalidFile) {
            fileSizeMessage.textContent = ''; // Clear the message if the file is valid
        }
    });

    //11-paid up captital validation
    var pucInput = document.getElementById("puc");
    var pucValidationMessage = document.getElementById("pucValidationMessage");

    pucInput.addEventListener("input", function () {
        var inputValue = pucInput.value.trim();
        var uomRegex = /^(Rs\.?|Rs-?|Rs)?\s*\d{1,3}(,\d{3})*(\.\d+)? (Hundred|Thousand|Lakh|Crore|Million|Billion|Trillion|Hundreds|Thousands|Lakhs|Crores|Millions|Billions|Trillions)$/i;

        if (uomRegex.test(inputValue)) {
            pucValidationMessage.textContent = "Paid-up capital format is valid.";
            pucValidationMessage.style.color = "green";
        } else {
            pucValidationMessage.textContent = "Please enter valid paid-up capital with units (e.g., 'Rs.100 Hundred', 'Rs 10,000 Thousand', '50,242,234 Lakh', '10,023,234.5645 Crore', '2.5 Billions').";
            pucValidationMessage.style.color = "red";
        }
    });

    //12-point of contact(poc) validation
        //Name
        document.addEventListener('DOMContentLoaded', function () {
            const pocNameInput = document.getElementById("poc-name");
            const pocNameValidation = document.getElementById("poc-name-validation");

            pocNameInput.addEventListener("input", function () {
                const name = pocNameInput.value;
                const nameRegex = /^[A-Za-z0-9\-.,&: ]+$/;
                if (nameRegex.test(name)) {
                    pocNameValidation.textContent = "Valid name";
                    pocNameValidation.style.color = "green";
                } else {
                    pocNameValidation.textContent = "Invalid name";
                    pocNameValidation.style.color = "red";
                }
            });
        });
        //Telephone Number
        document.addEventListener('DOMContentLoaded', function () {
            const pocPhoneInput = document.getElementById("poc-phone");
            const pocPhoneValidation = document.getElementById("poc-phone-validation");

            pocPhoneInput.addEventListener("input", function () {
                const phoneNumber = pocPhoneInput.value;
                const phoneRegex = /^[0-9()+,-]+$/;

                if (phoneRegex.test(phoneNumber) && phoneNumber.length >= 8 && phoneNumber.length <= 30) {
                    pocPhoneValidation.textContent = "Valid phone number";
                    pocPhoneValidation.style.color = "green";
                } else {
                    pocPhoneValidation.textContent = "Invalid phone number (must be 8 to 30 digits including +,-,(,)) and can add multiple phone numbers seperated by comma(+9170928506,9812342143)";
                    pocPhoneValidation.style.color = "red";
                }
            });
        });
        //Email Address
        document.addEventListener('DOMContentLoaded', function () {
            const pocEmailInput = document.getElementById("poc-email");
            const pocEmailValidation = document.getElementById("poc-email-validation");
            pocEmailInput.addEventListener("input", function () {
                const email = pocEmailInput.value;
                const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                if (emailRegex.test(email)) {
                    pocEmailValidation.textContent = "Valid email!";
                    pocEmailValidation.style.color = "green";
                } else {
                    pocEmailValidation.textContent = "Invalid email ID";
                    pocEmailValidation.style.color = "red";
                }
            });
        });

/* ************************************************************************************************************************************ *
/*                                                                                                                                      */
/*                                                      III-OPERATIONS                                                                  */
/*                                                                                                                                      */
/* ************************************************************************************************************************************ */

    //16-Number of locations
    function calculate16(input) {
        var row = input.parentNode.parentNode; // Get the parent row
        var inputs = row.querySelectorAll('.nol-input');
        var totalInput = row.querySelector('.nol-total');

        var total = 0;
        for (var i = 0; i < inputs.length; i++) {
            total += parseInt(inputs[i].value) || 0;
        }
        totalInput.value = total;
    }

/* ************************************************************************************************************************************ *
/*                                                                                                                                      */
/*                                                      IV-Employees                                                                    */
/*                                                                                                                                      */
/* ************************************************************************************************************************************ */

    //18a-Details of Employees & Workers
    function calculatePercentages18a(tableId, rowIndex) {
        var table = document.getElementById(tableId);
        var row = table.rows[rowIndex];

        var totalA = parseFloat(row.cells[2].querySelector('input').value) || 0;
        var maleB = parseFloat(row.cells[3].querySelector('input').value) || 0;
        var femaleC = parseFloat(row.cells[5].querySelector('input').value) || 0;

        // Calculate percentages and update the respective cells
        row.cells[4].querySelector('input').value = calculatePercentage(maleB, totalA);
        row.cells[6].querySelector('input').value = calculatePercentage(femaleC, totalA);
    }

    // Helper function to calculate percentage
    function calculatePercentage(part, whole) {
        return (part / whole * 100).toFixed(2); // Adjust the number of decimal places as needed
    }

    //18b-Differently abled employees and workers
    function calculatePercentages18b(tableId, rowIndex) {
        var table = document.getElementById(tableId);
        var row = table.rows[rowIndex];

        var totalA = parseFloat(row.cells[2].querySelector('input').value) || 0;
        var maleB = parseFloat(row.cells[3].querySelector('input').value) || 0;
        var femaleC = parseFloat(row.cells[5].querySelector('input').value) || 0;

        // Calculate percentages and update the respective cells
        row.cells[4].querySelector('input').value = calculatePercentage(maleB, totalA);
        row.cells[6].querySelector('input').value = calculatePercentage(femaleC, totalA);
    }

    // Helper function to calculate percentage
    function calculatePercentage(part, whole) {
        return (part / whole * 100).toFixed(2); // Adjust the number of decimal places as needed
    }
    
    //19-Participation/Inclusion/Representation of Women
    function calculate19(input) {
        var row = input.closest('tr'); // Get the closest parent row
        var A = parseInt(row.cells[1].querySelector('input').value) || 0;
        var B = parseInt(row.cells[2].querySelector('input').value) || 0;
        var per = (B / A * 100).toFixed(2);

        row.cells[3].querySelector('input').value = per;
    }

    //20-Turnover rate for permanent employees & workers (For past 3 years)
    function calculate20a(input) {
        var row = input.closest('tr'); // Get the closest parent row
        var male = parseInt(row.cells[1].querySelector('input').value) || 0;
        var female = parseInt(row.cells[2].querySelector('input').value) || 0;
        var totalA = male + female;

        row.cells[3].querySelector('input').value = totalA;
    }
    function calculate20b(input) {
        var row = input.closest('tr'); // Get the closest parent row
        var male = parseInt(row.cells[4].querySelector('input').value) || 0;
        var female = parseInt(row.cells[5].querySelector('input').value) || 0;
        var totalB = male + female;

        row.cells[6].querySelector('input').value = totalB;
    }
    function calculate20c(input) {
        var row = input.closest('tr'); // Get the closest parent row
        var male = parseInt(row.cells[7].querySelector('input').value) || 0;
        var female = parseInt(row.cells[8].querySelector('input').value) || 0;
        var totalC = male + female;

        row.cells[9].querySelector('input').value = totalC;
    }

/* ************************************************************************************************************************************ *
/*                                                                                                                                      */
/*                           V. Holding, Subsidiary and Associate Companies (including joint ventures)                                  */
/*                                                                                                                                      */
/* ************************************************************************************************************************************ */

     //21a- Names of holding / subsidiary / associate companies / joint ventures
    document.addEventListener('DOMContentLoaded', function () {
        const holdingInput = document.getElementById('holding1');
        const holdingValidationMessage = document.getElementById('holdingValidationMessage');

        holdingInput.addEventListener('input', function () {
            let inputValue = holdingInput.value.trim();
            const pattern = /^(100(\.0{1,2})?|\d{0,2}(\.\d{0,2})?|0(\.\d{0,2})?)%?$/;

            if (/[^0-9.%]/.test(inputValue)) {
                // Disallow characters other than digits, '.', and '%'
                inputValue = inputValue.replace(/[^0-9.%]/g, '');
                holdingInput.value = inputValue;
            }

            if ((inputValue.match(/%/g) || []).length > 1) {
                // Remove additional '%' symbols if more than one is present
                inputValue = inputValue.replace(/%/g, '');
                holdingInput.value = inputValue;
            }

            if (pattern.test(inputValue)) {
                holdingValidationMessage.textContent = '';
            } else {
                holdingValidationMessage.textContent = 'e.g., 25%, 99.5%, 0%.';
                holdingValidationMessage.style.color = 'red';
            }
        });
    });



/* ************************************************************************************************************************************ *
/*                                                                                                                                      */
/*                                                      VI. CSR Details                                                                 */
/*                                                                                                                                      */
/* ************************************************************************************************************************************ */

    //turnover validation
    function validateTurnoverById(inputId, validationMessageId) {
        var input = document.getElementById(inputId);
        var validationMessage = document.getElementById(validationMessageId);

        input.addEventListener("input", function () {
            var inputValue = input.value.trim();
            var uomRegex = /^(Rs\.?|Rs-?|Rs)?\s*\d{1,3}(,\d{3})*(\.\d+)? (Hundred|Thousand|Lakh|Crore|Million|Billion|Trillion|Hundreds|Thousands|Lakhs|Crores|Millions|Billions|Trillions)$/i;

            if (uomRegex.test(inputValue)) {
                validationMessage.textContent = "Format is valid.";
                validationMessage.style.color = "green";
            } else {
                validationMessage.textContent = "Please enter valid value with units (e.g., 'Rs.100 Hundred', 'Rs 10,000 Thousand', '50,242,234 Lakh', '10,023,234.5645 Crore', '2.5 Billions').";
                validationMessage.style.color = "red";
            }
        });
    }

    // Example usage:
    validateTurnoverById("csr_turnover", "csr_turnoverValidationMessage");
    validateTurnoverById("csr_networth", "csr_networthValidationMessage");

/* ************************************************************************************************************************************ */
/*                                                                                                                                      */
/*                                                           Table row addition-START                                                   */
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