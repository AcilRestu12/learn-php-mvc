<?php

class Mahasiswa_model {
    /*
    private $mhs = [
        [
            'nama'      => 'Arieska Restu',
            'nim'       => '1234',
            'email'     => 'arieskarestu214@gmail.com',
            'jurusan'   => 'Teknik Informatika'
        ],
        [
            'nama'      => 'Evory Restu',
            'nim'       => '2345',
            'email'     => 'evoryrestu321@gmail.com',
            'jurusan'   => 'Teknik Industri'
        ],
        [
            'nama'      => 'Ebony Restu',
            'nim'       => '3456',
            'email'     => 'ebonyrestu321@gmail.com',
            'jurusan'   => 'Teknik Sipil'
        ]
    ];
    */

    // Data base handler, yg berfungsi untuk menampung koneksi ke database
    private $dbh;

    // statement, yg berfungsi untuk menampung query
    private $stmt;

    // Method __contruct() agar setiap kali model Mahasiswa_model dipanggil langsung melakukan koneksi ke database
    public function __construct() {
        // Data source name, yg berfungsi untuk menampung identitas server
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        // Mengecek apakah koneksinya berhasil atau tidak
        try {
            // Melakukan koneksi dengan PDO
            $this->dbh = new PDO($dsn, 'root', '');
        }
        // Menangkap error dan menampungnya di variabel $e
        catch(PDOException $e) {
            // Menghentikan program dan memberi pesan error-nya
            die($e->getMessage());
        }
        
    }

    // Method untuk mengambil semua data mahasiswa
    public function getAllMahasiswa() {
        // Melakukan query pada database
        $this-> stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        
        // Melakukan eksekusi untuk query-nya
        $this->stmt->execute();

        // Mengambil datanya dan direturn sebagai array associative 
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
    
}

