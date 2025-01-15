<?php
// Include database configuration (if you have a separate config file, e.g., db_config.php, include it here)
require 'createlogin.php';
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from POST request
    $email = $_POST['email'];       // Not saved in the database, only used if needed
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate inputs (username and password should not be empty)
    if (!empty($username) && !empty($password)) {

        // Prepare and execute the insert query without hashing the password
        $stmt = $conn->prepare("INSERT INTO login (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);

        // Execute the query and provide feedback
        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: Could not register. Username might already exist.";
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="left-links">
            <a href="about.html">About</a>
            <a href="rules.html">Rules</a>
        </div>
        <div class="right-links">
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </div>
    </header>
    <div class="form-container">
        <h2>Register</h2>
        <form action="register.php" method="POST">
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
