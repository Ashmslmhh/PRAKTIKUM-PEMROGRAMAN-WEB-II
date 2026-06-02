<?php 
require_once("Model.php");
if(isset($_GET['hapus'])){ hapusBuku($_GET['hapus']); header("Location: Buku.php"); exit; }
$data = ambilSemuaBuku();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Koleksi Buku - Perpustakaan</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<div class="container">
    <div class="flex-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2>Koleksi Buku</h2>
        <div>
            <a href="index.php" class="btn" style="background:#94a3b8; color:white;">Home</a>
            <a href="FormBuku.php" class="btn btn-primary">+ Tambah Buku</a>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($data as $b): ?>
            <tr>
                <td><?= sprintf('%02d', $no++) ?></td>
                <td><?= htmlspecialchars($b['judul_buku']) ?></td>
                <td><?= htmlspecialchars($b['penulis']) ?></td>
                <td><?= htmlspecialchars($b['penerbit']) ?></td>
                <td><?= $b['tahun_terbit'] ?></td>
                <td>
                    <a href="FormBuku.php?id=<?= $b['id_buku'] ?>" class="btn btn-edit">Edit</a>
                    <a href="Buku.php?hapus=<?= $b['id_buku'] ?>" class="btn btn-delete" onclick="return confirm('Hapus buku ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php if (empty($data)): ?>
                <tr><td colspan="6" style="text-align: center; color: #64748b;">Belum ada data buku.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>