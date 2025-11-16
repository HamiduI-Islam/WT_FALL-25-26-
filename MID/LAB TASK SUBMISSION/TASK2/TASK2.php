<!DOCTYPE html>
<html>
<head>

 <link rel="stylesheet" href="style.css">
  <title>Participant Registration </title>
  <style>
    
  </style>
</head>
<body>



  <form onsubmit="return handleSubmit()">
     <h2>Participant Registration</h2>
    <label>Full Name:</label>
    <input type="text" id="name">

    <label>Email:</label>
    <input type="text" id="email">

    <label>Phone Number:</label>
    <input type="text" id="number">

    <label>Password:</label>
    <input type="password" id="pass">

    <label>Confirm Password:</label>
    <input type="password" id="confirmPass">

    <button type="submit">Register</button>

    
  </form>

  <div id="error"></div>
  <div id="output"></div>

  <script>
    function handleSubmit() {
      var name = document.getElementById("name").value.trim();
      var email = document.getElementById("email").value.trim();
      var number = document.getElementById("number").value.trim();
      var pass = document.getElementById("pass").value.trim();
      var confirmPass = document.getElementById("confirmPass").value.trim();

      var errorDiv = document.getElementById("error");
      var outputDiv = document.getElementById("output");

      errorDiv.innerHTML = "";
      outputDiv.innerHTML = "";

      // Basic validation
      if (name === "" || email === "" || number === "" || pass === "" || confirmPass === "") {
        alert("Please fill in all fields.");
        return false;
      }

      if (!email.includes("@")) {
          alert("Please enter a valid email address.");
        return false;
      }

      // Phone validation
      if (isNaN(number)) {
        alert("Phone number must be numeric.");
        return false;
      }

      // Password match check
      if (pass !== confirmPass) {
         alert("Passwords do not match.");
        return false;
      }

      // Success output
      outputDiv.innerHTML = `
        <strong>Registration Successful!</strong><br><br>
        Name: ${name}<br>
        Email: ${email}<br>
        Phone Number: ${number}<br>
      `;

      return false; // Prevent form reload
    }
  </script>

 <form onsubmit="return handleSubmit()">
     <h2>Activity Selection </h2>
    <label>Activity Name:</label>
    <input type="text" id="name1">

    <button  type="submit">Add Activity</button>
    
  </form>
 
</body>
</html>
