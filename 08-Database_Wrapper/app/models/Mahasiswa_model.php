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

    // Variabel untuk menampung nama tabel
    private $table = 'mahasiswa';

    // Variabel untuk menampung class database
    private $db;

    
    public function __construct() {

        // Menginstansiasi class Database
        $this->db = new Database;
    }


    // Method untuk mengambil semua data mahasiswa
    public function getAllMahasiswa() {
        // Melakukan query pada database
        $this->db->query('SELECT * FROM ' . $this->table);
        
        // Mengambil semua datanya
        return $this->db->resultSet();
    }


    // Method untuk mengambil data mahasiswa dari idnya
    public function getMahasiswaById($id) {
        // Melakukan query
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');

        // Melakukan binding
        $this->db->bind('id', $id);

        // Mereturn data mahasiswa sesuai idnya
        return $this->db->single();
    }
    
    
    
}

