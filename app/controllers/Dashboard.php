<?php


namespace wms\app\controllers;

use MainPage;
use wms\app\core\Controller;

// inheritance ke controller
class Dashboard extends Controller implements MainPage
{

    public function __construct()
    {
        session_start();
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
