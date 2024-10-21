<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="<?= $_SERVER['PHP_SELF'];?>" method="post"> -->
    <form action="aksi.php" method="post">
        <label for="nim">NIM: </label><br>
        <input type="text" name="nim" required><br>
        <label for="nama">NAMA: </label><br>
        <input type="text" name="nama" required><br><br>
        <input type="submit" value="Kirim">
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

