<?php
########## DATABASE WRAPPER, UNTUK MENANGANI SEMUA CMD GENERIK DARI MYSQL QUERY
class Database
{
    private $host = DB_HOST;
    private $db_name = DB_NAME;
    private $user = DB_USER;
    private $pass = DB_PASS;

    private $dbh; // database handler
    private $stmt; // statement

    public function __construct()
    {
        // $dsn adalah data source name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

        $pilihan = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $pilihan);
        } catch (PDOException $e) { // Ambil eror dan masukkan ke dalam variable $e
            die($e->getMessage()); // jika terjadi kesalahan, maka akan menampilkan pesan kesalahan
        }
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query); ## Fungsi ini akan Generik untuk semua cmd database
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {  ## Cek type data yang datang dari Query, untuk mengamankan dari serangan
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
        $this->stmt->execute();
    }

    public function resultSet() # Tampilkan semua baris database
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single() # Tampilkan satu baris database
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}
