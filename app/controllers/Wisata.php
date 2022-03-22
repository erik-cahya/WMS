<?php

namespace wms\app\controllers;

use MainPage;
use wms\app\core\Controller;
use wms\app\core\Flasher;

class Wisata extends Controller implements MainPage
{

    public function index()
    {
        if (!$_SESSION['level'] == "pegawai" || !$_SESSION['level'] == "pegawai") {
            header('Location:' . BASEURL);
        };

        $data['judul'] = "Manage Objek Wisata";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => '',
            'kehadiran' => '',
            'cuti' => '',
            'wisata' => 'active',
            'profiles' => ''
        ];

        $data['wisata'] = $this->model('Wisata')->getDataWisata();

        $this->view('templates/header', $data);
        $this->view('objekWisataPage/index', $data);
        $this->view('templates/footer');
    }

    public function addWisata()
    {
        if ($this->model('Wisata')->addDataWisata($_POST) > 0) {
            Flasher::setFlash('Wisata Berhasil', 'Ditambah', 'success');
            header('Location:' . BASEURL . '/wisata');
            exit;
        } else {
            Flasher::setFlash('Wisata Gagal', 'Ditambah', 'danger');
            header('Location:' . BASEURL . '/wisata');
            exit;
        }
    }

    public function detailWisata($id_objek)
    {
        $data['judul'] = "Manage Objek Wisata";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => '',
            'kehadiran' => '',
            'cuti' => '',
            'wisata' => 'active',
            'profiles' => ''
        ];

        $data['wisata'] = $this->model('Wisata')->getDataWisataById($id_objek);

        $this->view('templates/header', $data);
        $this->view('objekWisataPage/editWisata', $data);
        $this->view('templates/footer');
    }

    public function searchWisata()
    {
        $data['judul'] = "Manage Objek Wisata";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => '',
            'kehadiran' => '',
            'cuti' => '',
            'wisata' => 'active',
            'profiles' => ''
        ];

        $data['wisata'] = $this->model('Wisata')->searchDataWisata();

        $this->view('templates/header', $data);
        $this->view('objekWisataPage/index', $data);
        $this->view('templates/footer');
    }

    public function editWisata()
    {
        if ($this->model('Wisata')->editDataWisata($_POST) > 0) {
            Flasher::setFlash('Wisata Berhasil', 'Diedit', 'success');
            header('Location:' . BASEURL . '/wisata');
            exit;
        } else {
            Flasher::setFlash('Wisata Gagal', 'Diedit', 'danger');
            header('Location:' . BASEURL . '/wisata');
            exit;
        }
    }

    public function deleteWisata($id_objek)
    {
        if ($this->model('Wisata')->deleteDataWisata($id_objek) > 0) {
            Flasher::setFlash('Wisata Berhasil', 'Dihapus', 'success');
            header('Location:' . BASEURL . '/wisata');
            exit;
        } else {
            Flasher::setFlash('Wisata Gagal', 'Dihapus', 'danger');
            header('Location:' . BASEURL . '/wisata');
            exit;
        }
    }
}
