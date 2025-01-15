<?php
// Database connection parameters
$servername = "localhost"; // Adjust if your MySQL server is on a different host
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "overdriveakhir"; // Database name where the login table is stored

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
