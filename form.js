function validateForm() {
    var cin = document.getElementById("cin").value;
    var name = document.getElementById("name").value;
    var office_add = document.getElementById("office_add").value;
    var corp_add = document.getElementById("corp_add").value;
    var email = document.getElementById("email").value;
    var contact = document.getElementById("contact").value;
    var website = document.getElementById("website").value;
    var year = document.getElementById("year").value;

    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var websitePattern = /^(https?:\/\/)?(www\.)?[a-zA-Z0-9-]+(\.[a-zA-Z]{2,})(\/[^\s]*)?$/;

    // Perform validation
    if (cin === "") {
      alert("Please enter CIN of Listed Entity");
      return false;
    }

    if (isNaN(cin)) {
        alert("Invalid input!");}

    if (name === "") {
      alert("Please enter name of Listed Entity");
      return false;
    }

    if (office_add === "") {
      alert("Please enter registered address");
      return false;
    }

    if (corp_add === "") {
      alert("Please enter Corporate address");
      return false;
    }

    if (emailPattern.test(email)) {
        alert("Valid email address");
      } else {
        alert("Invalid email address");
      }

    if (contact === "") {
      alert("Please enter your contact number");
      return false;
    }

    if (isNaN(contact)) {
        alert("Invalid input!");}


    if (website === "") {
      alert("Please enter your website link");
      return false;
    }

    if (websitePattern.test(website)) {
        alert("Valid website link");
      } else {
        alert("Invalid website link");
      }

    if (year === "") {
      alert("Please select Financial year for which reporting is being done");
      return false;
    }

    return true;
  }