<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "BPM Fakultas Hukum Universitas YARSI"
        ];

        return view('layout/index', $data);
    }

    public function login()
    {
        return view('layout/login');
    }

    public function forgotpassword()
    {
        return view('layout/forgot');
    }

    public function register()
    {
        return view('layout/register');
    }

    public function change_password()
    {
        return view('layout/change_password');
    }
}
