// function saveSignUpInfo() {
  // var username = document.getElementById("un").value;
  // var fullname = document.getElementById("fn").value;
  // var email = document.getElementById("email").value;
  // var password = document.getElementById("pass").value;
  // var dob = document.getElementById("DOB").value;

//   var radiovalue = document.getElementsByName("sex");
//   for (var i = 0; i < radiovalue.length; i++) {
//     if (radiovalue[i].checked) {
//       gender = radiovalue[i].value;
//       break;
//     }
//   }
//   alert("Selected value: " + gender);


//   // Create an object with the form data
//   var formData = {
//     username: username,
//     fullname: fullname,
//     email: email,
//     password: password,
//     dob: dob,
//     gender: gender,
//   };

//   // Convert the object to a JSON string
//   var jsonData = JSON.stringify(formData, null, 2);

//   // Save the JSON data to a file or send it to a server
//   // In a real-world scenario, you'd typically send this data to a server using AJAX or fetch()

//   // For demonstration, let's use a simple approach to save to a JSON file using a data URI
//   var blob = new Blob([jsonData], { type: "application/json" });
//   var a = document.createElement("a");
//   a.href = window.URL.createObjectURL(blob);
//   a.download = "signup_data.json";
//   a.click();
// }



// function saveSignUpInfo() {
//   var username = document.getElementById("un").value;
//   var fullname = document.getElementById("fn").value;
//   var email = document.getElementById("email").value;
//   var password = document.getElementById("pass").value;
//   var dob = document.getElementById("DOB").value;

//   var radiovalue = document.getElementsByName("sex");
//   for (var i = 0; i < radiovalue.length; i++) {
//     if (radiovalue[i].checked) {
//       gender = radiovalue[i].value;
//       break;
//     }
//   }

//   var formData = {
//     username: username,
//     fullname: fullname,
//     email: email,
//     password: password,
//     dob: dob,
//     gender: gender,
//   };

//   // Send the form data to the server using AJAX
//   fetch("/signup", {
//     method: "POST",
//     headers: {
//       "Content-Type": "application/json",
//     },
//     body: JSON.stringify(formData),
//   })
//     .then((response) => response.text())
//     .then((message) => {
//       alert(message);
//     })
//     .catch((error) => console.error("Error:", error));
// }




// app.js
// function submitForm() {
//     // Get form data
//     // var username = document.getElementById('username').value;
//     var email = document.getElementById('email').value;
//     // var password = document.getElementById('password').value;

//     // Create an object with the form data
//     var userData = {
//         // username: username,
//         email: email,
//         // password: password
//     };

//     // Read existing data from the JSON file (if any)
//     var existingData = [];
//     try {
//         existingData = JSON.parse(localStorage.getItem('userData')) || [];
//     } catch (error) {
//         console.error('Error parsing existing data:', error);
//     }

//     // Append new data to the existing data
//     existingData.push(userData);

//     // Save the updated data back to the JSON file
//     try {
//         localStorage.setItem('userData', JSON.stringify(existingData));
//         alert('Signup successful!');
//     } catch (error) {
//         console.error('Error saving data:', error);
//         alert('Error during signup. Please try again.');
//     }
// }



// function handleFormSubmit(event) {
//   event.preventDefault();

//   const data = new FormData(event.target);

//   const formJSON = Object.fromEntries(data.entries());

//   // for multi-selects, we need special handling
//   formJSON.snacks = data.getAll("snacks");

//   const results = document.querySelector(".results pre");
//   results.innerText = JSON.stringify(formJSON, null, 2);
// }

// const form = document.querySelector(".contact-form");
// form.addEventListener("submit", handleFormSubmit);







// const fs = require("fs");

// // Function to sign up a user and store information in a JSON file
// function signUp(username, email, password) {
//   // Load existing user data from the JSON file, if any
//   let userData = [];
//   try {
//     const data = fs.readFileSync("users.json", "utf8");
//     userData = JSON.parse(data);
//   } catch (err) {
//     // If the file doesn't exist or is empty, ignore the error
//   }

//   // Add the new user to the data
//   userData.push({
//     username,
//     email,
//     password,
//   });

//   // Save the updated user data back to the JSON file
//   fs.writeFileSync("users.json", JSON.stringify(userData, null, 2), "utf8");

//   console.log("User signed up successfully!");
// }

// // Example usage
// signUp("john_doe", "john@example.com", "securePassword");


