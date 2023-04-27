<?php
class UsuariosModel
{
    public $usua_nome, $usua_email,$usua_telefone, $usua_senha, $usua_tipo;

    public function save()
    {
        include 'DAO/usuariosDAO.php';
        $dao = new UsuariosDAO(); // conectando com o banco
        $dao->insert($this);
    }
}

?>