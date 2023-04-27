<?php

class CestasModel{

    public $cest_fk_id_prod,$cest_fk_id_prdt,$cest_quantidade,$cest_val_total;

    public function save()
    {
        include 'DAO/cestasDAO.php';
        $dao = new CestasDAO(); // conectando com o banco
        $dao->insert($this);
    }
}
?>