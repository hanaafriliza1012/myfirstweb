<?php

namespace App\Controllers;

use App\Models\KopiModel;

class KopiController extends BaseController
{
    protected $KopiModel;
    public function __construct()
    {
        $this->KopiModel = new KopiModel();
    }
    public function index()
    {
        // $kopi = $this->KopiModel->findAll();


        $data = [
            'title' => 'Daftar Kopi',
            'kopi' => $this->KopiModel->getKopiController()
        ];

        //$KopiModel = new KopiModel();
        //$kopi = $KopiModel->findAll();

        return view('pages/kopi/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Kopi',
            'kopi' => $this->KopiModel->getKopiController($slug)
        ];

        return view('pages/kopi/detail', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data'
        ];
        return view('pages/create', $data);
    }
    public function save()
    {
        $slug = url_title($this->request->getVar('jenis'), '-', true);
        $this->KopiModel->save([
            'gambar' => $this->request->getVar('gambar'),
            'jenis' => $this->request->getVar('jenis'),
            'berat' => $this->request->getVar('berat'),
            'harga' => $this->request->getVar('harga'),
            'kadaluarsa' => $this->request->getVar('kadaluarsa'),
            'umur_simpan' => $this->request->getVar('umur_simpan'),
            'slug' => $slug
        ]);

        session()->setFlashData('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/KopiController');
    }

    public function delete($id)
    {

        $this->KopiModel->delete($id);
        session()->setFlashData('pesan', 'Data berhasil dihapus');
        return redirect()->to('/KopiController');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Ubah Data',
            'kopi' => $this->KopiModel->getKopiController($slug)
        ];
        return view('pages/edit', $data);
    }
    public function update($id)
    {
        $slug = url_title($this->request->getVar('jenis'), '-', true);
        $this->KopiModel->save([
            'id' => $id,
            'gambar' => $this->request->getVar('gambar'),
            'jenis' => $this->request->getVar('jenis'),
            'berat' => $this->request->getVar('berat'),
            'harga' => $this->request->getVar('harga'),
            'kadaluarsa' => $this->request->getVar('kadaluarsa'),
            'umur_simpan' => $this->request->getVar('umur_simpan'),
            'slug' => $slug
        ]);

        session()->setFlashData('pesan', 'Data berhasil diubah');
        return redirect()->to('/KopiController');
    }
}
