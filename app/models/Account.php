<?php

namespace wms\app\models;

use wms\app\core\Database;

class Account
{
    private $database;

    // Instansiasi controller database
    public function __construct()
    {
        $this->database = new Database;
    }

    public function getDataAccountByNik($nik)
    {
        $this->database->query("SELECT * FROM users WHERE nik=$nik");
        return $this->database->single();
    }

    public function editDataAccount($data)
    {
        $id_user        = $data["id_user"];
        $nik            = $data["nik"];
        $password       = $data["password"];
        $username       = $data["username"];

        $query = "UPDATE users SET
            id_user = '$id_user',
            nik = '$nik',
            password = '$password',
            username = '$username'

            WHERE nik = '$nik'
        ";

        $this->database->query($query);
        $this->database->execute();

        return $this->database->rowCount();
    }

    public function addDataAccount($data)
    {
        $id_user        = $data["id_user"];
        $nik            = $data["nik"];
        $password       = $data["password"];
        $username       = $data["username"];

        $query = "INSERT INTO `users` (`id_user`, `nik`, `password`, `username`) VALUES (NULL, '$nik', '$password', '$username');

        ";

        $this->database->query($query);
        $this->database->execute();

        return $this->database->rowCount();
    }
}
