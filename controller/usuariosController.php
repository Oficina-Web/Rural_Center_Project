<?php

    class UsuariosController{

        public static function cadastrarUsuario(){
            //var_dump cria um array com os dados do formulário
            //var_dump($_POST);
            include 'model/usuariosModel.php';

            $model = new UsuariosModel();
            $model->usua_nome = $_POST['nome'];
            $model->save();
            header("Location: /login");
        }

        public static function save(){
            include 'model/usuariosModel.php';
            
            $model = new UsuariosModel(); 
            $model->usua_nome = $_POST['nome'];
            $model->save();

        }
    }


?>