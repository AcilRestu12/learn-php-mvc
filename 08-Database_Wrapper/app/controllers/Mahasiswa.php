<?php

class Mahasiswa extends Controller {

    // Method untuk menampilkan index.php
    public function index() {

        // Mengirim data judul
        $data['judul'] = 'Daftar Mahasiswa';

        // Memanggil data mahasiswa dari controller Mahasiswa
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        
        $this->view('templates/header', $data);         // Memanggil file header html
        $this->view('mahasiswa/index', $data);          // Memanggil file index di folder mahasiswa dan mengirim data ke viewnya
        $this->view('templates/footer');                // Memanggil file footer html
         
        
    } 

    // Method untuk menampilkan detail.php
    public function detail($id) {

        // Mengirim data judul
        $data['judul'] = 'Detail Mahasiswa';

        // Memanggil data mahasiswa dari id di url
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        
        $this->view('templates/header', $data);         // Memanggil file header html
        $this->view('mahasiswa/detail', $data);         // Memanggil file detail di folder mahasiswa dan mengirim data ke viewnya
        $this->view('templates/footer');                // Memanggil file footer html
         
        
    } 
    

}



