<?php
$servername = "localhost";
$username = "admin";
$password = "Roboto360admin";
$database = "Roboto360";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>