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
            return redirect()->to('/WebController/admin');
        } else {
            return redirect()->to('/WebController/user');
        }
    }
    public function register()
    {
        return view('Web/register');
    }
    public function admin()
    {
        return view('Web/admin');
    }
    public function user()
    {

        return view('Web/user');
    }
    public function detail()
    {
        return view('Web/detail');
    }
    public function about()
    {
        return view('Web/about');
    }
}
