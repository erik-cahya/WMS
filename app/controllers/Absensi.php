<?php

namespace wms\app\controllers;

use MainPage;
use wms\app\core\Controller;

class Absensi extends Controller implements MainPage
{

    public function index()
    {
        $data['judul'] = "Manage Kehadiran Pegawai";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => '',
            'kehadiran' => 'active'
        ];

        $this->view('templates/header', $data);
        $this->view('admin/absensi/index');
        $this->view('templates/footer');
    }
}
