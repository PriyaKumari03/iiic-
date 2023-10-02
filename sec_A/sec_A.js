//cin validation
const cinInput = document.getElementById("cin");
const cinValidationMessage = document.getElementById("cinValidationMessage");
// Add an input event listener to the CIN input field
cinInput.addEventListener("input", function () {
  // Get the input value and convert it to uppercase
  let cinValue = this.value.toUpperCase();
  // Remove any non-alphanumeric characters except the first character
  cinValue = cinValue.replace(/[^A-Z0-9]/g, '');
  // Check if the CIN is a valid format (e.g., U74140DL2014PTC272628)
  const cinRegex = /^[A-Z][0-9]{5}[A-Z]{2}[0-9]{4}[A-Z]{3}[0-9]{6}$/;
  // Check if the input value has a length of exactly 21 characters
  const isValidLength = cinValue.length === 21;
  // Update the input value with the formatted CIN
  this.value = cinValue;
  // Check if the input value matches the regex pattern and has the correct length
  if (cinRegex.test(cinValue) && isValidLength) {
    cinValidationMessage.textContent = "";
    cinValidationMessage.style.color = "green";
  } else {
    cinValidationMessage.textContent = "Invalid CIN format. Please enter a valid 21-character CIN(U74140DL2014PTC272628)";
    cinValidationMessage.style.color = "red";
  }
});

//email validation
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

//JS Code to check the size of the pdf
// Function to check the file size of the pdf before submitting the form
document.getElementById('file').addEventListener('change', function () {
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

//POC fields validation
//const pocNameInput = document.getElementById("poc-name");
const pocPhoneInput = document.getElementById("poc-phone");
const pocEmailInput = document.getElementById("poc-email");

//poc-name


//poc-phone number
pocPhoneInput.addEventListener("input", function () {
    // Remove non-digit characters from the phone number
    this.value = this.value.replace(/[^0-9]/g, '');
    const phoneRegex = /^[0-9]+$/;
    const phoneValidation = document.getElementById("poc-phone-validation");
    if (phoneRegex.test(this.value)) {
      phoneValidation.textContent = "";
    } else {
      phoneValidation.textContent = "Invalid phone number format. Please enter digits only.";
    }
});
//poc-email
const pocValidationMessage = document.getElementById("poc-email-validation"); // Unique ID
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

//stock