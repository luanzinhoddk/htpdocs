<?php

class Vendedor extends Pessoa {

    private $matricula;
    private $salario;


function __construct($nome, $idade, $sexo, $matricula, $salario) {
    parent::__construct($nome, $sexo, $idade);
    $this->setMatricula($matricula);
    $this->setSalario($salario);
}

function setMatricula($matricula) {
    $this->matricula = $matricula;
}

function getMatricula() {
    return $this->matricula;
}

function setSalario($salario) {
    $this->salario = $salario;
}

function getSalario() {
    return $this->salario;
}
}