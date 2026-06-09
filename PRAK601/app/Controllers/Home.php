<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new MahasiswaModel();
        $data = [
            'title' => 'Beranda',
            'mhs'   => $model->getProfil()
        ];
        return view('beranda', $data);
    }

    public function profil()
    {
        $model = new MahasiswaModel();
        $data = [
            'title' => 'Profil Praktikan',
            'mhs'   => $model->getProfil()
        ];
        return view('profil', $data);
    }
}