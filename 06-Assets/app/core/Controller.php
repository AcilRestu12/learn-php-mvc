<?php

class Controller {

    // Method untuk menampilkan file
    public function view($view, $data=[]) {
        
        // Memanggil file yg akan ditampilkan
        require_once '../app/views/' . $view . '.php';

    }
}

?>


