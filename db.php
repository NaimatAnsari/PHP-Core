<?php 

$host = "localhost"; // Database host
$user = "root";      // Default user for XAMPP
$password = "";      // Default password for XAMPP
$dbname = "user_data"; // Database name

// Create a database connection

$conn = new mysqli($host , $user , $password , $dbname);

// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 



?>