<?php

class Flasher {

    // Method static agar dapat memanggil method-nya tanpa harus menginstansiasi

    // Method untuk mengatur pesan flash-nya 
    public static function setFlash($pesan, $aksi, $tipe) {

        // Menset session flash
        $_SESSION["flash"] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];

    }
    

    // Method untuk menampilkan pesan flash-nya
    public static function flash() {

        // Mengecek ada session flash atau tidak
        if ( isset($_SESSION["flash"]) ) {

            // Menampilkan pesan flash
            echo '  <div class="alert alert-' . $_SESSION["flash"]['tipe'] . ' alert-dismissible fade show" role="alert">
                        Data mahasiswa <strong>' . $_SESSION["flash"]['pesan'] . '</strong> ' . $_SESSION["flash"]['aksi'] . '
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                ';

            // Menghapus session flash
            unset($_SESSION["flash"]);
        }

    }
    
    
}

