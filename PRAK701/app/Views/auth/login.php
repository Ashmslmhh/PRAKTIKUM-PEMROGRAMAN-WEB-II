<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Perpustakaan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Poppins', sans-serif; }
        body {
            min-height: 100vh; display: flex; align-items: center; justify-content: center;
            background: #9d7b76; padding: 20px;
        }
        .wrapper {
            display: flex; width: 100%; max-width: 1500px; min-height: 700px; background: #f4f5f9;
            border-radius: 24px; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,.25);
        }
        .left { flex: 1; padding: 60px 60px; display: flex; flex-direction: column; justify-content: center; }
        .left h1 { font-size: 44px; margin-bottom: 40px; color: #1a1a1a; }
        .subtitle { font-weight: bold; font-size: 14px; margin-bottom: 24px; color: #333; }
        .field { margin-bottom: 18px; }
        .field input {
            width: 100%; padding: 18px 20px; border: 2px solid transparent; border-radius: 14px;
            background: #fff; font-size: 15px; box-shadow: 0 2px 6px rgba(0,0,0,.05);
            transition: border-color .25s ease, box-shadow .25s ease, transform .15s ease;
        }
        .field input:hover { box-shadow: 0 4px 14px rgba(0,0,0,.1); }
        .field input:focus {
            outline: none; border-color: #9d7b76;
            box-shadow: 0 0 0 4px rgba(157,123,118,.18); transform: translateY(-2px);
        }
        .btn {
            width: 100%; padding: 18px; border: none; border-radius: 14px;
            background: #9d7b76; color: #fff; font-size: 16px; font-weight: bold;
            cursor: pointer; box-shadow: 0 8px 20px rgba(157,123,118,.4); margin-top: 10px;
            transition: background .25s ease, transform .15s ease, box-shadow .25s ease;
        }
        .btn:hover { background: #886863; transform: translateY(-3px); box-shadow: 0 12px 28px rgba(157,123,118,.5); }
        .btn:active { transform: translateY(-1px); box-shadow: 0 6px 16px rgba(157,123,118,.4); }
        .alert { padding: 12px 16px; border-radius: 12px; margin-bottom: 20px; font-size: 14px; }
        .alert-error   { background: #fde2e2; color: #b42318; }
        .alert-success { background: #e2f7e7; color: #137333; }
        .right { flex: 1; position: relative; min-height: 560px; overflow: hidden; }
        .right img {
            width: 100%; height: 100%; object-fit: cover; display: block;
            transition: transform 6s ease;
        }
        .right:hover img { transform: scale(1.05); }
        .right .caption {
            position: absolute; bottom: 40px; left: 40px; right: 40px;
            color: #fff; font-size: 26px; font-weight: 600; text-shadow: 0 2px 8px rgba(0,0,0,.6);
        }
        @media (max-width: 768px) {
            .right { display: none; }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="left">
            <h1>Hello Again!</h1>
            <p class="subtitle">Selamat datang, silahkan login untuk mengelola data buku</p>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-error"><?= esc(session()->getFlashdata('error')) ?></div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success"><?= esc(session()->getFlashdata('success')) ?></div>
            <?php endif; ?>

            <form action="<?= site_url('login') ?>" method="post">
                <?= csrf_field() ?>
                <div class="field">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="field">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn">Sign In</button>
            </form>
        </div>

        <div class="right">
            <img src="<?= base_url('img/login.jpeg') ?>" alt="ilustrasi">
            <div class="caption">Finally, all your work in one place.</div>
        </div>
    </div>
</body>
</html>