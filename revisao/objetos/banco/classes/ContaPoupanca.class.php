<?php

require_once "ContaInvestimento.class.php";

class ContaPoupanca extends ContaInvestimento {

    private $percentual = 1 / 100; 

    public function rende(){
        $novoSaldo = parent::getSaldo() * (1 + $this->percentual);
        parent::setSaldo($novoSaldo);
    }
}