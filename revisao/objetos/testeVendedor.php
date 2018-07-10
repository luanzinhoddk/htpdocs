<?php 

    require_once 'classes/Pessoa.class.php';
    require_once 'classes/Vendedor.class.php';

    $vendedor = new Vendedor('Luan', 19, 'm','12102015', '1250,50');

    echo "Nome: {$vendedor->getNome()},
    Idade: {$vendedor->getIdade()},
    Sexo: {$vendedor->getSexo()},
    Matricula: {$vendedor->getMatricula()},
    Salário: {$vendedor->getSalario()}
    ";
