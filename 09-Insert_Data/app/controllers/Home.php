<?php


class Home extends Controller {
    public function index() {
        
        // Mengirim data judul
        $data['judul'] = 'Home';

        // Memanggil method getUser di model User_model
        $data['nama'] = $this->model('User_model')->getUser();
        
        // Memanggil method view untuk menampilkan file sesuai dengan lokasi file
        $this->view('templates/header', $data);         // Memanggil file header html
        $this->view('home/index', $data);               // Memanggil file index di folder home dan mengirim data ke viewnya
        $this->view('templates/footer');                // Memanggil file footer html

    }
}