<?php
// list_biodata.php
include "koneksi_db.php";
$result = mysqli_query($database, "SELECT * FROM biodata");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <a href="biodata.php">Tambah Mahasiswa</a>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['nim']; ?></td>
            <td><?php echo $row['nama_lengkap']; ?></td>
            <td><?php echo $row['jenis_kelamin']; ?></td>
            <td><?php echo $row['tanggal_lahir']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>