<?php

require_once __DIR__ .'/classes/modelo/Sexo.class.php';
require_once __DIR__ .'/classes/dao/SexoDAO.class.php';

$dao = new SexoDAO();




/*$sexo = $dao->findByNome('masc');

$sexo->setNome('MASCULINO');

$dao->update($sexo);

/*$sexo = new Sexo();
$sexo->setNome('teste');
$sexo->setSigla('t');

$dao->save($sexo);

    //echo("{$sexo->getId()} - {$sexo->getNome()} - {$sexo->getSigla()}");

        