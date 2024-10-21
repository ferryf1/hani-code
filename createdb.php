<?php
// 1.a koneksi ke db
// Create connection --> butuh 3 parameter
$conn = mysqli_connect('localhost', 'root', '');

// 1.b buat database: pemweb
$sql = "CREATE DATABASE pemweb";
if (mysqli_query($conn, $sql)) {
  echo "Database pemweb created successfully";
} else {
  echo "Error creating database pemweb: " . mysqli_error($conn);
}
?>