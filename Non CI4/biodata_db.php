<?php
    include "koneksi_db.php";

    $nim = $_POST['nim'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = date($_POST['tanggal_lahir']);

    $sql = "INSERT INTO biodata(nim, nama_lengkap, jenis_kelamin, tanggal_lahir) VALUES ('$nim', '$nama_lengkap', '$jenis_kelamin', '$tanggal_lahir')";

    $result = mysqli_query($database, $sql);

    echo 'nama anda adalah '. $nama_lengkap;
    echo '<br>';
    echo 'Nim anda adalah '. $nim;
    echo '<br>';
    echo 'Jenis kelamin anda adalah '. $jenis_kelamin;
    echo '<br>';
    echo 'Tanggal tanggal lahir anda adalah '. $tanggal_lahir;




?>

