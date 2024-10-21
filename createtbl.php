<?php
// Create connection
include "koneksidb.php";

// 1.c buat tabel: mahasiswa
// sql to create table
$sql = "CREATE TABLE mahasiswa (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(10) NOT NULL UNIQUE,
    nama VARCHAR(30) NOT NULL)";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table mahasiswa created successfully";
    } else {
      echo "Error creating table mahasiswa: " . mysqli_error($conn);
    }
?>