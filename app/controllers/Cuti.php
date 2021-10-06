<?php

namespace wms\app\controllers;

use MainPage;
use wms\app\core\Controller;
use wms\app\core\Flasher;

class Cuti extends Controller implements MainPage
{
    public function index()
    {
        $data['judul'] = "Pengajuan Cuti Pegawai";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => '',
            'kehadiran' => 'active',
            'profiles' => ''
        ];

        $this->view('templates/header', $data);
        $this->view('pegawaiPage/cuti/index');
        $this->view('templates/footer');
    }

    public function cutiPegawai()
    {
        $data['judul'] = "Pengajuan Cuti Pegawai";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => '',
            'kehadiran' => 'active',
            'profiles' => ''
        ];

        $data["dataCuti"] = $this->model('Cuti')->getDataCuti();

        $this->view('templates/header', $data);
        $this->view('pegawaiPage/cuti/index', $data);
        $this->view('templates/footer');
    }

    public function addCutiPegawai()
    {

        if ($this->model('Cuti')->addDataCuti($_POST) > 0) {

            Flasher::setFlash('Cuti Berhasil', 'Diajukan', 'success');
            header('Location:' . BASEURL . '/cuti/cutiPegawai');
            exit;
        } else {
            Flasher::setFlash('Cuti Gagal', 'Diajukan', 'danger');
            header('Location:' . BASEURL . '/cuti/cutiPegawai');
            exit;
        }
    }
}
