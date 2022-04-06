<?php

class Database {

    // Variabel untuk data database dari conifg/conifg.php 
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    // Variabel untuk koneksi ke database
    private $dbh;       // Data base handler, yg berfungsi untuk menampung koneksi ke database
    private $stmt;      // statement, yg berfungsi untuk menampung query

    
    // Method __contruct() agar setiap kali Database.php dipanggil langsung melakukan koneksi ke database
    public function __construct() {
        // Data source name, yg berfungsi untuk menampung identitas server
        $dsn = 'mysql:host='. $this->host . ';dbname='. $this->db_name;

        // Option, berfungsi untuk mengoptimasi koneksi ke database
        $option = [                                         // Isinya konfigurasi dari parameter-parameternya
            PDO::ATTR_PERSISTENT => true,                   // Agar koneksi ke database terjaga
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION     // Agar menampilkan error-nya
        ];
        
        // Mengecek apakah koneksinya berhasil atau tidak
        try {
            // Melakukan koneksi dengan PDO
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        }
        // Menangkap error dan menampungnya di variabel $e
        catch(PDOException $e) {
            // Menghentikan program dan memberi pesan error-nya
            die($e->getMessage());
        }

    }


    // Method untuk melakukan query
    public function query($query) {
        $this->stmt = $this->dbh->prepare($query);
    }

    // Method untuk binding data
    public function bind($param, $value, $type = null) {
        if ( is_null($type) ) {
            switch( true ) {
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);

    }


    // Method untuk melakukan eksekusi query
    public function execute() {
        $this->stmt->execute();
    }


    // Method untuk mendatapatkan semua datanya
    public function resultSet() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    // Method untuk mendatapatkan satu datanya
    public function single() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }


    // Method untuk menghitung ada berapa baris yg baru berubah di dalam suatu tabel
    public function rowCount() {
        return $this->stmt->rowCount();     // rowCount di sini merupakan method milik PDO
    }

    
    

}




