<?php


class Home extends Controller {
    public function index() {
        
        // Mengirim data judul
        $data['judul'] = 'Home';
        
        // Memanggil method view untuk menampilkan file sesuai dengan lokasi file
        $this->view('templates/header', $data);         // Memanggil file header html
        $this->view('home/index');                      // Memanggil file index di folder home
        $this->view('templates/footer');                // Memanggil file footer html

    }
}