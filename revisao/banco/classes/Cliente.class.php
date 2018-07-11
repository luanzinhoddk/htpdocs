<?php

class Cliente{

    protected $conta;
    protected $titular;
    protected $saldo;
    protected $especial;

    function __construct($conta, $titular, $saldo, $especial){

        $this->setConta($conta);
        $this->setTitular($titular);
        $this->setSaldo($saldo);
        $this->setEspecial($especial);
    }

    function setConta($conta) {
        $this->conta = $conta;
        if ($conta <= 100000) {
            return true;
        } else {
            return false;
        }
    }

    function getConta() {
        return $this->conta;
    }

    function setTitular($titular) {
        $qtd = strlen($titular);
        if ($qtd >= 2){
            $this->titular = strtoupper($titular);
        } else {
            $this->titular = '';
        }
    }

    function getTitular() {
        return $this->titular;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function setEspecial($especial) {
        $this->especial = $especial;
    }

    function getEspecial() {
        return $this->especial * $this->saldo = $this->saldo;
    }
}