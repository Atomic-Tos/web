<?php

 
$conn = new mysqli("localhost", "root", "", "test");

 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 
$email = $_POST['email'];
$new_password = $_POST['new_password'];

 
$sql = "UPDATE users SET password='$new_password' WHERE email='$email'";

 
if ($conn->query($sql) === TRUE) {
    echo "Password updated successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>
