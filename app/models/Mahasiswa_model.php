<?php

class Mahasiswa_model
{
    private $tabel = "mahasiswa";
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }
    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->tabel);
        return $this->db->resultSet();
    }

    public function getMahasiswaByID($id)
    {
        $this->db->query('SELECT * FROM ' . $this->tabel . ' WHERE id=:id'); ## ID variabel harus di bind, spy tidak kena SQL Injection
        $this->db->bind('id', $id); ## 'id' ==> menunjuk id dari Query di atas.
        return $this->db->single(); ## single() digunakan untuk mengambil satu data saja.
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO $this->tabel VALUES (null, :nama, :nim, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();
        return $this->db->rowCount(); ## mengembalikan jumlah baris yang diupdate.
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM $this->tabel WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount(); ## mengembalikan jumlah baris yang diupdate.
    }
}
