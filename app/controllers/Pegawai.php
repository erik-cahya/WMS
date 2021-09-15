<?php

namespace wms\app\controllers;

use MainPage;

class Pegawai extends \wms\app\core\Controller implements MainPage
{
    public function index()
    {
        $data['judul'] = "Halaman Pegawai";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => 'active',
            'kehadiran' => ''
        ];

        $data['query'] = $this->model('Pegawai')->getAllPegawai();
        $data['jabatan'] = $this->model('Jabatan')->getAllJabatan();

        $this->view('templates/header', $data);
        $this->view('admin/pegawai/index', $data);
        $this->view('templates/footer');
    }

    public function detail($nik)
    {
        $data['judul'] = "Detail Pegawai";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => 'active',
            'kehadiran' => ''
        ];

        $data['query'] = $this->model('Pegawai')->getPegawaiByNik($nik);
        $data['jabatan'] = $this->model('Jabatan')->getAllJabatan();
        $this->view('templates/header', $data);
        $this->view('admin/pegawai/detail', $data);
        $this->view('templates/footer');
    }

    public function search()
    {
        $data['judul'] = "Halaman Pegawai";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => 'active',
            'kehadiran' => ''
        ];

        $data['query'] = $this->model('Pegawai')->searchDataPegawai();
        $data['jabatan'] = $this->model('Jabatan')->getAllJabatan();

        $this->view('templates/header', $data);
        $this->view('admin/pegawai/index', $data);
        $this->view('templates/footer');
    }

    public function addPegawai()
    {
        if ($this->model('Pegawai')->addPegawai($_POST) > 0) {
            header('Location: ' . BASEURL . '/pegawai');
        } else {
            header('Location: ' . BASEURL . '/pegawai');
        }
    }

    public function deletePegawai($nik)
    {
        if ($this->model('Pegawai')->deletePegawai($nik) > 0) {
            header('Location: ' . BASEURL . '/pegawai');
        } else {
            header('Location: ' . BASEURL . '/pegawai');
        }
    }

    public function editPegawai()
    {
        if ($this->model('Pegawai')->editPegawai($_POST) > 0) {
            header('Location: ' . BASEURL . '/pegawai');
        }
    }
}
