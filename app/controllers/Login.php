<?php

namespace wms\app\controllers;

use MainPage;
use wms\app\core\Controller;

class Login extends Controller implements MainPage
{

    public function index()
    {
        $data['judul'] = "WMS Login";
        $data['link'] = [
            'dashboard' => '',
            'pegawai' => '',
            'kehadiran' => 'active',
            'profiles' => ''
        ];

        $this->view('loginPage/index', $data);
    }

    public function loginUser()
    {
        if (isset($_SESSION["login"])) {
            header("Location:" . BASEURL . "/pegawai");
            exit;
        }

        if (isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            var_dump($_POST);
        }
    }
}
