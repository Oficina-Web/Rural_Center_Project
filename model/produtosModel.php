<?php

class ProdutosModel{

    public $prod_descricao,$prod_categoria,$prod_val_unit,$prod_quant,$prod_status;

    public function save()
    {
        include 'DAO/produtosDAO.php';
        $dao = new ProdutosDAO(); // conectando com o banco
        $dao->insert($this);
    }
}
?>