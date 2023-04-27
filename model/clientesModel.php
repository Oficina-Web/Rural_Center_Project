<?php

class ClientesModel{

    public $clie_fk_id_usuario,$clie_fk_id_ende;

    public function save()
    {
        include 'DAO/clientesDAO.php';
        $dao = new ClientesDAO(); // conectando com o banco
        $dao->insert($this);
    }
}
?>