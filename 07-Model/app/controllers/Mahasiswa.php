<?php

class Mahasiswa extends Controller {

    public function index() {

        // Mengirim data judul
        $data['judul'] = 'Daftar Mahasiswa';

        // Memanggil data mahasiswa dari controller Mahasiswa
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        
        $this->view('templates/header', $data);         // Memanggil file header html
        $this->view('mahasiswa/index', $data);          // Memanggil file index di folder mahasiswa dan mengirim data ke viewnya
        $this->view('templates/footer');                // Memanggil file footer html
         
        
    } 
    
    
}



