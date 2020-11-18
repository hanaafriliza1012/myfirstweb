<?php

namespace App\Controllers;

class WebController extends BaseController
{
    public function index()
    {
        return view('Web/login');
    }
    public function aksi_login()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        if ($email == "hanaafriliza@gmail.com" && $password == "hana") {
            return redirect()->to('/Home');
        } else {
            return redirect()->to('/WebController');
        }
    }
}
