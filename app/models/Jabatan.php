<?php

namespace wms\app\models;

class Jabatan
{
    private $database;

    public function __construct()
    {
        $this->database = new \wms\app\core\Database;
    }

    // Query semua data pegawai
    public function getAllJabatan()
    {
        $this->database->query("SELECT * FROM jabatan");
        return $this->database->resultSet();
    }
}
