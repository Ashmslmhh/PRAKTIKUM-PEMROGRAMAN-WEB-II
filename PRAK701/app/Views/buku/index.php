<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --mauve: #9d7b76; --mauve-dark: #886863;
            --cream: #faf6f4; --soft: #f3e9e6; --accent: #e8b4a0;
        }
        body { font-family: 'Poppins', sans-serif; background: var(--cream); }
        .navbar-soft {
            background: #fff; box-shadow: 0 4px 20px rgba(157,123,118,.12);
            border-radius: 0 0 24px 24px;
        }
        .brand { color: var(--mauve); font-weight: 700; font-size: 22px; }
        .btn-soft {
            background: var(--mauve); color: #fff; border: none; border-radius: 14px;
            padding: 10px 22px; font-weight: 500;
            box-shadow: 0 6px 16px rgba(157,123,118,.3);
            transition: transform .15s ease, box-shadow .2s ease, background .2s ease;
        }
        .btn-soft:hover { background: var(--mauve-dark); color:#fff; transform: translateY(-2px); box-shadow: 0 10px 22px rgba(157,123,118,.4); }
        .card-soft { border: none; border-radius: 26px; box-shadow: 0 10px 40px rgba(157,123,118,.12); overflow: hidden; }
        .table-soft { margin: 0; }
        .table-soft thead th {
            background: var(--soft); color: var(--mauve-dark); font-weight: 600;
            border: none; padding: 18px 20px;
        }
        .table-soft tbody td { border: none; padding: 16px 20px; vertical-align: middle; border-bottom: 1px solid #f3eae7; }
        .table-soft tbody tr { transition: background .2s ease; }
        .table-soft tbody tr:hover { background: #fdf7f5; }
        .badge-year {
            background: var(--soft); color: var(--mauve-dark); padding: 6px 14px;
            border-radius: 999px; font-weight: 500; font-size: 13px;
        }
        .btn-pill { border-radius: 999px; padding: 6px 16px; font-size: 13px; font-weight: 500; border: none; transition: transform .15s ease; }
        .btn-pill:hover { transform: translateY(-2px); }
        .btn-edit { background: #f6d9a8; color: #8a5a17; }
        .btn-del  { background: #f6c1bb; color: #9c2b1e; }
        .alert-soft { border: none; border-radius: 16px; padding: 14px 18px; font-weight: 500; }
        .empty { color: #b9a6a1; }
        .avatar {
            width: 38px; height: 38px; border-radius: 50%; background: var(--accent);
            color: #fff; display: inline-flex; align-items: center; justify-content: center; font-weight: 600;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-soft py-3 mb-4">
    <div class="container">
        <span class="brand">Ashmslmhh Library's</span>
        <div class="d-flex align-items-center gap-3">
            <span class="avatar"><?= strtoupper(substr(session()->get('username'), 0, 1)) ?></span>
            <span style="color:var(--mauve-dark);font-weight:500;">Halo, <?= esc(session()->get('username')) ?></span>
            <a href="<?= site_url('logout') ?>" class="btn btn-pill" style="background:#f3e9e6;color:var(--mauve-dark);">Logout</a>
        </div>
    </div>
</nav>

<div class="container my-4" style="max-width:1000px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="mb-1" style="color:var(--mauve-dark);font-weight:700;">Daftar Buku</h3>
            <p class="mb-0" style="color:#b9a6a1;">Kelola koleksi bukumu di sini</p>
        </div>
        <a href="<?= site_url('buku/create') ?>" class="btn-soft">+ Tambah Buku</a>
    </div>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-soft" style="background:#dcf3e3;color:#137333;">✅ <?= esc(session()->getFlashdata('success')) ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-soft" style="background:#fbe0dd;color:#b42318;">⚠️ <?= esc(session()->getFlashdata('error')) ?></div>
    <?php endif; ?>

    <div class="card-soft">
        <div class="table-responsive">
            <table class="table table-soft">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($buku)): ?>
                        <tr><td colspan="6" class="text-center empty py-5" style="color:#b9a6a1;">Belum ada data buku. Yuk tambah satu!</td></tr>
                    <?php else: ?>
                        <?php $no = 1; foreach ($buku as $b): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td style="font-weight:500;color:#5a4945;"><?= esc($b['judul']) ?></td>
                                <td><?= esc($b['penulis']) ?></td>
                                <td><?= esc($b['penerbit']) ?></td>
                                <td><span class="badge-year"><?= esc($b['tahun_terbit']) ?></span></td>
                                <td class="text-center">
                                    <a href="<?= site_url('buku/edit/' . $b['id']) ?>" class="btn-pill btn-edit">Edit</a>
                                    <a href="<?= site_url('buku/delete/' . $b['id']) ?>" class="btn-pill btn-del"
                                       onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>