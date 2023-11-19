// const express = require("express");
// const path = require("path");
// const fs = require("fs");
// const app = express();
// const port = 3000;

// // Serve static files (CSS, etc.)
// // app.use(express.static(path.join(__dirname, "pages", "public", "signUp.css")));

// // Serve the HTML file for the root URL
// // app.get("/", (req, res) => {
// //   const absolutePath = path.join(__dirname, "pages", "signup.html");
// //   res.sendFile(absolutePath);
// // });

// // Handle form submissions
// app.post("/signup", express.json(), (req, res) => {
//   const formData = req.body;

//   // Check if the file exists
//   if (!fs.existsSync("signup_data.json")) {
//     // If the file doesn't exist, create it with an empty array
//     fs.writeFileSync("signup_data.json", "[]");
//   }

//   // Read existing data from the file
//   let existingData = JSON.parse(fs.readFileSync("signup_data.json"));

//   // Add new form data to the existing data
//   existingData.push(formData);

//   // Write the updated data back to the file
//   fs.writeFileSync("signup_data.json", JSON.stringify(existingData, null, 2));

//   res.send("Sign-up successful!");
// });

// app.listen(port, () => {
//   console.log(`Server is running at http://localhost:${port}`);
// });











// const express = require("express");
// const bodyParser = require("body-parser");
// const fs = require("fs");

// const app = express();
// const port = 3000;

// // Middleware to parse JSON and URL-encoded data
// app.use(bodyParser.json());
// app.use(bodyParser.urlencoded({ extended: true }));

// // Serve HTML form
// app.get("/", (req, res) => {
//   res.sendFile(__dirname + "/signup.html");
// });

// // Handle form submissions
// app.post("/signup", (req, res) => {
//   const userData = req.body;

//   // Load existing data from JSON file
//   let jsonData = [];
//   try {
//     const data = fs.readFileSync("data.json");
//     jsonData = JSON.parse(data);
//   } catch (err) {
//     console.error("Error reading JSON file:", err);
//   }

//   // Add new user data
//   jsonData.push(userData);

//   // Write updated data back to the JSON file
//   fs.writeFile("data.json", JSON.stringify(jsonData, null, 2), (err) => {
//     if (err) {
//       console.error("Error writing to JSON file:", err);
//       res.status(500).send("Internal Server Error");
//     } else {
//       console.log("Data written to data.json");
//       res.send("Signup successful!");
//     }
//   });
// });

// // Start the server
// app.listen(port, () => {
//   console.log(`Server is running at http://localhost:${port}`);
// });



function saveFormData() {
  // Get form values
  var username = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  // Create a JavaScript object with the form data
  var formData = {
    username: username,
    email: email,
    password: password,
  };

  // Convert the JavaScript object to a JSON string
  var jsonData = JSON.stringify(formData);

  // Use AJAX or a server-side language (Node.js in this example) to save the JSON data to a file
  // This example uses Node.js for server-side handling

  // Node.js server-side code (save this in a file, e.g., server.js)
  // Install the 'fs' module using: npm install fs
  const fs = require("fs");
  const http = require("http");
  const url = require("url");

  http
    .createServer(function (req, res) {
      var q = url.parse(req.url, true);
      var filename = "." + q.pathname;

      if (filename === "./saveFormData") {
        // Save the JSON data to a file (e.g., data.json)
        fs.writeFile("data.json", jsonData, "utf8", function (err) {
          if (err) throw err;
          console.log("Data saved!");
        });

        res.writeHead(200, { "Content-Type": "text/html" });
        res.end("Data saved successfully!");
      } else {
        res.writeHead(404, { "Content-Type": "text/html" });
        return res.end("404 Not Found");
      }
    })
    .listen(8080);

  // End of Node.js server-side code
}