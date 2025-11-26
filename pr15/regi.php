<?php

 
$conn = new mysqli("localhost", "root", "", "test");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

 
$fullname   = $_POST['fullname'];
$email      = $_POST['email'];
$password   = $_POST['password'];
$cpassword  = $_POST['cpassword'];

 
if ($password !== $cpassword) {
    die("Passwords do not match!");
}
 
$sql = "INSERT INTO users (fullname, email, password)
        VALUES ('$fullname', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

<!-- DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100)
); -->
