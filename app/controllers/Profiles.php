<?php

namespace wms\app\controllers;

use MainPage;
use wms\app\core\Controller;

class Profiles extends Controller implements MainPage
{
    public function __construct()
    {
        session_start();
    }

    public function index()
    {
        $data['judul'] = "Profiles";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => '',
            'kehadiran' => '',
            'profiles' => 'active'
        ];
        $data['session_nama'] = $_SESSION["nama_pegawai"];


        $this->view('templates/header', $data);
        $this->view('adminPage/profiles/index', $data);
        $this->view('templates/footer');
    }
}
