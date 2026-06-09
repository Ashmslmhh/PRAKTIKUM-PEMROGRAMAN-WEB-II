<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    public function index()
    {
        $data['buku'] = $this->bukuModel->orderBy('id', 'DESC')->findAll();
        return view('buku/index', $data);
    }

    public function create()
    {
        return view('buku/create');
    }

    public function store()
    {
        $rules = [
            'judul' => [
                'rules'  => 'required|string',
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'string'   => 'Judul harus berupa teks.',
                ],
            ],
            'penulis' => [
                'rules'  => 'required|string',
                'errors' => [
                    'required' => 'Penulis harus diisi.',
                    'string'   => 'Penulis harus berupa teks.',
                ],
            ],
            'penerbit' => [
                'rules'  => 'required|string',
                'errors' => [
                    'required' => 'Penerbit harus diisi.',
                    'string'   => 'Penerbit harus berupa teks.',
                ],
            ],
            'tahun_terbit' => [
                'rules'  => 'required|integer|greater_than[1800]|less_than[2024]',
                'errors' => [
                    'required'     => 'Tahun terbit harus diisi.',
                    'integer'      => 'Tahun terbit harus berupa angka.',
                    'greater_than' => 'Tahun terbit harus lebih besar dari 1800.',
                    'less_than'    => 'Tahun terbit harus lebih kecil dari 2024.',
                ],
            ],
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->bukuModel->save([
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/buku')->with('success', 'Data buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['buku'] = $this->bukuModel->find($id);
        if (! $data['buku']) {
            return redirect()->to('/buku')->with('error', 'Data tidak ditemukan.');
        }
        return view('buku/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'judul'        => ['rules' => 'required|string', 'errors' => ['required' => 'Judul harus diisi.', 'string' => 'Judul harus berupa teks.']],
            'penulis'      => ['rules' => 'required|string', 'errors' => ['required' => 'Penulis harus diisi.', 'string' => 'Penulis harus berupa teks.']],
            'penerbit'     => ['rules' => 'required|string', 'errors' => ['required' => 'Penerbit harus diisi.', 'string' => 'Penerbit harus berupa teks.']],
            'tahun_terbit' => ['rules' => 'required|integer|greater_than[1800]|less_than[2024]', 'errors' => ['required' => 'Tahun terbit harus diisi.', 'integer' => 'Tahun terbit harus berupa angka.', 'greater_than' => 'Tahun terbit harus lebih besar dari 1800.', 'less_than' => 'Tahun terbit harus lebih kecil dari 2024.']],
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->bukuModel->update($id, [
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/buku')->with('success', 'Data buku berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->bukuModel->delete($id);
        return redirect()->to('/buku')->with('success', 'Data buku berhasil dihapus.');
    }
}