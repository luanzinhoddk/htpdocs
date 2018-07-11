<pre>
<?php

    require_once "classes/Conta.class.php";
    require_once "classes/Cliente.class.php";

    $contaRafa = new Conta();

    $contaRafa->setAgencia("121354-2");
    $contaRafa->setNumero("12345-5");
    $contaRafa->setSaldo(1350.78);
    $contaRafa->setCliente('Rafael');

    $rafael = new Cliente();
    $rafael->setNome('Rafael');
    $rafael->setEmail('rafaboy@gmail.com');

    $contaRafa->setCliente($rafael);

    var_dump($contaRafa);
?>
</pre>
