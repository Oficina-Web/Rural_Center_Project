<?php
class UsuariosDAO
{

    private $conexao;

    public function __construct()
    {
        $dataSource = "mysql:host=localhost:3306;dbname=projetoagro";
        //PDO = php data objects -- passar os dados do banco
        $this->conexao = new PDO($dataSource,'root','123456');
    }

    public function insert(UsuariosModel $model)
    {
        $sql = "INSERT INTO usuarios (usua_nome) VALUES (?)";
        $stmt = $this->conexao->prepare($sql); // prepara a conexão igual no java
        $stmt->bindValue(1,$model->usua_nome); // passando o valor para a posição do insert
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