<?php 
require_once("Model.php");
date_default_timezone_set('Asia/Makassar');

$listMember = ambilSemuaMember();
$listBuku = ambilSemuaBuku();

$id = $_GET['id'] ?? null;
$row = $id ? ambilPinjamDetail($id) : null;

if(isset($_POST['save'])){
    if($id) ubahPinjam($id, $_POST['im'], $_POST['ib'], $_POST['tp'], $_POST['tk']);
    else tambahPinjam($_POST['im'], $_POST['ib'], $_POST['tp'], $_POST['tk']);
    header("Location: Peminjaman.php"); exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Peminjaman - Perpustakaan</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<div class="container" style="max-width: 600px;">
    <h2><?= $id ? "Edit Transaksi" : "Tambah Transaksi" ?></h2>
    <form method="POST">
        
        <div class="form-group">
            <label>Pilih Member</label>
            <select name="im" required>
                <option value="">-- Pilih Member --</option>
                <?php foreach($listMember as $m): ?>
                    <option value="<?= $m['id_member'] ?>" <?= ($row && $row['id_member'] == $m['id_member']) ? 'selected' : '' ?>>
                        <?= $m['nama_member'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label>Pilih Buku</label>
            <select name="ib" required>
                <option value="">-- Pilih Buku --</option>
                <?php foreach($listBuku as $b): ?>
                    <option value="<?= $b['id_buku'] ?>" <?= ($row && $row['id_buku'] == $b['id_buku']) ? 'selected' : '' ?>>
                        <?= $b['judul_buku'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label>Tanggal Pinjam</label>
            <input type="date" name="tp" value="<?= $row['tgl_pinjam'] ?? date('Y-m-d') ?>" required>
        </div>

        <div class="form-group">
            <label>Tanggal Kembali</label>
            <input type="date" name="tk" value="<?= $row['tgl_kembali'] ?? '' ?>" required>
        </div>

        <div style="margin-top: 30px; display: flex; gap: 10px;">
            <button type="submit" name="save" class="btn btn-primary">Simpan Transaksi</button>
            <a href="Peminjaman.php" class="btn" style="background:#94a3b8; color:white;">Batal</a>
        </div>
    </form>
</div>
</body>
</html>