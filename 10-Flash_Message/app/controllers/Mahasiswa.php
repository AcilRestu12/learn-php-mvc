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
    

    // Method untuk menambah data mahasiswa yg datanya diterima dari index.php di views mahasiswa dan disimpan di variable POST
    public function tambah() {

        // Menjalankan method tambahDataMahasiswa di dalam model Mahasiswa_model dan mengirimkan data POST ke method tersebut
        if ( $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0 ) {
            
            // Mengset pesan flash
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            
            // Meredirect url ke controller Mahasiswa
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;

        } 
        // Apabila data gagal ditambahkan
        else {

            // Mengset pesan flash
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            
            // Meredirect url ke controller Mahasiswa
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
            
        }
        
    }

}



