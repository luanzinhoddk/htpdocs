<?php 

require_once 'Cliente.class.php';

class Conta {

    private $cliente;
    private $agencia;
    private $numero;
    private $saldo;

    public function getCliente() {
        return $this->cliente;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function getAgencia() {
        return $this->cliente;
    }

    public function setAgencia($agencia) {
        $this->agencia = $agencia;
    }

    public function getNumero() {
        return $this->numero;
    }   

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

}