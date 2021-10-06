<?php


namespace wms\app\controllers;

use MainPage;
use wms\app\core\Controller;

// inheritance ke controller
class Dashboard_admin extends Controller implements MainPage
{
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
        $data['countCuti'] = $this->model('Cuti')->countDataCuti();
        $data['countAbsensi'] = $this->model('Absensi')->countDataAbsensi();
        $data['pegawai'] = $this->model('Pegawai')->getAllPegawai();
        $data['cuti'] = $this->model('Cuti')->getDataCuti();
        $data['absensi'] = $this->model('Absensi')->getDataAbsensi();

        $this->view('templates/header', $data);
        $this->view('adminPage/dashboard/index', $data);
        $this->view('templates/footer');
    }
}
