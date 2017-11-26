<?php 
$servername = "us-cdbr-iron-east-05.cleardb.net";
$username = "bd19d2f5b70a09";
$password = "72dea0e2";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>