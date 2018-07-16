<?php 

require_once "Conta.class.php";

class ContaCorrente extends Conta {
    
   private static $qtdContas = 0;
   
    private $limite=0;

    private $taxa=0.10;
   // private const TAXA = 0.50;

    public function __construct() {
        self::$qtdContas++;
    }


    public function getLimite() {
        return $this->limite;
    }

    public function setLimite($limite) {
        $this->limite = $limite;
    }

    public function saca($valor) {
        $saldoVirtual = parent::getSaldo() + $this->limite + $this->taxa;
        if (is_numeric($valor) && $valor > 0 && $valor <= $saldoVirtual) {
            $novoSaldo = parent::getSaldo() - $valor - $this->taxa;
            parent::setSaldo($novoSaldo);
            return true;
        }
        return false;
    }

 /*   public function saca($valor) {
        $saldoVirtual = parent::getSaldo() + $this->limite + self::TAXA;
        if (is_numeric($valor) && $valor > 0 && $valor <= $saldoVirtual) {
            $novoSaldo = parent::getSaldo() - $valor - self::TAXA;
            parent::setSaldo($novoSaldo);
            return true;
        }
        return false;
    } 
*/

        public static function getQuantidadeContas() {
            return self::$qtdContas;
        }
}