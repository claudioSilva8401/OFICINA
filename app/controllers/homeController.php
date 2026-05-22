<?php
class HomeController {

    public function index(){

        require 'app/views/cabecalho.php';
        require 'app/views/menu.php';
        require 'app/views/conteudo/home.php';
        require 'app/views/footer.php';
        require 'app/views/script.php';
    }  
    public function login(){

        require 'app/views/cabecalho.php';
        require 'app/views/menu.php';
        require 'app/views/conteudo/login.php';
        require 'app/views/footer.php';
        require 'app/views/script.php';
    }
}
?>