<?php
// 1.a tangkap data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];

// 1.b tampilkan --> buat ngecek (optional)
echo $nim."<br>";
echo $nama."<br>";

// 3. koneksi db
include "koneksidb.php";

// 4. lakukan query INSERT (CREATE)
$sql = "INSERT INTO mahasiswa (nim, nama)
VALUES ('$nim', '$nama')";

if (mysqli_query($conn, $sql)) {
//   echo "Data mahasiswa baru berhasil disimpan<br>";
  echo "<script>alert('Data mahasiswa baru berhasil disimpan');</script>";
  //   echo "<a href='viewdata.php'>Lihat Data</a>";
  header('Location: viewdata.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// 5. close koneksi
mysqli_close($conn);
?>