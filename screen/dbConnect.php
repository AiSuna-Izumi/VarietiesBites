<?php
$servername = "localhost";
$username = "dziya98";
$password = "asunaizumi98";
$base ="dziya98";
  
// Create connection
$conn = mysqli_connect($servername, $username, $password,$base);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  
}

// echo "Connected successfully";
?> 