<?php

class About extends Controller {
    
    public function index($nama = 'acil', $pekerjaan = 'maba', $umur = '16') {

        // Mengirimkan data ke file view
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;

        // Mengirim data judul
        $data['judul'] = 'About Me';
        
        // Memanggil file about/index.php
        $this->view('templates/header', $data);         // Memanggil file header html
        $this->view('about/index', $data);              // Memanggil file about/page.php
        $this->view('templates/footer');                // Memanggil file footer html
    }
    
    public function page() {

        // Mengirim data judul
        $data['judul'] = 'Pages';
        
        // Memanggil file about/page.php
        $this->view('templates/header', $data);         // Memanggil file header html
        $this->view('about/page');                      // Memanggil file about/page.php
        $this->view('templates/footer');                // Memanggil file footer html
    }
}

?>
