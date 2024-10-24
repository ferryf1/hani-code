<?php
// menghapus record pada tabel 'products' di basisdata 'praktikum'

// cek koneksi ke database
require "koneksidb.php";
	
// query untuk menghapus record
$sql = "DELETE FROM mahasiswa WHERE nim = '$_GET[nim]'";

	if ($conn->query($sql) === TRUE) {
		// echo "Data berhasil dihapus <br><br>";
        echo "<a href='viewdata.php'>Lihat Data</a>";
		// header('Location: viewdata.php');
	} else {
		echo "Gagal menghapus data: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>