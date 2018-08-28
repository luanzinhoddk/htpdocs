<?php 

require_once(__DIR__ . "/../classes/modelo/Produto.class.php"); 
require_once(__DIR__ . "/../classes/modelo/Marca.class.php"); 
require_once(__DIR__ . "/../classes/dao/ProdutoDao.class.php"); 

$dao = new ProdutoDao();

echo("<pre>");
var_dump($dao->findById(4));
echo("</pre>");



