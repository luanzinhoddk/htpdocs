
<?php

    require_once "classes/Cliente.class.php";   
    require_once "classes/ContaCorrente.class.php";
    require_once "classes/ContaPoupanca.class.php";
    require_once "classes/ContaAcao.class.php";
    require_once "classes/BancoDB.class.php";
?>
   
   
   <?php
    $rafael = new Cliente();
    $rafael->setNome('Rafael');
    $rafael->setCpf('087.879.456-89');
    $rafael->setEmail('Rafaboy@hotmail.com');

    $contaRafa = new ContaCorrente();
    $contaRafa->setCliente($rafael);
    $contaRafa->setAgencia("7123");
    $contaRafa->setNumero("59781-5");
    $contaRafa->setSaldo(1000.0);

    $luan = new Cliente();
    $luan->setNome('Luan');
    $luan->setCpf('701.087.594-40');
    $luan->setEmail('luandk2@hotmail.com');
    
    $contaLuan = new ContaCorrente();
    $contaLuan->setCliente($luan);
    $contaLuan->setAgencia("7123");
    $contaLuan->setNumero("32102-3");
    $contaLuan->setSaldo(1500.0);


    $banco = new BancoDB();

    //$banco->salva($contaRafa);
    //$banco->salva($contaLuan);


?>
<pre> <?php var_dump($banco->listaTodas()) ?> </pre>

