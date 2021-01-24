<?php
$servername = "localhost";
$username = "dziya98";
$password = "asunaizumi98";
$base ="dziya98";
    define('USER', 'dziya98');
    define('PASSWORD', 'asunaizumi98');
    define('HOST', 'localhost');
    define('DATABASE', 'dziya98');
// Create connection
$conn = mysqli_connect($servername, $username, $password,$base);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  
}
$connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
// echo "Connected successfully";
?> 