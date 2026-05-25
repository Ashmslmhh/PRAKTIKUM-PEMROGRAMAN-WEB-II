<?php 
require_once("Model.php");
date_default_timezone_set('Asia/Makassar');

$id = $_GET['id'] ?? null;
$row = $id ? ambilMemberDetail($id) : null;

if(isset($_POST['save'])){
    if($id) {
        ubahMember($id, $_POST['n'], $_POST['no'], $_POST['a'], $_POST['td'], $_POST['tb']);
    } else {
        tambahMember($_POST['n'], $_POST['no'], $_POST['a'], $_POST['td'], $_POST['tb']);
    }
    header("Location: Member.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Member - Perpustakaan</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<div class="container" style="max-width: 600px;">
    <h2><?= $id ? "Edit Data Member" : "Tambah Member Baru" ?></h2>
    <form method="POST">
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="n" value="<?= $row['nama_member'] ?? '' ?>" placeholder="Masukkan nama lengkap" required>
        </div>
        
        <div class="form-group">
            <label>Nomor Telepon</label>
            <input type="text" name="no" value="<?= $row['nomor_member'] ?? '' ?>" placeholder="Contoh: 0812xxxx" required>
        </div>
        
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="a" placeholder="Alamat lengkap..."><?= $row['alamat'] ?? '' ?></textarea>
        </div>
        
        <div class="form-group">
            <label>Tanggal Mendaftar</label>
            <input type="datetime-local" name="td" value="<?= $row['tgl_mendaftar']?? '' ?>">
        </div>
        
        <div class="form-group">
            <label>Tanggal Terakhir Bayar</label>
            <input type="date" name="tb" value="<?= $row['tgl_terkahir_bayar'] ?? '' ?>">
        </div>
        
        <div style="margin-top: 30px; display: flex; gap: 10px;">
            <button type="submit" name="save" class="btn btn-primary">Submit</button>
            <a href="Member.php" class="btn" style="background:#94a3b8; color:white;">Batal</a>
        </div>
    </form>
</div>
</body>
</html>