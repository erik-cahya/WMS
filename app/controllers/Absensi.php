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
            'kehadiran' => 'active',
            'profiles' => ''
        ];
        $data['session_nama'] = $_SESSION["nama_pegawai"];

        $data['pegawai'] = $this->model('Pegawai')->getAllPegawai();
        $data['cuti'] = $this->model('Cuti')->getDataCuti();
        $data['absensi'] = $this->model('Absensi')->getDataAbsensi();

        $this->view('templates/header', $data);
        $this->view('adminPage/absensi/index', $data);
        $this->view('templates/footer');
    }

    public function addAbsensiPegawai()
    {
        $data['judul'] = "Manage Kehadiran Pegawai";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => '',
            'kehadiran' => 'active',
            'profiles' => ''
        ];
        $data['session_nama'] = $_SESSION["nama_pegawai"];
        $data["absensi"] = $this->model('Absensi')->getDataAbsensi();

        $this->view('templates/header', $data);
        $this->view('pegawaiPage/absensi/index', $data);
        $this->view('templates/footer');
    }
}
