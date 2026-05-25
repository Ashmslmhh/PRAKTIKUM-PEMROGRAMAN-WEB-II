<?php 
require_once("Model.php");
date_default_timezone_set('Asia/Makassar');
$id = $_GET['id'] ?? null;
$row = $id ? ambilBukuDetail($id) : null;
if(isset($_POST['save'])){
    if($id) ubahBuku($id, $_POST['j'], $_POST['p'], $_POST['pb'], $_POST['t']);
    else tambahBuku($_POST['j'], $_POST['p'], $_POST['pb'], $_POST['t']);
    header("Location: Buku.php"); exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Buku - Perpustakaan</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<div class="container" style="max-width: 600px;">
    <h2><?= $id ? "Edit Data Buku" : "Tambah Buku Baru" ?></h2>
    <form method="POST">
        <div class="form-group"><label>Judul Buku</label><input type="text" name="j" value="<?= $row['judul_buku']??'' ?>" required></div>
        <div class="form-group"><label>Penulis</label><input type="text" name="p" value="<?= $row['penulis']??'' ?>" required></div>
        <div class="form-group"><label>Penerbit</label><input type="text" name="pb" value="<?= $row['penerbit']??'' ?>" required></div>
        <div class="form-group"><label>Tahun Terbit</label><input type="number" name="t" value="<?= $row['tahun_terbit']??'' ?>" required></div>
        <div style="margin-top: 30px; display: flex; gap: 10px;">
            <button type="submit" name="save" class="btn btn-primary">Submit</button>
            <a href="Buku.php" class="btn" style="background:#94a3b8; color:white;">Batal</a>
        </div>
    </form>
</div>
</body>
</html>