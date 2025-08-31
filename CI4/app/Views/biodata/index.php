<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2><?= $title ?></h2>
        
        <div class="mb-3">
            <a href="<?= base_url('biodata/create') ?>" class="btn btn-primary">Tambah Data</a>
            <a href="<?= base_url('biodata/search') ?>" class="btn btn-info">Pencarian</a>
        </div>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Umur</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($biodata as $data): ?>
                <?php 
                    // Hitung umur
                    $lahir = new DateTime($data['tanggal_lahir']);
                    $sekarang = new DateTime();
                    $umur = $sekarang->diff($lahir)->y;
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['nim'] ?></td>
                    <td><?= $data['nama_lengkap'] ?></td>
                    <td><?= $data['jenis_kelamin'] ?></td>
                    <td><?= date('d-m-Y', strtotime($data['tanggal_lahir'])) ?></td>
                    <td><?= $umur ?> tahun</td>
                    <td>
                        <a href="<?= base_url('biodata/detail/' . $data['nim']) ?>" class="btn btn-info btn-sm">Detail</a>
                        <a href="<?= base_url('biodata/edit/' . $data['nim']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= base_url('biodata/delete/' . $data['nim']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <p class="text-muted">Total: <?= count($biodata) ?> mahasiswa</p>
    </div>
</body>
</html>