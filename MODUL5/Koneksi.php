<?php
date_default_timezone_set('Asia/Makassar');

function koneksi() {
    try {
        $host     = "sql302.infinityfree.com";
        $dbname   = "if0_42012744_perpustakaan";
        $username = "if0_42012744";
        $password = "Kw2Nz0dMIpq"; 

        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Gagal Terhubung: " . $e->getMessage());
    }
}
?>