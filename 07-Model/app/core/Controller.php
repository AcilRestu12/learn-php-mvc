<?php

class Controller {

    // Method untuk menampilkan file
    public function view($view, $data=[]) {
        
        // Memanggil file yg akan ditampilkan
        require_once '../app/views/' . $view . '.php';

    }

    // Method untuk memanggil model
    public function model($model) {

        // Memanggil file yg akan ditampilkan
        require_once '../app/models/' . $model . '.php';

        // Menginstansiasi class model
        return new $model;
        
    }
    
    
}

?>