function validateForm() {
  var uname = document.getElementById("un").value;
  var password = document.getElementById("pass").value;
  var confPass = document.getElementById("pas").value; // Added confPass
  var fullName = document.getElementById("fn").value;
  var email = document.getElementById("email").value;
  var privacyPolicy = document.getElementById("check");
  var bool = false;
  var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  var currentDate = new Date();
  var inputDate = new Date(document.getElementById("DOB").value);
  // Check if the date is a valid date
  // if (isNaN(inputDate.getTime())) {
  //   bool = false;
  //   alert("Date inputted is not valid");
  // }

  // if (uname === "") {
  //   alert("Please enter a username");
  //   bool = false;
  // }

  // if (email === "") {
  //   alert("Please enter a valid email address");
  //   bool = false;
  // }

  // if (dob === "") {
  //   alert("Please enter your date of birth");
  //   bool = false;
  // }

  // if (fullName === "") {
  //   alert("Please enter your full name");
  //   bool = false;
  // }

  // if (password === "") {
  //   alert("Please enter a password");
  //   bool = false;
  // }

  // if (!privacyPolicy.checked) {
  //   alert("Please agree to the privacy policy");
  //   bool = false;
  // }

  // else{
  //   if (password !== confPass) {
  //   alert("Password and Confirm password do not match");
  //   bool = false;
  // }

  // // Check if the input date is in the future
  //   if (inputDate > currentDate) {
  //     bool = false;
  //     alert("Date inputted is in the future");
  //   }
  // }

  // if (bool) {
  //   document.getElementById("signup-form").submit();
  // }
  if((uname=="") || (fullName=="") || (password=="") || (confPass=="") || (inputDate=="") || (email=="") || (!privacyPolicy.checked)){
    bool=true;
    alert("Please input all fields"); 
   }
  else{
    if(password != confPass){
      bool=true;
      alert("Password and Confirm password do not match");
    }
    if(inputDate>currentDate){
      bool=true;
      alert("Date inputted is in the future");
    }
    if(!emailRegex.test(email)){
      bool = true;
      alert("Email address is not valid");
    }
  }
  if(!bool){
    document.getElementById("signup-form").submit();
  }
}






function ClearForm() {
  document.getElementById("pass").value = "";
  document.getElementById("pas").value = "";
  document.getElementById("un").value = "";
  document.getElementById("fn").value = "";
  document.getElementById("email").value = "";
  document.getElementById("DOB").value = "";
  document.getElementById("check").checked = false;
  document.getElementById("male").checked = true;
}

function SignUp() {
  var mForm = document.querySelector("form[name='signup-form']");
  pass = mForm.getElementById("pass").value;
  confirm_pass = mForm.getElementById("pas").value;

  if (pass != confPass || pass == "") alert("Passwords must be equal.");
  else mForm.submit();
}

document.addEventListener("DOMContentLoaded", function () {
  var container1 = document.getElementById("Div");
  var hideSpan = document.getElementById("button");
  var showSpan = document.getElementById("visible");
  var container = document.getElementById("container");
  var login = document.getElementById("login");

  // Add a click event listener to the span
  hideSpan.addEventListener("click", function () {
    // Apply the transition to move container 1 downwards and then hide it
    container1.style.transform = "translateY(100%)";
    setTimeout(function () {
      container1.style.display = "none";
      container1.style.transform = "none";
    }, 1000);
  });

  showSpan.addEventListener("click", function () {
    container1.style.display = "block";
    container1.style.transform = "translateY(100%)";
    setTimeout(function () {
      container1.style.transform = "translateY(0)";
    }, 30);
  });

  // let isContainersVisible = true;

  // login.addEventListener("click", function () {
  //   if (isContainersVisible) {
  //     // Slide the containers down
  //     container.style.transform = "translateY(100%)";
  //     container1.style.transform = "translateY(100%)";

  //     // login.textContent = "Sign Up";
  //   } else {
  //     // Slide the containers back up
  //     container.style.transform = "translateY(0)";
  //     container1.style.transform = "translateY(0)";

  //     login.textContent = "Sign Up";
  //   }

  //   isContainersVisible = !isContainersVisible;

  //   if (login.innerText === "LOGIN") {
  //     login.innerText = "Sign Up";
  //   } else {
  //     login.innerText = "LOGIN";
  //   }
  // });
});
