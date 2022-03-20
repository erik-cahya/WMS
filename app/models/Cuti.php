<?php

namespace wms\app\models;

use wms\app\core\Database;

class Cuti
{
    private $database;

    // Instansiasi controller database
    public function __construct()
    {
        $this->database = new Database;
    }

    // Get data departemen from database
    public function getDataCuti()
    {
        $this->database->query("SELECT * FROM cuti JOIN pegawai ON cuti.nik=pegawai.nik JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan");
        return $this->database->resultSet();
    }

    public function getDataCutiByNik($nik)
    {
        $this->database->query("SELECT * FROM cuti WHERE nik='$nik'");
        return $this->database->single();
    }

    public function countDataCuti()
    {
        $this->database->query("SELECT COUNT(id_cuti) FROM cuti");
        return $this->database->single();
    }

    public function addDataCuti($data)
    {
        $nik = $data["nik"];
        $mulai_cuti = $data["mulai_cuti"];
        $selesai_cuti = $data["selesai_cuti"];
        $keterangan = $data["keterangan"];
        $status = "pending";

        $query = "INSERT INTO `cuti` (`id_cuti`, `nik`, `mulai_cuti`, `selesai_cuti`, `keterangan`, `status`) VALUES (NULL, '$nik', '$mulai_cuti', '$selesai_cuti', '$keterangan', '$status');
        ";
        $this->database->query($query);
        $this->database->execute();

        return $this->database->rowCount();
    }
}
