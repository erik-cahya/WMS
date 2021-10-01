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

        $dbConn = mysqli_connect("localhost", "root", "", "wms");

        // if (!isset($_SESSION["login"])) {
        //     header("Location:" . BASEURL . "/pegawai");
        //     exit;
        // }

        if (isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $result = mysqli_query($dbConn, "SELECT * FROM pegawai 
            JOIN users ON pegawai.nik=users.nik WHERE username = '$username' ");

            // Cek berapa jumlah row yang di return
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);

                if ($password == $row["password"]) {

                    // level 2 : HR Manager
                    if ($row["level"] == 2) {
                        // header("Location:" . BASEURL . "/pegawai");

                        $_SESSION["login"] = true;
                        $_SESSION["username"] = $row["username"];
                        $_SESSION["nama_pegawai"] = $row["nama_pegawai"];
                        $_SESSION["gambar"] = $row["gambar"];
                        $_SESSION["nik"] = $row["nik"];

                        var_dump($_SESSION["username"]);
                        var_dump($_SESSION["nama_pegawai"]);
                        die();

                        exit;

                        // level 1 : pegawai
                    } else if ($row["level"] == 1) {

                        $redirect = $row["nik"];
                        // header("Location:" . BASEURL);
                        // header("Location: profilePegawai.php?nik=$redirect");

                        $_SESSION["nik"] = $row["nik"];
                        $_SESSION["login"] = true;
                        $_SESSION["username"] = $row["username"];
                        $_SESSION["nama_pegawai"] = $row["nama_pegawai"];
                        $_SESSION["gambar"] = $row["gambar"];

                        var_dump($_SESSION["username"]);
                        var_dump($_SESSION["nama_pegawai"]);
                        die();

                        exit;
                    }
                } else {
                    echo "Ini adalah Salah Password";
                }
            } else {
                echo "Ini adalah Salah Username";
            }
        }
    }
}
