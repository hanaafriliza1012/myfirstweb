<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return redirect()->to('/PagesController');
	}

	public function show()
	{
		$data['nama'] = 'Hana Afriliza';
		$data['npm'] = '1817051012';

		echo view('mahasiswa/header', $data);
		echo view('mahasiswa/index', $data);
		echo view('mahasiswa/footer', $data);
	}

	//--------------------------------------------------------------------

}
