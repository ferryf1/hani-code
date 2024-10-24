<?php
// 1. koneksi
require "koneksidb.php";

// 2. query SELECT (READ)
$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $sql);

// 3. tampilkan
// while ($row = mysqli_fetch_assoc($result)) {
//     echo $row['nim'] . " - " . $row['nama'] . "<br>";
// }

echo "<a href='form.php'>Tambah Data</a>

<table border='1' border-collapse='collapse'>
    <tr>
        <th>NIM</th>
        <th>NAMA</th>
        <th>AKSI</th>
    </tr>";

    while ($row = mysqli_fetch_assoc($result)) { 
    echo "
    <tr>
        <td>" . $row['nim'] . "</td>
        <td>" . $row['nama'] . "</td>
        <td><a href='editdata.php?nim=$row[nim]'>Edit</a> | <a href='hapusdata.php?nim=$row[nim]' onClick = \"return confirm('Anda yakin?')\"'>Delete</a></td>
    </tr>";
    }
    ?>
</table>