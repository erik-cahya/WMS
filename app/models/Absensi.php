<?php

namespace wms\app\models;

use wms\app\core\Database;

class Absensi
{
    private $database;

    // Instansiasi controller database
    public function __construct()
    {
        $this->database = new Database;
    }

    // Get data departemen from database
    public function getDataAbsensi()
    {
        $this->database->query("SELECT * FROM absensi JOIN pegawai ON absensi.nik=pegawai.nik JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan");
        return $this->database->resultSet();
    }

    public function getDataCutiByNik($nik)
    {
        $this->database->query("SELECT * FROM cuti WHERE nik='$nik'");
        return $this->database->single();
    }

    public function countDataAbsensi()
    {
        $this->database->query("SELECT COUNT(id_absensi) FROM absensi");
        return $this->database->single();
    }
}
