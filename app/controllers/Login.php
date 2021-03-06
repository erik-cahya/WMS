<?php

namespace wms\app\controllers;

use MainPage;
use wms\app\core\Controller;

class Login extends Controller implements MainPage
{

    public function index()
    {

        if (isset($_SESSION["level"]) == "admin") {
            header('Location:' . BASEURL . '/dashboard_admin');
        }

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

            $dbConn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

            $result = mysqli_query($dbConn, "SELECT * FROM pegawai 
                JOIN users ON pegawai.nik=users.nik WHERE username = '$username' ");

            // Cek berapa jumlah row yang di return
            if (mysqli_num_rows($result) === 1) {

                $row = mysqli_fetch_assoc($result);

                if ($password == $row["password"]) {



                    // level 2 : Admin
                    if ($row["level"] == "admin") {

                        $_SESSION["login"] = true;
                        $_SESSION["username"] = $row["username"];
                        $_SESSION["nama_pegawai"] = $row["nama_pegawai"];
                        $_SESSION["gambar"] = $row["gambar"];
                        $_SESSION["nik"] = $row["nik"];
                        $_SESSION["level"] = $row["level"];

                        header("Location:" . BASEURL . "/dashboard_admin");


                        exit;

                        // level 1 : pegawai
                    } else if ($row["level"] == "pegawai") {

                        $_SESSION["login"] = true;
                        $_SESSION["username"] = $row["username"];
                        $_SESSION["nama_pegawai"] = $row["nama_pegawai"];
                        $_SESSION["gambar"] = $row["gambar"];
                        $_SESSION["nik"] = $row["nik"];
                        $_SESSION["level"] = $row["level"];

                        header("Location:" . BASEURL . "/absensi/absensiPegawai");

                        exit;
                    }
                } else {
                    echo 'Password anda salah';
                }
            } else {
                echo 'Account Invalid';
            }
        }
    }
}
