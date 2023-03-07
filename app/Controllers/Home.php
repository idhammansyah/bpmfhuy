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
        $data = [
            'title' => "BPM Fakultas Hukum Universitas YARSI"
        ];
        
        return view('layout/login', $data);
    }

    public function forgotpassword()
    {
        $data = [
            'title' => "BPM Fakultas Hukum Universitas YARSI"
        ];
        
        return view('layout/forgot', $data);
    }

    public function register()
    {
        $data = [
            'title' => "BPM Fakultas Hukum Universitas YARSI"
        ];
        
        return view('layout/register', $data);
    }

    public function change_password()
    {
        $data = [
            'title' => "BPM Fakultas Hukum Universitas YARSI"
        ];
        
        return view('layout/change_password',$data);
    }
}