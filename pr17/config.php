<?php
$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "login_demo";
 
$conn = new mysqli($host, $db_user, $db_pass, $db_name);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!-- CREATE DATABASE IF NOT EXISTS login_demo;
USE login_demo;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Insert test user (password is 'password123')
INSERT INTO users (username, password)
VALUES ('admin', '$2y$10$yHbKwe0xDlCTP6YPxfwIPOP7k5.pNerYFOOv5uHCnTCZxeuAxCN/u'); -->
