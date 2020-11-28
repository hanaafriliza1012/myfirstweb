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
}
