<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root { --mauve:#9d7b76; --mauve-dark:#886863; --cream:#faf6f4; --soft:#f3e9e6; }
        body { font-family:'Poppins',sans-serif; background:var(--cream); display:flex; align-items:center; min-height:100vh; }
        .card-soft { border:none; border-radius:28px; box-shadow:0 14px 50px rgba(157,123,118,.15); }
        .form-control-soft {
            border:2px solid #f0e4e0; border-radius:14px; padding:14px 18px; background:#fff;
            transition:border-color .2s ease, box-shadow .2s ease;
        }
        .form-control-soft:focus { border-color:var(--mauve); box-shadow:0 0 0 4px rgba(157,123,118,.15); outline:none; }
        .form-label { font-weight:500; color:#5a4945; margin-bottom:6px; }
        .btn-soft { background:var(--mauve); color:#fff; border:none; border-radius:14px; padding:12px 26px; font-weight:500; box-shadow:0 6px 16px rgba(157,123,118,.3); transition:transform .15s ease, background .2s ease; }
        .btn-soft:hover { background:var(--mauve-dark); color:#fff; transform:translateY(-2px); }
        .btn-cancel { border-radius:14px; padding:12px 26px; font-weight:500; background:#f0e4e0; color:#8a6f69; border:none; }
        .alert-soft { border:none; border-radius:16px; background:#fbe0dd; color:#b42318; }
    </style>
</head>
<body>
<div class="container" style="max-width:560px;">
    <div class="card-soft p-4 p-md-5">
        <h4 class="mb-1" style="color:var(--mauve-dark);font-weight:700;">Tambah Buku</h4>
        <p style="color:#b9a6a1;">Isi detail buku baru di bawah ini</p>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-soft">
                <ul class="mb-0 ps-3">
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?= site_url('buku/store') ?>" method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control form-control-soft" value="<?= old('judul') ?>" placeholder="Judul buku">
            </div>
            <div class="mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" name="penulis" class="form-control form-control-soft" value="<?= old('penulis') ?>" placeholder="Nama penulis">
            </div>
            <div class="mb-3">
                <label class="form-label">Penerbit</label>
                <input type="text" name="penerbit" class="form-control form-control-soft" value="<?= old('penerbit') ?>" placeholder="Nama penerbit">
            </div>
            <div class="mb-4">
                <label class="form-label">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" class="form-control form-control-soft" value="<?= old('tahun_terbit') ?>" placeholder="Contoh: 2020">
            </div>
            <div class="d-flex gap-2">
                <button type="submit" class="btn-soft">Simpan</button>
                <a href="<?= site_url('buku') ?>" class="btn-cancel">Batal</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>