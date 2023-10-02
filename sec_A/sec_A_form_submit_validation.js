//code to check whether cin is unique or not
document.getElementById("primary").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the default form submission
    var formData = new FormData(this); // Serialize the entire form data
     // Log the form data to the console
     for (var pair of formData.entries()) {
        console.log(pair[0] + ": " + pair[1]);
    }
    // Make an AJAX POST request to the PHP script
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
                var response = parseInt(this.responseText);
                if (response === 1) {
                    alert("Section A: Form submitted successfully");
                    window.location.href = "../sec_B/sec_B.php";
                } else {
                    alert("Section A: CIN already exist.");
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