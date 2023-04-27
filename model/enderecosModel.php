<?php
class EnderecosModel{

    public $ende_rua,$ende_bairro,$ende_numero,$ende_cep,$ende_complemento,$ende_cidade;

    public function save()
    {
        include 'DAO/enderecosDAO.php';
        $dao = new EnderecosDAO(); // conectando com o banco
        $dao->insert($this);
    }
}

?>