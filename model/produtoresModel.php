<?php

class ProdutoresModel{

    public $prdt_fk_id_produto,$prdt_fk_id_usuario,$prdt_cnpj;

    public function save()
    {
        include 'DAO/produtoresDAO.php';
        $dao = new ProdutoresDAO(); // conectando com o banco
        $dao->insert($this);
    }
}
?>