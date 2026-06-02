<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - <?= $mhs['nama'] ?></title>
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
            display: grid;
            grid-template-columns: 1fr 2.2fr;
            gap: 20px;
            padding: 20px 50px;
            z-index: 5;
            min-height: 0; 
        }

        .aesthetic-card {
            background: white;
            border: 1px solid #f2f2f2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
            height: 100%;
            min-height: 0;
        }

        .grid-right {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            gap: 20px;
            height: 100%;
            min-height: 0;
        }

        .label {
            font-size: 1.5rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--pink-accent);
            font-weight: 700;
            margin-bottom: 8px;
        }

        .title-lg {
            font-family: var(--title-font);
            font-style: italic;
            font-size: 3rem;
            color: #333;
            margin-bottom: 5px;
        }

        .title-md {
            font-family: var(--title-font);
            font-style: italic;
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 10px;
        }

        .info-text {
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.7;
        }

        .skill-item {
            font-size: 1rem;
            padding: 5px 12px;
            border-bottom: 1px solid #eee;
            margin: 2px;
            display: inline-block;
        }

        .interest-item {
            font-size: 1.5rem;
            padding: 6px 0;
            width: 80%;
            border-bottom: 1px solid #f9f9f9;
        }

        .pink-bg {
            background-color: var(--pink-bg);
            border: none;
        }

        .cat-photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

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

        <nav>
            <a href="<?= base_url('/') ?>">Beranda</a>
            <a href="<?= base_url('profil') ?>" class="active">Profil</a>
        </nav>

        <div class="main-content">
            <div class="aesthetic-card">
                <span class="label">About Me</span>
                <h2 class="title-lg"><?= $mhs['nama'] ?></h2>
                <div class="info-text">
                    <div class="mb-1"><?= $mhs['nim'] ?></div>
                    <div class="fw-bold mb-1 fst-italic">"<?= $mhs['motto'] ?>"</div>
                    <div class="mb-1"><?= $mhs['prodi'] ?></div>
                    <div><?= $mhs['univ'] ?></div>
                </div>
            </div>

            <div class="grid-right">
                <div class="aesthetic-card pink-bg">
                    <span class="label">Expertise</span>
                    <h3 class="title-md">Skills</h3>
                    <div class="d-flex flex-wrap justify-content-center">
                        <?php foreach($mhs['skills'] as $s): ?>
                            <span class="skill-item"><?= $s ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="aesthetic-card">
                    <span class="label">Popular Posts</span>
                    <h3 class="title-md">Interests</h3>
                    <div class="d-flex flex-column align-items-center w-100">
                        <div class="interest-item">Reading</div>
                        <div class="interest-item">Music</div>
                        <div class="interest-item">Gaming</div>
                    </div>
                </div>

                <div class="aesthetic-card">
                    <span class="label">Contact Info</span>
                    <h3 class="title-md"><?= $mhs['instagram'] ?></h3>
                    <div class="info-text">
                        <div><?= $mhs['location'] ?></div>
                        <div class="fw-bold"><?= $mhs['since'] ?></div>
                    </div>
                </div>

                <div class="aesthetic-card p-0 overflow-hidden">
                    <img src="<?= $mhs['foto2'] ?>" class="cat-photo" alt="Cat Profile">
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