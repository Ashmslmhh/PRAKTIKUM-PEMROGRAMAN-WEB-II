<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Perpustakaan Online</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap');

        :root {
            --primary: #4f46e5;
            --bg: #f8fafc;
            --white: #ffffff;
            --text-dark: #1e293b;
            --text-muted: #64748b;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .main-wrapper {
            width: 100%;
            max-width: 1100px;
            padding: 20px;
            text-align: center;
        }

        .header {
            margin-bottom: 60px;
        }

        .header h1 {
            font-size: 2.8rem;
            color: var(--text-dark);
            margin: 0;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .header p {
            color: var(--text-muted);
            font-size: 1.1rem;
            margin-top: 10px;
        }

        .card-wrapper {
            display: flex;
            gap: 30px;
            justify-content: center;
            align-items: stretch;
        }

        .card {
            background: var(--white);
            flex: 1;
            padding: 50px 30px;
            border-radius: 25px;
            text-decoration: none;
            color: var(--text-dark);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            
            border-top: 6px solid #c7d2fe; 
            
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .card:hover {
            transform: translateY(-15px);
            border-top-color: var(--primary);
            box-shadow: 0 30px 60px -12px rgba(79, 70, 229, 0.15);
        }

        .icon-box {
            font-size: 55px;
            margin-bottom: 25px;
            transition: transform 0.3s ease;
        }

        .card:hover .icon-box {
            transform: scale(1.2);
        }

        .card h3 {
            margin: 0;
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .card p {
            font-size: 0.95rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin-top: 12px;
            margin-bottom: 0;
        }

        @media (max-width: 768px) {
            .card-wrapper {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

    <div class="main-wrapper">
        <header class="header">
            <h1>Perpustakaan Digital</h1>
            <p>Manajemen data member, buku, dan peminjaman</p>
        </header>

        <div class="card-wrapper">
            
            <a href="Member.php" class="card">
                <div class="icon-box">👥</div>
                <h3>Member</h3>
                <p>Kelola data lengkap anggota perpustakaan</p>
            </a>

            <a href="Buku.php" class="card">
                <div class="icon-box">📖</div>
                <h3>Buku</h3>
                <p>Kelola koleksi dan informasi data buku</p>
            </a>

            <a href="Peminjaman.php" class="card">
                <div class="icon-box">📝</div>
                <h3>Peminjaman</h3>
                <p>Kelola transaksi peminjaman buku</p>
            </a>

        </div>
    </div>

</body>
</html>