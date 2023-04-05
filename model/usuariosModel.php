<?php
class UsuariosModel
{
    public $usua_nome;

    public function save()
    {
        include 'DAO/usuariosDAO.php';
        $dao = new UsuariosDAO(); // conextando com o banco
        $dao->insert($this);
    }
}