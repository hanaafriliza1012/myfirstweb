<?php

namespace App\Controllers;

class PagesController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | KopiKu'
        ];
        return view('pages/home', $data);
        //tambahan
        //$session = session();
        //echo "Welcome back, " . $session->get('email');
    }
    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us'
        ];
        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------
}
