<?php


namespace wms\app\controllers;

use MainPage;
use wms\app\core\Controller;

class Dashboard_pegawai extends Controller implements MainPage
{



    public function index()
    {
        $data['judul'] = "Halaman Dashboard Pegawai";
        $data['link'] = [
            'dashboard' => 'active',
            'pegawai' => '',
            'kehadiran' => '',
            'profiles' => ''
        ];


        $this->view('templates/header', $data);
        $this->view('pegawaiPage/dashboard/index', $data);
        $this->view('templates/footer');
    }
}
