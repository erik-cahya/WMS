<?php

namespace wms\app\controllers;

use MainPage;
use wms\app\core\Controller;
use wms\app\core\Flasher;

class Absensi extends Controller implements MainPage
{


    public function index()
    {
        if (!$_SESSION['level'] == "admin" || !$_SESSION['level'] == "pegawai") {
            header('Location:' . BASEURL);
        };

        $data['judul'] = "Manage Kehadiran Pegawai";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => '',
            'cuti' => '',
            'kehadiran' => 'active',
            'wisata' => '',
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

    public function absensiPegawai()
    {
        $data['judul'] = "Manage Kehadiran Pegawai";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => '',
            'cuti' => '',
            'kehadiran' => 'active',
            'wisata' => '',
            'profiles' => ''
        ];
        $data['session_nama'] = $_SESSION["nama_pegawai"];
        $data["absensi"] = $this->model('Absensi')->getDataAbsensi();

        $this->view('templates/header', $data);
        $this->view('pegawaiPage/absensi/index', $data);
        $this->view('templates/footer');
    }

    public function addAbsensi()
    {
        if ($this->model('Absensi')->addDataAbsensi($_POST) > 0) {
            Flasher::setFlash('Absensi Berhasil', 'Dilakukan', 'success');
            header('Location:' . BASEURL . '/absensi/absensiPegawai');
        } else {
            Flasher::setFlash('Absensi Berhasil', 'Dilakukan', 'success');
            header('Location:' . BASEURL . '/absensi/absensiPegawai');
        }
    }
}
