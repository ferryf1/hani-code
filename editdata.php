<?php
require "koneksidb.php";
$sql = "SELECT * FROM mahasiswa WHERE nim = '$_GET[nim]'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data</title>
</head>
<body>
    <!-- <form action="<?= $_SERVER['PHP_SELF'];?>" method="post"> -->
    <form action="update.php" method="post">
        <label for="nim">NIM: </label><br>
        <input type="text" name="nim" value="<?=$row['nim'];?>" readonly><br>
        <label for="nama">NAMA: </label><br>
        <input type="text" name="nama" value="<?=$row['nama'];?>"><br><br>
        <input type="submit" value="Perbarui">
    </form>

    <?php
    // tampilkan
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $nim = $_POST['nim'];
    //     $nama = $_POST['nama'];

    //     echo $nim."<br>";
    //     echo $nama."<br>";
    // }
    ?>
</body>
</html>

