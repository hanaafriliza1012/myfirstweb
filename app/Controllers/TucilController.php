<?php

namespace App\Controllers;

class TucilController extends BaseController
{
    public function index()
    {
        return view('Tucil/login');
    }
    public function aksi_login()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        if ($email == "hanaafriliza@gmail.com" && $password == "admin") {
            return redirect()->to('/TucilController/admin');
        } else {
            return redirect()->to('/TucilController/user');
        }
    }
    public function registration()
    {
        return view('Tucil/registration');
    }
    public function admin()
    {
        return view('Tucil/admin');
    }
    public function user()
    {
        return view('Tucil/user');
    }
}
