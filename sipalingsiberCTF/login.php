<?php
require 'function.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
$username = $_POST['username'];
$password = $_POST['password'];

if($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}
$query = "SELECT *FROM login WHERE username='$username' AND password='$password'";

$result = $conn->query($query);
if($result->num_rows == 1){
    header("location: index.php");
    exit();
}else{
exit();
}
$conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<style>
        .btn {
            padding: 10px 20px;
            font-size: 1.1rem;
            font-weight: bold;
            color: #00000;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 6px rgba(0, 123, 255, 0.4);

        }
        </style>
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
    <form action ="login.php" method="POST">
        <h2>Login</h2>
        <form>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username/Email" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <input type="submit" value="login" class="btn btn-primary">
            
        </form>
    </div>
</body>
</html>