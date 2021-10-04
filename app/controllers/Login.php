<?php

namespace wms\app\controllers;

use MainPage;
use wms\app\core\Controller;
use wms\app\core\setSession;

class Login extends Controller implements MainPage
{
    public function __construct()
    {
        session_start();
    }

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

    public function setSession()
    {
        if (isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $dbConn = mysqli_connect("localhost", "root", "", "wms");

            $result = mysqli_query($dbConn, "SELECT * FROM pegawai 
                JOIN users ON pegawai.nik=users.nik WHERE username = '$username' ");

            // Cek berapa jumlah row yang di return
            if (mysqli_num_rows($result) === 1) {

                $row = mysqli_fetch_assoc($result);

                if ($password == $row["password"]) {

                    // level 2 : HR Manager
                    if ($row["level"] == 2) {

                        $_SESSION["login"] = true;
                        $_SESSION["username"] = $row["username"];
                        $_SESSION["nama_pegawai"] = $row["nama_pegawai"];
                        $_SESSION["gambar"] = $row["gambar"];
                        $_SESSION["nik"] = $row["nik"];

                        header("Location:" . BASEURL . "/login/loginAdmin");

                        exit;

                        // level 1 : pegawai
                    } else if ($row["level"] == 1) {

                        $redirect = $row["nik"];
                        header("Location: profilePegawai.php?nik=$redirect");

                        $_SESSION["nik"] = $row["nik"];
                        $_SESSION["login"] = true;
                        $_SESSION["username"] = $row["username"];
                        $_SESSION["nama_pegawai"] = $row["nama_pegawai"];
                        $_SESSION["gambar"] = $row["gambar"];

                        exit;
                    }
                }
            }
        }
    }

    public function loginAdmin()
    {
        $data['judul'] = "Halaman Dashboard";
        $data['link'] = [
            'dashboard' => 'active',
            'pegawai' => '',
            'kehadiran' => '',
            'profiles' => ''
        ];
        $data['countPegawai'] = $this->model('Pegawai')->countPegawai();
        $data['pegawai'] = $this->model('Pegawai')->getAllPegawai();
        $data['session_nama'] = $_SESSION["nama_pegawai"];

        $this->view('templates/header', $data);
        $this->view('adminPage/dashboard/index', $data);
        $this->view('templates/footer');
    }
}
