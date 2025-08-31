<?php
    include "koneksi_db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="biodata_db.php">
        <label>Masukan NIM </label><br/>
        <input type="text" name="nim" required><br/>
        <label>Massukan Nama Lengkap</label><br/>
        <input type="text" name="nama_lengkap" required><br/>
        <label>Masukan Jenis Kelamin</label><br/>
        <input type="Radio" value="L" name="jenis_kelamin">Laki-Laki<br/>
        <input type="Radio" value="P" name="jenis_kelamin">Perempuan<br/>
        <label>Masukan Tanggal Lahir</label><br/>
        <input type="date" name="tanggal_lahir" required><br/>
        <input type="submit" value="Submit">
    </form>
</body>
</html>