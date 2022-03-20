<?php

namespace wms\app\models;

use wms\app\core\Database;

class Jabatan
{
    private $database;

    public function __construct()
    {
        $this->database = new Database;
    }

    // Query semua data pegawai
    public function getAllJabatan()
    {
        $this->database->query("SELECT * FROM jabatan");
        return $this->database->resultSet();
    }
}
