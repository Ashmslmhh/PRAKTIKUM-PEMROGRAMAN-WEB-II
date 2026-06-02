<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - <?= $mhs['nama'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        :root {
            --pink-bg: #fdf2f4;
            --pink-accent: #d8a7b1;
            --text-color: #636e72;
            --title-font: 'Playfair Display', serif;
            --body-font: 'Montserrat', sans-serif;
        }

        html, body {
            height: 100vh;
            margin: 0;
            overflow: hidden;
            background: white;
            font-family: var(--body-font);
            color: var(--text-color);
        }

        .wrapper {
            height: 100vh;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        nav {
            padding: 30px;
            text-align: center;
            letter-spacing: 4px;
            font-size: 0.85rem;
            text-transform: uppercase;
            z-index: 10;
            background-color: white;
            border-bottom: 1px solid #f0f0f0;
        }

        nav a {
            text-decoration: none;
            color: var(--text-color);
            margin: 0 25px;
            transition: 0.3s;
        }

        nav a:hover, nav a.active {
            color: var(--pink-accent);
            font-weight: 600;
        }

        .main-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 5%;
            z-index: 5;
        }

        .hero-container {
            display: flex;
            align-items: center;
            gap: 80px;
            max-width: 1300px;
            width: 100%;
        }

        .img-side {
            flex: 0 0 500px;
            padding: 20px;
            background: white;
            border: 1px solid #f2f2f2;
            box-shadow: 20px 20px 50px rgba(0,0,0,0.04);
            position: relative;
        }

        .img-side img {
            width: 100%;
            height: auto;
            max-height: 70vh;
            object-fit: cover;
            display: block;
        }

        .vertical-text {
            position: absolute;
            bottom: 200px;
            left: -20px;
            transform: rotate(-90deg);
            transform-origin: left bottom;
            font-family: var(--title-font);
            font-style: italic;
            font-size: 4rem;
            color: #f5f5f5;
            white-space: nowrap;
            pointer-events: none;
        }

        .text-side {
            flex: 1;
            padding: 50px;
            border: 1px solid #f2f2f2;
            text-align: center;
            background: white;
        }

        .header-title {
            font-family: var(--title-font);
            font-size: 3.5rem;
            color: #333;
            margin-bottom: 10px;
        }

        .nim-text {
            font-size: 1rem;
            letter-spacing: 3px;
            color: var(--pink-accent);
            margin-bottom: 35px;
            font-weight: 500;
        }

        .bio-text {
            line-height: 2.2;
            font-size: 1.1rem;
            margin-bottom: 50px;
        }

        .btn-profile {
            display: inline-block;
            border: 1px solid #eee;
            color: var(--text-color);
            padding: 15px 45px;
            text-decoration: none;
            font-size: 0.8rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            transition: 0.4s;
        }

        .btn-profile:hover {
            border-color: var(--pink-accent);
            color: var(--pink-accent);
            background: #fffafa;
        }

        .flower {
            position: absolute;
            z-index: 1;
            opacity: 0.5;
            pointer-events: none;
        }

        .flower-1 { top: 8%; right: 1%; width: 180px; transform: rotate(15deg); }
        .flower-2 { bottom: 8%; left: 2%; width: 150px; transform: rotate(-20deg); }

        .custom-footer {
            background-color: var(--pink-bg);
            color: var(--text-color);
            padding: 20px 60px;
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-top: 1px solid #efd7db;
            z-index: 10;
        }

        .footer-links a {
            color: var(--text-color);
            text-decoration: none;
            margin-right: 35px;
            transition: 0.3s;
            font-weight: 500;
        }

        .footer-links a:hover { color: var(--pink-accent); }

        .social-icons a {
            color: var(--text-color);
            font-size: 1.1rem;
            margin-left: 30px;
            transition: 0.3s;
        }

        .social-icons a:hover { color: var(--pink-accent); }
    </style>
</head>
<body>

    <div class="wrapper">
        <img src="<?= base_url('flower.png') ?>" class="flower flower-1" alt="deco">
        <img src="<?= base_url('flower.png') ?>" class="flower flower-2" alt="deco">

        <nav>
            <a href="<?= base_url('/') ?>" class="active">Beranda</a>
            <a href="<?= base_url('profil') ?>">Profil</a>
        </nav>

        <div class="main-content">
            <div class="hero-container">
                <div class="img-side">
                    <span class="vertical-text">ASHMA'S SPACE</span>
                    <img src="<?= $mhs['foto'] ?>" alt="Foto Profil">
                </div>

                <div class="text-side">
                    <h1 class="header-title">Selamat Datang di Profil Saya!</h1>
                    <div class="nim-text">NIM: <?= $mhs['nim'] ?></div>
                    <p class="bio-text">
                        Saya <strong>Ashma Salimah</strong>, senang sekali Anda berada di sini. <br>
                        Saya adalah mahasiswa Teknologi Informasi di Universitas Lambung Mangkurat angkatan 2024. 
                        Saya sangat menyukai kucing dan saya memiliki kucing bernama Bubu, Olfi, dan Chiro. 
                        Di waktu luang, saya suka membaca manhwa, mendengarkan musik, dan bermain game.
                    </p>
                    <a href="<?= base_url('profil') ?>" class="btn-profile">Lihat Profil</a>
                </div>
            </div>
        </div>

        <footer class="custom-footer d-flex justify-content-between align-items-center">
            <div class="footer-links">
                <a href="https://instagram.com/ashmslmhh" target="_blank">IG: @ashmslmhh</a>
                <a href="https://twitter.com/seminging" target="_blank">X: @seminging</a>
                <a href="https://tiktok.com/@ashmslmhh" target="_blank">TikTok: @ashmslmhh</a>
                <a href="mailto:ashmasalimah@gmail.com">Email: ashmasalimah@gmail.com</a>
            </div>
            
            <div class="social-icons">
                <a href="https://instagram.com/ashmslmhh" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com/seminging" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="https://tiktok.com/@ashmslmhh" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                <a href="mailto:ashmasalimah@gmail.com"><i class="fa-solid fa-envelope"></i></a>
            </div>
        </footer>
    </div>

</body>
</html>