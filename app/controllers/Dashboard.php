<?php

session_start();

namespace wms\app\controllers;

use MainPage;
use wms\app\core\Controller;

class Dashboard extends Controller implements MainPage
{
    // set session
    if(isset($_SESSION["login"])){
        
    }


    public function index()
    {
        $data['judul'] = "Halaman Dashboard";
        $data['link'] = [
            'dashboard' => 'active',
            'pegawai' => '',
            'kehadiran' => '',
            'profiles' => ''
        ];
        $data['countPegawai'] = $this->model('Pegawai')->countPegawai();
        $data['pegawai'] = $this->model('Pegawai')->getAllPegawai();

        $this->view('templates/header', $data);
        $this->view('adminPage/dashboard/index', $data);
        $this->view('templates/footer');
    }
}
