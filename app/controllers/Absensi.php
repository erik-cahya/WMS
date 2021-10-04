<?php

namespace wms\app\controllers;

use MainPage;
use wms\app\core\Controller;

class Absensi extends Controller implements MainPage
{
    public function __construct()
    {
        session_start();
    }

    public function index()
    {
        $data['judul'] = "Manage Kehadiran Pegawai";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => '',
            'kehadiran' => 'active',
            'profiles' => ''
        ];
        $data['session_nama'] = $_SESSION["nama_pegawai"];

        $this->view('templates/header', $data);
        $this->view('adminPage/absensi/index');
        $this->view('templates/footer');
    }
}
