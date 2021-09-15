<?php

namespace wms\app\controllers;

use MainPage;

class Dashboard extends \wms\app\core\Controller implements MainPage
{
    public function index()
    {
        $data['judul'] = "Halaman Dashboard";
        $data['link'] = [
            'dashboard' => 'active',
            'pegawai' => '',
            'kehadiran' => ''
        ];
        $data['countPegawai'] = $this->model('Pegawai')->countPegawai();
        $data['pegawai'] = $this->model('Pegawai')->getAllPegawai();

        $this->view('templates/header', $data);
        $this->view('admin/dashboard/index', $data);
        $this->view('templates/footer');
    }
}
