<?php
namespace App\Models;
use CodeIgniter\Model;

class MahasiswaModel extends Model {
    public function getProfil() {
        return [
            'nama'      => 'Ashma Salimah',
            'nim'       => '2410817220015',
            'prodi'     => 'Teknologi Informasi',
            'univ'      => 'Universitas Lambung Mangkurat',
            'motto'     => 'Its not hard, its just new',
            'instagram' => '@ashmslmhh',
            'bio'       => 'Saya Ashma Salimah, senang sekali Anda berada di sini. Saya adalah mahasiswa Teknologi Informasi di Universitas Lambung Mangkurat angkatan 2024. Saya sangat menyukai kucing dan saya memiliki kucing bernama Bubu, Olfi, dan Chiro. Di waktu luang, saya suka membaca manhwa, mendengarkan musik, dan bermain game.',
            'foto'      => base_url('img.jpeg'),
            'foto2'      => base_url('img2.jpeg'), 
            'skills'    => ['HTML', 'CSS', 'PHP', 'UI Design', 'Python', 'Kotlin'],
            'hobi'      => ['Reading', 'Music', 'Gaming'],
            'location'  => 'Banjarmasin, Indonesia',
            'since'     => 'Est. 2006'
        ];
    }
}