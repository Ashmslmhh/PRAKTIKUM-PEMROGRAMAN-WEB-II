<?php 
require_once("Model.php");
if(isset($_GET['hapus'])){ hapusPinjam($_GET['hapus']); header("Location: Peminjaman.php"); exit; }
$data = ambilSemuaPeminjaman();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Peminjaman - Perpustakaan</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<div class="container">
    <div class="flex-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2>Data Peminjaman</h2>
        <div>
            <a href="index.php" class="btn" style="background:#94a3b8; color:white;">Home</a>
            <a href="FormPeminjaman.php" class="btn btn-primary">+ Tambah Peminjaman</a>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Member</th>
                <th>ID Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($data as $p): ?>
            <tr>
                <td><?= sprintf('%02d', $no++) ?></td>
                <td><?= sprintf('%02d', $p['id_member']) ?></td>
                <td><?= sprintf('%02d', $p['id_buku']) ?></td>
                <td><?= date('d/m/Y', strtotime($p['tgl_pinjam'])) ?></td>
                <td><?= date('d/m/Y', strtotime($p['tgl_kembali'])) ?></td>
                <td>
                    <a href="FormPeminjaman.php?id=<?= $p['id_peminjaman'] ?>" class="btn btn-edit">Edit</a>
                    <a href="Peminjaman.php?hapus=<?= $p['id_peminjaman'] ?>" class="btn btn-delete" onclick="return confirm('Hapus transaksi?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php if (empty($data)): ?>
                <tr><td colspan="6" style="text-align: center; color: #64748b;">Belum ada riwayat peminjaman.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>