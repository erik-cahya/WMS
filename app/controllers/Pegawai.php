<?php

namespace wms\app\controllers;

use MainPage;
use wms\app\core\Controller;
use wms\app\core\Flasher;

class Pegawai extends Controller implements MainPage
{

    public function index()
    {
        if (!$_SESSION['level'] == "pegawai" || !$_SESSION['level'] == "pegawai") {
            header('Location:' . BASEURL);
        };

        $data['judul'] = "Halaman Pegawai";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => 'active',
            'kehadiran' => '',
            'wisata' => '',
            'profiles' => ''
        ];
        $data['session_nama'] = $_SESSION["nama_pegawai"];

        $data['query'] = $this->model('Pegawai')->getAllPegawaiByLevel();
        $data['jabatan'] = $this->model('Jabatan')->getAllJabatan();

        $this->view('templates/header', $data);
        $this->view('adminPage/pegawai/index', $data);
        $this->view('templates/footer');
    }

    public function detail($nik)
    {
        $data['judul'] = "Detail Pegawai";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => 'active',
            'kehadiran' => '',
            'wisata' => '',
            'cuti' => '',
            'profiles' => ''
        ];

        $data['query'] = $this->model('Pegawai')->getPegawaiByNik($nik);
        $data['jabatan'] = $this->model('Jabatan')->getAllJabatan();
        $data['dataAccount'] = $this->model('Account')->getDataAccountByNik($nik);

        $this->view('templates/header', $data);
        $this->view('adminPage/pegawai/detail', $data);
        $this->view('templates/footer');
    }

    public function search()
    {
        $data['judul'] = "Halaman Pegawai";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => 'active',
            'kehadiran' => '',
            'wisata' => '',
            'profiles' => ''
        ];

        $data['query'] = $this->model('Pegawai')->searchDataPegawai();
        $data['jabatan'] = $this->model('Jabatan')->getAllJabatan();

        $this->view('templates/header', $data);
        $this->view('adminPage/pegawai/index', $data);
        $this->view('templates/footer');
    }

    public function addPegawai()
    {
        if ($this->model('Pegawai')->addPegawai($_POST) > 0) {
            Flasher::setFlash('Pegawai berhasil', ' ditambahkan', 'success');
            header('Location: ' . BASEURL . '/pegawai');
            exit;
        } else {
            Flasher::setFlash('Pegawai gagal', ' ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/pegawai');
            exit;
        }
    }

    public function deletePegawai($nik)
    {
        if ($this->model('Pegawai')->deletePegawai($nik) > 0) {
            Flasher::setFlash('Pegawai berhasil', ' dihapus', 'success');
            header('Location: ' . BASEURL . '/pegawai');
            exit;
        } else {
            Flasher::setFlash('Pegawai gagal', ' dihapus', 'danger');
            header('Location: ' . BASEURL . '/pegawai');
            exit;
        }
    }

    public function editPegawai()
    {
        if ($_SESSION["level"] == "admin") {
            if ($this->model('Pegawai')->editPegawai($_POST) > 0) {
                header('Location: ' . BASEURL . '/pegawai');
            }
        } else if ($_SESSION["level"] == "pegawai") {
            if ($this->model('Pegawai')->editPegawai($_POST) > 0) {
                header('Location: ' . BASEURL . '/absensi/absensiPegawai');
            }
        }
    }

    public function editUserAccount()
    {
        if ($this->model('Account')->editDataAccount($_POST) > 0) {
            Flasher::setFlash('Password berhasil', ' diubah', 'success');
            header('Location: ' . BASEURL . '/pegawai');
        } else {
            Flasher::setFlash('Password gagal', ' diubah', 'danger');
            header('Location: ' . BASEURL . '/pegawai');
        }
    }

    public function addUserAccount()
    {
        if ($this->model('Account')->addDataAccount($_POST) > 0) {
            Flasher::setFlash('Account berhasil', ' ditambahkan', 'success');
            header('Location: ' . BASEURL . '/pegawai');
            exit;
        } else {
            Flasher::setFlash('Account gagal', ' ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/pegawai');
            exit;
        }
    }
}
