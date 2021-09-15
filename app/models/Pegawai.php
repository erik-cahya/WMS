<?php

namespace wms\app\models;


class Pegawai
{
    private $database;

    // Instansiasi controller database
    public function __construct()
    {
        $this->database = new \wms\app\core\Database;
    }

    // Query semua data pegawai
    public function getAllPegawai()
    {
        $this->database->query("SELECT * FROM pegawai JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan");
        return $this->database->resultSet();
    }

    // Get Pegawai By Nik
    public function getPegawaiByNik($nik)
    {
        $this->database->query("SELECT * FROM pegawai JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan WHERE nik=$nik");
        return $this->database->single();
    }

    // Search Data Pegawai
    public function searchDataPegawai()
    {
        $keyword = @$_POST["keyword"];
        $query = "SELECT * FROM pegawai JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan WHERE nama_pegawai LIKE '%$keyword%' OR nik LIKE '$keyword'";

        $this->database->query($query);

        return $this->database->resultSet();
    }

    // Add Data Pegawai
    public function addPegawai($data)
    {
        $nik = $data['nik'];
        $id_jabatan = $data['id_jabatan'];
        $nama_pegawai = $data['nama_pegawai'];
        $no_hp = $data['no_hp'];
        $level = $data['level'];

        $query = "INSERT INTO pegawai
        VALUES(
            '$nik',
            '$id_jabatan',
            '$nama_pegawai',
            NULL, 
            NULL,
            NULL,
            '$no_hp',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            '$level')
            ";
        $this->database->query($query);
        $this->database->execute();

        return $this->database->rowCount();
    }

    // Hitung Jumlah Pegawai
    public function countPegawai()
    {
        $this->database->query("SELECT COUNT(nik) FROM pegawai");
        return $this->database->single();
    }

    // Hapus Data Pegawai
    public function deletePegawai($nik)
    {
        $this->database->query("DELETE FROM pegawai WHERE nik = $nik");
        $this->database->execute();
        return $this->database->rowCount();
    }

    // Edit Data Pegawai
    public function editPegawai($data)
    {

        $nik = $data["nik"];
        $id_jabatan = $data["id_jabatan"];
        $nama_pegawai = $data["nama_pegawai"];
        $tempat_lahir = $data["tempat_lahir"];
        $tanggal_lahir = $data["tanggal_lahir"];
        $jenis_kelamin = $data["jenis_kelamin"];
        $no_hp = $data["no_hp"];
        $email = $data["email"];
        $alamat = $data["alamat"];
        $lulusan = $data["lulusan"];
        $skill = $data["skill"];
        $fb_links = $data["fb_links"];
        $ig_links = $data["ig_links"];
        $linked_links = $data["linked_links"];
        $gambarLama = $data["gambarLama"];
        $gambar = $data["gambar"];
        $level = $data["level"];


        $query = "UPDATE pegawai SET 
        nik = '$nik',
        id_jabatan = '$id_jabatan',
        nama_pegawai = '$nama_pegawai',
        tempat_lahir = '$tempat_lahir',
        tanggal_lahir = '$tanggal_lahir',
        jenis_kelamin = '$jenis_kelamin',
        no_hp = '$no_hp',
        email = '$email',
        alamat = '$alamat',
        lulusan = '$lulusan',
        skill = '$skill',
        fb_links = '$fb_links',
        ig_links = '$ig_links',
        linked_links = '$linked_links',
        gambar = '$gambar',
        level = '$level'

        WHERE nik = $nik;
        ";

        $this->database->query($query);
        $this->database->execute();

        return $this->database->rowCount();
    }
}
