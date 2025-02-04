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
}
