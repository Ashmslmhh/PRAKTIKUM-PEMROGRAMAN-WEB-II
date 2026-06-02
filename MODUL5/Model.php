<?php
require_once("Koneksi.php");

function ambilSemuaMember() {
    $stmt = koneksi()->prepare("SELECT * FROM member");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function ambilMemberDetail($id) {
    $stmt = koneksi()->prepare("SELECT * FROM member WHERE id_member = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function tambahMember($nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar) {
    $sql = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terkahir_bayar) VALUES (?, ?, ?, ?, ?)";
    return koneksi()->prepare($sql)->execute([$nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar]);
}
function ubahMember($id, $nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar) {
    $sql = "UPDATE member SET nama_member=?, nomor_member=?, alamat=?, tgl_mendaftar=?, tgl_terkahir_bayar=? WHERE id_member=?";
    return koneksi()->prepare($sql)->execute([$nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar, $id]);
}
function hapusMember($id) {
    return koneksi()->prepare("DELETE FROM member WHERE id_member = ?")->execute([$id]);
}

function ambilSemuaBuku() {
    $stmt = koneksi()->prepare("SELECT * FROM buku");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function ambilBukuDetail($id) {
    $stmt = koneksi()->prepare("SELECT * FROM buku WHERE id_buku = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function tambahBuku($judul, $penulis, $penerbit, $tahun) {
    $sql = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (?, ?, ?, ?)";
    return koneksi()->prepare($sql)->execute([$judul, $penulis, $penerbit, $tahun]);
}
function ubahBuku($id, $judul, $penulis, $penerbit, $tahun) {
    $sql = "UPDATE buku SET judul_buku=?, penulis=?, penerbit=?, tahun_terbit=? WHERE id_buku=?";
    return koneksi()->prepare($sql)->execute([$judul, $penulis, $penerbit, $tahun, $id]);
}
function hapusBuku($id) {
    return koneksi()->prepare("DELETE FROM buku WHERE id_buku = ?")->execute([$id]);
}

function ambilSemuaPeminjaman() {
    $stmt = koneksi()->prepare("SELECT * FROM peminjaman");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function ambilPinjamDetail($id) {
    $stmt = koneksi()->prepare("SELECT * FROM peminjaman WHERE id_peminjaman = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function tambahPinjam($id_member, $id_buku, $tgl_p, $tgl_k) {
    $sql = "INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) VALUES (?, ?, ?, ?)";
    return koneksi()->prepare($sql)->execute([$id_member, $id_buku, $tgl_p, $tgl_k]);
}
function ubahPinjam($id, $id_m, $id_b, $tgl_p, $tgl_k) {
    $sql = "UPDATE peminjaman SET id_member=?, id_buku=?, tgl_pinjam=?, tgl_kembali=? WHERE id_peminjaman=?";
    return koneksi()->prepare($sql)->execute([$id_m, $id_b, $tgl_p, $tgl_k, $id]);
}
function hapusPinjam($id) {
    return koneksi()->prepare("DELETE FROM peminjaman WHERE id_peminjaman = ?")->execute([$id]);
}
?>