<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];

// echo $nim."<br>";
// echo $nama."<br>";

require "koneksidb.php";

$sql = "UPDATE mahasiswa SET nama = '$nama' 
                         WHERE nim = '$nim'";

if (mysqli_query($conn, $sql)) {
      echo "Data mahasiswa baru berhasil diperbarui<br>";
    //   echo "<script>alert('Data mahasiswa baru berhasil disimpan');</script>";
        // echo "<a href='viewdata.php'>Lihat Data</a>";
      header('Location: viewdata.php');
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
mysqli_close($conn);
?>