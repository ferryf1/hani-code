<?php
// 1. koneksi
require "koneksidb.php";

// 2. query SELECT (READ)
$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $sql);

// 3. tampilkan
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['nim'] . " - " . $row['nama'] . "<br>";
}

echo "<a href='form.php'>Tambah Data</a>";
?>