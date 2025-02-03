<?php

class Mahasiswa_model
{
    private $dbh; // database handler
    private $stmt; // statement

    public function __construct()
    {
        // $dsn adalah data source name
        $dsn = 'mysql:host=localhost;dbname=mvc-oop';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) { // Ambil eror dan masukkan ke dalam variable $e
            die($e->getMessage()); // jika terjadi kesalahan, maka akan menampilkan pesan kesalahan
        }
    }
    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
