<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pemweb";

// Create connection --> dengan 4 parameter
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully<br>";
?>