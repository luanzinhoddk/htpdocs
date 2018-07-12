<?php 

require_once "Conta.class.php";

class ContaCorrente extends Conta {
    
    private $limite=0;

    public function getLimite() {
        return $this->limite;
    }

    public function setLimite($limite) {
        $this->limite = $limite;
    }

    public function saca($valor) {
        $saldoVirtual = parent::getSaldo() + $this->limite;
        if (is_numeric($valor) && $valor > 0 && $valor <= $saldoVirtual) {
            $novoSaldo = parent::getSaldo() - $valor;
            parent::setSaldo($novoSaldo);
            return true;
        }
        return false;
    }

}