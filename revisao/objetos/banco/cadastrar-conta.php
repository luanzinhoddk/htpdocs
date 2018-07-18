<?php

require_once "classes/ContaCorrente.class.php";
require_once "classes/Cliente.class.php";
require_once "classes/BancoDB.class.php";

$cliente = new Cliente();
$cliente->setNome($_POST['nome']);
$cliente->setCpf($_POST['cpf']);
$cliente->setEmail('teste@teste');

$conta = new ContaCorrente();
$conta->setCliente($cliente);
$conta->setAgencia($_POST['agencia']);
$conta->setNumero($_POST['conta']);
$conta->setSaldo($_POST['saldo']);

$banco = new BancoDB();
$banco->salva($conta);

header('location: index.php');
