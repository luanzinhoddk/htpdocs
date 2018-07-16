<?php

require_once "ContaInvestimento.class.php";

class ContaAcao extends ContaInvestimento {

    private $percentual = 10 / 100; 

    public function rende(){
        $novoSaldo = parent::getSaldo() * (1 + $this->percentual);
        parent::setSaldo($novoSaldo);
    }
}