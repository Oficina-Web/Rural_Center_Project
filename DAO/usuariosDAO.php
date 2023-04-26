<?php

include "utils/conexao.php";
class UsuariosDAO
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::ConexaoBanco();
    }

    public function insert(UsuariosModel $model)
    {
        $sql = "INSERT INTO usuarios (usua_nome,usua_email,usua_telefone,usua_senha,usua_tipo) VALUES (?,?,?,?,?)";
        $stmt = $this->conexao->prepare($sql); // prepara a conexão igual no java
        $stmt->bindValue(1,$model->usua_nome); // passando o valor para a posição do insert
        $stmt->bindValue(2,$model->usua_email);
        $stmt->bindValue(3,$model->usua_telefone);
        $stmt->bindValue(4,$model->usua_senha);
        $stmt->bindValue(5,$model->usua_tipo);
        $stmt->execute(); // executa o sql

    }

    public function update(UsuariosModel $model)
    {
    }

    public function select()
    {
    }
}
?>