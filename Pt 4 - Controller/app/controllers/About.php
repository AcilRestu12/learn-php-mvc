<?php

class About {
    public function index($nama = 'acil', $pekerjaan = 'maba') {
        echo "Hallo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    
    public function page() {
        echo 'About/page';
    }
}

?>
