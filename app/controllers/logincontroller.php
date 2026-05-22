<?php
class LoginController {

    public function login(){

        require 'app/views/cabecalho.php';
        require 'app/views/menu.php';
        require 'app/views/conteudo/login.php';
        require 'app/views/footer.php';
        require 'app/views/script.php';
    }public function singup(){

        require 'app/views/cabecalho.php';
        require 'app/views/menu.php';
        require 'app/views/conteudo/sing.php';
        require 'app/views/footer.php';
        require 'app/views/script.php';
    }
}
?>