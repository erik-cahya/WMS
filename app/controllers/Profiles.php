<?php

namespace wms\app\controllers;

use MainPage;
use wms\app\core\Controller;

class Profiles extends Controller implements MainPage
{
    public function index()
    {
        $data['judul'] = "Profiles";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => '',
            'kehadiran' => '',
            'profiles' => 'active'
        ];


        $this->view('templates/header', $data);
        $this->view('admin/profiles/index', $data);
        $this->view('templates/footer');
    }
}
