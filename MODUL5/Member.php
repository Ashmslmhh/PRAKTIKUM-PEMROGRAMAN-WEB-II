<?php 
require_once("Model.php");

if(isset($_GET['hapus'])){ 
    hapusMember($_GET['hapus']); 
    header("Location: Member.php"); 
    exit;
}

$data = ambilSemuaMember();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Member - Perpustakaan</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<div class="container">
    <div class="flex-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2>Data Member</h2>
        <div>
            <a href="index.php" class="btn" style="background:#94a3b8; color:white;">Home</a>
            <a href="FormMember.php" class="btn btn-primary">+ Tambah Member</a>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Lengkap</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Tgl Mendaftar</th>
                <th>Tgl Terakhir Bayar</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($data as $m): 
            ?>
            <tr>
                <td><?= sprintf('%02d', $no++) ?></td>
                <td><?= htmlspecialchars($m['nama_member']) ?></td>
                <td><?= htmlspecialchars($m['nomor_member']) ?></td>
                <td><?= htmlspecialchars($m['alamat']) ?></td>
                <td><?= date('d/m/Y H:i', strtotime($m['tgl_mendaftar'])) ?></td>
                <td><?= !empty($m['tgl_terkahir_bayar']) ? date('d/m/Y', strtotime($m['tgl_terkahir_bayar'])) : '-' ?></td>
                <td>
                    <a href="FormMember.php?id=<?= $m['id_member'] ?>" class="btn btn-edit">Edit</a>
                    <a href="Member.php?hapus=<?= $m['id_member'] ?>" class="btn btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus member ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
            
            <?php if (empty($data)): ?>
            <tr>
                <td colspan="7" style="text-align: center; color: var(--text-muted);">Belum ada data member.</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>