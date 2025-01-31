<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        /* Style the form container */
form {
  width: 300px;
  margin: 0 auto;
  padding: 50px;
  border: 1px solid #ccc;
  background-color: #f9f9f9;
  border-radius: 5px;
}

/* Style form labels */
label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

/* Style form input fields */
input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  font-size: 16px;
}

/* Style the submit button */
input[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  font-size: 18px;
  cursor: pointer;
}

/* Hover effect for the submit button */
input[type="submit"]:hover {
  background-color: #0056b3;
}

/* Center the form horizontally and vertically */
form {
  width: 300px;
  margin: 0 auto;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 20px;
  border: 1px solid #ccc;
  background-color: #f9f9f9;
  border-radius: 5px;
  /* Increase the width of the form container */
  width: 400px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  background-color: #f9f9f9;
  border-radius: 5px;
}
</style>
</head>
<body>

<?php
// session_start(); // Start the session

// $conn = new mysqli('localhost', 'root', '', 'newproject');
// if ($conn->connect_error) {
//     die('Connection is failed please check the database' . $conn->connect_error);
// }

// $login_error = ""; // Initialize the error message

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve user input from the form
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     // Query the "users" table to check if the entered username exists
//     $sql = "SELECT * FROM users WHERE uname = '$username' and id = 5 ";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         // If the username exists, fetch the associated password
//         $row = $result->fetch_assoc();
//         $stored_password = $row["password"];

//         // Verify the entered password against the stored password
//         if ($password === $stored_password) {
//             // Password is correct; set the uname session variable
//             $_SESSION["uname"] = $username;
//             header("Location: adminindex.php");
//             exit;
//         } else {
//             // Password is incorrect
//             $login_error = "<script>alert('Invalid password. Please try again.');</script>";
//         }
//     } else {
//         // Username doesn't exist in the database
//         $login_error = "<script>alert('Invalid username. Please try again.');</script>";
//     }
// }

// Check if the uname session variable is set; if not, prevent access to adminindex.php

?>


<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <input type="submit" value="Login">
    </div>
</form>
<p><?php echo $login_error; ?></p>

</body>
</html>
