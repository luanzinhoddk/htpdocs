<?php

require_once "Conta.class.php";

abstract class ContaInvestimento extends Conta {
    
    private $rendimento;
    
    public function getRendimento() {
        return $this->rendimento;
    }

    public function setRendimento($rendimento ) {
        $this->rendimento = $rendimento;
    }

    public function saca($valor) {
        if (is_Numeric($valor) && $valor > 0 && $valor <= parent::getSaldo()) {
            $novoSaldo = parent::getSaldo() - $valor;
            parent::setSaldo($novoSaldo);
            return true;
        }
        return false; 
    }

    public abstract function rende();

}