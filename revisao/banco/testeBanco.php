<?php

    require_once "classes/Cliente.class.php";

    $luan = new Cliente('ag: 2123/32102-3', 'Luan C Silva', '850.00', '0.25');
    $hudson = new Cliente('ag: 2123/31879-5', 'Hudson D Silva', '1500.00', '0.25');

    echo "Conta: {$luan->getConta()}, Nome: {$luan->getTitular()}, Saldo: {$luan->getSaldo()}, Especial: {$luan->getEspecial()}";
    echo "Conta: {$hudson->getConta()}, Nome: {$hudson->getTitular()}, Saldo: {$hudson->getSaldo()}, Especial: {$hudson->getEspecial()}";

    

