<?php
    class RotasController{

        public static function paginaInicial(){
            include 'view/tela_principal.php';
        }
        public static function cadastro(){
            include 'view/tela_cadastro.php';
        }
        public static function login(){
            include 'view/tela_login.php';
        }
    }

?>