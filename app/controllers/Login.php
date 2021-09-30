<?php

namespace wms\app\controllers;

use MainPage;
use wms\app\core\Controller;

class Login extends Controller implements MainPage
{

    public function index()
    {
        $data['judul'] = "WMS Login";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => '',
            'kehadiran' => 'active',
            'profiles' => ''
        ];


        $this->view('loginPage/index', $data);
    }
}
