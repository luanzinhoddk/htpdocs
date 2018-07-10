<?php

    require_once 'classes/Pessoa.class.php';
    require_once 'classes/Cliente.class.php';

    $cliente = new Cliente('Luan', '701.087.594-40', 19, 'm', '1245');

    echo "  Nome: {$cliente->getNome()},
            Cpf: {$cliente->getCpf()},
            Idade: {$cliente->getIdade()},
            Sexo: {$cliente->getSexo()},
            Conta: {$cliente->getCartao()}
            ";

  