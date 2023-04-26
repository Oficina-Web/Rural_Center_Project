<?php

class Conexao{
    public static function ConexaoBanco()
    {
        $nomeBanco = "projetoagro";
        $senha = "123456";
        $usuario = "root";
        $hostName = "localhost:3306";
        $dataSource = "mysql:host=$hostName;dbname=$nomeBanco";
        //PDO = php data objects -- passar os dados do banco
        return new PDO($dataSource,$usuario,$senha);
       //$this->conexao = new PDO($dataSource,$usuario,$senha);
    }
}


?>