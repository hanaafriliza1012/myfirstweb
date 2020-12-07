<?php

namespace App\Controllers;

use App\Models\ModelLogin;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('pages/login');
    }

    public function auth()
    {
        $session = session();
        $model = new ModelLogin();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    //'id'       => $data['id'],
                    'email'     => $data['email'],
                    //'password'    => $data['password'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/PagesController/index');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/AuthController/index');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/AuthController/index');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/AuthController/index');
    }
}
